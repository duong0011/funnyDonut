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
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/admin.css">
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

    </style>
    <!-- Style main -->
    <style>
        .container {
            white-space: nowrap;
        }

        .btn-block {
            margin: 10px 0;
            font-size: 12px;
        }

        .btn-block button {
            background-color: white;
            border: 1px solid var(--header-color);
            border-radius: 5px;
            width: 100px;
            padding: 6px 0 4px;
        }

        .btn-block button:hover {
            opacity: 0.9;
            cursor: pointer;
        }

        button.actived {
            color: white;
            background-color: var(--header-color);
        }

        button.actived:hover {
            opacity: 1;
            cursor: default;
        }

        .block-info {
            font-size: 12px;
            border: 1px solid var(--header-color);
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 58px;
        }

        .user-info-menu span,
        .product-info-menu span {
            border-bottom: 1px solid var(--header-color);
            padding: 5px;
            font-weight: 500;
            color: var(--header-color);
            text-align: center;
            display: inline-block;
        }

        .user-info span,
        .product-info span {
            display: inline-block;
            text-align: center;
        }

        span.user-link,
        span.product-link {
            width: 70px;
        }
        
        span.user-id,
        span.product-id {
            width: 55px;
        }

        span.user-fullname,
        span.product-seller {
            width: 160px;
        }

        span.user-username {
            width: 140px;
        }

        span.user-gender {
            width: 50px;
        }

        span.user-date-of-birth {
            width: 80px;
        }

        span.user-email {
            min-width: 190px;
        }

        span.user-phonenumber {
            width: 150px;
        }

        span.user-date-created,
        span.product-date-created {
            width: 80px;
        }

        span.user-reported,
        span.product-reported {
            width: 60px;
        }

        span.user-action,
        span.product-action {
            width: 70px;
        }

        span.action {
            width: 70px;
            /* border: 1px solid var(--header-color); */
            padding: 5px;
            border-radius: 5px;
            background-color: var(--header-color);
            color: white;
        }

        span.action:hover {
            cursor: pointer;
            opacity: 0.9;
        }

        span.unblock {
            display: none;
        }

        .user-info,
        .product-info {
            margin-top: 10px;
        }

        a {
            text-decoration: none;
            color: var(--header-color);
        }

        a:hover {
            text-decoration: underline;
            font-weight: 500;
        }

        .block-product {
            display: none;
        }

        .product-info .product-name {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            display: -webkit-inline-box;
        }

        span.product-name {
            width: 455px;
        }

        span.product-price {
            width: 100px;
        }

        span.product-type {
            width: 60px;
        }

        span.product-amount {
            width: 80px;
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
                            <a href="#" class="header__nav-item-link">
                                <!-- nếu có thông báo thì thêm class "rung" vào dòng lệnh i-->
                                <!-- <i class="header__nav-icon far fa-bell rung"></i>  -->
                                <i class="header__nav-icon far fa-bell"></i>
                                Notifications
                            </a>
                            <!-- thông báo -->
                            <div class="header__notifi">
                                <header class="header__notifi-header">
                                    <h3>New notifications received</h3>
                                </header>
                                <ul class="header__notifi-list">
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src=" <?= base_url()?>/assets/img/sp/sp1.jpg" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Banh mi
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Traditional Vietnamese cake are waiting for you. Buy now!
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <ul class="header__notifi-list">
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src=" <?= base_url()?>/assets/img/sp/sp2.jpg" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Red Velvet Cake
                                                </div>
                                                <div class="header__notifi-desc">
                                                    You have received a 30% discount code. Buy now!
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src=" <?= base_url()?>/assets/img/sp/sp4.jpg" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Pumpkin Spice Cake
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Your order is still on hold. Let's finish it!
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src=" <?= base_url()?>/assets/img/sp/sp5.jpg" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    New York baked cheesecake
                                                </div>
                                                <div class="header__notifi-desc">
                                                    Your order has been received. Please give feedback!
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notifi-item">
                                        <a href="#" class="header__notifi-link">
                                            <img src=" <?= base_url()?>/assets/img/sp/sp6.jpg" class="header__notifi-img">
                                            <div class="header__notifi-info">
                                                <div class="header__notifi-name">
                                                    Chocolate mud cupcakes
                                                </div>
                                                <div class="header__notifi-desc">
                                                They say good things come in small packages and cupcakes are the proof. 
                                                Unleash your creative side with these mini works of art that are as fun to make as they are to eat.
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notifi-footer">
                                    <a href="#" class="header__notifi-footer-btn">See all</a>
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
            <div style="text-align: center;">
                <div style="display: inline-block;">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Search by Username or Product Name" id = "seeach-user-product">
                    </div>
                    <div class="btn-block">
                        <button class="btn-user actived" onclick="displayBtnUser()">USER</button>
                        <button class="btn-product" onclick="displayBtnProduct()">PRODUCT</button>
                    </div>
    
                    <!-- Block user -->
                    <div class="block-info block-user">
                        <div class="user-info-menu">
                            <span class="user-link">Link</span>
                            <span class="user-id">ID</span>
                            <span class="user-fullname">Fullname</span>
                            <span class="user-username">Username</span>
                            <span class="user-gender">Gender</span>
                            <span class="user-date-of-birth">Date of birth</span>
                            <span class="user-email">Email</span>
                            <span class="user-phonenumber">Phone number</span>
                            <span class="user-date-created">Date created</span>
                            <span class="user-reported">Reported</span>
                            <span class="user-action">Action</span>
                        </div>
                        <div id = "show-user"></div>
                    </div>
                    <!-- Block product -->
                    <div class="block-info block-product">
                        <div class="product-info-menu">
                            <span class="user-link">Link</span>
                            <span class="product-id">ID</span>
                            <span class="product-name">Name</span>
                            <span class="product-price">Price</span>
                            <span class="product-type">Type</span>
                            <span class="product-amount">Amount</span>
                            <span class="product-seller">Seller</span>
                            <span class="product-date-created">Date created</span>
                            <span class="product-reported">Reported</span>
                            <span class="product-action">Action</span>
                        </div>
    
                        <div id = "show-product"></div>
                    </div>
                    
                    <!-- <ul class="pagination home-product-pagination" id="page">
                        <li class="pagination-item">
                            <button class="pagination-item-link pagination-item-link--disable"><i class="fas fa-chevron-left"></i></button>
                        </li>
                        <li class="pagination-item pagination-item--active">
                            <button class="pagination-item-link">1</button>                            
                        </li>
                        <li class="pagination-item">                                
                            <button class="pagination-item-link">2</button>                            
                        </li>
                        <li class="pagination-item">                                
                            <button class="pagination-item-link"><i class="fas fa-chevron-right"></i>                                </button>                            
                        </li>
                    </ul>                 -->
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
        const btnUser = document.querySelector('.btn-user');
        const btnProduct= document.querySelector('.btn-product');
        var blockUser = document.getElementsByClassName("block-user");
        var blockProduct = document.getElementsByClassName("block-product");

        function displayBtnUser(){
            btnUser.classList.add('actived');
            btnProduct.classList.remove('actived');
            blockProduct[0].style.display="none";
            blockUser[0].style.display="block";
        }
        function displayBtnProduct(){
            btnUser.classList.remove('actived');
            btnProduct.classList.add('actived');
            blockUser[0].style.display="none";
            blockProduct[0].style.display="block";
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
    function fectUser(key = "!") {
        $('#show-user').html('');
        $.ajax({
                url: '<?=base_url('admin/fetchUser')?>'+'/'+key,
                type: 'post',
                data: {},
                success: function (data) {
                    data.forEach((item) =>{
                       
                        $('#show-user').append(item);
                    });
                }
            });
    }
    function fectProduct(key ="!") {
        $('#show-product').html('');
        $.ajax({
                url: '<?=base_url('admin/fetchProduct')?>/'+key,
                type: 'post',
                data: {},
                success: function (data) {
             
                     data.forEach((item) =>{
                       
                         $('#show-product').append(item);
                     });
                }
            });
    }      
    fectUser();
    loadCartShopping();
   fectProduct();
    $('#seeach-user-product').on('keyup', function(event) {
        var val = $('#seeach-user-product').val();
        if(!val) val = '!';
        fectProduct(val);
        fectUser(val);
    });
    </script>
</body>
</html>