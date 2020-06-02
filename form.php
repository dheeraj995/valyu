<!DOCTYPE html>

<html>

<body>



<?php
/*ini_set("SMTP","ssl:smtp.gmail.com" );
ini_set('smtp_port',465);*/

$name = $email = $company = $message = $contact = $option = $name1 = $email1 = $company1 = $message1 = $contact1 = $size = "";
$nameErr = $emailErr = $companyErr = $messageErr = $contactErr = $optionErr = $name1Err = $email1Err = $company1Err = $message1Err = $contact1Err = $sizeErr = "";


if (strtoupper($_SERVER["REQUEST_METHOD"]) == "POST") {

    if (empty($_POST["name"] || $_POST["name"]==" ")) {
    $nameErr = "Name is required";
  } else {
    $name = form($_POST["name"]);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     $nameErr = "Only letters and white space allowed"; }
  }

    if (empty($_POST["name1"] || $_POST["name1"]==" ")) {
    $name1Err = "Name is required";
  } else {
    $name1 = form($_POST["name1"]);
    // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
     $name1Err = "Only letters and white space allowed"; }
  }

   if (empty($_POST["subject"])) {
    $mobileErr = "Required";
  } else {
    $mobile = form($_POST["subject"]);
  }

    if (empty($_POST["option"])) {
    $companyErr = "You have to choose one of them";
  } else {
    $option = form($_POST["option"]);
  }

    if (empty($_POST["size"])) {
    $sizeErr = "You have to choose one of them";
  } else {
    $size = form($_POST["size"]);
  }

  if (empty($_POST["subject1"])) {
    $mobile1Err = "Required";
  } else {
    $mobile1 = form($_POST["subject1"]);
  }

  if (empty($_POST["email1"])) {
    $email1Err = "Required";
  } else {
    $email1 = form($_POST["email1"]);
  }

  if (empty($_POST["message1"])) {
    $message1Err = "Required";
  } else {
    $message1 = form($_POST["message1"]);
  }

  }

function form($data) {

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}

$to = "dheeraj@appanalytics.in";
$subject = "Website contact form query";
$msg = "Hi, \n\r  My name is :". $name." \n\r And My Mobile Number is :".$mobile. " \n\r And My Email Id is :".$email. " \n\r Message :" . $message;
$headers = 'From: '.$email. "\r\n";
$headers .= "To: ".$to."\n";
$headers .= "Organization: Appsfollowing\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;



mail($to,$subject,$msg,$headers, "-f dheeraj@appanalytics");
echo '<script type="text/javascript">alert("We have recieved your query!!");window.location.href="index.html";</script>';
?>


</body>

</html>