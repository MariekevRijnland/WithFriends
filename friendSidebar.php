<?php
require_once 'partials/autoLoader.php';
require_once 'partials/header.php';

if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
}

$_SESSION["userID"];
?>

<!DOCTYPE html>
<html>
<style>

aside {
    text-align: center;
    float: right;
    background-color: #00b4d8;
    height: 600px;
    width: 15%;
    border-radius: 25px;
    box-shadow: 5px 10px 18px #888888;
}
p1{
    font-size: 18px;
}
p2{
    font-size: 14px;
}
.dropbtn {
  background-color: #90e0ef;
  /* padding: 12px 85px; */
  font-size: 10px;
  text-align: center;
  width: 14vw;
  height: 8vh;
}
.dropbtn

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #90e0ef;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  padding: 8px 75px;
  text-decoration: none;
  display: block;
  width: 8vh;
}
.dropdown-content a:hover {background-color: #ADE8F4;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color:#ADE8F4;}

.friendList {
	background-color:#90e0ef;
	border:1px solid #90e0ef;
	display:inline-block;
	font-size:13px;
	padding: 8px 75px;
  width: 30vh;
}
.friendList:hover {
	background-color:#90e0ef;
}
.friendList:active {
    position:relative;
	top:1px;
}

.search-input {
width: 75%;
height: 25px;
background-color:whitesmoke;
border-radius: 25px;
margin-left: 5px;
text-align: center;
}

.search-btn {
  padding: 8px 30px;
  text-align: center;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  background-color: whitesmoke;
  border-radius: 25px;
}

.search-btn:hover {
  opacity: 1;
}

.pfpImage {
  width: 30px;
  height: 30px;
  border-radius: 100%;
  float: left;
  position: absolute;
  left: 88%;
  margin-top: -1vh;

  /*
  margin-top: 1px;
  margin-bottom: 1px;
  left: 95%;
  margin-right: -5%;
  */
}

</style>
<script>
<!-- JavaScript When needed -->
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>
<title> W/ Friends | Friends </title>
<body>
<?php
require_once 'classes/Friend.php';
require_once 'classes/User.php';
// include('index.html');
// [{'id' => 1, 'title' => 'nfeubeu'}]
// foreach($postIns->getUser() as $user){
//   echo $user->friendCode . "<br>";
//   echo $user->name;
// }
// ?>
</body>
<aside>
    <!-- Main Focus Managing Friends Sidebar -->
    <h1>Friends</h1>
    <!-- <input type="text" value="localhost/WithFriends/addFriend.php?friendCode=<?php foreach($friend->getFriendCode() as $userIns){
  echo $userIns->friendCode;}?>" id="myInput">
<button href="localhost/WithFriends/addFriend.php?friendCode=<?php foreach($friend->getFriendCode() as $userIns){
  echo $userIns->friendCode;}?>" scr=>Copy Link</button> -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button" 
data-href="localhost/WithFriends/addFriend.php?friendCode=<?php foreach($friend->getFriendCode() as $userIns){

echo $userIns->friendCode;}?>" 
data-layout="button_count">
</div>

<button onclick="window.open('https://web.whatsapp.com:/send?text=localhost/WithFriends/addFriend.php?friendCode=<?php foreach($friend->getFriendCode() as $userIns){

echo $userIns->friendCode;}?>')"> Open WhatsApp </button>


<input type="text" value="localhost/WithFriends/addFriend.php?friendCode=<?php foreach($friend->getFriendCode() as $userIns){

echo $userIns->friendCode;}?>" id="myInput" style="display:none;">
<div class="tooltip">
<button onclick="myFunction()" onmouseout="outFunc()">
     Copy Friendlink to clipboard  
  </button>

</div>
    <p1>Add</p1><br>
    <p2>Friend Code: <?php foreach($friend->getCode() as $userIns){
  echo $userIns->friendCode;
}?></p2><br> <!-- Friend Code Should Be Pre-Generated On Account Creation? -->


    <p1><strong>List</strong></p1><br>
<?php foreach($user->getFriends() as $userIns) {?>
    <div class="dropdown" style="float:right;">
        <button class="dropbtn" ><img src="./img/<?php echo $userIns->profilepic;?>" class="pfpImage">
         <?php echo $userIns->name;?>
        </button>
        <div class="dropdown-content">
          <button class="friendList">Remove Friend</button>
        </div>
    </div>
  <?php } 
  ?>
    </div></br>

</aside>
</html>