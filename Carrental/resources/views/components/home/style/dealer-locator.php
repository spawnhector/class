<style>
    .storelocator-panel {
  border: 1px solid #ccc;
  overflow: auto;
}

.storelocator-panel .store-list {
  margin: 0;
  padding: 0;
}

.storelocator-panel .store-list li,
.storelocator-panel .directions-panel {
  padding: 5px;
}
.storelocator-panel .directions-panel {
  font-size: 0.8em;
}

.storelocator-panel .store-list li.store:hover {
  cursor: pointer;
  background: #eee;
}

.storelocator-panel .store-list li.highlighted,
.storelocator-panel .store-list li.highlighted:hover {
  background: #ccf;
}

.storelocator-panel .directions {
  display: none;
}

.storelocator-panel .location-search {
  padding: 5px;
}

.storelocator-panel .location-search input {
  width: 95%;
}

.storelocator-panel .location-search h4 {
  font-size: 0.8em;
  margin: 0;
  padding: 0;
}

.storelocator-panel .store-list .no-stores {
  color: grey;
}

.storelocator-panel .store .features {
  display: none;
}

.storelocator-panel .feature-filter {
  overflow: hidden;
}

.storelocator-panel .feature-filter label {
  display: block;
  font-size: 0.8em;
  margin: 0 0.4em;
  float: left;
}

.store .title {
  font-weight: bold;
}

.store .address,
.store .phone,
.store .web,
.store .misc {
  font-size: 80%;
  margin-top: 0.2em;
  margin-bottom: 0.5em;
  display: block;
}

.store .features {
  overflow: hidden;
  color: grey;
  margin: 0;
  padding: 0;
  font-size: 70%;
  max-width: 250px;
}

.store .features li {
  display: inline;
  float: left;
  padding-right: 0.8em;
}

.store .web a {
  color: green
}

.store .action {
  font-size: 0.8em;
  color: green;
  margin-right: 0.5em;
}


#map-canvas{
  height: 500px;
}





/*new*/



.section-dealers_wrap {
    margin: 0 auto;
}

.section-dealers__main{
    height: 600px;
    overflow: auto;
    background: #fff;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
}


.section-dealers__header {
    padding-bottom: 15px;
    margin-bottom: 0;
}

.section-dealers__title {
  padding-right: 30px;
}

.section-dealers__select {
  text-align: right;
}

.section-dealers__btn-more {
  font-size: 13px;
}

.b-dealers-group {
  margin-bottom: 55px;
}

.b-dealers {
    padding-top: 40px;
    padding-bottom: 37px;
    border-bottom: 1px solid #eee;
    background: #30354a;
    overflow: hidden;
    padding-left: 25px;
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}

.b-dealers img{
    border-radius: 100%;
}

.b-dealers.dealer-hover{
    background: #2196f3;
}


.b-dealers__img {
    display: inline-block;
    vertical-align: middle;
    max-width: 100%;
    height: auto;
}

.b-dealers__header {
    padding-top: 3px;
    padding-bottom: 15px;
    font-weight: 600;
    font-size: 26px;

}

.b-dealers__title {
  display: inline-block;
  font: 700 18px ;
  color: #dc2d13;
}

.b-dealers__rev {
  display: inline-block;
  margin-left: 5px;
  font-family: ;
  font-size: 13px;
  color: #222;
}

.b-dealers__info {
  margin-bottom: 4px;
  font-weight: 700;
}

.b-dealers__info .ic {
  display: inline-block;
  margin-right: 10px;
  font-size: 42px;
  font-weight: normal;
  line-height: 1;
  vertical-align: middle;
}

.b-dealers__link {
  margin-left: 10px;
  font-size: 13px;
  color: #246cbf;
  text-decoration: underline;
}

.b-dealers__contacts-item {
  display: block;
  margin-bottom: 6px;
}

.b-dealers__contacts-item .ic {
  display: inline-block;
  width: 27px;
  margin-right: 3px;
  font-size: 16px;
  text-align: center;
  vertical-align: middle;
}

.b-dealers__btn {
  width: 100px;
}

.b-dealers-rating {
  display: inline-block;
  margin-bottom: 0;
  margin-left: 15px;
}

.b-dealers-rating__item {
  display: inline-block;
  font-size: 12px;
  color: #ccc;
}

.b-dealers-map {
    width: 100%;
    height: 600px;
    margin-top: 0;
    background: #222;
}

.b-dealers-info {
  padding-top: 90px;
  padding-bottom: 110px;
}

.b-dealers-info__inner {
  max-width: 1050px;
  padding-right: 23px;
  padding-left: 50px;
}

.b-dealers-info__header {
  margin-bottom: 40px;
  padding-top: 40px;
  border-bottom: 2px dotted #000;
}

.b-dealers-info__title {
  display: inline-block;
  margin-bottom: 0;
  vertical-align: sub;
}

.b-dealers-info__rev {
  margin-left: 5px;
}

.b-dealers-info__desrip {
  margin-top: 50px;
}

.b-dealers-info__desrip .ui-title-sm {
  margin-bottom: 13px;
}

.b-dealers-info__links {
  margin-top: 4px;
}

.b-dealers-info__link {
  display: inline-block;
  margin-right: 20px;
  font-size: 13px;
  font-weight: 700;
  color: #222;
  text-decoration: underline;
}

.b-dealers-info__brand {
  display: inline-block;
  height: 60px;
}

.b-dealers-info__main {
  overflow-x: hidden;
  overflow-y: auto;
  max-height: 575px;
  margin-bottom: 90px;
}

.b-dealers-info__media {
  max-width: 28vw;
}

.b-dealers-info__contacts {
  margin-top: 4px;
  padding-left: 20px;
}

.b-dealers-info__contacts-item {
  position: relative;
  padding-bottom: 16px;
  padding-left: 33px;
  border-bottom: 1px solid #eee;
}

.b-dealers-info__contacts-item:not(:last-child) {
  margin-bottom: 23px;
}

.b-dealers-info__contacts-item .ic {
  position: absolute;
  top: 6px;
  left: 0;
  font-size: 16px;
}

.b-dealers-info__contacts-title {
  display: block;

  color: #253241;
}

.b-dealers-info__contacts-info {
  display: inline-block;
}

.b-dealers-info__contacts-link {
  margin-left: 3px;
  font-size: 13px;
  color: #222;
  text-decoration: underline;
}

.b-dealers-info__title-inner {
  font-size: 24px;
  font-weight: 700;
}

.b-dealers-info__top-link {
  margin-left: 5px;
  padding-right: 17px;
  padding-left: 17px;
  font-size: 13px;
  text-transform: none;
}

.b-dealers-info__top-link .ic {
  margin-right: 5px;
}

.b-dealers-soc {
  display: inline-block;
}

.b-dealers-soc__item {
  display: inline-block;
  margin-right: 10px;
}


.b-dealers-nav__item .b-dealers-nav__link.active {
  color: #fff;
  background-color: transparent;
}

.b-dealers-nav__link {
    font: 500 16px ;
    opacity: 1;
    color: #fff;
    border-bottom: 4px solid transparent;
}

.b-dealers-nav__link:after {
  display: none;
}

.b-dealers-nav__link.active, .b-dealers-nav__link:hover {
  opacity: 1;
}

.b-dealers-info-map {
  height: 680px;
  margin-top: 90px;
}

.entry-dealer-footer{
    text-align: right;
    clear: both;
    padding-right: 50px;
}

.col-dealer-left , .col-dealer-right{
    width: 49.5%;
    display: inline-block;
    vertical-align: top;
}


.b-dealers_info{
    list-style: none;
    margin: 0;
    padding: 0;
}


.b-dealers_info li{
    padding-bottom: 5px;
}

.b-dealers_info strong{
    font-weight: 600;
}


.b-dealers .wrap-post-btn {
    margin-top: -35px;
    float: right;
    padding-right: 30px;
}


.location-search input{
    padding: 10px 15px;
    width: 49.5%;
    font-size: 20px;
    line-height: 1.7;
    border: 1px solid #eee;
}




@media (max-width:991px) {
    
    .b-dealers__header {
    padding-top: 15px;
   }
    
    html .b-dealers .wrap-post-btn {
    margin-top: 11px;
    float: none;
    padding-right: 30px;
}
    
}





#dlc_panel-map .slider-grid__inner:hover .slider-grid__name {
    background-color: rgba(0, 0, 0, .7);
    transition: all .3s;
}

#dlc_panel-map .slider-grid__inner_mod-a .slider-grid__name {
    padding: 9px 9px;
    font-size: 11px;
    vertical-align: bottom;
    margin-right: 0;
}

#dlc_panel-map .slider-grid__inner_mod-a .slider-grid__price {
    display: inline-block;
    margin-left:0;
    padding: 9px;
    font-size: 11px;
    vertical-align: bottom;
    font-weight: 600;
}


#dlc_panel-map .slider-grid__inner_mod-a img{
        transition: all .3s;
}
#dlc_panel-map .slider-grid__inner_mod-a:hover img{
    opacity: 0.9;
}

#dlc_panel-map .slider-grid__inner {
    margin-bottom: 0;
}
</style>