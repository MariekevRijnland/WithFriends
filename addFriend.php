<?php
include 'partials/autoLoader.php';

$users = $user->getUsers();
$friend = null;


foreach ($users as $userIns) {
    if (strval($userIns->friendCode) == $_GET['friendCode']) {
        $friend = $user->getUserById($userIns->userID);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="css/addFriend.css">
    <title>Document</title>
</head>
<body>
<?php
require_once 'partials/header.html'
?>

<main>
    <h1>You want to add <?= $friend->name ?> as a friend?</h1>
    <input class="addfriend-btn" type="button" value="Yes">
    <input class="addfriend-btn" type="button" value="No">
</main>

<?php
require_once 'partials/footer.html'
?>
</body>
</html>
