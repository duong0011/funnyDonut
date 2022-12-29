<?php $p_session = \Config\Services::session()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initiacol l-scale=1.0">
    <title>Funny Donut</title>
    <link rel="icon" href=" <?= base_url()?>/assets/img/logo/logo-web.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/Huan-base.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/Nga-base.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/header-footer.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/grid.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/modal.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/checkout.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="https://malsup.github.io/jquery.form.js"></script> 
    <!-- Style header -->
    <style>
        <style>


    /* CSS  button 59*/
    .button-59 {
      align-items: center;
      background-color: #fff;
      border: 3px solid #000;
      box-sizing: border-box;
      color: #000;
      cursor: pointer;
      display: inline-flex;
      fill: #000;
      font-family: Inter,sans-serif;
      font-size: 16px;
      font-weight: 600;
      height: 48px;
      justify-content: center;
      letter-spacing: -.8px;
      line-height: 24px;
      min-width: 140px;
      outline: 0;
      padding: 0 17px;
      text-align: center;
      text-decoration: none;
      transition: all .3s;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }

    .button-59:focus {
      color: #171e29;
    }

    .button-59:hover {
      border-color: #06f;
      color: #06f;
      fill: #06f;
    }

    .button-59:active {
      border-color: #06f;
      color: #06f;
      fill: #06f;
    }

    @media (min-width: 768px) {
      .button-59 {
        min-width: 170px;
      }
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
            display: block;
            width: 120px;
            height: 35px;
            border: 1px solid #888;
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
    </style>
    <!-- Style main -->
    <style>
        .header__contain {
            justify-content: space-around;
        }

        .note-delivery {
            border-top: 1px dashed rgb(139 52 52 / 28%);
            border-bottom: 1px dashed rgb(139 52 52 / 28%);
        }

        .note {
        padding: 38px 12px;
        border-right: 1px dashed rgb(139 52 52 / 28%);
        }
         .header__cart--has-cart .header__cart-icon:hover~.header__cart-list.has-cart,
        .header__cart--has-cart .header__cart-count:hover~.header__cart-list.has-cart,
        .header__cart--has-cart .header__cart-list.has-cart:hover {
            display: block;
        }

        .header__cart--has-cart .header__cart-icon:hover~.header__cart-list.no-cart,
        .header__cart--has-cart .header__cart-list.no-cart:hover{
            display: flex;
        }
    </style>

    <!-- Style card -->
    <style>
        .containercreditcard {
          color: white;
          display: block;
          padding-top: 20px;
          text-align: center;
        }

        .card-container {
            height: 100%;
            width: 100%;
            display: flex;
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
          margin-left: 30px;
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

        .block-btn {
            display: flex;
            align-items: center;
        }

        .card-btn-change {
            background-color: var(--header-color);
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .card-btn-change:hover {
            opacity: 0.9;
        }

        .card-select select {
            padding: 5px;
            border-radius: 5px;
        }

        .card-select select:focus {
            outline: none;
        }
    </style>

    <!-- Style modal submit order -->
    <style>
        .modal-submit-order {
            background-color: var(--header-color);
            font-size: 20px;
            padding: 10px 20px 26px;
            border-radius: 5px;
            color: white;
        }

        .modal-submit-order button {
            background-color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 8px 2px;
            margin-right: 15px;
            cursor: pointer;
        }

        .modal-submit-order button:hover {
            opacity: 0.9;
        }

        button#myBtn:hover {
            background-color: #f4e9e9;
        }
        
        button#myBtn {
            background-color: white;
            color: var(--header-color);
            border: 1px solid var(--header-color);
            border-radius: 5px;
            padding: 5px 0;
            width: 140px;
            box-shadow: 0 0 2px var(--header-color);
            margin-left: 29px;
            cursor: pointer;
        }
        
        .header__notifi-list { 
    padding-left: 0; 
    max-height: 300px; 
    overflow-y: scroll; 
}
    </style>
</head>
<body>
    <div class="">
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
                            <a href="https://vk.com/funnydonutvn" class="header__nav-icon-link">
                                <i class="header__nav-icon fa-brands fa-vk"></i>
                            </a>
                            <a href="https://vk.com/funnydonutvn" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-telegram"></i>
                            </a>
                            <a href="https://vk.com/funnydonutvn" class="header__nav-icon-link">
                                <i class="header__nav-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__show-note">
                            <a href="#" class="header__nav-item-link" id = "new-notification">
                               
                            </a>
                            <!-- thông báo -->
                            <div class="header__notifi">
                                <header class="header__notifi-header">
                                    <h3 id = 'title-notifi'>New notifications received</h3>
                                </header>
                            
                                <ul class="header__notifi-list" id = "show-notification">
                                    
                                    
                                </ul>
<<<<<<< HEAD
                               <!--  <footer class="header__notifi-footer">
=======
                                <!-- <footer class="header__notifi-footer">
>>>>>>> 3c76681c40e6bf8e59757f92864c131856c21fd3
                                    <a href="#" class="header__notifi-footer-btn">See all</a>
                                </footer> -->
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
                                        <a href="<?= base_url('/orderHistory') ?>">History</a>
                                    </li>
                                    <li class="header__nav-user-item">
                                        <a href="<?= base_url().'/login/logout' ?>" >Logout</a>
                                    </li>
                                </ul>
                            </li> 
                        <?php }?>
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
                <div class="address">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Delivery address</span>
                    <div class="address-user">
                        <span class="address-name" id = "name-default"><?=$user['fullname'].'('.$user['phonenumber']?>) </span>
                        <span id = "address-default"><?=$user['specificaddress'].', '.$user['city']  ?></span>
                        <span class="address-default">default</span>
                        <span class="address-change" onclick="showNewAddress()">Change</span>
                    </div>
                </div>

                <div class="product-list">
                    <div class="row product-detail">
                        <span class="col l-4">Product</span>
                        <span class="col l-2">Shop</span>
                        <span class="col l-1">Size</span>
                        <span class="col l-2">Unit price</span>
                        <span class="col l-1">Amount</span>
                        <span class="col l-2">Total</span>
                    </div>
                    <div class="row shop " id= "row-shop-list">
            
                    </div>
                    <div class="row note-delivery">
                        <div class="col l-12 note" style="border-right:none;">
                            <span>Note to seller:</span>
                            <input type="text" style="width: 1040px;" id = "note-to-seller">
                        </div>
                        <div class="col l-4" style="display: none;">
                            <span>Shipping: </span>
                            <span>ABC</span>
                            <span class="btn-delivery-change">Change</span>
                        </div>
                        <div class="col l-2" style="display: none;">5$</div>
                    </div>
                    <div class="row total-money">
                        <div class="col l-10 total-money-txt">
                            <span>Total payment: </span>
                        </div>
                        <div class="col l-2 total-payment"><span></span></div>
                    </div>
                </div>

                <div class="pay">
                    <div class="row">
                        <div class="col l-12 pay-method">
                            <span>Payment methods</span>
                        </div>
                        <div class="col l-12 choose-method method-cash">
                            <label class="">
                                <input type="radio" name="radio-method" id="input-cash"  value="Cash" checked>
                                Cash
                            </label>
                        </div>
                        
                        <div class="col l-12 choose-method method-card">
                            
                        </div>
                        <button class="button-59" role="button" id="myBtn">Pay With New Card</button>
                        <div class="col l-12 pay-total">
                            <p>Total amount of product: <span class="total-payment2"></span></p>
                            <p>Shipping fee: <span id = "ship-fee"> </span></p>
                            <p>Total payment: <span id = 'payment-fee'></span></p>
                        </div>
                        <div class="col l-12 pay-btn" style="margin-top: 15px;">
                            <input type="button" value="Order" onclick="submitOrder()">
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
                            <div class="col l-2 m-4" style="margin-left:15px;">
                                <h3 class="footer__heading">CUSTOMER SERVICE</h3>
                                <ul class="footer-list">                                
                                    <li>
                                        <a href="<?= base_url()?>/assets/pdf_files/Payment-Agreement.pdf" class="footer-item-link">Payment</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url()?>/assets/pdf_files/shipping-policy.pdf" class="footer-item-link">Shipping</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url()?>/assets/pdf_files/return-refund-policy.pdf" class="footer-item-link">Return & Refund</a>
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
                                        <a href="<?= base_url()?>/assets/pdf_files/shop-policy.pdf" class="footer-item-link">Shop Policies</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url()?>/assets/pdf_files/policy.pdf" class="footer-item-link">Privacy Policy</a>
                                    </li>                                                          
                                </ul>
                            </div>
                            <div class="col l-2 m-4 c-12 pay-and-ship">
                                <div>
                                    <h3 class="footer__heading">PAY MENT</h3>
                                    <div class="footer-sale-ship">
                                        <img src=" <?= base_url()?>/assets/img/pay/1.PNG" class="footer-item-sale-ship">
                                        <img src=" <?= base_url()?>/assets/img/pay/2.PNG" class="footer-item-sale-ship">
                                                                       
                                    </div>
                                </div>
                        
                            </div>
                            <div class="col l-2 m-4 c-6">
                                <h3 class="footer__heading">FOLLOW US</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="https://vk.com/funnydonutvn" class="footer-item-link footer-item-link-fb">
                                            <i class="footer-item-icon fa-brands fa-vk"></i>
                                            VKontakte
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://vk.com/funnydonutvn" class="footer-item-link footer-item-link-is">
                                            <i class="footer-item-icon fab fa-instagram-square"></i>
                                            Instagram
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://vk.com/funnydonutvn" class="footer-item-link footer-item-link-li">
                                            <i class="footer-item-icon fab fa-telegram"></i>
                                            Telegram
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col l-2 m-4 c-6">
                                <h3 class="footer__heading">DOWNLOAD APP</h3>
                                <div class="footer-download">
                                    <a href="#" class="footer-download-link">
                                        <img src=" <?= base_url()?>/assets/img/qr/qr-code.png" class="footer-download-qr">
                                    </a>
                                    <div class="footer-download-app">
                                        <a href="#" class="footer-download-link">
                                            <img src=" <?= base_url()?>/assets/img/qr/gg-play.png" class="footer-download-app-img">
                                        </a>
                                        <a href="#" class="footer-download-link">
                                            <img src=" <?= base_url()?>/assets/img/qr/app-store.png" class="footer-download-app-img">
                                        </a>
                                        <a href="#" class="footer-download-link">
                                            <img src=" <?= base_url()?>/assets/img/qr/app-gallery.png" class="footer-download-app-img">
                                        </a>
                                        <a href="#" class="footer-download-link">
                                            <img src=" <?= base_url()?>/assets/img/qr/ltp-img.png" class="footer-download-app-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- copyright -->
                    <div class="row">
                        <div class="grid">
                            <p class="copyright-title">
                                A product of ITMO University students                            
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
                            <a href="<?= base_url()?>/assets/pdf_files/policy.pdf" class="other-footer-link">
                                PRIVACY POLICY
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="<?= base_url()?>/assets/pdf_files/Terms-of-Service-and-violation.pdf" class="other-footer-link">
                                TERM OF SERVICE
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="<?= base_url()?>/assets/pdf_files/shipping-policy.pdf" class="other-footer-link">
                                SHIPPING POLICY
                            </a>
                        </div>
                        <div class="col l-2">
                            <a href="<?= base_url()?>/assets/pdf_files/Terms-of-Service-and-violation.pdf" class="other-footer-link">
                                VIOLATION
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="grid other-footer-info">
                            <p class="other-footer-title">About Us</p>
                            <p class="other-footer-more">
                                Address: ITMO University      -      Support hotline: +7 (931) 358 23 89      -       Email: cake@funnydonut.com
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
                <input type="text" placeholder="Name" id = 'new-name' class="addr-new-input">
                <br>
                <input type="tel" placeholder="Phone number" id = 'new-cell-phone' class="addr-new-input">
                <br>
                <p class="" id='cell-phone-error'></p>
                <input type="text" placeholder="Address" class="addr-new-input" id ='new-address'>
                <br>
                <p class="" id = "name-address-error"></p>
                <input type="button" value="Save" class="addr-new-btn" onclick="hideNewAddress()">
                <input type="button" value="Back" class="addr-new-btn add-new-btn-back" onclick="hideNewAddress()">
            </form>
        </div>
    </div>

    <!-- MODAL SUBMIT ORDER -->
    <div class="modal modal-submit">
        <div class="modal-submit-order">
            <p>Are you sure you want to make a order?</p>
            <button>Yes</button>
            <button onclick="submitOrderNo()">No</button>
        </div>
    </div>
    <div id="myModal" class="modal-1">
        <!-- Modal content -->
        <div class="">
            <div class="modal-addr-container modal-content-1">
                <span class="close-1">&times;</span>
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
                    <button class="btn" onclick="saveCreditCard()"><i class="fa fa-lock"></i> submit</button>
                    <p class="input-alert-error" id = 'credit-card-error'></p>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const modalAddress = document.querySelector('.modal-address');
        loadCartShopping();
        var itemSelected = JSON.parse(sessionStorage.getItem('itemSelected')); 
        if(!itemSelected.length) window.location.href = "<?=base_url('home')?>";
        function showNewAddress(){
            modalAddress.classList.add('open');
        }
        function hideNewAddress(){
            var error = false;
            if(!validatePhoneNumber($('#new-cell-phone').val())) {
                $('#cell-phone-error').html('Invalid phonenumber');
                error = true;
            }
            if($('#new-name').val().length == 0 || $('#new-address').val() == 0) {
                $('#name-address-error').html('Name and address is requied');
                error = true;
            }
            if(error) return false;
            $('#cell-phone-error').html('');
            $('#name-address-error').html('');
            $('#name-default').text($('#new-name').val() + '(' + $('#new-cell-phone').val() +')');
            $('#address-default').text($('#new-address').val());

            modalAddress.classList.remove('open');
        }
        fectdata();
        function fectdata() {
            $.ajax({
                    url: '<?=base_url('checkout/fetch') ?>',
                    type: 'post',
                    data: {
                        'itemSelected' : itemSelected
                    },
                    success: function (data) {
                        data.output.forEach( function(x) {
                            $('#row-shop-list').append(x);    
                        });
                        $('.total-payment').append(data.sum+'$');
                        $('.total-payment2').append(data.sum+'$');
                        var x = parseFloat(Math.min(10,(Number(data.sum)/10))).toFixed(2)
                        $('#ship-fee').append(x + '$');
                        $('#payment-fee').append(parseFloat(Number(x)+Number(data.sum)).toFixed(2)+'$');
                    }
                });
        }
        
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

                         $('.has-cart').css({"display": "none"})
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
    function validatePhoneNumber(input_str) {
      var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
      return re.test(input_str);
    }
    function paymentMethod() {
        $.ajax({
                url: '<?= base_url('checkout/paymentMethod') ?>',
                type: 'post',
                data: {},
                success: function (data) {
                    $('.method-card').html('');
                    $('.method-card').append(data.html);
                    if(data.case == 2) {
                        var blockCard = document.getElementsByClassName('containercreditcard');
                        if(document.getElementById('input-card').checked){
                            blockCard[0].style.display = 'block';
                        }
                        fetchCard();
                    }
                }
            });
    }
    paymentMethod();
    function fetchCard() {
        $.ajax({
                url: '<?=base_url('checkout/fetchCard')?>',
                type: 'post',
                data: {
                    'cardID' : $('#card-selected option:selected').val()
                },
                success: function (data) {
                    $('.containercreditcard').html('');
                    $('.containercreditcard').append(data);
                }
            });
    }
     const modalSubmit = document.querySelector('.modal-submit');
        function submitOrder(){
            Swal.fire({
                icon : 'question',
                showCancelButton: true,
                text :'Are you sure you want to make a order?'
            }).then((result) => {
              /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  
                    var method = $('input[name=radio-method]:checked').val();
                    if(method != 'Card' && method != 'Cash') {
                        Swal.fire({
                            icon : 'error',
                            title : '!!!!!!!!!!!!!!!!!!'
                        });
                    }
                    
                    card_number = $('#card-selected').val();
                    $.ajax({
                            url: '<?=base_url('checkout/addOrder') ?>',
                            type: 'post',
                            data: {
                                'method' : method,
                                'item' : itemSelected,
                                'number_card': card_number,
                                'note' :  $('#note-to-seller').val(),
                                'receiver': $('#name-default').text(),
                                'address': $('#address-default').text()
                            },
                            success: function (data) {
                                Swal.fire({
                                    icon : 'success',
                                    title : 'Order Success'
                                }).then((result) =>{
                                    if(result.isConfirmed) {
                                        window.location.href = "<?= base_url('orderHistory')?>";
                                    }
                                });
                            }
                        });
                }
            });
        }
        
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
    });
     
    $('#card-holder').on('keyup change', function(){
      $t = $(this);
      $('.credit-card-box .card-holder div').html($t.val());
      
    });
     
     
    $('#expire-month, #expire-year').change(function(){
      m = $('#expire-month option').index($('#expire-month option:selected'));
      m = (m < 10) ? '0' + m : m;
      y = $('#expire-year').val().substr(2,2);
      $('.card-expiration-date div').html(m + '/' + y);

    })
    function saveCreditCard() {
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
          data.append('card_number', card_number);
      });
       
      $('#card-holder').on('keyup change', function(){
        $t = $(this);
        data.append('card_holder', $t.val());
      });
       
      $('#expire-month, #expire-year').change(function(){
        m = $('#expire-month option').index($('#expire-month option:selected'));
        m = (m < 10) ? '0' + m : m;
        y = $('#expire-year').val().substr(2,2);
      })
    }
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

    function saveCreditCard() {
      var _data = new FormData();
      var card_number = '';
      var getError = false;
      $('.input-cart-number').each(function(){
        card_number += $(this).val() + ' ';
      })
      if(card_number.length != 20) getError = true;
      _data.append('card_number', card_number);
      $t = $('#card-holder');
      if(!$t.val().length ) getError = true;
      _data.append('card_holder', $t.val());    
      m = $('#expire-month option').index($('#expire-month option:selected'));
      m = (m < 10) ? '0' + m : m;
      y = $('#expire-year').val().substr(2,2);
      _data.append('date', m+'/'+y);
      if(!(m.length && y.length)) getError = true;
      _data.append('ccv', $('#card-ccv').val());
      if(!$('#card-ccv').val().length) getError = true;
      if(getError) {
        $('#credit-card-error').html('Please fill out the information completely');
        return 0;
      }
      $.ajax({
          url: '<?=base_url('profile/saveCreditCard')?>',
          type: 'post',
          data: _data,
          contentType: false,
          processData: false,
          success: function (data) {
            $('#credit-card-error').html('');
            if(data == 1) {
                paymentMethod();
                Swal.fire({
                    icon :  'success',
                    text : "Successfully"
                });
                return;
            }
            Swal.fire({
                icon :  'error',
                text : "This card number already exists"
              });
          }
        });
    }
    var modal = document.getElementById("myModal");
                            // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-1")[0];

    // When the user clicks the button, open the modal 


    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
     function notification() {
        $.ajax({
                url: '<?= base_url('home/notification') ?>',
                type: 'post',
                // data: {},
                success: function (data) {
                     $('#new-notification').html('');
                    $('#show-notification').html('');
                    if(data.length == 0) {
                        $('#title-notifi').html('');
                        $('#title-notifi').html('There are currently no announcements');
                         $('#new-notification').append(' <!-- nếu có thông báo thì thêm class "rung" vào dòng lệnh i-->\
                                <i class="header__nav-icon far fa-bell"></i> \
                                <!-- \
                                 -->\
                                Notifications');
                        return false;
                    }
                   
                    console.log(data);
                    if(data.k == 1) {
                        $('#new-notification').append(' <!-- nếu có thông báo thì thêm class "rung" vào dòng lệnh i-->\
                                <i class="header__nav-icon far fa-bell rung" ></i> \
                                <!-- \
                                 -->\
                                Notifications');
                    }
                    else {
                        $('#new-notification').append(' <!-- nếu có thông báo thì thêm class "rung" vào dòng lệnh i-->\
                                <i class="header__nav-icon far fa-bell"></i> \
                                <!-- \
                                 -->\
                                Notifications');
                    }
                    data.html.forEach((x)=> {
                        $('#show-notification').append(x);
                    });
                }
            });
    }
    $('#new-notification').mouseover(function(event) {
        $.ajax({
                url: '<?=base_url('home/updateNoti') ?>',
                type: 'post',
                data: {},
                success: function (data) {
                    notification();
                }
            });
    });
    notification();
    </script>

    <!-- JS card -->
    

    <script>
       
    </script>
</body>
</html>