<?php
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $email      = $_POST['email'];
    $message    = $_POST['message'];

    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //Send mail using gmail
//try{
    $mail->IsSMTP();              // telling the class to use SMTP
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com'; // sets GMAIL as the SMTP server
    $mail->SMTPAuth = true;       // enable SMTP authentication
    $mail->SMTPSecure = "tls";    // sets the prefix to the servier
    $mail->Port = 587;            // set the SMTP port for the GMAIL server
    $mail->Username = "wgc13dt@gmail.com"; // GMAIL username
    $mail->Password = "silence123";
    $mail->isHTML(true);
    
    $email_to="pearsonas@wgc.school.nz";  // where the email will be sent to
    $name_to="Ashleigh Pearson"; 
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo $email." is an invalid email format"; 
      die();
    }

    $mail->AddAddress($email_to, $name_to);
    $mail->SetFrom($email, $firstname, $lastname);
    $mail->Subject = "Art | A. Pearson - ".$subject;
    $mail->Body = $message;
    
    try{
        $mail->Send();
    } catch(Exception $e){
        echo "<h1>Nope.</h1>";
        die();
    }

    header('Location: contact.html');
    
?>