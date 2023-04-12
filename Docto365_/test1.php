

<html>
  <head>
    <style>
      #map {
        height: 100%;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    
    <script>
    
      function initMap() {
        var uluru = {lat: 20.349424, lng: 85.814613};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
      
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpWoomE3h4mRN86tKsIWY8fr8c-QNHuKY&callback=initMap">
    </script>
  </body>
</html>