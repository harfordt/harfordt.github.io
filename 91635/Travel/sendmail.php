<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $continent = $_POST['continent'];
    $message = $_POST['message'];

    echo "name" .$name . "<br>";
    echo "email" .$email . "<br>";
    echo "country" .$country . "<br>";
    echo "Where are you visiting?" .$continent . "<br>";
    echo "Message" .$message . "<br>";


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
    $mail->Password = "silence123";

    $email_to ="irincoma@wgc.school.nz";
    $name_to = "Maria I";

    $mail->AddAddress($email_to, $name_to);
    $mail->SetFrom($email, $name);
    $mail->Subject = "Travel Enquiry";
    $mail->Body = "Country". $country . "\n\nMessage\n" . $message;

    try{
        $mail->Send();
    } catch(Exception $e){
        echo "<h1>Nope.</h1>";
        die();
        
    }

    header('Location: learnmore.html');

?>
