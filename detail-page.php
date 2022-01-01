<?php require_once './tpl/head.php' ?>
<style>

    <?php require_once './tpl/global-style.css' ?>

    :root{
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
        --box-shadow-red: 0px 0px 16px 4px rgba(245,61,61,0.25);
    }

    body {
        background: url("images/detail_page/bg_img/bg_img_gradient_1200.jpg") top center no-repeat;
        background-size: contain;
        background-color: var(--bg-color);
    }

    .container-fluid {
        padding-left: 72px;
        padding-right: 72px;
    }
    
    .related-articles-section,
    .actors-list-section { 
        margin-bottom: 144px; 
    }

    .related-articles-section .fa-chevron-right {
        opacity: var(--opacity-90);
        font-size: 14px;
    }

    /* -----------------movinon navbar----------------- */
    .movinon-navbar {
        background-color: rgba(18, 18, 18, 0.5);
        width: 100%;
    }

    .movinon-navbar .movinon-logo {
        max-width: 226px;
    }

    .movinon-logo img {
        width: 100%;
    }   

    .movinon-navbar .row {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .movinon-navbar .options a {
        padding-left: 16px;
        padding-right: 16px;
    }

    .movinon-navbar .sub-title-r {
        letter-spacing: 1px;
    }

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

    .movinon-navbar .options ul li:hover > ul,
    .movinon-navbar .options ul li:focus-within > ul,
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

    .movinon-navbar .img-wrap {
        width: 90%;
        object-fit: cover;
        object-position: 50% 50%;
    }

    .movinon-navbar .img-wrap img {
        width: 100%;
        height: 100%;
    }

    /* -----------------movie detail section----------------- */
    .movie-detail-section { margin-top: 144px; }

    .movie-detail-section .social-media {
        margin-bottom: 32px;
    }

    .movie-detail-section .social-media i {
        font-size: 2.125rem;
        opacity: var(--opacity-75);
    }

    .movie-detail-section
    .movie-poster
    .img-wrap {
        width: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        box-shadow: 0px 0px 16px 4px rgba(0, 0, 0, 0.25);
    }

    .movie-detail-section
    .movie-poster
    .img-wrap 
    img {
        width: 100%;
        height: 100%;
        border-radius: var(--border-radius-4);
    }
    
    .movie-detail-section .content { padding-left: 32px; }
    .movie-detail-section .content span {  display: inline-block; }

    .movie-detail-section .pg-rate {
        border: 1px solid #E2A526;
        border-radius: var(--border-radius-50);
        padding: 4px 12px;
        opacity: var(--opacity-75);
        margin-bottom: 8px;
    }

    .movie-detail-section .rating {
        margin-bottom: 32px;
    }

    .movie-detail-section .title-tc { 
        margin-bottom: 4px; 
        font-size: 48px;
        font-weight: 700;
    }

    .movie-detail-section .title-en { 
        margin-bottom: 16px;
        opacity: var(--opacity-50); 
        font-style: italic;
        font-size: 20px;
    }

    .movie-detail-section .reputation { 
        margin-bottom: 32px;
        display: flex;
        align-items: center;
    }

    .movie-detail-section .reputation .img-wrap1 {
        width: 24px;
        margin-right: 8px;
    }

    .movie-detail-section .reputation .img-wrap2 {
        width: 48px;
        margin-right: 8px;
        margin-top: 4px;
    }
    
    .movie-detail-section .reputation .img-wrap1 img,
    .movie-detail-section .reputation .img-wrap2 img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center center;
    }

    .movie-detail-section .content .sub-title-r { 
        margin-bottom: 8px; 
        opacity: var(--opacity-90);
        font-size: 20px;
    }

    .movie-detail-section .content p { 
        margin-bottom: 8px;
        font-size: 20px;
    }

    .movie-detail-section .content .release-date,
    .movie-detail-section .content .movie-length,
    .movie-detail-section .content .movie-director {  opacity: var(--opacity-90); }

    .movie-detail-section .content .date-data,
    .movie-detail-section .content .length-data,
    .movie-detail-section .content .director-data {  opacity: var(--opacity-75); }

    .movie-detail-section .cat-tags {
        margin-bottom: 56px;
        width: 100%;
        display: flex;
    }

    .movie-detail-section .cat-tags .cat-tag {
        border: 1px solid rgba(255,255,255,0.75);
        border-radius: var(--border-radius-50);
        padding: 6px 20px;
        margin-right: 16px;
        margin-bottom: 32px;
    }

    .movie-detail-section .description-title {
        margin-bottom: 32px;
    }

    .movie-detail-section .description {
        padding-top: 20px;
        border-top: 1px solid rgba(255,255,255,0.75);
        margin-bottom: 40px;
        font-size: 20px;
        opacity: var(--opacity-90);
    }

    .movie-detail-section .booking-trailer button {
        border-radius: var(--border-radius-50);
        padding-left: 32px;
        padding-right: 32px;
    }

    .movie-detail-section .booking-trailer button:nth-child(1) {
        background-color: var(--brand-color);
        box-shadow: var(--box-shadow-red);
    }

    /* -----------------related articles section----------------- */

    .related-articles-section .subtitle,
    .actors-list-section .subtitle,
    .movie-stills-section .subtitle {
        margin-bottom: 32px;
        padding: 0 16px;
    }

    .related-articles-section .spoiler,
    .related-articles-section .spoiler-free {
        border-radius: var(--border-radius-50-percent);
        width: 30px;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 12px;
    }

    .related-articles-section .spoiler {
        background-color: var(--brand-color);
        box-shadow: var(--box-shadow-red);
        color: var(--bg-color);
    }

    .related-articles-section .spoiler-free {
        background-color: rgba(255,255,255,0.1);
        color: rgba(255,255,255,0.1);
    }

    .related-articles-section .arti-cat-tag {
        padding: 4px 20px;
        border: 1px solid rgba(255,255,255,0.5);
        border-radius: var(--border-radius-50);
        background-color: var(--bg-color);
    }

    .related-articles-section .articles-1920 {
        width: 100%;
        margin: 0px;
    }

    .related-articles-section .articles-1920 .article-light {
        padding: 16px 32px;
        margin-bottom: 24px;
        background-color: rgba(255,255,255,0.08);
        border-radius: var(--border-radius-8);
    }

    .related-articles-section .articles-1920 .article-dark {
        padding: 16px 32px;
        margin-bottom: 24px;
        background-color: rgba(255,255,255,0.02);
        border-radius: var(--border-radius-8);
    }

    .related-articles-section .time-stamp {
        opacity: var(--opacity-50);
    }

    .related-articles-section .articles-1920 .sub-title-r,
    .related-articles-section .articles-xl .sub-title-r {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    /* -----------------actors list section----------------- */
    .actors-list-section {
        width: 100%;
    }
    
    .actors-list-section .subtitle .sub-title-r {
        opacity: var(--opacity-75);
    }

    .actors-list-section .container-fluid {
        overflow: hidden;
    }

    .actors-list-section .carousel-wrapper {
        width: 1862px;
        display: flex;
        justify-content: space-between;
        transform: translateX(0px);
        transition: .4s;
    }

    .actors-list-section .carousel-wrapper span {
        display: block;
    }

    .actors-list-section .img-wrap {
        max-width: 234px;
        max-height: 546px;
        overflow: hidden;
        position: relative;
        border-radius: var(--border-radius-4); 
        margin-bottom: 32px;
    }

    .actors-list-section .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        -webkit-transition: all 0.6s;
        transition: all 0.6s;
    }
    
    .actors-list-section li {
        position: relative;
    }

    .actors-list-section .actor-name {
        text-decoration: none;
        -webkit-transition: all 0.6s;
        transition: all 0.6s;
        opacity: 0.2;
    }

    .actors-list-section .image-hover {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 0.5s ease-out;
    }

    .actors-list-section li:hover img {
        -ms-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    .actors-list-section li:hover .image-hover {
        opacity: 1;
    }

    .actors-list-section li:hover .actor-name {
        /* bottom: -20px; */
        transform: translateY(20%);
        opacity: 1;
    }

    /* -----------------movie stills section----------------- */
    .movie-stills-section {
        margin-bottom: 144px;
    }

    .movie-stills-section .movie-stills .imgs-demo {
        max-width: 1344px;
        max-height: 588px;
        margin-bottom: 32px;
    }

    .movie-stills-section .imgs-demo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        border-radius: var(--border-radius-4); 
    }

    .movie-stills-carousel .img-wrap {
        width: 196px;
        height: 88px;
        margin-left: 16px;
        margin-right: 16px;
    }

    .movie-stills-carousel .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        border-radius: var(--border-radius-4); 
    }

    .movie-stills-carousel .col-10 {
        overflow: hidden;
    }

    .movie-stills-carousel .carousel-wrapper {
        width: 1114px;
        display: flex;
        justify-content: space-between;
        transform: translateX(0px);
        transition: .4s;
    }

    .articles-xl .col-xl-6 {
        display: flex;
        margin-bottom: auto;
    }
    
    /* =================================== @media =================================== */
    /* ============================================================================== */

    /* -----------------when smaller than 418px，小於 418px-----------------*/
    @media screen and (max-width: 418px) {

        .movie-detail-section { margin-top: 32px; }

        .section-header-b { font-size: 20px; }
        .related-articles-section .subtitle { margin-bottom: 24px; }

        .sub-title-r, 
        .sub-title-m,
        .sub-title-b { font-size: 16px;}

        .body1-r,
        .body1-m,
        .body1-b { font-size: 14px; }

        .spoiler,
        .spoiler-free,
        .arti-cat-tag,
        .time-stamp { font-size: 14px; }

        .movie-detail-section .reputation {
            display: none;
        }

        .movie-detail-section .content p { 
            margin-bottom: 4px;
            font-size: 16px;
        }

        .movie-detail-section .cat-tags {
            margin-bottom: 24px;
        }

        .movie-detail-section .cat-tags .cat-tag {
            padding: 8px 16px;
            margin-right: 16px;
            font-size: 14px;
        }

        .movie-detail-section .movie-info {
            padding: 0 16px;
        }
    }

    /* -----------------when smaller than 576px，小於 576px-----------------*/
    /* @media screen and (max-width: 576px) {
        
    } */

    /* -----------------when smaller than 768px，小於 768px-----------------*/
    @media screen and (max-width: 768px) {

        /* 小於 768px 後，將 red-line刪掉，並調整副標題 */
        .red-line {
            display: none;
        }

        .related-articles-section .subtitle {
            align-items: end;
        }

        .movie-detail-section .movie-poster {
            padding: 0;
        }

        .movie-detail-section .title-tc { 
            margin-bottom: 4px; 
            font-size: 34px;
        }

        .movie-detail-section .title-en { 
            margin-bottom: 16px;
            font-size: 16px;
        }

        .movie-detail-section .rating {
            margin-bottom: 32px;
            font-size: 14px;
        }

        .movie-detail-section .content p { 
            margin-bottom: 4px;
            font-size: 16px;
        }

        .movie-detail-section .cat-tags {
            margin-bottom: 32px;
        }

        .movie-detail-section .cat-tags .cat-tag {
            border: 1px solid rgba(255,255,255,0.75);
            border-radius: var(--border-radius-50);
            padding: 6px 20px;
            margin-right: 16px;
            margin-bottom: 32px;
        }

        .articles-md li:nth-child(even){
            padding: 16px 0;
            background-color: rgba(255,255,255,0.02);
            border-radius: var(--border-radius-8);
            margin-bottom: 8px;
        }

        .articles-md li:nth-child(odd) {
            padding: 16px 0;
            background-color: rgba(255,255,255,0.08);
            border-radius: var(--border-radius-8);
            margin-bottom: 8px;
        }
    }

    /* -----------------when smaller than 992px，小於 992px-----------------*/
    @media screen and (max-width: 992px) {
        body {
            background: url("images/detail_page/bg_img/bg_img_gradient_992.jpg") top center no-repeat;
            background-size: contain;
            background-color: var(--bg-color);
        }

        /* section margin bottom */
        .movie-detail-section { margin-top: 48px; }
        .movie-detail-section .cat-tags .cat-tag { margin-top: 32px; }

        .movie-detail-section .description-title {
            margin-bottom: 16px;
        }

        .movie-detail-section .description {
            margin-bottom: 40px;
            font-size: 16px;
        }
    }

    /* -----------------when smaller than 1200px，小於 1200px-----------------*/
    @media screen and (max-width: 1200px) {
        
        /* section margin bottom */
        .movie-detail-section { margin-top: 96px; }
        
        .related-articles-section,
        .actors-list-section { 
            margin-bottom: 96px; 
        }

        .related-articles-section .subtitle,
        .actors-list-section .subtitle,
        .movie-stills-section .subtitle {
            padding: 0;
        }
        
        .movie-detail-section .movie-info { padding: 0; }

        .articles-xl li:nth-child(even){
            padding: 16px 32px;
            background-color: rgba(255,255,255,0.02);
            border-radius: var(--border-radius-8);
        }

        .articles-xl li:nth-child(odd) {
            padding: 16px 32px;
            background-color: rgba(255,255,255,0.08);
            border-radius: var(--border-radius-8);
        }
    }
    /* -----------------  992px-1199px  -----------------*/
    @media screen and (min-width: 992px) and (max-width: 1199px) {
        /* section margin bottom */
        .movie-detail-section { margin-top: 96px; }
        
        .related-articles-section,
        .actors-list-section { 
            margin-bottom: 96px; 
        }

        .related-articles-section .subtitle,
        .actors-list-section .subtitle,
        .movie-stills-section .subtitle {
            padding: 0;
        }
        
        .movie-detail-section .movie-info { padding: 0; }

        .articles-xl li:nth-child(even){
            padding: 16px 32px;
            background-color: rgba(255,255,255,0.02);
            border-radius: var(--border-radius-8);
        }

        .articles-xl li:nth-child(odd) {
            padding: 16px 32px;
            background-color: rgba(255,255,255,0.08);
            border-radius: var(--border-radius-8);
        }
    }




    


    /* -----------------  <418px  -----------------*/
    @media screen and (max-width: 417px) {

        /* margin top */
        /* .g-section-mt { margin-top: 96px; } */

        /* margin bottom */
        .g-section-mb { margin-bottom: 32px; }
        /* .g-subtitle-mb { margin-bottom: 32px; } */
    }

    /* -----------------  576px-767px  -----------------*/
    @media screen and (min-width: 418px) and (max-width: 575px) {

        /* margin bottom */
        .g-section-mb { margin-bottom: 40px; }
    }

    /* -----------------  576px-767px  -----------------*/
    @media screen and (min-width: 576px) and (max-width: 767px) {

    }

    /* -----------------  768px-991px  -----------------*/
    @media screen and (min-width: 768px) and (max-width: 991px) {

        /* margin bottom */
        .g-section-mb { margin-bottom: 48px; }
    }

    /* -----------------  992px-1199px  -----------------*/
    @media screen and (min-width: 992px) and (max-width: 1199px) {

    }

    /* -----------------  1200px-1343px  -----------------*/
    @media screen and (min-width: 1200px) and (max-width: 1343px) {

    }

    /* 問題：container 有自己預設 1320 嘛？ */
    /* -----------------  1344px-1920px  -----------------*/
    @media screen and (min-width: 1344px) and (max-width: 1920px) {
        .container {
            min-width: 1344px;
        }
    }

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

                        <div class="d-flex justify-content-end align-items-center">
                            <a href="#">
                                <div class="img-wrap pr-2">
                                    <img src="images/help.svg" alt="">
                                </div>
                            </a>
                            <a class="d-flex justify-content-center align-items-center" href="#">
                                <div class="img-wrap">
                                    <img src="images/account.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

		    
	</nav>
    <main>
        <!-- -----------movie detail section----------- -->
        <section class="movie-detail-section g-section-mb">
            <div class="container">
                <div class="row social-media d-none d-xl-flex">
                    <div class="d-flex justify-content-end mb-2">
                        <a href="#">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="#">
                            <i class="fab fa-line"></i>
                        </a>
                    </div>
                </div>
                <div class="row movie-info">
                    <div class="col-md-12 col-lg-6 d-flex">
                        <div class="col-sm-4 col-xl-6 movie-poster">
                            <div class="img-wrap">
                                <img src="images/poster_images/MSRbo2ocgQ6N9DdzBUk0-280 x 400.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8 col-xl-6 content">
                            <div>
                                <span class="pg-rate body2-r">輔導級</span>
                            </div>
                            <div>
                                <span class="title-tc">永恆族</span>
                            </div>
                            <div>
                                <span class="title-en">Eternals</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="reputation">
                                <div class="img-wrap1">
                                    <img src="./images/Rotten_Tomatoes.svg" alt="">
                                </div>
                                <span class="mr-3">53%</span>
                                <div class="img-wrap2">
                                    <img src="./images/IMDB_Logo.svg" alt="">
                                </div>
                                <span>79%</span>
                            </div>

                            <!-- 在 1920 螢幕上做測試 -->
                            <!-- <p>日期：<span class="data">2021/11/03</span></p>
                            <p>片長：<span class="data">156分鐘</span></p>
                            <p>導演：<span class="data">趙婷</span></p> -->

                            <p><span class="release-date"></span>日期：<span class="date-data">2021/11/03</span></p>
                            <p><span class="movie-length"></span>片長：<span class="length-data">156分鐘</span></p>
                            <p><span class="movie-director"></span>導演：<span class="director-data">趙婷</span></p>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="cat-tags">
                            <div class="cat-tag">奇幻</div>
                            <div class="cat-tag">冒險</div>
                            <div class="cat-tag">英雄</div>
                            <div class="cat-tag">劇情</div>
                        </div>
                        <div class="description-title">
                            <span class="section-header-b">劇情大綱</span>
                        </div>
                        <div class="description">
                            <p>永恆族是超越繁星的神族，七千年前來到地球，誓言保護人類，各色各異的他們，擁有超凡智慧與能力，長生不老，每人具備迥然不同的絕頂神力。然而守護地球期間，各自強大的永恆族人並非和樂融融，內部紛爭不斷，最終整個族群分崩離析，直到一群古老的宿敵現身…</p>
                        </div>
                        <div class="booking-trailer">
                            <button type="button" class="btn mr-3">
                                <i class="fas fa-ticket-alt mr-2"></i>
                                <span>立即購票</span>
                            </button>
                            <button type="button" class="btn btn-outline-light">
                                <i class="fab fa-youtube mr-2"></i>
                                <span>預告片</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- -----------related articles section----------- -->
        <section class="related-articles-section g-section-mb">
            <div class="container">
                <div class="row subtitle">
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b">討論區文章</span>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-end">
                        <a href="#">
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="sub-title-b mt-2">前往討論區</div>
                                <div class="ml-2"><i class="fas fa-chevron-right"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row articles-1920 d-none d-xl-flex">
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-light d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free">雷</div>
                                    <div class="arti-cat-tag mr-3">選片</div>
                                    <div class="sub-title-r">永恆族 vs 惡靈 首部曲</div>
                                </div>
                                <div class="time-stamp d-flex align-items-center">1天前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-light d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler">雷</div>
                                    <div class="arti-cat-tag mr-3">討論</div>
                                    <div class="sub-title-r">永恆族 – 大型斯卡羅現場</div>
                                </div>
                                <div class="time-stamp d-flex align-items-center">2天前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-dark d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler">雷</div>
                                    <div class="arti-cat-tag mr-3">討論</div>
                                    <div class="sub-title-r">永恆族-篇幅不足的半成品</div>
                                </div>
                                <div class="time-stamp d-flex align-items-center">3天前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-dark d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free">雷</div>
                                    <div class="arti-cat-tag mr-3">討論</div>
                                    <div class="sub-title-r">所以永恆族算成功了嗎</div>
                                </div>
                                <div class="time-stamp d-flex align-items-center">1週前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-light d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free">雷</div>
                                    <div class="arti-cat-tag mr-3">討論</div>
                                    <div class="sub-title-r">永恆族有一段關鍵台詞這樣改應該更好</div>
                                </div>
                                <div class="time-stamp d-flex align-items-center">1月前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-light d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free">雷</div>
                                    <div class="arti-cat-tag mr-3">討論</div>
                                    <div class="sub-title-r">永恆族有一段關鍵台詞這樣改應該更好</div>
                                </div>
                                <div class="time-stamp d-flex align-items-center">1月前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-dark d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free">雷</div>
                                    <div class="arti-cat-tag mr-3">討論</div>
                                    <div class="sub-title-r">永恆族有一段關鍵台詞</div>
                                </div>
                                <div class="time-stamp d-flex align-items-center">1月前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-dark d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free">雷</div>
                                    <div class="arti-cat-tag mr-3">討論</div>
                                    <div class="sub-title-r">永恆族有一段關鍵台詞這樣不好</div>
                                </div>
                                <div class="time-stamp d-flex align-items-center">1月前</div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="row articles-xl d-none d-md-flex d-lg-flex d-xl-none">
                    <ul>
                        <li class="mb-3"> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler">雷</div>
                                            <div class="arti-cat-tag mr-3">討論</div>
                                            <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                        </div>
                                        <div class="time-stamp d-flex align-items-center">12小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-dark d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler">雷</div>
                                            <div class="arti-cat-tag mr-3">討論</div>
                                            <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                        </div>
                                        <div class="time-stamp d-flex align-items-center">12小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-dark d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-free">雷</div>
                                            <div class="arti-cat-tag mr-3">新聞</div>
                                            <div class="sub-title-r">《作家我就爛》逼退《永恆族》榮登...</div>
                                        </div>
                                        <div class="time-stamp d-flex align-items-center">18小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-light d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-free">雷</div>
                                            <div class="arti-cat-tag mr-3">選片</div>
                                            <div class="sub-title-r">月老 vs. 永恆族</div>
                                        </div>
                                        <div class="time-stamp d-flex align-items-center">1天前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3"> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler">雷</div>
                                            <div class="arti-cat-tag mr-3">討論</div>
                                            <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                        </div>
                                        <div class="time-stamp d-flex align-items-center">12小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-dark d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler">雷</div>
                                            <div class="arti-cat-tag mr-3">討論</div>
                                            <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                        </div>
                                        <div class="time-stamp d-flex align-items-center">12小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-dark d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-free">雷</div>
                                            <div class="arti-cat-tag mr-3">新聞</div>
                                            <div class="sub-title-r">《作家我就爛》逼退《永恆族》榮登...</div>
                                        </div>
                                        <div class="time-stamp d-flex align-items-center">18小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-light d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-free">雷</div>
                                            <div class="arti-cat-tag mr-3">選片</div>
                                            <div class="sub-title-r">月老 vs. 永恆族</div>
                                        </div>
                                        <div class="time-stamp d-flex align-items-center">1天前</div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="row articles-md d-sm-flex d-md-none d-lg-none d-xl-none">
                    <ul>
                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex">
                                                <div class="spoiler">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex align-items-center">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex">
                                                <div class="spoiler">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex align-items-center">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sub-title-r">月老 vs. 永恆族</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex">
                                                <div class="spoiler-free">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex align-items-center">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex">
                                                <div class="spoiler">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex align-items-center">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sub-title-r">月老 vs. 永恆族</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex">
                                                <div class="spoiler-free">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex align-items-center">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sub-title-r">月老 vs. 永恆族</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex">
                                                <div class="spoiler-free">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex align-items-center">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sub-title-r">月老 vs. 永恆族</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex">
                                                <div class="spoiler-free">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex align-items-center">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sub-title-r">月老 vs. 永恆族</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex">
                                                <div class="spoiler">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex align-items-center">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="sub-title-r">月老 vs. 永恆族</div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- -----------actors list section----------- -->
        <section class="actors-list-section g-section-mb">
            <div class="container">
                <div class="row subtitle">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b mr-3">主要演員列表</span>
                            <span class="sub-title-r my-auto">共12人</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="carousel-wrapper d-flex list-unstyled flex-nowrap">
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/actors_list_section/actor-1-dark.jpg" alt="">
                                    <img class="image-hover" src="images/movie_info_page/actors_list_section/actor-4-hover.jpg" alt="">
                                </div>
                                <div class="actor-name text-center">
                                    <span class="sub-title-b mb-1">中文姓名</span>
                                    <span class="italic-16">English</span>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/actors_list_section/actor-2-dark.jpg" alt="">
                                    <img class="image-hover" src="images/movie_info_page/actors_list_section/actor-4-hover.jpg" alt="">
                                </div>
                                <div class="actor-name text-center">
                                    <span class="sub-title-b mb-1">中文姓名</span>
                                    <span class="italic-16">English</span>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/actors_list_section/actor-3-dark.jpg" alt="">
                                    <img class="image-hover" src="images/movie_info_page/actors_list_section/actor-4-hover.jpg" alt="">
                                </div>
                                <div class="actor-name text-center">
                                    <span class="sub-title-b mb-1">中文姓名</span>
                                    <span class="italic-16">English</span>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/actors_list_section/actor-4-dark.jpg" alt="">
                                    <img class="image-hover" src="images/movie_info_page/actors_list_section/actor-4-hover.jpg" alt="">
                                </div>
                                <div class="actor-name text-center">
                                    <span class="sub-title-b mb-1">中文姓名</span>
                                    <span class="italic-16">English</span>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/actors_list_section/actor-5-dark.jpg" alt="">
                                    <img class="image-hover" src="images/movie_info_page/actors_list_section/actor-4-hover.jpg" alt="">
                                </div>
                                <div class="actor-name text-center">
                                    <span class="sub-title-b mb-1">中文姓名</span>
                                    <span class="italic-16">English</span>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/actors_list_section/actor-6-dark.jpg" alt="">
                                    <img class="image-hover" src="images/movie_info_page/actors_list_section/actor-4-hover.jpg" alt="">
                                </div>
                                <div class="actor-name text-center">
                                    <span class="sub-title-b mb-1">中文姓名</span>
                                    <span class="italic-16">English</span>
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/actors_list_section/actor-7-dark.jpg" alt="">
                                    <img class="image-hover" src="images/movie_info_page/actors_list_section/actor-4-hover.jpg" alt="">
                                </div>
                                <div class="actor-name text-center">
                                    <span class="sub-title-b mb-1">中文姓名</span>
                                    <span class="italic-16">English</span>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between"> 
                            <button class="bg-transparent border-0">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="bg-transparent border-0">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- -----------movie stills section----------- -->
        <section class="movie-stills-section g-section-mb">
            <div class="container">
                <div class="row subtitle">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b mr-3">電影劇照</span>
                            <span class="sub-title-r my-auto">共8張</span>
                        </div>
                    </div>
                </div>
                <div class="row movie-stills">
                    <div class="imgs-demo">
                        <img src="images/movie_info_page/movie-stills/large-img.jpg" alt="">
                    </div>
                </div>
                <div class="row movie-stills-carousel">
                    <div class="col-1">
                        <button class="bg-transparent border-0">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                    </div>
                    <div class="col-10">
                        <div class="carousel-wrapper d-flex list-unstyled flex-nowrap">
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/movie-stills/79b7e7ceaf8de1f.jpeg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/movie-stills/cba30f7a-b679-4d67-aad5-f0ea0b6686b9-1349502133.jpeg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/movie-stills/large-img.jpg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/movie-stills/Eternals-1517204.jpeg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/movie-stills/eternals-tv-spot-e1633354006519.jpeg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/movie-stills/small-img.jpg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/movie-stills/small-img.jpg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="img-wrap pb-2">
                                    <img src="images/movie_info_page/movie-stills/small-img.jpg" alt="">
                                </div>
                            </li>
                        </div>
                    </div>
                    <div class="col-1">
                        <button class="bg-transparent border-0">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>    

    <?php require_once './tpl/foot.php' ?>

    <script>
        // $('.carousel-wrapper li').hover(function () {
        //     $(this).children().eq(1).css('opacity', '1');
        // }, function () {
        //     $(this).children().eq(1).css('opacity', '0');
        // });
        
        // ----------carousel----------
        let nowIndex = $(this).index();

        $('.actors-list-section .fa-chevron-left').click(function () {

            nowIndex -= 1
            if (nowIndex < 0) {
                nowIndex = 0
            }

            let nowX = nowIndex * -266 + 'px';
            $('.actors-list-section .carousel-wrapper').css('transform',`translateX(${nowX})`).css('transition','.8s');
        });

        $('.actors-list-section .fa-chevron-right').click(function () {
            console.log('hit', nowIndex)
            nowIndex += 1
            if (nowIndex > 4) {
                nowIndex = 4
            }
            
            let nowX = nowIndex * -266 + 'px';
            $('.actors-list-section .carousel-wrapper').css('transform',`translateX(${nowX})`).css('transition','.8s');
        });

        // ----------image demo----------
        $('.movie-stills-carousel .img-wrap > img').click(function () {
            console.log('hi');
            const imgSrc = $(this).attr('src');
            $('.img-demo img').attr('src', imgSrc);
        })


    </script>
</body>
</html>