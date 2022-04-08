<?php
require_once 'partials/autoLoader.php';
require_once 'partials/header.php';


if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./CSS/friendpage.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <title> W/ Friends | Friends </title>
</head>

<?php
require_once 'classes/Friend.php';
require_once 'classes/User.php';
?>
<bod<main>
    <!-- Main Focus Managing Friends Sidebar -->
    <h1>Friends</h1>
    <div id="fb-root"></div>
    <script>function fb(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk');</script>

    <!-- Your share button code -->
    <div class="fb-share-button"
         data-href="http:/38.242.233.110//WithFriends/addFriend.php?friendCode=<?php foreach ($friend->getFriendCode($_SESSION['userID']) as $userIns) {

             echo $userIns->friendCode;
         } ?>"
         data-layout="button_count">
    </div>

    <button onclick="window.open('<?php foreach ($friend->getFriendCode($_SESSION['userID']) as $userIns) {

        echo $userIns->friendCode;
    } ?>)'"> Open WhatsApp
    </button>


    <input type="text" value="http://38.242.233.110/WithFriends/addFriend.php?friendCode=<?php foreach ($friend->getFriendCode($_SESSION['userID']) as $userIns) {echo $userIns->friendCode;} ?>" id="myInput" style="display:none;">
    <div class="tooltip">
        <button onclick='myFunction()' onmouseout="outFunc()">
            Copy Friendlink to clipboard
        </button>
        <br>
        <p1>Add</p1>
        <br>
        <p2>Friend Code: <?php foreach ($friend->getCode($_SESSION['userID']) as $userIns) {
                echo $userIns->friendCode;
            } ?></p2>
        <br> <!-- Friend Code Should Be Pre-Generated On Account Creation? -->
    </div>

        <p1>List</p1>
        <br>
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
        <?php }
        ?>
    </div>
    </br></br>
    <?php include('./partials/footer.php'); ?>
</main>
<script src="./js/friendpage.js"></script>
</body>

        </html>