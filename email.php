<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpEmail/PHPMailer/src/Exception.php';
require './phpEmail/PHPMailer/src/PHPMailer.php';
require './phpEmail/PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $name=htmlentities($_POST['name']);
    $subject=htmlentities($_POST['subject']);
    $email=htmlentities($_POST['email']);
    $message=htmlentities($_POST['message']);

    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='svnbairsolutions@gmail.com';
    $mail->Password='txyihfrntjwtesbn';
    $mail->Port=465;
    $mail->SMTPSecure='ssl';
    $mail->isHTML(true);
    $mail->setFrom($email,$name);
    $mail->addAddress('svnbairsolutions@gmail.com');
    $mail->Subject=("$email($subject)");
    $mail->Body=$message;
    $mail->send();
    header("Location: ./index.html");
}

?>