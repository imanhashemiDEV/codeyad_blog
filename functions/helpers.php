<?php
//require_once "../libraries/PHPMailer/src/PHPMailer.php";
//require_once "../libraries/PHPMailer/src/SMTP.php";
//use PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;

const BASE_URL = "http://localhost/codeyad-blog/";

function asset($file){
    return BASE_URL . $file;
}

function url($url){
    return BASE_URL . $url;
}

function uploadImage($image,$table){
    $name = time().$image['name'];
    move_uploaded_file($image['tmp_name'],__DIR__."/../images/$table/".$name);
   return $name;
}

function sendEmail()
{
    try {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->CharSet='UTF-8';
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'e4a5a35471e0ff';
        $mail->Password = 'dc5e05474e9c8d';

        //Recipients
        $mail->setFrom('codeyad@gmail.com', 'Ali');
        $mail->addAddress('hashemi.iman@gmail.com', 'iman');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'سلام ایمان';
        $mail->Body    = 'متن فارسی';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}