<HTML>
    <HEAD>
        <TITLE>Login</TITLE>
    </HEAD>

    {if {$cond} eq 1}
        {* Login *}
        <div align="center">
        <BODY bgcolor="#68ACFF">
        <h1>Hello Unregistered User!</h1>
        <h1>Login:</h1>
            <form method="get" action="index.php">
                <label>Login</label><br>
                <input type="text" pattern="[a-zA-Z0-9]+"  maxlength="20" name="login" required/><br>
                <label>Password</label><br>
                <input type="password" pattern="[a-zA-Z0-9]+" name="password"  maxlength="20" required/><br>
                <input type="submit" name="submit" value="Login"/><br>
            </form>
        <h1>Or Register</h1>
            <form method="get" action="index.php">
                <input type="submit" name="submit" value="Registration"/><br>
            </form>
        </BODY>
        </div>
    {/if}
    {if {$cond} eq 2}
        {* Register *}
        <BODY bgcolor="#60FF6E">
        <div align="center">
        <h1>Input you data:</h1>
            <h3>
                After filling, your email will receive a letter with reference to the activation of your account (indicating the correct email address)
            </h3>

        <script language="JavaScript" type="text/javascript">
        {literal}
            function validate(){
                var log=document.forms["form"]["login"].value;
                var em=document.forms["form"]["email"].value;
                var pas=document.forms["form"]["password"].value;
                var r_Pas=document.forms["form"]["r_Password"].value;
                at=em.indexOf("@");
                dot=em.indexOf(".");

                if (log.length<5||log.length>15){
                    document.getElementById("name_fail").innerHTML="*password must be greater than 5 and less than 15 characters of symbols!";
                    return false;
                }

                if (em.length<5||em.length>25){
                    document.getElementById("email_fail").innerHTML="*you entered an incorrect address";
                    return false;
                }

                if (at<1 || dot <1){
                    document.getElementById("email_fail").innerHTML="*email incorrectly";
                    return false;
                }

                if (pas.length<5||pas.length>20){
                    document.getElementById("pas_fail").innerHTML="*password must be greater than 5 and less than 20 characters of symbols!";
                    return false;
                }

                if (pas != r_Pas){
                    document.getElementById("notEq").innerHTML="*Passwords must match";
                    return false;
                }
            }
        </script>
        {/literal}

            <form method="get" action="index.php" name='form'  onsubmit='return validate()'">
                <label>Name</label><br>
                <input type="text" name="name" pattern="[a-zA-Z0-9]+"  maxlength="20" required/><br>
                <label>Surname</label><br>
                <input type="text" name="surname" pattern="[a-zA-Z0-9]+"  maxlength="20" required/><br>
                <label>Login</label><br>
                <input type="text" name="login" pattern="[a-zA-Z0-9]+"  maxlength="20" required/><span style="color:red" id="name_fail"></span><br>
                <label>Email</label><br>
                <input type="email" name="email" required/><span style="color:red" id="email_fail"></span><br>
                <label>Password</label><br>
                <input type="password" name="password" pattern="[a-zA-Z0-9]+"  maxlength="20" required/><span style="color:red" id="pas_fail"></span><br>
                <label>Repeat Password</label><br>
                <input type="password" name="r_Password" pattern="[a-zA-Z0-9]+"  maxlength="20" required/><span style="color:red" id="notEq"></span><br>
                <input type="submit" name="submit" value="Register"/><br>
            </form>
        </div>
        </BODY>

    {/if}
    {if {$cond} eq 3}
        <div align="center">
        <BODY bgcolor="#FF5B84">
        <h1>Hello {$name}</h1>
        {* Output personal data: *}
        <h2>UserData:
            <ul>
                <li>Name:{$name}</li>
                <li>Surname:{$surname}</li>
                <li>Email:{$email}</li>
                <li>Login:{$login}</li>
            </ul>
        </h2>
        <form method="get" action="index.php">
            <input type="submit" name="submit" value="Logout"/><br>
        </form>
        <form method="get" action="index.php">
            <input type="submit" name="submit" value="EditInfo"/><br>
        </form>
    </div>
    </BODY>
    {/if}

    {if {$cond} eq 4}
        <div align="center">
        <BODY bgcolor="#EDCB34">
        <h1>Input new data:</h1>
            <form method="get" action="index.php">
                <label>NewName</label><br>
                <input type="text" name="name" pattern="[a-zA-Z0-9]+"  maxlength="20" required/><br>
                <label>NewSurname</label><br>
                <input type="text" name="surname" pattern="[a-zA-Z0-9]+"  maxlength="20" required/><br>
                <label>NewPassword</label><br>
                <input type="password" name="password" pattern="[a-zA-Z0-9]+"  maxlength="20" required/><br>
                <label>Input You login to confirm</label><br>
                <input type="text" name="login" pattern="[a-zA-Z0-9]+"  maxlength="20" required/><br>
                <input type="submit" name="submit" value="Edit"/><br>
            </form>
    </div>
    </BODY>
    {/if}

</HTML>