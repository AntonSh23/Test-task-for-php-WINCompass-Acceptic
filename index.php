<?php
require 'libs/Smarty.class.php';
require_once 'User.php';
ini_set('display_errors', 0);

session_start();

$smarty = new Smarty;
$newUser = new User();//Создаем Экземпляр класса User
$_SESSION['condition'] = 1;// То чем я рендерю формы в шаблоне 


//если передали через форму значение 'Login', то вызываем метод класса User -  _login передаем ему
// параметры полученные из формы через глобальный массив $_POST и присваиваем $_SESSION['condition'] значение 3
if($_GET['submit']=='Login') {
    if($newUser->_login($_GET['login'], $_GET['password'])){
        $_SESSION['condition'] = 3;
    };
}

//если передали через форму значение 'Registration', то  присваиваем $_SESSION['condition'] значение 2
elseif($_GET['submit']=='Registration'){
    $_SESSION['condition'] = 2;
}

//если передали через форму значение 'Register', то вызываем метод класса User -  register передаем ему
// параметры полученные из формы через глобальный массив $_POST, вызываем метод sendCheckEmail , который отправляет
//ссылку на активацию акаунта и присваиваем $_SESSION['condition'] значение 1 если все прошло успешно и 2 если были ошибки
elseif($_GET['submit']=='Register') {
    if($newUser->register($_GET['name'], $_GET['surname'], $_GET['login'], $_GET['email'], $_GET['password'], $_GET['r_Password'])){
    $newUser->sendCheckEmail($_GET['email']);
    $_SESSION['condition'] = 1;
    } else {
        $_SESSION['condition'] = 2;
    }
}

//если передали через форму значение 'Register', то вызываем метод logout, который уничтожает сессию и экземпляр объекта.
elseif($_GET['submit']=='Logout') {
    $newUser->logout();
    $_SESSION['condition'] = 1;
}

//если передали через форму значение 'EditInfo', то  присваиваем $_SESSION['condition'] значение 4
elseif($_GET['submit']=='EditInfo') {
    $_SESSION['condition'] = 4;
}

//если передали через форму значение 'EditInfo',то вызываем метод editData, который изменяет личные данные пользователя.
//и присваиваем $_SESSION['condition'] значение 3
elseif($_GET['submit']=='Edit'){
    $newUser->editData($_GET['name'], $_GET['surname'], $_GET['password'], $_GET['login']);
    $_SESSION['condition']=3;
}//если передали через глобальный массив 'confirm' , то берем его значение, сравниваем с тем которое сгенерировали
// , и записываем true в поле бд которое по умолчанию 0;
elseif(!empty($_GET['confirm'])){
    $newUser->acceptRegFromEmail($_GET['confirm']);
}


$smarty->assign('cond', $_SESSION['condition'] , true);
$smarty->assign('name', $newUser->name ,true);
$smarty->assign('surname', $newUser->surname ,true);
$smarty->assign('login', $newUser->login ,true);
$smarty->assign('email', $newUser->email ,true);

$smarty->display('index.tpl');

