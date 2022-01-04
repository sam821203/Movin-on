<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>

<style>

    <?php require_once './tpl/global-style.css' ?>
    
    body {
        width: 100%;
        background: url("images/booking_time_page/bg_img/bg_img_gradient_1200.jpg") top center no-repeat;
        background-size: contain;
        background-color: var(--bg-color);
    }

    /* -------section margin bottom------- */
    .movie-selecting-section { margin-top: 240px; }

    /* -----------------movie selecting section----------------- */
    .movie-selecting-section .movie-info,
    .movie-selecting-section .movie-date,
    .movie-selecting-section .movie-division {
        padding-left: 112px;
        padding-right: 112px;
    }

    .movie-selecting-section .movie-info,
    .movie-selecting-section .movie-date {
        margin-bottom: 48px;
    }

    /* 2021/1/4 修改： */
    
    /* .movie-selecting-section
    .movie-info
    .booking-time-poster { width: 25%; } */

    .movie-selecting-section
    .movie-info
    .img-wrap {
        display: flex;
        box-shadow: var(--box-shadow-black);
        border-radius: var(--border-radius-4);
    }

    .movie-selecting-section
    .movie-info
    .img-wrap 
    img {
        width: 100%;
        height: 100%;
        border-radius: var(--border-radius-4);
        object-fit: cover;
        object-position: 50% 50%;
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
        margin-bottom: 8px;
    }

    .movie-selecting-section .rating {
        margin-bottom: 32px;
    }

    .movie-selecting-section .title-tc { 
        margin-bottom: 4px; 
        font-size: 48px;
        font-weight: 700;
    }

    .movie-selecting-section .title-en { 
        margin-bottom: 16px;
        opacity: var(--opacity-50); 
        font-style: italic;
        font-size: 20px;
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
    .movie-selecting-section .row.movie-date {
        overflow: auto;
    }

    .movie-selecting-section .row.movie-date::-webkit-scrollbar {
        display: none;
    }

    .movie-selecting-section .movie-date .fa-calendar-check {
        font-size: 20px;
        margin-right: 8px;
    }

    .movie-selecting-section .movie-date .sub-title-r {
        opacity: var(--opacity-90);
    }

    .movie-selecting-section .movie-date .day {
        text-align: center;
        padding: 12px 14px 0px 12px;
        border: 1px solid white;
        border-radius: var(--border-radius-4);
        display: block;
        opacity: var(--opacity-25);
        margin-right: 24px;
    }

    .movie-selecting-section .movie-date .day span {
        display: block;
    }

    .movie-selecting-section .movie-date .day .roboto-condensed {
       font-size: 56px;
       letter-spacing: -2px;
       opacity: var(--opacity-90);
    }

    /* -----------movie division----------- */
    .movie-selecting-section .movie-division .fa-city {
        font-size: 16px;
        margin-right: 8px;
    }

    .movie-selecting-section .movie-division .divisions {
        flex-wrap: nowrap;
    }

    .movie-selecting-section .movie-division .division {
        display: inline-block;
        padding: 8px;
        border: 1px solid white;
        border-radius: var(--border-radius-4);
        opacity: var(--opacity-25);
        margin-right: 16px;
        margin-bottom: 16px;
    }

    /* -----------------movie showtime section----------------- */
    .movie-showtime-section .subtitle {
        margin-bottom: 64px;
        padding: 0;
    }

    .movie-showtime-section .subtitle .dot {
        width: 12px;
        height: 12px;
        margin-left: 12px;
        margin-right: 4px;
    }

    .movie-showtime-section .seat-left-info {
        display: flex;
        justify-content: end;
    }

    .dot {
        border-radius: var(--border-radius-50);
        opacity: var(--opacity-75);
    }

    .green-dot { background-color: #6DF14B; }
    .yellow-dot { background-color: #F8CF40; }
    .red-dot { background-color: #F84052; }

    .movie-showtime-section .timetable {
        padding-left: 112px;
        padding-right: 112px;
        margin-bottom: 32px;
    }

    .movie-showtime-section .timetable .timetable-row {
        display: flex;
    }

    .movie-showtime-section .divide-line {
        background-color: rgba(255,255,255,0.25);
        height: 1px;
        border-radius: var(--border-radius-50);
        margin-top: 32px;
        margin-bottom: 4px;
    }

    .movie-showtime-section .cinema-name {
        width: 18%;
        padding-right: 16px;
        word-break: keep-all;
    }

    .movie-showtime-section .showtime-options-wrap {
        width: 82%;
        display: flex;
        flex-direction: column;
    }

    .movie-showtime-section .showtime-options {
        display: flex;
        margin-bottom: 16px;
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
        border-radius: var(--border-radius-4);
        background-color: rgba(255,255,255,0.1);
        line-height: 100%;
    }

    .movie-showtime-section .movie-type span.digital {
        padding: 12px 20px 11px 20px;
    }

    .movie-showtime-section .movie-type span.imax {
        padding: 12px 16px 11px 16px;
    }
    
    .movie-showtime-section .options .showtime {
        border: 1px solid rgba(255,255,255,0.5);
        border-radius: var(--border-radius-4);
        padding: 12px 16px 10px 16px;
        margin-right: 16px;
        margin-bottom: 16px;
        line-height: 100%;
    }
    
    .movie-showtime-section .options .dot {
        width: 8px;
        height: 8px;
    }

    /* -----------------selected----------------- */
    .movie-selecting-section .movie-date .selected,
    .movie-selecting-section .movie-division .selected,
    .timetable .showtime.selected {
        border: 1px solid var(--brand-color);
        opacity: 1;
        box-shadow: var(--box-shadow-red);
    }

    /* =================================== @media =================================== */
    /* ============================================================================== */

    /* ------------------------  大於 1400px  ------------------------*/
    @media (max-width: 1400px) {

        .movie-showtime-section .timetable {
            padding: 0; 
            margin-bottom: 24px;
        }
    }

     /* ------------------------  小於 1200px  ------------------------*/
     @media screen and (max-width: 1200px) {
        
        /* section margin bottom */
       .movie-selecting-section { margin-top: 96px; }

       .movie-selecting-section .movie-info,
       .movie-selecting-section .movie-date,
       .movie-selecting-section .movie-division {
           padding-left: 96px;
           padding-right: 96px;
           margin-bottom: 72px;
       }
    }

    /* ------------------------  小於 992px  ------------------------*/
    @media screen and (max-width: 992px) {
        body {
            background: url("images/booking_time_page/bg_img/bg_img_gradient_992.jpg") top center no-repeat;
            background-size: contain;
            background-color: var(--bg-color);
        }

        .movie-selecting-section { margin-top: 48px; }

        .movie-selecting-section
        .movie-info
        .booking-time-poster { width: 33.33%; }
        
        .movie-selecting-section .content {
            width: 66.66%;
            padding-left: 32px;
        }

        .movie-selecting-section .movie-info,
        .movie-selecting-section .movie-date,
        .movie-selecting-section .movie-division {
            padding-left: 48px;
            padding-right: 48px;
            margin-bottom: 48px;
        }

        /* movie showtime section */
        .movie-showtime-section .subtitle {
            margin-bottom: 32px;
            padding: 0;
        }

        .movie-showtime-section .timetable .timetable-row {
            display: block;
        }

        .movie-showtime-section .timetable-row .cinema-name {
            width: 100%;
            padding-right: 0;
            margin-bottom: 16px;
        }

        .movie-showtime-section .showtime-options-wrap {
            width: 100%;
        }

        .movie-showtime-section .timetable-row .movie-type {
            text-align: left;
            margin-bottom: 16px;
        }
    }

    /* ------------------------  小於 768px  ------------------------*/
    @media screen and (max-width: 768px) {

        /* movie selecting section */
        .movie-selecting-section .booking-time-poster {
            padding: 0;
        }

        .movie-selecting-section .title-tc { 
            margin-bottom: 4px; 
            font-size: 34px;
        }

        .movie-selecting-section .title-en { 
            margin-bottom: 16px;
            font-size: 16px;
        }

        .movie-selecting-section .rating {
            margin-bottom: 32px;
            font-size: 14px;
        }

        .movie-selecting-section .content p { 
            margin-bottom: 4px;
            font-size: 16px;
        }

        .movie-selecting-section .movie-info,
        .movie-selecting-section .movie-date,
        .movie-selecting-section .movie-division {
            padding: 0;
        }

        .movie-selecting-section .movie-date .day {
            margin-right: 16px;
        }

        .movie-selecting-section .movie-division .division {
            margin-right: 12px;
        }

        /* movie showtime section */
        .movie-showtime-section .seat-left-info {
            justify-content: start;
        }

        .movie-showtime-section .showtime-options,
        .movie-showtime-section .options {
            width: 100%;
        }

        .movie-showtime-section .showtime-options {
            display: block;
        }

        .movie-showtime-section .movie-type {
            width: 100%;
        }

        .movie-showtime-section .movie-type span.digital {
            padding: 12px 30px 11px 30px;
        }

        .movie-showtime-section .movie-type span.imax {
            padding: 12px 16px 11px 16px;
        }
    }

    /* ------------------------  小於 576px  ------------------------*/
    @media screen and (max-width: 576px) {
        .movie-showtime-section .seat-left-info {
            font-size: 14px;
        }
    }

    /* ------------------------ 小於 418px  ------------------------*/
    @media screen and (max-width: 418px) {
        
        .movie-selecting-section { margin-top: 32px; }

        .movie-selecting-section .movie-info,
        .movie-selecting-section .movie-date,
        .movie-selecting-section .movie-division {
            margin-bottom: 32px;
        }

        .section-header-b { font-size: 20px; }
        .related-articles-section .subtitle { margin-bottom: 24px; }

        .sub-title-r, 
        .sub-title-m,
        .sub-title-b { font-size: 16px;}

        .body1-r,
        .body1-m,
        .body1-b { font-size: 14px; }

        .movie-selecting-section .content p { 
            margin-bottom: 4px;
            font-size: 16px;
        }

        .movie-selecting-section .movie-date .day span {
            font-size: 14px;
            white-space: nowrap;
        }

        .movie-selecting-section .movie-date .day .roboto-condensed {
            font-size: 48px;
        }

        .movie-selecting-section .movie-date .day {
            text-align: center;
            padding: 8px 10px 0px 8px;
        }

        /* movie showtime section */
        .movie-showtime-section div.subtitle {
            overflow: auto;
        }

        .movie-showtime-section div.subtitle::-webkit-scrollbar {
            display: none;
        }

        .movie-showtime-section .options .showtime {
            padding: 8px 16px;
        }
    }
    
</style>

<body>

    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <main>
        <!-- -----------movie selecting section----------- -->
        <section class="movie-selecting-section g-section-mb">
            <div class="container">
                <div class="row movie-info">
                    <div class="d-flex">
                        <div class="booking-time-poster">
                            <div class="img-wrap">
                                <img src="images/poster_images/MSRbo2ocgQ6N9DdzBUk0-280 x 400.jpg" alt="">
                            </div>
                        </div>
                        <div class="content">
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
                        <div class="x d-flex">
                            <a href="#">
                                <div class="day selected">
                                    <span>星期一</span>
                                    <span class="sub-title-r">12月</span>
                                    <span class="roboto-condensed">15</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="day day2">
                                    <span>星期二</span>
                                    <span class="sub-title-r">12月</span>
                                    <span class="roboto-condensed">16</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="day day3">
                                    <span>星期三</span>
                                    <span class="sub-title-r">12月</span>
                                    <span class="roboto-condensed">17</span>
                                </div> 
                            </a>
                            <a href="#">
                                <div class="day day4">
                                    <span>星期四</span>
                                    <span class="sub-title-r">12月</span>
                                    <span class="roboto-condensed">18</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="day day5">
                                    <span>星期五</span>
                                    <span class="sub-title-r">12月</span>
                                    <span class="roboto-condensed">19</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="day day6">
                                    <span>星期六</span>
                                    <span class="sub-title-r">12月</span>
                                    <span class="roboto-condensed">20</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="day day7">
                                    <span>星期天</span>
                                    <span class="sub-title-r">12月</span>
                                    <span class="roboto-condensed">21</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row movie-division">
                    <div class="col-12 mb-3">
                        <i class="fas fa-city"></i>
                        <span class="sub-title-r">城市</span>
                    </div>
                    <div class="col-12">
                        <div class="divisions">
                            <a href="#">
                                <span class="division selected">北區</span>
                            </a>
                            <a href="#">
                                <span class="division">桃竹苗</span>
                            </a>
                            <a href="#">
                                <span class="division">中區</span>
                            </a>
                            <a href="#">
                                <span class="division">南區與離島</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- -----------movie showtime section----------- -->
        <section class="movie-showtime-section g-section-mb">
            <div class="container">
                <div class="row subtitle">
                    <div class="col-sm-12 col-md-6">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b">場次時間表</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 my-auto">
                        <div class="seat-left-info">
                            <!-- <span>座位狀態：</span>
                            <span class="dot green-dot my-auto">充足</span>
                            <span class="dot yellow-dot my-auto">緊張 (低於40%)</span>
                            <span class="dot red-dot my-auto">告急 (低於5%)</span> -->

                            <!-- 問題：如何 overflow?  -->
                            <div>座位狀態：</div>
                            <div class="dot green-dot my-auto"></div><span>充足</span>
                            <div class="dot yellow-dot my-auto"></div><span>緊張 (低於40%)</span>
                            <div class="dot red-dot my-auto"></div><span>告急 (低於5%)</span>
                        </div>
                    </div>
                </div>
                <!-- 第一家電影院 -->
                <div class="row timetable">
                    <div class="col-12">
                        <div class="timetable-row">
                            <div class="cinema-name sub-title-r">台北天母新光影城</div>
                            <div class="showtime-options-wrap">
                                <div class="showtime-options">
                                    <div class="movie-type">
                                        <span class="digital">數位</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <!-- 第一個場次 -->
                                        <a href="./booking-seat-page.php">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">09:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">10:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">11:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">12:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">13:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">14:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">15:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">17:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">20:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">21:30</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="showtime-options">
                                    <div class="movie-type">
                                        <span class="imax">IMAX</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <!-- 第一個場次 -->
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">09:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">10:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">11:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">12:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">13:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">14:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">15:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">17:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">20:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">21:30</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divide-line"></div>
                    </div>
                </div>
                
                <div class="row timetable">
                    <div class="col-12">
                        <div class="timetable-row">
                            <div class="cinema-name sub-title-r">台北天母新光影城</div>
                            <div class="showtime-options-wrap">
                                <div class="showtime-options">
                                    <div class="movie-type">
                                        <span class="digital">數位</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <!-- 第一個場次 -->
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">09:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">10:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">11:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">12:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">13:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">14:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">15:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">17:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">20:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">21:30</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divide-line"></div>
                    </div>
                </div>

                <div class="row timetable">
                    <div class="col-12">
                        <div class="timetable-row">
                            <div class="cinema-name sub-title-r">台北天母新光影城</div>
                            <div class="showtime-options-wrap">
                                <div class="showtime-options">
                                    <div class="movie-type">
                                        <span class="digital">數位</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <!-- 第一個場次 -->
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">09:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">10:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">11:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">12:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">13:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">14:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">15:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">17:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">20:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">21:30</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="showtime-options">
                                    <div class="movie-type">
                                        <span class="imax">IMAX</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <!-- 第一個場次 -->
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">09:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">10:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">11:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">12:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">13:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">14:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">15:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">17:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">20:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">21:30</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divide-line"></div>
                    </div>
                </div>

                <div class="row timetable">
                    <div class="col-12">
                        <div class="timetable-row">
                            <div class="cinema-name sub-title-r">台北天母新光影城</div>
                            <div class="showtime-options-wrap">
                                <div class="showtime-options">
                                    <div class="movie-type">
                                        <span class="digital">數位</span>
                                    </div>
                                    <div class="options d-flex flex-wrap">
                                        <!-- 第一個場次 -->
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">09:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">10:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">11:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">12:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">13:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot red-dot my-auto mr-2"></div>
                                                <span class="body1-r">14:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">15:30</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">17:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot yellow-dot my-auto mr-2"></div>
                                                <span class="body1-r">20:45</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="showtime d-flex">
                                                <div class="dot green-dot my-auto mr-2"></div>
                                                <span class="body1-r">21:30</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divide-line"></div>
                    </div>
                </div>
                
            </div>
        </section>
    </main>

    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>

    <script></script>
</body>
</html>