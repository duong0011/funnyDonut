<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Donut</title>
    <link rel="icon" href=" <?= base_url()?>/assets/img/logo/logo-web.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/Huan-base.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/Nga-base.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/header-footer.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/grid.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/profile.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>

    <style>
        .header__cart--has-cart .header__cart-icon:hover~.header__cart-list.has-cart,
        .header__cart--has-cart .header__cart-count:hover~.header__cart-list.has-cart,
        .header__cart--has-cart .header__cart-list.has-cart:hover {
            display: flex;
        }

        .header__cart--has-cart .header__cart-icon:hover~.header__cart-list.no-cart,
        .header__cart--has-cart .header__cart-list.no-cart:hover{
            display: flex;
        }
        
        .pay-btn-new{
            margin: 0 25px 30px;
            color: var(--white-color);
            background-color: var(--primary-color);
            font-size: 18px;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            cursor: pointer;
        }
        .containercreditcard {
          color: white;
          display: block;
          padding-top: 40px;
          text-align: center;
        }

        .card-container {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: space-around;
        }
         .cc-font::before {
          content: '';
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          background: url("https://webdevtrick.com/demos/earth.svg") no-repeat center;
          background-size: cover;
          opacity: .05;
        }
        .cc-back::before {
          content: '';
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          background: url("https://webdevtrick.com/demos/earth.svg") no-repeat center;
          background-size: cover;
          opacity: .05;
        }
         .cc-font .logo {
          position: absolute;
          top: 9px;
          right: 20px;
          width: 60px;
        }
        .cc-font .logo svg,
        .cc-back .logo svg {
          width: 100%;
          height: auto;
          fill: #fff;
        }

        .cc-font,
        .cc-back {
          background: linear-gradient(135deg, #11998e, #38ef7d);
          border-radius: 10px;
          display: block;
          height: 250px;
          letter-spacing: 0.1rem;
          margin: 0 0 30px;
          position: relative;
          text-align: left;
          text-transform: uppercase;
          padding-left: 0;
          padding-right: 0;
        }

        .black {
            border-top: 50px solid black;
            margin-top: 42px;
        }

        .cc-back p {
            float: right;
            font-size: 12px;
            color: white;
            margin-top: 20px;
            padding-right: 30px;
        }

        .cvv-input {
            text-align: center;
            margin-top: 33px;
        }
       
        .cvv-input input {
            width: 90%;
            height: 35px;
            border: none;
            border-radius: 3px;
        }

        .cc-back .logo {
            float: right;
            padding-right: 25px;
            margin-top: 31px;
            width: 85px;
        }

        .chip {
          position: absolute;
          width: 60px;
          height: 45px;
          top: 20px;
          left: 20px;
          background: linear-gradient(135deg, #ddccf0 0%, #d1e9f5 44%, #f8ece7 100%);
          border-radius: 8px;
        }

        .nubank-logo {
          background-image: url("https://www.nubank.com.br/images/eeb5478f.header_logo.png");
          background-position: 50% 50%;
          background-repeat: no-repeat;
          background-size: 80px;
          display: block;
          filter: grayscale(100%);
        }

        .nubank-logo:after {
          background: linear-gradient(#eee, #999);
          -webkit-background-clip: text;
          -webkit-text-fill-color: white;
          display: block;
          text-align: center;
          padding-top: 60px;
        }

        .cc-number {
            background: white;
            -webkit-background-clip: text;
            -webkit-text-fill-color: white;
            font-size: 38px;
            left: 30px;
            position: absolute;
            margin: 0 auto;
            top: 103px;
            left: 19px;
        }

        /* .info.row {
            display: flex;
            justify-content: space-around;
            margin-top: 160px;
            padding: 12px;
        } */

        .info-name,
        .info-date {
            position: absolute;
            margin: 0 auto;
            top: 180px;
            left: 19px;
            font-size: 22px;
            text-transform: capitalize;
            color: white;
        }

        .info-date {
            text-align: right;
            left: auto;
            right: 20px;
        }

        .card-holder {
            font-size: 10px;
            letter-spacing: 1px;
            text-shadow: none;
            text-transform: uppercase;
            font-weight: normal;
            opacity: 0.5;
            display: block;
            margin-bottom: 3px;
        }

        .expires {
            font-size: 10px;
            letter-spacing: 1px;
            text-shadow: none;
            text-transform: uppercase;
            font-weight: normal;
            opacity: 0.5;
            display: block;
            margin-bottom: 3px;
        }

        .card-holder-name,
        .cc-date {
            font-size: 20px;
        }

        .number {
            position: absolute;
            margin: 0 auto;
            top: 103px;
            left: 19px;
            font-size: 30px;
        }
        /*
         * Card back
         */
        .cc-magnet {
          background-color: #c0c0c0;
          display: block;
          height: 30px;
          position: absolute;
          top: 15%;
          width: 100%;
        }

        /*
         * MasterCard logo in pure CSS in just ONE element
         * by Jaime Caballero (jaicab.com)
         */
        .mastercard {
          font-family: "Droid Sans", Helvetica, sans-serif;
          position: absolute;
          width: 5rem;
          font-size: 12px;
          line-height: 3rem;
          letter-spacing: -0.0666666667rem;
          text-align: center;
          font-weight: bold;
          font-style: italic;
          color: white;
          text-shadow: -0.04rem 0.04rem 0 #16226a;
          text-transform: none;
          top: -45px;
          right: 30px;
          margin: 20vh auto;
          z-index: 2;
        }
        .mastercard::before {
          content: "";
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          display: inline-block;
          border-radius: 50%;
          width: 3rem;
          height: 3rem;
          z-index: -1;
          background: linear-gradient(#fe9900 50%, #cd0001 50%);
          background-size: 0.375rem 0.375rem;
          box-shadow: 2rem 0 0 0 #fe9900, 2rem 0 0 0 #cd0001 inset;
        }
        .mastercard::after {
          content: "®";
          padding-left: 0.5em;
          font: 0.25em Helvetica, sans-serif lighter normal;
          text-shadow: none;
        }

        .cirrus {
          font-family: "Droid Sans", Helvetica, sans-serif;
          position: absolute;
          width: 4em;
          font-size: 12px;
          line-height: 2rem;
          letter-spacing: -0.0666666667rem;
          text-align: center;
          font-weight: bold;
          font-style: italic;
          color: white;
          text-shadow: -0.04rem 0.04rem 0 #16226a;
          text-transform: none;
          top: -20px;
          left: 15px;
          margin: 20vh auto;
          z-index: 3;
        }
        .cirrus::before {
          content: "";
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          display: inline-block;
          border-radius: 50%;
          width: 2rem;
          height: 2rem;
          z-index: -1;
          background: linear-gradient(#0085c6 50%, #345399 50%);
          background-size: 0.375rem 0.375rem;
          box-shadow: 1.3333333333rem 0 0 0 #0085c6, 1.3333333333rem 0 0 0 #345399 inset;
        }
        .cirrus::after {
          content: "®";
          font: 0.25em Helvetica, sans-serif lighter normal;
          padding-left: 0.5em;
          text-shadow: none;
        }

        *,
        *::before,
        *::after {
          box-sizing: border-box;
        }
        html,
        body {
          min-height: 100%;
          font-family: 'Open sans', sans-serif;
        }
        body {
          background: linear-gradient(130deg, #74ebd5, #ACB6E5);
        }
        .form fieldset {
          border: none;
          padding: 0;
          padding: 10px 0;
          position: relative;
          clear: both;
        }
        .form fieldset.card-expire {
          float: left;
          width: 60%;
        }
        .form fieldset.card-expire .select {
          width: 84px;
          margin-right: 12px;
          float: left;
        }
        .form fieldset.fieldset-ccv {
          clear: none;
          float: right;
          width: 86px;
        }
        .form fieldset label {
          display: block;
          text-transform: uppercase;
          font-size: 11px;
          color: rgba(0, 0, 0, 0.6);
          margin-bottom: 5px;
          font-weight: bold;
          font-family: Inconsolata;
        }
        .form fieldset input,
        .form fieldset .select {
          width: 100%;
          height: 38px;
          color: #333333;
          padding: 10px;
          border-radius: 5px;
          font-size: 15px;
          outline: none !important;
          border: 1px solid rgba(0, 0, 0, 0.3);
          box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2);
        }
        .form fieldset input.input-cart-number,
        .form fieldset .select.input-cart-number {
          width: 82px;
          display: inline-block;
          margin-right: 8px;
        }
        .form fieldset input.input-cart-number:last-child,
        .form fieldset .select.input-cart-number:last-child {
          margin-right: 0;
        }
        .form fieldset .select {
          position: relative;
        }
        .form fieldset .select::after {
          content: '';
          border-top: 8px solid #222;
          border-left: 4px solid transparent;
          border-right: 4px solid transparent;
          position: absolute;
          z-index: 2;
          top: 14px;
          right: 10px;
          pointer-events: none;
        }
        .form fieldset .select select {
          -webkit-appearance: none;
             -moz-appearance: none;
                  appearance: none;
          position: absolute;
          padding: 0;
          border: none;
          width: 100%;
          outline: none !important;
          top: 6px;
          left: 6px;
          background: none;
        }
        .form fieldset .select select :-moz-focusring {
          color: transparent;
          text-shadow: 0 0 0 #000;
        }
        .checkout {
          margin: 150px auto 30px;
          position: relative;
          width: 460px;
          background: white;
          border-radius: 15px;
          padding: 160px 45px 30px;
          box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }
        .credit-card-box {
          -webkit-perspective: 1000;
                  perspective: 1000;
          width: 400px;
          height: 280px;
          position: absolute;
          top: -112px;
          left: 50%;
          -webkit-transform: translateX(-50%);
                  transform: translateX(-50%);
        }
        .credit-card-box:hover .flip, .credit-card-box.hover .flip {
          -webkit-transform: rotateY(180deg);
                  transform: rotateY(180deg);
        }
        .credit-card-box .front,
        .credit-card-box .back {
          width: 400px;
          height: 250px;
          border-radius: 15px;
          -webkit-backface-visibility: hidden;
                  backface-visibility: hidden;
          background: linear-gradient(135deg, #11998e, #38ef7d);
          position: absolute;
          color: #fff;
          font-family: Inconsolata;
          top: 0;
          left: 0;
          text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
          box-shadow: 0 1px 6px rgba(0, 0, 0, 0.3);
        }
        .credit-card-box .front::before,
        .credit-card-box .back::before {
          content: '';
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          background: url("https://webdevtrick.com/demos/earth.svg") no-repeat center;
          background-size: cover;
          opacity: .05;
        }
        .credit-card-box .flip {
          transition: 0.6s;
          -webkit-transform-style: preserve-3d;
                  transform-style: preserve-3d;
          position: relative;
        }
        .credit-card-box .logo {
          position: absolute;
          top: 9px;
          right: 20px;
          width: 60px;
        }
        .credit-card-box .logo svg {
          width: 100%;
          height: auto;
          fill: #fff;
        }

        .credit-card-box .front {
          z-index: 2;
          -webkit-transform: rotateY(0deg);
                  transform: rotateY(0deg);
        }
        .credit-card-box .back {
          -webkit-transform: rotateY(180deg);
                  transform: rotateY(180deg);
        }
        .credit-card-box .back .logo {
          top: 185px;
        }
        .credit-card-box .chip {
          position: absolute;
          width: 60px;
          height: 45px;
          top: 20px;
          left: 20px;
          background: linear-gradient(135deg, #ddccf0 0%, #d1e9f5 44%, #f8ece7 100%);
          border-radius: 8px;
        }
        .credit-card-box .chip::before {
          content: '';
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          margin: auto;
          border: 4px solid rgba(128, 128, 128, 0.1);
          width: 80%;
          height: 70%;
          border-radius: 5px;
        }
        .credit-card-box .strip {
          background: linear-gradient(135deg, #404040, #1a1a1a);
          position: absolute;
          width: 100%;
          height: 50px;
          top: 30px;
          left: 0;
        }
        .credit-card-box .number {
          position: absolute;
          margin: 0 auto;
          top: 103px;
          left: 19px;
          font-size: 38px;
        }
        .credit-card-box label {
          font-size: 10px;
          letter-spacing: 1px;
          text-shadow: none;
          text-transform: uppercase;
          font-weight: normal;
          opacity: 0.5;
          display: block;
          margin-bottom: 3px;
        }
        .credit-card-box .card-holder,
        .credit-card-box .card-expiration-date {
          position: absolute;
          margin: 0 auto;
          top: 180px;
          left: 19px;
          font-size: 22px;
          text-transform: capitalize;
        }
        .credit-card-box .card-expiration-date {
          text-align: right;
          left: auto;
          right: 20px;
        }
        .credit-card-box .ccv {
          height: 36px;
          background: #fff;
          width: 91%;
          border-radius: 5px;
          top: 110px;
          left: 0;
          right: 0;
          position: absolute;
          margin: 0 auto;
          color: #000;
          text-align: right;
          padding: 10px;
        }
        .credit-card-box .ccv label {
          margin: -25px 0 14px;
          color: #fff;
        }
        .form button {
          width: 100%;
          outline: none !important;
          background: linear-gradient(90deg, #11998e, #38ef7d);
          text-transform: uppercase;
          font-weight: bold;
          border: none;
          box-shadow: none;
          text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
          margin-top: 90px;
        }
        .form button .fa {
          margin-right: 6px;
        }
        .btn {
          display: block;
          color: white;
          text-decoration: none;
          margin: 20px 0;
          padding: 15px 15px;
          border-radius: 5px;
          position: relative;
        }
        .btn::after {
          content: '';
          position: absolute;
          z-index: 1;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          transition: all .2s ease-in-out;
          box-shadow: inset 0 3px 0 rgba(0, 0, 0, 0), 0 3px 3px rgba(0, 0, 0, 0.2);
          border-radius: 5px;
        }
        .btn:hover::after {
          background: rgba(0, 0, 0, 0.1);
          box-shadow: inset 0 3px 0 rgba(0, 0, 0, 0.2);
        }
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* font-family: 'Raleway', sans-serif;*/
            /* outline: none; */
            /* border: none; */
        }

        .shortenedSelect {
            display: inline-block;
            width: 120px;
            height: 41px;
            border: 1px solid #8f8b8b;
            border-radius: 4px;
            outline: none;
            font-size: 1.4rem;
        }
        option {
            font-size: 1.4rem;
        }

        .rung{
            animation:code-pro-rung-lac 2s ease infinite
        }

        @-webkit-keyframes code-pro-rung-lac{
            0%{
                -webkit-transform:rotate(0) scale(1) skew(1deg)
            }
            10%{
                -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
            }
            20%{
                -webkit-transform:rotate(25deg) scale(1) skew(1deg)
            }
            30%{
                -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
            }
            40%{
                -webkit-transform:rotate(25deg) scale(1) skew(1deg)
            }
            50%{
                -webkit-transform:rotate(0) scale(1) skew(1deg)
            }
            100%{
                -webkit-transform:rotate(0) scale(1) skew(1deg)
            }
        }

        div.stars {
            /* width: 150px; */
            display: inline-block;
        }
            
        input.star { display: none; }
        
        label.star {
            float: right;
            padding: 0 4px;
            font-size: 22px;
            color: #444;
            transition: all .2s;
        }
        
        input.star:checked ~ label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }
        
        input.star-5:checked ~ label.star:before {
            color: #FE7;
            text-shadow: 0 0 20px #952;
        }
        
        input.star-1:checked ~ label.star:before { color: #F62; }
        
        label.star:hover { transform: rotate(-15deg) scale(1.3); }
        
        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }
        
        .product__rating-filter {
            display: flex;
            align-items: center;
            width: 95%;
            height: 100px;
            margin: 10px 0 20px 34px;
            border: 1px solid rgb(210, 205, 205);
            background-color: rgba(239, 155, 122, 0.1);
            border-radius: 10px;

        }

        .push__comment-img {
            background-color: #fff;
            width: 100%;
            margin: 0px auto;
            /* padding: 20px 5px; */
            height: auto;

        }

        input[type="file"] {
            display: none;
        }
        .push__comment-img label {
            display: block;
            position: relative;
            background-color : var(--header-color);
            width: 15%;
            height: 30px;
            color: white;
            font-size: 16px;
            /* padding-left: 20px; */
            text-align: center;
            margin: 10px auto;
            border-radius:4px;            


        }

        #push__images {
            width: 90%;
            border: 2px solid black;
            border-radius:10px;
            position: relative;
            margin: 0 auto 8px;
            display: flex;
            justify-content: space-evenly;
            gap: 5px;
            flex-wrap: wrap;



        }

        figure {
            margin-top: 5px;
            width: 20%;
            
        }
        
        img {
            border-radius: 5px;
            width: 100%;
        }

        figcaption {
            text-align: center;
            font-size: 1.4rem;
            margin-top: 1px;
        }

        .product__rating--images img {
            width: 100%;
            height: auto;
            border-radius: 2px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 5px #343436;
            /* filter: brightness(1.1); */
            /* transition: transform 0.25s ease; */
            cursor: pointer;
        }

        .fullImageComment {
            position: relative;
            display: none;
        }

        .closebtn {
            position: absolute;
            top: -15px;
            right: calc(65% - 35px);
            color: red;
            font-size: 40px;
            cursor: pointer;
        }

        .push__comment {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .push__comment input {
            width: 90%;
            height: 50px;
            margin: 10px 5px 10px;
            font-size: 1.4rem;
        }

        .push__comment-icon {
            font-size: 2.4rem;
        }

        .push__comment-icon-append {
            color: #999;
        }

        .push__comment-icon-send {
            color: var(--header-color);
        }

        .btn {
            border-radius: 5px;
        }


    </style>
</head>
<body>
    <div class="page-profile">
        <!-- header -->
        <header class="header">
            <div class="grid wide">
                <!-- navbar -->
                <nav class="header__navbar hide-on-mobile-tablet" style="padding-top: 10px;">
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Welcome
                            customers!</li>
                        <!-- <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Trở thành Người bán Shopee</li>
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate header__show-qr">
                            Tải ứng dụng
                        </li> -->
                        <!-- qr code -->
                        <div class="header__qrcode">
                            <img src="<?= base_url()?>/assets/img/qr/qr-code.png" class="header__qr">
                            <div class="header__apps">
                                <a href="#" class="header__app-link">
                                    <img src="<?= base_url()?>/assets/img/qr/app-store.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="<?= base_url()?>/assets/img/qr/gg-play.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="<?= base_url()?>/assets/img/qr/app-gallery.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src="<?= base_url()?>/assets/img/qr/ltp-img.png" class="header__app-img">
                                </a>
                            </div>
                        </div>
                        <li class="header__nav-item">
                            Follow us on
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fa-brands fa-vk"></i>
                            </a>
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-telegram"></i>
                            </a>
                            <a href="#" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__show-note">
                            <a href="#" class="header__nav-item-link">
                                <!-- <i class="header__nav-icon far fa-bell rung"></i> -->
                                <i class="header__nav-icon far fa-bell"></i>
                                Notifications
                            </a>
                            <!-- thông báo -->
                            <div class="header__notifi">
                                <header class="header__notifi-header">
                                    <h3>New notification received</h3>
                                </header>
                                <ul class="header__notifi-list">
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="<?= base_url()?>/assets/img/sp/casio.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Casio fx 580 VN Plus
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Mua Casio 580 của LTP bao xịn, bao mượt, bao đẹp
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="<?= base_url()?>/assets/img/sp/iphone.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Điện Thoại iPhone 13 Pro 128GB - Hàng Nhập Khẩu
                                                </div>
                                                <div class="header__notifi-desc">
                                                    3 Camera: Ống kính góc rộng f/1.5 - Tele f/2.8 - Siêu rộng f/1.8
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="<?= base_url()?>/assets/img/sp/iphone2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Apple iPhone 12 Pro Max 128GB
                                                </div>
                                                <div class="header__notifi-desc">
                                                    iPhone 12 Pro Max. Màn hình Super Retina XDR 6.7 inch
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="<?= base_url()?>/assets/img/sp/laptop.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop HP 650 g1 siêu khỏe bền
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Laptop siêu bền, HP 650 g1 siêu khỏe bền ssd 120gb 15,6inh FULL HD
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src="<?= base_url()?>/assets/img/sp/laptop2.png" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Laptop thinkpad x240 chất mỏng nhẹ i5 4300u Ram 4gb Ssd 128gb
                                                </div>
                                                <div class="header__notifi-desc">
                                                    HP 650 g1 chip M đời 4, cpu i5 4200M ram 4gb -8gb
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notifi-footer">
                                    <a href="#" class="header__notifi-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-item-link">
                                <i class="header__nav-icon far fa-question-circle"></i>
                                Help
                            </a>
                        </li>

                         <?php if(!session()->has('loged_user')){ ?>
                            <li class="header__nav-item header__nav-item--bold header__nav-item--separate">
                                <a href="<?= base_url().'/register' ?>" class="header__nav-item-link">Sign Up</a>
                            </li>
                            <li class="header__nav-item header__nav-item--bold">
                                <a href="<?= base_url().'/login' ?>" class="header__nav-item-link">Sign In</a>
                            </li>
                        <?php }else{ ?>
                            <li class="header__nav-item header__nav-user">
                                <?php if(isset($user['avatar'])): ?>
                                    <img src="data:image/jpeg;base64,<?=$user['avatar']?>" class="header__nav-user-avt">
                                <?php else: ?>
                                    <img src=" <?= base_url()?>/assets/img/user.png" class="header__nav-user-avt">
                                <?php endif ?>
                                <a href="#" class="header__nav-item-link header__nav-item--bold"><?=  $user['fullname'];?></a>
                                <ul class="header__nav-user-menu">
                                    <li class="header__nav-user-item">
                                        <a href="<?= base_url('/profile') ?>">My profile</a>
                                    </li>
                                    <li class="header__nav-user-item">
                                        <a href="<?= base_url('viewshop?sellerID=').session()->get('loged_user')?>">My shop</a>
                                    </li>
                                    <li class="header__nav-user-item">
                                        <a href="<?= base_url().'/login/logout' ?>" >Logout</a>
                                    </li>
                                </ul>
                            </li> 
                        <?php }?>

                        <!-- <li class="header__nav-item header__nav-user">
                            <img src="<?= base_url()?>/assets/img/user.png" class="header__nav-user-avt">
                            <a href="#" class="header__nav-item-link header__nav-item--bold">Lục Thiên Phong</a>
                            <ul class="header__nav-user-menu">
                                <li class="header__nav-user-item">
                                    <a href="#">Tài khoản của tôi</a>
                                </li>
                                <li class="header__nav-user-item">
                                    <a href="#">Đơn mua</a>
                                </li>
                                <li class="header__nav-user-item">
                                    <a href="#">Đăng xuất</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <!-- search -->
                <div class="header__contain">
                    <label for="mobile-search" class="header__mobile-menu">
                        <i class="header__mobile-menu-icon fa-solid fa-bars"></i>
                        <!-- <i class="header__mobile-search-icon fas fa-search"></i> -->
                    </label>

                    <div class="header__logo">

                        <a href="<?= base_url()?>" class="header__logo-link">
                            <!-- <img src="<?= base_url()?>/assets/img/logo/logo-full-white.png" class="header__logo-img"> -->
                            <img src="<?= base_url()?>/assets/img/logo/logo.png" class="header__logo-img">
                        </a>
                    </div>
                    <input type="checkbox" id="mobile-search" class="header__search-check" hidden >
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Enter to search for products:" id = 'searchproduct' autocomplete="new-password">
                            <div class="header__search-history" >
                                <ul class="header__search-history-list hintsforproduct">
                                </ul>
                            </div>
                        </div>
                        <button class="btn-Huan header__search-btn" style="outline: none; border: none; padding: 8px 0; margin-right: 4px; border-radius: 2px;" onclick="loadSearch()">
                            <i class='header__search-btn-icon fas fa-search'></i>
                               
                            <script type="text/javascript">
                                function loadSearch() {
                                   location.href='<?=base_url('/home?keyword=')?>'+$('#searchproduct').val(); 
                                }
                            </script>
                        </button>
                    </div>
                    <!-- header__cart--no-cart -->
                    <!-- header__cart--has-cart -->
                    <div class="header__cart header__cart--has-cart">
                        <i class="header__cart-icon fas fa-shopping-cart"></i>
                        <div class="header__cart-count"></div>
                         
                        <div class="header__cart-list no-cart">
                            <img src=" <?= base_url()?>/assets/img/sp/no-cart.png" class="header__no-cart-img">
                            <p class="header__no-cart-text">No product</p>
                        </div>

                        <div class="header__cart-list has-cart" >
                            <h4 class="header__cart-heading">Selected product</h4>
                            <ul class="header__cart-list-item" id = "cart-list-item">
                                
                            </ul>
                            <div class="header__cart-footer">
                                <a href="<?= base_url('shoppingCart') ?>" class="btn btn--primary header__cart-see-cart">View cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <ul class="header__sort-bar">
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Liên quan</a>
                </li>
                <li class="header__sort-item header__sort-item--active">
                    <a href="#" class="header__sort-link">Mới nhất</a>
                </li>
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Bán chạy</a>
                </li>
                <li class="header__sort-item">
                    <a href="#" class="header__sort-link">Giá</a>
                </li>
            </ul> -->
        </header>

        <!-- CONTAINER BEGIN -->
        <div class="container">
            <div class="grid wide">
                <div class="row">
                    <div class="c-2 info-list">
                        <div class="user-avatar-name">
                            <div class="user-avtar-upload">
                                <img class="user-avatar" id="imgPreview" src="data:image/jpeg;base64,<?=$user['avatar']?>" alt="avatar"/>
                                <input type="file" name="" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                                <label for="imageUpload"><i class="fa-solid fa-arrow-up-from-bracket"></i></label>
                            </div>
                        </div>
                        <div class="user-list">
                            <ul class="user-list-info">
                                <li class="user-list-item user-profile" onclick="navProfile()">
                                    <i class="fa-solid fa-id-card"></i>
                                    Profile
                                </li>
                                <li class="user-list-item user-pay" onclick="navPay()">
                                    <i class="fa-solid fa-credit-card"></i>
                                    Pay
                                </li>
                                <li class="user-list-item user-pwd" onclick="navPwd()">
                                    <i class="fa-solid fa-key"></i>    
                                    Password
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="l-10 info-change">
                        <div class="block-profile">
                            <p class="block-name">
                                PROFILE
                            </p>
                            <div class="block-form">
                                <form action="">
                                    <ul class="profile-list">
                                        <li class="profile-name">
                                            <span>Name</span>
                                            <input type="text" value="<?= $user['fullname']?>" class="form-input" id = "fullnameuser">
                                            <span id = "error_name" class = "input-alert-error"></span>
                                        </li>
                                        <li class="profile-username">
                                            <span>Username</span>
                                            <p class="form-input" readonly><?= $user['username']?></p> 
                                        </li>
                                        <li class="profile-phone">
                                            <span>Phone number</span>
                                            <input class="profile-phone profile-phone-input form-input" value="<?= $user['phonenumber'];?>">
                                        </li>
                                        <li class="profile-address">
                                            <span>Address</span>
                                            <select id="country-state" name="country-state" class="shortenedSelect">
                                                <option value=""><?= $user['city'] == '' ? "Select State" : $user['city'] ?></option>
                                                <option value="ALT">Altai Krai</option>
                                                <option value="AL">Altai Republic</option>
                                                <option value="AMU">Amur Oblast</option>
                                                <option value="ARK">Arkhangelsk</option>
                                                <option value="AST">Astrakhan Oblast</option>
                                                <option value="BEL">Belgorod Oblast</option>
                                                <option value="BRY">Bryansk Oblast</option>
                                                <option value="CE">Chechen Republic</option>
                                                <option value="CHE">Chelyabinsk Oblast</option>
                                                <!-- <option value="CHU">Chukotka Autonomous Okrug</option> -->
                                                <option value="CU">Chuvash Republic</option>
                                                <option value="IRK">Irkutsk</option>
                                                <option value="IVA">Ivanovo Oblast</option>
                                                <!-- <option value="YEV">Jewish Autonomous Oblast</option> -->
                                                <!-- <option value="KB">Kabardino-Balkar Republic</option> -->
                                                <option value="KGD">Kaliningrad</option>
                                                <option value="KLU">Kaluga Oblast</option>
                                                <option value="KAM">Kamchatka Krai</option>
                                                <!-- <option value="KC">Karachay-Cherkess Republic</option> -->
                                                <option value="KEM">Kemerovo Oblast</option>
                                                <option value="KHA">Khabarovsk Krai</option>
                                                <!-- <option value="KHM">Khanty-Mansi Autonomous Okrug</option> -->
                                                <option value="KIR">Kirov Oblast</option>
                                                <option value="KO">Komi Republic</option>
                                                <option value="KOS">Kostroma Oblast</option>
                                                <option value="KDA">Krasnodar Krai</option>
                                                <option value="KYA">Krasnoyarsk Krai</option>
                                                <option value="KGN">Kurgan Oblast</option>
                                                <option value="KRS">Kursk Oblast</option>
                                                <option value="LEN">Leningrad Oblast</option>
                                                <option value="LIP">Lipetsk Oblast</option>
                                                <option value="MAG">Magadan Oblast</option>
                                                <option value="ME">Mari El Republic</option>
                                                <option value="MOW">Moscow</option>
                                                <option value="MOS">Moscow Oblast</option>
                                                <option value="MUR">Murmansk Oblast</option>
                                                <!-- <option value="NEN">Nenets Autonomous Okrug</option> -->
                                                <!-- <option value="NIZ">Nizhny Novgorod Oblast</option> -->
                                                <option value="NGR">Novgorod Oblast</option>
                                                <option value="NVS">Novosibirsk</option>
                                                <option value="OMS">Omsk Oblast</option>
                                                <option value="ORE">Orenburg Oblast</option>
                                                <option value="ORL">Oryol Oblast</option>
                                                <option value="PNZ">Penza Oblast</option>
                                                <option value="PER">Perm Krai</option>
                                                <option value="PRI">Primorsky Krai</option>
                                                <option value="PSK">Pskov Oblast</option>
                                                <option value="AD">Republic of Adygea</option>
                                                <!-- <option value="BA">Republic of Bashkortostan</option> -->
                                                <option value="BU">Republic of Buryatia</option>
                                                <option value="DA">Republic of Dagestan</option>
                                                <option value="IN">Republic of Ingushetia</option>
                                                <option value="KL">Republic of Kalmykia</option>
                                                <option value="KR">Republic of Karelia</option>
                                                <option value="KK">Republic of Khakassia</option>
                                                <option value="MO">Republic of Mordovia</option>
                                                <!-- <option value="SE">Republic of North Ossetia-Alania</option> -->
                                                <option value="TA">Republic of Tatarstan</option>
                                                <option value="ROS">Rostov Oblast</option>
                                                <option value="RYA">Ryazan Oblast</option>
                                                <option value="SPE">Saint Petersburg</option>
                                                <option value="SA">Sakha Republic</option>
                                                <option value="SAK">Sakhalin</option>
                                                <option value="SAM">Samara Oblast</option>
                                                <option value="SAR">Saratov Oblast</option>
                                                <option value="UA-40">Sevastopol</option>
                                                <option value="SMO">Smolensk Oblast</option>
                                                <option value="STA">Stavropol Krai</option>
                                                <option value="SVE">Sverdlovsk</option>
                                                <option value="TAM">Tambov Oblast</option>
                                                <option value="TOM">Tomsk Oblast</option>
                                                <option value="TUL">Tula Oblast</option>
                                                <option value="TY">Tuva Republic</option>
                                                <option value="TVE">Tver Oblast</option>
                                                <option value="TYU">Tyumen Oblast</option>
                                                <option value="UD">Udmurt Republic</option>
                                                <option value="ULY">Ulyanovsk Oblast</option>
                                                <option value="VLA">Vladimir Oblast</option>
                                                <option value="VLG">Vologda Oblast</option>
                                                <option value="VOR">Voronezh Oblast</option>
                                                <!-- <option value="YAN">Yamalo-Nenets Autonomous Okrug</option> -->
                                                <option value="YAR">Yaroslavl Oblast</option>
                                                <option value="ZAB">Zabaykalsky Krai</option>
                                            </select>
                                            <input type="text" class="form-input" id = "specific-address" laceholder="Specific address" value="<?= $user['specificaddress'] ?>">
                                            <span id = "error_address" class = "input-alert-error"></span>
                                        </li>
                                        <li class="profile-email">
                                            <span>Email</span>
                                            <p><?= $user['email'] ?></p>
                                            <a href="" class="profile-change">Change</a>
                                        </li>
                                        <li class="profile-gender">
                                            <span>Gender</span>
                                            <input type="radio" value="male" name="gender" id="male" <?php if($user['gender'] == 'male') echo "checked"?>>
                                            <label for="male" >Male</label>
                                            <input type="radio" value="female" name="gender" id="female" <?php if($user['gender'] == 'female') echo "checked"?>>
                                            <label for="female">Female</label>
                                        </li>
                                        <li class="profile-date">
                                            <span>Date of birth</span>
                                            <select name="" id="date-day">
                                                <option value="<?=  date_format(date_create($user['DateOfBirth']), 'd');?>"><?=  date_format(date_create($user['DateOfBirth']), 'd');?></option>
                                                <script>
                                                    for(i=1;i<=31;i++){
                                                        document.writeln("<option value='"+i+"'>"+((i < 10) ? ('0'+i) : i) +"</option>");
                                                    }
                                                </script>
                                            </select>
                                            <select name="" id="date-month">
                                                <option value="<?=date_format(date_create($user['DateOfBirth']), 'm');?>"><?=  date_format(date_create($user['DateOfBirth']), 'm');?></option>
                                                <script>
                                                    for(i=1;i<=12;i++){
                                                        document.writeln("<option value='"+i+"'>"+((i < 10) ? ('0'+i) : i)+"</option>");
                                                    }
                                                </script>
                                            </select>
                                            <select name="" id="date-year">
                                                <option value="<?=date_format(date_create($user['DateOfBirth']), 'Y');?>"><?=  date_format(date_create($user['DateOfBirth']), 'Y');?></option>
                                                <script>
                                                    for(i=2022;i>=1900;i--){
                                                        document.writeln("<option value='"+i+"'>"+i+"</option>");
                                                    }
                                                </script>
                                            </select>
                                             <span id = "error_day" class = "input-alert-error"></span>
                                        </li>
                                    </ul>
                                    <div class="profile-change-submit">
                                        <button type="button" value="Save" class="profile-save-btn" onclick='updateData()'>Save</button>
                                    </div>
                                </form>
                            </div>
                            <div class="block-avatar c-3">
                                
                            </div>
                        </div>

                        <div class="block-address">
                            <p class="block-name">
                                ADDRESS
                            </p>
                            <!-- <i class="address-icon-location fa-solid fa-location-dot"></i> -->
                            <div id = "showaddress">
                                
                            </div>
                            <br>
                            <input type="button" value="New address" class="address-btn-add" onclick="showNewAddress()">
                            <br>
                            <br>
                        </div>

                        <div class="block-pay">
                            <p class="block-name">
                                PAY
                            </p>
                            <div class="containercreditcard">
                                <div class="card-container row">
                                    <div class="cc-font col l-5">
                                        <span class="chip"></span>
                                        <span class="nubank-logo"></span>
                                        <div class="logo">
                                            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                                <g>
                                                    <g>
                                                        <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                                         c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                                         c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                                         M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                                         c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                                         c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                                         l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                                         C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                                         C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                                         c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                                         h-3.888L19.153,16.8z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="number">123 123 123 123</div>
                                        <div class="info row">
                                            <div class="info-name col l-6">
                                                <span class="card-holder">CARD HOLDER</span>
                                                <span class="card-holder-name">Cassio Cardoso</span>
                                            </div>
                                            <div class="info-date col l-6">
                                                <span class="expires">EXPIRES</span>
                                                <span class="cc-date">02/18</span>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="cc-back col l-5">
                                        <div class="black"></div>
                                        <p>CVV</p>
                                        <div class="cvv-input">
                                            <input type="text" name="" id="">
                                        </div>
                                        <div class="logo">
                                            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                                                <g>
                                                    <g>
                                                        <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                                         c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                                         c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                                         M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                                         c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                                         c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                                         l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                                         C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                                         C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                                         c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                                         h-3.888L19.153,16.8z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="button" value="New card" class="pay-btn-new" onclick="showNewPay()">
                            
                        </div>

                        <div class="block-change-password">
                            <p class="block-name">
                                CHANGE PASSWORD
                            </p>
                            <div class="pwd-form">
                                <ul class="pwd-list">
                                    <li class="pwd-list-item">
                                        <span>Current password</span>
                                        <input type="password" class="pwd-input" id = "currentpass" autocomplete="new-password">
                                        <span class="input-alert-error error_currentpass" style="font-size: 1.2rem;font-weight: 500;color: var(--primary-color);margin-top: -12px;margin-bottom: 15px;" ></span>
                                    </li>
                                    <li class="pwd-list-item">
                                        <span>New password</span>
                                        <input type="password" class="pwd-input" id = "newpass" autocomplete="off">
                                        <span class="input-alert-error error_newpass" style="font-size: 1.2rem;font-weight: 500;color: var(--primary-color);margin-top: -12px;margin-bottom: 15px;" ></span>
                                    </li>
                                    <li class="pwd-list-item">
                                        <span>Confirm password</span>
                                        <input type="password" class="pwd-input" id = "confirmpass">
                                        <span class="input-alert-error error_confirmpass" style="font-size: 1.2rem;font-weight: 500;color: var(--primary-color);margin-top: -12px;margin-bottom: 15px;" ></span>
                                    </li>
                                </ul>
                                <br>

                                <input type="button" value="Save" class="pwd-save-btn" id = "changepassword" style="margin-bottom: 10px; margin-top: -16px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER END -->

         <!-- footer -->
         <footer class="footer">
            <!-- main footer -->
            <div class="main-footer">
                <div class="grid wide">
                    <div class="row sm-gutter main-footer-info">
                        <div class="col l-2 m-4 c-6">
                            <h3 class="footer__heading">CUSTOMER SERVICE</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link">Help Center</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">How to buy</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Payment</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Shipping</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Return & Refund</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col l-2 m-4 c-6">
                            <h3 class="footer__heading">ABOUT SHOP</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link">About Us</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Shop Policies</a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link">Privacy Policy</a>
                                </li>
                                <a href="#" class="footer-item-link">Media Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2 m-4 c-12 pay-and-ship">
                            <div>
                                <h3 class="footer__heading">PAY MENT</h3>
                                <div class="footer-sale-ship">
                                    <img src="<?= base_url()?>/assets/img/pay/1.PNG" class="footer-item-sale-ship">
                                    <img src="<?= base_url()?>/assets/img/pay/2.PNG" class="footer-item-sale-ship">

                                </div>
                            </div>
                            <!-- <div>
                                    <h3 class="footer__heading">ĐƠN VỊ VẬN CHUYỂN</h3>
                                    <div class="footer-sale-ship">
                                        <img src="<?= base_url()?>/assets/img/ship/1.PNG" class="footer-item-sale-ship">
                                        <img src="<?= base_url()?>/assets/img/ship/2.PNG" class="footer-item-sale-ship">
                                        <img src="<?= base_url()?>/assets/img/ship/3.PNG" class="footer-item-sale-ship">
                                        <img src="<?= base_url()?>/assets/img/ship/4.PNG" class="footer-item-sale-ship">
                                        <img src="<?= base_url()?>/assets/img/ship/5.PNG" class="footer-item-sale-ship">
                                        <img src="<?= base_url()?>/assets/img/ship/6.PNG" class="footer-item-sale-ship">
                                        <img src="<?= base_url()?>/assets/img/ship/7.PNG" class="footer-item-sale-ship">
                                        <img src="<?= base_url()?>/assets/img/ship/8.PNG" class="footer-item-sale-ship">
                                        <img src="<?= base_url()?>/assets/img/ship/9.PNG" class="footer-item-sale-ship">
                                    </div>
                                </div> -->
                        </div>
                        <div class="col l-2 m-4 c-6">
                            <h3 class="footer__heading">FOLLOW US</h3>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-fb">
                                        <i class="footer-item-icon fa-brands fa-vk"></i>
                                        VKontakte
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-is">
                                        <i class="footer-item-icon fab fa-instagram-square"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="footer-item-link footer-item-link-li">
                                        <i class="footer-item-icon fab fa-telegram"></i>
                                        Telegram
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col l-2 m-8 c-6">
                            <h3 class="footer__heading">DOWNLOAD APP</h3>
                            <div class="footer-download">
                                <a href="#" class="footer-download-link">
                                    <img src="<?= base_url()?>/assets/img/qr/qr-code.png" class="footer-download-qr">
                                </a>
                                <div class="footer-download-app">
                                    <a href="#" class="footer-download-link">
                                        <img src="<?= base_url()?>/assets/img/qr/gg-play.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="<?= base_url()?>/assets/img/qr/app-store.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="<?= base_url()?>/assets/img/qr/app-gallery.png" class="footer-download-app-img">
                                    </a>
                                    <a href="#" class="footer-download-link">
                                        <img src="<?= base_url()?>/assets/img/qr/ltp-img.png" class="footer-download-app-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- copyright -->
                    <div class="row">
                        <div class="grid">
                            <p class="copyright-title">
                                Student of ITMO University
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- other footer -->
            <div class="other-footer">
                <div class="grid wide">
                    <div class="row other-footer-heading">
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                PRIVACY POLICY
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                TERM OF SERVICE
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                SHIPPING POLICY
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="#" class="other-footer-link">
                                VIOLATION
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="grid other-footer-info">
                            <p class="other-footer-title">About Shop</p>
                            <p class="other-footer-more">
                                Address: ITMO University.Support call center: 8(921)xxx xx xx - Email: abc@funnydonut.com
                            </p>
                            <!-- <p class="other-footer-more">
                                Chịu Trách Nhiệm Quản Lý Nội Dung: Nguyễn Đức Trí -
                                Điện thoại liên hệ: 024 73081221 (ext 4678)
                            </p>
                            <p class="other-footer-more">
                                Mã số doanh nghiệp: 0106773786 do Sở Kế hoạch & Đầu tư
                                TP Hà Nội cấp lần đầu ngày 10/02/2015
                            </p>
                            <p class="other-footer-more">
                                Ngày sản xuất 2015 -
                                Bản quyền gốc thuộc về Công ty TNHH Shopee
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- MODAL ADDRESS -->
    <div class="modal modal-address">
        <div class="modal-addr-container">
            <form action="" class="form-addr-new">
                <p class="modal-text">New address</p>
                <input type="text" placeholder="Name" class="addr-new-input nameinaddress">
                <br>
                <input type="tel" placeholder="Phone number" class="addr-new-input phonenumberinaddress">
                <br>
                <input type="text" placeholder="Address" class="addr-new-input addressinaddress">
                <br>
                <br>
                <p id = "error_address" class="input-alert-error"></p>
                <input type="button" value="Save" class="addr-new-btn" id = "clicktosave">
                <input type="button" value="Back" class="addr-new-btn add-new-btn-back"  onclick="hideNewAddress()">
            </form>
        </div>
    </div>

    <!-- MODAL PAY -->
    <div class="modal modal-pay" id = "modal-pay-card" style="z-index: 2;">
        <div class="modal-addr-container">
            <div class="checkout">
              <div class="credit-card-box">
                <div class="flip">
                  <div class="front">
                    <div class="chip"></div>
                    <div class="logo">
                      <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                        <g>
                          <g>
                            <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                     c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                     c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                     M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                     c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                     c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                     l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                     C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                     C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                     c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                     h-3.888L19.153,16.8z"/>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="number"></div>
                    <div class="card-holder">
                      <label>Card holder</label>
                      <div></div>
                    </div>
                    <div class="card-expiration-date">
                      <label>Expires</label>
                      <div></div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="strip"></div>
                    <div class="logo">
                      <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
                        <g>
                          <g>
                            <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                                     c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                                     c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                                     M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                                     c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                                     c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                                     l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                                     C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                                     C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                                     c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                                     h-3.888L19.153,16.8z"/>
                          </g>
                        </g>
                      </svg>
             
                    </div>
                    <div class="ccv">
                      <label>CCV</label>
                      <div></div>
                    </div>
                  </div>
                </div>
              </div>
              <form class="form" autocomplete="off"  action="#" novalidate>
                <fieldset>
                  <label for="card-number">Card Number</label>
                  <input type="num" id="card-number" class="input-cart-number" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  />
                  <input type="num" id="card-number-1" class="input-cart-number" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"/>
                  <input type="num" id="card-number-2" class="input-cart-number" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"/>
                  <input type="num" id="card-number-3" class="input-cart-number" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"/>
                </fieldset>
                <fieldset>
                  <label for="card-holder">Card holder</label>
                  <input type="text" id="card-holder" />
                </fieldset>
                <fieldset class="card-expire">
                  <label for="expire-month">Expire date</label>
                  <div class="select">
                    <select id="expire-month">
                      <option></option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                  </div>
                  <div class="select">
                    <select id="expire-year">
                      <option></option>
                      <option>2016</option>
                      <option>2017</option>
                      <option>2018</option>
                      <option>2019</option>
                      <option>2020</option>
                      <option>2021</option>
                      <option>2022</option>
                      <option>2023</option>
                      <option>2024</option>
                      <option>2025</option>
                    </select>
                  </div>
                </fieldset>
                <fieldset class="fieldset-ccv">
                  <label for="card-ccv">CCV</label>
                  <input type="text" id="card-ccv" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"/>
                </fieldset>
                <button class="btn"><i class="fa fa-lock"></i> submit</button>
              </form>
            </div>
        </div>
    </div>
    
    <script>
        var blockProfile = document.getElementsByClassName("block-profile");
        var blockAddress = document.getElementsByClassName("block-address");
        var blockPay = document.getElementsByClassName("block-pay");
        var blockPwd = document.getElementsByClassName("block-change-password");

        const textChange = document.querySelector('.user-profile');
        
        function navProfile(){
            blockProfile[0].style.display="block";
            blockAddress[0].style.display="none";
            blockPay[0].style.display="none";
            blockPwd[0].style.display="none";
        }

        function navAddress(){
            blockProfile[0].style.display="none";
            blockAddress[0].style.display="block";
            blockPay[0].style.display="none";
            blockPwd[0].style.display="none";
        }

        function navPay(){
            blockProfile[0].style.display="none";
            blockAddress[0].style.display="none";
            blockPay[0].style.display="block";
            blockPwd[0].style.display="none";
        }

        function navPwd(){
            blockProfile[0].style.display="none";
            blockAddress[0].style.display="none";
            blockPay[0].style.display="none";
            blockPwd[0].style.display="block";
        }

        const modalAddress = document.querySelector('.modal-address');
        function showNewAddress(){
            modalAddress.classList.add('open');
        }
        function hideNewAddress(){
            modalAddress.classList.remove('open');
        }

        const modalPay = document.querySelector('.modal-pay');
        

    </script>

    <!-- JS preview image -->
    
    <script>
        $(document).ready(() => {
            $("#imageUpload").change(function () {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#imgPreview")
                        .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
    <!-- loa du lieu thanh tim kiem -->
    <script>
    jQuery(document).ready(function($) {
         $(document).on('keyup', '#searchproduct', function() {
                let product = $('#searchproduct').val();
                showHints(product);

            });
    });
    function showHints(product) {
        if(!product) {
            $('.hintsforproduct').html("");
            return false;
        }
        $.ajax({
                url: '<?=base_url('/home/showHints')?>',
                type: 'get',
                data: {'productName' : product},
                success: function (response) {
                    if(response.hints !== null) {
                       $('.hintsforproduct').html(""); 
                       $.each(response.hints, function(index,val) {
                             $('.hintsforproduct').append("\
                            <li class='header__search-history-item'>\
                                <a href='#'>"+val.nameproduct+"</a>\
                            </li>");
                       });
                    }
                    else {
                        $('.hintsforproduct').html("");
                        $('.hintsforproduct').append("\
                            <li class='header__search-history-item'>\
                               No results were found \
                            </li>");
                    }
                }
            });
    }
 </script>
 <!-- cap nhat profile -->
 <script>
    function updateData() {
        let day = $('#date-day').val();
        let month = $('#date-month').val();
        let year = $('#date-year').val();
        let getDay = year+'-'+month+'-'+day;
        if(!dateIsValid(new Date(getDay))) {
            $('#error_day').text("This day invalid");
            return false;
        } 
        if($('#fullnameuser').val().length <= 8) {
            $('#error_name').text("Name is requied");
            return false;
        }
        let gender = document.querySelector('input[name="gender"]:checked').value
        if(!gender) {
            $('#error_name').text("Name is requied");
        }
        if($('#specific-address').val().length == 0 || $('#country-state option:selected').val() == "") {
            $('#error_address').text("You need to select the city and fill in your specific address");
            return false;
        }
        let data = {
            'fullname' :$('#fullnameuser').val(),
            'gender' : gender,
            'DateOfBirth': getDay,
            'city' : $('#country-state option:selected').text(),
            'specificaddress': $('#specific-address').val(),
            'phonenumber' : $('.profile-phone-input').val()
        }
        let img = new FormData();
        var file = $('#imageUpload')[0].files;
        if(file.length) {
            img.append('file', file[0]);
            $.ajax({
                    url: '<?=base_url('/profile/updateData')?>',
                    type: 'post',
                    data: img,
                    cache: false,
                    contentType:false,
                    processData:false,
                    success: function (response) {
                        
                    }
                });
        }
        $.ajax({
            url: '<?=base_url('/profile/updateData')?>',
            type: 'post',
            data: data,
            success: function (response) {
                document.location.reload();
            }
        });
    }
    // kiem tra avatar
    $(document).ready(function() {
        
        $('#imageUpload').change(function (e) {
            e.preventDefault();
            var file = this.files[0];
            var fileType = file.type;
            var file_size = file.size;
            var match = ['image/jpeg', 'image/jpg', 'image/png'];
            console.log(fileType);
            if(! ( (fileType == match[0]) || (fileType == match[1]) || (fileType == match[2] ) )) {
                alert("Only JPED, JPG & PNG file types");
                return false;  
            }
            if(file_size > 2200000) {
                alert("Sorry! File size Exceeds");
                $('#imageUpload').val('');
                return false;
            }
        });
    });
    // cap nhat mat 
    $('#changepassword').on('click', function () {
        var cpass = $('#currentpass').val();
        var npass = $('#newpass').val();
        var conpass = $('#confirmpass').val();
        if(cpass.length < 8) {
            $('.error_currentpass').text('Password requires at least 8 characters');
            return false;
        }
        $('.error_currentpass').text('');
        if(npass.length < 8) { 
            $('.error_newpass').text('Password requires at least 8 characters');
            return false;
        }
         $('.error_newpass').text('');
        if(conpass.length < 8) {
            $('.error_confirmpass').text('Password requires at least 8 characters');
            return false;
        }
        $('.error_confirmpass').text('');
        if(npass != conpass) {
            $('.error_confirmpass').text('Confirm password is incorrect');
            return false;
        }
        $('.error_confirmpass').text('');
        $.ajax({
                url: '<?= base_url('/profile/updatePassword')?>',
                type: 'post',
                data: {
                    'currentpass': cpass,
                    'newpass' : npass
                },
                success: function (response) {
                    alert(response.smg);
                }
            });
    });
    // luu dia chi mới
    $('#clicktosave').on('click', function () {
        let name = $('.nameinaddress').val(), phonenumber = $('.phonenumberinaddress').val(), address = $('.addressinaddress').val();
        console.log(name+phonenumber+address)
        if(!name.length  || !phonenumber.length || !address.length) {
           $('#error_address').text('All infomation is requied!'); 
           return false;
        }
        $('#error_address').text('');
        if(name.length < 8) {
            $('#error_address').text('Please fill in the full name!'); 
            return false;
        }
        $('#error_address').text('');
        if(!validatePhoneNumber(phonenumber)) {
            $('#error_address').text('Invalid phone number!'); 
            return false;
        }
        data = {
            'name' : name,
            'phonenumber' : phonenumber,
            'address' : address
        };
        $.ajax({
                url: ' <?=base_url('/profile/addAddress')?>',
                type: 'post',
                data: data,
                success: function (response) {
                    loadAddress();
                    modalAddress.classList.remove('open');
                }
            });
        
    });
    // hien thi dia chi
    $(document).ready(function() {
       loadAddress();
    });
    function loadAddress() {

         $.ajax({
            url: '<?= base_url('profile/fetchAdress') ?>',
            type: 'get',
            //data: {},
            success: function (data) {
                $('#showaddress').html('');
                $.each(data.result ,function(index, el) {
                    $('#showaddress').append("<br>\
                        <div class='address-old'>\
                            <p class='address-name'>Full name:     "+el.name+"</p>\
                            <p class='address-phone'>Phonenumber:  "+el.phonenumber+"</p>\
                            <p claa='address-address'>Address:     "+el.address+".</p>\
                        </div>\
                        <div class='address-delete' onclick='icondelete("+el.aid+")'>\
                            <i class='address-icon-garbage fa-solid fa-trash-can'></i>\
                        </div>\
                        <br>");
                });
            }
        });    
    }
    // xoa dia chi
    function icondelete(aid) {
        $.ajax({
            url: '<?= base_url('/profile/deleteAddress') ?>',
            type: 'post',
            data: {
                'aid' :aid
            },
            success: function (data) {
                loadAddress();
            }
        });
    }
 </script>
 <!-- validate function -->
 <script type="text/javascript">

    function dateIsValid(date) {
         return date instanceof Date && !isNaN(date.getTime());
    }
    function validatePhoneNumber(input_str) {
      var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
      return re.test(input_str);
    }
    // them the ngang hang
    var data = new FormData();
    $('.input-cart-number').on('keyup change', function(){
        $t = $(this);
            if ($t.val().length > 3) {
                $t.next().focus();
              }
              
              var card_number = '';
              $('.input-cart-number').each(function(){
                card_number += $(this).val() + ' ';
                if ($(this).val().length == 4) {
                  $(this).next().focus();
                }
              })
        $('.credit-card-box .number').html(card_number);
        data.append('card_number', card_number);
    });
     
    $('#card-holder').on('keyup change', function(){
      $t = $(this);
      $('.credit-card-box .card-holder div').html($t.val());
      data.append('card_holder', $t.val());
    });
     
     
    $('#expire-month, #expire-year').change(function(){
      m = $('#expire-month option').index($('#expire-month option:selected'));
      m = (m < 10) ? '0' + m : m;
      y = $('#expire-year').val().substr(2,2);
      $('.card-expiration-date div').html(m + '/' + y);

    })
     
    $('#card-ccv').on('focus', function(){
      $('.credit-card-box').addClass('hover');
    }).on('blur', function(){
      $('.credit-card-box').removeClass('hover');
    }).on('keyup change', function(){
      $('.ccv div').html($(this).val());
    });     
    setTimeout(function(){
      $('#card-ccv').focus().delay(1000).queue(function(){
        $(this).blur().dequeue();
      });
    }, 500);
    var modal = document.getElementById('modal-pay-card');
    function showNewPay(){
            modal.classList.add('open');
        }
    function hideNewPay(){
        modal.classList.remove('open');
    }
     window.onclick = function(event) {
        if(event.target == modal) {
            modal.classList.remove('open');
        }
    };
    loadCartShopping();
    function loadCartShopping() {
        $('#cart-list-item').html("");
        $.ajax({
                url: '<?=base_url('showProduct/loadCartShopping')?>',
                type: 'post',
                success: function (data) {
                    var tmp = 0;
                    if(data != ""){
                       $('.has-cart').css({"display": ""});
                        data.forEach((x)=>{
                            $('#cart-list-item').append(x);
                            tmp++;   
                        });
                    }
                    else {
                         $('.has-cart').css({"display": "none"});
                    }
                    $('.header__cart-count').text(tmp);
                }
            });
    }
    function deteleCartShopping(id) {
        $.ajax({
                url: '<?=base_url('showProduct/deteleCartShopping')?>',
                type: 'post',
                data: {
                   'id' : id
                },
                success: function (data) {
                    loadCartShopping();
                }
            });
    }
 </script>
</body>
</html>