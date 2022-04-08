<head>
<title> W/Friends | Friends </title>
</head>
<?php
require_once 'partials/autoLoader.php';
require_once 'partials/header.php';


if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./CSS/friendpage.css">
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<?php
require_once 'classes/Friend.php';
require_once 'classes/User.php';
?>
<body>
    <main>
        <h1>Friends</h1>
        <p2>Your Friend Code: 
            <?php foreach ($friend->getCode($_SESSION['userID']) as $userIns) {
                echo $userIns->friendCode;
            } 
            ?>
        </p2><br>
        
        <button class="FB">Facebook</button><br>
        <button class="WA"  
        onclick="window.open('https://web.whatsapp.com:/send?text=http://38.242.233.110/WithFriends/addFriend.php?friendCode=<?php foreach ($friend->getFriendCode($_SESSION['userID']) as $userIns) {
          echo $userIns->friendCode;
        } ?>')">Whatsapp</button><br>


    <input type="text" value="http://38.242.233.110/WithFriends/addFriend.php?friendCode=<?php foreach ($friend->getFriendCode($_SESSION['userID']) as $userIns) {echo $userIns->friendCode;} ?>" id="myInput" style="display:none;">
    <div class="tooltip">
        <button class="Copy" onclick="myFunction()" onmouseout="outFunc()">Copy to clipboard</button>
    </div>
    
    </main>
    <div class="list">
        <h2>List</h2>
        <?php foreach ($user->getFriends() as $userIns) { ?>
            <div class="dropdown" style="float:right;">
                <button class="dropbtn"><img class="pfp" src="./images/user.png">
                    <?php echo $userIns->name; ?>
                </button>
                <div class="dropdown-content">
                    <form method="post">
                        <button class="friendList" name="<?php $pTest ?>">Remove Friend</button>
                    </form>
                </div>
            </div>                
        <?php } ?>
    </div>
    <script src="./js/friendpage.js"></script>
</body>
<?php
require_once './partials/footer.php';
?>
</html>