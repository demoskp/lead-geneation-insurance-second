<?php


if(isset($_POST)){if(isset($_POST['name'])){ $name = $_POST['name'];}}
if(isset($_POST)){if(isset($_POST['surname'])){ $surname = $_POST['surname'];}}
if(isset($_POST)){if(isset($_POST['email'])){ $email_from = $_POST['email'];}}
if(isset($_POST)){if(isset($_POST['message'])){ $message = $_POST['message'];}}


$email_message = "Form details below.\n\n";

function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

$email_message .= "First Name: ".clean_string($name)."\n";
$email_message .= "Last Name: ".clean_string($surname)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Message: ".clean_string($message)."\n";

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
  //  $mail->SMTPDebug = 2;                              // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.eu';                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'support@domain.co.uk';      // SMTP username
    $mail->Password = 'password';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('support@domain.com', 'Domain Name');
    
    
    $mail->addAddress('support@domain', 'Contact Form');     // Add a recipient
   
    $mail->addReplyTo($email_from, $name);
    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $email_message;
    $mail->AltBody = $email_message;

    $mail->send();
    echo 'Message has been sent';
   
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}    

?>

<?php  header("Location: ../contact-form-success.php");
    exit(); ?>