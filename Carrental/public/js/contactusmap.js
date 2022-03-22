var contactMe = {
    createElementg: function(type,urli) {
        switch (type) {
            case 'script':
                var t = document.createElement(type);
                t.src = urli, t.type = "text/javascript", document.getElementsByTagName("head")[0].appendChild(t)
                break;
        }
    }
};

// contactMe.createElementg('script','https://maps.googleapis.com/maps/api/js?key=AIzaSyDGGmaqnb27aHk2K4-RDRib8ThdXKXMApo&libraries=places');
(() => {
    var mapContactLocator = {};
    mapContactLocator.pics = null;
    mapContactLocator.map = null;
    mapContactLocator.markerClusterer = null;
    mapContactLocator.markers = [];
    mapContactLocator.infoWindow = null;
    mapContactLocator.geocoder = null;
    mapContactLocator.prevClickedTab = null;
    mapContactLocator.prevClickedLocation = null;
    mapContactLocator.prevClickedContactUs = null;
    mapContactLocator.firstClick = null;
    mapContactLocator.malDir = null;

    mapContactLocator.init = function (data) {
        // console.log(data)
        this.settings = data;
        var contactlatlng = new google.maps.LatLng(this.settings.map_lat, this.settings.map_lng);
        var zoomwfsfsaf = parseFloat(this.settings.map_zoom);
        var options = {
            'zoom': zoomwfsfsaf,
            'center': contactlatlng,
            'mapTypeId': google.maps.MapTypeId.ROADMAP,
            'mapTypeControl': false,
        };
        mapContactLocator.map_id = data.map_id;
        mapContactLocator.map_style = this.settings.map_styles;
        mapContactLocator.map = new google.maps.Map(document.getElementById(data.map_id), options);
        mapContactLocator.pics = data.country;
        mapContactLocator.map.setOptions({
            styles: this.settings.map_styles
        });
        mapContactLocator.infoWindow = new google.maps.InfoWindow();
        mapContactLocator.showMarkers();
    };
    mapContactLocator.showMarkers = function () {
        mapContactLocator.markers = [];

        if (mapContactLocator.markerClusterer) {
            mapContactLocator.markerClusterer.clearMarkers();
        }

        var numMarkers = mapContactLocator.pics.length;
        for (var i = 0; i < numMarkers; i++) {
            //   console.log(mapContactLocator.pics[i].location)
            var titleText = mapContactLocator.pics[i].post_title;
            if (titleText == '') {
                titleText = 'No title';
            }
            var panel_id = this.settings['panel_id'];

            mapContactLocator.pics[i].panelItem = contactitem;

            var contactlatLng = new google.maps.LatLng(mapContactLocator.pics[i].latitude, mapContactLocator.pics[i].longitude);
            var imageUrl = this.settings['icon_url'];
            var markerImage;
            if (imageUrl) {
                markerImage = new google.maps.MarkerImage(imageUrl, new google.maps.Size(this.settings['icon_width'], this.settings['icon_height']))
            } else {
                markerImage = new google.maps.MarkerImage('https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png',
                    new google.maps.Size(27, 43));
            }
            var marker = new google.maps.Marker({
                'position': contactlatLng,
                'icon': markerImage
            });

            if (this.settings['type'] == 'country') {
                // console.log('country')
                var contactitem = jQuery('#' + panel_id + ' [data-location="' + mapContactLocator.pics[i].location + '"]')[0];
                var fo = mapContactLocator.itemClickFunction(mapContactLocator.pics[i], contactlatLng, marker);
                google.maps.event.addDomListenerOnce(contactitem, 'click', fo);
            }

            if (this.settings['type'] == 'office') {
                var officeitem = jQuery('#' + panel_id + ' [data-office="' + mapContactLocator.pics[i].location + '"]')[0];
                var fn = mapContactLocator.markerClickFunction(mapContactLocator.pics[i], contactlatLng, marker, officeitem);
                google.maps.event.addDomListener(officeitem, 'click', fn);
            }
            // console.log(contactitem)
            google.maps.event.addListener(marker, 'click', fn);
            mapContactLocator.markers.push(marker);
        }

        window.setTimeout(mapContactLocator.time, 0);
    };
    mapContactLocator.distanceInKmBetweenEarthCoordinates = function (lat1, lon1, lat2, lon2) {
        var earthRadiusKm = 6371;

        var dLat = this.degreesToRadians(lat2 - lat1);
        var dLon = this.degreesToRadians(lon2 - lon1);

        lat1 = this.degreesToRadians(lat1);
        lat2 = this.degreesToRadians(lat2);

        var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.sin(dLon / 2) * Math.sin(dLon / 2) * Math.cos(lat1) * Math.cos(lat2);
        var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return earthRadiusKm * c;
    };
    mapContactLocator.degreesToRadians = function (degrees) {
        return degrees * Math.PI / 180;
    };
    mapContactLocator.loaderOne = function(loaderTwo = ''){
        return `
            <div class="load-wrapp">
                <div class="load-5">
                    <div class="ring-2">
                        <div class="ball-holder">
                        <div class="ball"></div>
                        </div>
                    </div>
                    `+loaderTwo+`
                </div>
            </div>
        `;
    };
    mapContactLocator.loaderTwo = function(str){
        let strArr = str.split('');
        let loadLetters = ``;
        for (let index = 0; index < strArr.length; index++) {
            const letter = strArr[index];
            loadLetters += `<div class="l-`+(index+1)+` letter">`+letter+`</div>`
        }
        console.log();
        return `
            <div class="load-wrapp">
                <div class="load-6">
                    <div class="letter-holder">
                        `+loadLetters+`
                    </div>
                </div>
            </div>
        `;
    };
    mapContactLocator.sendEmail = (address) => {

        let send = () => {
            message_subject = $('#office_message_subject').val();
            message_content = $('#office_message_message').val();
            // console.log(message_content)
            Email.send({
                Host: "smtp.gmail.com",
                Username: "tbeta311@gmail.com",
                Password: "Spawn13_",
                To: address,
                From: "tbeta311@gmail.com",
                Subject: message_subject,
                Body: message_content
            }).then(function (message) {
                alert("Mail has been sent successfully")
            });
        };
        $('#from-panel').html(``);
        $('#trans-type-panel').html(`
            <p>Connect</p>
            <div id='social'>
                <a class='social'>
                    <span class='entypo-facebook'></span>
                </a>
                <a class='social'>
                    <span class='entypo-twitter'></span>
                </a>
                <a class='social'>
                    <span class='entypo-linkedin'></span>
                </a>
                <a class='social'>
                    <span class='entypo-gplus'></span>
                </a>
                <a class='social'>
                    <span class='entypo-instagrem'></span>
                </a>
            </div>
            <div id="form">
                <p>Get in Contact</p>
                <input placeholder='Subject' type='text' id="office_message_subject">
                <textarea placeholder='Message' rows='4' id="office_message_message"></textarea>
                <input id="send_user_email" placeholder='Send' type='submit'>
            </div>
            <p>other way</p>
            <p class='other entypo-mail'>
                <a href='#'>` + pic.email + `</a>
            </p>
            <p class='other entypo-phone'>` + pic.phone + `</p>
        `);

        $('#send_user_email').on('click', () => {
            send();
        })
    };
    mapContactLocator.directionService = function(info){

        var msg;
        if ('geolocation' in navigator) {
            $('#trans-type-panel ').html(mapContactLocator.loaderOne(mapContactLocator.loaderTwo('Pleasewait...')));
            requestLocation();

        } else {

            $('#right-body').html(`
                <div>
                    Sorry, looks like your browser doesn't support geolocation
                </div>
            `);
        }

        function requestLocation() {
            let options = {
                enableHighAccuracy: true,
                timeout: 5000,
                maximumAge: 0
            };

            // call getCurrentPosition()
            navigator.geolocation.getCurrentPosition(success, error1, options);

            function success(pos) {
                let lng = pos.coords.longitude;
                let lat = pos.coords.latitude;
                outputResult(lng, lat); // output message
            }
        }

        mapContactLocator.info = info;
        function outputResult(lng, lat) {
            var settings = {
                "url": "https://maps.googleapis.com/maps/api/geocode/json?latlng=" + lat + "," + lng + "&key=AIzaSyDGGmaqnb27aHk2K4-RDRib8ThdXKXMApo",
                "method": "GET",
                "timeout": 5000,
            };

            $.ajax(settings).done(function (response) {
                for (let index = 0; index < response.results.length; index++) {
                    const element = response.results[index];
                    // console.log(element);
                    if (element.geometry.location_type == "GEOMETRIC_CENTER") {
                        mapContactLocator.clientCurrentLocation = element.formatted_address;
                    }
                }
                mapContactLocator.getAutoLocateApprove();
            });
        }
    };
    mapContactLocator.markerClickFunction = function (pic, contactlatlng, marker, officeit = null) {
        return function (e) {

            e.cancelBubble = true;
            if (e.stopPropagation) {
                e.stopPropagation();
            }
            var fileurl = pic.thumbnail_url;
            var ID = pic.ID;
            // if(undefined !== e.latLng){
            // jQuery('.contact_location__main').animate({
            //     scrollTop: pic.panelItem.offsetTop - 40
            // }, 700);
            // }
            jQuery('#' + mapContactLocator.settings['panel_id'] + ' [data-dealer-id]').removeClass('dealer-hover');
            jQuery(pic.panelItem).addClass('dealer-hover');

            var infoHtml = '<div class="office-card">' +
                '<div class="office-card-left">' +
                '<img width="200" height="188" src="' + fileurl + '" class="img-responsive wp-post-image" alt="">' +
                '</div>' +
                '<div class="office-card-right">' +
                '<div class="office-name">' + pic.name + '</div>' +
                '<div class="office-details">' +
                '<div class="office-details-item"><i class="fas fa-map-marker-alt office-details-icon"></i>' + pic.location + '</div>' +
                '<div class="office-details-item office-hours">Opening Hours</div>' +
                '<div class="office-details-item office-hours-content">' +
                '<div class="office-details-item">Every: ' + pic.openWhen + '</div>' +
                '<div class="office-details-item">From: ' + pic.openFrom + '</div>' +
                '<div class="office-details-item">To: ' + pic.openTo + '</div>' +
                '</div>' +
                '<div class="office-details-item"><i class="far fa-envelope office-details-icon"></i>' + pic.email + '<span class="after-price-text"></span></div>' +
                '<div class="office-details-item"><span class="other entypo-phone">' + pic.phone + '</span></div>' +
                '</div>' +
                '</div>' +
                '</div>';

            $('#right-head').html(`
                <span class="button border-fade" id="send_email_buttond"><i class="fa-solid fa-paper-plane"></i></span>
                <span class="button border-fade" id="direction_buttond"><i class="fa-solid fa-diamond-turn-right"></i></span>
                <span class="button border-fade" id="call_buttond"><i class="fa-solid fa-phone"></i></span>
                <span class="button border-fade" id="support_buttond"><i class="fa-solid fa-headset"></i></span>
                <i class="fa-solid fa-ellipsis-vertical option"></i>
            `);

            mapContactLocator.infoWindow.setContent(infoHtml);
            mapContactLocator.infoWindow.setPosition(contactlatlng);
            mapContactLocator.infoWindow.open(mapContactLocator.map, marker);
            $('#right-head').show();
            $('#send_email_buttond').on('click', () => {
                mapContactLocator.sendEmail(pic.email);
            });
            $('#direction_buttond').on('click', () => {
                mapContactLocator.directionService(pic);
            });
            officeit.classList.toggle('active')
            
        };
    };
    mapContactLocator.getManualLocation = function(){
        $('#directionFrom').val('');
        $('#directionFrom').focus();
        $('#trans-type-panel').html(mapContactLocator.loaderOne(mapContactLocator.loaderTwo('Waiting...')));
        let malDirVal = document.getElementById('directionFrom');
        let malDirBtn = document.getElementById('getDirectionBtn');
        var options = {
            types: ['(cities)']
        }
        let autocomplete = new google.maps.places.Autocomplete(malDirVal,options);
        malDirBtn.addEventListener("click", () => {
            let searchMessage = $('.search-message');
            if (malDirVal.value != '') {
                var settings = {
                    "url": "https://maps.googleapis.com/maps/api/geocode/json?address="+malDirVal.value+"&key=AIzaSyDGGmaqnb27aHk2K4-RDRib8ThdXKXMApo",
                    "method": "GET",
                    "timeout": 5000,
                };
                $.ajax(settings).done(function (response) {
                    if (response.status == 'OK') {
                        mapContactLocator.malDir = malDirVal.value;
                        mapContactLocator.getClientTravelType();
                        searchMessage.html(``);
                    }
                    if (response.status == 'ZERO_RESULTS') {
                        // manual direction input error
                        searchMessage.html(`
                            <span><i class="fa-solid fa-triangle-exclamation error"></i> Unable to locate given location</span>
                        `);
                    }
                });
            } else {
                // manual direction input error
                searchMessage.html(`
                    <span><i class="fa-solid fa-triangle-exclamation error"></i> This field can not be empty</span>
                `);
            }
        });
    };
    mapContactLocator.getAutoLocateApprove = function(){+
        $('#from-panel').html(`
            <div class="form-group has-search mr-2">
                <div class="flex">
                    <input type="text" class="form-control " value="`+mapContactLocator.clientCurrentLocation+`" placeholder="From" id="directionFrom">
                    <button id="getDirectionBtn"><i class="fa-solid fa-diamond-turn-right"></i></button>
                </div>
                <div class="search-message"></div>
            </div>
        `);
        $('#trans-type-panel').html(`
            <div class="trans-type-panel">
                <span>Our system has detected that your current location is <span class="text-highlight">`+mapContactLocator.clientCurrentLocation+`.</span></span>
                <span>Would you like to Get direction to <span class="text-highlight">`+mapContactLocator.info.name+`</span> starting at this location?</span>
                <div>
                <button value='yes' class='right-body-btn'>Yes</button>
                <button value='no' class='right-body-btn'>No</button> 
                </div>
            </div>
        `);
        let locationApprove = document.getElementsByClassName('right-body-btn');
        for (let index = 0; index < locationApprove.length; index++) {
            let element = locationApprove[index];
            element.addEventListener('click', (e)=>{
                if (e.target.value == 'yes') {
                    mapContactLocator.getClientTravelType();
                }
                if (e.target.value == 'no') {
                    mapContactLocator.getManualLocation();
                }
            })
        }
    };
    mapContactLocator.getClientTravelType = function(){
        $('#trans-type-panel').html(`
            <div class="trans-type-panel">
                <span>Please Select A Travel Type</span>
                <div class="type-icon">
                    <i class="fa-solid fa-car travelTypeBtn" id="DRIVING"></i>
                    <i class="fa-solid fa-person-walking travelTypeBtn" id="WALKING"></i>
                    <i class="fa-solid fa-bicycle travelTypeBtn" id="BICYCLING"></i>
                    <i class="fa-solid fa-train-subway travelTypeBtn" id="TRANSIT"></i>
                </div>
            </div>
        `);
        let travelTypeBtn = document.getElementsByClassName('travelTypeBtn');
        for (let index = 0; index < travelTypeBtn.length; index++) {
            let element = travelTypeBtn[index];
            element.addEventListener('click', (e)=>{
                mapContactLocator.transitType = e.target.id;
                mapContactLocator.startDirection();
            })
        }
    };
    mapContactLocator.startDirection = function(){
        $('#trans-type-panel').html(`
            <div id="direction-panel-loader"></div>
            <div id="direction-panel-body"></div>
            <div id="direction-panel-footer"></div>
        `);
        $('#direction-panel-loader').html(mapContactLocator.loaderOne(mapContactLocator.loaderTwo('Pleaswait...')));
        const markerArray = [];
        calculateAndDisplayRoute();
        function calculateAndDisplayRoute() {
            // Instantiate a directions service.
            const directionsService = new google.maps.DirectionsService();
            // First, remove any existing markers from the map.
            for (let i = 0; i < markerArray.length; i++) {
                markerArray[i].setMap(null);
            }
            var orig = '';
            if(mapContactLocator.malDir != null){
                if (mapContactLocator.malDir != '') {
                    orig = mapContactLocator.malDir;
                }else{
                    orig = mapContactLocator.clientCurrentLocation;
                }
            }else{
                orig = mapContactLocator.clientCurrentLocation;
            }
            console.log(mapContactLocator.clientCurrentLocation)
            let directionTransit = '';
            let drivingActive = '';
            let walkingActive = '';
            let bicyclingActive = '';
            let transitActive = '';
            switch (mapContactLocator.transitType) {
                case 'WALKING':
                    directionTransit = google.maps.TravelMode.WALKING;
                    walkingActive = 'active';
                    break;
                case 'DRIVING':
                    directionTransit = google.maps.TravelMode.DRIVING;
                    drivingActive = 'active';
                    break;
                case 'BICYCLING':
                    directionTransit = google.maps.TravelMode.BICYCLING;
                    bicyclingActive = 'active';
                    break;
                case 'TRANSIT':
                    directionTransit = google.maps.TravelMode.TRANSIT;
                    transitActive = 'active';
                    break;
            }
            directionsService
            .route({
                origin: orig,
                destination: mapContactLocator.info.location,
                travelMode: directionTransit,
                unitSystem: google.maps.UnitSystem.IMPERIAL
            })
            .then((result) => {
                console.log(mapContactLocator.info)
                // Route the directions and pass the response to a function to create
                // markers for each step.
                // document.getElementById("warnings-panel").innerHTML =
                //   "<b>" + result.routes[0].warnings + "</b>";
                // Create a map and center it on Manhattan.
                var directionlatlng = new google.maps.LatLng(mapContactLocator.info.latitude, mapContactLocator.info.longitude);
                mapContactLocator.map = new google.maps.Map(document.getElementById(mapContactLocator.map_id), {
                    zoom: 13,
                    center: directionlatlng,
                    'mapTypeId': google.maps.MapTypeId.ROADMAP,
                });
                mapContactLocator.map.setOptions({
                    styles: mapContactLocator.map_style
                });
                const directionsRenderer = new google.maps.DirectionsRenderer({
                    map: mapContactLocator.map
                });
                let directionPanel = ``;
                result.routes[0].legs[0].steps.map((value,index) => {
                    directionPanel += `
                        <div id="direction-panel-item" class="direction-panel-`+index+`">
                            `+value.instructions+`
                        </div>
                    `;
                });
                document.getElementById("direction-panel-loader").style.display = 'none';
                document.getElementById("direction-panel-body").style.display = 'block';
                document.getElementById("direction-panel-body").innerHTML = directionPanel;
                $('#direction-panel-footer').html(`
                    <div class="trans-type-panel">
                        <div class="type-icon">
                            <i class="fa-solid fa-car travelTypeBtn `+drivingActive+`" id="DRIVING"></i>
                            <i class="fa-solid fa-person-walking travelTypeBtn `+walkingActive+`" id="WALKING"></i>
                            <i class="fa-solid fa-bicycle travelTypeBtn `+bicyclingActive+`" id="BICYCLING"></i>
                            <i class="fa-solid fa-train-subway travelTypeBtn `+transitActive+`" id="TRANSIT"></i>
                        </div>
                    </div>
                `);
                let travelTypeBtn = document.getElementsByClassName('travelTypeBtn');
                for (let index = 0; index < travelTypeBtn.length; index++) {
                    let element = travelTypeBtn[index];
                    element.addEventListener('click', (e)=>{
                        mapContactLocator.transitType = e.target.id;
                        mapContactLocator.startDirection();
                    })
                }
                const stepDisplay = new google.maps.InfoWindow();
                directionsRenderer.setDirections(result);
                showSteps(result, markerArray, stepDisplay, mapContactLocator.map);
            })
            .catch((e) => {
                window.alert("Directions request failed due to " + e);
            });
        }
        function showSteps(directionResult, markerArray, stepDisplay, map) {
            const myRoute = directionResult.routes[0].legs[0];
            for (let i = 0; i < myRoute.steps.length; i++) {
                const markerD = (new google.maps.Marker());
                    let stepCount = parseInt(i) + 1;
                markerD.setMap(map);
                markerD.setPosition(myRoute.steps[i].start_location);
                let textt = '<div class="contact-container">' +
                    '<div>' +
                    '<div class="contact-office-details">' +

                    '<div>' +
                        '<div class="contact-office-details-body">' +
                            '<h1>Guided tour tooltip</h1>' +
                            '<div class="slider-container">' +
                                '<div class="slider-turn">' +
                                    '<p>'+myRoute.steps[i].instructions+'</p>' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="bottom">' +
                            '<div class="step">' +
                                '<span>Step '+stepCount+'/'+myRoute.steps.length+'</span>' +
                                '<ul>' +
                                    '<li data-num="1"></li>' +
                                    '<li data-num="2"></li>' +
                                    '<li data-num="3"></li>' +
                                    '<li data-num="4"></li>' +
                                    '<li data-num="5"></li>' +
                                '</ul>' +
                            '</div>' +
                        '</div>' +
                    '</div>'
                '</div>' +
                '</div>' +
                '</div>';

                attachInstructionText(
                    stepDisplay,
                    markerD,
                    textt,
                    map
                );
                
                let panelItm = $('.direction-panel-'+i+'')[0];
                setPanelClick(
                    panelItm,
                    stepDisplay,
                    markerD,
                    textt,
                    map
                );
            }
        }
        function attachInstructionText(stepDisplay, markerD, text, map) {
            google.maps.event.addListener(markerD, "click", () => {
                stepDisplay.setContent(text);
                stepDisplay.open(map, markerD);
            });
        }
        function setPanelClick(item,stepDisplay, markerD, text, map) {
            google.maps.event.addDomListener(item, "click", () => {
                item.classList.add("active")
                stepDisplay.setContent(text);
                stepDisplay.open(map, markerD);
            });
        }
    };
    mapContactLocator.itemClickFunction = function (pic, contactlatlng, marker) {
        return function (e) {
            let htcOfficeSettings = [];
            let officeMapping = [];
            let officeLat = '';
            let officeLong = '';
            let officeTab = ``;
            pic.offices.map((value, index) => {
                if (index == 0) {
                    officeLat = parseFloat(value.lat);
                    officeLong = parseFloat(value.long);
                }
                officeMapping.push({
                    "ID": index,
                    "location": value.location,
                    "name": value.name,
                    openWhen: value.openWhen,
                    openFrom: value.openFrom,
                    openTo: value.openTo,
                    "email": value.email,
                    "phone": value.phone,
                    "thumbnail_url": "https:\/\/lh5.googleusercontent.com\/p\/AF1QipOjtB4JXOaTZfvdO-cYmVC3_u-VJyoAuoe-THWC=w408-h341-k-no",
                    "latitude": parseFloat(value.lat),
                    "longitude": parseFloat(value.long),
                });
                officeTab += `
                    <div class='location office-location' data-office='` + value.location + `' value='office_` + value.location + `' id='` + value.location + `'>
                        <span>` + value.location + `</span>
                    </div>
                `;
            });
            $('#contact-pub').html(`
                <div id='browser'>
                    <div id='browser-bar'>
                        <p>Contact Us</p>
                        <span class='arrow entypo-resize-full'></span>
                    </div>
                    <div id='content'>
                        <div id='left'>
                            <div id='contact_panel_map'>
                                <div class='map-locator'>
                                    <div id="hlf_contact_maps"></div>
                                </div>
                            </div>
                            
                            <div id="contact_location__main">
                                <div id='location-bar'>
                                    <span class='location' id="back_button">
                                        <span><i class="fa-solid fa-angle-left"></i></span>
                                    </span>
                                    ` + officeTab + `
                                </div>
                            </div>
                        </div>
                        <div id='right'>
                            <div id="right-head"></div>
                            <div id="right-body">
                                <div id="from-panel"></div>
                                <div id="trans-type-panel">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `);
            $('#back_button').on('click', () => {
                mapContactLocator.start();
            })
            htcOfficeSettings.push(mapContactLocator.config(officeLat, officeLong, officeMapping, 'office'))
            htcOfficeSettings.forEach(function (element) {
                mapContactLocator.init(element);
            });
        };
    };
    mapContactLocator.clear = function () {
        for (var i = 0, marker; marker = mapContactLocator.markers[i]; i++) {
            marker.setMap(null);
        }
    };
    mapContactLocator.change = function () {
        mapContactLocator.clear();
        mapContactLocator.showMarkers();
    };
    mapContactLocator.time = function () {
        var imageUrl = mapContactLocator.settings['claster_url'];
        var mcOptions;
        if (imageUrl) {
            var clusterStyles = [{
                url: mapContactLocator.settings['claster_url'],
                textSize: mapContactLocator.settings['claster_text_size'],
                height: mapContactLocator.settings['claster_height'],
                width: mapContactLocator.settings['claster_width']
            }, {
                url: mapContactLocator.settings['claster_url'],
                textSize: mapContactLocator.settings['claster_text_size'],
                height: mapContactLocator.settings['claster_height'],
                width: mapContactLocator.settings['claster_width']
            }, {
                url: mapContactLocator.settings['claster_url'],
                textSize: mapContactLocator.settings['claster_text_size'],
                height: mapContactLocator.settings['claster_height'],
                width: mapContactLocator.settings['claster_width']
            }, {
                url: mapContactLocator.settings['claster_url'],
                textSize: mapContactLocator.settings['claster_text_size'],
                height: mapContactLocator.settings['claster_height'],
                width: mapContactLocator.settings['claster_width']
            }, {
                url: mapContactLocator.settings['claster_url'],
                textSize: mapContactLocator.settings['claster_text_size'],
                height: mapContactLocator.settings['claster_height'],
                width: mapContactLocator.settings['claster_width']
            }];
            mcOptions = {
                gridSize: 52,
                styles: clusterStyles
            };
            mapContactLocator.markerClusterer = new MarkerClusterer(mapContactLocator.map, mapContactLocator.markers, mcOptions);
        } else {
            mapContactLocator.markerClusterer = new MarkerClusterer(mapContactLocator.map, mapContactLocator.markers, {
                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
            });
        }

    };
    mapContactLocator.codeAddress = function (address) {
        mapContactLocator.geocoder = new google.maps.Geocoder();
        mapContactLocator.geocoder.geocode({
            'address': address
        }, function (results, status) {
            if (status == 'OK') {
                var foundPosition = results[0].geometry.location;
                mapContactLocator.pics.forEach(function (element) {
                    element.radius = mapContactLocator.
                    distanceInKmBetweenEarthCoordinates(element.latitude, element.longitude, foundPosition.lat(), foundPosition.lng());
                });
                mapContactLocator.pics.sort(function (a, b) {
                    return a.radius - b.radius;
                });
                mapContactLocator.pics[0].panelItem.click();
            } else {
                console.log('Geocode was not successful for the following reason: ' + status);
            };
        });
    };
    mapContactLocator.config = (mapLat, mapLong, contactMapping, type) => {
        return {
            'type': type,
            'map_id': 'hlf_contact_maps',
            'panel_id': 'contact_location__main',
            'google_maps_api_key': 'AIzaSyDGGmaqnb27aHk2K4-RDRib8ThdXKXMApo',
            'map_zoom': '8',
            'map_lat': mapLat,
            'map_lng': mapLong,
            'icon_url': 'https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/plugins\/dealer-locator\/img\/spotlight.png',
            'icon_width': 27,
            'icon_height': 43,
            'claster_url': 'https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/plugins\/dealer-locator\/img\/m1.png',
            'claster_width': 53,
            'claster_height': 53,
            'claster_text_size': '12',
            'shadow_url': 'https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/plugins\/dealer-locator\/img\/shadow.png',
            'map_styles': [{
                'elementType': 'geometry',
                'stylers': [{
                    'color': '#212121'
                }]
            }, {
                'elementType': 'labels.icon',
                'stylers': [{
                    'visibility': 'on'
                }]
            }, {
                'elementType': 'labels.text.fill',
                'stylers': [{
                    'color': '#757575'
                }]
            }, {
                'elementType': 'labels.text.stroke',
                'stylers': [{
                    'color': '#212121'
                }]
            }, {
                'featureType': 'administrative',
                'elementType': 'geometry',
                'stylers': [{
                    'color': '#757575'
                }]
            }, {
                'featureType': 'administrative.country',
                'elementType': 'labels.text.fill',
                'stylers': [{
                    'color': '#9e9e9e'
                }]
            }, {
                'featureType': 'administrative.land_parcel',
                'stylers': [{
                    'visibility': 'on'
                }]
            }, {
                'featureType': 'administrative.locality',
                'elementType': 'labels.text.fill',
                'stylers': [{
                    'color': '#bdbdbd'
                }]
            }, {
                'featureType': 'poi',
                'elementType': 'labels.text.fill',
                'stylers': [{
                    'color': '#757575'
                }]
            }, {
                'featureType': 'poi.park',
                'elementType': 'geometry',
                'stylers': [{
                    'color': '#181818'
                }]
            }, {
                'featureType': 'poi.park',
                'elementType': 'labels.text.fill',
                'stylers': [{
                    'color': '#616161'
                }]
            }, {
                'featureType': 'poi.park',
                'elementType': 'labels.text.stroke',
                'stylers': [{
                    'color': '#1b1b1b'
                }]
            }, {
                'featureType': 'road',
                'elementType': 'geometry.fill',
                'stylers': [{
                    'color': '#2c2c2c'
                }]
            }, {
                'featureType': 'road',
                'elementType': 'labels.text.fill',
                'stylers': [{
                    'color': '#8a8a8a'
                }]
            }, {
                'featureType': 'road.arterial',
                'elementType': 'geometry',
                'stylers': [{
                    'color': '#373737'
                }]
            }, {
                'featureType': 'road.highway',
                'elementType': 'geometry',
                'stylers': [{
                    'color': '#3c3c3c'
                }]
            }, {
                'featureType': 'road.highway.controlled_access',
                'elementType': 'geometry',
                'stylers': [{
                    'color': '#4e4e4e'
                }]
            }, {
                'featureType': 'road.local',
                'elementType': 'labels.text.fill',
                'stylers': [{
                    'color': '#616161'
                }]
            }, {
                'featureType': 'transit',
                'elementType': 'labels.text.fill',
                'stylers': [{
                    'color': '#757575'
                }]
            }, {
                'featureType': 'water',
                'elementType': 'geometry',
                'stylers': [{
                    'color': '#000000'
                }]
            }, {
                'featureType': 'water',
                'elementType': 'labels.text.fill',
                'stylers': [{
                    'color': '#3d3d3d'
                }]
            }],
            'country': contactMapping
        };
    };
    mapContactLocator.start = function () {
        let htcMapSettings = [];
        let contactMapping = [];
        let countryTab = ``;
        let mapLat = '';
        let mapLong = '';
        let testLocation = [{
                country: 'Israel',
                lat: '30.95429953704603',
                long: '34.83710354256758',
                offices: [{
                        location: 'Jerusalem',
                        lat: '31.779786917779106',
                        long: '35.11176175529746',
                        name: 'Half Time Car Rental Ltd-Jerusalem',
                        openWhen: 'Monday - Friday',
                        openFrom: '8:00 AM',
                        openTo: '6:00 PM',
                        email: 'spawnhector@gmail.com',
                        phone: '1876545456'
                    },
                    {
                        location: 'Dimona',
                        lat: '31.086262395109195',
                        long: '35.04014384067698',
                        name: 'Half Time Car Rental Ltd-Dimona',
                        openWhen: 'Monday - Friday',
                        openFrom: '8:00 AM',
                        openTo: '6:00 PM',
                        email: 'test2@gmail.com',
                        phone: '18767657856'
                    }
                ]
            },
            {
                country: 'USA',
                lat: '40.00940704248875',
                long: '-101.96802520774605',
                offices: [{}]
            },
            {
                country: 'The Netherlands',
                lat: '52.225391266458345',
                long: '5.563341021548987',
                offices: [{}]
            },
            {
                country: 'Singapore',
                lat: '1.3593024250055685',
                long: '103.87170296589727',
                offices: [{}]
            },
            {
                country: 'Jamaica',
                lat: '18.163073092177175',
                long: '-77.36759697038949',
                offices: [{
                    location: 'Half Way Tree',
                    lat: '18.00791052100089',
                    long: '-76.79049075855362',
                    name: 'Half Time Car Rental Ltd-HWT',
                    openWhen: 'Monday - Friday',
                    openFrom: '8:00 AM',
                    openTo: '6:00 PM',
                    email: 'ronaldhector32@gmail.com',
                    phone: '1876545456'
                }]
            }
        ];

        testLocation.map((value, index) => {
            if (index == 0) {
                mapLat = parseFloat(value.lat);
                mapLong = parseFloat(value.long);
            }
            contactMapping.push({
                "ID": index,
                "location": value.country,
                "latitude": parseFloat(value.lat),
                "longitude": parseFloat(value.long),
                "offices": value.offices
            });
            countryTab += `
                <div class='location' data-location='` + value.country + `'>
                    <span>` + value.country + `</span>
                </div>
            `;
        })

        $('#contact-pub').html(`
            <div id='browser'>
                <div id='browser-bar'>
                    <p>Contact Us</p>
                    <span class='arrow entypo-resize-full'></span>
                </div>
                <div id='content'>
                    <div id='left'>
                        <div id='contact_panel_map'>
                            <div class='map-locator'>
                                <div id="hlf_contact_maps"></div>
                            </div>
                        </div>
                        
                        <div id="contact_location__main">
                            <div id='location-bar'>
                                ` + countryTab + `
                            </div>
                        </div>
                    </div>
                    <div id='right'>
                    </div>
                </div>
            </div>
        `);

        htcMapSettings.push(mapContactLocator.config(mapLat, mapLong, contactMapping, 'country'))
        htcMapSettings.forEach(function (element) {
            mapContactLocator.init(element);
        });
    };
    google.maps.event.addDomListener(window, 'load', function () {
        mapContactLocator.start();
    });
    (function ($) {
        $('#dlc-map-search')[0].addEventListener('keydown', function (e) {
            if (e.keyCode === 13) {
                mapContactLocator.codeAddress(this.value);
            }
        });
    })(jQuery);
})()
