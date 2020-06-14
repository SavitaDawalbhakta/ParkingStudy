<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>

<?php
// Using the ini_set()
ini_set("SMTP", "mail.wssu.edu");
ini_set("sendmail_from", "dawalbhaktass@wssu.edu");
//ini_set("smtp_port", "25");


$name= "Savita";
// The message
// message
$message1 = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td><?php echo $name; ?></td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
'; 

// Compose a simple HTML email message
/*$message = 'Dear '.$name .',';
$message .= '<html><body>';
$message .= '<h1 style="color:#f40;">You have successfully completed the purchase of your parking voucher. </h1>';
$message .= '<p style="color:#080;font-size:18px;">In order to process your request you are required to have completed the T2 parking voucher request <a href ="https://wssu.t2hosted.com/Account/Portal">online </a>, or in the office, 200 Thompson Center.</p>';
$message .= '<p>Secure your voucher  <a href ="https://wssu.uncecs.edu/pls/WSSUPROD/twbkwbis.P_GenMenu?name=homepage">here </a>! That means verifying that the charge for the selected parking permit is applied to your account summary in Banner Rams online. Once you have verified this charge you are ready to use the voucher in the online parking system. It is your responsibility to complete this process within 24 hours of your initial request. </p>';
$message .= '<p><a href ="https://wssu.t2hosted.com/Account/Portal">Login </a>  into the parking portal using your RAM ID and password.  </p>';
$message .= '<p>Please allow up to 2 hours for the requested voucher amount to update to your RAMCard. After that period, you will be able to utilize the funds requested to purchase your parking voucher at the ____ or online. </p>';
$message .= '<p>Thank you </p>';
$message .= '</body></html>';*/
//echo $message;
//return;
// Send
$fromEmail = "dawalbhaktass@wssu.edu";
$headers = "From:" . strip_tags($fromEmail);
//$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'X-Mailer: PHP/'. phpversion();

/* Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/

//$toEmail = strip_tags($fromEmail);
mail('dawalbhaktass@wssu.edu', 'HTML Email', $message1, $headers);

echo "Check your html email now....<BR>";
?>

</html>