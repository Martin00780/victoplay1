<?php 

class db {

    public $con;
    private $host = "localhost";
    private $userhost = "root";
    private $passwordhost = "";
    private $namehost = "people" ;

    public function __construct()
    {
        $this->con=mysqli_connect($this->host,$this->userhost,$this->passwordhost,$this->namehost) or mysqli_error("Error");
    }
}



?>
