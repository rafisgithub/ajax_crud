<?php
 $connect = mysqli_connect("localhost","root","","ajax_crud");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$insert = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";


$query = mysqli_query($connect,$insert);
if($query){
    echo "Data insert successfully";
}else{
    echo "Data insert failed";
}
?>
