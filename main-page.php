<?php require_once './tpl/head.php' ?>

<style>

    <?php require_once './tpl/global-style.css' ?>

    body {
        background-color: var(--bg-color);
        width: 100%;
    }

    .sub-title-r {
        line-height: 170%;
    }

    .btn, .btn:focus {
        box-shadow: none;
    }  

    /* ----------------------------hero section---------------------------- */
    .hero-section {
        margin-bottom: 64px;
    }

    .hero-section .img-wrap {
        width: 100%;
    }

    .hero-section .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    /* ----------------------------ranking section---------------------------- */
    .ranking-section {
        margin-bottom: 64px;
    }

    .ranking-section .subtitle {
        margin-bottom: 0px;
    }

    .ranking-section .subtitle .sub-title-r,
    .forum-cards-section .subtitle .sub-title-r {
        line-height: 100%;
        opacity: var(--opacity-90);
    }

    .ranking-section .wrap {
        max-width: 1920px;
        height: 560px;
        display: flex;
        align-items: center;
        overflow: hidden;
        position: relative;
    }

    .next-btn,
    .prev-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 3999;
        color: white;
        text-align: center;
        font-size: 24px;
        height: 100%;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .next-btn {
        right: 0px;
        justify-content: flex-end;
        padding-left: 80px;
        padding-right: 40px;
        background-image: linear-gradient(to right, rgba(18, 18, 18, 0), rgba(18, 18, 18, 1));
    }

    .prev-btn {
        left: 0px;
        padding-left: 40px;
        padding-right: 80px;
        background-image: linear-gradient(to right, rgba(18, 18, 18, 1), rgba(18, 18, 18, 0));
    }

    .ranking-section .carousel-wrap {
        width: 3120px;
        display: flex;
    }

    .ranking-section .img-wrap {
        width: 280px;
        height: 400px;
        margin: 0 16px;
        position: relative;
        box-shadow: var(--box-shadow-black);
    }

    .ranking-section .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        border-radius: var(--border-radius-4);
    }

    .ranking-section .img-wrap:hover {
        transform: scale(1.2);
    }

    .ranking-section .rank-hover-content1,
    .ranking-section .rank-hover-content2,
    .ranking-section .rank-hover-content3,
    .ranking-section .rank-hover-content4,
    .ranking-section .rank-hover-content5,
    .ranking-section .rank-hover-content6,
    .ranking-section .rank-hover-content7,
    .ranking-section .rank-hover-content8,
    .ranking-section .rank-hover-content9,
    .ranking-section .rank-hover-content10 {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        height: 100%;
        padding: 56px 32px;
        border-radius: var(--border-radius-4);
        color: white;
        background: rgba(0, 0, 0, 0.75);
        box-shadow: var(--box-shadow-black2);
        transition: .6s;
    }

    .ranking-section .content-r {
        overflow: hidden;
    }

    .ranking-section .content-r p.section-header-b {
        font-size: 24px;
    }

    .ranking-section .rank-hover-content1 p.section-header-b,
    .ranking-section .rank-hover-content2 p.section-header-b,
    .ranking-section .rank-hover-content3 p.section-header-b,
    .ranking-section .rank-hover-content4 p.section-header-b,
    .ranking-section .rank-hover-content5 p.section-header-b,
    .ranking-section .rank-hover-content6 p.section-header-b,
    .ranking-section .rank-hover-content7 p.section-header-b,
    .ranking-section .rank-hover-content8 p.section-header-b,
    .ranking-section .rank-hover-content9 p.section-header-b,
    .ranking-section .rank-hover-content10 p.section-header-b,
    .ranking-section .rank-hover-content1 .en-title,
    .ranking-section .rank-hover-content2 .en-title,
    .ranking-section .rank-hover-content3 .en-title,
    .ranking-section .rank-hover-content4 .en-title,
    .ranking-section .rank-hover-content5 .en-title,
    .ranking-section .rank-hover-content6 .en-title,
    .ranking-section .rank-hover-content7 .en-title,
    .ranking-section .rank-hover-content8 .en-title,
    .ranking-section .rank-hover-content9 .en-title,
    .ranking-section .rank-hover-content10 .en-title {
        white-space: nowrap;
    }

    .ranking-section .rank-arrow {
        width: 0;
        height: 0;
        border-left: 75px solid transparent;
        border-right: 75px solid transparent;
        border-top: 75px solid #f00;
    }

    /* 問題：如何不讓 .arrow-wrap 被擠壓到？ */
    .ranking-section .arrow-wrap {
        height: 10%
    }

    .ranking-section .arrow-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    .ranking-section .reputation {
        margin-top: 16px;
        margin-bottom: 128px;
    }

    .ranking-section .rate {
        margin-right: 32px;
        opacity: var(--opacity-75);
    }

    .ranking-section .reputation .img-wrap1 {
        height: 20px;
        margin-right: 8px;
        opacity: var(--opacity-75);
    }

    .ranking-section .reputation .img-wrap2 {
        height: 16px;
        margin-right: 8px;
        opacity: var(--opacity-75);
    }

    .ranking-section .reputation .img-wrap1 img,
    .ranking-section .reputation .img-wrap2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        border-radius: 0;
    }

    .ranking-section .en-title {
        font-style: italic;
        opacity: var(--opacity-50);
        margin-bottom: 4px;
    }

    .ranking-section .italic-16 {
        font-size: 1rem;
        font-style: italic;
    }

    .ranking-section .rank-hover-content4 .arrow-wrap {
        width: 14%;
    }

    .ranking-section .rank-num {
        font-family: 'BenchNine', 'Roboto Condensed', sans-serif;
        font-size: 6rem;
        opacity: var(--opacity-25);
        letter-spacing: -2px;
        font-weight: 300;
        line-height: 100%;
        margin-right: 16px;
        margin-top: -8px;
    }

    .ranking-section .content {
        margin-bottom: 8px;
    }

    .ranking-section .btn-booking,
    .ranking-section .btn-description {
        text-align: center;
        padding: 8px 20px;
        border: 1px solid rgba(255,255,255,0.75);
        border-radius: var(--border-radius-4);
        box-shadow: var(--box-shadow-black);
        font-size: 0.875rem;
    }

    .ranking-section .btn-booking,
    .ranking-section .btn-description {
        background-color: rgba(18, 18, 18, 0.5);
    }

    .ranking-section .btn-booking {
        margin-right: 6px;
    }

    .ranking-section .btn-description {
        margin-left: 6px;
    }

    .ranking-section .carousel-wrap .roboto-condensed {
        font-size: 20px;
        opacity: var(--opacity-75);
        margin-bottom: 12px;
        transition: .6s;
    }

    .ranking-section .fa-star,
    .ranking-section .fa-star-half-alt {
        font-size: 0.25rem;
    }

    /* ----------------------------forum cards section---------------------------- */
    .forum-cards-section .row1,
    .forum-cards-section .row2 {
        margin-bottom: 32px;
    }

    .forum-cards-section .card-md {
        margin-bottom: 32px;
    }

    .forum-cards-section .row1 .col-4 {
        padding-left: 0;
        padding-right: 0;
    }

    .forum-cards-section .img-wrap {
        width: 100%;
        height: 100%;
        position: relative;
        box-shadow: var(--box-shadow-black);
        border-radius: var(--border-radius-8);
        transition: .4s;
    }

    /* .forum-cards-section .img-wrap:hover {
        box-shadow: var(--box-shadow-black2);
    } */

    .forum-cards-section .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        border-radius: var(--border-radius-8);
    }

    .forum-cards-section .img-wrap .content {
        position: absolute;
        bottom: 24px;
        left: 24px;
    }

    .forum-cards-section .card-1 {
        width: 100%;
        height: 100%;
    }

    .forum-cards-section .card-3 {
        width: 100%;
        height: 100%;
    }

    .inner-row1 {
        margin-bottom: 32px;
    }

    /* -----------com-count----------- */
    .com-count {
        border-radius: var(--border-radius-50);
        padding: 4px 8px;
        margin-left: 8px;
    }

    .com-1-count { background-color: #AE2B2C; }
    .com-2-count { background-color: #16CFC4; }
    .com-3-count { background-color: #FD8942; }
    .com-4-count { background-color: #2B6714; }
    .com-5-count { background-color: #B41127; }

    .forum-cards-section .content .section-header-r {
        margin-bottom: 4px;
    }

    .forum-cards-section .content .body1-b {
        opacity: var(--opacity-75);
    }

    /* =================================== @media =================================== */
    /* ============================================================================== */

    /* ------------------------  小於 1200px  ------------------------*/
    @media screen and (max-width: 1200px) {

        /* forum cards section */
        .forum-cards-section .card-md .section-header-r { 
            font-size: 20px; 
            font-weight: 500;
            margin-bottom: 6px;
        }

        .forum-cards-section .img-wrap .content {
            bottom: 16px;
            left: 16px;
        }
    }

    /* ------------------------  小於 992px  ------------------------*/
    /* @media screen and (max-width: 992px) {

        
    } */

    /* ------------------------  小於 768px  ------------------------*/
    @media screen and (max-width: 768px) {

        /* 這裡強制將 .section-header-r 改為 字重500 */
        .forum-cards-section .card-md .section-header-r { 
            font-size: 20px; 
            font-weight: 500;
            margin-bottom: 6px;
        }

        .forum-cards-section .img-wrap .content {
            bottom: 16px;
            left: 16px;
        }
    }

    /* ------------------------  小於 418px  ------------------------*/
    @media screen and (max-width: 418px) {

        .forum-cards-section .card-md .section-header-r { 
            font-weight: 400;
            margin-bottom: 4px;
            font-size: 16px;
        }

        /* 將預設的 .body1-b 改為 .body2-m  */
        .forum-cards-section .card-md .body1-b { 
            font-weight: 700;
            margin-bottom: 4px;
            font-size: 14px;
        }

        .forum-cards-section .img-wrap .content {
            bottom: 12px;
            left: 12px;
        }

        .forum-cards-section .card-md {
            margin-bottom: 16px;
        }

        .forum-cards-section .col-6.card-md:nth-child(even) {
            padding: 0 16px 0 8px;
        }

        .forum-cards-section .col-6.card-md:nth-child(odd) {
            padding: 0 8px 0 16px;
        }

        .forum-cards-section .com-count {
            border-radius: var(--border-radius-50);
            padding: 2px 6px;
            margin-left: 8px;
        }
    }
</style>
    
<body>
    <nav>
        <div class="movinon-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="d-none d-sm-none d-md-flex d-flex align-items-center" href="#">
                            <div class="movinon-logotype-wrap">
                                <img src="./images/logotype.svg" alt="">
                            </div>
                        </a>
                        
                        <!-- display 小於 768px -->
                        <a class="d-flex d-sm-flex d-md-none align-items-center" href="#">
                            <div class="movinon-logo-wrap">
                                <img src="./images/logo.svg" alt="">
                            </div>
                        </a>

                        <div class="options d-flex justify-content-between">
                            <ul class="d-flex justify-content-between">
                                <li class="options-spacing">
                                    
                                    <a href="#" aria-haspopup="true">電影排行榜<i class="fas fa-chevron-down body1-r"></i></a>

                                    <ul class="dropdown" aria-label="submenu">
                                        <li><a class="hover-items" href="#">現正熱映</a></li>
                                        <li><a class="hover-items" href="#">即將上映</a></li>
                                        <li><a class="hover-items" href="#">本週新片</a></li>
                                    </ul>
                                </li>

                                <li class="options-spacing"><a href="#">影迷討論區</a></li>
                                <li class="options-spacing"><a href="#">電影新聞</a></li>
                                <li class="options-spacing"><a href="#">立即購票</a></li>

                                <!-- <li class="options-spacing">
                                    <div class="options-outline d-flex">
                                        <div class="img-wrap">
                                            <img src="images/ticket_icon.svg" alt="">
                                        </div>
                                        <a href="#">立即購票</a>
                                    </div>
                                </li> -->
                            </ul>
                        </div>

                        <div class="navbar-icons d-flex justify-content-end my-auto">
                            <a class="d-flex justify-content-center" href="#">
                                <div class="img-wrap1 d-flex align-items-center">
                                    <img src="images/help.svg" alt="">
                                </div>
                            </a>

                            <!-- 登入視窗連結 -->
                            <div class="img-wrap2 d-flex align-items-center dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false"><img src="images/account.svg" alt=""></a>

                                <!-- 問題：main-page 有辦法修改  bootstrap 的 element style 嘛？ -->
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="btn text-white mb-3" href="#" data-toggle="modal" data-target="#exampleModalLogin">
                                        <div>登入</div>
                                    </a>
                                    <a type="button" class="btn text-white" href="#" data-toggle="modal" data-target="#exampleModal">
                                        <div>註冊</div>    
                                    </a>
                                </div>
                            </div>
                            <!-- </a> -->
                        </div>
                        
                        <div class="d-block d-lg-block d-xl-none menu-bar">
                            <div class="lines">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                                <div class="line-3"></div>
                            </div>
                            <div class="menu-items">

                                <a class="btn border-light rounded text-white mb-3" href="#" data-toggle="modal" data-target="#exampleModalLogin">登入</a>
                                <a type="button" class="btn border-light rounded text-white mb-4" href="#" data-toggle="modal" data-target="#exampleModal">註冊</a>

                                <a href="./movies-overview-page.php">
                                    <div class="item mb-2">電影排行榜</div>
                                </a>
                                <a href="./forum-overview-page.php">
                                    <div class="item mb-2">影迷討論區</div>
                                </a>
                                <a href="#">
                                    <div class="item mb-2">電影新聞</div>
                                </a>
                                <a href="./booking-movie-page.php">
                                    <div class="item mb-2">立即購票</div>
                                </a>
                            </div>
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
        <section class="hero-section">
            <div class="hero-img">
                <div class="img-wrap">
                    <img src="images/main_page/hero-img1.jpg" alt="">
                </div>
            </div>
            <div class="comment-area">
                <div class="d-danmu-toggle"></div>
                <div class="drop-down-menu">

                </div>
                <div class="write-comment">

                </div>

                <div class="bg-img-toggle">

                </div>
            </div>
        </section>

        <section class="ranking-section">
            <div class="container">
                <div class="row subtitle g-subtitle-mb">
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b">電影排行榜</span>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-end">
                        <a href="#">
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="sub-title-r mt-2">電影總覽頁</div>
                                <div class="ml-2"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="wrap">
                        <div class="next-btn">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="prev-btn">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="carousel-wrap">
                            <!-- --------------------rank1 hover-------------------- -->
                            <div class="img-wrap rank1">
                                <img src="images/main_page/rank1.jpeg" alt="">
                                <div class="rank-hover-content1">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">01</div>
                                        <div class="content-r">
                                            <p class="section-header-b">永恆族</p>
                                            <p class="en-title">Treat or trick</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrap rank2">
                                <img src="images/main_page/rank2.jpeg" alt="">
                                <div class="rank-hover-content2">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">02</div>
                                        <div class="content-r">
                                            <p class="section-header-b">刀劍神域 –Progressive- 無星夜的詠嘆調</p>
                                            <p class="en-title">Sword Art Online: Progressive</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrap rank3">
                                <img src="images/main_page/rank3.jpeg" alt="">
                                <div class="rank-hover-content3">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">03</div>
                                        <div class="content-r">
                                            <p class="section-header-b">詭扯</p>
                                            <p class="en-title">Treat or trick</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrap rank4">
                                <img src="images/main_page/rank4.jpeg" alt="">
                                <div class="rank-hover-content4">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">04</div>
                                        <div class="content-r">
                                            <p class="section-header-b">我的英雄學院劇場版：世界英雄任務</p>
                                            <p class="en-title">My Hero Academia The Movie : World Heores Mission</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrap rank5">
                                <img src="images/main_page/rank5.jpeg" alt="">
                                <div class="rank-hover-content5">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">05</div>
                                        <div class="content-r">
                                            <p class="section-header-b">迷離夜蘇活</p>
                                            <p class="en-title">Last Night in Soho</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrap rank6">
                                <img src="images/main_page/rank6.jpeg" alt="">
                                <div class="rank-hover-content6">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">06</div>
                                        <div class="content-r">
                                            <p class="section-header-b">梅艷芳</p>
                                            <p class="en-title">Anita Mui Yim Fong</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrap rank7">
                                <img src="images/main_page/rank6.jpeg" alt="">
                                <div class="rank-hover-content7">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">01</div>
                                        <div class="content-r">
                                            <p class="section-header-b">永恆族</p>
                                            <p class="en-title">Treat or trick</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrap rank8">
                                <img src="images/main_page/rank6.jpeg" alt="">
                                <div class="rank-hover-content8">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">01</div>
                                        <div class="content-r">
                                            <p class="section-header-b">永恆族</p>
                                            <p class="en-title">Treat or trick</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrap rank9">
                                <img src="images/main_page/rank6.jpeg" alt="">
                                <div class="rank-hover-content9">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">01</div>
                                        <div class="content-r">
                                            <p class="section-header-b">永恆族</p>
                                            <p class="en-title">Treat or trick</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrap rank10">
                                <img src="images/main_page/rank6.jpeg" alt="">
                                <div class="rank-hover-content10">
                                    <div class="d-flex">
                                        <div class="arrow-wrap">
                                            <img src="images/rise_green.svg" alt="">
                                        </div>
                                        <div class="rank-num">01</div>
                                        <div class="content-r">
                                            <p class="section-header-b">永恆族</p>
                                            <p class="en-title">Treat or trick</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="reputation d-flex align-items-center">
                                        <div class="img-wrap1">
                                            <img src="./images/Rotten_Tomatoes.svg" alt="">
                                        </div>
                                        <span class="rate">53%</span>
                                        <div class="img-wrap2">
                                            <img src="./images/IMDB_Logo.svg" alt="">
                                        </div>
                                        <span class="rate">79%</span>
                                    </div>

                                    <div class="d-flex">
                                        <a href="#">
                                            <div class="btn-booking">立即購票</div>
                                        </a>
                                        <a href="#">
                                            <div class="btn-description">電影介紹</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- -----------forum cards section----------- -->
        <section class="forum-cards-section g-section-mb">
            <div class="container d-none d-xl-block">
                <div class="row subtitle g-subtitle-mb">
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b">精選討論區</span>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-end">
                        <a href="#">
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="sub-title-r mt-2">前往討論區</div>
                                <div class="ml-2"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- -------------------上------------------- -->
                <div class="row row1">
                    <div class="col-4 d-flex flex-column justify-content-between">
                        <div class="col-12">
                            <a href="#">
                                <div class="img-wrap card-1">
                                    <img src="images/forum_overview_page/card_1.jpg" alt="">
                                    <div class="content">
                                        <div class="section-header-r">再說一次我願意</div>
                                        <span class="body1-b">Today</span><span class="caption-12 com-count com-1-count">+<span class="count">134</span></span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12">
                            <a href="#">
                                <div class="img-wrap card-2">
                                    <img src="images/forum_overview_page/card_2.jpg" alt="">
                                    <div class="content">
                                        <div class="section-header-r">駭客任務</div>
                                        <span class="body1-b">Today</span><span class="caption-12 com-count com-2-count">+<span class="count">34</span></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-8">
                        <a href="#">
                            <div class="img-wrap card-3">
                                <img src="images/forum_overview_page/card_3.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">蜘蛛人: 無家日</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-3-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- -------------------中------------------- -->
                <div class="row row2">
                    <div class="col-6">
                        <a href="#">
                            <div class="img-wrap card-4">
                                <img src="images/forum_overview_page/card_4.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">魔鬼剋星未來世</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-4-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                    <div class="col-6">
                        <a href="#">
                            <div class="img-wrap card-5">
                                <img src="images/forum_overview_page/card_5.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">梅艷芳</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-5-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- --------------------display 小於 1200-------------------- -->
            <div class="container d-sm-block d-xl-none">
                <div class="row subtitle g-subtitle-mb">
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b">精選討論區</span>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-end">
                        <a href="#">
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="sub-title-r mt-2">前往討論區</div>
                                <div class="ml-2"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_1_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">再說一次我願意</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-1-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_2_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">駭客任務</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-2-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_3_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">蜘蛛人: 無家日</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-3-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_4_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">魔鬼剋星未來世</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-4-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_5_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">梅艷芳</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-5-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> 
            </div>
        </section>
    </main>

    <!-- -----------footer Start----------- -->
    <footer class="mt-5">
        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="img-wrap">
                            <img src="images/logotype.svg" alt="">
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
    </footer>

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
        let nowIndex = $(this).index() + 1;

        $('.next-btn').click(function() {

            nowIndex += 1
            if (nowIndex > 4) {
                nowIndex = 4
            }

            const nowX = nowIndex * -312 + 'px';
            $('.carousel-wrap').css('transform', `translateX(${nowX})`).css('transition', '.5s');

            // 問題：如何判斷是否已經經過排行第一了，如果有，就將 prev-btn 上層漸層

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

        // menu bar
        const menuBar = document.querySelector('.menu-bar');
        let menuBarOpen = false;
        
        menuBar.addEventListener("click", function() {
            if (!menuBarOpen) {
                menuBar.classList.add('open');
                menuBarOpen = true;
            } else {
                menuBar.classList.remove('open');
                menuBarOpen = false;
            }
        });
        
        
        // const dropDown = document.querySelector('.dropdown-menu');
        // let dropDownShow = false;
        
        // dropDown.addEventListener("click", function() {
        //     if (!dropDownShow) {
        //         dropDown.classList.add('open');
        //         menuBarOpen = true;
        //     } else {
        //         menuBar.classList.remove('open');
        //         menuBarOpen = false;
        //     }
        // });

        $('.dropdown-toggle').click( function () {
            console.log('test');
            $('.dropdown-menu.show').css({ top: '30px' });
        });
    </script>
    <!-- <script src="js/custom.js"></script> -->
</body>

</html>