<?php include 'partials/autoLoader.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href="./CSS/contact.css"> 
    <link rel="stylesheet" href="./CSS/style.css">
    <title>W/Friends | Contact Page</title>
</head>
<?php require_once './partials/header.php'; ?>

<body> 
  
  <main>
    <div class="container">
      <div>
        <h1> W/Friends Contact Information</h1><br><br>

        <!-- This is the Google Map that shows the location of the wFriends Headquaters -->
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19586.639779794175!2d4.4924928!3d52.1465086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5c663d413a42f%3A0xcaddc0f3c590aca3!2smboRijnland!5e0!3m2!1sen!2snl!4v1649063832258!5m2!1sen!2snl" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <br><br>
        <p>
          <!-- This is the contact information for wFriends company -->  
          <div class="info">
            <strong>Phone Number:</strong> 0882221777  <br> 
            <strong>Email:</strong> mboRijnlandWithFriends@gmail.com <br>
            <strong>Address:</strong> Van Doornenplantsoen 11 2722 ZA Zoetermeer 
          </div>
        </p>
      </div>

      <div class="container">
        
        <!-- This is the Question form  -->
        <form class="Contact-Form">
        <h1> Submit a Question </h1><br><br>
          <div>
            <!-- This is the input for the Name of the person asking the Question -->
            <label for="name"><strong>Name:</strong></label><br>
          <input class="Contact-Input" type="text" size="30" id="name" name="name"><br>
        </div>

          <div>
            <!-- This is the input for the email for a response to the question -->
            <label for="email"><strong>Contact Email</strong></label><br>
          <input class="Contact-Input" type="text" size="30" id="email" email="email"><br>
        </div>

          <div>
            <!-- This is the input for the question -->
            <label for="question">What is your question?</label><br>
          <textarea class="Contact-Input" id="Query" type="text" name="lname"></textarea>
        </div>
          <!-- This is the fancy submit button that would send the question to the Database -->
          <input class="Button" id="button" type="submit" value="Submit"><br>
        </form>

      </div>
      
    </div>
    <?php
       require_once './partials/footer.php';
     ?>
        </main>
</html>