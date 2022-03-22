<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600);
    @import url(http://weloveiconfonts.com/api/?family=brandico|entypo);

    /* entypo */
    [class*="entypo-"]:before {
        font-family: 'entypo', sans-serif;
        padding-right: 10px;
    }
    .contact-pub{
        font-family: "Open Sans", sans-serif;
    }

    #contact_panel_map {
        height: 516px;
    }

    #hlf_contact_maps {
        height: 515px;
    }

    #browser {
        /* margin: 10px auto; */
        color: white;
        width: 100%;
        margin-bottom: 40px;
        /* max-width: 50%; */
        -webkit-box-shadow: 2px 5px 15px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 2px 5px 15px rgba(0, 0, 0, 0.5);
        box-shadow: 2px 5px 15px rgba(0, 0, 0, 0.5);
    }

    #browser-bar {
        background: #394141;
        width: 100%;
        padding: 8px;
        margin: 0 auto;
        font-weight: 300;
        font-size: 0.9em;
        position: relative;
    }

    #browser-bar p {
        text-align: center;
    }

    #browser-bar .circles {
        border-radius: 10px;
        height: 13px;
        width: 13px;
        background: #ff3434;
        float: left;
        margin-left: 7px;
        margin-top: 3px;
    }

    #browser-bar .circles:nth-of-type(2) {
        background: #ffdd33;
    }

    #browser-bar .circles:nth-of-type(3) {
        background: #67b678;
    }

    .arrow {
        position: absolute;
        right: 3px;
        top: 6px;
        font-size: 1.2em;
        color: #8e9699;
    }

    #content {
        background: #454f4f;
    }

    #content:after {
        content: "";
        display: table;
        clear: both;
    }

    #content #left,
    #content #right {
        height: 100%;
    }

    #content #left {
        float: left;
        width: 75%;
        background: #7BC087;
    }

    @media all and (max-width: 780px) {
        #content #left {
            width: 100%;
        }
    }

    #content #left #map {
        height: 516px;
        position: relative;
        background-image: url("http://f.cl.ly/items/452R3S1440221Z3m372j/israel.png");
        background-size: cover;
    }

    #content #left #map p {
        text-transform: uppercase;
        padding-top: 20px;
        padding-left: 30px;
        font-size: 0.9em;
        font-weight: 600;
    }

    #content #left #map .zoom {
        position: absolute;
        right: 25px;
        top: 25px;
        width: 2px;
        height: 70px;
        background: white;
    }

    #content #left #map .zoom:before,
    #content #left #map .zoom:after {
        text-align: center;
        font-weight: 600;
        position: absolute;
        color: #7BC087;
        background: white;
        width: 20px;
    }

    #content #left #map .zoom:before {
        content: '+';
        top: -10px;
        right: -8px;
    }

    #content #left #map .zoom:after {
        content: '-';
        bottom: -10px;
        right: -8px;
    }

    #content #left #map .map-locator {
        position: absolute;
        top: 40%;
        left: 30%;
        border-radius: 15px;
        height: 30px;
        width: 30px;
        background: rgba(0, 0, 0, 0.4);
        border: solid 2px white;
    }

    #content #left #map .map-locator:before {
        content: '';
        position: absolute;
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        background: white;
        border-radius: 5px;
    }

    #content #left #map .map-locator .tooltip {
        position: absolute;
        color: #394141;
        left: 50px;
        top: -10px;
        background: white;
        font-size: 0.8em;
        font-weight: 600;
        -webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    #content #left #map .map-locator .tooltip:before {
        content: '';
        position: absolute;
        left: -10px;
        top: 14px;
        border-right: solid white 10px;
        border-top: solid transparent 8px;
        border-bottom: solid transparent 8px;
    }

    #content #left #map .map-locator .tooltip [class*="entypo-"] {
        min-width: 25px;
        display: inline-block;
        text-align: center;
        border-right: solid thin #CCC;
        margin-right: 5px;
    }

    #content #left #map .map-locator .tooltip li {
        border-bottom: solid thin #CCC;
        padding: 10px;
        white-space: nowrap;
    }

    #content #left #map .map-locator .tooltip li a {
        color: #51B2D6;
    }

    #content #left #map .map-locator .tooltip li:hover [class*="entypo-"] {
        color: #51B2D6;
    }

    #content #left #contact_location__main #location-bar {
        width: 100%;
        /* margin: 0px 0px 0px -40px; */
        text-align: center;
        display: flex;
    }

    #content #left #contact_location__main #location-bar div {
        /* display: flex; */
        padding: 15px;
        background: #5FA269;
        border-right: solid thin #7fb587;
        min-width: 148px;
    }

    #content #left #contact_location__main #location-bar div:last-of-type {
        border-right: 0;
    }

    #content #left #contact_location__main #location-bar div:hover {
        background: #4c8254;
    }

    #content #left #contact_location__main #location-bar .active {
        background: #4c8254;
    }

    #content #right {
        float: left;
        width: 25%;
        background: #454f4f;
        font-size: 0.75em;
        padding: 15px;
    }

    @media all and (max-width: 780px) {
        #content #right {
            width: 100%;
        }
    }

    #content #right p {
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    #content #right a:hover {
        color: #51B2D6;
    }

    #content #right #social {
        display: table;
        width: 100%;
    }

    #content #right .social {
        display: table-cell;
        text-align: center;
    }

    #content #right #form {
        border-top: solid thin #8e9699;
        border-bottom: solid thin #8e9699;
        margin: 20px 0;
        padding: 10px 6px;
        border-radius: 10px;
        background: white;
        color: #8e9699;
    }

    #content #right #form input,
    #content #right #form textarea {
        background: #394141;
        padding: 8px;
        margin-bottom: 8px;
        width: 100%;
        color: white;
    }

    #content #right #form input:last-of-type,
    #content #right #form textarea:last-of-type {
        margin-bottom: 0;
    }

    #content #right #form input[type='submit'],
    #content #right #form textarea[type='submit'] {
        text-transform: uppercase;
        background: #7BC087;
        width: 50%;
        color: white;
        margin-top: 5px;
    }

    #content #right #form input[type='submit']:hover,
    #content #right #form textarea[type='submit']:hover {
        background: #58b068;
        -webkit-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    #content #right #form input[type='textarea'],
    #content #right #form textarea[type='textarea'] {
        min-height: 75px;
        vertical-align: text-top;
    }

    #content #right p.other {
        font-size: 0.7;
        margin-bottom: 5px;
        text-transform: lowercase;
        font-weight: 100;
    }

    #content #right p.other,
    #content #right p.other a {
        color: #8e9699;
    }

    .location {
        color: white;
    }

    #contact_location__main {
        overflow-x: scroll;
    }
    .office-card{
        display: flex;
        background: #454f4f;
    }
    .gm-style .gm-style-iw-c {
        padding: 0;
    }
    .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
        border-top-left-radius:0;
        border-bottom-left-radius: 0;
        height: 100%;
    }
    .office-card-right{
        padding: 9px;
        width: auto;
        color: whitesmoke;
    }
    .office-name{
        font-size: 15px;
        font-weight: 500;
    }
    .office-details{
        margin: 7px;
    }
    .contactoffice-details{
        margin: 7px;
    width: 434px;
    height: 305px;
    }
    .office-details-item{
        padding: 2px 0px 0px 0px;
    }
    .office-details-icon{
        padding-right: 10px;
        font-size: 15px;
        color: #2196f3;
    }
    .entypo-phone{
        font-size: 15px;
        color: #2196f3;
    }
    .office-hours{
        font-size: 14px;
        font-weight: 400;
    }
    .office-hours-content{
        padding-left: 7px;
    }
    .button {
        width: 35px;
        height: 35px;
        font-weight: 500;
        font-size: 21px;
        text-align: center;
        border: 1px solid #2196f3;
        border-radius: 50px;
        margin: 0px 5px 0px 0px;
        /* padding: 0px 5px 0px 4px; */
        cursor: pointer;
        background: #ececec;
        text-decoration: none;
        color: #666;
    }

    .button i{
        color: #2196f3;
    }
    .office-details-button{
        position: relative;
        display: none;
        top: 6px;
    }
    
    #back_button{
        padding: 15px;
        background: #454f4f;
        border-right: solid thin #454f4f;
        max-width: 37px;
        height: 51px;
    }
    #back_button:hover i{
        position: relative;
        top: 0px;
        font-size: 19px;
    }
    .show{
        display: block;
    }
    #right-body{
        height: 495px;
    }
    #right-head{
        /* border-bottom: solid thin #8e9699; */
        display: none;
        padding: 5px 8px;
        border-radius: 10px;
        background: white;
    }
    #right-head .option{
        color: #454f4f;
        font-size: 24px;
        cursor: pointer;
    }
    #direction-panel-body{
        display: none;
        background: white;
        margin-top: 5px;
        overflow-y: scroll;
        border-radius: 4px;
        height: 387px;
    }
    #direction-panel-item{
        margin-bottom: 2px;
        padding: 10px;
        font-weight: 600;
        font-size: 12px;
        background: #dcdbde;
        color: #595959;
    }
    #direction-panel-item:hover{
        background: #2196f3;
        color:whitesmoke;
    }
    .active{
        background: #2196f3;
        color:whitesmoke;
    }
        
    .clear {
        clear: both;
    }

    /* -----------------------------------------
    =CSS3 Loading animations
    -------------------------------------------- */

    /* =Elements style
    ---------------------- */
    .load-wrapp {
    /* float: left;
    width: 100px;
    height: 100px;
    margin: 0 10px 10px 0;
    padding: 20px 20px 20px; */
    border-radius: 5px;
    /* text-align: center;
    background-color: #d8d8d8; */
    }

    .load-wrapp p {
    padding: 0 0 20px;
    }
    .load-wrapp:last-child {
    margin-right: 0;
    }

    .line {
    display: inline-block;
    width: 15px;
    height: 15px;
    border-radius: 15px;
    background-color: #4b9cdb;
    }

    .ring-1 {
    width: 10px;
    height: 10px;
    margin: 0 auto;
    padding: 10px;
    border: 7px dashed #4b9cdb;
    border-radius: 100%;
    }

    .ring-2 {
    position: relative;
    width: 45px;
    height: 45px;
    margin: 0 auto;
    border: 4px solid #4b9cdb;
    border-radius: 100%;
    }

    .ball-holder {
    position: absolute;
    width: 12px;
    height: 45px;
    left: 17px;
    top: 0px;
    }

    .ball {
    position: absolute;
    top: -11px;
    left: 0;
    width: 16px;
    height: 16px;
    border-radius: 100%;
    background: #4282b3;
    }

    .letter-holder {
    padding: 24px;
    }

    .letter {
    float: left;
    font-size: 14px;
    color: #777;
    padding: 0 2px;
    }

    .square {
    width: 12px;
    height: 12px;
    border-radius: 4px;
    background-color: #4b9cdb;
    }

    .spinner {
    position: relative;
    width: 45px;
    height: 45px;
    margin: 0 auto;
    }

    .bubble-1,
    .bubble-2 {
    position: absolute;
    top: 0;
    width: 25px;
    height: 25px;
    border-radius: 100%;
    background-color: #4b9cdb;
    }

    .bubble-2 {
    top: auto;
    bottom: 0;
    }

    .bar {
    float: left;
    width: 15px;
    height: 6px;
    border-radius: 2px;
    background-color: #4b9cdb;
    }

    /* =Animate the stuff
    ------------------------ */
    .load-1 .line:nth-last-child(1) {
    animation: loadingA 1.5s 1s infinite;
    }
    .load-1 .line:nth-last-child(2) {
    animation: loadingA 1.5s 0.5s infinite;
    }
    .load-1 .line:nth-last-child(3) {
    animation: loadingA 1.5s 0s infinite;
    }

    .load-2 .line:nth-last-child(1) {
    animation: loadingB 1.5s 1s infinite;
    }
    .load-2 .line:nth-last-child(2) {
    animation: loadingB 1.5s 0.5s infinite;
    }
    .load-2 .line:nth-last-child(3) {
    animation: loadingB 1.5s 0s infinite;
    }

    .load-3 .line:nth-last-child(1) {
    animation: loadingC 0.6s 0.1s linear infinite;
    }
    .load-3 .line:nth-last-child(2) {
    animation: loadingC 0.6s 0.2s linear infinite;
    }
    .load-3 .line:nth-last-child(3) {
    animation: loadingC 0.6s 0.3s linear infinite;
    }

    .load-4 .ring-1 {
    animation: loadingD 1.5s 0.3s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
    }
    .load-5{
        position: relative;
        top: 10px; 
    }
    .load-5 .ball-holder {
    animation: loadingE 1.3s linear infinite;
    }

    .load-6 .letter {
    animation-name: loadingF;
    animation-duration: 1.6s;
    animation-iteration-count: infinite;
    animation-direction: linear;
    }

    .l-1 {
    animation-delay: 0.48s;
    }
    .l-2 {
    animation-delay: 0.6s;
    }
    .l-3 {
    animation-delay: 0.72s;
    }
    .l-4 {
    animation-delay: 0.84s;
    }
    .l-5 {
    animation-delay: 0.96s;
    }
    .l-6 {
    animation-delay: 1.08s;
    }
    .l-7 {
    animation-delay: 1.2s;
    }
    .l-8 {
    animation-delay: 1.32s;
    }
    .l-9 {
    animation-delay: 1.44s;
    }
    .l-10 {
    animation-delay: 1.56s;
    }

    .load-7 .square {
    animation: loadingG 1.5s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
    }

    .load-8 .line {
    animation: loadingH 1.5s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
    }

    .load-9 .spinner {
    animation: loadingI 2s linear infinite;
    }
    .load-9 .bubble-1,
    .load-9 .bubble-2 {
    animation: bounce 2s ease-in-out infinite;
    }
    .load-9 .bubble-2 {
    animation-delay: -1s;
    }

    .load-10 .bar {
    animation: loadingJ 2s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
    }

    @keyframes loadingA {
    0 {
        height: 15px;
    }
    50% {
        height: 35px;
    }
    100% {
        height: 15px;
    }
    }

    @keyframes loadingB {
    0 {
        width: 15px;
    }
    50% {
        width: 35px;
    }
    100% {
        width: 15px;
    }
    }

    @keyframes loadingC {
    0 {
        transform: translate(0, 0);
    }
    50% {
        transform: translate(0, 15px);
    }
    100% {
        transform: translate(0, 0);
    }
    }

    @keyframes loadingD {
    0 {
        transform: rotate(0deg);
    }
    50% {
        transform: rotate(180deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }

    @keyframes loadingE {
    0 {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }

    @keyframes loadingF {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
    }

    @keyframes loadingG {
    0% {
        transform: translate(0, 0) rotate(0deg);
    }
    50% {
        transform: translate(70px, 0) rotate(360deg);
    }
    100% {
        transform: translate(0, 0) rotate(0deg);
    }
    }

    @keyframes loadingH {
    0% {
        width: 15px;
    }
    50% {
        width: 35px;
        padding: 4px;
    }
    100% {
        width: 15px;
    }
    }

    @keyframes loadingI {
    100% {
        transform: rotate(360deg);
    }
    }

    @keyframes bounce {
    0%,
    100% {
        transform: scale(0);
    }
    50% {
        transform: scale(1);
    }
    }

    @keyframes loadingJ {
    0%,
    100% {
        transform: translate(0, 0);
    }

    50% {
        transform: translate(80px, 0);
        background-color: #f5634a;
        width: 25px;
    }
    }
    @font-face {
    font-family: 'Muli';
    font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/muli/v26/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk30e0.ttf) format('truetype');
    }

    /* a {
    text-decoration: none;
    color: #3476CA;
    }
    a:hover {
    color: #6CB5F3;
    } */
    .right-body-btn {
        height: 40px;
        margin: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        padding: 8px 20px;
        color: #444;
        transition: all ease-out 0.6s;
    }
    .right-body-btn:hover {
        background: #2196f3;
        color: #ccc;
    border: 1px solid #aaa;
    box-shadow: 0 0 8px #ccc inset;
    transition: all ease-out 0.6s;
    }
    .contact-office-details-body{
        padding: 20px;
        color: #595959;
    }
    .contact-container {
        position: relative;
        width: 508px;
        height: 226px;
        left: 0%;
        top: 32%;
        margin-top: -26px;
        margin-left: -9px;
        background-color: #F3F3F3;
        border-radius: 6px;
        box-shadow: 0px 0px 24px rgb(0 0 0 / 40%);
    }
    .contact-container:before {
    content: '';
    position: absolute;
    left: -14px;
    top: 28px;
    border-style: solid;
    border-width: 10px 14px 10px 0;
    border-color: rgba(0, 0, 0, 0) #F3F3F3 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
    }
    .contact-container p {
    width: 350px;
    font-size: 16px;
    color: #a8aab2;
    font-weight: 400;
    line-height: 28px;
    float: left;
    margin: 0;
    }
    .contact-container .bottom {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        width: 100%;
        bottom: 0;
        position: absolute;
    }
    .contact-container .bottom .step {
        flex: 3;
        -webkit-flex: 3;
        -ms-flex: 3;
        width: 100%;
        height: 54px;
        background-color: #373942;
        border-bottom-left-radius: 0px;
        display: flex;
    }
    .contact-container .bottom .step span {
    flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    line-height: 54px;
    color: #fff;
    margin-left: 25px;
    font-size: 18px;
    }
    .contact-container .bottom .step ul {
    flex: 2;
    -webkit-flex: 2;
    -ms-flex: 2;
    list-style: none;
    height: 10px;
    margin: 23px 0;
    padding-left: 15px;
    }
    .contact-container .bottom .step ul li {
    position: relative;
    height: 7px;
    width: 7px;
    margin: 0 10px;
    float: left;
    border-radius: 50%;
    background: none;
    border: 1px solid #535560;
    }
    .contact-container .bottom .step ul li:first-child:before {
    width: 0;
    }
    .contact-container .bottom .step ul li:before {
    content: '';
    position: absolute;
    width: 20px;
    border-top: 1px solid #535560;
    left: -21px;
    top: 3px;
    }
    .contact-container .bottom .step ul li.true {
    background-color: #7a7d86;
    }
    .contact-container .bottom .step ul li.active {
    background-color: #fff;
    box-shadow: 0 0 6px rgba(255, 255, 255, 0.78);
    }
    .close {
    cursor: pointer;
    }
    .close:before,
    .close:after {
    content: "";
    position: absolute;
    height: 13px;
    width: 13px;
    top: 26px;
    right: 31px;
    border-top: 2px solid #7c7c7c;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    }
    .close:before {
    right: 40px;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    }
    .btn {
    flex: 1;
    background-color: #6cb5f3;
    border: 0;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
    color: #fff;
    font-weight: bold;
    border-bottom-right-radius: 6px;
    cursor: pointer;
    transition: all 0.3s;
    }
    .btn:hover {
    background-color: #6BA5D6;
    transition: all 0.3s;
    }
    .btn:active {
    background-color: #5F8AAF;
    }
    .slider-container {
        width: 350px;
        margin: 0px 47px;
        overflow: hidden;
    }
    .slider-turn {
    width: 390px;
    color: #595959;
    }

    input[type="text"], input[type="search"]{
        background-color: #EBEAED;
        border: 1px solid #DEDCE1;
        border-radius: 0.313rem;
        height: 2.12rem;
        opacity: 1;
        width: 92%;
        padding: 0.375rem 0.74rem;
    }
    input[type="search"]:focus{
        background-color: #EBEAED;
        border: 2px solid #DEDCE1;
        border-radius: 0.313rem;
        opacity: 1;
        height: 50px;
    }
    .search-box{
        height: 0.938rem;
        padding-left: 3.125rem;
    }
    .form-group{
        margin-top: 15px;
    }
    .trans-type-panel{
        padding: 7px;
        position: relative;
        text-align: center;
        top: 22%;
    }
    .trans-type-panel span{
        font-size: 14px;
    }
    .trans-type-panel .active{
        color: white;
    }
    .type-icon{
        margin-top: 5px;
        background: white;
        border-radius: 6px;
    }
    .type-icon i{
        font-size: 21px;
        color: #2196f3;
        padding: 5px 10px 5px 10px;
        margin: 0px;
    }
    .type-icon i:hover{
        background: #2196f3;
        color: white;
    }
    .text-highlight{
        color: #2196f3;
    }
    .has-search button{
        display: flex;
        height: 3.1rem;
        border: 0;
        margin-left: -3px;
    transition: all 0.3s;
    }
    .has-search button i{
        position: relative;
        top: 14%;
        color: #2196f3;
        font-size: 19px;
    transition: all 0.3s;
    }
    .has-search button:hover{
        background: #2196f3;
    transition: all 0.3s;
    }
    .has-search button:hover i{
        color: white;
    transition: all 0.3s;
    }
    .flex{
        display: flex;
    }
    .search-message{
        background: white;
        color: black;
        position: relative;
        top: -20px;
        padding: 2px;
    }
    .search-message span{
        margin-left: 5px;
        font-weight: 600;
    }
    .search-message span .error{
        color:red;
    }
    
</style>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script> --}}
<div class="col">
    <div id="contact-pub"></div>
    
    
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="{{asset('js/contactusmap.js')}}"></script>
</div>
