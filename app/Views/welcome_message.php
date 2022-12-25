
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Donut</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="icon" href=" <?= base_url()?>/assets/img/logo/logo-web.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href=" <?= base_url()?>/assets/css/base.css">
    <link rel="stylesheet" href=" <?= base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href=" <?= base_url()?>/assets/css/grid.css">
    <link rel="stylesheet" href=" <?= base_url()?>/assets/css/home__search_result.css">
    <link rel="stylesheet" href=" <?= base_url()?>/assets/css/responsive.css">
    <link rel="stylesheet" href=" <?= base_url()?>/assets/css/reviewIMG.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        .Shop__related-to--keyword__search,
        .home-search__result-shop,
        .Product__related-to--keyword__search {
            display: flex;
            /* display:none; */
        }
        .home-product-item-link:hover {
            text-decoration: none;
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

        .shortenedSelect {
            max-width: 190px;
        }

        select {
            display: block;
            width:190px;
            height: 25px; 
            font-size: 16px;
            white-space: wrap;
            position: relative;
        }

        select option {
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }


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

        .input-images__msg{
            width: 100%;
            margin: 0px auto;
            /* padding: 20px 5px; */
            height: auto;
            background-color: rgb(243,245,246);
        }

        input[type="file"] {
            display: none;
        }

        /* .push__comment-img label {
            display: block;
            position: relative;
            background-color : var(--header-color);
            width: 15%;
            height: 30px;
            color: white;
            font-size: 16px;
            text-align: center;
            margin: 10px auto;
            border-radius:4px;            


        } */

        textarea::placeholder {
            color: white !important;
            padding-top: 2px;
        }

        

        

        .input-images__msg{
            width: 100%;
            margin: 0px auto;
            /* padding: 20px 5px; */
            height: auto;
            background-color: rgb(243,245,246);
        }

        #input-img__msg {
            display: flex;
            width: 100%;
            /* height: 50px; */
            border: 2px solid rgba(208,1,27,1);
            border-radius: 10px;
            position: relative;
            margin: 0 auto 4px;
            justify-content: flex-start;
            gap: 3px;
            flex-wrap: nowrap;
            overflow-x: auto;
            background-color: rgb(243,245,246);
        }


        figure {
            margin-top: 5px;
            width: 20%;
            
        }
        
        img {
            border-radius: 5px;
            width: 100%;
            margin-bottom: 5px;
            margin-left: 4px;
       
        }

        figcaption {
            text-align: center;
            font-size: 1.4rem;
            margin-top: 1px;
        }

        figcaption_msg {
            display: none;
        }
        
        
        .header__cart--has-cart .header__cart-icon:hover~.header__cart-list.has-cart,
        .header__cart--has-cart .header__cart-count:hover~.header__cart-list.has-cart,
        .header__cart--has-cart .header__cart-list.has-cart:hover {
            display: flex;
        }

        .header__cart--has-cart .header__cart-icon:hover~.header__cart-list.no-cart,
        .header__cart--has-cart .header__cart-list.no-cart:hover{
            display: flex;
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
                <nav class="header__navbar hide-on-mobile-tablet" style="padding-top: 10px;">
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__nav-item--hover header__nav-item--separate">Welcome <?php if(session()->has('loged_user')) echo $user['fullname']; ?>!</li>
                       
                        <div class="header__qrcode">
                            <img src=" <?= base_url()?>/assets/img/qr/qr-code.png" class="header__qr">
                            <div class="header__apps">
                                <a href="#" class="header__app-link">
                                    <img src=" <?= base_url()?>/assets/img/qr/app-store.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src=" <?= base_url()?>/assets/img/qr/gg-play.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src=" <?= base_url()?>/assets/img/qr/app-gallery.png" class="header__app-img">
                                </a>
                                <a href="#" class="header__app-link">
                                    <img src=" <?= base_url()?>/assets/img/qr/ltp-img.png" class="header__app-img">
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
                                <!-- nếu có thông báo thì thêm class "rung" vào dòng lệnh i-->
                                <!-- <i class="header__nav-icon far fa-bell rung"></i>  -->
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
                                            <img src=" <?= base_url()?>/assets/img/sp/casio.png" class="header__notifi-img">
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
                                            <img src=" <?= base_url()?>/assets/img/sp/iphone.png" class="header__notifi-img">
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
                                            <img src=" <?= base_url()?>/assets/img/sp/iphone2.png" class="header__notifi-img">
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
                                            <img src=" <?= base_url()?>/assets/img/sp/laptop.png" class="header__notifi-img">
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
                                            <img src=" <?= base_url()?>/assets/img/sp/laptop2.png" class="header__notifi-img">
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
                            <img src=" <?= base_url()?>/assets/img/logo/logo.png" class="header__logo-img">
                        </a>
                    </div>
                    <input type="checkbox" id="mobile-search" class="header__search-check" hidden>
                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" placeholder="Enter to search for products:" id = 'searchproduct' autocomplete="off">
                            <div class="header__search-history" >
                                <ul class="header__search-history-list hintsforproduct">
                                   
                                </ul>
                            </div>
                        </div>
                        <button class="btn header__search-btn" id="clicksearch">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>
                    <!-- header__cart--no-cart --><!-- header__cart--has-cart -->
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
        <!-- container -->
        <div class="container-fluid">
            <div class="grid wide" style="background-color: rgb(245,245,245);">
                <div class="row sm-gutter">
                    <div class="col c-12">
                        <!-- <div class="home__slide-img">
                            <img id="img" onclick = "changeImg()" src=" <?= base_url()?>/assets/img/slide home/1.png" alt="" class="img-feature">
                        </div> -->
                        <!--image slider start-->
                        <div class="slider" style="margin-top: 20px; margin-bottom: 12px;">
                            <div class="slides">
                                <!--radio buttons start-->
                                <input type="radio" name="radio-btn" id="radio1">
                                <input type="radio" name="radio-btn" id="radio2">
                                <input type="radio" name="radio-btn" id="radio3"> 
                                <input type="radio" name="radio-btn" id="radio4">
                                <!--radio buttons end-->
                                <!--slide images start-->
                                <div class="slide first">
                                    <img src=" <?= base_url()?>/assets/img/slide home/cake01.jpg" alt="">
                                </div>
                                <div class="slide">
                                    <img src=" <?= base_url()?>/assets/img/slide home/cake02.jpg" alt="">
                                </div>
                                <div class="slide">
                                    <img src=" <?= base_url()?>/assets/img/slide home/2.png" alt="">
                                </div>
                                <div class="slide">
                                    <img src=" <?= base_url()?>/assets/img/slide home/3.png" alt="">
                                </div>
                                <!--slide images end-->
                                <!--automatic navigation start-->
                                <div class="navigation-auto">
                                    <div class="auto-btn1"></div>
                                    <div class="auto-btn2"></div>
                                    <div class="auto-btn3"></div>
                                    <div class="auto-btn4"></div>
                                </div>
                                <!--automatic navigation end-->
                                </div>
                                <!--manual navigation start-->
                                <div class="navigation-manual">
                                    <label for="radio1" class="manual-btn"></label>
                                    <label for="radio2" class="manual-btn"></label>
                                    <label for="radio3" class="manual-btn"></label>
                                    <label for="radio4" class="manual-btn"></label>
                                </div>
                            <!--manual navigation end-->
                            </div>
                        <!--image slider end-->

                        </div>
                    </div>
                <div class="row sm-gutter">
                    <div class="col l-2 m-0 c-0">
                        <!-- category -->
                        <nav class="category" style="padding-left: 8px;">
                            <h3 class="category-heading">
                                <i class="category-heading-icon fas fa-list-ul"></i>
                                Menu
                            </h3>
                            <!-- <form action="<?= base_url().'/home/showByRequset'?>" method="get"> -->
                                <div class="category-group">
                                <div class="category-group-title">Product categories</div>
                                <ul class="category-group-list">
                                    <?php foreach ($menuType as  $value): ?>
                                        <li class="category-group-item">
                                            <input type="checkbox" class="category-group-item-check type" onclick="myFunction()" value = "<?= $value['type']?>" >
                                               <?= $value['type']?>
                                        </li>
                                    <?php endforeach ?>
                                    
                                    </ul>
                                </div>
                                <div class="category-group">
                                    <div class="category-group-title">Place of sale</div>
                                    <ul class="category-group-list">
                                         <?php foreach ($menuAddress as  $value): ?>
                                            <li class="category-group-item">
                                            <input type="checkbox" class="category-group-item-check address" onclick="myFunction()" value = "<?= $value['address']?>">
                                                <?= $value['address']; ?>
                                            </li>
                                        <?php endforeach ?>
                                        
                                    </ul>
                                </div>
                                <div class="category-group">
                                    <div class="category-group-title">Price Range</div>
                                    <div class="category-group-filter">
                                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  placeholder="From" class="category-group-filter-input" id = 'minprice'>
                                        <i class="fas fa-arrow-right"></i>
                                        <input oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  placeholder="To" class="category-group-filter-input" id ="maxprice" >

                                    </div>
                                    <br>
                                    <div id = "loadError" class="error_input"></div>
                                </div>
                                <button class="btn btn--brown category-group-filter-btn" id = 'reloadData'>APPLY</button>
                            <!-- </form> -->
                            <!-- <div class="category-group">
                                <div class="category-group-title">Loại Shop</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shoppee
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shoppee Mail
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Shop yêu thích
                                    </li>
                                </ul>
                            </div> -->
                            <!-- <div class="category-group">
                                <div class="category-group-title">Lựa Chọn Thanh Toán</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Thanh toán khi nhận hàng
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Chuyển khoản
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Trả góp 0%
                                    </li>
                                </ul>
                            </div> -->
                            <div class="category-group">
                                <div class="category-group-title">Ratings</div>
                                <div class="rating-star">
                                    <input type="checkbox" id = ""  onclick="myFunction()" value="5" class="category-group-item-check star-checked">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" id = "star-checked"  onclick="myFunction()" value="4"  class="category-group-item-check star-checked">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" id = "star-checked"  onclick="myFunction()" value="3"  class="category-group-item-check star-checked">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" id = "star-checked"  onclick="myFunction()" value="2"  class="category-group-item-check star-checked">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                                <div class="rating-star">
                                    <input type="checkbox" id = "star-checked"  onclick="myFunction()" value="1"  class="category-group-item-check star-checked">
                                    <i class="star-checked far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                    <i class="star-uncheck far fa-star"></i>
                                </div>
                            </div>
                            <!-- <div class="category-group">
                                <div class="category-group-title">Dịch Vụ & Khuyến Mãi</div>
                                <ul class="category-group-list">
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Freeship Xtra
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Hoàn xu Xtra
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Đang giảm giá
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Miễn phí vận chuyển
                                    </li>
                                    <li class="category-group-item">
                                        <input type="checkbox" class="category-group-item-check">
                                        Gì cũng rẻ
                                    </li> 
                                </ul>
                            </div> -->
                            <button class="btn btn--brown category-group-filter-btn category-group--margin">CLEAR ALL</button>
                        </nav>
                    </div>
                    <div class="col l-10 m-12 c-12">
                        <!-- shop liên quan đến từ khóa tìm kiếm-->
                        <div id = "shop-related">
                            
                        </div>

                        <!-- home filter -->
                        <div class="home-filter hide-on-mobile-tablet">
                            <div class="home-filter-control">
                                <p class="home-filter-title" style="margin-bottom:0;">Sorted by:</p>
                                <button class="btn btn--brown home-filter-btn type-sort" id = "sortByTime1" value="sold">Oldest</button>
                                <button class="btn home-filter-btn" value="pid" id = "sortByTime">
                                    Latest
                                </button>
                                <button class="btn home-filter-btn" id = "sortBySold">Bestseller</button>
                                <div class="btn home-filter-sort" style="width:220px;">
                                    <p class="home-filter-sort-btn" style="margin-bottom:0;">Price</p>
                                    <i class="fas fa-sort-amount-down-alt"></i>
                                    <ul class="home-filter-sort-list">
                                        <li>
                                            
                                            <button class="btn home-filter-btn" id = "sortByPriceDESC" value="price" >
                                               Price: Hight to low
                                            </button>
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                            
                                        </li>
                                        <li>
                                            <button class="btn home-filter-btn" value="price" id = "sortByPriceESC">
                                               Price: Low to hight
                                            </button>
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <!-- home product -->
                        <div class="home-product">
                            
                            <div id="list-product" class="row sm-gutter loadProduct">
                               
                            </div>
                       
                        <!-- pagination -->
                       
                            <ul class="pagination home-product-pagination" id = "page">
                            
                        
                
                            </ul>
                     
                    </div>
                </div>
            </div>
        </div>
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
                            <div class="input-images__msg">
                                <div id="input-img__msg"></div>
                            </div>
                            <div class="input-group-append" style="width:10%;">
                                <input type="file" id = 'input-file' accept="image/png, image/jpeg, image/jpg" multiple onchange="preview__msg()" name = 'files[]'>
                                <label for="input-file" id = 'lfpushproduct' class="input-group-text attach_btn" style="height: 60px;">
                                    <span><i class="fas fa-paperclip"></i></span> 
                                </label>
                            </div>
                            <input type="text" name='idsend' value="<?= session()->get('loged_user');?>" hidden>
                            <input type="text" name='idget' id="sendto" value="" hidden>
                            <textarea name="msg" class="form-control type_msg" id = "form-control" placeholder="Type your message..." style="padding: 14px 0; height: 100%;"></textarea>
                            <div class="input-group-append" style="height: 60px;">
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
                            <div class="col l-2-4" style="margin-left:15px;">
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
                                        <img src=" <?= base_url()?>/assets/img/pay/1.PNG" class="footer-item-sale-ship">
                                        <img src=" <?= base_url()?>/assets/img/pay/2.PNG" class="footer-item-sale-ship">
                                                                       
                                    </div>
                                </div>
                        
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
    <!-- <script src=" <?= base_url()?>/assets/js/product.js"></script> -->


    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);
    </script>
    <!-- lay du lieu cho tung chuc nang -->
    <script>
        $(document).load(function() {
           console.log(1);
        });
        $(document).ready(function() {
            $(document).on('click', '#sortByTime', function() {
                callLoadData('home/showByRequset'+'/'+$('#sortByTime').val(), new URL(document.URL).searchParams.get('page'));
            });
             $(document).on('click', '#sortByTime1', function() {
                callLoadData('home/showByRequset'+'/'+$('#sortByTime').val()+'/DESC', new URL(document.URL).searchParams.get('page'));
            });
            $(document).on('click', '#reloadData', function() {
                callLoadData('home/showByRequset');
            });
            $(document).on('click', '#clicksearch', function() {
                searchData('home/showByRequset');
            });
            $(document).on('click', '#sortBySold', function() {
                callLoadData('home/showByRequset/sold/DESC', new URL(document.URL).searchParams.get('page'));
            });
            $(document).on('click', '#pageclick', function() {
                let url = $('#pageclick').val();
                callLoadData(url);
            });
            $(document).on('click', '#sortByPriceDESC', function() {
                callLoadData('home/showByRequset'+'/'+$('#sortByPriceDESC').val()+'/DESC', new URL(document.URL).searchParams.get('page'));
            });
             $(document).on('click', '#sortByPriceESC', function() {
                callLoadData('home/showByRequset'+'/'+$('#sortByPriceESC').val()+'/ESC', new URL(document.URL).searchParams.get('page'));
            });
        });
         
        $(document).ready(function() {
            var curl = new URL(document.URL);
            if(curl.searchParams.get('keyword')){
                callLoadData("<?= base_url().'/home/showByRequset'?>");
            }
            else  loadProduct("", "get", "<?= base_url().'/home/fetch'?>");
        });
        function callLoadData(url, page, data) {
            var curl = new URL(document.URL);
            let keyWord = curl.searchParams.get('keyword');
            let minprice = Number($('#minprice').val());
            let maxprice = Number($('#maxprice').val());
            if(minprice > maxprice) {
                error = "Please enter a valid value";
                $('#loadError').text(error);
            } else {
                error = " ";
                $('#loadError').text(error);
                let address = [];
                let type = [];
                    $('.address').each(function() {
                        if($(this).is(":checked"))
                        address.push($(this).val());
                    });
                    $('.type').each(function() {
                        if($(this).is(":checked"))
                            type.push($(this).val());
                    }); 
                let star = [];
                $('.star-checked').each(function() {
                        if($(this).is(":checked"))
                            star.push($(this).val());
                    });                    
                    let data = {
                        'type' : type,
                        'address' : address,
                        'star' : star,
                        'minprice': minprice,
                        'maxprice': maxprice,
                        'keyword': keyWord,
                        'page' : page,

                    };
                    loadProduct(data, "get", url); 
                } 
        }
        function searchData(url) {
           let data = { 
                'keyword' : $('#searchproduct').val()
            }
            loadProduct(data, "get", url);
            
        }
    </script>
    <!-- show du lieu sau khi lay duoc tu DB -->

    <script>
        function loadProduct(pdata, ptype, url) {
            $.ajax({
                url: url,
                data: pdata,
                type: ptype,
                async: true,
                success: function (response) {
                    $('.loadProduct').html("");
                    $('#page').html("");
                   
                    if(response.shop !== undefined) {
                        $('#shop-found').html('');
                        $('#shop-related').html('');
                        $('#shop-related').append('<h4 class="Shop__related-to--keyword__search" >Shop related to "<span class="keyword__search"></span>"</h4>\
                            <div id ="shop-found">\
                            </div>');
                        response.shop.forEach((item, index) => {
                            console.log(index);
                            $('#shop-found').append(item);
                            $('.keyword__search').text(pdata.keyword);
                        })
                    }                      
                    if (response.products !== null) {
                        window.history.pushState('', '', response.currentRequest1);
                        $.each(response.output , function(index, value) {
                            $('.loadProduct').append(value);
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
</script>
<!-- thanh tim kiem san pham -->
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
                                <a href='<?=base_url('showProduct?id=')?>"+val.pid+"'>"+val.nameproduct+"</a>\
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
        let bigImg = document.querySelector('.big__img img')
        function showImg(pic) {
            bigImg.src = pic;
        }

        $(document).ready(()=>{
            loadCartShopping()
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

                loadChat(curl.searchParams.get('sellerID'));
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
                    $(".msg_card_body").scrollTop($(".msg_card_body")[0].scrollHeight);
                    document.getElementById("input-img__msg").innerHTML = "";
                }
            });
        }

    </script>
</script>

<script>
    let fileInput__msg = document.getElementById("input-file");
    let imageContainer__msg = document.getElementById("input-img__msg");
    
    function preview__msg() {
        imageContainer__msg.innerHTML = "";
        // let numOfFiles = ${fileInput.files.length};
        for (i of fileInput__msg.files) {
            let reader__msg = new FileReader();
            let figure__msg = document.createElement("figure");
            let figCap__msg = document.createElement("figcaption_msg");
            figCap__msg.innerText = i.name;
            figure__msg.appendChild(figCap__msg);
            reader__msg.onload =() => {
                let img__msg = document.createElement("img");
                img__msg.setAttribute("src", reader__msg.result);
                // /figure__msg.insertBefore(img__msg, figCap__msg);
                figure__msg.insertBefore(img__msg, figCap__msg);
            }
            imageContainer__msg.appendChild(figure__msg);
            reader__msg.readAsDataURL(i);
        }
        
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
    function myFunction() {
        callLoadData('home/showByRequset');
    }
</script>

<script>
    const btnRate = Array.from(document.querySelectorAll('.btn.home-filter-btn'));
    btnRate.forEach((btns) => {
        btns.addEventListener('click', () => {
            btnRate.forEach((btns) => {
                btns.classList.remove('btn--brown');
            });
            btns.classList.add('btn--brown');
        });
    });
</script>


</body>
</html>