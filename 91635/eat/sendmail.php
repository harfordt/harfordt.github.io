<?php
   
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $subject = $_POST["subject"];    
    $message = $_POST["message"];


    // text the value are posting okay
    echo "Full name: " . $fullname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone number: " . $phonenumber . "<br>";
    echo "Subject: " . $subject . "<br>";
    echo "Message: " . $message . "<br>";

    require "phpmailer/PHPMailerAutoload.php";
    $mail = new PHPMailer;

    $mail->IsSMTP();              
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;       
    $mail->SMTPSecure = "tls";   
    $mail->Port = 587;            
    $mail->Username = "wgc13dt@gmail.com"; // GMAIL username
    $mail->Password = "silence123";

    $email_to="mclaughlinas@wgc.school.nz";
    $name_to="Ashleigh McLaughlin";

    $mail->AddAddress($email_to, $name_to);
    $mail->SetFrom($email, $fullname);
    $mail->Subject = "Contact - ".$subject;
    $mail->Body = "Year level ". $yearlevel . "\n\nMessage:\n" . $message;

    $mail->Send();
    
header("Location: index.html");
?>