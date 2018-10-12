<?php
/*
$servername = "Localhost";
$username = "protoca1_anil";
$password = "anilbro321";
$dbname = "protoca1_anil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$error=false;
/*
$required=array('token','id_user','full_name','email');

foreach($required as $value)
{
    if(empty($_POST[$value]))
    {
        $error=true;
    }
}
*/
$error=false;
if($error==false)
{
   /* $email=$_POST["email"];
    $verify_token=$_POST["verify_token"];
    $id_user=$_POST["id_user"];
    $full_name=$_POST["full_name"];
    $token=$_POST["token"];
    $email="anil59paudel@gmail.com";
*/
    $verify_token="eXYwZ9gX";
    $full_name="Anil Paudel";
    $token="LexqkCv84OPn";
    $id_user="1";
    $email="anil59paudel@gmail.com";
    /*$sql="SELECT email,verify_token,login_token,full_name FROM dot_table where id='$id_user'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
    while($row=$result->fetch_assoc())
    {
    $itoken=$row["login_token"];
    if($itoken==$token)
    {
    */
    echo "hello world";
    require 'phpmailer1/phpmailer/PHPMailerAutoload.php';
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
    $link="http://www.protocal.me/finalscript.php?email='$email'&full_name='$full_name'&verify_token='$verify_token'";

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
}
/*
}
}
}
*/
?>