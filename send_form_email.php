<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "terri@ripejoy.slarner.com"; 
	// $email_to = "2000stevenlarner@slarner.com"; FOR TESTING PURPOSES
    $email_subject = "RipeJoy Contact Form";
 
    function died($error) {
        // your error code can go here
        echo "Oh no! It appears there was an error submitting your message! Could you go back and make sure you entered all the required information? ";
        echo "The error(s) are listed below!<br /><br />";
        echo $error."<br /><br />";
        echo "We hope it is not too much of an inconvenience. Thank you!<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
	header("Location: contactus.php?message=invalidemail");
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
	header("Location: contactus.php?message=invalidfirst");
  }
 
  if(!preg_match($string_exp,$last_name)) {
	header("Location: contactus.php?message=invalidlast");
  }
 
  if(strlen($comments) < 2) {
	header("Location: contactus.php?message=invalidcomment");
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
header("Location: contactus.php?message=success");
}
?>