<?php

class User
{
    //Настройки базы данных
    public $host = 'localhost';
    public $dataBaseLogin = 'my_db_user';
    public $dataBasePassword = '1234';
    public $dataBse = 'test_users';

    //Свойства класса
    public $name, $surname, $login, $email, $password, $confirm;

    //Методы
    function register($u_name, $u_surname, $u_login, $u_email, $u_password, $u_Rpassword){
        if ($u_password==$u_Rpassword&&$this->similarity($u_login,$u_password)){
        $this->name=$this->CheckUserData($u_name);
        $this->surname=$this->CheckUserData($u_surname);
        $this->login=$this->CheckUserData($u_login);
        $this->email=$this->CheckUserData($u_email);
        $this->password=$this->CheckUserData($u_password);
        $this->saveIntoDataBase($u_name, $u_surname, $u_login, $u_email, $u_password);
        return true;
        }else {
            echo "<h1 align='center'>Passwords doesn't match!</h1>";
            return false;
        }
    }

    public function CheckUserData($data)
    {
        $result = htmlspecialchars($data, ENT_QUOTES);
        return addslashes($result);
    }

    public function _login($u_login, $u_password){
        $this->connection();
        $this->login=$this->CheckUserData($u_login);
        $login = $this->CheckUserData($u_login);
        $password = $this->CheckUserData($u_password);
        $query = mysql_query("SELECT * FROM users WHERE login = '$login'");
        $user_data = mysql_fetch_array($query);

        if ($user_data[5]==$password){
            $_SESSION['userLogin'] = $login;
            $this->name=$user_data[1];
            $this->surname=$user_data[2];
            $this->login=$user_data[3];
            $this->email=$user_data[4];
            $this->password=$user_data[5];
            return true;
        }
        else {
            echo "<h1 align='center'>Wrong Login Or Password!</h1>";
        }
    }

    public function sendCheckEmail($email){
        $m_conf = $this->confirm=mt_rand(5, 15);
        mail($email, 'Accepting registration', "Confirm your request by the proposed link: " .
            "http://localhost/testForPhp.ru/index.php?confirm=" . $m_conf );
    }

    public function acceptRegFromEmail($conf){
        if ($conf == $this->confirm){
            $this->connection();
            $login = $this->login;
            mysql_query("UPDATE users  SET confirm = 'true' WHERE login=$login")or die("Invalid query: " . mysql_error());
            echo 'u r activate u account ';
        }
    }

    public function similarity($u_login,$u_email){
        $this->connection();
            $query = mysql_query("SELECT * FROM users WHERE login = '$u_login'");
            $user_data = mysql_fetch_array($query);
            if(empty($user_data[3])){
                return true;
            }else{
                echo "<h1 align='center'>User already registered</h1>";
                return false;
        }
            $query = mysql_query("SELECT * FROM users WHERE email = '$u_email'");
            $user_data = mysql_fetch_array($query);
            if(empty($user_data[4])){
                return true;
            }else{
                echo "<h1 align='center'>User already registered</h1>";
                return false;
            }
    }


    public function editData($u_name,$u_surname,$u_password, $u_login){
        $this->connection();
        $this->name=$this->CheckUserData($u_name);
        $this->surname=$this->CheckUserData($u_surname);
        $this->password=$this->CheckUserData($u_password);
        mysql_query("UPDATE users  SET name='$u_name', surname='$u_surname', password='$u_password' WHERE login='$u_login'")or die("Invalid query: " . mysql_error());

        $query = mysql_query("SELECT * FROM users WHERE login = '$u_login'");
        $user_data = mysql_fetch_array($query);

        $this->name=$user_data[1];
        $this->surname=$user_data[2];
        $this->login=$user_data[3];
        $this->email=$user_data[4];
        $this->password=$user_data[5];
    }

    public function logout(){
        session_start();
        session_destroy();
        unset($newUser);
    }

    public function connection()
    {
        $connect = mysql_connect($this->host, $this->dataBaseLogin, $this->dataBasePassword) or die(mysql_error());
        mysql_select_db($this->dataBse);
    }

    public function saveIntoDataBase($name,$surname,$login, $email,$password)
    {
        $this->connection();
        mysql_query("INSERT INTO users (name, surname, login, password, email) VALUES ('$name', '$surname', '$login', '$password', '$email')")or die("Invalid query: " . mysql_error());
    }
}
