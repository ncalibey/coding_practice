<?php
  // create short variable names
  $name        = trim($_POST['name']);
  $email       = trim(strtolower($_POST['email']));
  $email_array = explode('@', $email);
  $feedback    = trim($_POST['feedback']);

  if (preg_match('/^[a-zA-Z0-9\_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',
                  $email) === 0) {
      echo "<p>That is not a valid email address.</p>".
           "<p>Please return to the previous page and try again.</p>";
      exit;
  }

  // set up some static information
  if (strtolower($email_array[1]) == 'bigcustomer.com') {
    $toaddress = 'ncalibey@hchc.edu';
  } else {
    $toaddress = 'nick.calibey@gmail.com';
  }

  // change the $toaddress if the criteria are met
  if (preg_match('/shop|customer service|retail/', $feedback)) {
      $toaddress = 'retail@example.com';
  } elseif (preg_match('/deliver|fulfill/', $feedback)) {
      $toaddress = 'fulfillment@example.com';
    } elseif (preg_match('/bill|account/', $feedback)) {
      $toaddress = 'accounts@example.com';
  }

  $subject = 'Feedback from web site';
  $mailcontent = "Customer name: ".str_replace("\r\n", "", $name)."\n".
                 "Customer email: ".str_replace("\r\n", "", $email)."\n".
                 "Customer comments:\n".str_replace("\r\n", "", $feedback)."\n";
  $fromaddress = "From: webserver@example.com";

  // invoke mail() function to send mail
  mail($toaddress, $subject, $mailcontent, $fromaddress);
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Bob's Auto Parts - Feedback Submitted</title>
    <meta charset="utf-8" />
    <style>
      html { font-family: sans-serif; }
    </style>
  </head>

  <body>
    <h1>Feedback Submitted</h1>
    <p>Your feedback (shown below) has been sent.</p>
    <p>
      <?php
        echo nl2br(htmlspecialchars($feedback));
      ?>
    </p>
  </body>
</html>
