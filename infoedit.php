<?php
   $link = mysqli_connect("localhost","guviregi_table","rajuraju1234","guviregi_table");
   $name =  $_POST["name"];
   $email = $_POST["email"];
   $age = $_POST['age'];
   $phone = $_POST['phone'];
   
   
   $edit = mysqli_query($link,"update tsraj set firstname='$name',age='$age',phone='$phone' where email='$email'");

    if($edit)
    {
        echo "successfully edited your information";
    }
    else
    {
        echo mysqli_error();
    }
   

?>