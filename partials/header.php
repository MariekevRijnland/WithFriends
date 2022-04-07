<?php
require_once './classes/User.php';
require_once './partials/autoLoader.php';
session_start();

$curUser = $user->getUserById($_SESSION['userID']);
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>W/ Friends</title>
</head>
<header>
    <div id="brand"><a href="./index.php"><img src="images/With_friends_logo.png" alt="With Friends Logo"></a></div>
    <nav>
      <ul>
        <li><a href="#">Messages</a></li>
        <li><a href="./fullFriendPage.php">Friends</a></li>
        <li><a href="./Setting-page.php"><?php 

          echo$curUser->name ;

        ?></a></li>
        <img class="circle" src="images/user.png" alt="Profile picture">
      </ul>
    </nav>
    <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
     
       
       
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
      <ul class="mobile-menu">
        <li><a href="/products">Messages</a></li>
        <li><a href="/about">Friends</a></li>
        <img class="circle" src="images/user.png" alt="User profile picture">
        <li><a href="/about">Name</a></li>

      </ul>
    </div>
    <script src="js/global.js"></script>
  </header>

