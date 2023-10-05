<?php
class DataBase{
    private $connect;

    public function __construct()
    {
        $this->connect = new mysqli('localhost', 'root', 'root', 'stip');
    }
    public function SelectSql($sql){
//var_dump($sql);
      $result = $this->connect->query($sql) or die('Error');
      return $result;
    }

}
?>