<?php
session_start();
$script = 'login.php';
$punkt = 'Войти';
if(!empty($_SESSION['role'])){
    $script = 'logout.php';
    $punkt = 'Выйти';
    if ($_SESSION['role'] == 'Завуч'){
        header("Location: ins_grupp.php");
    }
    if ($_SESSION['role'] == 'Зам.дир'){
        header("Location: ins_stud.php");
    }
}
include 'temp/head.php';
include 'temp/nav.php';
include 'Classes/CreateTable.php';


$headerTable = ['id', 'fio', 'login'];
$dataTable = [[1,'aaaaa', '111'],
[2,'aaaaa', '222'],
[3,'bbbbbbb', '333'],
[4,'ccccc', '444'],];
$table = new CreateTable();
$table->viewTable($headerTable, $dataTable);
?>