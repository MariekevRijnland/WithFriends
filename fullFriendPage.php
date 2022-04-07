<!DOCTYPE html>
<html>
<style>
main{
    background-color: #0077B6;
    text-align: center;
    height: 700px;
    color: black;
    background-image: url("./img/map-bg.jpeg");
}


p1{
    font-size: 18px;
}
p2{
    font-size: 14px;
}
.dropbtn {
  background-color: whitesmoke;
  padding: 8px 75px;
  font-size: 20px;
  border: none;
  width: 40vw;
  height: 7vh;
}

.dropdown {
  position: relative;
  display: inline-block;
  left: -10vw;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #ADE8F4;
  width:40vw;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  padding: 8px 75px;
  text-decoration: none;
  display: block;
  width: 40vw;
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
  width: 40vw;
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
border-radius: 25px;
text-align: center;
border: 2px solid #00002e;
background: whitesmoke;
}

.search-btn {
  padding: 8px 75px;
  text-align: center;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  border-radius: 25px;
  border: 2px solid #00002e;
  background: whitesmoke;
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
<code>
<!-- JavaScript When needed -->
</code>
<title> W/ Friends | Friends </title>
<?php include('index.html'); 
require_once 'classes/User.php';
require_once 'classes/Friend.php';
$postIns = new Friend();
$userClass = new User();
 ?>
<body>

</body>
<main>
    <!-- Main Focus Managing Friends Sidebar -->
    <h1>Friends add</h1>
    <br>
    <p2>Friend Code: <?php foreach($postIns->getCode() as $user){
  echo $user->friendCode;
}?></p2><br> <!-- Friend Code Should Be Pre-Generated On Account Creation? -->
     <section class="test">
    <section id="search-box">
      <form class="item-search-box" method="POST" action="#">
        <input class="search-input" type="text" name="search" placeholder="Search by friend code.." ></br>
        <button class="search-btn" type="submit" name="submit-search" value="Zoeken"><i class="fas fa-search"></i>Search</button>
      </form>
    </section>
  </section>
  <?php
    require_once 'classes/Friend.php';
    $serieIns = new Friend();
    $zoek = new Friend();

    if(isset($_POST["submit-search"])) {
      // foreach($zoek->search($_POST['search']) as $friends){
      //   echo $friends;
      // }
    }
?>
  <section id="fotos">
            <section id="flex">
                <?php if(isset($_POST["submit-search"])) {
                  foreach($zoek->search($_POST['search']) as $friend){?>
                    <article>
                        <a href="#" style="color: white;">
                        <p><?php echo $friend->name; ?></p>
                        </a>
                    </article>
                <?php } }?>
            </section>
  </section>

    <p1>List</p1><br>
    <?php foreach($userClass->getUsers() as $user) {?>
    <div class="dropdown" style="float:right;">
        <button class="dropbtn" ><img src="./img/<?php echo $user->profilepic;?>" class="pfpImage">
         <?php echo $user->name;?>
        </button>
        <div class="dropdown-content">
          <button class="friendList" href="#">Message</button>
          <button class="friendList">Remove Friend</button>
        </div>
    </div>
  <?php } ?>
    </div></br></br>
</main>
</html>