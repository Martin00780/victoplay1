<?php

require_once "data.class.php";

class people extends  db
{
    public $name;
    public $game;
    public $price;
    public $Password;
    private $temp;
    private $newname;
    private $open;

    public function up_img($name_img, $tmpname)
    {
        $this->name_img = $name_img;
        $this->tmpname = $tmpname;
        $this->temp = explode('.', $name_img);
        $this->newname = rand(0, rand(1, 32000)) . '.' . end($this->temp);

        move_uploaded_file($tmpname, "img/" . $this->newname);
    }
    public function s_product()
    {
        // echo $this->name;
        // echo '<br>';
        // echo $this->game;
        // echo '<br>';

        // echo $this->pirce;
        // echo '<br>';

        // echo $this->Password;
        // echo '<br>';

        

        // $this->open = "INSERT INTO game (name,games,pirce,img,Pasword)
        // VALUES ('$this->name','$this->game', '$this->pirce','$this->Password','$this->newname')";
        $this->open =  "INSERT INTO `game` (`id_Name`, `name`, `games`, `pirce`, `Password`, `img`) VALUES (NULL, '$this->name', '$this->game', '$this->pirce', '$this->Password', '$this->newname')";
        // echo $this->con->query($this->open);


        if ($this->con->query($this->open) == TRUE) {
            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มข้อมูลสำเร็จ');";
            echo "window.location = 'm.php'; ";
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('กรุณากรองข้อมูลใหม่);";
            echo "window.location = 'product.php'; ";
            echo "</script>";
        }
    }
}
