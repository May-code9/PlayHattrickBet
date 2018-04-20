<?php
require_once 'vendor/autoload.php';

$m = new PHPMailer\PHPMailer\PHPMailer();

$m->isSMTP();
$m->SMTPAuth = true;
$m->SMTPDebug = 2;
$m->Host = 'just161.justhost.com';
$m->Username = 'ajayi.mayowa@ronchoenergy.com';
$m->Password = 'Ma_yo_wa_Oye_wale1';
$m->SMTPSecure = 'ssl';
$m->Port = 465;

$m->From = 'ajayi.mayowa@ronchoenergy.com';
$m->FromName = 'Mayowa Ajayi';
$m->addReplyTo('tech.support@ronchoenergy.com', 'Reply Address');
$m->addAddress('ajayi.mayowa@ronchoenergy.com', 'Mayowa Ajayi');
//$m->addCC('ajayi.mayowa@ronchoenergy.com', 'Mayowa Ajayi');
//$m->addBCC('ajayi.mayowa@ronchoenergy.com', 'Mayowa Ajayi');

if(isset($_POST['email'])) {
  // validation expected data exists
    if(!isset($_POST['full_name']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['message']) ||
        !isset($_POST['email'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $full_name = $_POST['full_name']; // required
    $phone = $_POST['phone']; // required
    $message = $_POST['message']; // required
    $email_from = $_POST['email']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

      $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$full_name)) {
      $error_message .= 'The Full Name you entered does not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
      died($error_message);
    }

    //$email_message = "Form details below."."<br>";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Full Name: "."<strong>".clean_string($full_name)."</strong>"."<br>";
    $email_message .= "Phone Number: "."<strong>".clean_string($phone)."</strong>"."<br>";
    $email_message .= "Email: "."<strong>".clean_string($email_from)."</strong>"."<br><br>";
    $email_message .= "<strong>Message:</strong> "."<br>".clean_string($message)."<br><br>";
    $email_message .= "<strong>Comment:</strong>"."<i>This Message was sent from the contact on okisokariari.com</i>";
}

$m->Subject = 'Contact email';
$m->Body = $email_message;
$m->AltBody = 'This is the body of an email';

var_dump($m->send());
