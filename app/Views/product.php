<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Donut</title>
    <link rel="icon" href=" <?= base_url()?>/assets/img/logo/logo-web.png" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/grid.css">
    <link rel="stylesheet" href="<?= base_url()?>./assets/css/product.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
</head>


<body>
    <!-- main -->
    <div class="app" style="background-color: rgba(236, 238, 240, 0.6);">
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
                                        <a href="#">History</a>
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
        <!-- container -->
        <div class="container-fluid">
            <div class="grid wide">
                <div class="row sm-gutter product__background"  style="margin-top: 10px;">
                    <div class="col l-1 imgs">
                        <?php foreach ($img_product as $value): ?>
                            <div class="small-img">
                                <img src="data:image/jpeg;base64,<?=$value['image']?>" alt="" onclick="showImg(this.src)">
                            </div>
                        <?php endforeach ?>

                    </div>
                    <div class="col l-5">
                        <div class="big__img">
                            <!-- style="background-image: url(<?= base_url()?>/assets/img/sp/sp1.jpg);" -->
                            <img src="data:image/jped;base64,<?=$img_product[0]['image']?>" alt="">
                        </div>
                        <div class="row sm-gutter">
                            <div class="col c-6">
                                <div class="home-product-item__share">
                                    Share:
                                    <li class="product__share">
                                        <a href="#" class="product__share-icon-link">
                                            <i class="product__share-icon product__share-icon-vk fa-brands fa-vk"></i>
                                        </a>
                                        <a href="#" class="product__share-icon-link">
                                            <i
                                                class="product__share-icon product__share-icon-instagram fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="#" class="product__share-icon-link">
                                            <i
                                                class="product__share-icon product__share-icon-telegram fa-brands fa-telegram"></i>
                                        </a>
                                    </li>
                                </div>
                            </div>
                            <div class="col c-6">
                                <div class="product__favourite">
                                    <div class="product__favourite__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <span class="product__favourite-title">
                                        Fovourite
                                    </span>
                                    <span class="product__favourite">
                                        (1.98k)
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-6 product-info">
                        <h1 class="product__name" style="padding-left: 10px">
                            Bánh mì pate thơm ngon bổ dưỡng
                        </h1>
                        <div class="product__item-rating" style="padding-left: 10px">
                            <span class="product__quantity-rating">
                                4.9
                            </span>
                            <div class="product-item__rating-star" style="padding-top: 6px;">
                                <i class="star-checked far fa-star"></i>
                                <i class="star-checked far fa-star"></i>
                                <i class="star-checked far fa-star"></i>
                                <i class="star-checked far fa-star"></i>
                                <i class="star-checked far fa-star"></i>
                            </div>
                        </div>
                        <div class="product-item__price" style="padding-left: 10px">
                            <p class="product-item__price-old">180USD</p>
                            <p class="product-item__price-new">200USD</p>
                        </div>
                        <div class="row sm-gutter" style="padding-left: 10px">
                            <div class="col l-3">
                                <div class="product-item__transport">
                                    <span class="product-item__transport-title">Shop's address</span>
                                </div>
                            </div>
                            <div class="col l-9">
                                <div class="product-item__transport-info">
                                    <span class="product-item__transport-label">Вяземский пер., 5/7, Санкт-Петербург, 1970222222222</span>
                                </div>
                            </div>
                        </div>

                        <div class="row sm-gutter" style="padding-left: 10px; display: none;">
                            <div class="col l-2">
                                <div class="product-item__shipping">
                                    <span class="product-item__shipping-title">Shipping in city</span>
                                </div>
                            </div>
                            <div class="col l-10">
                                <div class="product-item__shipping-info">
                                    <button class="product-item__shipping-info-btn">
                                        <span class="product-item__shipping-info-btn-info">Moscow</span>
                                    </button>
                                    <button class="product-item__shipping-info-btn">
                                        <span class="product-item__shipping-info-btn-info">Saint Peterburg</span>
                                    </button>
                                    <button class="product-item__shipping-info-btn">
                                        <span class="product-item__shipping-info-btn-info">Kazan</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row sm-gutter" style="padding-left: 10px">
                            <div class="col l-2">
                                <div class="product-item__size">
                                    <!--product-item__size-unable-->
                                    <span class="product-item__size-title">Size</span>
                                </div>
                            </div>
                            <div class="col l-10">
                                <div class="product-item__size-info">
                                    <!--product-item__size-info-unable-->
                                    <!-- <button class="product-item__size-btn">
                                        <span class="product-item__size-btn-info">24cm</span>
                                    </button>
                                    <button class="product-item__size-btn product-item__size-info-active">
                                        <span class="product-item__size-btn-info">26cm</span>
                                    </button>
                                    <button class="product-item__size-btn">
                                        <span class="product-item__size-btn-info">28cm</span>
                                    </button> -->
                                    <select id="country-state" name="country-state" class="shortenedSelect">
                                        <option value="">Select size</option>
                                        <option value="ALT">24 cm</option>
                                        <option value="ALT">26 cm</option>
                                        <option value="AL">28 cm</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row sm-gutter" style="padding-left: 10px">
                            <div class="col l-2">
                                <div class="product-item__quantity">
                                    <span class="product-item__quantity-title">Quantity</span>
                                </div>
                            </div>
                            <div class="col l-10">
                                <div class="product-item__quantity-info">
                                    <input type="number" step="1" min="0" placeholder="Enter number"
                                        id="product-item__quantity-number" class="product-item__quantity-info-number">
                                </div>
                            </div>
                        </div>

                        <div class="row sm-gutter" style="padding-left: 10px">
                            <!-- <div class="col l-4"> -->
                            <div class="product-item__more-cart">
                                <i class="product-item__more-cart-icon fa-solid fa-cart-plus"></i>
                                <span class="product-item__more-cart-title">Add to Cart</span>
                            </div>
                            <!-- </div> -->
                            <!-- <div class="col l-3"> -->
                            <div class="product-item__buy-now">
                                <span class="product-item__buy-now-title">Buy now</span>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class="row sm-gutter product__background magazin__box" style="margin-bottom: 20px; padding-bottom: 10px;">
                    <div class="col l-1">
                        <img src="data:image/jped;base64,<?=$seller['avatar']?>" alt="" class="magazin-img">
                    </div>
                    <div class="col l-4">
                        <div class="magazin__info">
                            <h3><?= $seller['fullname']?></h3>
                            <span class="magazin__info-status">Active 3 Hours Ago</span>
                            <button class="magazin__info-btn magazin__info-btn-active magazin__info-btn--chat">
                                <i class="magazin__info-btn-icon fa-solid fa-comments"></i>
                                <span class="magazin__info-btn-label">Chat now</span>
                            </button>
                            <a href="<?= base_url('/viewshop')?>?sellerID=<?=$seller['unitid'] ?>">
                                <button class="magazin__info-btn" style="min-width: 130px;">
                                    <i class="magazin__info-btn-icon fa-solid fa-shop"></i>
                                    <span class="magazin__info-btn-label">View Shop</span>
                                </button>
                            </a>

                        </div>
                    </div>
                    <div class="col l-7">
                        <div class="row sm-gutter magazin__info-parameter">
                            <div class="col l-4">
                                <div class="magazin__parameter">
                                    <span class="magazin__parameter-info">Ratings</span>
                                    <span class="magazin__parameter-info-quantity">46.3k</span>
                                </div>

                            </div>
                            <div class="col l-4">
                                <div class="magazin__parameter">
                                    <span class="magazin__parameter-info">Response Rate</span>
                                    <span class="magazin__parameter-info-quantity">96%</span>
                                </div>

                            </div>
                            <div class="col l-4">
                                <div class="magazin__parameter">
                                    <span class="magazin__parameter-info">Joined</span>
                                    <span class="magazin__parameter-info-quantity">21 months ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="row sm-gutter magazin__info-parameter">
                            <div class="col l-4">
                                <div class="magazin__parameter">
                                    <span class="magazin__parameter-info">Products</span>
                                    <span class="magazin__parameter-info-quantity">46.3k</span>
                                </div>

                            </div>
                            <div class="col l-4">
                                <div class="magazin__parameter">
                                    <span class="magazin__parameter-info">Response Time</span>
                                    <span class="magazin__parameter-info-quantity">96%</span>
                                </div>

                            </div>
                            <div class="col l-4">
                                <div class="magazin__parameter">
                                    <span class="magazin__parameter-info">Follower</span>
                                    <span class="magazin__parameter-info-quantity">100k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid wide">
                <div class="row sm-gutter product__background magazin__box" style="display: none;">
                    <div class="product__specifications">
                        <i class="product__specifications-icon fa-sharp fa-solid fa-caret-right"></i>
                        <h1>Product Specifications</h1>
                    </div>

                    <!-- <div class="product__specifications-paramets">
                        
                    </div> -->
                </div>
                <div class="row sm-gutter product__background" style="margin-top: 0; display: none;">
                    <div class="col l-2" style="margin-bottom: 20px;">
                        <div class="product__specifications-brand ">Brand</div>
                    </div>
                    <div class="col l-10">
                        <div class="product__specifications-brand-info">Banh mi nha Huan</div>
                    </div>
                    <div class="col l-2">
                        <div class="product__specifications-brand" style="margin-bottom: 20px;">Brand</div>
                    </div>
                    <div class="col l-10">
                        <div class="product__specifications-brand-info">Banh mi nha Huan</div>
                    </div>
                    <div class="col l-2">
                        <div class="product__specifications-brand" style="margin-bottom: 20px;">Brand</div>
                    </div>
                    <div class="col l-10">
                        <div class="product__specifications-brand-info">Banh mi nha Huan</div>
                    </div>
                    <div class="col l-2">
                        <div class="product__specifications-brand" style="margin-bottom: 20px;">Brand</div>
                    </div>
                    <div class="col l-10">
                        <div class="product__specifications-brand-info">Banh mi nha Huan</div>
                    </div>
                    <div class="col l-2">
                        <div class="product__specifications-brand" style="margin-bottom: 20px;">Brand</div>
                    </div>
                    <div class="col l-10">
                        <div class="product__specifications-brand-info">Banh mi nha Huan</div>
                    </div>

                    <!-- <div class="product__specifications-paramets">
                        
                    </div> -->
                </div>
                <div class="row sm-gutter product__background" style="margin-top: 0">
                    <div class="product__description">
                        <i class="product__description-icon fa-sharp fa-solid fa-caret-right"></i>
                        <h1>Product Description</h1>
                    </div>
                    <div class="Product__description-info">
                        <span>
                            BÁNH MỲ PHÔ MAI , ĐẬU ĐỎ
                            - quy cách : thùng 1 kg
                            - vị : phô mai , đậu đỏ
                            - xuất xứ : thành phố Đức Châu , tỉnh Sơn Đông , Trung Quốc
                            - hạn sử dụng : 2 tháng kể từ ngày sản xuất in trên vỏ bánh 👉bánh mỳ phô mai béo ngậy thơm vị sữa , bánh mỳ đậu đỏ thơm bùi tạo nên hương vị khó quên
                            - bánh làm từ bột mì cao cấp , trứng sữa , phô mai , đậu đỏ toàn thành phần được tuyển chọn kĩ càng , buổi sáng chỉ cần một cái bánh và 1 ly sữa là đủ dinh dưỡng cho cả buổi sáng đầy năng lượng rồi
                            - Mọi thắc mắc khách hàng vui lòng liên hệ : Trang ,sđt 0349977558 , địa chỉ 290 đoan tĩnh ,phường hải yên , thành phố móng cái , quảng ninh
                        </span>
                    </div>

                    <!-- <div class="product__specifications-paramets">
                        
                    </div> -->
                </div>
            </div>

            <div class="grid wide">
                <div class="row sm-gutter product__background magazin__box">
                    <div class="product__Ratings">
                        <h1>Product Ratings</h1>
                    </div>
                </div>

                <div class="row sm-gutter product__background">
                    <div class="col l-12">
                        <div class="product__rating-filter">
                            <div class="product__rating-filter--star">
                                <span class="product__quantity-rating" style="font-size: 2.8rem; padding-bottom: 4px">
                                    4.9
                                </span>
                                <!-- <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5"/>
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4"/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3"/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2"/>
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1"/>
                                    <label for="star1" title="text">1 star</label>
                                </div> -->
                                <div class="stars">
                                    <form action="">
                                        <input class="star star-5" id="star-5" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5"></label>
                                        <input class="star star-4" id="star-4" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4"></label>
                                        <input class="star star-3" id="star-3" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3"></label>
                                        <input class="star star-2" id="star-2" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2"></label>
                                        <input class="star star-1" id="star-1" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1"></label>
                                    </form>
                                </div>
                            </div>
                            <button class="btn home-filter-btn">All</button>
                            <button class="btn home-filter-btn product__rating-btn--active">
                                5 Star
                                <p>(0)</p>
                            </button>
                            <button class="btn home-filter-btn">
                                4 Star
                                <p>(0)</p>
                            </button>
                            <button class="btn home-filter-btn">
                                3 Star
                                <p>(0)</p>
                            </button>
                            <button class="btn home-filter-btn">
                                2 Star
                                <p>(0)</p>
                            </button>
                            <button class="btn home-filter-btn">
                                1 Star
                                <p>(0)</p>
                            </button>
                        </div>
                    </div>

                </div>
                <!-- bình luận -->

                <div class="row sm-gutter product__background" >
                    <div class="col l-12">
                        <div class="push__comment">
                            <input type="file" id="file-input" accept="image/png, image/jpeg, image/jpg" onchange="preview()" multiple>
                                <label for="file-input">
                                    <i class="push__comment-icon push__comment-icon-append fas fa-paperclip"></i>
                                </label>
                            <input type="text" placeholder="Enter comment ...">
                            </input>
                            <i class="push__comment-icon push__comment-icon-send fas fa-location-arrow"></i>
                        </div>
                        <div class="push__comment-img">
                            <div id="push__images"></div>
                        </div>
                    </div>
                </div>

                <div class="row sm-gutter product__background"
                    style="border-bottom: 1px solid rgba(153, 153, 153, 0.3); padding-top: 10px;">
                    <div class="col l-1">
                        <div class="product__rating-avatar">
                            <img src="https://sme.hust.edu.vn/wp-content/uploads/2022/02/Avatar-Facebook-trang.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="col l-11">
                        <div class="product__rating-info">
                            <div class="product__rating-info--name">
                                <p>Lục Nhất Thiên</p>
                            </div>
                            <div class="product__rating-item" style="display:none;">
                                <div class="product__rating-item-star">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                            </div>

                            <div class="product__rating-date">
                                <span style="font-size: 1.4rem; color: rgb(193, 193, 193); margin:10px 0 10px;">
                                    25-10-2022</span>
                            </div>

                            <div class="Product__rating-label">
                                <span>
                                    shop đóng gói cực kì cẩn thận mình phải gỡ bnhiêu lâu mới mở ra được cho nên
                                    gương k có bị vỡ còn lại thì giống mới mô tả ai đang băn khoăn thì mua ngay
                                    đi nha vì gương giá rẻ còn đóng gói chắc chắn
                                </span>
                            </div>

                        </div>

                        <div class="product__rating--images" style="margin-bottom: 10px;">
                            <div class="product__rating--image">
                                <img src="<?= base_url()?>/assets/img/home/1.PNG" alt="" onclick="myFunction(this);">

                            </div>
                            <div class="product__rating--image">
                                <img src="<?= base_url()?>/assets/img/home/2.PNG" alt="" onclick="myFunction(this);">

                            </div>
                            <div class="product__rating--image">
                                <img src="<?= base_url()?>/assets/img/home/3.PNG" alt="" onclick="myFunction(this);">

                            </div>

                        </div>

                        <div class="fullImageComment" style="margin-bottom: 10px;">
                            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                            <img id="expandedImg" style="width:35%">
                            
                        </div>
                    </div>
                </div>
                <div class="row sm-gutter product__background"
                    style="border-bottom: 1px solid rgba(153, 153, 153, 0.3); padding-top: 10px;">
                    <div class="col l-1">
                        <div class="product__rating-avatar">
                            <img src="https://sme.hust.edu.vn/wp-content/uploads/2022/02/Avatar-Facebook-trang.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="col l-11">
                        <div class="product__rating-info">
                            <div class="product__rating-info--name">
                                <p>Lục Nhất Thiên</p>
                            </div>
                            <div class="product__rating-item" style="display:none;">
                                <div class="product__rating-item-star">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                            </div>

                            <div class="product__rating-date">
                                <span style="font-size: 1.4rem; color: rgb(193, 193, 193); margin:10px 0 10px;">
                                    25-10-2022</span>
                            </div>

                            <div class="Product__rating-label">
                                <span>
                                    shop đóng gói cực kì cẩn thận mình phải gỡ bnhiêu lâu mới mở ra được cho nên
                                    gương k có bị vỡ còn lại thì giống mới mô tả ai đang băn khoăn thì mua ngay
                                    đi nha vì gương giá rẻ còn đóng gói chắc chắn
                                </span>
                            </div>

                        </div>

                        <div class="product__rating--images" style="margin-bottom: 10px;">
                            <div class="product__rating--image">
                                <img src="<?= base_url()?>/assets/img/home/1.PNG" alt="" onclick="myFunction(this);">

                            </div>
                            <div class="product__rating--image">
                                <img src="<?= base_url()?>/assets/img/home/2.PNG" alt="" onclick="myFunction(this);">

                            </div>
                            <div class="product__rating--image">
                                <img src="<?= base_url()?>/assets/img/home/3.PNG" alt="" onclick="myFunction(this);">

                            </div>

                        </div>

                        <div class="fullImageComment" style="margin-bottom: 10px;">
                            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                            <img id="expandedImg" style="width:35%">
                            
                        </div>
                    </div>
                </div>
                <div class="row sm-gutter product__background"
                    style="border-bottom: 1px solid rgba(153, 153, 153, 0.3); padding-top: 10px;">
                    <div class="col l-1">
                        <div class="product__rating-avatar">
                            <img src="https://sme.hust.edu.vn/wp-content/uploads/2022/02/Avatar-Facebook-trang.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="col l-11">
                        <div class="product__rating-info">
                            <div class="product__rating-info--name">
                                <p>Lục Nhất Thiên</p>
                            </div>
                            <div class="product__rating-item" style="display:none;">
                                <div class="product__rating-item-star">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                            </div>

                            <div class="product__rating-date">
                                <span style="font-size: 1.4rem; color: rgb(193, 193, 193); margin:10px 0 10px;">
                                    25-10-2022</span>
                            </div>

                            <div class="Product__rating-label">
                                <span>
                                    shop đóng gói cực kì cẩn thận mình phải gỡ bnhiêu lâu mới mở ra được cho nên
                                    gương k có bị vỡ còn lại thì giống mới mô tả ai đang băn khoăn thì mua ngay
                                    đi nha vì gương giá rẻ còn đóng gói chắc chắn
                                </span>
                            </div>

                        </div>

                        <div class="product__rating--images" style="margin-bottom: 10px;">
                            <div class="product__rating--image">
                                <img src="<?= base_url()?>/assets/img/home/4.PNG" alt="" onclick="myFunction(this);">

                            </div>
                            <div class="product__rating--image">
                                <img src="<?= base_url()?>/assets/img/home/2.PNG" alt="" onclick="myFunction(this);">

                            </div>
                            <div class="product__rating--image">
                                <img src="<?= base_url()?>/assets/img/home/3.PNG" alt="" onclick="myFunction(this);">

                            </div>

                        </div>

                        <div class="fullImageComment" style="margin-bottom: 10px;">
                            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                            <img id="expandedImg" style="width:35%">
                            <!-- <div id="imgtext"></div> -->
                        </div>
                    </div>
                </div>
                

            </div>
        </div>

        <!-- container2 -->

        <?php if(session()->has('loged_user')):?>

        <div class="container2">
            <div class="chat-box1" style="display:none;">
               <div class="card">
                    <div class="card-header msg_head" style="background-color: rgba(134, 50, 50, 1);">
    
                    </div>
                    <div class="card-body msg_card_body" style="background-color: rgba(134, 50, 50, 0.1);">
                    
                    </div>
                    <div class="card-footer">
                        <form class="input-group" id="sendmess" method="post">
                            <div class="input-group-append">
                                <input type="file" id = 'input-file' multiple style="display: none;" name = 'files[]'>
                                <label for="input-file" id = 'lfpushproduct' class="input-group-text attach_btn">
                                    <span ><i class="fas fa-paperclip"></i></span> 
                                </label>
                                
                                <div id = "images-on-push-product"></div>
                            </div>
                            <input type="text" name='idsend' value="<?= session()->get('loged_user');?>" hidden>
                            <input type="text" name='idget' id="sendto" value="" hidden>
                            <textarea name="msg" class="form-control type_msg" id = "form-control" placeholder="Type your message..." ></textarea>
                            <div class="input-group-append">
                                <button class="input-group-text send_btn"  style="border: none; outline: none;"> <i class="fas fa-location-arrow"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="chat-box2" style="display:none;">
                <div class="card">
                <div class="card-header">
                        <div class="input-group">
                            <input type="text" placeholder="Search..." name="" class="form-control search">
                            <div class="input-group-prepend">
                                <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body contacts_body">
                        <ui class="contacts">
                            
                            
                        </ui>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="chat-btn">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwZck1Nal8rEIrnsqEVJkrA7jnnWEAeBXDZYJc9KFdUFPMxeRFP2ep3Osngu4-HXA4MwU&usqp=CAU" alt="chat box icon btn">
            </div>
        </div>    
        <?php endif ?>
           
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
    <!-- modal -->
    <div class="modal">
        <div class="modal__body">
            <!-- authen signin-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <div class="auth-form__switch-btn">Đăng nhập</div>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" placeholder="Số điện thoại" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Mật khẩu" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Nhập lại mật khẩu" class="auth-form__input">
                        </div>
                    </div>
                    <div class="auth-form__policy">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký, bạn đồng ý với Shoppee về
                            <a href="#" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                            <a href="#" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn auth-form__back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>
                <div class="auth-form__signin">
                    <a href="#" class="btn btn-signin auth-form__signin-fb">
                        <i class="auth-form__signin-icon fab fa-facebook-square"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Facebook
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-gg">
                        <i class="auth-form__signin-icon fab fa-google"></i>
                        <p class="auth-form__signin-text">
                            Kết nối với Google
                        </p>
                    </a>
                </div>
            </div>

            <!-- authen login-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Nhập</h3>
                        <div class="auth-form__switch-btn">Đăng ký</div>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" placeholder="Số điện thoại" class="auth-form__input">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" placeholder="Mật khẩu" class="auth-form__input">
                        </div>
                    </div>
                    <div class="auth-form__help">
                        <a href="#" class="auth-form__help-link auth-form__help-forgot">Quên Mật Khẩu</a>
                        <div class="auth-form__help--separate"></div>
                        <a href="#" class="auth-form__help-link">Cần trợ giúp?</a>
                    </div>
                    <div class="auth-form__control">
                        <button class="btn auth-form__back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__signin">
                    <a href="#" class="btn btn-signin auth-form__signin-sms">
                        <i class="auth-form__signin-icon fas fa-sms"></i>
                        <p class="auth-form__signin-text">
                            SMS
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-fb">
                        <i class="auth-form__signin-icon fab fa-facebook-square"></i>
                        <p class="auth-form__signin-text">
                            Facebook
                        </p>
                    </a>
                    <a href="#" class="btn btn-signin auth-form__signin-gg">
                        <i class="auth-form__signin-icon fab fa-google"></i>
                        <p class="auth-form__signin-text">
                            Google
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- script js -->
    <!-- <script src="<?= base_url()?>/assets/js/product.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="https://malsup.github.io/jquery.form.js"></script> 
    <script>
        let bigImg = document.querySelector('.big__img img')
        function showImg(pic) {
            bigImg.src = pic;
        }

        $(document).ready(()=>{
            $(".chat-btn").click(()=>{
                if(<?= session()->has('loged_user') ? 0 : 1 ?>) {
                    window.location.href = '<?= base_url('/login')?>';
                    return false;
                }
                $(".chat-box1").slideUp("slow");
                $(".chat-box2").slideToggle("slow");
                clearInterval(window.myIn);
                loadListcontacts('<?= session()->get('loged_user');?>');
            })

        })

        $(document).ready(()=>{
            $(".magazin__info-btn--chat").click(()=>{
                if(<?= session()->has('loged_user') ? 0 : 1 ?>) {
                    window.location.href = '<?= base_url('/login')?>';
                    return false;
                }
                $(".chat-box1").slideDown("slow");
                $(".chat-box2").slideDown("slow");
                var curl = new URL(document.URL);
                loadChat('<?=$seller['unitid'] ?>');
                loadListcontacts('<?= session()->get('loged_user');?>');
            })
        })
        function loadListcontacts(id) {
            $.ajax({
                    url: '<?=base_url('viewshop/loadListcontacts')?>',
                    type: 'get',
                    data: {'id' : id},
                    success: function (data) {
                        document.querySelector('.contacts').innerHTML = data;
                    }
                });
        }
        function loadChat(id) {
            $(".chat-box1").slideDown("slow");
            clearInterval(window.myIn);
            url = '<?=base_url('viewshop/boxchat')?>/'+id;
            $.ajax({
                    url:url ,
                    type: 'POST',
                })
            .done(function(response) {
                document.querySelector('.card-header').innerHTML = response.output;
                $('#action_menu_btn').click(function(){
                    $('.action_menu').toggle();
                });
                document.getElementById('sendto').setAttribute('value', response.id);
                window.myIn = setInterval(function () {
                    $.ajax({
                            url: '<?= base_url('viewshop/fetchChat') ?>',
                            type: 'post',
                            data: {
                                'sendfrom' : '<?= session()->get('loged_user')?>',
                                'sendto' : id
                            },
                            success: function (data) {
                                document.querySelector('.msg_card_body').innerHTML = data;
                            }
                        });
                }, 1000);
            })
            .fail(function() {
                console.log("error");
            });
            // gui chat

            $('#sendmess').ajaxForm({
                url : "<?=base_url('/viewshop/saveMess')?>",
                success: function(data) {
                    let test = document.getElementById('form-control');
                    test.value = "";
                    loadListcontacts('<?= session()->get('loged_user');?>');
                }
            });
        }

    </script>
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

<script>
    let fileInput = document.getElementById("file-input");
    let imageContainer = document.getElementById("push__images");
    
    function preview() {
        imageContainer.innerHTML = "";
        // let numOfFiles = ${fileInput.files.length};
        for (i of fileInput.files) {
            let reader = new FileReader();
            let figure = document.createElement("figure");
            let figCap = document.createElement("figcaption");
            figCap.innerText = i.name;
            figure.appendChild(figCap);
            reader.onload =() => {
                let img = document.createElement("img");
                img.setAttribute("src", reader.result);
                figure.insertBefore(img, figCap);
            }
            imageContainer.appendChild(figure);
            reader.readAsDataURL(i);
        }
        
    }
</script>

<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        // var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        // imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>

</body>

</html>