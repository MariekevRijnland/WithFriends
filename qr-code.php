<?php
require_once 'classes/DbConfig.php';
require_once 'classes/Friend.php';
require_once 'classes/User.php';

$marieke = new User();
$max = $marieke->getUsername();

$code = new Friend();
$resultCode = $code->getCode();
$strCode = strval($resultCode);
// $result = $code->getCode();


?>
<?php
    include "phpqrcode/qrlib.php" ;
    $content =  ".$strCode.";
    QRcode::png($content) ;
?>
   <?php foreach($resultCode as $key){ ?>
          <article class="info">
          <!-- <h1>Post <?= $key->friendCode ?></h1> -->
         
          
          </article>
        <?php  }?>  
        
        <?php foreach($max as $sleutel){ ?>
          <article class="info">
          <!-- <h1>Post <?= $sleutel->name ?></h1> -->
         
          
          </article>
        <?php  }?>

