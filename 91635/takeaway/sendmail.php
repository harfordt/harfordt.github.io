<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $email." is an invalid email format";
        die();
    }

//    echo "fullname:" . $fullname . "<br>";
//    echo "email:" . $email . "<br>";
//    echo "number:" . $number . "<br>";
//    echo "message:" . $message . "<br>";


    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail -> IsSMTP();
    $mail -> SMTPDebug = 2;
    $mail -> Debugoutput = 'html';
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> SMTPSecure = "tls";
    $mail -> Port = 587;
    $mail -> Username = "wgc13dt@gmail.com"; //Gmail username
    $mail -> Password = "silence123";

    $email_to="fangal@wgc.school.nz";
    $name_to="Ms Fang";


    $mail->AddAddress($email_to,$name_to);
    $mail->SetFrom($email,$fullname);
    $mail->Subject = "Order";
    $mail->Body = "Phone number: ".$number . "\n\nMessage:\n" . $message;

    try{
        $mail->Send();
    }catch(Exception $e){
        echo "<h1>Nope</h1>";
        die();
    }

    header('Location: reviews.html');

?>