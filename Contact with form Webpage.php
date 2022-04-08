
<?php
require_once 'partials/autoLoader.php';
?>



<html>

<?php
require_once 'partials/header.php';
?>

<head>  
  <title>Contact Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Noto Sans';
      font-size:large

    }
    
    .container {
      display:flex;
      justify-content:center;
      flex-direction:column;
      margin-left: 46vw;
      margin-top: 10vh;
    }
    
    p {
      display:flex;
      justify-content:center;
      flex-direction:column;
    }
    
    
    
    
    @media (max-width: 600px) {
      nav, article {
        width: 100%;
        height: auto;
      }
    }
    </style>
    </head>
    
  
    <body>
    
    <section class="container">
    
        
          <h2>Contact information </h2>
          <br>
          <p><strong> Email:</strong> mboRijnlandWithFriends@gmail.com </p>
          <br>
          <p><strong>Phone Number:</strong> 088 222 1777 </p>
          <br>
        

  </section>

      <article class="container">
        
        <form>
        <h2> Submit a Question </h2>
          <label for="name">Name:</label><br>
          <input type="text" id="name" name="name"><br>

          <label for="email">Contact Email</label><br>
          <input type="text" id="email" email="email"><br>

          <label for="question">What is your question?</label><br>
          <input type="text" id="lname" name="lname">
        </form>
       </article>
    </body>

    <?php
require_once 'partials/footer.php';
?>

    </html>