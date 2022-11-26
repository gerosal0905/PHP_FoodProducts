<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail=new PHPMailer(true);

$alert = '';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='websitetest20223@gmail.com'; // Gmail addres-
        $mail->Password='owmxdcckeqhltdtu'; // Gmail address          
        $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port='587';
        $mail->setFrom('websitetest20223@gmail.com'); // Gmail address
        $mail->addaddress('websitetest20223@gmail.com'); // Email ad
        $mail->isHTML (true);
        $mail->Subject='New Inquiry';
        $mail->Body="<h3>Name:$name <br>Email: $email <br>Message:$message</h3>";
        $mail->send();
        $alert='<div class="alert-success">
                    <span>Message Sent! Thank you for contacting us.</span>
                </div>';
    }catch (Exception $e){
        $alert='<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                </div>';
    }
}
?>