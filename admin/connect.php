<?php 

$con=mysqli_connect("localhost","root","","demo");
if (!$con) {
    # code...
    echo mysqli_connect_error();
}

?>