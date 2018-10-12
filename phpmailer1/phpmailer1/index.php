<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//Load Composer's autoloader
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'anilpaudel404@gmail.com';                 // SMTP username
    $mail->Password = 'anil114912';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    //Recipients
    $mail->setFrom('anilpaudel404@gmail', 'Mailer');
    $mail->addAddress('pradeep.paudel.566@gmail.com', 'Pradeep Paudel');     // Add a recipient               // Name is optional
    $mail->addReplyTo('pradeep.paudel.566@gmail.com', 'Information');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'hello';
    $mail->Body    = 'pradeep Lambhoo k xa !</b>';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}