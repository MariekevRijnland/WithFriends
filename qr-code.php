<?php
require_once './partials/autoLoader.php';


$curUser = $user->getUserById(10);
$content = strval($curUser->friendCode);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
        var content = <?= $content ?>;
        content = toString(content);
    </script>
    <script type="text/javascript" src="./js/qrcode.js"></script>
    <title>Document</title>
</head>

<body>

<div id="qrcode">

</div>

<script type="text/javascript">
  new QRCode(document.getElementById("qrcode"), content);
</script>
</body>
</html>
