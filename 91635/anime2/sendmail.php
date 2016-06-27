<?php
    $fullname=$_POST["fullname"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    //test the value are POSTing okay
    echo "fullname: " . $fullname."<br>";
    echo "email: " . $email."<br>";
    echo "subject: " . $subject."<br>";
    echo "message: " . $message."<br>";

    /* checks that the email entered is valid, things go real bad if the email is incorrect */
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $email." is an invalid email format";
        die();
    }

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPmailer;

    $mail->IsSMTP();              
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;       
    $mail->SMTPSecure = "tls";   
    $mail->Port = 587;            
    $mail->Username = "wgc13dt@gmail.com"; // GMAIL username
    $mail->Password = "silence123"; // GMAIL username

    $email_to="bingha@wgc.school.nz";
    $name_to="Mikoto";

    $mail->AddAddress($email_to, $name_to);
    $mail->SetFrom($email, $fullname);
    $mail->Subject = "dA Art Website: ".$subject;
    $mail->Body = $message;

    try{
        $mail->Send();
    } catch(Exception $e){
        echo "<h1>Not working :(</h1>";
        die();
    }

    header('Location: contact.html');
?>