<?php
function sendMail($to,$name,$subject,$body){
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
#$mail->Port = 587;
$mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
#$mail->SMTPSecure = 'tls';
$mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "abhassomya99@gmail.com";

//Password to use for SMTP authentication
$mail->Password = base64_decode("bmV2ZXJnaXZldXAyMA==");

//Set who the message is to be sent from
$mail->setFrom('abhassomya99@gmail.com', 'Abhas Somya');

//Set an alternative reply-to address
$mail->addReplyTo('mandalkaustav@yahoo.com', 'Kaustav Mandal');

//Set who the message is to be sent to
$mail->addAddress($to, $name);

//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
#$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML($body);
//Replace the plain text body with one created manually
#$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
#s$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
   return "Mailer Error: " . $mail->ErrorInfo;
} else {
    return "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
}

?>