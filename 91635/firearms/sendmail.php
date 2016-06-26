<?php
    $name   = $_POST['name'];


//    if(isset($_POST['options-0']) && $_POST['options-0'] == 'Yes') 
//    {
//        $qry_ranges   = "Range types";
//    }

 $options = $_POST['my_options']; 
print_r($options); 
$selected=""; 
for($i=0; $i<count($options);$i++){ 
  $selected=$selected. "\n ".$options[$i]."\n"; }
echo $selected;
//    $qry_ranges   = $options[0];
//    $qry_licence   = $options[1];
//    $qry_emergency   = $options[2];
//    $qry_police   = $options[3];
//    $qry_other    = $options[4];
    $comment      = $_POST['comment'];
    $contact      = $_POST['contact'];
    

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
    
    $email_to="fergusonal@wgc.school.nz";  // where the email will be sent to
    $name_to="Ally"; 
    
   $mail->AddAddress($email_to, $name_to);
    $mail->SetFrom($contact, $name);
    $mail->Subject = "Firearms Inquiry- ".$name;
    $mail->Body = $comment.$contact.$selected;

  
  try{
    $mail->Send();
  } catch(Exception $e){
      echo "<h1>Nope.</h1>";
      die();
  }
    header('Location: index.html');
?>