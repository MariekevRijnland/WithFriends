<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
var x = document.getElementById("demo");
$(document).ready(function(e) {
    var refresher = setInterval("update_content();",5000); // 30 seconds
})

function update_content(){

    $.ajax({
      type: "GET",
      url: "./getLocation.php", // post it back to itself - use relative path or consistent www. or non-www. to avoid cross domain security issues
      cache: false, // be sure not to cache results
    })

}


function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {

  $.ajax({
    type: "POST",
    url: "storeLocation.php",
    contentType: 'application/json',
    data: JSON.stringify({
      lat: position.coords.latitude,
      long: position.coords.longitude
    }),
    dataType: 'json'
  });
}

window.onload = getLocation;
</script>