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

    .ranking-section .next-btn,
    .ranking-section .prev-btn {
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

    .ranking-section .next-btn {
        right: 0px;
        justify-content: flex-end;
        padding-left: 80px;
        padding-right: 40px;
        background-image: linear-gradient(to right, rgba(18, 18, 18, 0), rgba(18, 18, 18, 1));
    }

    .ranking-section .prev-btn {
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
        width: 300px;
        margin: 0 auto;
        white-space: nowrap;
        overflow: hidden;
    }

    .ranking-section .content-r p.section-header-b span {
        display: inline-block;
        padding-left: 100%;
        -webkit-animation: marquee 6s linear infinite;    
        animation: marquee 6s linear infinite;
    }

    /* Make it move */

    @keyframes marquee {

        0%   { transform: translate(0, 0); }
        100% { transform: translate(-100%, 0); }

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

    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

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
                                            <p class="section-header-b"><span>永恆族</span></p>
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
                                            <p class="section-header-b"><span>刀劍神域 –Progressive- 無星夜的詠嘆調</span></p>
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
                                            <p class="section-header-b"><span>詭扯</span></p>
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
                                            <p class="section-header-b"><span>我的英雄學院劇場版：世界英雄任務</span></p>
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
                                            <p class="section-header-b"><span>迷離夜蘇活</span></p>
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

    <!-- movinon footer -->
    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>
    
    <script src="js/main-page.js"></script>
</body>

</html>