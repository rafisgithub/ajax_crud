<?php
$connect = mysqli_connect("localhost","root","","ajax_crud");

$user_id = $_POST['user_id'];
// echo(userId);exit;
$delete = "DELETE FROM users WHERE id=" . $user_id;
$query = mysqli_query($connect,$delete);
if($query){
    echo "Delete confirm";
}else{
    echo "Delete Failed";
}
?>