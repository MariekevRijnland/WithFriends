<?php
require_once 'classes/DbConfig.php';
require_once 'classes/Friend.php';



?>
<?php
    include "phpqrcode/qrlib.php" ;
    $content = "http://www.etutorialspoint.com/" ;
    QRcode::png($content) ;
?>