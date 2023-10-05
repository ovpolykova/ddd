<?php
class CreateTable{

    public function viewTable(array $header,  $data){
        $str = '<div><table class="table"><tr>';
        foreach($header as $col){
            $str .='<td>'.$col.'</td>';
        }
        $str .='</tr>';
        foreach($data as $row){
            $str .='<tr>';
            foreach($row as $cell){
                $str .='<td>'.$cell.'</td>';
            }
            $str .='</tr>';
        }
        $str .='</table></div>';
        echo $str;
    }
    
}
?>