<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Donut</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/login-base.css">
    <link rel="stylesheet" href="./assets/css/login-main.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page-login">
        <!-- Header Begin-->
        <header class="header">
            <div class="grid">
                <div class="header__navbar">
                    <div class="logo">
                        <a href="" class="logo-link">
                            <img src="./assets/img/logo-no-color.png" alt="" class="logo-img">
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
            <!-- REGISTER -->
            <div class="container__box" id="regis-box">
                <form name="regis-form" method="post">
                    <h2>REGISTER</h2>
                    <input type="text" class="form-input" placeholder="Your name" name="fullname" value="<?= set_value('fullname') ?>">
                    <div><?= loadError($validation, 'fullname') ?></div>
                    <input type="text" class="form-input" placeholder="Your username" name = "username" value="<?= set_value('username') ?>">
                    <div><?= loadError($validation, 'username') ?></div>
                    <input type="tel" class="form-input" placeholder="Your phone number" name = "phonenumber" value="<?= set_value('phonenumber') ?>">
                    <div><?= loadError($validation, 'phonenumber') ?></div>
                    <input type="email" class="form-input" placeholder="Your email" name = "email" value="<?= set_value('email') ?>">
                    <div><?= loadError($validation, 'email') ?></div>
                    <input type="password" class="form-input" placeholder="Your password" name = "password" value="<?= set_value('password') ?>">
                    <div><?= loadError($validation, 'password') ?></div>
                    <input type="password" class="form-input" placeholder="Confirm password" name = "repassword" value="<?= set_value('repassword') ?>">
                    <div><?= loadError($validation, 'repassword') ?></div>
                    <div class="form-term">
                        <input type="checkbox" name="confirm" id="" value="confirm">
                        I agree to these <a href="">terms</a>
                        <div><?= $smg ?></div>
                    </div>
                    <input type="submit" class="btn form-btn" value="Register">
                </form>
                <p class="form-nav">Already have an account? <a class="form-nav-link" href="<?= base_url().'/login' ?>" onclick="navLogin()">Login</a></p>
            </div>
        </div>
        <!-- Container End-->

        <!-- Footer Begin-->
        <footer class="footer">
            <p class="footer-copyright">Copyright @wework 2022 | Privacy Policy</p>
        </footer>
        <!-- Footer End-->
    </div>    

    <!-- <script>
        function navRegis(){
            var formRegis=document.getElementById("regis-box");
            var formLogin=document.getElementById("login-box");
            
            formRegis.style.display="block";
            formLogin.style.display="none";
        }

        function navLogin(){
            var formRegis=document.getElementById("regis-box");
            var formLogin=document.getElementById("login-box");
            
            formRegis.style.display="none";
            formLogin.style.display="block";
        }
    </script> -->
</body>
</html>