<?php 
session_start();
$name=$_POST["name"];
$pass=$_POST["pass"];

include "connect.php";


$sql="select * from user where username='$name' and password='$pass'";

$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>0){
    $_SESSION["log"]=true;
    header("Location:home.html");
}else{
   echo "error";;
}

?>