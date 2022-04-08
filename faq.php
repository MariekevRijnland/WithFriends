<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./CSS/faq.css">
    <title>W/Friends | FAQ</title>
</head>
<?php
 require_once './partials/header.php';
 require_once './classes/User.php';
?>
<body>

    <h1>Fequently Asked Questions</h1>

<button type="button" class="collapsible">Will my data be sold to third parties?</button>
<div class="content">
  <p>No, your data will not be sold or shared to any other parties but W/Friends Inc.</p>
</div>
<button type="button" class="collapsible">Can I block certain friends from seeing my location?</button>
<div class="content">
  <p> The current version of the app doesn’t allow you to block friends from seeing your location. In future updates we may implement this feature. If you delete a friend, they will no longer be able to see your location. </p>
</div>
<button type="button" class="collapsible">How do I add my friends?</button>
<div class="content">
  <p>You can add your friends on the home page or on the friends’ page. There are many ways you can add them using WhatsApp, Facebook or copying the link to your clipboard. Send the link to your friends and they will be able to accept or decline the invite on that link.</p>
</div>
<button type="button" class="collapsible">Can I customize my Friend code?</button>
<div class="content">
  <p>No, the Friend code is a unique code generated at registration. Currently we don’t allow the Friend code to be customized.</p>
</div>
<button type="button" class="collapsible">Can I remove my friends?</button>
<div class="content">
  <p>No, currently we don't support removing friends.</p>
</div>
<button type="button" class="collapsible">How do I delete my account?</button>
<div class="content">
  <p>You can delete your account on the Account Settings Page and press the “Delete Account” button.</p>
</div>
<button type="button" class="collapsible">Am I able to disable the GPS feature at any time?</button>
<div class="content">
  <p>You are able to disable the GPS feature via the settings page, where you can find the option to turn off your GPS tracking.</p>
</div>
<button type="button" class="collapsible">Where can I find my friends?</button>
<div class="content">
  <p>You can find your friends on the side bar or on the friend's page where you can also manage your friends.</p>
</div>
<button type="button" class="collapsible">Who is able to view my location?</button>
<div class="content">
  <p>Nobody but your friends who you have given permission to see your location, have the ability to view your location on the map, unless you turn off the GPS feature.</p>
</div>
<script src="./js/faq.js"></script>
</body>
<?php
 require_once './partials/footer.php';
?>
</html>