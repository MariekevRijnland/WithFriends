<?php
require_once 'partials/header.php';
require_once 'partials/autoLoader.php';
include 'getLocation.php';

if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
}

$friends = $user->getFriends();
$curUser = $user->getUserById($_SESSION['userID']);

echo <<<S
 <script>
    var friends = [];
 </script>
S;

echo "<script>var myCoords = { lat: $curUser->latitude , long: $curUser->longitude  }</script>";

foreach ($friends as $friendIns) {
    echo "<script>friends.push({ lat: $friendIns->latitude , long: $friendIns->longitude })</script>";
};
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <title>Zooming to a Set of Markers</title>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css"/>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css"/>
    <link rel="stylesheet" href="CSS/style.css">

    <script type="text/javascript" src='js/test-credentials.js'></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>

    <link rel="stylesheet" type="text/css" href="CSS/template.css"/>
    <title>W/ Friends</title>
</head>

<body id="markers-on-the-map">


<section class="map_container">
    <div id="map"></div>
</section>

<script type="text/javascript" src='js/demo.js'></script>

<?php
require_once 'partials/footer.php';
?>

</body>


</html>
