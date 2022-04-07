
<?php
// Link to autoloader
require_once './partials/autoLoader.php';
session_start();
// Variable that picks up the ID of the user
$curUser = $user->getUserById($_SESSION['userID']);
// Variable that makes friendCode into string
$content = strval($curUser->friendCode);
?>
<!doctype html>
<html lang="en">
  <head>
      <!-- Link to style sheets -->
      <link rel="stylesheet" href="./CSS/qrcode.css">
      <link rel="stylesheet" href="./CSS/header.css">
      <link rel="stylesheet" href="./CSS/footer.css">
      <script>
        // Variable that stores the friendCode of the php code
          var content = <?= $content ?>;
        // Variable that converts the php code to a string in JavaScript
          content = toString(content);
      </script>
      <!-- Link to JavaScript scripts -->
      <script type="text/javascript" src="./js/qrcode.js"></script>
      <script type="text/javascript" src="../js/global.js"></script>
      <title>W/Friends | QR Code</title>
  </head>
  <!-- Link to the header -->
  <?= require_once './partials/header.php';?>
  <body>
      <p class="add">Scan the QR code to be added as friend!</p>
      <div class="backdrop">
        <div id="qrcode">
          <!-- QR code shows here -->
        </div>
      </div>
      <script type="text/javascript">
        // Generates new QR code with link to friendCode
        new QRCode(document.getElementById("qrcode"), "38.242.233.110/addFriend.php?friendCode="+content);
      </script>
  </body>
</html>
<!-- Link to the footer -->
<?= require_once './partials/footer.php';?>