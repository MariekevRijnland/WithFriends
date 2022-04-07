<?php
    // Link to autoloader  
    include 'partials/autoLoader.php';

    // If the one of the buttons is clicked It'll redirect to the said page
    if (isset($_POST['yes'])) {   
    }
    if (isset($_POST['no'])) {
        header('Location: index.php');
    }
    if (!isset($_GET['friendCode'])) {
        header('Location: index.php');
    }
    // Picks up all users
    $users = $user->getUsers();

    // Links friendCode to userID
    foreach ($users as $userIns) {
        if (isset($userIns->friendCode) && strval($userIns->friendCode) == $_GET['friendCode']) {
            $friend = $user->getUserById($userIns->userID);
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Link to style sheets -->
        <link rel="stylesheet" href="./CSS/footer.css">
        <link rel="stylesheet" href="./CSS/header.css">
        <link rel="stylesheet" href="./CSS/addFriend.css">
        <title>W/Friends | Add Friend</title>
    </head>
    <!-- Link to header -->
    <?php require_once './partials/header.php'?>
    <body>
        <main>
            <form method="POST">
                <!-- Shows the name of the person the friendCode is from -->
                <h1>You want to add <?= $friend->name ?> as a friend?</h1>
                <!-- Confirm buttons -->
                <input class="addfriend-btn" type="submit" value="Yes" name="yes">
                <input class="addfriend-btn" type="submit" value="No" name="no">
            </form>
        </main>
    </body>
    <!-- Link to footer -->
    <?php require_once './partials/footer.php'?>
</html>
