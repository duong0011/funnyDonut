<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="icon" href="<?= base_url()?>/assets/img/logo/shopee-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/grid.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/viewshop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* font-family: 'Raleway', sans-serif;*/
            outline: none;
            /* border: none; */
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            
        }

        .container2 {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }


        /* Chat box section */
        .chat-box {
            width: 400px;
            height: 450px;
            background-color: #fff;
            overflow: hidden;
            border-radius: 10px;
            position: fixed;
            right: 5em;
            bottom: 90px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            z-index: 10;
        }

        /* about client */
        .client {
            display: flex;
            justify-content: start;
            align-items: center;
            height: 60px;
            background-color: var(--header-color);
            padding: 15px;

        }

        .client img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .client-info {
            color: #fff;
            padding: 15px;
            
        }

        .client-info h2 {
            font-size: 2em;
        }
        .client-info p {
            color: #fff;
            font-weight: bold;
            font-size: 1.2em;
        }

        /* main  (chat sextion)*/

        .chats {
            width: 100%;
            padding: 0 15px;
            color: #fff;
            position: relative;
            font-size: 1.4em;
        }

        .client-chat {
            width: 60%;
            word-wrap: break-word;
            background-color: #4f5d73c7;
            padding: 7px 10px;
            border-radius: 10px 10px 10px 0;
            margin: 10px 0;
        }

        .my-chat {
            width: 60%;
            word-wrap: break-word;
            background-color: #77b3d4c7;
            padding: 7px 10px;
            border-radius: 10px 10px 0 10px;
            margin: 5px 0 5px auto;
        }

        /* input section */

        .chat-input {
            display: flex;
            align-items: center;
            width: 100%;
            height: 65px;
            background-color: #fff;
            padding: 15px;
            overflow: hidden;
            position: absolute;
            bottom: 0;
            
        }

        .chat-input input {
            width: calc(100% - 40px);
            height: 100%;
            background-color: #4f5d7321;
            border-radius: 50px;
            color: #000;
            font-size: 1.4em;
            padding: 0 15px;
            border: none;
        }

        .send-btn {
            width: 40px;
            height: 40px;
            background-color: transparent;
            overflow: hidden;
            position: relative;
            margin-left: 5px;
            cursor: pointer;
            transition: 0.4s ease-in-out;
            border: none;
        }

        .send-btn:active {
            transform: scale(0.85);

        }

        .send-btn img {
            width: 100%;
            height: 80%;
            filter: hue-rotate(130deg);
            
        }

        /* chat box button section */
        .chat-btn {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #fff;
            cursor: pointer;
            overflow: hidden;
            position: fixed;
            bottom: 10px;
            right: 6em;
        }

        .chat-btn img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 0;
            padding: 5px;
            transition: 0.4s ease-in-out;
        }

        .chat-btn:hover img{
            transform: rotate(30deg);
        }
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

                        <li class="header__nav-item header__nav-item--bold header__nav-item--separate">
                            <a href="#" class="header__nav-item-link">Sign Up</a>
                        </li>
                        <li class="header__nav-item header__nav-item--bold">
                            <a href="#" class="header__nav-item-link">Sign In</a>
                        </li>

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

                        <a href="#" class="header__logo-link">
                            <!-- <img src="<?= base_url()?>/assets/img/logo/logo-full-white.png" class="header__logo-img"> -->
                            <img src="<?= base_url()?>/assets/img/logo/logo.png" class="header__logo-img">
                        </a>
                    </div>
                    <input type="checkbox" id="mobile-search" class="header__search-check" hidden>
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Enter to search for products:">
                            <div class="header__search-history">
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="#">Combo 30 điểm đại học khối A</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Combo 30 điểm đại học khối D</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Mỹ phẩm cho người yêu</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Bí kíp tán crush auto đổ</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Iphone 13 Pro Max giá rẻ</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="#">Người yêu đẹp trai như LTP</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
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
        <div class="container">
            <div class="grid wide">
                <div class="row sm-gutter product__background magazin__box" style="margin-bottom: 25px;">
                    <div class="col l-4" style="padding:0; background-color: rgba(139, 52, 52, 0.2); border-radius: 2px;">
                        <div class="shop__label">
							<img src="<?= base_url()?>/assets/img/magazin/1.jpg" alt="" class="img__shop">
							<div class="shop__name">
								<h3>theordinarystore.vn</h3>
								<span>Active 3 Hours Ago</span>
							</div>
						</div>
						<div class="shop__description" style="margin-bottom:10px">
							<button class="magazin__info-btn" style="width: 180px;  height: 25px; font-size: 1.2em">
								<i class="magazin__info-btn-icon fa-solid fa-plus"></i>
								<span class="magazin__info-btn-label">Follow</span>
							</button>
							<button class="magazin__info-btn" style="width: 180px; height: 25px; font-size: 1.2em">
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

                                <div class="btn home-filter-sort" style="min-width: 120px;">
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
                                <button class="btn home-filter-btn">Popular</button>
                                <button class="btn home-filter-btn">Latest</button>
                                <button class="btn home-filter-btn">bestseller</button>
                                <div class="btn home-filter-sort" style="min-width: 180px;">
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
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
                    <div class="col l-2 home-product-item">
                        <a class="home-product-item-link" href="#">
                            <div class="home-product-item__img" style="background-image: url(./assets/img/home/1.PNG);"></div>
                            <div class="home-product-item__info">
                                <h4 class="home-product-item__name">Ổ đĩa flash USB2.0 2TB Hp kim loại chống thấm nước</h4>
                                <div class="home-product-item__price">
                                    <p class="home-product-item__price-old">180USD</p>
                                    <p class="home-product-item__price-new">200USD</p>
                                    <i class="home-product-item__ship fas fa-shipping-fast"></i>
                                </div>
                                <div class="home-product-item__footer">
                                    <div class="home-product-item__save">
                                        <input type="checkbox" name="save-check" id="heart-save">
                                        <label for="heart-save" class="far fa-heart"></label>
                                    </div>
                                    <div class="home-product-item__rating-star">
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                        <i class="star-checked far fa-star"></i>
                                    </div>
                                    <div class="home-product-item__saled">Sold 3,8k</div>
                                </div>
                                <div class="home-product-item__origin">Saint Peterburg</div>
                                <div class="home-product-item__favourite">
                                    Yêu thích
                                </div>
                                <div class="home-product-item__sale-off">
                                    <div class="home-product-item__sale-off-value">40%</div>
                                    <div class="home-product-item__sale-off-label">GIẢM</div>
                                </div>
                            </div>
                            <div class="home-product-item-footer">Tìm sản phẩm tương tự</div>
                        </a>
                    </div>
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
            
			
        </div>
        
        <!-- container2 -->
        <div class="container2">
            <!-- Chat box -->
            <div class="chat-box">
                <!-- Client -->
                <div class="client">
                    <img src="https://image.thanhnien.vn/w1024/Uploaded/2022/wsxrxqeiod/2021_11_11/trieu-lo-tu-217.jpg" alt="logo">
                    <div class="client-info">
                        <h2>Trieu Lo Tu</h2>
                        <p>online</p>
                    </div>
                </div>
                <!-- main -->
                <div class="chats">
                    <div class="client-chat">Hi!</div>
                    <div class="my-chat">Hi!</div>
                    <div class="client-chat">How are you?</div>
                    <div class="my-chat">Fine, thanks</div>
                    <div class="client-chat">And you?</div>
                    <div class="my-chat">Good</div>
                </div>
    
                <!-- input field section -->
                <div class="chat-input">
                    <input type="text" placeholder="Enter message">
                    <button class="send-btn">
                        <!-- <i class="send-btn-icon fa-solid fa-paper-plane-top"></i> -->
                        <img src="https://cdn-icons-png.flaticon.com/512/6532/6532019.png" alt="send-btn">
                    </button>
                </div>
            </div>
            <!-- button -->
            <div class="chat-btn">
                <img src="https://cdn-icons-png.flaticon.com/512/134/134914.png" alt="chat box icon btn">
            </div>
        </div>
        <!-- footer -->
        <footer class="footer">
            <!-- main footer -->
            <div class="main-footer">
                <div class="grid wide">
                    <div class="row sm-gutter main-footer-info">
                        <div class="col l-2-4 m-4 c-6">
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
                        <div class="col l-2-4 m-4 c-6">
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
                        <div class="col l-2-4 m-4 c-12 pay-and-ship">
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
                        <div class="col l-2-4 m-4 c-6">
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
                        <div class="col l-2-4 m-8 c-6">
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
                $(".chat-box").slideToggle("slow");
            })
        })
    </script>

</body>

</html>