/**
 * Adds three markers and alters the view bounds of the map to ensure that all
 * markers are visible
 *
 * @param  {H.Map} map      A HERE Map instance within the application
 */
 function addMarkersAndSetViewBounds() {
    // create map objects
    /*var leiden = new H.map.Marker({lat:52.160114,  lng:4.497010}),
        denhaag = new H.map.Marker({lat:52.078663, lng:4.288788}),
         rotterdam = new H.map.Marker({lat:51.926517, lng:4.462456}),
        group = new H.map.Group();*/

  var friendCoords = [];
  var  group = new H.map.Group();

  friends.forEach(value => {
    friendCoords.push(new H.map.Marker({lat: value.lat,  lng: value.long}))
  });
  
 
  
    // add markers to the group
 group.addObjects(friendCoords);
    map.addObject(group);
  
    // get geo bounding box for the group and set it to the map
    map.getViewModel().setLookAtData({
      bounds: group.getBoundingBox()
    });
  }
  
  /**
   * Boilerplate map initialization code starts below:
   */
  
  //Step 1: initialize communication with the platform
  // In your own code, replace variable window.apikey with your own apikey
  var platform = new H.service.Platform({

    apikey:  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYgv-qpajrBuq7orUV5x6WhAPjVK2GioU&callback=initMap"
  
  });
  var defaultLayers = platform.createDefaultLayers();
  
  //Step 2: initialize a map - this map is centered over Europe
  // note that all the markers are in North America...
  var map = new H.Map(document.getElementById('map'),
    defaultLayers.vector.normal.map,{
    center: {lat:52, lng:5},
    zoom: 25,
    pixelRatio: window.devicePixelRatio || 1
  });
  // add a resize listener to make sure that the map occupies the whole container
  window.addEventListener('resize', () => map.getViewPort().resize());
  
  //Step 3: make the map interactive
  // MapEvents enables the event system
  // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
  var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
  
  // Now use the map as required...
  addMarkersAndSetViewBounds(map);