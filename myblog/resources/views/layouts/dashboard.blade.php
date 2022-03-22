<style>
    /* Compiled dark classes from Tailwind */
    .dark .dark\:divide-gray-700> :not([hidden])~ :not([hidden]) {
        border-color: rgba(55, 65, 81);
    }

    .dark .dark\:bg-gray-50 {
        background-color: rgba(249, 250, 251);
    }

    .dark .dark\:bg-gray-100 {
        background-color: rgba(243, 244, 246);
    }

    .dark .dark\:bg-gray-600 {
        background-color: rgba(75, 85, 99);
    }

    .dark .dark\:bg-gray-700 {
        background-color: rgba(55, 65, 81);
    }

    .dark .dark\:bg-gray-800 {
        background-color: rgba(31, 41, 55);
    }

    .dark .dark\:bg-gray-900 {
        background-color: rgba(17, 24, 39);
    }

    .dark .dark\:bg-red-700 {
        background-color: rgba(185, 28, 28);
    }

    .dark .dark\:bg-green-700 {
        background-color: rgba(4, 120, 87);
    }

    .dark .dark\:hover\:bg-gray-200:hover {
        background-color: rgba(229, 231, 235);
    }

    .dark .dark\:hover\:bg-gray-600:hover {
        background-color: rgba(75, 85, 99);
    }

    .dark .dark\:hover\:bg-gray-700:hover {
        background-color: rgba(55, 65, 81);
    }

    .dark .dark\:hover\:bg-gray-900:hover {
        background-color: rgba(17, 24, 39);
    }

    .dark .dark\:border-gray-100 {
        border-color: rgba(243, 244, 246);
    }

    .dark .dark\:border-gray-400 {
        border-color: rgba(156, 163, 175);
    }

    .dark .dark\:border-gray-500 {
        border-color: rgba(107, 114, 128);
    }

    .dark .dark\:border-gray-600 {
        border-color: rgba(75, 85, 99);
    }

    .dark .dark\:border-gray-700 {
        border-color: rgba(55, 65, 81);
    }

    .dark .dark\:border-gray-900 {
        border-color: rgba(17, 24, 39);
    }

    .dark .dark\:hover\:border-gray-800:hover {
        border-color: rgba(31, 41, 55);
    }

    .dark .dark\:text-white {
        color: rgba(255, 255, 255);
    }

    .dark .dark\:text-gray-50 {
        color: rgba(249, 250, 251);
    }

    .dark .dark\:text-gray-100 {
        color: rgba(243, 244, 246);
    }

    .dark .dark\:text-gray-200 {
        color: rgba(229, 231, 235);
    }

    .dark .dark\:text-gray-400 {
        color: rgba(156, 163, 175);
    }

    .dark .dark\:text-gray-500 {
        color: rgba(107, 114, 128);
    }

    .dark .dark\:text-gray-700 {
        color: rgba(55, 65, 81);
    }

    .dark .dark\:text-gray-800 {
        color: rgba(31, 41, 55);
    }

    .dark .dark\:text-red-100 {
        color: rgba(254, 226, 226);
    }

    .dark .dark\:text-green-100 {
        color: rgba(209, 250, 229);
    }

    .dark .dark\:text-blue-400 {
        color: rgba(96, 165, 250);
    }

    .dark .group:hover .dark\:group-hover\:text-gray-500 {
        color: rgba(107, 114, 128);
    }

    .dark .group:focus .dark\:group-focus\:text-gray-700 {
        color: rgba(55, 65, 81);
    }

    .dark .dark\:hover\:text-gray-100:hover {
        color: rgba(243, 244, 246);
    }

    .dark .dark\:hover\:text-blue-500:hover {
        color: rgba(59, 130, 246);
    }

    /* Custom style */
    .header-right {
        width: 100%;
    }

    .sidebar:hover {
        width: 16rem;
    }

    @media only screen and (min-width: 768px) {
        .header-right {
        width: 100%;
        }
    }
    .dropdown{
        position: fixed;
        right: -13px;
        top: 13px;
        transition: all 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
    }

    .post-form {
        padding: 10px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.6);
        margin-top: 10px;
        position: relative;
    }

    .page-title {
        margin: 0.5em 0;
        color: #555;
    }

    .post-section {
        margin: 0 -10px;
        padding: 5px 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    }

    .post-section.editor-title {
        margin-top: -10px;
    }

    .post-section.post-buttons {
        border-bottom: none;
        margin-top: 10px;
        text-align: right;
    }

    .post-input {
        display: block;
        width: 100%;
        border: 0;
        outline: 0;
        font-family: sans-serif;
        margin: 0.25em 0;
    }

    .post-input.large {
        font-size: 24px;
        font-weight: 600;
    }

    .post-media-inner {
        display: flex;
        flex-wrap: wrap;
    }

    .post-media-icon {
        width: 150px;
        height: 150px;
        margin: 10px;
        position: relative;
    }

    @media screen and (max-width: 768px) {
        .post-media-icon {
            width: 80px;
            height: 80px;
        }
    }

    .add-media {
        outline: none;
        cursor: pointer;
    }

    .delete-media {
        position: absolute;
        top: -1px;
        right: -1px;
        width: 24px;
        height: 24px;
        border-top-left-radius: 0;
        border-bottom-right-radius: 0;
        opacity: 0;
        transition: 0.2s;
    }

    .post-media-icon.thumbnail:hover>.delete-media {
        opacity: 1;
        transition: 0.15s;
    }

    .post-form-backdrop {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 100;
    }

    .post-form-backdrop.closed {
        display: none;
    }

    .post-form-overlay.open {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        min-height: 200px;
        max-height: 80%;
        z-index: 102;
        background-color: #fff;
        padding: 10px;
        opacity: 1;
        transition: 0.2s;
    }

    .post-form-overlay.closed {
        display: none;
    }

    .container {
        margin-top: 73px;
        max-width: 93.5rem;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .btn {
        display: inline-block;
        font: inherit;
        background: none;
        border: none;
        color: inherit;
        padding: 0;
        cursor: pointer;
    }

    .btn:focus {
        outline: 0.5rem auto #4d90fe;
    }

    .visually-hidden {
        position: absolute !important;
        height: 1px;
        width: 1px;
        overflow: hidden;
        clip: rect(1px, 1px, 1px, 1px);
    }


    .profile1 {
        margin-top: 67px;
        padding-top: 60px;
        padding-bottom: 50px;
    }

    .profile1::after {
        content: "";
        display: block;
        clear: both;
    }

    .profile-image {
        float: left;
        /* width: calc(33.333% - 1rem); */
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 3rem;
    }

    .profile-image img {
        width: 200px;
        height: 200px;
        border-radius: 360%;
    }

    .profile-user-settings,
    .profile-stats,
    .profile-bio {
        float: left;
        width: calc(66.666% - 2rem);
    }

    .profile-user-settings {
        margin-top: 1.1rem;
    }

    .profile-user-name {
        display: inline-block;
        font-size: 3.2rem;
        font-weight: 300;
    }

    .profile-edit-btn {
        font-size: 1.4rem;
        line-height: 1.8;
        border: 0.1rem solid #dbdbdb;
        border-radius: 0.3rem;
        padding: 0 2.4rem;
        margin-left: 2rem;
    }

    .profile-settings-btn {
        font-size: 2rem;
        margin-left: 1rem;
    }

    .profile-stats {
        margin-top: 2.3rem;
    }

    .profile-stats li {
        display: inline-block;
        font-size: 1.6rem;
        line-height: 1.5;
        margin-right: 4rem;
        cursor: pointer;
    }

    .profile-stats li:last-of-type {
        margin-right: 0;
    }

    .profile-bio {
        font-size: 1.6rem;
        font-weight: 400;
        line-height: 1.5;
        margin-top: 2.3rem;
    }

    .profile-real-name,
    .profile-stat-count,
    .profile-edit-btn {
        font-weight: 600;
    }


    .gallery {
        margin-top: 360px;
    margin-left: 64px;
        display: flex;
        flex-wrap: wrap;
        margin: -1rem -1rem;
        padding-bottom: 3rem;
    }

    .gallery-item {
        position: relative;
        flex: 1 0 22rem;
        margin: 1rem;
        color: #fff;
        cursor: pointer;
    }

    .gallery-item:hover .gallery-item-info,
    .gallery-item:focus .gallery-item-info {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
    }

    .gallery-item-info {
        display: none;
    }

    .gallery-item-info li {
        display: inline-block;
        font-size: 1.7rem;
        font-weight: 600;
    }

    .gallery-item-likes {
        margin-right: 2.2rem;
    }

    .gallery-item-type {
        position: absolute;
        top: 1rem;
        right: 1rem;
        font-size: 2.5rem;
        text-shadow: 0.2rem 0.2rem 0.2rem rgba(0, 0, 0, 0.1);
    }

    .fa-clone,
    .fa-comment {
        transform: rotateY(180deg);
    }

    .gallery-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    .loader {
        width: 5rem;
        height: 5rem;
        border: 0.6rem solid #999;
        border-bottom-color: transparent;
        border-radius: 50%;
        margin: 0 auto;
        animation: loader 500ms linear infinite;
    }

    @media screen and (max-width: 40rem) {
        .profile1 {
            display: flex;
            flex-wrap: wrap;
            padding: 4rem 0;
        }

        .profile1::after {
            display: none;
        }

        .profile-image,
        .profile-user-settings,
        .profile-bio,
        .profile-stats {
            float: none;
            width: auto;
        }

        .profile-image img {
            width: 7.7rem;
        }

        .profile-user-settings {
            flex-basis: calc(100% - 10.7rem);
            display: flex;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .profile-user-name {
            font-size: 2.2rem;
        }

        .profile-edit-btn {
            order: 1;
            padding: 0;
            text-align: center;
            margin-top: 1rem;
        }

        .profile-edit-btn {
            margin-left: 0;
        }

        .profile-bio {
            font-size: 1.4rem;
            margin-top: 1.5rem;
        }

        .profile-edit-btn,
        .profile-bio,
        .profile-stats {
            flex-basis: 100%;
        }

        .profile-stats {
            order: 1;
            margin-top: 1.5rem;
        }

        .profile-stats ul {
            display: flex;
            text-align: center;
            padding: 1.2rem 0;
            border-top: 0.1rem solid #dadada;
            border-bottom: 0.1rem solid #dadada;
        }

        .profile-stats li {
            font-size: 1.4rem;
            flex: 1;
            margin: 0;
        }

        .profile-stat-count {
            display: block;
        }
    }

    @keyframes loader {
        to {
            transform: rotate(360deg);
        }
    }

    @supports (display: grid) {
        .profile1 {
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-template-rows: repeat(3, auto);
            grid-column-gap: 3rem;
            align-items: center;
        }

        .profile-image {
            grid-row: 1 / -1;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
            grid-gap: 2rem;
        }

        .profile-image,
        .profile-user-settings,
        .profile-stats,
        .profile-bio,
        .gallery-item,
        .gallery {
            width: auto;
            margin: 0;
        }

        @media (max-width: 40rem) {
            .profile1 {
                grid-template-columns: auto 1fr;
                grid-row-gap: 1.5rem;
            }

            .profile-image {
                grid-row: 1 / 2;
            }

            .profile-user-settings {
                display: grid;
                grid-template-columns: auto 1fr;
                grid-gap: 1rem;
            }

            .profile-edit-btn,
            .profile-stats,
            .profile-bio {
                grid-column: 1 / -1;
            }

            .profile-user-settings,
            .profile-edit-btn,
            .profile-settings-btn,
            .profile-bio,
            .profile-stats {
                margin: 0;
            }
        }
        .toggle-like{
          position: absolute;
          left: 2rem;
          top: -16rem;
            width: 100px;
            height: 100px;
        }

        .like-no {
            background: url("http://localhost/xampp/myblog/storage/app/public/posts/like/dislike.svg") no-repeat;
            /* background-color: #4d90fe; */
        }

        .like-yes {
            background: url("http://localhost/xampp/myblog/storage/app/public/posts/like/like.svg") no-repeat;
        }
    }
    .title{
  color: white;
  /* font-size: 30px; */
  /* font-family: Raleway; */
  /* text-align: center; */
  
}
svg path{
   cursor: pointer;
}
svg.grey path {
  fill: rgb(62 , 83 ,126) !important;
 
}
svg circle{
   cursor: pointer;
}
svg.grey circle {
  fill: rgb(62 , 83 ,126) !important;
  cursor: pointer;
}
.top-top{
    /*   background: red; */
  position: fixed;
  right: 42px;
  top: -26px;
  /* width: 700px;*/
  /* height: 20px;   */
/*   transform-origin: 470px 120px; */
  transition: all 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
  /* left: calc(50% - (900px / 2)); */
}
.wrapper{
/*   background: red; */
  position: fixed;
  right: 54px;
  top: -26px;
  /* width: 700px;*/
  /* height: 20px;   */
/*   transform-origin: 470px 120px; */
  transition: all 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
  /* left: calc(50% - (900px / 2)); */
}
.wrapper.hide{
    /* top: 150px; */
}
.wrapper.animate {
    animation: bell 1.7s ease-in-out infinite;
}
.comment{
    width: 56px;
    position: absolute;
    left: 152px;
    top: -14px;
}
.num{
    position: relative;
    left: 56px;
    border: red solid 2px;
    top: 34px;
    z-index: 1;
    background: #1D2133;
    width: 20px;
    height: 20px;
    text-align: center;
    padding: 0px;
    color: white;
    font-size: 12px;
    font-family: 'Raleway';
    border-radius: 50%;
    font-weight: bold;
}
.num1{
    position: absolute;
    left: 28px;
    border: red solid 2px;
    top: 13px;
    z-index: 1;
    background: #1D2133;
    width: 18px;
    height: 18px;
    text-align: center;
    padding: 0px;
    color: white;
    font-size: 10px;
    font-family: 'Raleway';
    border-radius: 50%;
    font-weight: bold;
}
.num2{
    position: absolute;
    left: 28px;
    border: red solid 2px;
    top: 17px;
    z-index: 1;
    background: #1D2133;
    width: 18px;
    height: 18px;
    text-align: center;
    padding: 0px;
    color: white;
    font-size: 10px;
    font-family: 'Raleway';
    border-radius: 50%;
    font-weight: bold;
}
.num.hide{
  opacity: 0;
}
.bell {

   fill: #fff;
}
.bell.hide{
     animation: clapper 1.7s ease-in-out infinite;

}
@keyframes bell {
  0% { transform: rotate(0); }
  20% { transform: rotate(12.5deg); }
  40% { transform: rotate(-12.5deg); }
  60% { transform: rotate(12.5deg); }
  80% { transform: rotate(2deg); }
  85%  { transform: rotate(0); }
  100% { transform: rotate(0); }
}

@keyframes clapper {
  0% { transform: translateX(10px);}
  25% { transform: translateX(60px); }
  50% { transform: translateX(-40px); }
  75% { transform: translateX(-10px); }
  100% { transform: translateX(10px); }
}
#notificationheader{
    
    cursor: move;
    z-index: 10;
}
.divider{
    width: 1px;
    background: #f5f5f563;
    height: 35px;
    position: fixed;
    top: 7px;
    left: 1233px
}
.divider1{
    width: 1px;
    background: #f5f5f563;
    height: 35px;
    position: absolute;
    top: 7px;
}
.notification{

  display: flex;
  position: fixed;
  background: rgb(62 , 83 ,126);
  z-index: 9;
  width: 540px;
  height: auto;
  top: 109px;
  right: 34px;
  border-radius: 10px;
  flex-direction: column;
  /* left: calc(50% - (350px / 2)); */
  transform: scale(1);
  transition: all 150ms cubic-bezier(0.785, 0.135, 0.15, 0.86);
}
.notification.hide {
  transform: scale(0);
}

.notification:before{
  content: '';
  position: absolute;
  width: 32px;
  height: 21px;
  background: rgb(62 , 83 ,126);
  transform: rotate(45deg);
  top: -1px;
  left: 445px;

}
.section{
  width: 100%;
  display: flex;
  align-items: center;
  flex: 1;
  background-color: #6883bb85;
  /* border-bottom: 1px rgb(124, 137, 165) solid; */
  /* border-bottom: 2px rgb(50 , 70 ,113) solid; */
}
.section.four{
    
  border-top: 2px rgb(38, 57, 97) solid;
  padding-top: 5px;
  padding-bottom: 5px;
   /* border-bottom: 0px ; */
  /* margin-top: 5px;
  margin-bottom: 10px; */
}

.notify_img{
  width: 25px;
  height: 25px;
  border-radius: 50%;
}
.notify_img1{
  width: 62px;
  height: 62px;
  border-radius: 50%;
}
.text{
  
  background: rgb(50 , 70 ,113);
  width: 25px;
  height: 25px;
  border-radius: 50%;
  margin-left: 15px;
    
}
.text.four{
  background: #fff;
}
.text1{
  
  background: rgb(50 , 70 ,113);
  width: 62px;
  height: 62px;
  border-radius: 50%;
  margin-left: 15px;
    
}
.text1.four{
  background: #fff;
}
.rect{
    position: relative;
   left: 20px;
  width: 220px;
  height: 25px;
  border-radius: 30px;
  color: black;
  /* padding: 5px 0px 0px 0px; */
  padding-left: 10px;
  padding-right: 34px;
  background: rgb(50 , 70 ,113);
}
.rect.one{
  background: #fff;
  width:auto;
}
.rect.three{
  width:140px
}
.rect.four{
    display: grid;
  background: #e5e7eb;
  font-weight: 400;
  width:auto;
  max-width: 400px;
}
.rect.four p{
    grid-column: 1;
  /* background: black; */
}
.rect.four a{
    position: absolute;
    bottom: 0px;
    border: 1px solid #e5e7eb;
    height: 25.5px;
    border-top-right-radius: 13px;
    border-bottom-right-radius: 13px;
    grid-column: 2;
    background: #3e537e;
    /* padding: -4px; */
    padding-left: 5px;
    padding-right: 5px;
    color: whitesmoke;
}
.rect.four a:hover{
    background: #1e40af;
}
.rect1{
    position: relative;
   left: 20px;
  width: 220px;
  height: 69px;
  border-radius: 30px;
  color: black;
  /* padding: 5px 0px 0px 0px; */
  padding-left: 10px;
  padding-right: 34px;
  background: rgb(50 , 70 ,113);
}
.rect1.one{
  background: #fff;
  width:auto;
}
.rect1.three{
  width:140px
}
.rect1.four{
    display: grid;
  background: #e5e7eb;
  font-weight: 400;
  width:auto;
  max-width: 440px;
}
.rect1.four p{
    grid-column: 1;
  /* background: black; */
}
.rect1.four a{
    position: absolute;
    bottom: 0px;
    border: 1px solid #e5e7eb;
    height: 25.5px;
    border-top-right-radius: 13px;
    border-bottom-right-radius: 13px;
    grid-column: 2;
    background: #3e537e;
    /* padding: -4px; */
    padding-left: 5px;
    padding-right: 5px;
    color: whitesmoke;
}
.rect1.four a:hover{
    background: #1e40af;
}
.head{
    background-color: #3e537e;
    border-top-left-radius: 5px;
    padding: 4px 0px 4px 6px;
    border-bottom: 1px solid #292d41;
}
.head p{
    font-weight: 400;
    letter-spacing: 1px;
}

    /* post */

    /* notification markasread */
 
.form input {
    
}
.bubble{
position:absolute;
z-index:2;
top:50%;
left:50%;
height: 20px;
width:100px;
transform:translate3d(-75%,-50%,0);
margin-left:-50px;
background:#BBBBBB;
border-radius: 50% 50% 50% 50% / 50% 50% 50% 50%;
border-right: 0px solid #BBBBBB;
border-left: 0px solid #BBBBBB;
animation: toggle-reverse 2s 1;
}
#bubble:checked + .bubble{
animation: toggle 2s 1;
transform:translate3d(75%,-50%,0);
background: #3CCC97;
}
.bubble:after {
content: ”;
position: absolute;
top: 50%;
margin-top: -15px;
margin-left: -2px;
height: 30px;
width: 4px;
background: #fff;
left: 50%;
transform: rotate(45deg);
border-radius: 2px;
transition: 500ms ease all 1.25s;
}
.bubble:before {
content: ”;
position: absolute;
top: 50%;
margin-top: -15px;
margin-left: -2px;
height: 30px;
width: 4px;
background: #fff;
left: 50%;
transform: rotate(-45deg);
border-radius: 2px;
transition: 500ms ease all 1.25s;
}

#bubble:checked + .bubble:after {
content: ”;
position: absolute;
top: 50%;
margin-top: -15px;
margin-left: 5px;
height: 30px;
width: 4px;
background: #fff;
left: 50%;
transform: rotate(225deg);
border-radius: 2px;
}
#bubble:checked + .bubble:before {
content: ”;
position: absolute;
top: 50%;
margin-top: -7px;
margin-left: -10px;
height: 20px;
width: 4px;
background: #fff;
left: 50%;
transform: rotate(-215deg);
border-radius: 2px;
}


/* search */

.containers, .mains {
    width: 640px;
    margin-left: auto;
    margin-right: auto;
    height: 300px;
}

.mains { margin-top: 50px }

input {
    font-family: 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 13px;
    color: #555860;
}
.search_content{
    padding-left: 12px;
    margin-top: 5px;
    margin-bottom: 3px;
}
#search_result_name{
    margin-top: 3px;
    padding: 2px 5px 2px 5px;
    margin-right: 5px;
    border: 1px solid red;
    background-color: #3e537e;
    color: whitesmoke;
    letter-spacing: 1px;
    border-radius: 15px;
}
.search_result_body{
    Overflow-y: scroll;
    height: 350px;
    margin-left: 5px;
}

.search_result_body::-webkit-scrollbar {
    width: 0em;
}

#search_title{
    font-weight: bold;
}
.search3{
    position: fixed;
    right: -923px;
    top: -26px;
    transition: all 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
}
.search2 input:focus {
    outline: none;
    border-color: #66b1ee;
    -webkit-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
    -moz-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
    -ms-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
    -o-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
    box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
}

.search2 input:focus + .results { display: block }
.show_results:hover{
    text-decoration: none;
    color: #fff;
    border-color: #2380dd #2179d5 #1a60aa;
    background-color: #338cdf;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #59aaf4), color-stop(100%, #338cdf));
    background-image: -webkit-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -moz-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -ms-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -o-linear-gradient(top, #59aaf4, #338cdf);
    background-image: linear-gradient(top, #59aaf4, #338cdf);
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -moz-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -ms-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -o-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
}
.search2 .results {
    position: absolute;
    top: 138px;
    left: 233px;
    right: 68px;
    max-width: 538px;
    z-index: 10;
    padding: 4px;
    margin: 0;
    border-width: 1px;
    border-style: solid;
    border-color: #cbcfe2 #c8cee7 #c4c7d7;
    border-radius: 3px;
    background-color: #3e537e;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.search2 .results li { display: block }

.search2 .results li:first-child { margin-top: -1px }

.search2 .results li:first-child:before, .search2 .results li:first-child:after {
    display: block;
    content: '';
    width: 0;
    height: 0;
    position: absolute;
    left: 50%;
    margin-left: -5px;
    border: 5px outset transparent;
}

.search2 .results li:first-child:before {
    border-bottom: 5px solid #c4c7d7;
    top: -11px;
}

.search2 .results li:first-child:after {
    border-bottom: 5px solid #fdfdfd;
    top: -10px;
}

.search2 .results li:first-child:hover:before, .search2 .results li:first-child:hover:after { display: none }

.search2 .results li:last-child { margin-bottom: -1px }

.search2 .results a {
    display: block;
    position: relative;
    margin: 0 -1px;
    padding: 6px 40px 6px 10px;
    color: #808394;
    font-weight: 500;
    text-shadow: 0 1px #fff;
    border: 1px solid transparent;
    border-radius: 3px;
}

.search2 .results a span { font-weight: 200 }

.search2 .results a:before {
    content: '';
    width: 18px;
    height: 18px;
    position: absolute;
    top: 50%;
    right: 10px;
    margin-top: -9px;
    background: url("https://cssdeck.com/uploads/media/items/7/7BNkBjd.png") 0 0 no-repeat;
}

.search2 .results a:hover {
    text-decoration: none;
    color: #fff;
    border-color: #2380dd #2179d5 #1a60aa;
    background-color: #338cdf;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #59aaf4), color-stop(100%, #338cdf));
    background-image: -webkit-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -moz-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -ms-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -o-linear-gradient(top, #59aaf4, #338cdf);
    background-image: linear-gradient(top, #59aaf4, #338cdf);
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -moz-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -ms-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -o-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
}

:-moz-placeholder {
    color: #a7aabc;
    font-weight: 200;
}

::-webkit-input-placeholder {
    color: #a7aabc;
    font-weight: 200;
}

.lt-ie9 .search2 input { line-height: 26px }

.second_navbar_button{
    position: absolute;
    display: flex;
    right: 90px;
    bottom: 5px;
    overflow: hidden;
}
.second_navbar_button li{
    margin: 0px 5px 0px 5px;
    padding: 0px 5px 0px 5px;
    background-color: #1e40af;
    font-weight: 500;
    overflow: hidden;
    color: whitesmoke;
    letter-spacing: 1px;
    border: 2px solid red;
    border-radius: 15px;
}
.second_navbar_button li a:hover{
    font-weight: 500;
    color: whitesmoke;
    letter-spacing: 1px;
}

.navbar_topp{
    display: flex;
    position: absolute;
    left: 260px;
    bottom: 5px;
    font-size: 20px;
    font-weight: 400;
}

.navbar_topp li{
    padding: 0px 5px 0px 5px;
}

.navbar_topp li a:hover{
    border-top: 1px solid red;
    font-size: 20px;
    font-weight: 400;
    color: whitesmoke;
}
.me{
    padding-left: 180px;
    margin-bottom: 20px;
    margin-right: 23px;
    width: auto;
    color:black;
}
.me_text{
    padding: 5px;
    padding-left: 20px;
    padding-right: 20px;
    background-color: #3e537e;
    border-radius: 15px;
    box-shadow: 0 0 5px 0 #88a7fdc2, 0 2px 25px 0 rgb(0 0 0 / 20%);
}
.me_chat_txt{
    /* position: relative; */
    top: -20px;
    padding: 5px;
    color: whitesmoke;
    font-weight: 400;
}
.you{
    width: auto;
    margin-left: 23px;
    padding-right: 180px;
    margin-bottom: 20px;
    color:black;
}
.you_text{
    padding: 5px;
    padding-left: 20px;
    padding-right: 20px;
    background-color: #3e537e;
    border-radius: 15px;
    box-shadow: 0 0 5px 0 #88a7fdc2, 0 2px 25px 0 rgb(0 0 0 / 20%);
}
.you_chat_txt{
    /* position: relative; */
    top: -20px;
    padding: 5px;
    color: whitesmoke;
    font-weight: 400;
}
.chat-spacer{
    height: 15px;
}
.chat {
    letter-spacing: 1px;
}
.chat_image{ /*me*/
    width: 30px;
    height: 30px;
    margin-left: 118px;
    margin-top: -10px;
    border: 2px solid red;
    border-radius: 15px;
}
.chat_image_you{ /*you*/
    width: 30px;
    height: 30px;
    margin-left: -27px;
    margin-top: -10px;
    border: 2px solid red;
    border-radius: 15px;
}
.me_chat_datd{
    /* position: relative; */
    /* top:-10px; */
    left: 58px;
    font-size: 11px;
    color: whitesmoke;
}
.you_chat_datd{
    /* position: relative;
    font-size: 11px; */
    bottom: -30px;
    font-size: 11px;
    left: 10px;
    color: whitesmoke;
}
#message1{
    overflow-y: scroll;
    height: 57px;
    margin-top: 10px;
    margin-bottom: 4px;
    width: 237px;
    padding: 5px;
    color: whitesmoke;
    border-radius: 15px;
    background-color: #3e537e;
    font-weight: 400;
    margin-left: 43px;
    box-shadow: 0 0 5px 0 #88a7fdc2, 0 2px 25px 0 rgb(0 0 0 / 20%);
}
#message1 textarea::placeholder{
    color: whitesmoke;
}
#message1::-webkit-scrollbar{
    width: 0em;
}
.main-post{
    overflow-y: scroll;
    height: 556px;
}
.main-post::-webkit-scrollbar{
    width: 0em;
}
#mydiv {
    position: absolute;
    top: 280px;
    height: auto;
    min-height: 318px;
    left: 895px;
    z-index: 9;
    width: 368px;
    padding: 2px;
    background-color: #1e40af;
    /* text-align: center; */
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
}

#mydivheader {
  padding: 4px;
  cursor: move;
  z-index: 10;
  background-color: #1e40af;
  color: #fff;
  border-bottom: 1px solid #292d41;
}
#mydiv_body{
    background-color: #c2cff982;
    min-height: 249px;
    height: 100px;
    Overflow-y: auto;
}

.mydiv_body::-webkit-scrollbar {
    width: 0em;
}
.mydivfooter{
    bottom: 10px;
    left: 50px;
    min-height: 21px;
    height: auto;
}
.mydivfooter input[type="text"]{
    background-color: #6883bb85;
    color: whitesmoke;
    padding-left: 10px;
}

.tag-line{
    margin-top: 0px;
    font-size: 0.9rem;
    text-transform: uppercase;
    text-align: center;
}
.container4{
    height: 100%;
    width: 100%;
    margin-bottom: 1rem;
    padding: 30px;
    display: grid;
    grid-template-columns: 65% 35%;
    grid-template-rows: 60vh 18vh 32.5vh 35vh 7vh;
    grid-gap: 1.5rem; 
    overflow: hidden;
}

.article-1{
    /* grid-column: 1 / 2;
    grid-row: 1 / 9; */
    box-shadow: var(--grid-shadow);
    overflow: hidden;
}
.leftt{
    width: 698px;
}
.rightt{
    width: 384px;
}

.img-1{
    width: 100%;
    height: auto;
}

.article-content{
    text-align: justify;
    margin: 0px;
    padding: 0px 2rem;
    color: whitesmoke;
    background-color: #1e40af;
    height: auto;
}
.article-content1{
    text-align: justify;
    margin: 0px;
    padding: 0px 2rem;
    color: whitesmoke;
    background-color: #1e40af;
    height: auto;
}
.stats{
    position: relative;
    text-align: center;
    outline: none;
    right: 10px;
    border: none;
    background: #3e537e;
    color: white;
    padding: 0px 20px 0 20px;
    border-radius: 30px;
    box-shadow: 0 0 3px 0 #ece3e5, 0 20px 25px 0 rgb(0 0 0 / 20%);
    transition: all 1s;
    bottom: 9px;
    width: 350px;
}
.stats1{
    position: relative;
    outline: none;
    border: none;
    background: #3e537e;
    color: white;
    padding: 0 20px 0 20px;
    border-radius: 30px;
    box-shadow: 0 0 3px 0 #ece3e5, 0 20px 25px 0 rgb(0 0 0 / 20%);
    transition: all 1s;
    bottom: -4px;
}
.stats2{
    position: relative;
    outline: none;
    font-size: 11px;
    border: none;
    background: #3e537e;
    color: white;
    padding: 0px 2px 0 2px;
    border-radius: 30px;
    box-shadow: 0 0 3px 0 #ece3e5, 0 20px 25px 0 rgb(0 0 0 / 20%);
    transition: all 1s;
    bottom: -3px;
    text-align: center;
    margin: 0px 10px 0px 10px;
}
/* .commentss{
    grid-column: 1 / 2;
    grid-row: 3/ 4;
} */
.article-heading{
    margin-top: -5px;
    padding-top: 1rem;
    font-size: 26px;
    font-weight: 400;
    color: #d8d8d8;
    border-bottom: 1px solid red;
}

.article-txt{
    margin-top: 2rem;
}

.article-btn{
    margin-top: 4rem;
    text-decoration: none;
    color: var(--black-clr);
    font-weight: 500;
    display: inline-block;
    padding: 0.5rem 1.2rem;
    border-radius: 0.7rem;
    border: 1px solid rgba(0, 0, 0, 0.5);
    transition: transform 400ms, box-shadow 500ms;
}

.article-btn:hover{
    transform: scale(1.05);
    border: none;
    box-shadow: 0 0 1.5rem 0 #d3d3d3;
}

.article-2{
    /* grid-column: 2 / 3;
    grid-row: 1 / 2; */
    box-shadow: var(--grid-shadow); 
    overflow: hidden;      
}

.img-2{
    width: 100%;
    height: auto;
}

.article-3{
    box-shadow: var(--grid-shadow);
    /* grid-column: 2 / 3;
    grid-row: 2 / 4; */
    overflow: hidden;
}

.popular{
    font-weight: lighter;
    font-size: 1.6rem;
    margin: 0px;
    padding: 1rem 2rem;
    background-color: var(--body-bg);
}
.popular-link{
    padding: 1px;
    padding-top: 0px;
    width: 100%;
    text-align: center;
    font-size: 15px;
    background-color: #1e40af;
    color: whitesmoke;
}
.popular-link-icon{
    font-size: 13px;
}

.s-img{
    height: 5rem;
    width: 6rem;
}

.img-link{
    background: var(--main-color);
    display: flex;
    border-bottom: 1px solid #cccccc;
    text-decoration: none;
    color: var(--black-clr);
    font-size: 1.5rem;
    padding: 0.62rem 2rem;
}

.img-link:hover{
    background: var(--hover-bg-clr);
}

.article-4{
    box-shadow: var(--grid-shadow);
    /* grid-column: 1 / 2;
    grid-row: 3 / 6; */
    overflow: hidden;
}

.img-3{
    width: 100%;
    height: auto;
}

.article-5{
    /* grid-column: 2 / 3;
    grid-row: 4 / 5; */
    box-shadow: var(--grid-shadow);
    overflow: hidden;
}

.tag-container{
    padding-left: 1rem;
    padding-top: 1rem;
    background: var(--main-color);
    height: 100%;
}

.tags{
    display: inline-block;
    text-decoration: none;
    color: whitesmoke;
    background: #3e537e;
    line-height: 1.5;
    cursor: pointer;
    height: 1.5rem;
    font-weight: 400;
    width: max-content;
    margin: 0.15rem;
    padding: 0 1rem;
    border-radius: 0.3rem;
}
.tags:hover{
    color: whitesmoke;
}
.tag-search{
    position: absolute;
    right: 14px;
    font-size: 10px;
    letter-spacing: 1px;
    top: 67px;
    cursor: pointer;
    background-color: #1e40af;
    padding: 1px 5px 0px 5px; 
    border-radius: 15px;
    border: 1px solid whitesmoke;
    box-shadow: 0 0 3px 0 #ece3e5, 0 20px 25px 0 rgb(0 0 0 / 20%);
}
.tag-search:hover{
    background-color: #1e40af;
    padding: 1px 5px 0px 5px; 
    border-radius: 15px;
    border: 1px solid red;
    box-shadow: 0 0 3px 0 #ece3e5, 0 20px 25px 0 rgb(0 0 0 / 20%);
}
.tag-content{
    position: relative;
    top: -11px;
}
.commentss{
    background-color: #1e40af;
    color: whitesmoke;
    padding: 10px;
}
.commentss-heading{
    padding-left: 20px;
    font-size: 20px;
    font-weight: 400;
}
.commentss-row{
    margin: 10px;
}
.commentss-body{
    margin: 10px;
}
.commentss-comment{
    background-color: #3e537e;
    box-shadow: 0 0 3px 0 #ece3e5, 0 20px 25px 0 rgb(0 0 0 / 20%);
    transition: all 1s;
}
.comment-footer{
    display: flex;
}
.comment-reply{
    display: flex;
}
.comment-reply-content{
    overflow-y: scroll;
    height: 57px;
    margin-top: 10px;
    margin-bottom: 4px;
    width: 414px;
    padding: 5px;
    color: whitesmoke;
    border-radius: 15px;
    background-color: #3e537e;
    font-weight: 400;
    margin-left: 14px;
    box-shadow: 0 0 5px 0 #88a7fdc2, 0 2px 25px 0 rgb(0 0 0 / 20%);
}
.comment-reply-content::-webkit-scrollbar{
    width: 0em;
}
.comment-reply-img{
    position: relative;
    bottom: -34px;
}
.show-post-comment-reply-body-scroll{
    overflow-y: scroll;
    overflow-x: hidden;
    height: 700px;
}
.show-post-comment-reply-body-scroll::-webkit-scrollbar{
    width: 0em;
}
.comment-body-scroll{
    overflow-y: scroll;
    overflow-x: hidden;
    height: 700px;
}
.comment-body-scroll::-webkit-scrollbar{
    width: 0em;
}
.show-post-comment-reply-body{
    width: 561px;
    position: relative;
    left: 37px;
    margin-bottom: 9px;
}
.pcr-body{
    margin-bottom: 15px;
}
.footer{
    height: 12rem;
    background: var(--black-clr);
    display: grid;
    place-items: center;
}

.footer-text{
    color: var(--body-bg);
}

@media (max-width: 1105px){
    .container{
        grid-template-rows: 60vh 20vh 33vh 45vh 1vh;
    }
    .article-btn{
        margin-top: 6rem;
    }
    .img-link{
        padding: 0.72rem 2rem;
    }
}

@media (max-width: 852px){
    .container{
        grid-template-columns: 100%;
        grid-template-rows: 31.5rem 33.8rem 23.2rem 31.5rem 11rem;
    }
    .article-1{
        grid-column: 1 / 2;
        grid-row: 1 / 2;
    }
    .article-2{
        grid-column: 1 / 2;
        grid-row: 2 / 3;
    }
    .article-3{
        grid-column: 1 / 2;
        grid-row: 3 / 4;
    }
    .article-4{
        grid-column: 1 / 2;
        grid-row: 4 / 5;
    }
    .article-5{
        grid-column: 1 / 2;
        grid-row: 5 / 6;
    }
    .article-btn{
        margin-top: 1.5em;
    }
};

#app ul {
  position: relative;
  padding-top: 18px;
  width: 420px;
}

#app li {
  display: block;
  width: 100%;
}

.list-enter-active,
.list-leave-active,
.list-move {
  transition: 500ms cubic-bezier(0.59, 0.12, 0.34, 0.95);
  transition-property: opacity, transform;
}

.list-enter {
  opacity: 0;
  transform: translateX(50px) scaleY(0.5);
}

.list-enter-to {
  opacity: 1;
  transform: translateX(0) scaleY(1);
}

.list-leave-active {
  position: absolute;
}

.list-leave-to {
  opacity: 0;
  transform: scaleY(0);
  transform-origin: center top;
}
.to_comment{
    
    padding: 20px;
    min-height: 98px;
}
.to_comment_body{
    background-color: #3e537e;
    box-shadow: 0 0 3px 0 #ece3e5, 0 20px 25px 0 rgb(0 0 0 / 20%);
    transition: all 1s;
}
.to_comment_txt{
    height: 32px;
    margin-top: 10px;
    margin-bottom: 4px;
    width: 69px;
    padding: 5px;
    color: whitesmoke;
    border-radius: 15px;
    background-color: #3e537e;
    font-weight: 400;
    box-shadow: 0 0 5px 0 #88a7fdc2, 0 2px 25px 0 rgb(0 0 0 / 20%);
}
.to_comment_txt::-webkit-scrollbar{
    width: 0em;
}
.to_comment_show_txt{
    min-height: 32px;
    margin-top: 10px;
    margin-bottom: 4px;
    width: 100%;
    padding: 15px;
    color: whitesmoke;
    border-radius: 15px;
    background-color: #3e537e;
    font-weight: 400;
    box-shadow: 0 0 5px 0 #88a7fdc2, 0 2px 25px 0 rgb(0 0 0 / 20%);
}
.send_comment{
    height: 28px;
    text-align: center;
    margin-top: 14px;
    margin-left: 18px;
    margin-bottom: 4px;
    width: 28px;
    padding: 5px;
    color: whitesmoke;
    font-size: 11px;
    border-radius: 15px;
    background-color: #3e537e;
    font-weight: 700;
    box-shadow: 0 0 10px 2px #88a7fdc2, 0 7px 15px 0 rgb(0 0 0 / 20%);
}
.to_comment_section{
    display: flex;
}
.edit_coment{
    min-height: 32px;
    margin-top: 10px;
    opacity: 0;
    margin-left: 20px;
    margin-bottom: 4px;
    padding: 15px;
    color: whitesmoke;
    border-radius: 15px;
    background-color: #3e537e;
    font-weight: 400;
    box-shadow: 0 0 5px 0 #88a7fdc2, 0 2px 25px 0 rgb(0 0 0 / 20%);
}
.post-modify{
    position: absolute;
    top: 10px;
    left: 20px;
}
.post-modify span{
    margin-left: 10px;
}
.post-modify span a:hover{
    font-weight: 400;
}
.scroll{
    Overflow-y: scroll;
}
.pop-body{

}
.pop-body-adjust{
    height: 460px;
}
.pop-body-adjust::-webkit-scrollbar{
    width: 0em;
}
</style>
