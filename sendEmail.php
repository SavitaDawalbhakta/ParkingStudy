<HTML>
<body>
MAIL SETTING for Iseries<br>
Define a real name of your mail Server<br>
<center>
SMTP = mail.zend.com </center>
<br>
Define a real name of your mail Server<br>
<center>
smtp_port = 25</center>
<br>
Define an any address you want<br>
<center>
sendmail_from = shlomo@zend.com</center><br>
</body>
 
<?php
// Using the ini_set()
ini_set("SMTP", "mail.wssu.edu");
ini_set("sendmail_from", "dawalbhaktass@wssu.edu");
//ini_set("smtp_port", "25");

// The message
$message = "The mail message was sent with the following mail setting:\r\nSMTP = mail.zend.com\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";

// Send
$headers = "From: dawalbhaktass@wssu.edu";

mail('dawalbhaktass@wssu.edu', 'My Subject', $message, $headers);

echo "Check your email now....<BR>";
?>
</HTML>