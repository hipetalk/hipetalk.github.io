<?php
error_reporting(0);
$msg="";

require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require("PHPMailer-master/src/Exception.php");

if(isset($_POST['submit'])){

$email = $_POST['email'];
$name = $_POST['name'];
$msg = $_POST['message'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); 

$mail->CharSet="UTF-8";
$mail->Host = "smtp.gmail.com";
//$mail->SMTPDebug = 1; 
$mail->Port = 465 ; //465 or 587

$mail->SMTPSecure = 'ssl';  
$mail->SMTPAuth = true; 
$mail->IsHTML(true);

//Authentication
$mail->Username = "nathinaenterprisescapstone@gmail.com";
$mail->Password = "capstone123";

//Set Params
$mail->SetFrom($email,$name);
$mail->AddAddress("nathinaenterprisescapstone@gmail.com");
$mail->Subject = "Inquiries";
$mail->Body ="<h2><b>Name: ".$name."<br>Email ".$email."<br>Message: ".$msg."</b></h2>";


    if(!$mail->Send()) {
        $msg = 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
    $msg = "Message sent";
    // $error ='Message sent';
    echo "<script>window.open('index.php','_self')</script>";
    }
    
}
?>		