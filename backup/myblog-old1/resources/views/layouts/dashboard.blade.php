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
        width: calc(100% - 3.5rem);
    }

    .sidebar:hover {
        width: 16rem;
    }

    @media only screen and (min-width: 768px) {
        .header-right {
            width: calc(100% - 11rem);
        }
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



.wrapper{
/*   background: red; */
  position: fixed;
  right: 50px;
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

.num{
    position: relative;
    left: 84px;
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

.notification{

  display: flex;
  position: fixed;
  background: rgb(62 , 83 ,126);
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
</style>
