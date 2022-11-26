<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Donut</title>
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
    </style>

    <style>
        
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
                                        <a href="#">Đơn mua</a>
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
                                            <input type="text" value="<?= $user['username']?>" class="form-input" readonly> 
                                        </li>
                                        <li class="profile-phone">
                                            <span>Phone number</span>
                                            <p class="profile-phone"><?= $user['phonenumber'];?></p>
                                            <a href="" class="profile-change">Change</a>
                                        </li>
                                        <li class="profile-address">
                                            <span>Address</span>
                                            <select id="country-state" name="country-state" class="shortenedSelect">
                                                <option value="">Select State</option>
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
                                            <input type="text" class="form-input" placeholder="Specific address">
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
                            <div class="pay-old">
                                <i class="pay-icon-card fa-brands fa-cc-visa"></i>
                                <span class="pay-name">Visa **0823</span>
                                <i class="pay-icon-garbage fa-solid fa-trash-can"></i>
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
    <div class="modal modal-pay">
        <div class="modal-addr-container">
            <form action="" class="form-card-new">
                <p class="modal-text">New card</p>
                <input type="text" placeholder="Card number" class="addr-new-input">
                <br>
                <span>
                    Expiration date
                </span>
                <input type="text" placeholder="MM" class="pay-date">
                <span>/</span>
                <input type="text" placeholder="YY" class="pay-date">
                <br>
                <input type="text" placeholder="CVV/CVC" class="pay-cvv">
                <br>
                <input type="button" value="Save" class="addr-new-btn" onclick="hideNewPay()">
                <input type="button" value="Back" class="addr-new-btn add-new-btn-back" onclick="hideNewPay()">
            </form>
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
        function showNewPay(){
            modalPay.classList.add('open');
        }
        function hideNewPay(){
            modalPay.classList.remove('open');
        }

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
        let data = {
            'fullname' :$('#fullnameuser').val(),
            'gender' : gender,
            'DateOfBirth': getDay,
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
 </script>
</body>
</html>