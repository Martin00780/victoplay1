<?php

require_once "data.class.php"; 


class page_1 extends  db{


    public $sql ;
    public $result ;

    public function page1(){
        $this->sql = "SELECT * FROM game GROUP BY id_Name DESC";
        $this->result = mysqli_query($this->con,$this->sql) or die(mysqli_error("sql error sql"));
        return $this->result; 
    }
}

?>