<?php
//defaults
$message = '';

$fname = stripslashes($_POST['fname']);
$lname = stripslashes($_POST['lname']);
$phone = stripslashes($_POST['phone']);
$email = stripslashes( $_POST['email']);
$recipient = stripslashes($_POST['recipient']);

if($_POST['message'])
{
	$message = stripslashes($_POST['message']);
}

//echo "<strong>Name:</strong> $fname $lname<br /><strong>Phone:</strong> $phone<br /><strong>Email:</strong> $email<br /><strong>Sending to:</strong> $recipient<br /><strong>Message:</strong><br />$message";

//email settings
$subject = 'Ben Leland Construction Online Form';

$message_full = 'Name:'.$fname.' '.$lname.' 
Phone:'.$phone.'
Email:'.$email.' 
Message:
'.$message.'';

if ($recipient == 'all')
{
/*-----------------------------------------------------------------------------------------
$to = 'todd@benlelandconstruction.com';
$headers = "From: noreply@benlelandconstruction.com\r\n" .
	 'Cc: marlene@benlelandconstruction.com, tory@benlelandconstruction.com' . "\r\n" .
    'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
-----------------------------------------------------------------------------------------*/
$to = 'admin@websightprojects.com';
$headers = "From: noreply@benlelandconstruction.com\r\n" .
	 'Cc: brow51@hotmail.com, mars_barsus@yahoo.com' . "\r\n" .
    'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();	
	
mail($to, $subject, $message_full, $headers);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://www.benlelandconstruction.com/sample/thank.php">';

}

else
{
	$to = $recipient;

	$headers = "From: noreply@benlelandconstruction.com\r\n" .
    'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message_full, $headers);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://www.benlelandconstruction.com/sample/thank.php">';
}
?>