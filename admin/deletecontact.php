<?php 

$id=$_GET["id"];

include "connect.php";

$sql="delete from user where id='$id'";

if (mysqli_query($con,$sql)) {
    # code...
    header("Location:contact.php");
}



?>