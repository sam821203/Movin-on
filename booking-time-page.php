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
        width: 100%;
        background: url("images/movie_booking_page/bg_img/bg_img_gradient-min.jpg") top center no-repeat;
        background-size: contain;
        background-color: var(--bg-color);
    }

    /* -----------------movinon navbar----------------- */
    .movinon-navbar {
        background-color: rgba(18, 18, 18, 0.5);
        /* position: fixed; */
        width: 100%;
        z-index: 999;
        height: 100px;
    }

    .movinon-navbar .movinon-logo {
        max-width: 226px;
    }

    .movinon-logo img {
        width: 100%;
    }   

    .movinon-navbar .container {
        position: relative;
    }

    .movinon-navbar .row {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* -----------------movie selecting section----------------- */
    .movie-selecting-section {
        margin-top: 140px;
    }

    .movie-selecting-section .movie-info,
    .movie-selecting-section .movie-division {
        padding-left: 112px;
        padding-right: 112px;
        margin-bottom: 72px;
    }

    .movie-selecting-section
    .movie-info
    .movie-poster { width: 25%; }

    .movie-selecting-section
    .movie-info
    .img-wrap {
        object-fit: cover;
        object-position: 50% 50%;
        box-shadow: 0px 0px 16px 4px rgba(0, 0, 0, 0.25);
    }

    .movie-selecting-section
    .movie-info
    .img-wrap 
    img {
        width: 100%;
        height: 100%;
        border-radius: var(--border-radius-4);
    }

    .movie-selecting-section .rating {
        margin-bottom: 48px;
    }
    
    .movie-selecting-section .content {
        width: 75%;
        padding-left: 32px;
    }

    .movie-selecting-section .content span {
        display: inline-block;
    }

    .movie-selecting-section .pg-rate {
        border: 1px solid #E2A526;
        border-radius: var(--border-radius-50);
        padding: 4px 12px;
        opacity: var(--opacity-75);
        margin-bottom: 16px;
    }

    .movie-selecting-section .title-tc {
        margin-bottom: 4px;
    }

    .movie-selecting-section .title-en {
        opacity: var(--opacity-50);
    }

    .movie-selecting-section .movie-date {
        padding-left: 112px;
        padding-right: 112px;
        margin-bottom: 32px;
    }

    .movie-selecting-section .movie-division {
        margin-bottom: 96px;
    }

    .movie-selecting-section .content p {
        margin-bottom: 8px;
        font-size: 20px;
    }
    
    .movie-selecting-section .content .movie-length,
    .movie-selecting-section .content .movie-director { opacity: var(--opacity-90); }

    .movie-selecting-section .content .length-data, 
    .movie-selecting-section .content .director-data { opacity: var(--opacity-75); }

    /* -----------movie date----------- */
    .movie-date .fa-calendar-check {
        font-size: 20px;
        margin-right: 8px;
    }

    .movie-division .fa-city {
        font-size: 16px;
        margin-right: 8px;
    }

    .movie-date .sub-title-r {
        opacity: var(--opacity-90);
    }

    .movie-date .day {
        text-align: center;
        padding: 12px 12px 0px 12px;
        border: 1px solid white;
        border-radius: var(--border-radius-4);
        display: block;
        opacity: var(--opacity-25);
        margin-right: 32px;
    }

    .movie-date .day span {
        display: block;
    }

    .movie-date .day .roboto-condensed {
       font-size: 56px;
       letter-spacing: -2px;
       opacity: var(--opacity-90);
    }

    .movie-division .option {
        display: block;
        padding: 8px;
        border: 1px solid white;
        border-radius: var(--border-radius-4);
        opacity: var(--opacity-25);
        margin-right: 16px;
    }

    /* -----------------movie showtime section----------------- */
    .movie-showtime-section .subtitle {
        margin-bottom: 64px;
    }

    .movie-showtime-section .subtitle .dot {
        width: 12px;
        height: 12px;
        margin-left: 12px;
        margin-right: 4px;
    }

    .red-line {
        background-color: var(--brand-color);
        width: 8px;
        height: 40px;
        box-shadow: var(--box-shadow-red);
        margin-right: 20px;
    }

    .dot {
        border-radius: var(--border-radius-50);
        opacity: var(--opacity-75);
    }

    .green-dot {
        background-color: #6DF14B;
    }

    .yellow-dot {
        background-color: #F8CF40;
    }

    .red-dot {
        background-color: #F84052;
    }

    .movie-showtime-section .timetable {
        padding-left: 112px;
        padding-right: 112px;
        margin-bottom: 32px;
    }

    .movie-showtime-section .gradient-line {
        background: linear-gradient(135deg, #121212 0%,#fff 100%);
        height: 1px;
        border-radius: var(--border-radius-50);
        margin-top: 16px;
        margin-bottom: 16px;
    }

    .movie-showtime-section .cinema-name {
        width: 18%;
        padding-right: 16px;
        word-break: keep-all;
    }

    .movie-showtime-section .showtime-options {
        width: 82%;
    }

    .movie-showtime-section .movie-type {
        width: 12%;
        text-align: center;
    }

    .movie-showtime-section .options {
        width: 88%;
    }

    .movie-showtime-section .movie-type span {
        display: inline-block;
        padding: 6px 20px 6px 20px;
        border-radius: var(--border-radius-50);
        background-color: rgba(255,255,255,0.1);
    }
    
    .movie-showtime-section 
    .options 
    .showtime {
        border: 1px solid rgba(255,255,255,0.5);
        border-radius: var(--border-radius-50);
        padding: 8px 16px 6px 16px;
        margin-right: 16px;
        margin-bottom: 16px;
    }

    .movie-showtime-section .options .dot {
        width: 8px;
        height: 8px;
    }

    /* -----------------selected----------------- */
    .movie-date .selected,
    .movie-division .selected,
    .timetable .showtime.selected {
        border: 1px solid var(--brand-color);
        opacity: 1;
        box-shadow: var(--box-shadow-red);
    }
</style>

<body>
    <!-- -----------movinon navbar----------- -->
    <nav>
        <div class="movinon-navbar">
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-4">
                            <div class="movinon-logo">
                                <a class="d-flex align-items-center" href="#">
                                    <img src="./images/LOGO.svg" alt="">
                                </a>
                            </div>
                        </div>
    
                        <div class="col-4">
                            <div class="d-flex justify-content-between">
                                <a href="#">
                                    <div class="pl-0">
                                        <span>影迷討論區</span>
                                        <i class="fas fa-chevron-down text-light body1-r"></i>
                                    </div>
                                </a>
                                <a class="pr-3" href="#">
                                    <div>電影排行榜</div>
                                </a>
                                <a class="pr-3" href="#">
                                    <div>電影新聞</div>
                                </a>
                                <a href="#">
                                    <div>快速購票</div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-4 px-0">
                            <div class="d-flex justify-content-end align-items-center">
                                <a class="pr-4" href="#">
                                    <div>客服 icon</div>
                                </a>
                                <a class="d-flex justify-content-center align-items-center" href="#">
                                    <div>會員 icon</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <!-- -----------movie selecting section----------- -->
        <section class="movie-selecting-section">
            <div class="container">
                <div class="row movie-info">
                    <div class="d-flex">
                        <div class="movie-poster">
                            <div class="img-wrap">
                                <img src="images/poster_images/MSRbo2ocgQ6N9DdzBUk0-280 x 400.jpg" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <div>
                                <span class="pg-rate body2-r">輔導級</span>
                            </div>
                            <div>
                                <span class="title-tc main-header-b">永恆族</span>
                            </div>
                            <div>
                                <span class="title-en italic-20 mb-3">Eternals</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>

                            <p><span class="movie-length"></span>片場：<span class="length-data">156分鐘</span></p>
                            <p><span class="movie-director"></span>導演：<span class="director-data">趙婷</span></p>
                            
                        </div>
                    </div>
                </div>
                <div class="row movie-date">
                    <div class="col-12 mb-3">
                        <i class="far fa-calendar-check"></i>
                        <span class="sub-title-r">日期</span>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="day selected">
                                <span>星期一</span>
                                <span class="sub-title-r">12月</span>
                                <span class="roboto-condensed">15</span>
                            </div>
                            <div class="day day2">
                                <span>星期二</span>
                                <span class="sub-title-r">12月</span>
                                <span class="roboto-condensed">16</span>
                            </div>
                            <div class="day day3">
                                <span>星期三</span>
                                <span class="sub-title-r">12月</span>
                                <span class="roboto-condensed">17</span>
                            </div>
                            <div class="day day4">
                                <span>星期四</span>
                                <span class="sub-title-r">12月</span>
                                <span class="roboto-condensed">18</span>
                            </div>
                            <div class="day day5">
                                <span>星期五</span>
                                <span class="sub-title-r">12月</span>
                                <span class="roboto-condensed">19</span>
                            </div>
                            <div class="day day6">
                                <span>星期六</span>
                                <span class="sub-title-r">12月</span>
                                <span class="roboto-condensed">20</span>
                            </div>
                            <div class="day day7">
                                <span>星期天</span>
                                <span class="sub-title-r">12月</span>
                                <span class="roboto-condensed">21</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row movie-division">
                    <div class="col-12 mb-3">
                        <i class="fas fa-city"></i>
                        <span class="sub-title-r">城市</span>
                    </div>
                    <div class="col-12">
                        <div class="options d-flex">
                            <span class="option selected">北區</span>
                            <span class="option">桃竹苗</span>
                            <span class="option">中區</span>
                            <span class="option">南區與離島</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- -----------movie showtime section----------- -->
        <section class="movie-showtime-section">
            <div class="container">
                <div class="row subtitle">
                    <div class="col-6">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b">場次時間表</span>
                        </div>
                    </div>
                    <div class="col-6 my-auto">
                        <div class="d-flex justify-content-end">
                            <div>座位狀態：</div>
                            <div class="dot green-dot my-auto"></div><span>充足</span>
                            <div class="dot yellow-dot my-auto"></div><span>緊張 (低於40%)</span>
                            <div class="dot red-dot my-auto"></div><span>告急 (低於5%)</span>
                        </div>
                    </div>
                </div>
                <div class="row timetable">
                    <div class="col-12">
                        <div class="d-flex">
                            <span class="cinema-name sub-title-r">台北天母新光影城</span>
                            <div class="showtime-options d-flex flex-column">
                                <div class="d-flex mb-3">
                                    <div class="movie-type">
                                        <span>數位</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">09:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">10:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">11:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">12:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">13:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">14:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">15:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">17:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">20:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">21:30</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="movie-type">
                                        <span>IMAX</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">09:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">11:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">13:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">14:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">17:45</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="gradient-line"></div>
                    </div>
                </div>
                <div class="row timetable">
                    <div class="col-12">
                        <div class="d-flex">
                            <span class="cinema-name sub-title-r">林口 MITSUI OUTLET PARK
                                威秀影城</span>
                            <div class="showtime-options d-flex flex-column">
                                <div class="d-flex mb-3">
                                    <div class="movie-type">
                                        <span>數位</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">09:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">10:45</span>
                                        </div>
                                        <div class="showtime selected d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">11:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">12:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">13:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">14:45</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gradient-line"></div>
                    </div>
                </div>
                <div class="row timetable">
                    <div class="col-12">
                        <div class="d-flex">
                            <span class="cinema-name sub-title-r">台北信義威秀影城</span>
                            <div class="showtime-options d-flex flex-column">
                                <div class="d-flex mb-3">
                                    <div class="movie-type">
                                        <span>數位</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">09:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">10:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">11:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">12:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">13:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">14:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">15:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">17:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">20:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">21:30</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="movie-type">
                                        <span>IMAX</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">09:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">11:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">13:30</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="gradient-line"></div>
                    </div>
                </div>
                <div class="row timetable">
                    <div class="col-12">
                        <div class="d-flex">
                            <span class="cinema-name sub-title-r">MUVIE CINEMAS 台北松仁威秀</span>
                            <div class="showtime-options d-flex flex-column">
                                <div class="d-flex mb-3">
                                    <div class="movie-type">
                                        <span>數位</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">09:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot red-dot my-auto mr-2"></div>
                                            <span class="body1-r">10:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">11:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">12:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">13:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">14:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">13:30</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot green-dot my-auto mr-2"></div>
                                            <span class="body1-r">14:45</span>
                                        </div>
                                        <div class="showtime d-flex">
                                            <div class="dot yellow-dot my-auto mr-2"></div>
                                            <span class="body1-r">13:30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gradient-line"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once './tpl/foot.php' ?>

    <script>
        
    </script>
</body>
</html>