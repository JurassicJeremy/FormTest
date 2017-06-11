<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$department = $_POST['department'];
$message = $_POST['message'];
$robot_yes = $_POST['robot_yes'];
$robot_no = $_POST['robot_no'];
?>

<?php
$email_from = '$visitor_email';
$email_subject = "Work Request";
$email_body = "You have received a new message from the user $name.\n".
$department
$robot_yes
$robot_no
$message
?>

<?php
$to = "jeremyburnham1@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
?>

<?php
function IsInjected($str)
{
$injections = array('(\n+)',
'(\r+)',
'(\t+)',
'(%0A+)',
'(%0D+)',
'(%08+)',
'(%09+)'
);
$inject = join('|', $injections);
$inject = "/$inject/i";
if(preg_match($inject,$str))
{
return true;
}
else
{
return false;
}
}
if(IsInjected($visitor_email))
{
echo "Bad email value!";
exit;
}
?>