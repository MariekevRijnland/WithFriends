<head> 
  <link rel="stylesheet" href="css/style.css">
    <title>Contact Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
    * {
      box-sizing: border-box;
    }
  
    h1{
      margin-top: 15px;
    }

    body {
      font-family: 'Noto Sans';
      text-align:center ;
      background-image: url("./img/map-bg.jpeg");
    }
    
    article {
      float: left;
      padding: 20px;
      width: 70%;
      background-color: #ffffff;
      height: 600px;      
    }
    
    #Query{
    height: 200px;
    display: block;
    width: 300px;
    border-radius:11px;
    }

    p.para2{
      text-align:center ;
      text-indent: 600px;      
    }

    section::after {
      content: "";
      display: table;
      clear: both;
    }
      .contact-form{
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    
      .Contact-Input{
        width: 300px;
        margin: 5px 0px;
      }

      .button{
        padding: 10px 40px;
        margin: 10px 0px;
        border-radius:11px;
        background-color:whitesmoke;
      }

      .container{
        display:flex;
        flex-direction:row;
        justify-content: center;
        column-gap: 150px;
      }
      div{
      }

      @media (max-width: 600px) {
      nav, article {
        width: 100%;
        height: auto;
         }

      #query {
        width: 100%;
      }

      #button{
        margin-bottom: 100px;
      }

      .map {
        width: 100%;
      }

      .container{
        display:flex;
        flex-direction: column;
      }

      
    }
  </style>
</head>
<header>
      <div id="brand"><a href="/"><img src="images/With_friends_logo.png" alt=""></a></div>
      <nav>
        <ul>
          <!-- This are all the links to other other pages -->

          <li><a href="/products">Messages</a></li>
          <li><a href="/about">Friends</a></li>
          <li><a href="/about">Name</a></li>
          <img class="circle" src="images/user.png" alt="">
        </ul>
      </nav>
      <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
       
        <!-- This is the Hamburger menu that would appear on mobile devices or smaller screens -->
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
          <ul class="mobile-menu">
            <li><a href="/Messages">Messages</a></li>
            <li><a href="/Friends">Friends</a></li>
            <img class="circle" src="images/user.png" alt="">
            <li><a href="/Name">Name</a></li>
          </ul>
      </div>
      <script src="js/global.js"></script>
    </header> 

 
    
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
          <strong>Phone Number:</strong> 0882221777  <br> <strong>Email:</strong> mboRijnlandWithFriends@gmail.com <br> <strong>Address:</strong> Van Doornenplantsoen 11 2722 ZA Zoetermeer 
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
    <div class="footer">
        <footer>
          <!-- This is the responsive footer -->
       <ul>
          <li><a href="Policy">Policy</a></li>
          <li><a href="FAQ">FAQ</a></li>
          <li><a href="Contacts">Contacts</a></li>
        </ul>
      </footer>
      </div>
        </main>
</html>