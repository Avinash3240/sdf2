<?php

session_start();
include "conn.php";

if(empty($_POST['email'])){
    header("Location: userlogin.html?error=email is required");
    echo "Email is reqired";
    exit();
}
if($_POST['email']){
    $x =  $_POST['email'];
}

$_POST['email'] = $_SESSION['email'];

//mysql_queries
$sql = "select * from user_db where email = '$x' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if( $row['password'] == $_POST['password']){
  header("Location:userhome.html");
}
else{
    echo "window.location.prompt('Enter Valid Details')";
    header("Location:userlogin.html");
}
?>