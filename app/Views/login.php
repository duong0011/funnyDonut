<?php $p_session = \Config\Services::session()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Donut</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href=" <?= base_url()?>/assets/css/login-base.css">
    <link rel="stylesheet" href=" <?= base_url()?>/assets/css/login-main.css">
    <link rel="stylesheet" href=" <?= base_url()?>/assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <style>
        /* modal forget pwd */
        .modal{
            display: none;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
            align-items: center;
            justify-content: center;
        }

        .modal-pwd.open{
            display: flex;
        }

        .modal-pwd-forget {
            position: relative;
            /* min-width: 500px; */
            border: 3px solid var(--primary-color);
            background-color: #fff;
            border-radius: 15px;
            padding: 40px 33px 30px;
            padding-top: 40px;
            box-shadow: 0 0 8px var(--primary-color);
        }

        input {
            width: 300px;
            font-size: 1.4rem;
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 3px;
            margin: 5px;
            outline: none;
        }

        .submit{
            background-color: rgb(130, 53, 53);
            color: white;
            width: 90px;
        }

        .submit:hover {
            cursor: pointer;
            opacity: 0.9;
        }

        .check-mail {
            margin-bottom: 20px;
        }

        .check-mail .symbol-checked {
            font-size: 1.8rem;
            color: var(--primary-color);
        }

        .icon-close {
            position: absolute;
            top: 12px;
            right: 12px;
            font-size: 2rem;
            color: var(--primary-color);
        }

        .icon-close:hover {
            cursor: pointer;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="page-login">
        <!-- Header Begin-->
        <header class="header">
            <div class="grid">
                <div class="header__navbar">
                    <div class="logo">
                        <a href="<?= base_url().'/home' ?>" class="logo-link">
                            <img src=" <?= base_url()?>/assets/img/logo-no-color.png" alt="" class="logo-img">
                        </a>
                    </div>
                    <div class="navbar__item">
                        <span class="navbar__item-contact">Need help? Contact us</span>
                        <a href="" class="navbar__item-contact-link">
                            <i class="navbar__item-contact-link-icon fa-brands fa-vk"></i>
                        </a>
                        <a href="" class="navbar__item-contact-link-icon navbar__item-contact-link">
                            <i class="fa-brands fa-square-instagram"></i>
                        </a>
                        <a href="" class="navbar__item-contact-link-icon navbar__item-contact-link">
                            <i class="fa-brands fa-telegram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End-->

        <!-- Container Begin-->

        <div class="container">
            <!-- LOGIN -->
            <div class="container__box" id="login-box">
                <form name="login-form" method="post">
                    <h2>LOGIN</h2>
                    <?php if($p_session->get('success')): ?>
                        <div class="alert-success" ><?= $p_session->get('success') ?></div>
                        <?php $p_session->remove('success')?>
                    <?php endif ?>
                    <?php if(isset($validation)): ?>
                        <div class="error"> <?= $validation->listErrors()?></div>
                    <?php endif?>
                    
                    <input type="text" class="form-input login-name" placeholder="Enter username" name = "username">
                    <input type="password" class="form-input login-password" placeholder="Enter password" name = "password">
                    <?php if(isset($loginButton)): ?>
                        <div class="login-google">
                            <span>Login with<a href="<?= filter_var($loginButton, FILTER_SANITIZE_URL) ?>"><i class="fa-brands fa-google"></i></a></span>
                        </div>
                    <?php endif ?>
                    <a href="#" class="login-pass-forget" onclick="open_modal()">Forget password?</a>
                    <input type="submit" class="btn form-btn" value="Login">
                </form>
                <p class="form-nav">Don't have an account? <a class="form-nav-link" href="<?= base_url().'/register' ?>">Register</a></p>
            </div>

        </div>
        <!-- Container End-->

        <!-- Footer Begin-->
        <footer class="footer">
            <p class="footer-copyright">Student of ITMO university</p>
        </footer>
        <!-- Footer End-->
    </div>    

    <!-- MODAL FORGET PASSWORD -->
    <div class="modal modal-pwd">
        <div class="modal-pwd-forget">
            <i class="fa-solid fa-xmark icon-close" onclick="close_modal()"></i>
            <br>
            <form action="" method="post" class="check-mail">
                <input type="text" name="" id="" placeholder="Enter email to verify identity">
                <!-- <input class= "submit" type="submit" value="Send"> -->
                <i class="symbol-checked fa-solid fa-circle-check"></i>
            </form>
            <form action="" method="post">
                <input type="text" name="" id="" placeholder="Enter new password">
                <br>
                <input type="text" name="" id="" placeholder="Enter again new password">
                <br>
                <input class= "submit" type="submit" value="Confirm">
            </form>
        </div>
    </div>

    <!-- JS pwd forget -->
    <script>
        const modalPwd = document.querySelector('.modal-pwd');
        function open_modal(){
            modalPwd.classList.add('open');
        }

        function close_modal(){
            modalPwd.classList.remove('open');
        }
    </script>
</body>
</html>