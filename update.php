<?php
 $connect = mysqli_connect("localhost","root","","ajax_crud");

 $user_id = $_GET['user_id'];
 $name = $_GET['name'];
 $email = $_GET['email'];
 $passowrd = $_GET['password'];

 $updae = "UPDATE users SET name='$name',email='$email',password='$passowrd' WHERE id=$user_id";
 $ex = mysqli_query($connect,$updae);
 if($ex){
    echo "Update Successfully";
 }else{
    echo "Failed";
 }
?>