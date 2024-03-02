<?php 
$id=$_POST["id"];
$name= $_POST['name'];
$email= $_POST['email'];
$uname= $_POST['uname'];
$pass =$_POST['pass'];

include "connect.php";


$sql="update user set name='$name', email='$email', username='$uname',password='$pass' where id='$id'";
if(mysqli_query($con,$sql)) {
    header("location:users.php");
} else{
    echo "error";
}
?>