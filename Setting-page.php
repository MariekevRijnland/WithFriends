<head>
    <title>W/Friends | Setting page</title>
</head>
<?php
    $error = '';
    require_once 'partials/autoLoader.php';
    require_once 'partials/header.php';


    if (!isset($_SESSION['loggedIn'])) {
        header('Location: login.php');
    }
    $_SESSION['userID'];
    
    $curUser = $user->getUserById($_SESSION['userID']);

    if (isset($_POST['CN'])) {
        $user->setUsername($_SESSION['userID'], $_POST['name']);
    }

    if (isset($_POST['CEM'])) {
        $user->setEmail($_SESSION['userID'], $_POST['email']);
    }

    if (isset($_POST['CP'])) {
        $error = $user->ChangePassword($_SESSION['userID'], $_POST['password'], $_POST['passwordConf']);
    }
    
    if (isset($_POST['delete'])) {
        $user->delete($_SESSION['userID']);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./CSS/settings.css">
        <link rel="stylesheet" href="./CSS/style.css">
    </head>
    <body>
        <?php require_once 'partials/header.php'?>

        <div id="backdrop">
            <div class="pfp">
                <a href="#"> <!--add href to file exploder-->
                    <img src='./images/default-avatar.png' id="pfp" onmouseover="this.src='./images/ChangePFP.png';" onmouseout="this.src='./images/default-avatar.png';" />
                </a>
            </div>  
            <div class="user_email">
                <div class="username">
                    <form method="POST">
                        <h3>Change Username</h3>
                            <input type="text" name="name" placeholder="Change name" value="<?= $curUser->name ?>"> <br>
                            <input type="submit" name="CN" value="Submit">      
                    <form>
                </div>

                <div class="email">
                    <form method="POST">
                        <h3>Email adress</h3>
                            <input type="email" name="email" placeholder="Change email address"  value="<?= $curUser->email ?>"> 
                            <input type="submit" name="CN" value="Submit">
                    <form>
                </div>     
            </div>   
            <br><br><br><br>
            <div class="password_d">    
                <div class="password">
                    <form method="POST">   
                        <h3>Password</h3>
                            <input type="password" name="password" placeholder="Change password">
                            <input type="password" name="passwordConf" placeholder="Confirm password">
                            <input type="submit" name="CN" value="Submit">
                        <?= $error ?>
                    </form>
                </div>    

                <div class="delete_disable">
                    <form method="POST">
                            <input type="submit" name="disable" value="Disable account">
                            <br>
                            <input type="submit" name="delete" value="Delete account">
                    </form>
                </div>
            </div>
        </div>
        <?php require_once 'partials/footer.php'?>
    </body>
</html>