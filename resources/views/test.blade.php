
<script>
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else { 
        console.log("Geolocation is not supported by this browser.");
      }
    }
   
   function showPosition(position) {
     var Latitude = position.coords.latitude;
     var Longitude = position.coords.longitude;
     console.log($Latitude);
   }
   </script>
