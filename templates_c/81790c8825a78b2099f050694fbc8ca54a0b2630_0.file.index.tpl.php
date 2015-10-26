<?php /* Smarty version 3.1.27, created on 2015-10-26 01:49:41
         compiled from "C:\wamp\www\testForPhp.ru\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25638562d78a50ea136_00243274%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81790c8825a78b2099f050694fbc8ca54a0b2630' => 
    array (
      0 => 'C:\\wamp\\www\\testForPhp.ru\\templates\\index.tpl',
      1 => 1445820503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25638562d78a50ea136_00243274',
  'variables' => 
  array (
    'cond' => 1,
    'name' => 1,
    'surname' => 1,
    'email' => 1,
    'login' => 1,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562d78a52223a0_62146409',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562d78a52223a0_62146409')) {
function content_562d78a52223a0_62146409 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25638562d78a50ea136_00243274';
?>
<HTML>
    <HEAD>
        <TITLE>Login</TITLE>
    </HEAD>

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['cond']->value;
$_tmp1=ob_get_clean();
if ($_tmp1 == 1) {?>
        
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
    <?php }?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['cond']->value;
$_tmp2=ob_get_clean();
if ($_tmp2 == 2) {?>
        
        <BODY bgcolor="#60FF6E">
        <div align="center">
        <h1>Input you data:</h1>
            <h3>
                After filling, your email will receive a letter with reference to the activation of your account (indicating the correct email address)
            </h3>



        <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">
        
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
        <?php echo '</script'; ?>
>
        

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

    <?php }?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['cond']->value;
$_tmp3=ob_get_clean();
if ($_tmp3 == 3) {?>
        <div align="center">
        <BODY bgcolor="#FF5B84">
        <h1>Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
        
        <h2>UserData:
            <ul>
                <li>Name:<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
                <li>Surname:<?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
</li>
                <li>Email:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</li>
                <li>Login:<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</li>
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
    <?php }?>

    <?php ob_start();
echo $_smarty_tpl->tpl_vars['cond']->value;
$_tmp4=ob_get_clean();
if ($_tmp4 == 4) {?>
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
    <?php }?>

</HTML><?php }
}
?>