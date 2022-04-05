<?php
require_once 'classes/DbConfig.php';
require_once 'classes/Friend.php';
require_once 'classes/User.php';

$marieke = new User();
$max = $marieke->getUsername();

$code = new Friend();
$resultCode = $code->getCode();
$result = $code->getCode();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Demo: generating a QR Code and display it in a popup box</title>
</head>
<body>

    <div class="container">
        <h1>Demo: generating a QR Code and display it in a popup box</h1>
        <p>Click below button to popover the QR Code generated by qrcode.min.js:</p>
        <?php 
        "<a tabindex'0 'role='button' class='btn btn-success' data-toggle='popover' data-trigger='focus' data-placement='bottom' title='QR Code' data=.$result.>Popover QR Code</a>"
        ?>
        <div id="qrcode" style="display:none; width:auto; height:auto;padding:15px;"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/qrcode.min.js"></script>
    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"),
            {
                width : 120,
                height : 120
            }
        );
        function makeQrcode(e) {
            qrcode.makeCode(e.attr("data-url"));
        }
        jQuery(document).ready(function(){
            jQuery("[data-toggle='popover']").popover(
                options={
                    content: jQuery("#qrcode"),
                    html: true // important! popover html content (tag: "#qrcode") which contains an image
                }
            );

            jQuery("[data-toggle='popover']").on("show.bs.popover", function(e) {
                makeQrcode(jQuery(this));
                jQuery("#qrcode").show();
            });
        });
    </script>
</body>
</html>

