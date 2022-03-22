<section class="page-content" id="pageContent">
    <div class="" style="width: 967px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col2-right  ">
                <div class="rtd">
                    <div data-elementor-type="wp-page" data-elementor-id="19507" class="elementor elementor-19507" data-elementor-settings="[]">
                        <div class="elementor-section-wrap">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-5275f43 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="5275f43" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-05c6b2d" data-id="05c6b2d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a8af53f elementor-widget elementor-widget-shortcode" data-id="a8af53f" data-element_type="widget" data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <section id="dlc_panel-map" class="section-dealers">
                                                        <div class="section-dealers__header">
                                                            <h2 class='section-header'>Dealers Locator<a class="btn primary float-right" href="#">View all dealers</a></h2>
                                                            <div class="location-search">
                                                                <div class="row">
                                                                    <input class="form-control d-search" id="dlc-map-search" placeholder="Where are you?" autocomplete="off">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="section-dealers_wrap">
                                                            <div class="row">
                                                                <div class="col-dealer-left">
                                                                    <div class="section-dealers__main">
                                                                        <div class="b-dealers-group">
                                                                            @foreach ($dealer as $clients)
                                                                                <!-- <div id="markerlist"></div> -->
                                                                                <div class="b-dealers" data-dealer-id="{{$clients->id}}">
                                                                                    <div class="col-md-3 col-md-12">
                                                                                        <div class="b-dealers__brand">
                                                                                            <img alt='' src='https://secure.gravatar.com/avatar/10285ffc06488f07917eba55488da4ff?s=96&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/10285ffc06488f07917eba55488da4ff?s=96&#038;d=mm&#038;r=g 2x' class='avatar avatar-96 photo b-dealers__img img-fluid' height='96' width='96' alt="brand" loading='lazy' /> </div>
                                                                                    </div>
                                                                                    <div class="col-md-9 col-md-12">
                                                                                        <div class="b-dealers__main">
                                                                                            <div class="b-dealers__header">
                                                                                                <div class="b-dealers__title">{{$clients->first_name}}</div>
                                                                                            </div>

                                                                                            <div class="b-dealers__body">
                                                                                                <ul class="b-dealers_info">

                                                                                                    <li>
                                                                                                        <strong>Location: </strong>{{$clients->location}} </li>
                                                                                                    <li>
                                                                                                        <strong>Phone: </strong>{{$clients->phone}} </li>

                                                                                                    <li>
                                                                                                        <strong>Сompany: </strong>{{$clients->company}} </li>
                                                                                                    <li>
                                                                                                        <strong>Country: </strong>{{$clients->country}} </li>
                                                                                                    <li>
                                                                                                        <strong>State: </strong>{{$clients->state}} </li>
                                                                                                    <li>
                                                                                                        <strong>Town: </strong>{{$clients->town}} </li>

                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="wrap-post-btn"><a class="post-btn btn-effect" href=""><span class="post-btn__inner">View Car</span></a></div>
                                                                                    </div>
                                                                                </div><!--  end dealer  -->
                                                                            @endforeach
                                                                            
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-dealer-right">
                                                                    <div class="b-dealers-map" id="b-dealers-map">
                                                                        <div id="dlc_dealers-maps" style="right: 2px;"></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pix-ajax-loader">
                                    <div id="cssload-wrapper">
                                        <div class="cssload-loader">
                                            <div class="cssload-line"></div>
                                            <div class="cssload-line"></div>
                                            <div class="cssload-line"></div>
                                            <div class="cssload-line"></div>
                                            <div class="cssload-line"></div>
                                            <div class="cssload-line"></div>
                                            <div class="cssload-subline"></div>
                                            <div class="cssload-subline"></div>
                                            <div class="cssload-subline"></div>
                                            <div class="cssload-subline"></div>
                                            <div class="cssload-subline"></div>
                                            <div class="cssload-loader-circle-1">
                                                <div class="cssload-loader-circle-2"></div>
                                            </div>
                                            <div class="cssload-needle"></div>
                                            <div class="cssload-loading">loading</div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        
<script>

    const xhttp = new XMLHttpRequest();
    let fixx = window.location.protocol+window.location.host
    let domain = fixx+'/dealers'
    let url = new URL(domain);
    
    function getMapping(url,callback){
        var xhr = new XMLHttpRequest;

        xhr.open("GET", url);
        xhr.send();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                var mapping = [];
                let response = JSON.parse(this.responseText,true)
                // console.log(response)
                response.dealers.forEach(element => {
                    
                    mapping.push({
                        "ID":element.id,
                        "post_author":element.first_name,
                        "post_title":element.first_name,
                        "post_url":'/car/',
                        "thumbnail_url":"https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/uploads\/2020\/02\/ag_mc_ford_raptor_5k-1280x720-1-300x169.jpeg",
                        "latitude":parseFloat(element.lat),
                        "longitude":parseFloat(element.long),
                        "price":""+element.vehicle.length+"",
                        "seller_first_name":element.first_name,
                        "seller_last_name":element.last_name,
                        "seller_location":element.location,
                        "seller_company":element.company,
                        "seller_phone":"+"+element.phone+"",
                        "seller_email":element.email,
                        "seller_country":element.country,
                        "seller_state":element.state,
                        "seller_town":element.town
                    });
                });
                if(callback) callback(mapping);
            };
        }
    };
    
    if (!window.dlcMapSettings) {
        var dlcMapSettings = [];
    }
    getMapping(url,function(par) {
        var dlcLocatorData = {'map_id':'dlc_dealers-maps','panel_id':'dlc_panel-map','google_maps_api_key':'AIzaSyDGGmaqnb27aHk2K4-RDRib8ThdXKXMApo','map_zoom':'8','map_lat':'18','map_lng':'-76','icon_url':'https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/plugins\/dealer-locator\/img\/spotlight.png','icon_width':27,'icon_height':43,'claster_url':'https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/plugins\/dealer-locator\/img\/m1.png','claster_width':53,'claster_height':53,'claster_text_size':'12','shadow_url':'https:\/\/autozone.templines.org\/elementor\/rental\/wp-content\/plugins\/dealer-locator\/img\/shadow.png','map_styles':[{'elementType':'geometry','stylers':[{'color':'#212121'}]},{'elementType':'labels.icon','stylers':[{'visibility':'on'}]},{'elementType':'labels.text.fill','stylers':[{'color':'#757575'}]},{'elementType':'labels.text.stroke','stylers':[{'color':'#212121'}]},{'featureType':'administrative','elementType':'geometry','stylers':[{'color':'#757575'}]},{'featureType':'administrative.country','elementType':'labels.text.fill','stylers':[{'color':'#9e9e9e'}]},{'featureType':'administrative.land_parcel','stylers':[{'visibility':'on'}]},{'featureType':'administrative.locality','elementType':'labels.text.fill','stylers':[{'color':'#bdbdbd'}]},{'featureType':'poi','elementType':'labels.text.fill','stylers':[{'color':'#757575'}]},{'featureType':'poi.park','elementType':'geometry','stylers':[{'color':'#181818'}]},{'featureType':'poi.park','elementType':'labels.text.fill','stylers':[{'color':'#616161'}]},{'featureType':'poi.park','elementType':'labels.text.stroke','stylers':[{'color':'#1b1b1b'}]},{'featureType':'road','elementType':'geometry.fill','stylers':[{'color':'#2c2c2c'}]},{'featureType':'road','elementType':'labels.text.fill','stylers':[{'color':'#8a8a8a'}]},{'featureType':'road.arterial','elementType':'geometry','stylers':[{'color':'#373737'}]},{'featureType':'road.highway','elementType':'geometry','stylers':[{'color':'#3c3c3c'}]},{'featureType':'road.highway.controlled_access','elementType':'geometry','stylers':[{'color':'#4e4e4e'}]},{'featureType':'road.local','elementType':'labels.text.fill','stylers':[{'color':'#616161'}]},{'featureType':'transit','elementType':'labels.text.fill','stylers':[{'color':'#757575'}]},{'featureType':'water','elementType':'geometry','stylers':[{'color':'#000000'}]},{'featureType':'water','elementType':'labels.text.fill','stylers':[{'color':'#3d3d3d'}]}],'photos': par};
        
        dlcMapSettings.push(dlcLocatorData);
        // console.log(dlcLocatorData);
    });



</script>
@include('components.user.script.map-dealer')