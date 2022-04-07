<?php
require_once 'partials/autoLoader.php';
require_once 'partials/header.php';
require_once 'partials/footer.php';

if (!isset($_SESSION['loggedIn'])) {
    header('Location: login.php');
}

$_SESSION["userID"];

?>

<!DOCTYPE html>
<html>
<style>
main{
    background-color: #03045E;
    text-align: center;
    height: 700px;
    color: #ADE8F4;
}

p1{
    font-size: 18px;
}
p2{
    font-size: 14px;
}
.dropbtn {
  background-color: #0077B6;
  padding: 8px 75px;
  font-size: 13px;
  border: none;
  width: 49.4vw;
  height: 10vh;
}

.dropdown {
  position: relative;
  display: inline-block;
  left: 0vw;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #ADE8F4;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  padding: 8px 75px;
  text-decoration: none;
  display: block;
  width: 49.4vw;
  right:0;
  z-index: 1;
}
.dropdown-content a:hover {background-color: #ADE8F4;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color:#ADE8F4;}

.friendList {
	background-color:#CAF0f8;
	border:1px solid #ADE8F4;
	display:inline-block;
	font-size:13px;
  width: 49.4vw;
  height: 8vh;
}
.friendList:hover {
	background-color:#ADE8F4;
}
.friendList:active {
    position:relative;
	  top:1px;
}

.search-input {
width: 15vw;
height: 6vh;
border-radius: 20%;
text-align: center;
border: 3px solid #00002e;
background: #ADE8F4;
}

.search-btn {
  padding: 8px 75px;
  text-align: center;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  border-radius: 20%;
  border: 3px solid #00002e;
  background: #ADE8F4;
}
.pfpImage {
  width: 44px;
  height: 44px;
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
<?php
require_once 'classes/Friend.php';
require_once 'classes/User.php';
?>
<body>

</body>
<main>
    <!-- Main Focus Managing Friends Sidebar -->
    <h1>Friends</h1>
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
  </button><br>
    <p1>Add</p1><br>
    <p2>Friend Code: <?php foreach($friend->getCode() as $userIns){
  echo $userIns->friendCode;
}?></p2><br> <!-- Friend Code Should Be Pre-Generated On Account Creation? -->


<p1>List</p1><br>
<?php foreach($user->getFriends() as $userIns) {?>
    <div class="dropdown" style="float:right;">
        <button class="dropbtn" ><img src="./img/<?php echo $userIns->profilepic;?>" class="pfpImage">
         <?php echo $userIns->name;?>
        </button>
        <div class="dropdown-content">
          <form method="post">
            <button class="friendList" name="<?php $pTest ?>">Remove Friend</button>
          </form>
        </div>
    </div>
  <?php } 
  
      foreach($friend->deleteFriend() as $delete) {
        echo $delete->friendID. "<br>";
      }
  ?>
    </div></br></br>
</main>
</html>