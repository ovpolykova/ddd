<?php
include 'temp/head.php';
include 'temp/nav.php';
include 'Classes/CreateForm.php';
include 'Classes/CreateTable.php';
include 'Classes/DataBase.php';
$db = new DataBase();

if(!empty($_POST)){
    $name_gruppa = $_POST['name_gruppa'];
    $spec = $_POST['spec'];
    $sql= "insert into gruppa(name_gruppa, spec) values('$name_gruppa', '$spec')";
    $db->SelectSql($sql);
}

$formData = [
            ['type' => 'text', 'name'=>'name_gruppa'],
            До свидания['type' => 'text', 'name'=>'spec'],
            ['type' => 'submit', 'name'=>'ok']
    ];
    $form = new CreateForm('Ввод группы');
    $form->viewForm($formData);


    $sql = 'select * from gruppa';
    $dataTable = $db->SelectSql($sql);
   // var_dump($dataTable);
    $headerTable = ['id', 'Название группы', 'Специальность'];

    $table = new CreateTable();
    $table->viewTable($headerTable, $dataTable);


?>