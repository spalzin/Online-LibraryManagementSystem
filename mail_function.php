

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendOTP($email,$otp)
{ $message_body="Dear Sir / Madam,

    Your One Time Password(OTP) is :<br><br>".$otp."
    
    <br><br>Your OTP will expire in 15 min.<br><br>Do not share your OTP with anyone. <br/>";
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;               //Enable verbose debug output
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;               //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
   
    $mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

    $mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
    $mail->Port = 587;// TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    

    $mail->Username   = 'agrawalanshul055@gmail.com';                     //SMTP username
    $mail->Password   = '***********';                               //SMTP password
    //Recipients
    echo "hello";
    $mail->setFrom('agrawalanshul055@gmail.com', 'Anshul Agarwal');
    $mail->addAddress($email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->msgHTML($message_body);
    $mail->Subject = 'Elibrary- Email Verification OTP';

    $mail->send();
     echo "<script>alert('Otp sent succesfully to your email');</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

?>
