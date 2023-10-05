<?php
include 'Classes/CreateForm.php';
include 'Classes/DataBase.php';
if(!empty($_POST)){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql ="select * from users where login='$login' and password='$password'";
    $db = new DataBase();
    $result = $db->SelectSql($sql);
    $message ='';
    $row = mysqli_fetch_array($result);
    if(!empty($row['role'])){
        session_start();
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['login'] = $row['login'];
        header("Location:index.php");
    }
    else{
        $message = 'Не верен логин или пароль';
    }
}
include 'temp/head.php';
include 'temp/nav.php';




$formData = [['type' => 'text', 'name'=>'login'],
        ['type' => 'password', 'name'=>'password'],
          ['type' => 'submit', 'name'=>'autor']
    ];

$form = new CreateForm('Авторизация');
$form->viewForm($formData, $message);

?>