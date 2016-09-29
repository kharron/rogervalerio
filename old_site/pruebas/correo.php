<?php
// multiple recipients
$to  = 'rcsozan@gmail.com' . ', '; // note the comma
$to .= 'rcsozan@yahoo.com';
$nombre = 'El colado de hoy!';

// subject
$subject = 'Birthday Reminders for August';

// message
$message = '
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
      <td>Sally</td><td>17th</td><td>August</td><td>1973'.$nombre.'</td>
    </tr>
  </table>
</body>
</html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Roberto <rcsozan@gmail.com>' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@rcsozan.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
?>
Roberto Soza N.