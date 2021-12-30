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
        --box-shadow-red: 0px 0px 16px 4px rgba(245,61,61,0.25);
    }

    body {
        background: url("images/forum_overview_page/bg-img-min.jpg") top center no-repeat;
        background-size: contain;
        background-color: var(--bg-color);
        width: 100%;
    }
    
    /* -----------------movinon navbar----------------- */
    .movinon-navbar {
        background-color: rgba(18, 18, 18, 0.5);
        width: 100%;
        position: fixed;
        top: 0%;
        z-index: 1999;
    }

    .movinon-navbar .movinon-logo {
        max-width: 202px;
    }

    .movinon-logo img {
        width: 100%;
    }   

    .movinon-navbar .row {
        padding-top: 12px;
        padding-bottom: 12px;
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

    .movinon-navbar .navbar-icons .img-wrap {
        width: 90%;
        object-fit: cover;
        object-position: 50% 50%;
    }

    .movinon-navbar .navbar-icons .img-wrap img {
        width: 100%;
        height: 100%;
    }

    /* -----------------all sections----------------- */
    .forum-cards-section .card-md {
        margin-bottom: 32px;
    }

    .forum-cat-section .card-md {
        margin-bottom: 32px;
    }

    /* -----------------forum info section----------------- */
    .forum-info-section {
        margin-top: 368px;
        margin-bottom: 56px;
    }

    .forum-info-section .sub-title-r {
        opacity: var(--opacity-75);
    }

    .forum-info-section .forum-info-title {
        margin-bottom: 32px;
    }
    
    .forum-info-section .forum-info-board {
        background-color: var(--bg-color);
        padding: 88px 48px 32px 48px;
        opacity: var(--opacity-75);
        border-radius: 8px;
        position: relative;
        height: 326px;
        overflow: auto;
    }

    ::-webkit-scrollbar {
        width: 10px;
        height: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: rgba(255,255,255,0.25);
    }

    ::-webkit-scrollbar-track {
        background: rgba(18,18,18,0.75);
    }

    .board-title .sub-title-m {
        width: 100%;
        text-align: center;
        padding: 16px;
        background-color: rgba(255,255,255,0.1);
        border-radius: 8px 0 0 0;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .board-content .sub-title-r {
        margin-bottom: 32px;
    }

    .board-content .body1-r {
        padding-top: 16px;
        border-top: 1px solid rgba(255,255,255,0.25);
    }

    /* -----------------forum cards section----------------- */
    .forum-cards-section {
        margin-bottom: 144px;
    }

    .forum-cards-section .subtitle {
        margin-bottom: 32px;
    }

    .forum-cards-section .subtitle .red-line, 
    .forum-cards-section .subtitle .section-header-b {
        margin: auto 20px auto 0px;
    }

    .forum-cards-section .row1,
    .forum-cards-section .row2 {
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
    }

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

    .forum-cards-section .row3 .col-9 {
        padding: 0;
    }

    .forum-cards-section .row3 .col-9 .col-12 {
        padding: 0;
        display: flex;
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
    .com-6-count { background-color: #3F259A; }
    .com-7-count { background-color: #B57441; }
    .com-8-count { background-color: #6AABFF; }
    .com-9-count { background-color: #7D500F; }
    .com-10-count { background-color: #A6B126; }    
    

    .forum-cards-section .content .section-header-r {
        margin-bottom: 4px;
    }

    .forum-cards-section .content .body1-b {
        opacity: var(--opacity-75);
    }

    /* -------------------forum cat section-------------------- */
    .forum-cat-section {
        margin-bottom: 144px;
    }

    .forum-cat-section .subtitle {
        margin-bottom: 32px;
    }

    .forum-cat-section .img-wrap {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .forum-cat-section .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        opacity: var(--opacity-50);
        border-radius: var(--border-radius-8);
    }

    .forum-cat-section .img-wrap .content {
        position: absolute;
        width: 100%;
        bottom: 0;
        left: 50%;
        background: rgba(18,18,18,0.75);
        transform: translateX(-50%);
    }

    .forum-cat-section .img-wrap .content .section-header-r,
    .forum-cat-section .img-wrap .content .sub-title-m {
        padding-top: 8px;
        padding-bottom: 10px;
        text-align: center;
        opacity: var(--opacity-25);
    }

    /* .forum-cat-section .img-wrap .content .section-header-r,
    .forum-cat-section .img-wrap .content .sub-title-m {
        padding-top: 8px;
        padding-bottom: 10px;
        text-align: center;
        opacity: var(--opacity-25);
    } */

    .forum-cat-section .img-wrap:hover .section-header-r,
    .forum-cat-section .img-wrap:hover .content .sub-title-m {
        opacity: var(--opacity-90);
        transition: .4s ease-in-out;
    }

    .forum-cat-section .card-md:hover .img-wrap {
        opacity: 1;
        transition: .4s ease-in-out;
    }

    /* -----------------.container large >= 992px，小於 992px-----------------*/
    @media screen and (max-width: 992px) {
        body {
            background: url("images/movie_booking_page/bg_img/TEST.jpg") top center no-repeat;
            background-size: contain;
            background-color: var(--bg-color);
        }

        .forum-info-section {
            margin-top: 144px;
            margin-bottom: 56px;
        }

        /* -------movinon navbar-------*/

        .movinon-navbar .movinon-logo {
            max-width: 178px;
        }

        .movinon-navbar .row {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .movinon-navbar .sub-title-r {
            letter-spacing: 1px;
        }

        .movinon-navbar .options li {
            display: none;
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
    }

    /* -----------------.container x-large >= 1200px，小於 1200px-----------------*/
    /* @media screen and (max-width: 1200px) {
        .movie-detail-section .cat-tags .cat-tag {
            margin-top: 32px;
        }
    } */

    /* -----------------.container x-large >= 1400px，小於 1400px-----------------*/
    @media (min-width: 1400px) {
        .container {
            max-width: 1344px;
        }
    }
    
</style>

<body>
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
                            <div class="img-wrap pr-2 d-flex align-items-center">
                                <img src="images/help.svg" alt="">
                            </div>
                        </a>
                        <a class="d-flex justify-content-center" href="#">
                            <div class="img-wrap">
                                <img src="images/account.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- -----------forum info section----------- -->
        <section class="forum-info-section">
            <div class="container">
                <!-- --------------------display 大於 1200-------------------- -->
                <div class="row d-none d-xl-flex">
                    <div class="col-6">
                        <div class="forum-info-title">
                            <div class="main-header-b">影迷討論區</div>
                            <p class="sub-title-r">本討論區提供電影影評、心得或上映情報之相關分享，或國內外影展、電影獎項、推薦片單等話題討論。</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="forum-info-board">
                            <div class="board-title">
                                <div class="sub-title-m">討論區規定</div>
                            </div>
                            <div class="board-content">
                                <p class="sub-title-r">於本討論區發文，需遵守全站站規與本區規則。違者將刪除文章，累犯將停權 30 天。</p>
                                <p class="body1-r">1. 禁止發文標題爆雷，內文如有爆雷內容<br>
                                ⚠️請於標題最前面加上 #有雷<br>
                                2. 禁止於無雷文章回應爆雷<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應</p>
                        </div>
                        </div>
                    </div>
                </div>
                
                <!-- --------------------display 小於 1200-------------------- -->
                <div class="row d-block d-xl-none">
                    <div class="col-12">
                        <div class="forum-info-title">
                            <div class="main-header-b">影迷討論區</div>
                            <p class="sub-title-r">本討論區提供電影影評、心得或上映情報之相關分享，或國內外影展、電影獎項、推薦片單等話題討論。</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="forum-info-board">
                            <div class="board-title">
                                <div class="sub-title-m">討論區規定</div>
                            </div>
                            <div class="board-content">
                                <p class="sub-title-r">於本討論區發文，需遵守全站站規與本區規則。違者將刪除文章，累犯將停權 30 天。</p>
                                <p class="body1-r">1. 禁止發文標題爆雷，內文如有爆雷內容<br>
                                ⚠️請於標題最前面加上 #有雷<br>
                                2. 禁止於無雷文章回應爆雷<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                3. 禁止發表與本板主旨無關的內容與回應</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="forum-cards-section">
            <div class="container d-none d-xl-block">
                <div class="row subtitle">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line"></div>
                            <span class="section-header-b">精選討論區</span>
                        </div>
                    </div>
                </div>

                <!-- -------------------上------------------- -->
                <div class="row row1">
                    <div class="col-4 d-flex flex-column justify-content-between">
                        <div class="col-12">
                            <a href="#">
                                <div class="img-wrap card-1">
                                    <img src="images/forum_overview_page/card-1.jpg" alt="">
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
                                    <img src="images/forum_overview_page/card-2.jpg" alt="">
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
                                <img src="images/forum_overview_page/card-3.jpg" alt="">
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
                                <img src="images/forum_overview_page/card-4.jpg" alt="">
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
                                <img src="images/forum_overview_page/card-5.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">梅艷芳</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-5-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- -------------------下------------------- -->
                <div class="row row3">
                    <div class="col-3">
                        <a href="#">
                            <div class="img-wrap card-6">
                                <img src="images/forum_overview_page/card-6.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">迷離夜蘇活</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-6-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-9">
                        <div class="col-12 inner-row1">
                            <div class="col-4">
                                <a href="#">
                                    <div class="img-wrap card-7">
                                        <img src="images/forum_overview_page/card-7.jpg" alt="">
                                        <div class="content">
                                            <div class="section-header-r">詭扯</div>
                                            <span class="body1-b">Today</span><span class="caption-12 com-count com-7-count">+<span class="count">134</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-8 inner-row2">
                                <a href="#">
                                    <div class="img-wrap card-8">
                                        <img src="images/forum_overview_page/card-8.jpg" alt="">
                                        <div class="content">
                                            <div class="section-header-r">瀑布</div>
                                            <span class="body1-b">Today</span><span class="caption-12 com-count com-8-count">+<span class="count">134</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="col-8">
                                <a href="#">
                                    <div class="img-wrap card-9">
                                        <img src="images/forum_overview_page/card-9.jpg" alt="">
                                        <div class="content">
                                            <div class="section-header-r">永恆族</div>
                                            <span class="body1-b">Today</span><span class="caption-12 com-count com-9-count">+<span class="count">134</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#">
                                    <div class="img-wrap card-10">
                                        <img src="images/forum_overview_page/card-10.jpg" alt="">
                                        <div class="content">
                                            <div class="section-header-r">金牌特務</div>
                                            <span class="body1-b">Today</span><span class="caption-12 com-count com-10-count">+<span class="count">134</span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- --------------------display 小於 1200-------------------- -->
            <div class="container d-block d-lg-block d-xl-none">
                <div class="row subtitle">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line"></div>
                            <span class="section-header-b">精選討論區</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-1-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">再說一次我願意</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-1-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-2-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">駭客任務</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-2-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-3-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">蜘蛛人: 無家日</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-3-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-4-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">魔鬼剋星未來世</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-4-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-5-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">梅艷芳</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-5-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-6-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">迷離夜蘇活</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-6-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-7-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">詭扯</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-7-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-8-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">瀑布</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-8-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-9-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">永恆族</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-9-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-sm-12 col-md-6 col-lg-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card-10-sm.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">金牌特務</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-10-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                </div> 
            </div>
        </section>

        <section class="forum-cat-section">
            <div class="container">
                <div class="row subtitle">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line"></div>
                            <span class="section-header-b my-auto">分類討論區</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-md-6 col-lg-4 col-xl-3 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/forum_cat_1.jpg" alt="">
                                <div class="content d-none d-lg-block d-xl-block">
                                    <div class="section-header-r">冒險</div>
                                </div>
                                <div class="content d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <div class="sub-title-m">冒險</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 col-xl-3 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/forum_cat_2.jpg" alt="">
                                <div class="content d-none d-lg-block d-xl-block">
                                    <div class="section-header-r">奇幻</div>
                                </div>
                                <div class="content d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <div class="sub-title-m">奇幻</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 col-xl-3 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/forum_cat_3.jpg" alt="">
                                <div class="content d-none d-lg-block d-xl-block">
                                    <div class="section-header-r">科幻</div>
                                </div>
                                <div class="content d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <div class="sub-title-m">科幻</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 col-xl-3 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/forum_cat_4.jpg" alt="">
                                <div class="content d-none d-lg-block d-xl-block">
                                    <div class="section-header-r">恐怖</div>
                                </div>
                                <div class="content d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <div class="sub-title-m">恐怖</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 col-xl-3 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/forum_cat_5.jpg" alt="">
                                <div class="content d-none d-lg-block d-xl-block">
                                    <div class="section-header-r">懸疑</div>
                                </div>
                                <div class="content d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <div class="sub-title-m">懸疑</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 col-xl-3 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/forum_cat_6.jpg" alt="">
                                <div class="content d-none d-lg-block d-xl-block">
                                    <div class="section-header-r">犯罪</div>
                                </div>
                                <div class="content d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <div class="sub-title-m">犯罪</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 col-xl-3 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/forum_cat_7.jpg" alt="">
                                <div class="content d-none d-lg-block d-xl-block">
                                    <div class="section-header-r">戰爭</div>
                                </div>
                                <div class="content d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <div class="sub-title-m">戰爭</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 col-xl-3 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/forum_cat_8.jpg" alt="">
                                <div class="content d-none d-lg-block d-xl-block">
                                    <div class="section-header-r">記錄</div>
                                </div>
                                <div class="content d-xs-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <div class="sub-title-m">記錄</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>    

    <?php require_once './tpl/foot.php' ?>

    <script>
        // var elem = document.querySelector('.grid');
        // var msnry = new Masonry( elem, {
        //     itemSelector: '.grid-item',
        //     columnWidth: 200
        // });

        // external js: masonry.pkgd.js, imagesloaded.pkgd.js

        // init Masonry
        // var $grid = $('.grid').masonry({
        // itemSelector: '.grid-item',
        // percentPosition: true,
        // columnWidth: '.grid-sizer'
        // });

        // $grid.imagesLoaded().progress( function() {
        // $grid.masonry();
        // });  

    </script>
</body>
</html>