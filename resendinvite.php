<?php

include "dbconn.php";

$username = $_POST["username"];
$emailid = $_POST["emailid"];
$role = $_POST["role"];
$r = $_POST["parentcompany"];
$e = $_POST["bussinessunit"];
$password = $_POST["password"];
$hash = password_hash($pwd,  
          PASSWORD_DEFAULT); 


$sqlValues = '';
foreach($e as $bu) {
    $sqlValues .= "$bu, " ;
}

$multiselect = $sqlValues;
echo $multiselect;
// echo $sql;
     $sql = "UPDATE nususerdata SET username='".$username."' WHERE emailId='".$emailid."'";
    echo $sql;
    

$query=mysqli_query($conn,$sql);


echo "<script>
             alert(' Mail sent succesfully'); 
             window.history.go(-2);
     </script>";


     require 'includes/PHPMailer.php';
     require 'includes/SMTP.php';
     require 'includes/Exception.php';
     
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
     use PHPMailer\PHPMailer\Exception;
     
     $mail = new PHPMailer();
     
     $mail->isSMTP();
     
     $mail->Host = "smtp.gmail.com";
     $mail->SMTPAuth = "true";
     $mail->SMTPSecure = "tls";
     $mail->Port = "587";
     $mail->Username = "vkt973012@gmail.com";
     $mail->Password = "xdpirmapeycfoylo";
     $mail->Subject = "NUS user Created";
     $mail->setFrom("vkt973012@gmail.com", 'vijaygowda');
     $mail->Body = "http://localhost/nusconsultinggroup_w/submit.php";
    
     $mail->addAddress('Vijayakumar.kt@qualesce.com');
     
     if($mail->Send()) {
         echo "Email Sent!";
     } else {
         echo "Mail not sent!";
     }
     
     $mail->smtpClose();
     
     


?>