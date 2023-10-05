<?php
class CreateForm{
    private $caption;

    public function __construct(string $caption)
    {
        $this->caption = 'Заголовок';
    }elements
    public function viewForm(array $, $message = " "){

      $stringForm = '<h1>'.$this->caption.'</h1>
       <form action="" method="post"  role="form" class="form-inline">';
      foreach($elements as $row){
        $stringForm .= '<div class="form-group mb-2 col-4">
        <input type="'.$row['type'].'" name="'.$row['name'].'">
        </div>';
      }  
      $stringForm .='</form><p>'.$message.'</p>';
      echo $stringForm;
    }

}
?>