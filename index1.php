<?php
include 'temp/head.php';
include 'temp/nav.php';
include 'Classes/CreateForm.php';
include 'Classes/CreateTable.php';

$formData = [['type' => 'text', 'name'=>'login'],
        ['type' => 'password', 'name'=>'password'],
        ['type' => 'text', 'name'=>'fio'],
        ['type' => 'submit', 'name'=>'autor']
    ];


$headerTable = ['id', 'fio', 'login'];
$dataTable = [[1,'aaaaa', '111'],
[2,'aaaaa', '222'],
[3,'bbbbbbb', '333'],
[4,'ccccc', '444'],];
$table = new CreateTable();
$table->viewTable($headerTable, $dataTable);

$form = new CreateForm('autoriz');
$form->viewForm($formData);
?>