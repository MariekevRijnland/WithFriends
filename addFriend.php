<?php
    include 'partials/autoLoader.php';

    if (isset($_POST['yes'])) {   
    }
    if (isset($_POST['no'])) {
        header('Location: index.html');
    }
    if (!isset($_GET['friendCode'])) {
        header('Location: index.html');
    }

    $users = $user->getUsers();

    foreach ($users as $userIns) {
        if (isset($userIns->friendCode) && strval($userIns->friendCode) == $_GET['friendCode']) {
            $friend = $user->getUserById($userIns->userID);
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./CSS/footer.css">
        <link rel="stylesheet" href="./CSS/header.css">
        <link rel="stylesheet" href="./CSS/addFriend.css">
        <title>W/Friends | Add Friend</title>
    </head>
    <?= require_once './partials/header.php'?>
    <body>
        <main>
            <form method="POST">
                <h1>You want to add <?= $friend->name ?> as a friend?</h1>
                <input class="addfriend-btn" type="submit" value="Yes" name="yes">
                <input class="addfriend-btn" type="submit" value="No" name="no">
            </form>
        </main>
    </body>
    <?=require_once './partials/footer.php'?>
</html>
