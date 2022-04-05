<?php
require_once 'classes/DbConfig.php';
require_once 'classes/Friend.php';
require_once 'classes/User.php';

$marieke = new User();
$max = $marieke->getUsername();

$code = new Friend();
$resultCode = $code->getCode();

// $result = $code->getCode();

?>
<?php
    include "phpqrcode/qrlib.php" ;
    $content = $resultCode;
    QRcode::png($content) ;
?>