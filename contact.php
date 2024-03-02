<?php 
session_start();
$name=$_POST["name"];
$email=$_POST["email"];
$num=$_POST["num"];
$query=$_POST["query"];

include "connect.php";
if (!$_SESSION["log"]) {
    # code...
    header("location:login.html");
}else{


$sql="insert into contact (id,name,email,number,query) values(Null,'$name','$email','$num','$query')";

$res=mysqli_query($con,$sql);

if ($res) {
    # code...
    header("location:thankyou.html");
}
mysqli_close($con);
}


?>