<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html,
    body {
        width: 100%;
        height: 100%;
    }

    body {
        background: #1C1F2B;
        color: #fff;
        margin: 0px;
        font-family: "Open Sans", sans-serif;
    }

    a {
        color: #2196f3;
        transition: color 200ms;
    }

    .shill {
        position: fixed;
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/726875/profile/profile-512.jpg?100000");
        background-size: cover;
        width: 40px;
        height: 40px;
        bottom: 15px;
        right: 15px;
        border-radius: 20px;
        opacity: 0.4;
        filter: blur(0.5px);
        -webkit-filter: blur(0.5px);
        transition: opacity 200ms, blur 200ms;
        user-drag: none;
        -webkit-user-drag: none;
    }

    .shill:hover {
        opacity: 1;
        filter: none;
        box-shadow: 6px 6px 2px rgba(0, 0, 0, 0.6);
    }

    :root {
        --background: #1C1F2B;
        --primary: #2196f3;
        --secondary: #1de9b6;
    }

    html {
        font-family: "Roboto", "Helvetica Neue", Helvetica, Arial, sans-serif;
        line-height: 1.15;
    }

    body {
        display: flex;
        justify-content: center;
        padding-top: 122px;
        line-height: 1.5;
        font-size: 14px;
        overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: inherit;
        font-weight: 300;
        line-height: 1.1;
    }

    h2 {
        font-size: 32px;
    }

    h4 {
        font-size: 24px;
    }

    hr {
        border: none;
        border-top: 1px solid #30354a;
    }

    .form-control {
        background-color: #30354a;
        color: #fff;
        padding: 8px 12px;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 4px;
        line-height: 1.25;
        font-size: 14px;
        font-family: inherit;
        outline: none;
        transition: box-shadow 200ms, border-color 200ms;
        box-sizing: content-box;
    }

    .form-control:hover {
        border-color: rgba(255, 255, 255, 0.3);
    }

    .form-control:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(33, 150, 243, 0.8);
    }

    .form-control::placeholder,
    .form-control::-moz-placeholder {
        color: rgba(255, 255, 255, 0.6);
        opacity: 1;
    }

    .container {
        /* display: flex; */
        max-width: 1248px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        flex-shrink: 0;
    }

    .row:not(.fluid) {
        margin: 0 -15px;
    }

    .row.top {
        align-items: flex-start;
    }

    .col {
        flex: 1 1 0px;
        display: flex;
        flex-direction: column;
        padding: 0 15px;
    }

    .row.header {
        margin-bottom: -15px;
    }

    .label span {
        color: rgba(255, 255, 255, 0.6);
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 5px;
        line-height: 13px;
    }

    canvas {
        max-width: 100%;
    }

    .doughnut {
        flex: 0 0 33.33333%;
        text-align: center;
    }

    .doughnut .chart {
        width: 75%;
        margin: 0 auto 15px;
    }

    .doughnut strong {
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
    }

    .sparklines {
        margin: -15px !important;
    }

    .sparkline {
        flex-grow: 1;
        width: 25%;
        padding: 0;
    }

    .sparkline .label {
        padding: 0 15px;
    }

    .sparkline .label span {
        color: rgba(255, 255, 255, 0.6);
        font-size: 12px;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .sparkline .label h2 {
        font-size: 2rem;
    }

    .sparkline .chart {
        padding: 15px;
    }

    .sparkline .chart-container {
        height: 70px;
    }

    .list {
        display: flex;
        flex-direction: column;
        margin-bottom: 1rem;
        width: 100%;
        padding: 10px;
        background: transparent;
    }

    .list>* {
        border: 1px solid #30354a;
        margin-bottom: -1px;
    }

    .list h6 {
        padding: 1rem 1.25rem;
    }

    .list a {
        position: relative;
        padding: 0.75rem 1.25rem;
        width: 100%;
        display: flex;
        justify-content: space-between;
        box-sizing: border-box;
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        font-size: 14px;
        line-height: 1.5;
    }

    .list a .progress {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: -1;
        display: block;
        background-color: #171923;
        border-radius: inherit;
    }

    .list a span:last-child {
        color: rgba(255, 255, 255, 0.6);
    }

    .list a:hover,
    .list a:focus {
        background: #30354a;
    }

    .list a:active {
        background: #2196f3;
        color: #1C1F2B;
    }

    .list a:active span:last-child {
        color: #1C1F2B;
    }

    .list> :first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .list> :last-child {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .list+a {
        align-self: flex-start;
        font-size: 14px;
        line-height: 18px;
        margin-bottom: 30px;
    }

    .btn {
        display: inline-block;
        text-decoration: none;
        background: transparent;
        border-radius: 4px;
        padding: 8px 16px;
        transition: background 200ms, color 200ms;
    }

    .btn.primary {
        color: #2196f3;
        border: 1px solid #2196f3;
    }

    .btn.primary:hover {
        background: #2196f3;
        color: #fff;
    }

    .divider {
        position: relative;
        font-size: 12px;
        text-transform: uppercase;
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .divider h3 {
        position: relative;
        display: inline-block;
        vertical-align: middle;
        background-color: #1C1F2B;
        color: rgba(255, 255, 255, 0.6);
        padding: 0 12px;
    }

    .divider::before {
        position: absolute;
        top: 50%;
        display: block;
        content: "";
        width: 100%;
        height: 1px;
        background-color: #30354a;
    }

    nav {
        display: flex;
        flex-direction: column;
        margin-right: 40px;
    }

    nav .header {
        display: flex;
        justify-content: space-between;
        box-sizing: border-box;
        min-width: 360px;
        padding-bottom: 20px;
        margin-left: 244px;
        line-height: 37px;
    }

    nav .brand {
        color: #30354a;
        text-decoration: none;
        font-size: 40px;
        transition: color 200ms;
    }

    nav .brand:hover {
        color: rgba(255, 255, 255, 0.6);
    }

    nav .brand:focus {
        color: #2196f3;
    }

    nav ul li.nav-text {
        font-size: 12px;
        color: #30354a;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 5px;
        padding: 0 15px;
    }

    nav ul li a {
        display: block;
        padding: 7px 15px;
        border-radius: 4px;
        text-decoration: none;
        line-height: 1.5;
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
    }

    nav ul li a:hover {
        color: #fff;
    }

    nav ul li a.active {
        background: #2196f3;
        color: #1C1F2B;
        cursor: default;
    }

    nav ul li+.nav-text {
        margin-top: 20px;
    }

    .search {
        position: relative;
    }

    #sidebar {
        flex: 0 0 auto;
        width: 352px;
        margin-left: -106px;
        position: fixed;
    }

    .plf-img {
        width: 150px;
        height: 150px;
        background: #30354a;
        border-radius: 100%; 
    }
    .change-img{
        background: #0000006b;
        position: relative;
        top: 35px;
        left: 49px;
        border-radius: 100%;
        padding: 20px;
        cursor: pointer;
    }

    .noUser{
        background-image: url("https://img.search.brave.com/zXXzrLJOha0Enw8eUJBwbjBIm1DotMC8phHW2S_5jAc/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5z/d2FZTVdBUzhjZmJ5/TUtMRWlRSjJRRDZE/NiZwaWQ9QXBp");
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover;
    }
    .plf-card {
        margin-left: -268px;
        background: #30354a;
        height: 150px;
        color: #a4a5aa;
        border-radius: 15px;
        padding: 15px;
    }

    #search {
        padding: 8px 15px;
        width: 100%;
        box-sizing: border-box;
    }

    #date-range {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #date-range input {
        width: 70px;
        height: 17px;
        padding: 7px 5px;
    }

    #date-range input:first-child {
        border-right-color: transparent;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        text-align: center;
    }

    #date-range input:last-child {
        border-left-color: transparent;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        text-align: center;
    }

    #date-range input:hover {
        border-color: rgba(255, 255, 255, 0.3);
    }

    #date-range input:focus {
        border-color: transparent;
    }

    #date-range div {
        display: inline-block;
        width: 18px;
        height: 33px;
        background: #30354a;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-left: none;
        border-right: none;
        text-align: center;
        font-weight: bold;
        font-size: 24px;
        line-height: 29px;
        z-index: -1;
    }

    #menu {
        display: none;
        background: transparent;
        color: #30354a;
        padding-bottom: 2px;
        border: 1px solid #30354a;
        border-radius: 4px;
        font-size: 28px;
        cursor: pointer;
        transition: color 200ms, border-color 200ms;
    }

    #menu:hover,
    #menu:focus {
        color: #fff;
        border-color: #fff;
    }

    .btn-search {
        background: transparent;
        border: none;
        color: #fff;
        position: absolute;
        height: 100%;
        top: 0;
        right: 0;
    }

    @media (max-width: 1100px) {
        .container {
            width: 800px;
        }

        #sidebar {
            width: 175px;
        }

        #sidebar nav {
            margin-right: 0;
        }

        .sparkline {
            flex-basis: 50%;
            width: 50%;
        }
    }

    @media (max-width: 800px) {
        body {
            padding-top: 100px;
        }

        .container {
            width: 575px;
            flex-wrap: wrap;
        }

        .container>.col {
            flex-basis: auto;
        }

        nav .header {
            display: flex;
            position: fixed;
            width: 100%;
            height: 70px;
            background: #1C1F2B;
            top: 0;
            left: 0;
            border-bottom: 1px solid #30354a;
            align-items: center;
            z-index: 10;
            padding: 0 15px;
        }

        nav .header #menu {
            display: block;
        }

        nav.open ul {
            top: 70px;
        }

        nav ul {
            position: fixed;
            transition: top 500ms;
            left: 0px;
            top: -500px;
            background: #1C1F2B;
            width: 100%;
            padding: 0;
            z-index: 2;
            padding: 15px 15px 0;
            box-sizing: border-box;
            border-bottom: 1px solid #30354a;
        }

        nav ul .divider {
            display: none;
        }

        #date-range {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            min-width: 360px;
            height: 70px;
            z-index: 10;
            pointer-events: none;
        }

        #date-range * {
            pointer-events: all;
        }

        .list-container {
            flex-basis: 100%;
            width: 100%;
        }
    }

    @media (max-width: 800px) and (max-height: 500px) {
        nav ul {
            overflow-y: scroll;
            height: calc(100% - 70px);
        }
    }

    @media (max-width: 575px) {
        .container {
            width: 100%;
            min-width: 360px;
        }

        .doughnut {
            flex-basis: 100%;
        }

        .doughnut:not(:last-child) {
            margin-bottom: 30px;
        }

        .sparkline {
            flex-basis: 100%;
            width: 100%;
        }
    }

    .dark-theme.pika-single {
        color: #fff;
        background: #1C1F2B;
        border: 1px solid #30354a;
        border-bottom-color: #30354a;
    }

    .dark-theme .pika-label {
        background-color: inherit;
    }

    .dark-theme .pika-prev,
    .dark-theme .is-rtl .pika-next {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAeCAQAAACGG/bgAAAAQ0lEQVR4Ae3KIQ4AIBTD0N0/IeHGI3UIRA3ut/Zl+ltXc5++htVAmIAwAWECwgSEKbgthEoIlRAqIVRCqINQB9nDgQd7ktwFo6UpWQAAAABJRU5ErkJggg==");
    }

    .dark-theme .pika-next,
    .dark-theme .is-rtl .pika-prev {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAeCAQAAACGG/bgAAAAP0lEQVQ4y+3TMQoAMAgEwfwfAvvjTZ1uGzuvHhBPPGczEG+FRqqRaqQaqUaqkX6QBmmjacvQ6qEVTjsh+xizebvlaWptGXZAAAAAAElFTkSuQmCC");
    }

    .dark-theme .pika-table th,
    .dark-theme .pika-week,
    .dark-theme .is-disabled .pika-button {
        color: rgba(255, 255, 255, 0.6);
    }

    .dark-theme .pika-button {
        color: inherit;
        background: inherit;
    }

    .dark-theme .is-today .pika-button {
        font-weight: normal;
    }

    .dark-theme .is-selected .pika-button {
        color: #fff;
        background: #2196f3;
    }
</style>

<style>
    .card {
        background-color: #30354a;
        margin: 4px;
        padding: 0px;
        border-radius: 16px;
    }

    .card-list__title {
        padding-right: 2px;
        color: #e9e7e7;
    }

    .carousel-inner>.item>a>img,
    .carousel-inner>.item>img,
    .img-responsive,
    .thumbnail a>img,
    .thumbnail>img {
        display: block;
        max-width: 100%;
        height: 162px;
        border-top-left-radius: 15px;
        border-bottom-left-radius: 15px;
    }

    .card__img {
        position: relative;
        float: left;
        width: 235px;
        margin-bottom: 0px;
    }

    .list a {
        position: relative;
        padding: 0px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        box-sizing: border-box;
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        font-size: 14px;
        line-height: 1.5;
    }

    .fix a {
        padding: 0.75rem 1.25rem;
    }

    #pixad-listing.list .card__title {
        margin-top: 0;
        position: relative;
        top: 10px;
        z-index: 9;
    }

    .list> :last-child {
        border-bottom-left-radius: 17px;
        border-bottom-right-radius: 4px;
    }

    .section-header {
        margin-top: 89px;
    }
    .float-left{
        float: left;
    }
    .float-right{
        float: right;
    }
    .list h6{
        font-size: 18px;
    }
    .update{
        
        text-decoration: underline;
        cursor: pointer;
    }
    .d-search{
        padding: 8px 15px;
        width: 100%;
        box-sizing: border-box;
    }
    
</style>