<?php ?>
<html>

  <body id="markers-on-the-map">
    <b>Den Haag</b>, <b>Rotterdam</b> and <b>Leiden</b> 
    <div id="map"></div>
   
    <script type="text/javascript" src='demo.js'></script>
    <script>
      function autoRefresh() {
          window.location = window.location.href;
      }
      setInterval('autoRefresh()', 600 * 100000);
  </script>
  </body>
</html>
