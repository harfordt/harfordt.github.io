<?php

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


//test the values are POSTing okay

    echo "Full name: " . $fullname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Subject: " . $subject . "<br>";
    echo "Message: " . $message . "<br>";


    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    
    $mail->IsSMTP();              
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;       
    $mail->SMTPSecure = "tls";   
    $mail->Port = 587;            
    $mail->Username = "wgc13dt@gmail.com"; // GMAIL username
    $mail->Password = "silence123"; // GMAIL password

    $email_to="akosahan@wgc.school.nz";
    $name_to="Annisha Akosah";

    $mail->AddAddress($email_to, $name_to);
    $mail->SetFrom($email, $fullname);
    $mail->Subject = "Annisha Akosah Photography - " .$subject;
    $mail->Body = "Email: ". $email . "\n\n" . $message;

try{
    $mail->Send();
} catch(Exception $e){
    echo"<h1>Nope.</h1>";
    die();
}

header('Location: index.html');

?>