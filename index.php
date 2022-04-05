<?php ?>
<html>

<head>    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">    
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">    
<title>Zooming to a Set of Markers</title>   
 <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />   
  <link rel="stylesheet" type="text/css" href="css/demo.css" />    
  <link rel="stylesheet" type="text/css" href="css/styles.css" />    


<link rel="stylesheet" type="text/css" href="../template.css" />    
<script type="text/javascript" src='js/test-credentials.js'></script>
 <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>  
   <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>  
   <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>   
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>  </head>



  <body id="markers-on-the-map">
    <div id="map"></div>
   
    <script type="text/javascript" src='js/demo.js'></script>
    <script>
      function autoRefresh() {
          window.location = window.location.href;
      }
      setInterval('autoRefresh()', 600 * 100000);
  </script>
  </body>
</html>
