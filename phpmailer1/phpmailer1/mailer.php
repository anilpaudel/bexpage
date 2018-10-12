<?php


    $verify_token="eXYwZ9gX";
    //$full_name="AnilPaudel";
    
    //$token="LexqkCv84OPn";
    $id_user="1";
    $email="aashish.gm74@gmail.com";
    
    echo "hello world";
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'anil.6thsem@gmail.com';                 // SMTP username
    $mail->Password = 'anilbro321';                           // SMTP password
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
    $mail->setFrom('anil.6thsem@gmail.com', 'Mailer');
    $mail->addAddress($email, $full_name);     // Add a recipient               // Name is optional
    $mail->addReplyTo($email, 'Information');
    $link="http://www.protocal.me/finalscript.php?email=$email&full_name=$full_name&verify_token=$verify_token";

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'hello';
    $mail->Body    = "<b> your verification link is '$link' </b>";
    $mail->send();
    echo 'Message has been sent';
} 
    catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>