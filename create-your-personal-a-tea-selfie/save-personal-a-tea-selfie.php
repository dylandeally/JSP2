<html>
<head>
<title>Save your Personal-a-Tea Selfie | Je Suis Personality</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="fonts.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="font-txt.css">
  <link rel="stylesheet" type="text/css" href="fonts.css" charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="radio1.css" />
  <link rel="stylesheet" type="text/css" href="radio2.css" />
  <link rel="stylesheet" type="text/css" href="font-txt.css">
  <link rel="stylesheet" type="text/css" href="data-txt.css">
  <link rel="stylesheet" type="text/css" href="buttons-animation.css" />
  <link rel="stylesheet" type="text/css" href="traits-cappuccino.css">
  <link rel="stylesheet" type="text/css" href="save-ps.css">
</head>
<body>
<?php
if (isset($_POST['send'])) {
     $headers = 'from: Personal-a-Tea Selfie <selfie@jesuispersonality.xyz>' . "\r\n";
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
     $subject = isset($_POST['subject']) ? $_POST['subject'] : 'New Personal-a-Tea Selfie created';
     $optin = '';
     $optin = isset($_POST['optin']) ? $_POST['optin'] : 'yes';
     $message = '';
     $message .= 'Name: ' . $_POST['fullname'] . "\r\n";
     $message .= 'Email: ' . $_POST['email'] . "\r\n";
     $message .= 'E-mail Opt-In: ' . $_POST['optin'] . "\r\n\r\n";
     $message .= 'Personal-a-Tea Selfie Name: ' . $_POST['nameMugb'] . "\r\n";
     $message .= 'Gender: ' . $_POST['gender'] . "\r\n";
     $message .= 'Drink: ' . $_POST['drink2'] . "\r\n";
     $message .= 'Design: ' . $_POST['design2'] . "\r\n";
     $message .= 'Pers A: ' . $_POST['personalitya2'] . "\r\n";
     $message .= 'Pers B: ' . $_POST['personalityb2'] . "\r\n";
     $message .= 'Pers C: ' . $_POST['personalityc2'] . "\r\n";
     $message .= 'Pers D: ' . $_POST['personalityd2'] . "\r\n";
     $message .= 'Personal-a-Teas Match: ' . $_POST['match2'] . "\r\n\r\n";
     $message .= 'Personal-a-Tea Selfie Code: ' . $_POST['foo2'] . "\r\n\r\n";
     $message .= 'User IP: ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
     $message .= 'Referer: ' . $_SERVER['HTTP_REFERER'] . "\r\n";
     $message .= 'User agent: ' . $_SERVER['HTTP_USER_AGENT'];
     $success = mail($to, $subject, $message, $headers);
}
?>

<?php if (isset($success) && $success) { ?>
<span class="titleh1" style="color:white">Your Personal-a-Tea Selfie Is Queued For Sending </span>
<br/><br/>
<span class="titleh3" style="color:white">In The Meantime, Let's go shopping!</span><br/>
<br/><br/>
<a href="https://jesuispersonality.xyz/shop/" title="Personalise a gift with your Personal-a-Tea Selfie" class="button" target="_parent">Go To Our Shop</a> 
<br/><br/><br/>
<a href="https://jesuispersonality.xyz/#b2b-why-engage-with-personal-a-treats" title="Promotions" class="button" target="_parent">See Our Promotions</a> 
<br/><br/><br/>
<a href="https://goo.gl/5oIarZ" title="Create a New Personal-a-Tea Selfie" class="button" target="_parent">Create A New Selfie</a>
<br/><br/>
<br/><br/>
<?php
require 'media-footer.php';
?>
<!--<a href="https://goo.gl/Ujap2h" target="_blank" title="Boston Donuts"><img src="../images/boston-donuts-jsp-selfie-generator.png" width="400" alt="Boston Donuts"></a><a href="https://goo.gl/RAfu0L" target="_blank" title="McCabes Deli"><img src="../images/mccabes-deli-jsp-selfie-generator.png" width="400" alt="McCabes Deli"></a><a href="https://goo.gl/bHGh6N" title="Two Pups Coffee"><img src="../images/two-pups-coffee-logo-1.png" width="400" alt="Two Pups Coffee"></a><a href="https://goo.gl/mGYDaN" title="The Michan Spot"><img src="../images/the-michan-spot-jsp-selfie-generator.png" width="400" alt="The Michan Spot"></a><a href="https://goo.gl/eoswye" target="_blank" title="Accents Coffee & Tea Lounge"><img src="../images/accents-coffee-tea-lounge-logo.png" width="400" alt="Accents Coffee & Tea Lounge"></a>-->
<br/><br/>
<?php } else { ?>
<span class="titleh1">Oops!</span>
<p>Sorry, there was a problem saving your Personal-a-Tea Selfie.</p>
<br/><br/>
<a href="https://goo.gl/5oIarZ" title="Create a New Personal-a-Tea Selfie" class="button" target="_parent">Create a New Personal-a-Tea Selfie</a>
<br/><br/>
<?php } ?>
</body>
</html>