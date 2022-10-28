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

        

        .container2 {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Chat box section */
        .chat-box1 {
            width: 400px;
            height: 500px;
            background-color: #fff;
            overflow: hidden;
            border-radius: 15px;
            position: fixed;
            right: calc(5em + 300px + 10px);
            bottom: 90px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            z-index: 10;
            
        }

        .chat-box2 {
            width: 300px;
            height: 500px;
            background-color: #fff;
            overflow: hidden;
            border-radius: 15px;
            position: fixed;
            right: 5em;
            bottom: 90px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            z-index: 10;
            color: black;
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



        .chat {
            margin-top: auto;
            margin-bottom: auto;
        }

        .card {
            height: 500px;
            border-radius: 15px !important;
            /* background-color: var(--header-color); */
        }

        .contacts_body {
            padding: 0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }

        .msg_card_body {
            overflow-y: auto;
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
            background-color: var(--header-color);
        }

        .card-footer {
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }

        .container {
            align-content: center;
        }

        .search {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            font-size: 1.4rem;
        }

        .search::placeholder {
            color: white !important;
        }

        .search:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .type_msg {
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            height: 60px !important;
            overflow-y: auto;
            font-size: 1.4rem;
        }

       

        .type_msg:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .attach_btn {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
            font-size: 1.8rem;
        }

        .send_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
            font-size:3rem;
        }

        .search_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
            font-size: 1.4rem;
        }

        .contacts {
            list-style: none;
            padding: 0;
        
        }

        .contacts li {
            width: 100% !important;
            height: 66px;
            /* padding: 0 0px 2px px; */
            margin-bottom: 6px !important;
            
        }

        .active {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .user_img {
            height: 60px;
            width: 60px;
            /* border: 50% solid #f5f6fa; */
            background-image: radial-gradient(circle, #456BD9, #456BD9 66%, transparent 66%);
            
        }

        .user_img_msg {
            height: 40px;
            width: 40px;
            border: 1.5px solid #f5f6fa;
        }

        .img_cont {
            position: relative;
            height: 70px;
            width: 70px;
            margin-left: 10px;
        }

        .img_cont_msg {
            height: 40px;
            width: 40px;
        }

        .online_icon {
            position: absolute;
            height: 15px;
            width: 15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 13px;
            right: 13px;
            border: 1.5px solid white;
        }

        .offline {
            background-color: #c23616 !important;
        }

        .user_info {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }

        .user_info span {
            font-size: 1.8rem;
            color: white;
        }

        .user_info p {
            font-size: 12px;
            color: white;
            opacity: 0.6;
        }

        .user_info-searched {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }

        .user_info-searched span {
            font-size: 1.8rem;
            color: black;
        }

        .user_info-searched p {
            font-size: 12px;
            color: black;
            opacity: 0.6;
        }

        .video_cam {
            margin-left: 50px;
            margin-top: 5px;
        }

        .video_cam span {
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin-right: 20px;
        }

        .msg_cotainer {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
            position: relative;
            font-size: 1.4rem;
        }

        .msg_cotainer img {
            width: 200px;
            height: auto;
        }

        .msg_cotainer_send {
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 25px;
            background-color: #78e08f;
            padding: 10px;
            position: relative;
            font-size: 1.4rem;
        }

        .msg_cotainer_send img {
            margin-top: auto;
            margin-bottom: auto;
            width: 200px;
            height: auto;
            border-radius: 0;
            padding: 10px;
            position: relative;
            font-size: 1.4rem;
        }

        .msg_time {
            position: absolute;
            left: 0;
            bottom: -15px;
            color: black;
            font-size: 10px;
        }

        .msg_time_send {
            position: absolute;
            right: 0;
            bottom: -15px;
            color: black;
            font-size: 10px;
        }

        .msg_head {
            position: relative;
        }

        #action_menu_btn {
            position: absolute;
            right: 10px;
            top: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }

        .action_menu {
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            right: 15px;
            display: none;
            font-size: 20px;
        }

        .action_menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .action_menu ul li {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
        }

        .action_menu ul li i {
            padding-right: 10px;
        }

        .action_menu ul li:hover {
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.2);
        }


        /* width */

        ::-webkit-scrollbar {
            width: 10px;
        }


        /* Track */

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }


        /* Handle */

        ::-webkit-scrollbar-thumb {
            background: #888;
        }


        /* Handle on hover */

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .magazin__info-btn:hover {
            cursor: pointer;
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
        <div class="container-fluid" style="background-color: rgb(245,245,245); padding-top: 24px;">
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
							<li>
								<div class="d-flex bd-highlight active">
									<div class="img_cont">
										<img src="data:image/jpeg;base64,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" class="rounded-circle user_img">
										<span class="online_icon"></span>
									</div>
									<div class="user_info-searched">
										<span>Địch Lệ Nhiệt Ba</span>
										<p>Online</p>
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
										<span>Angela Baby</span>
										<p>Left 50 mins ago</p>
									</div>
								</div>
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

</body>

</html>