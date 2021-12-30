<?php require_once './tpl/head.php' ?>
<style>
    <?php require_once './tpl/global-style.css' ?> 

    :root {
        /* ----------color---------- */
        --brand-color: #F53D3D;
        --bg-color: #121212;
        --card-color: #202020;

        /* ----------line height---------- */
        --line-height-140: 140%;
        --line-height-160: 160%;

        /* ----------border radius---------- */
        --border-radius-4: .25rem;
        --border-radius-8: .5rem;
        --border-radius-50: 3.125rem;
        --border-radius-50-percent: 50%;

        /* ----------opacity---------- */
        --opacity-90: .90;
        --opacity-75: .75;
        --opacity-50: .50;
        --opacity-25: .25;
        --opacity-10: .10;

        /* ----------box shadow red---------- */
        --box-shadow-red: 0px 0px 16px 4px rgba(245, 61, 61, 0.25);
        --box-shadow-black: 0px 0px 24px 0px rgba(0, 0, 0, 0.75);
        --box-shadow-black2: 0px 0px 32px 0px rgba(0, 0, 0, 0.75);
    }

    body {
        background-color: var(--bg-color);
        width: 100%;
        height: 500vh;
    }

    .sub-title-r {
        line-height: 170%;
    }

    .btn, .btn:focus {
        box-shadow: none;
    } 

    /* -----------------movinon navbar----------------- */
    .movinon-navbar {
        background-color: rgba(18, 18, 18, 0.5);
        width: 100%;
        position: fixed;
        top: 0%;
        z-index: 9999;
    }

    .movinon-navbar .sub-title-r { letter-spacing: 1px; }
    .movinon-navbar .dropdown-toggle::after { content: none; }

    .movinon-navbar .movinon-logo { max-width: 202px; }
    .movinon-logo img { width: 100%; }

    .movinon-navbar .row {
        padding-top: 12px;
        padding-bottom: 12px;
    }

    /* -----------------options----------------- */
    .movinon-navbar .options li {
        display: block;
        padding: 1rem;
        position: relative;
        text-decoration: none;
        transition-duration: 0.5s;
    }

    .options li a {
        color: #fff;
    }

    .movinon-navbar .options li:hover,
    .movinon-navbar .options li:focus-within {
        background: tomato;
    }

    .movinon-navbar .options li:focus-within a {
        outline: none;
    }

    .movinon-navbar .options ul li .dropdown {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        transition: all 0.5s ease;
        margin-top: 1rem;
        left: 0;
        display: none;
    }

    .movinon-navbar .options ul li:hover>ul,
    .movinon-navbar .options ul li:focus-within>ul,
    .movinon-navbar .options ul li .dropdown:hover,
    .movinon-navbar .options ul li .dropdown:focus {
        visibility: visible;
        opacity: 1;
        display: block;
    }

    .movinon-navbar .options ul li .dropdown li {
        width: 100%;
    }

    .movinon-navbar .fa-chevron-down {
        margin-left: 8px;
    }

    /* -----------------navbar icons----------------- */
    .movinon-navbar .navbar-icons .img-wrap1 {
        width: 90%;
        object-fit: cover;
        object-position: 50% 50%;
    }

    .movinon-navbar .navbar-icons .img-wrap2 {
        width: 50%;
        object-fit: cover;
        object-position: 50% 50%;
    }

    .movinon-navbar .img-wrap2 a {
        padding-bottom: 0px;
    }

    .movinon-navbar .navbar-icons .img-wrap img {
        width: 100%;
        height: 100%;
    }

    /* -----------------dropdown menu----------------- */
    .movinon-navbar .dropdown-menu {
        background-color: rgba(32,32,32,0.75);
        margin-right: 72px;
        padding: 24px 20px;
        text-align: center;
    }

    .movinon-navbar .modal-content {
        background-color: rgba(32,32,32,0.75);
        background-clip: border-box;
        border: none;
        border-radius: var(--border-radius-8);
        margin-top: 216px;
        width: 100%;
    }

    .movinon-navbar .form-control {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid white;
        border-radius: 0;
    }

    .movinon-navbar .modal-body {
        padding: 32px 48px;
    }

    .movinon-navbar .modal-content .btn {
        background-color: var(--brand-color);
        color: white;
        font-weight: 700;
        box-shadow: var(--box-shadow-red);
        padding: 4px 56px;
        border-radius: var(--border-radius-50);
        margin-top: 24px;
    }

    .movinon-navbar .modal-content .modal-body .col-6 {
        display: flex;
        align-items: end;
    }

    .movinon-navbar .modal-content .modal-body .col-6:nth-last-child(1) {
        opacity: var(--opacity-75);
    }

    .movinon-navbar .modal-content .modal-header { border-bottom: none; }

    .movinon-navbar .modal-content .modal-title {
        font-size: 34px;
        font-weight: 500;
        margin-left: 40px;
        margin-top: 32px;
        margin-right: 12px;
    }

    .movinon-navbar .modal-content .Login {
        font-size: 20px;
        font-weight: 400;
        margin-top: 36px;
    }

    .movinon-navbar .modal-content .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1;
        color: #fff;
        text-shadow: none;
        opacity: .5;
        font-family: 'Roboto', 'sans-serif';
        margin-top: 12px;
        margin-right: 12px;
    }

    .movinon-navbar .modal-content .form-control {
        color: white;
    }

    /* ----------------------------top five---------------------------- */
    .top-five {
        margin-bottom: 144px;
    }

    .top-five .subtitle {
        margin-top: 200px;
        margin-bottom: 32px;
    }

    .top-five .subtitle .red-line, 
    .top-five .subtitle .section-header-b {
        margin: auto 20px auto 0px;
    }

    .top-five .img-wrap {
        width: 100%;
    }

    .top-five .img-wrap img {
        width: 100%;
        height: 100%;
        border-radius: var(--border-radius-4);
    }

    /* ----------------------------other movies---------------------------- */
   .other-movies .mov-card {
       position: relative;
       margin-bottom: 32px;
       /* background-color: rgba(255,255,255,0.1); */
       background-color: rgba(32,32,32,0.75);
       padding: 24px 0px;
       text-align: center;
       border-radius: var(--border-radius-8);
    }

   .other-movies .img-wrap {
        width: 120px;
        height: 120px;
        margin: 0 auto 12px auto;
    }

   .other-movies .img-wrap img {
        border-radius: 50%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        opacity: var(--opacity-75);
    }

    .other-movies .img-wrap:hover img {
        opacity: var(--opacity-90);
    }

    .other-movies .pg-rate { 
        border-radius: 0 8px 0 8px;
        padding: 4px 8px 6px 8px;
        position: absolute;
        top: 0px;
        right: 0px;
    }

    .other-movies .age0 { background-color: rgba(94,179,58,0.5); }
    .other-movies .age6 { background-color: rgba(26,162,229,0.5); }
    .other-movies .age12 { background-color: rgba(226,165,38,0.5); }
    .other-movies .age15 { background-color: rgba(236,119,32,0.5); }
    .other-movies .age18 { background-color: rgba(227,11,32,0.5); }


    .other-movies .italic-16 { opacity: var(--opacity-50); }

     @media screen and (max-width: 576px) {
        .other-movies .mov-card {
            border-radius: var(--border-radius-4);
        }

        .other-movies .img-wrap {
            width: 80px;
            height: 80px;
        }

        .other-movies .pg-rate {
            padding: 4px;
            font-size: 14px;
            border-radius: 0 4px 0 4px;
        }
    }

    /* @media screen and (max-width: 992px) {
        .top-five .row .col {
            width: 33.33%;
        }
    } */
</style>

<body>
    <nav>
        <div class="movinon-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="movinon-logo">
                            <a class="d-flex align-items-center" href="#">
                                <img src="./images/LOGO.svg" alt="">
                            </a>
                        </div>

                        <div class="options d-flex justify-content-between">
                            <ul class="d-flex justify-content-between">
                                <li class="sub-title-r"><a href="#" aria-haspopup="true">電影排行榜<i class="fas fa-chevron-down text-light body1-r"></i></a>
                                    <ul class="dropdown" aria-label="submenu">
                                        <li class="sub-title-r"><a href="#">現正熱映</a></li>
                                        <li class="sub-title-r"><a href="#">即將上映</a></li>
                                        <li class="sub-title-r"><a href="#">本週新片</a></li>
                                    </ul>
                                </li>

                                <li class="sub-title-r"><a href="#">影迷討論區</a></li>
                                <li class="sub-title-r"><a href="#">電影新聞</a></li>
                                <li class="sub-title-r"><a href="#">快速購票</a></li>
                            </ul>
                        </div>

                        <div class="navbar-icons d-flex justify-content-end my-auto">
                            <a class="d-flex justify-content-center" href="#">
                                <div class="img-wrap1 pr-2 d-flex align-items-center">
                                    <img src="images/help.svg" alt="">
                                </div>
                            </a>

                            <!-- 登入視窗連結 -->
                            <div class="img-wrap2 d-flex align-items-center dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false"><img src="images/account.svg" alt=""></a>

                                <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                    <a class="btn btn-outline-light mb-3" href="#" data-toggle="modal" data-target="#exampleModalLogin">登入</a>
                                    <a type="button" class="btn btn-outline-light" href="#" data-toggle="modal" data-target="#exampleModal">註冊</a>
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">註冊帳號</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" id="myForm">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="請填寫 E-mail">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">密碼</label>
                                                <input type="password" class="form-control" id="pwd" placeholder="請輸入密碼">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">姓名</label>
                                                <input type="text" class="form-control" id="name" placeholder="請輸入姓名">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">生日</label>
                                                <input type="text" class="form-control" id="birthdate" placeholder="請填寫生日">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">地址</label>
                                                <input type="text" class="form-control" id="address" placeholder="請填寫地址">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn" id="btn_register">註冊</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 登入視窗 -->
                        <div class="modal fade" id="exampleModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">登入</h5><span class="Login">Login</span>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" id="myForm_login">
                                            <div class="col-md-12">
                                                <label for="email_login" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email_login" placeholder="請填寫 E-mail">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="pwd_login" class="form-label">密碼</label>
                                                <input type="password" class="form-control" id="pwd_login" placeholder="請輸入密碼">
                                            </div>
                                            <div class="col-6">
                                                <button type="submit" class="btn" id="btn_login">登入</button>
                                            </div>
                                            <div class="col-6"><a href="">忘記密碼？</a></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- <div class="text-end">
                            <a class="btn btn-outline-light me-2" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalLogin">Login</a>
                            <a type="button" class="btn btn-warning" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign-up</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <section class="top-five">
            <div class="container">
                <div class="row subtitle">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line"></div>
                            <span class="section-header-b">訂票排行榜</span>
                        </div>
                    </div>
                </div>

                <div class="row d-none d-lg-none d-xl-flex">
                    <div class="col">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank1.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank2.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank3.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank4.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank5.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row d-sm-flex d-xl-none d-none">
                    <div class="col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank1.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank2.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank3.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank4.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank5.jpeg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>   
        </section>
        
        <section class="other-movies">
            <div class="container">
                <div class="row subtitle">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line"></div>
                            <span class="section-header-b">現正熱映中</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- --------------第 1 ~ 6 部電影-------------- -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/Twk5fKm9SF4aXKj19sG1-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age18">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/UqL9TCUADFELWsE816fT-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age0">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/USk0faIPTQz286UGraTP-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age12">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/UXETbX63zXrbl2Ke83US-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age6">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/VaJVqWg6b0PQoAGevu0j-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age15">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/vZUOqQeQSvy1ryr9fxjw-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age0">限</div>
                            </div>
                        </a>
                    </div>

                    <!-- --------------第 7 ~ 12 部電影-------------- -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/VzvYZ8yBEQm0mzUbw80O-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age18">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/w4YFRNKM7FeL2n4Z3jnG-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age0">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/w5yAR3AwOLpeAQeEECXE-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age12">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/WK6XHAWkYYNqsEi1gKiH-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age0">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/wBcP1IO87kVxofoKeK4U-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age18">限</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                        <a href="#">
                            <div class="mov-card">
                                <div class="img-wrap">
                                    <img src="images/booking_movie_page/wGi2NUfvubCXv4YDKkzq-280 x 400.jpg" alt="">
                                </div>
                                <p class="sub-title-r">永恆族</p>
                                <p class="italic-16">Eternals</p>
                                <div class="pg-rate age0">限</div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
            
        </section>

        
    </main>

    <!-- -----------footer Start----------- -->
    <!-- <footer class="mt-5">
        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="img-wrap">
                            <img src="images/LOGO.svg" alt="">
                        </div>
                        <p><a href="">movin'on@cinema.com</a></p>
                        <p>call us <span class="body1-r">(02) 888 899 999</span></p>
                        <div class="icon">
                            <a href="#"><img src="img/icon/icon-color-02.png" alt=""></a>
                            <a href="#"><img src="img/icon/icon-color-03.png" alt=""></a>
                            <a href="#"><img src="img/icon/icon-color-04.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col">
                        <h4 class="sub-title-b">關於我們</h4>
                        <p><a href="#">集團介紹</a></p>
                        <p><a href="#">加入我們</a></p>
                        <p><a href="#">新聞中心</a></p>
                        <p><a href="#">我們的團隊</a></p>
                        <p><a href="#">FAQ</a></p>
                    </div>
                    <div class="col">
                        <h4 class="sub-title-b">條款與政策</h4>
                        <p><a href="#">隱私條款</a></p>
                        <p><a href="#">使用條款</a></p>
                        <p><a href="#">付費內容服務條款</a></p>
                        <p><a href="#">編輯獨立聲明</a></p>
                        <p><a href="#">廣告內容政策</a></p>
                    </div>
                    <div class="col">
                        <h4 class="sub-title-b">影迷互動</h4>
                        <p><a href="#">熱門討論區</a></p>
                        <p><a href="#">影迷討論區</a></p>
                        <p><a href="#">討論區規定</a></p>
                        <p><a href="#">會員中心</a></p>
                    </div>
                    <div class="col">
                        <h4 class="sub-title-b">最新電影資訊</h4>
                        <p><a href="#">查詢時刻表</a></p>
                        <p><a href="#">現正熱映</a></p>
                        <p><a href="#">本周新片</a></p>
                        <p><a href="#">即將上映</a></p>
                        <p><a href="#">新片預告</a></p>
                    </div>
                    <div class="col-12">
                        <a href="">
                            <p class="copyright body2-r">Copyright © 2021 movin'on All Rights Reserved.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </footer> -->

    <?php require_once './tpl/foot.php' ?>

    <script>
        // ======================================ranking-section======================================

        // 1------ranking-section hover 電影海報，跑出電影資訊
        $('.rank1').hover(function() {
            $('.rank-hover-content1').css('opacity', '1');
            $('.rank1').css('margin-right', '0px').css('margin-left', '32px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content1').css('opacity', '0');
            $('.rank1').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // 2------ranking-section hover 電影海報，跑出電影資訊
        $('.rank2').hover(function() {
            $('.rank-hover-content2').css('opacity', '1');
            $('.rank2').css('margin-right', '0px').css('margin-left', '0px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content2').css('opacity', '0');
            $('.rank2').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // 3------ranking-section hover 電影海報，跑出電影資訊
        $('.rank3').hover(function() {
            $('.rank-hover-content3').css('opacity', '1');
            $('.rank3').css('margin-right', '0px').css('margin-left', '0px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content3').css('opacity', '0');
            $('.rank3').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // 4------ranking-section hover 電影海報，跑出電影資訊
        $('.rank4').hover(function() {
            $('.rank-hover-content4').css('opacity', '1');
            $('.rank4').css('margin-right', '0px').css('margin-left', '0px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content4').css('opacity', '0');
            $('.rank4').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // 5------ranking-section hover 電影海報，跑出電影資訊
        $('.rank5').hover(function() {
            $('.rank-hover-content5').css('opacity', '1');
            $('.rank5').css('margin-right', '0px').css('margin-left', '0px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content5').css('opacity', '0');
            $('.rank5').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // 6------ranking-section hover 電影海報，跑出電影資訊
        $('.rank6').hover(function() {
            $('.rank-hover-content6').css('opacity', '1');
            $('.rank6').css('margin-right', '0px').css('margin-left', '0px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content6').css('opacity', '0');
            $('.rank6').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // 7------ranking-section hover 電影海報，跑出電影資訊
        $('.rank7').hover(function() {
            $('.rank-hover-content7').css('opacity', '1');
            $('.rank7').css('margin-right', '0px').css('margin-left', '0px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content7').css('opacity', '0');
            $('.rank7').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // 8------ranking-section hover 電影海報，跑出電影資訊
        $('.rank8').hover(function() {
            $('.rank-hover-content8').css('opacity', '1');
            $('.rank8').css('margin-right', '0px').css('margin-left', '0px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content8').css('opacity', '0');
            $('.rank8').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // 9------ranking-section hover 電影海報，跑出電影資訊
        $('.rank9').hover(function() {
            $('.rank-hover-content9').css('opacity', '1');
            $('.rank9').css('margin-right', '0px').css('margin-left', '0px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content9').css('opacity', '0');
            $('.rank9').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // 10------ranking-section hover 電影海報，跑出電影資訊
        $('.rank10').hover(function() {
            $('.rank-hover-content10').css('opacity', '1');
            $('.rank10').css('margin-right', '0px').css('margin-left', '0px').css('z-index', 3000).css('transition', '0.6s');
        }, function() {
            $('.rank-hover-content10').css('opacity', '0');
            $('.rank10').css('margin-right', '16px').css('margin-left', '16px').css('z-index', 1).css('transition', '0.6s');
        });

        // ranking-section 輪播牆
        let nowIndex = $(this).index();

        $('.next-btn').click(function() {

            nowIndex += 1
            if (nowIndex > 5) {
                nowIndex = 5
            }

            const nowX = nowIndex * -312 + 'px';
            $('.carousel-wrap').css('transform', `translateX(${nowX})`).css('transition', '.5s');

            // 問題：如何判斷是否已經經過排行第一了，如果有，就將 prev-btn 上層漸層
            // 問題：為何會需要點擊兩下？

            // if (nowX = -312) {
            //     $('.prev-btn').css('background-image','linear-gradient(to right, rgba(18,18,18,1), rgba(18,18,18,0))').css('transition','.8s');
            // } else if (nowX = 0) {
            //     $('.prev-btn').css('background-image','linear-gradient(to right, rgba(18,18,18,0), rgba(18,18,18,0))').css('transition','1s');
            // } else if (nowX = -3120) {
            //     $('.next-btn').css('background-image','linear-gradient(to right, rgba(18,18,18,0), rgba(18,18,18,0))').css('transition','1s');
            // }
        });

        $('.prev-btn').click(function() {

            nowIndex -= 1
            if (nowIndex < 0) {
                nowIndex = 0
            }

            const nowX = nowIndex * -312 + 'px';
            $('.carousel-wrap').css('transform', `translateX(${nowX})`).css('transition', '.5s');
        });
    </script>
</body>