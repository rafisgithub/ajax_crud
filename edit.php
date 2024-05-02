<?php
 $connect = mysqli_connect("localhost","root","","ajax_crud");

 $user_id = $_GET['user_id'];

 $select = "SELECT * FROM users WHERE id = $user_id";
 $ex = mysqli_query($connect,$select);

 $row = mysqli_fetch_array($ex);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Edit page</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Edit page</h1>
    <div class="container">
       
            <input id="name" type="text" value="<?php echo $row['name'] ?>" placeholder="Name">
            <input id="email" type="email" value="<?php echo $row['email'] ?>" placeholder="Email">
            <input id="password" type="password" value="<?php echo $row['password'] ?>" name="password" placeholder="Password">
            <button class="edit" onclick="UpdateData(<?php echo $row['id'] ?>)">Update</button>
</div>
</body>
</html>