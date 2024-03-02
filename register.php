<?php 

$name=$_POST["name"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pass=$_POST["pass"];


include "connect.php";

$sql="insert into user values(NULL,'$name','$email','$uname','$pass')";

$res=mysqli_query($con,$sql);

if ($res) {
    # code...
    header("Location:login.html");
}else{
    echo "error";
}


?>