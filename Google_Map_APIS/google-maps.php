<!DOCTYPE html>
<html>
    <head>
        <title>Introduction to Google Maps Javascript API</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <style>
            html, body{
                height:100%;   
            }
            #map{
                height:60%;   
            }
        </style>
    </head>
    
    <body>
        <div id="map"></div>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7chtq3xYQ8-5p3GJLtgji4_wwZ8RfBjo"></script>
        <script>
            
            //set map options
            var myLatLng = {lat: 19.0029824, lng: 73.0996736};
            var mapOptions = {
                center: myLatLng,
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.SATELLITE
                
            };
            
            //create map
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            
            //setting the mapTypeId upon construction
            map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
        </script>
    </body>

</html>