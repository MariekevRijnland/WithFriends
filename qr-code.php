<?php
require_once './partials/header.php';
?>
<?php
require_once './partials/autoLoader.php';
session_start();


$curUser = $user->getUserById($_SESSION['userID']);
$content = strval($curUser->friendCode);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <link rel="stylesheet" href="./CSS/qrcode.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
        var content = <?= $content ?>;
        content = toString(content);
    </script>
    <script type="text/javascript" src="./js/qrcode.js"></script>
    <title>QR</title>
</head>

<body>

<div id="qrcode">

</div>

<script type="text/javascript">
  new QRCode(document.getElementById("qrcode"), "38.242.233.110/addFriend.php?friendCode="+content);
</script>
</body>
</html>
<?php
require_once './partials/footer.php';
?>