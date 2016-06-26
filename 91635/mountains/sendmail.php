<?php
    $fullname   = $_POST['name'];
    $email      = $_POST['email'];
    $yearlevel  = $_POST['yearlevel'];
    $subject    = $_POST['subject'];
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
    
    $email_to="vansaarloosfl@wgc.school.nz";  // where the email will be sent to
    $name_to="Floss"; 
    
   $mail->AddAddress($email_to, $name_to);
    $mail->SetFrom($email, $name);
    $mail->Subject = "Mountains - ".$subject;
    $mail->Body = $message;


/* checks that the email entered is valid*/
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo $email." is an invalid email format"; 
      die();
    }

  
  try{
    $mail->Send();
  } catch(Exception $e){
      echo "<h1>Nope.</h1>";
      die();
  }
    header('Location: contact.html');
?>