
function getLocation(){
    var msg; 
    if('geolocation' in navigator){
      // geolocation is supported :)
        $('.resultLocation').html(`
          <style>
            .loader {
                height: 50px;
                width: 50px;
                background: dodgerblue;
                transform: rotate(225deg);
                -webkit-animation: turnMain 1s ease-out infinite;
                        animation: turnMain 1s ease-out infinite;
              }
              .loader,
              .loader .outer,
              .loader .inner {
                position: relative;
                transform-origin: center center;
                display: grid;
                place-items: center;
                border-radius: 0 96px 96px 96px;
                box-shadow: 0 0 3px -1px black;
              }
              .loader .outer,
              .loader .inner {
                margin: 8px;
                height: calc(100% - 8px * 2);
                width: calc(100% - 8px * 2);
              }
              .loader .outer {
                background: dodgerblue;
                mix-blend-mode: overlay;
                -webkit-animation: turn 1s ease-out infinite, overlayFilter 14s ease-out infinite;
                        animation: turn 1s ease-out infinite, overlayFilter 14s ease-out infinite;
              }
              .loader .inner {
                background: violet;
                mix-blend-mode: multiply;
                -webkit-animation: turn 1s ease-out infinite;
                        animation: turn 1s ease-out infinite;
              }
              
              @-webkit-keyframes overlayFilter {
                0% {
                  background: yellowgreen;
                }
                50% {
                  background: #002244;
                }
                100% {
                  background: yellowgreen;
                }
              }
              
              @keyframes overlayFilter {
                0% {
                  background: yellowgreen;
                }
                50% {
                  background: #002244;
                }
                100% {
                  background: yellowgreen;
                }
              }
              @-webkit-keyframes turn {
                from {
                  transform: rotate(0deg);
                }
                to {
                  transform: rotate(360deg);
                }
              }
              @keyframes turn {
                from {
                  transform: rotate(0deg);
                }
                to {
                  transform: rotate(360deg);
                }
              }
              @-webkit-keyframes turnMain {
                from {
                  transform: rotate(225deg);
                }
                to {
                  transform: rotate(580deg);
                }
              }
              @keyframes turnMain {
                from {
                  transform: rotate(225deg);
                }
                to {
                  transform: rotate(580deg);
                }
              }
            </style>
            <div class="loader">
              <div class="outer">
                <div class="inner"></div>
              </div>
            </div>
        `)
      requestLocation();

    }else{
      // no geolocation :(
      msg = "Sorry, looks like your browser doesn't support geolocation";
      // outputResult(msg); // output error message
      $('.pure-button').removeClass('pure-button-primary').addClass('pure-button-success'); // change button style
    }
  
    function requestLocation(){
      var options = {
        // enableHighAccuracy = should the device take extra time or power to return a really accurate result, or should it give you the quick (but less accurate) answer?
        enableHighAccuracy: true,
        // timeout = how long does the device have, in milliseconds to return a result?
        timeout: 5000,
        // maximumAge = maximum age for a possible previously-cached position. 0 = must return the current position, not a prior cached position
        maximumAge: 0
      };
    
      // call getCurrentPosition()
      navigator.geolocation.getCurrentPosition(success, error1, options); 
    
      function success(pos){
        // get longitude and latitude from the position object passed in
        var lng = pos.coords.longitude;
        var lat = pos.coords.latitude;
        // and presto, we have the device's location!
        msg = 'You appear to be at longitude: ' + lng + ' and latitude: ' + lat  + '<img src="https://maps.googleapis.com/maps/api/staticmap?zoom=15&size=300x300&maptype=roadmap&markers=color:red%7Clabel:A%7C' + lat + ',' + lng+ '&sensor=false">';
        outputResult(lng,lat); // output message
        // $('.pure-button').removeClass('pure-button-primary').addClass('pure-button-success'); // change button style
      }
    
    } 
  
    function outputResult(lng,lat){
        var settings = {
            "url": "https://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+lng+"&key=AIzaSyDGGmaqnb27aHk2K4-RDRib8ThdXKXMApo",
            "method": "GET",
            "timeout": 5000,
          };
          
        $.ajax(settings).done(function (response) {
            for (let index = 0; index < response.results.length; index++) {
                const element = response.results[index];
                // console.log(element);
                if (element.geometry.location_type == "GEOMETRIC_CENTER") {
                    $('.resultLocation').addClass('result').html(element.formatted_address);
                }
            }
        });
        // https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=YOUR_API_KEY
    //   $('.result').addClass('result').html(msg);
    }

}