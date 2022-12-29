<?php $p_session = \Config\Services::session()?>
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
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/order-history.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="https://malsup.github.io/jquery.form.js"></script> 
    <style>
        <style>
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

    <style>
        .home-product-pagination {
            margin-top: 52px;
            margin-bottom: 60px;
            padding-left: 0;
        }

        .pagination {
            display: flex;
            align-items: center;
            justify-content: center;
            list-style: none;
            border-radius: 0.25rem;
        }
        
        .pagination-item {
            padding: 0 15px;
        }

        .pagination-item--active .pagination-item-link {
            background-color: var(--header-color);
            color: var(--white-color);
        }

        .pagination-item .pagination-item-link:hover {
            box-shadow: 0 0 3px #333;
            cursor: pointer;
        }

        .pagination-item-link {
            display: block;
            text-decoration: none;
            font-size: 1.8rem;
            color: #999;
            height: 30px;
            text-align: center;
            line-height: 30px;
            min-width: 40px;
            border-radius: 3px;
            border: none;
        }
    </style>

    <style>
        /* span.date-order {
            float: right;          
        } */

        .products {
            max-height: 520px;
            overflow-y: scroll;
            min-height: 235px;
        }

        .infor-receiver {
            font-size: 18px;
        }

        .infor-receiver p {
            margin: 12px 18px;
        }

        .infor-receiver span {
            color: var(--header-color);
            font-weight: 500;
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

        .block-empty {
            text-align: center;
            margin: 130px 0;
            font-size: 20px;
        }

        .empty-txt a {
            text-decoration: none;
            color: var(--header-color);
            font-weight: 600;
        }

        p.empty-txt {
            margin: 50px 0;
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
                               <!--  <footer class="header__notifi-footer">
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
                            <input type="text" class="header__search-input" placeholder="Enter to search for product:" id = 'searchproduct' autocomplete="new-password">
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

                        <div class="header__cart-list has-cart">
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
                    <div class="c-2 buy-sell">
                        <div class="user-avatar-name">
                            <p class="user-name"><?= $user['fullname'] ?></p>
                            <div class="user-avtar">
                                <img class="user-avatar-img" src="data:image/jped;base64,<?=$user['avatar'] ?>"> 
                            </div>
                        </div>
                        <div class="buy-sell-list">
                            <ul class="buy-sell-list-info">
                                <li class="buy-sell-list-item buy" onclick="btnBuy()">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    Buy
                                </li>
                                <li class="buy-sell-list-item sell" onclick="btnSell()">
                                    <i class="fa-solid fa-shop"></i>
                                    Sell
                                </li>
                            </ul>
                        </div>
                    </div>

                    
                    <!-- BLOCK BUY -->
                    <div class="c-10 list-infor block-buy">               
                        <div class="search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Search by Order ID or Product Name">
                        </div>
                        
                        <!-- ALL ORDER -->
                        <div class="block block-all">
                            <!-- empty -->
                           
                            <div id = 'fecthBuy'>
                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- BLOCK SELL -->
                    <div class="c-10 list-infor block-sell">               
                        <div class="search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Search by Order ID or Product Name">
                        </div>

                        <!-- ALL ORDER -->
                        <div class="block block-all">
                            <!-- empty -->
                            <!-- <div class="с-10 block-empty">
                                <img src=" http://localhost/funnyDonut/assets/img/sp/no-cart.png" class="header__no-cart-img">
                                <p class="empty-txt">You don't have any orders yet. Go to <a href="http://localhost/funnyDonut">BUY</a> now!</p>
                            </div> -->
                             <div id = 'fecthSell'>
                                   
            
                      
                            </div>
                            
                                  <!--toi day  -->
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
    
  
    <script>
        var blockBuy = document.getElementsByClassName("block-buy");
        var blockSell = document.getElementsByClassName("block-sell");
        var buyTxt = document.getElementsByClassName("buy");
        var sellTxt = document.getElementsByClassName("sell");

        function btnBuy(){
            blockBuy[0].style.display="block";
            blockSell[0].style.display="none";
            buyTxt[0].style.fontWeight="600";
            sellTxt[0].style.fontWeight="400";
        }

        function btnSell(){
            blockBuy[0].style.display="none";
            blockSell[0].style.display="block";
            buyTxt[0].style.fontWeight="400";
            sellTxt[0].style.fontWeight="600";
        }
        function fecthBuy() {
            $.ajax({
                    url: '<?=base_url('orderHistory/fetchBuy') ?>',
                    type: 'post',
                    data: {},
                    success: function (data) {
                        if(data.length == 0) {
                           $('#fecthBuy').append('<div class="с-10 block-empty">\
                                    <img src=" http://localhost/funnyDonut/assets/img/sp/no-cart.png" class="header__no-cart-img">\
                                    <p class="empty-txt">You dont have any orders yet. Go to <a href="http://localhost/funnyDonut">BUY</a> now!</p>\
                                </div>'); 
                        }
                        data.forEach((x)=>{
                            $('#fecthBuy').append(x);   
                        });
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
        function fecthSell() {
            $.ajax({
                    url: '<?=base_url('orderHistory/fetchSell') ?>',
                    type: 'post',
                    data: {},
                    success: function (data) {
                        if(data.length == 0) {
                           $('#fecthSell').append('<div class="с-10 block-empty">\
                                    <img src=" http://localhost/funnyDonut/assets/img/sp/no-cart.png" class="header__no-cart-img">\
                                    <p class="empty-txt">You dont have any orders yet. Go to <a href="http://localhost/funnyDonut">BUY</a> now!</p>\
                                </div>'); 
                        }
                        data.forEach((x)=>{
                            $('#fecthSell').append(x);   
                        });
                    }
                });
        }
        fecthBuy();
        fecthSell();
        loadCartShopping();
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

</body>
</html>