<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="icon" href="<?= base_url()?>/assets/img/logo/shopee-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/grid.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/viewshop.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn"crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        /* body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            
        } */
        
    </style>
</head>

<body>
    <!-- main -->
    <div class="app">
        <!-- header -->
        <header class="header">
            <div class="grid wide">
                <!-- navbar -->
                <nav class="header__navbar hide-on-mobile-tablet">
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

                        <a href="<?= base_url().'/home/'?>" class="header__logo-link">
                            <!-- <img src="<?= base_url()?>/assets/img/logo/logo-full-white.png" class="header__logo-img"> -->
                            <img src="<?= base_url()?>/assets/img/logo/logo.png" class="header__logo-img">
                        </a>
                    </div>
                    <input type="checkbox" id="mobile-search" class="header__search-check" hidden>
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Enter to search for products:" id = 'searchproduct' autocomplete="new-password">
                            <div class="header__search-history" >
                                <ul class="header__search-history-list hintsforproduct">
                                </ul>
                            </div>
                        </div>
                        <button class="btn-Huan header__search-btn" onclick="loadSearch()">
                            <i class='header__search-btn-icon fas fa-search'></i>;
                               
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
        </header>
        <!-- container -->
        <div class="container-fluid" style="background-color: rgb(245,245,245); padding-top: 24px;">
            <div class="grid wide">
                <div class="row sm-gutter product__background magazin__box" style="margin-bottom: 25px;">
                    <div class="col l-4" style="padding:0; background-color: rgba(139, 52, 52, 0.2); border-radius: 2px;">
                        <div class="shop__label">
							<img src="data:image/jpeg;base64,<?= $seller['avatar'];?>" alt="" class="img__shop">
							<div class="shop__name">
								<h3><?= $seller['fullname'] ?></h3>
								<?php if($seller['currentstatus'] == 'online'):?>
                                    <span>Active now</span>
                                <?php else: ?>
                                    <span>Offline <?php 
                                        date_default_timezone_set('Europe/Moscow');
                                        $current = new DateTime();
                                        $timelogout = new DateTime($seller['logout_time']);
                                        echo $current->diff($timelogout)->format('%h hours %i minutes ago');
                                    ?></span>
                                <?php endif ?>
							</div>
						</div>
						<div class="shop__description" style="margin-bottom:10px">
							<button class="magazin__info-btn" style="width: 180px;  height: 25px; font-size: 1.2em">
								<i class="magazin__info-btn-icon fa-solid fa-plus"></i>
								<span class="magazin__info-btn-label">Follow</span>
							</button>
							<button class="magazin__info-btn magazin__info-btn--chat" style="width: 180px; height: 25px; font-size: 1.2em">
								<i class="magazin__info-btn-icon fa-solid fa-comments"></i>
								<span class="magazin__info-btn-label">Chat now</span>
							</button>
						</div>
                    </div>

					<div class="col l-1">

					</div>

                    <div class="shop__info col l-3" style="margin-right: 30px;">
						<div class="shop__product">
							<i class="fa-solid fa-shop"></i>
							<span class="shop__product--title">Products:</span>
							<span class="shop__product--info">25</span>
						</div>
						<div class="shop__joined">
							<i class="fa-solid fa-check"></i>
							<span class="shop__joined--title">Joined:</span>
							<span class="shop__joined--info">21 months ago</span>
						</div>
						<div class="shop__respontime">
							<i class="fa-regular fa-comment-dots"></i>
							<span class="shop_respontime--title">Response Time:</span>
							<span class="shop__respontime--info">96%</span>
						</div>
                    </div>
					<div class="shop__info col l-3">
						<div class="shop__follower">
							<i class="fa-solid fa-users"></i>
							<span class="shop__follower--title">Followers:</span>
							<span class="shop__follower--info">100k</span>
						</div>
						<div class="shop__following">
							<i class="fa-solid fa-user-plus"></i>
							<span class="shop__following--title">Following:</span>
							<span class="shop__following--info">20</span>
						</div>
						<div class="shop__rating">
							<i class="fa-regular fa-star"></i>
							<span class="shop__ratings--title">Ratings:</span>
							<span class="shop__ratings--info">4.7 (46.3k)</span>
						</div>
                    </div>
                </div>

                <div class="row sm-gutter product__background magazin__box">
                    <div class="col l-12" style="padding:0;">
                        <div class="home-filter hide-on-mobile-tablet" style="background-color: white;">
                            <div class="home-filter-control">
                                <!-- <p class="home-filter-title">Sorted by:</p> -->
                                <button class="btn btn--brown home-filter-btn">
                                    <a href="">
                                        All product
                                    </a>
                                </button>

                                <div class="btn home-filter-sort" style="min-width: 120px; padding-bottom: 0; background-color: rgba(130,50,50,0.1);">
                                    <p class="home-filter-sort-btn">Menu</p>                                  
                                    <ul class="home-filter-sort-list">
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                Bread                                       
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                Candy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">                                               
                                                Cake                                              
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="btn home-filter-btn" style="background-color: rgba(130,50,50,0.1);">Popular</button>
                                <button class="btn home-filter-btn" style="background-color: rgba(130,50,50,0.1);">Latest</button>
                                <button class="btn home-filter-btn" style="background-color: rgba(130,50,50,0.1);">bestseller</button>
                                <div class="btn home-filter-sort" style="min-width: 180px; padding-bottom: 0; background-color: rgba(130,50,50,0.1);">
                                    <p class="home-filter-sort-btn">Price</p>
                                    <i class="fas fa-sort-amount-down-alt"></i>
                                    <ul class="home-filter-sort-list">
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                Price: Low to High
                                                <i class="fas fa-sort-amount-down-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="home-filter-sort-item-link">
                                                
                                                Price: Hight to Low
                                                <i class="fas fa-sort-amount-up-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> 

                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="list-product" class="row sm-gutter product__background">   
                </div>

                <!-- <div class="row sm-gutter product__background">
                    <div class="col l-10">
                        <div class="home__filter-error">
                            <i class="home__filter-error-icon fa-regular fa-file-excel" style="margin-bottom: 10px"></i>
                            <p>Hix. No products. Did you try to turn off the filter condition and find it again?</p>
                            <span style="margin-top: 5px;">or</span>
                            <button class="btn btn--brown home-filter-btn">
                                <a href="">
                                    Clear filter
                                </a>
                            </button>
                        </div>
                    </div>
                </div> -->
            
			  <ul class="pagination home-product-pagination" id = "page">
                            
                          
                
                            </ul>
        </div>
        
        <!-- container2 -->
        <div class="container2">
            <div class="chat-box1" style="display:none;">
                <div class="card">
                    <div class="card-header msg_head" style="background-color: rgba(134, 50, 50, 1);">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                                <span>Triệu Lộ Tư</span>
                                <p>Online</p>
                            </div>
                            <div class="video_cam" style="display:none;">
                                <span><i class="fas fa-video"></i></span>
                                <span><i class="fas fa-phone"></i></span>
                            </div>
                        </div>
                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="action_menu">
                            <ul>
                                <li><i class="fa-solid fa-shop"></i>View Shop</li>
                                <li><i class="fas fa-ban"></i> Block</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body msg_card_body" style="background-color: rgba(134, 50, 50, 0.1);">
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Hi Khalid i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/zxaijr/2022_03_30/trieuledinhphunhantronthue1-4371.jpeg" class="rounded-circle user_img_msg">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/zxaijr/2022_03_30/trieuledinhphunhantronthue1-4371.jpeg" alt="">
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/zxaijr/2022_03_30/trieuledinhphunhantronthue1-4371.jpeg" class="rounded-circle user_img_msg">
                            </div>
                        </div>

                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                I am good too, thank you for your chat template
                                <span class="msg_time">9:00 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                You are welcome
                                <span class="msg_time_send">9:05 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/zxaijr/2022_03_30/trieuledinhphunhantronthue1-4371.jpeg" class="rounded-circle user_img_msg">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                I am looking for your next templates
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg">
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Ok, thank you have a good day
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/zxaijr/2022_03_30/trieuledinhphunhantronthue1-4371.jpeg" class="rounded-circle user_img_msg">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
                            </div>
                            <div class="msg_cotainer">
                                Bye, see you
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                            </div>
                            <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                            <div class="input-group-append">
                                <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                            </div>
                        </div>
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
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://static2-images.vnncdn.net/files/publish/2022/9/19/lo-tu-1-146.jpg" class="rounded-circle user_img">
										<span class="online_icon"></span>
									</div>
									<div class="user_info-searched">
										<span>Triệu Lộ Tư</span>
										<p>Online</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://znews-photo.zingcdn.me/w660/Uploaded/kbd_pilk/2022_01_01/bach_loc10.jpg" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info-searched">
										<span>Bạch Lộc</span>
										<p>Left 7 mins ago</p>
									</div>
								</div>
							</li>
							
								
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://vtv1.mediacdn.vn/zoom/550_339/2021/11/29/1597350815557dich-duong-thien-ti-khien-fan-vo-oa-voi-hinh-16276283065531081461379-crop-16276283125721658243581-163817188296830526689.jpg" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info-searched">
										<span>Dịch ương Thiên Tỉ</span>
										<p>Left 50 mins ago</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="https://image.thanhnien.vn/w660/Uploaded/2022/zxaijr/2021_08_23/huakhaibaolucgiadinh10_nrpt.png" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info-searched">
										<span>Hứa Khải</span>
										<p>Left 50 mins ago</p>
									</div>
								</div>
							</li>
							<li>
								<div class="d-flex bd-highlight">
									<div class="img_cont">
										<img src="data:image/jpeg;base64,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" class="rounded-circle user_img">
										<span class="online_icon offline"></span>
									</div>
									<div class="user_info-searched">
										<span>Dương Dương</span>
										<p>Left 50 mins ago</p>
									</div>
								</div>
							</li>
						</ui>
					</div>
                </div>
            </div>
            <!-- button -->
            <div class="chat-btn">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwZck1Nal8rEIrnsqEVJkrA7jnnWEAeBXDZYJc9KFdUFPMxeRFP2ep3Osngu4-HXA4MwU&usqp=CAU" alt="chat box icon btn">
            </div>
        </div>
        <!-- footer -->
        <footer class="footer">
            <!-- main footer -->
            <div class="main-footer">
                <div class="grid wide">
                    <div class="row sm-gutter main-footer-info" style="padding: 0; margin: 0;">
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
                        <div class="col l-2 m-4 c-6">
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
                                © 2021 Shopee copyright - Công ty TNHH CRF - Product by LTP
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
                                Address: Tầng 4-5-6, Tòa nhà Capital Place, số 29 đường Liễu Giai,
                                Phường Ngọc Khánh, Quận Ba Đình, Thành phố Hà Nội, Việt Nam.
                                Support call center: 19001221 - Email: cskh@hotro.shopee.vn
                            </p>
                            <p class="other-footer-more">
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
                            </p>
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
    <script>
        let bigImg = document.querySelector('.big__img img')
        function showImg(pic) {
            bigImg.src = pic;
        }

        $(document).ready(()=>{
            $(".chat-btn").click(()=>{
                $(".chat-box1").slideToggle("slow");
                $(".chat-box2").slideToggle("slow");
            })

        })

        $(document).ready(()=>{
           
            $(".magazin__info-btn--chat").click(()=>{
                if(<?= session()->has('loged_user') ? 0 : 1 ?>) {
                    window.location.href = '<?= base_url('/login')?>';
                    return false;
                }
                $(".chat-box1").slideToggle("slow");
                $(".chat-box2").slideToggle("slow");
            })
        })

        $(document).ready(function(){
	        $('#action_menu_btn').click(function(){
		        $('.action_menu').toggle();
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
    // load san pham
    function callLoadData(url, page, data) {
            window.scrollTo({ top: 200, behavior: 'smooth' });
            var curl = new URL(document.URL);

            let data1 = {
                'sellerID' : curl.searchParams.get('sellerID'),
                'page' : page,
            };
            loadProduct(data1, url); 
        } 

    function loadProduct(pdata, url) {
        $.ajax({
            url: url,
            data: pdata,
            type: 'get',
            success: function (response) {                  
                $('#list-product').html("");
                $('#page').html(""); 
                if (response.products !== null) {
                    window.history.pushState('page2', 'Title', response.currentRequest1);
                    $.each(response.products , function(index, value) {
                    $('#list-product').append("<div class='col l-2 home-product-item'>\
                        <a class='home-product-item-link' href='<?= base_url('showproduct')?>?id="+value.pid+"'>\
                        <div class='home-product-item__img' style='background-image:url(data:image/jpeg;base64,"+value.image+")'></div>\
                        <div class='home-product-item__info'>\
                            <h4 class='home-product-item__name'>"+ value.nameproduct+"</h4>\
                            <div class='home-product-item__price'>\
                                <p class='home-product-item__price-old'>"+ value.price+"USD</p>\
                                <p class='home-product-item__price-new'>"+(value.price-value.price*value.discount/100).toFixed(2)+"USD</p>\
                                <i class='home-product-item__ship fas fa-shipping-fast'></i>\
                            </div>\
                            <div class='home-product-item__footer'>\
                                <div class='home-product-item__save'>\
                                    <input type='checkbox' name='save-check' id='heart-save'>\
                                    <label for='heart-save' class='far fa-heart'></label>\
                                </div>\
                                <div class='home-product-item__rating-star'>\
                                        <i class='star-checked far fa-star'></i>\
                                        <i class='star-checked far fa-star'></i>\
                                        <i class='star-checked far fa-star'></i>\
                                        <i class='star-checked far fa-star'></i>\
                                        <i class='star-checked far fa-star'></i>\
                                </div>\
                                     <div class='home-product-item__saled'>"+value.rating+"</div>\
                                </div>\
                                <div class='home-product-item__origin'>Sold("+value.sold+")</div>\
                            </div>\
                        </div>");
                    });
                   
                        pageStart = Number(response.pageStart);
                        pageEnd = Number(response.pageEnd);
                        request = response.currentRequest.toString();
                        $('#page').append("<li class='pagination-item'>\
                                <button class='pagination-item-link pagination-item-link--disable' onclick = callLoadData('"+request+"',"+Math.max(1,pageStart-1)+")>\
                                    <i class='fas fa-chevron-left'></i>\
                                </button>\
                                </li>");
                         if(pageStart >= 3) {
                            $('#page').append("<li class='pagination-item'>\
                                    <button onclick = callLoadData('"+request+"',1) class='pagination-item-link'><?= 1 ?></button>\
                                </li>");
                            $('#page').append(" <li class='pagination-item'>\
                                    <a class='pagination-item-link pagination-item-link--disable'>. . .</a>\
                                </li>");
                        } else if(pageStart >= 2) {

                             $('#page').append("<li class='pagination-item'>\
                                    <button onclick = callLoadData('"+request+"',1) class='pagination-item-link'><?= 1 ?></button>\
                                </li>");

                        }
                        
                        $('#page').append("<li class='pagination-item pagination-item--active'>\
                                <button class='pagination-item-link'>"+pageStart+"</button>\
                            </li>");
                        for (i = pageStart+1; i <= Math.min(pageEnd-1,pageStart+2); i++) {
                            $("#page").append("<li class='pagination-item'>\
                                    <button class='pagination-item-link' onclick = callLoadData('"+request+"',"+i+")>"+i+"</button>\
                                </li>");
                        }

                        if (pageEnd-1 > pageStart+2) {
                            $("#page").append("<li class='pagination-item'>\
                                    <a class='pagination-item-link pagination-item-link--disable'>. . .</a>\
                                </li>\
                                <li class='pagination-item'>\
                                    <button class='pagination-item-link' onclick = callLoadData('"+request+"',"+pageEnd+")>"+pageEnd+"</button>\
                                </li>");
                        }else if (pageEnd > pageStart) {
                            $('#page').append("<li class='pagination-item'>\
                                <button onclick = callLoadData('"+request+"',"+pageEnd+") class='pagination-item-link'>"+pageEnd+"</button>\
                            </li>")
                        } 
                        if(pageEnd >= pageStart) {
                            $("#page").append(" <li class='pagination-item'>\
                                <button class='pagination-item-link' onclick = callLoadData('"+request+"',"+Math.min(pageStart+1, pageEnd)+") >\
                                    <i class='fas fa-chevron-right'></i>\
                                </button>\
                            </li>")   
                        }
                    }else {
                         $('.loadProduct').append("<div class='col l-10'>\
                        <div class='home__filter-error'>\
                            <i class='home__filter-error-icon fa-regular fa-file-excel'></i>\
                            <p>Hix. No products. Did you try to turn off the filter condition and find it again?</p>\
                            <span>or</span>\
                            <button class='btn btn--brown home-filter-btn'>\
                                <a href='<?= base_url().'/home'?>'>\
                                    Clear filter\
                                </a>\
                            </button>\
                        </div>\
                    </div>")
                }
            }
                                            
        });
    }
    var curl = new URL(document.URL);
    loadProduct("", "<?=base_url('/viewshop/fetch')?>?sellerID="+curl.searchParams.get('sellerID'));
    </script>

</body>

</html>