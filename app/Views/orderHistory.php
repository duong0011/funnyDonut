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
        span.date-order {
            float: right;          
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
                                        <a href="/orderHistory">History</a>
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
                        <div class="header__cart-count">4</div>

                        <div class="header__cart-list no-cart">
                            <img src="<?= base_url()?>/assets/img/sp/no-cart.png" class="header__no-cart-img">
                            <p class="header__no-cart-text">Chưa có sản phẩm</p>
                        </div>

                        <div class="header__cart-list has-cart">
                            <h4 class="header__cart-heading">Sản phẩm đã chọn</h4>
                            <ul class="header__cart-list-item">
                                <li class="header__cart-item">
                                    <img src="<?= base_url()?>/assets/img/buy/1.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Thanh Thanh 2000 1m57 46kg 88-62-89</h3>
                                            <p class="header__cart-item-price">2.000USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 2</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="<?= base_url()?>/assets/img/buy/2.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Hồng Ánh 1998 1m62 48kg 89-64-91</h3>
                                            <p class="header__cart-item-price">2.500USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="<?= base_url()?>/assets/img/buy/3.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Quỳnh Như 1999 1m65 49kg 90-62-89</h3>
                                            <p class="header__cart-item-price">2.800USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="<?= base_url()?>/assets/img/buy/4.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Kim Ngân 2001 1m55 45kg 86-60-87</h3>
                                            <p class="header__cart-item-price">3.200USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 3</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="<?= base_url()?>/assets/img/buy/5.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Thanh Thanh 2000 1m57 46kg 88-62-89</h3>
                                            <p class="header__cart-item-price">2.000USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 2</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="<?= base_url()?>/assets/img/buy/6.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Hồng Ánh 1998 1m62 48kg 89-64-91</h3>
                                            <p class="header__cart-item-price">2.500USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="<?= base_url()?>/assets/img/buy/7.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Quỳnh Như 1999 1m65 49kg 90-62-89</h3>
                                            <p class="header__cart-item-price">2.800USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 1</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__cart-item">
                                    <img src="<?= base_url()?>/assets/img/buy/8.PNG" class="header__cart-item-img">
                                    <div class="header__cart-item-info">
                                        <div class="header__cart-item-heading">
                                            <h3 class="header__cart-item-name">Kim Ngân 2001 1m55 45kg 86-60-87</h3>
                                            <p class="header__cart-item-price">3.200USD</p>
                                        </div>
                                        <div class="header__cart-item-body">
                                            <p class="header__cart-item-number">x 3</p>
                                            <div class="header__cart-item-close">
                                                Xoá
                                                <i class="fas fa-times"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="header__cart-footer">
                                <a href="#" class="btn btn--primary header__cart-see-cart">Xem giỏ hàng</a>
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
                            <p class="user-name">sr14</p>
                            <div class="user-avtar">
                                <img class="user-avatar-img" src="<?= base_url()?>/assets/img/profile/avatar_user.png" alt="avatar"/>
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
                            <div class="Order">
                                <div class="block_order">Order ID: <span>1234</span><span class="date-order">20/11/2022</span>
                                
                            </div>    
                                    <div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Toothsome Chocolate Cake</span></p>
                                            <p class="product-seller">Seller: <span>ABC</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>150</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>10</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn hàng</span></p>
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1500</span>      
                                            </div> 
                                        </div>                                            
                                    </div>
                                    
                                    <div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img1.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Blackforest Cream Cake</span></p>
                                            <p class="product-seller">Seller: <span>ABC1</span></p>
                                            <p class="product-status">Status: <span>Delivered</span></p>
                                            <p class="product-price">Price: 
                                                <span>220</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>5</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn</span></p>

                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1100</span>      
                                            </div> 
                                        </div> 
                                    </div>

                                    <div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Toothsome Chocolate Cake</span></p>
                                            <p class="product-seller">Seller: <span>ABC</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>150</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>10</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn hàng</span></p>
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1500</span>      
                                            </div> 
                                        </div>                                            
                                    </div><div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Toothsome Chocolate Cake</span></p>
                                            <p class="product-seller">Seller: <span>ABC</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>150</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>10</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn hàng</span></p>
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1500</span>      
                                            </div> 
                                        </div>                                            
                                    </div><div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Toothsome Chocolate Cake</span></p>
                                            <p class="product-seller">Seller: <span>ABC</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>150</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>10</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn hàng</span></p>
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1500</span>      
                                            </div> 
                                        </div>                                            
                                    </div><div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Toothsome Chocolate Cake</span></p>
                                            <p class="product-seller">Seller: <span>ABC</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>150</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>10</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn hàng</span></p>
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1500</span>      
                                            </div> 
                                        </div>                                            
                                    </div><div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Toothsome Chocolate Cake</span></p>
                                            <p class="product-seller">Seller: <span>ABC</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>150</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>10</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn hàng</span></p>
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1500</span>      
                                            </div> 
                                        </div>                                            
                                    </div>
                                <div class="block-total-price">
                                    <span>Total: </span>
                                    <span>2600</span>      
                                </div>                                                    
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
                            <div class="Order">
                                <div class="block_order">Order ID: <span>1234</span><span class="date-order">20/11/2022</span></div>    
                                    <div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Toothsome Chocolate Cake</span></p>
                                            <p class="product-seller">Buyer: <span>ABC</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>150</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>10</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn hàng</span></p>
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1500</span>      
                                            </div> 
                                        </div>                                            
                                    </div>
                                    
                                    <div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img1.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Blackforest Cream Cake</span></p>
                                            <p class="product-seller">Buyer: <span>ABC1</span></p>
                                            <p class="product-status">Status: <span>Delivered</span></p>
                                            <p class="product-price">Price: 
                                                <span>220</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>5</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn</span></p>

                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1100</span>      
                                            </div> 
                                        </div> 
                                    </div>          
                                <div class="block-total-price">
                                    <span>Total: </span>
                                    <span>2600</span>      
                                </div>                                                    
                            </div>
            
                            <div class="Order">
                                <div class="block_order"><span>Order ID: </span><span>1235</span><span class="date-order">20/11/2022</span></div>    
                                    <div class="products">
                                        <div class="product-img l-4">
                                            <img src="<?= base_url()?>/assets/img/orderHistory/product-img.png" alt="">
                                        </div>

                                        <div class="product-infor l-8">
                                            <p class="product-name">Product Name: <span>Toothsome Chocolate Cake</span></p>
                                            <p class="product-seller">Buyer: <span>ABC</span></p>
                                            <p class="product-status">Status: <span>Delivering</span></p>
                                            <p class="product-price">Price: 
                                                <span>150</span> 
                                                <span> $ </span>
                                            </p> 
                                            <p class="product-quantity">Quantity: 
                                                <span>10</span>
                                                <span> Pc </span>
                                            </p> 
                                            <p class="product-seller">Address: <span>Đây ghi địa chỉ đơn hàng</span></p>
                                            <div class="block-price">
                                                <span>Total: </span>
                                                <span>1500</span>      
                                            </div> 
                                        </div>                                            
                                    </div>
                                    <div class="block-total-price">
                                        <span>Total: </span>
                                        <span>2600</span>      
                                    </div>
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
    </script> 

</body>
</html>