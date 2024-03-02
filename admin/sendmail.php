<?php 
$id=$_POST["id"];
$name= $_POST['name'];
$email= $_POST['email'];
$num= $_POST['num'];
$query =$_POST['query'];
$reply =$_POST['reply'];

include "connect.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\assignmentnewphp\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\assignmentnewphp\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\assignmentnewphp\PHPMailer\src\SMTP.php';


$sql="update contact set name='$name', email='$email', number='$num',query='$query', reply='$reply' where id='$id'";
if(mysqli_query($con,$sql)) {
    $mail = new PHPMailer(true);
    
    $aemail = '';
    $password = '';
    
    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $aemail;
        $mail->Password = $password;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 25;
    
        // Recipient information
        $mail->setFrom($aemail, $email);
        $mail->addAddress($email, $name);
        $mail->addReplyTo($aemail, 'Mikhil A');
    
        //Attachments
            //Add attachments
        // $mail->addAttachment('Chrysanthemum.jpg', 'Chrysanthemum.jpg');
    
        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Reply From Mikhil A';
        $mail->Body    =$reply;
    
        $mail->send();
        header("Location:contact.php");
    } catch (Exception $e) {
        echo 'Failed to send email: ', $mail->ErrorInfo;
    }
    
} else{
    echo "error";
}
?>
