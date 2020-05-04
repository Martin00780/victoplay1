
<?php
require_once "people.class.php";

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $game = $_POST['game'];
    $price = $_POST['price'];
    $Password = $_POST['password'];


    $name_img = $_FILES['img']['name'];
    $tmpname = $_FILES['img']['tmp_name'];



    $obj = new people;
    $obj->name = $name;
    $obj->game = $game;
    $obj->pirce = $price;
    $obj->Password = $Password;

    $obj->up_img($name_img, $tmpname);
    $obj->s_product();
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<body>


   
        <div class="container">
            <div class="row">
                <div class="col-sm-2  mt-3"></div>
                <div class="col-sm-6  mt-3 ">
                    <form method="post" enctype="multipart/form-data" action=''>
                        <div class="form-group">
                            <div class="form-group row">

                                <div class="col-sm-9">
                                    <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label"> name </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">

                                    </select>
                                </div>
                            </div>

                        </div>


                        <div class="form-group">
                            <div class="form-group row">

                                <div class="col-sm-9">
                                    <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label"> password </label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp">


                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-group row">

                                <div class="col-sm-9">
                                    <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label"> game </label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="game" placeholder="เลือกเกมส์">
                                        <option value="">--- เลือกเกมส์ ---</option>
                                        <option value="Rov"> ROV </option>
                                        
                                      
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-group row">

                                <div class="col-sm-9">
                                    <label for="exampleFormControlSelect2" class="col-sm-99 col-form-label"> กรุณเลือกแรงค์ของคุณ </label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="game" placeholder="กรุณเลือกแรงค์ของคุณ">
                                        <option value="">--- เลือกเกมส์ ---</option>
                                        <option value="Bronze"> Bronze </option>
                                        <option value="Sliver"> Sliver </option>
                                        <option value="Gold"> Gold </option>
                                        <option value="Platinum"> Platinum </option>
                                        <option value="Diamond"> Diamond </option>
                                        <option value="Commander"> Commander </option>   
                                        <option value="conqueror"> conqueror </option>                                
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-group row">

                                <div class="col-sm-9">
                                    <label for="exampleFormControlSelect2" class="col-sm-99 col-form-label">กรุณเลือกแรงค์ที่คุณอยากจะขึ้น </label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="game" placeholder="กรุณเลือกแรงค์ที่คุณอยากจะขึ้น">
                                        <option value="">--- เลือกเกมส์ ---</option>
                                        <option value="Bronze"> Bronze </option>
                                        <option value="Sliver"> Sliver </option>
                                        <option value="Gold"> Gold </option>
                                        <option value="Platinum"> Platinum </option>
                                        <option value="Diamond"> Diamond </option>
                                        <option value="Commander"> Commander </option>   
                                        <option value="conqueror"> conqueror </option>                                
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">

                            <div class="form-group">
                                <div class="form-group row">

                                    <div class="col-sm-9">
                                        <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label"> price </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="price" aria-describedby="emailHelp">

                                    </div>
                                </div>
                              
                                    <div class="form-group row" id="imageloadbutton">

                                        <div class="custom-file col-sm-9 ">
                                            <label for="inputDetails" class="col-sm-3 col-form-label">ภาพการโอนเงิน</label>
                                            <div class="col-sm-0 ">
                                            </div>
                                            <div class="col-sm-12 mr-1">
                                                <input type="file" class="custom-file-input" id="customFile" name="img" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>




</body>

</html>