<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if(isset($_POST['submitContact'])){

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);


    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'mtaneja306@gmail.com';                     //SMTP username
        $mail->Password   = 'dduagsnxircwtmkw';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('mtaneja306@gmail.com', 'Sender');
        $mail->addAddress('mohittaneja156@gmail.com', 'Mohit Taneja');     //Add a recipient
        $mail->addReplyTo('mtaneja306@gmail.com', 'Mohit Taneja');


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Enquiry';
        $mail->Body    = ' <h1>Hello! , You got a new enquiry</h1>
        <h4>Name : '.$name.'</h4>
        <h4>Phone : '.$phone.'</h4>
        <h4>Email : '.$email.'</h4>
        <h4>Message : '.$message.'</h4>

        ';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

else{
    header('Location: contactus.php');
    exit(0);
}
?>