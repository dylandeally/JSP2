<html>
<head>
<title>Save your Avatar | Je Suis Personality</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="fonts.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="font-txt.css">
</head>
<body>
<?php
if (isset($_POST['send'])) {
     $headers = 'from: Avatar Generator <avatar@jesuispersonality.xyz>' . "\r\n";
     $headers .= 'Bcc: info@jesuispersonality.xyz' . "\r\n";
     $headers .= 'Content-Type: text/plain; charset=utf-8';
     $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      if ($email) {
       $headers .= "\r\nReply-To: $email";
      }
     $to = "$email"; // User's e-mail
     // $to = 'info@jesuispersonality.xyz'; // Use your own email address
     // $to = 'info@dublinwebdesign.eu'; // Use your own email address
     $subject = '';
     $subject = isset($_POST['subject']) ? $_POST['subject'] : 'New Avatar created';
     $message .= 'Name: ' . $_POST['fullname'] . "\r\n";
     $message .= 'Email: ' . $_POST['email'] . "\r\n";
     $message .= 'E-mail Opt-In: ' . $_POST['optin'] . "\r\n\r\n";
     $message .= 'Avatar Name: ' . $_POST['nameMugb'] . "\r\n";
     $message .= 'Gender: ' . $_POST['gender'] . "\r\n";
     $message .= 'Drink: ' . $_POST['drink2'] . "\r\n";
     $message .= 'Design: ' . $_POST['design2'] . "\r\n";
     $message .= 'Pers A: ' . $_POST['personalitya2'] . "\r\n";
     $message .= 'Pers B: ' . $_POST['personalityb2'] . "\r\n";
     $message .= 'Pers C: ' . $_POST['personalityc2'] . "\r\n";
     $message .= 'Pers D: ' . $_POST['personalityd2'] . "\r\n";
     $message .= 'Personal-a-Teas Match: ' . $_POST['match2'] . "\r\n\r\n";
     $message .= 'Avatar Code: ' . $_POST['foo2'] . "\r\n\r\n";
     $message .= 'User IP: ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
     $message .= 'Referer: ' . $_SERVER['HTTP_REFERER'] . "\r\n";
     $message .= 'User agent: ' . $_SERVER['HTTP_USER_AGENT'];
     $success = mail($to, $subject, $message, $headers);
}
?>

<?php if (isset($success) && $success) { ?>
<span class="titleh1">BOOM! Your avatar has been saved.</span>
<br/><br/>
<span class="titleh3">Let's go shopping!</span><br/>
<br/><br/>
<a href="https://jesuispersonality.xyz/shop/" title="Personalise a gift with your avatar" class="button" target="_parent">Go to Shop</a> <a href="https://jesuispersonality.xyz/#promotions" title="Promotions" class="button" target="_parent">See our Promotions</a> <a href="https://jesuispersonality.xyz/avatar/" title="Create a New Avatar" class="button" target="_parent">Create a New Avatar</a>
<br/><br/>
<br/><br/>
<a href="http://facebook.com/TwoPupsCoffee"><img src="../images/two-pups-coffee-logo-new.png" width="400" alt="Two Pups Coffee"></a>
<br/><br/>
<?php } else { ?>
<span class="titleh1">Oops!</span>
<p>Sorry, there was a problem saving your avatar.</p>
<br/><br/>
<a href="https://jesuispersonality.xyz/avatar/" title="Create a New Avatar" class="button" target="_parent">Create a New Avatar</a>
<br/><br/>
<?php } ?>
</body>
</html>