<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

session_start();
require "connection.php";
$errors = array();

$mail=new PHPMailer(true);

$alert = '';
if(isset($_POST['check-email'])){
    try{
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->SMTPAuth=true;
                    $mail->Username='websitetest20223@gmail.com'; // Gmail addres-
                    $mail->Password='owmxdcckeqhltdtu'; // Gmail address          
                    $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port='587';
                    $mail->setFrom('websitetest20223@gmail.com'); // Gmail address
                    $mail->addaddress($email); // Email ad
                    $mail->isHTML (true);
                    $mail->Subject='New Inquiry';
                    $mail->Body="<h3><br> Code: $code <br></h3>";
                    $mail->send();
                    $alert='<div class="alert-success">
                                <span>Message Sent! Thank you for contacting us.</span>
                            </div>';
                    header('location: reset-code.php');
                    exit();
                }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    
        
    }catch (Exception $e){
        $alert='<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                </div>';
    }
}
?>