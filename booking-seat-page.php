<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>

<style>

    body {
        width: 100%;
        background: url("images/booking_seat_page/bg_img_gradient_1200.jpg") top center no-repeat;
        background-size: contain;
        background-color: var(--bg-color);
    }

    /* -----------------movie info section----------------- */
    .movie-info-section {
        margin-top: 248px;
    }

    .movie-info-section .movie-info,
    .movie-info-section .movie-division {
        margin-bottom: 72px;
    }

    .movie-info-section
    .movie-info
    .movie-poster { 
        width: 25%; 
    }

    .movie-info-section .movie-info .img-wrap {
        display: flex;
        border-radius: var(--border-radius-4);
        box-shadow: var(--box-shadow-black);
    }

    .movie-info-section .movie-info .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        border-radius: var(--border-radius-4);
    }
    
    .movie-info-section .content {
        width: 75%;
        padding-left: 32px;
    }

    .movie-info-section .content span {
        display: inline-block;
    }

    .movie-info-section .pg-rate {
        border: 1px solid #E2A526;
        border-radius: var(--border-radius-50);
        padding: 4px 12px;
        opacity: var(--opacity-75);
        margin-bottom: 16px;
    }

    .movie-info-section .title-tc {
        margin-bottom: 4px;
    }

    .movie-info-section .title-en {
        opacity: var(--opacity-50);
    }

    .movie-info-section .movie-date {
        padding-left: 112px;
        padding-right: 112px;
        margin-bottom: 32px;
    }

    .movie-info-section .movie-division {
        margin-bottom: 96px;
    }

    .movie-info-section .content p {
        margin-bottom: 8px;
        font-size: 20px;
    }
    
    .movie-info-section .content .movie-length,
    .movie-info-section .content .movie-director { opacity: var(--opacity-90); }

    .movie-info-section .content .length-data, 
    .movie-info-section .content .director-data { opacity: var(--opacity-75); }
    
    /* -----------------seat dataviz section----------------- */
    .seat-dataviz {
        margin-bottom: 56px;
    }

    .seat-dataviz .selected,
    .seat-dataviz .available,
    .seat-dataviz .occupied {
        display: flex;
        align-items: center;
    }

    .seat-dataviz .selected .img-wrap {
        width: 62px;
        margin-right: -8px;
        display: flex;
    }

    .seat-dataviz .available .img-wrap {
        width: 24px;
        margin-right: 8px;
        opacity: var(--opacity-25);
        display: flex;
    }

    .seat-dataviz .occupied .img-wrap {
        width: 24px;
        margin-right: 8px;
        opacity: var(--opacity-10);
        display: flex;
    }

    .seat-dataviz .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center center;
    }

    .seat-dataviz .selected,
    .seat-dataviz .available {
        margin-right: 32px;
    }

    .seat-dataviz .time-left {
        color: var(--success-color);
        font-weight: 500;
        text-shadow: var(--text-shadow-green);
    }

    /* -----------------screen section----------------- */
    .screen span {
        opacity: var(--opacity-75);
        position: absolute;
        top: 30px;
        left: 50%;
        transform: translateX(-50%);
    }

    .screen .img-wrap {
        position: relative;
        width: 100%;
        margin: 0 auto;
        padding: 0 24px;
    }

    .screen .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    .screen .col-12.img-wrap {
        display: flex;
        justify-content: center;
    }
    
    /* -----------------booking seat section----------------- */
    .booking-seat-section .seats-area .seats {
        display: flex;
        justify-content: space-between;
    }

    .seats-row-m .col-2,
    .seats-row-m .col-8 {
        padding: 0;
    }

    .booking-seat-section .seats .seat {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .booking-seat-section .seats-area .seats-row-m .img-wrap {
        width: 34px;
        margin: 0 4px;
        cursor: pointer;
    }

    .booking-seat-section .seats-area .seats-row-m .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center center;
        opacity: var(--opacity-25);
    }

    .booking-seat-section .seats-row-num {
        margin-bottom: 20px;
    }

    .booking-seat-section .seats-row {
        margin: 20px 0;
    }

    .booking-seat-section .seats-row-l {
        font-size: 20px;
        text-align: center;
        opacity: var(--opacity-75);
    }

    .booking-seat-section .seats-row-m {
        padding: 0 32px;
    }

    /* -----------------ticket detail----------------- */
    .booking-seat-section .ticket-detail {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }

    /* .booking-seat-section .ticket-detail i {
        margin-right: 12px;
    } */

    .booking-seat-section .ticket-detail i {
        margin-right: 12px;
    } 

    .booking-seat-section .seat-column {
        width: 42px;
        display: flex;
        justify-content: center;
        opacity: var(--opacity-75);
    }

    .booking-seat-section .ticket-detail .detail-title { 
        opacity: var(--opacity-90); 
        margin-left: 12px;
    }

    .booking-seat-section .ticket-detail .devision,
    .booking-seat-section .ticket-detail .date,
    .booking-seat-section .ticket-detail .cinema,
    .booking-seat-section .ticket-detail .type,
    .booking-seat-section .ticket-detail .showtime,
    .booking-seat-section .ticket-detail .my-seat { 
        opacity: var(--opacity-50); 
    }

    .booking-seat-section .ticket-detail .fa-map-marker-alt { font-size: 20px;}
    .booking-seat-section .ticket-detail .fa-calendar-alt { font-size: 18px; }
    .booking-seat-section .ticket-detail .fa-kaaba { font-size: 16px; }
    .booking-seat-section .ticket-detail .fa-clock { font-size: 18px; }

    .booking-seat-section .ticket-detail .img-wrap {
        width: 18px;
        display: flex;
    }

    .booking-seat-section .ticket-detail .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    /* .booking-seat-section .ticket-detail */

    /* -----------------btn area----------------- */
    .seats-area .btn-area {
        margin-top: 48px;
        display: flex;
    }

    .seats-area .btn-area a {
        border-radius: var(--border-radius-50);
        /* padding: 8px 36px; */
        color: white;
        padding: 8px 32px;
        margin-right: 16px;
    }

    .seats-area .btn-area a:nth-child(2) {
        background-color: var(--brand-color);
        box-shadow: var(--box-shadow-red);
        padding: 8px 32px;
    }
</style>

<body>

    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <main>
        <div class="movie-info-section">
            <div class="container">
                <div class="row movie-info">
                    <div class="col-9 d-flex">
                        <div class="col-1"></div>
                        <div class="col-10">
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
                                    <div class="rating mb-5">
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
                        <div class="col-1"></div>
                    </div>
                    <div class="col-3"></div>

                    
                </div>
            </div>
        </div>

        <div class="booking-seat-section g-section-mb">
            <div class="container">
                <div class="row seat-dataviz">
                    <div class="col-9 d-flex justify-content-between">
                        <div class="col-1"></div>
                        <div class="col-10 d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="selected d-flex">
                                    <div class="img-wrap">
                                        <img src="images/movie_seat_selected.svg" alt="">
                                    </div>
                                    <span>您的座位</span>
                                </div>
                                <div class="available d-flex">
                                    <div class="img-wrap">
                                        <img src="images/movie_seat.svg" alt="">
                                    </div>
                                    <span>未售出</span>
                                </div>
                                <div class="occupied d-flex">
                                    <div class="img-wrap">
                                        <img src="images/movie_seat.svg" alt="">
                                    </div>
                                    <span>已售出</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div>剩餘訂票時間：<span class="time-left">02:53</span></div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="col-3"></div>
                </div>

                <div class="row screen">
                    <div class="col-9">
                        <div class="col-12">
                            <div class="img-wrap">
                                <img src="images/screen_line.svg" alt="">
                                <span>Screen</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>

                <div class="row seats-area">
                    <div class="col-9">
                    <div class="col-12 seats-row-num d-flex align-items-center">
                            <div class="col-1 seats-row-l"></div>
                            <div class="col-10 seats-row-m">
                                <div class="col-12 seats">

                                    <!-- -----left 2 seats----- -->
                                    <div class="seats-l d-flex">
                                        <div class="seat-column column1">1</div>
                                        <div class="seat-column column2">2</div>
                                    </div>

                                    <!-- -----middle 10 seats----- -->
                                    <div class="seats-m d-flex">
                                        <div class="seat-column column3">3</div>
                                        <div class="seat-column column4">4</div>
                                        <div class="seat-column column5">5</div>
                                        <div class="seat-column column6">6</div>
                                        <div class="seat-column column7">7</div>
                                        <div class="seat-column column8">8</div>
                                        <div class="seat-column column9">9</div>
                                        <div class="seat-column column10">10</div>
                                        <div class="seat-column column11">11</div>
                                        <div class="seat-column column12">12</div>
                                    </div>

                                    <!-- -----right 2 seats----- -->
                                    <div class="seats-r d-flex">
                                        <div class="seat-column column13">13</div>
                                        <div class="seat-column column14">14</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 seats-row-l"></div>
                        </div>


                        <div class="col-12 seats-row d-flex align-items-center">
                            <!-- 問題：這裡的 A 會跑到迴圈嘛？ -->
                            <div class="col-1 seats-row-l">A</div>
                            <div class="col-10 seats-row-m">
                                <div class="col-12 seats">

                                    <!-- -----left 2 seats----- -->
                                    <div class="seats-l d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----middle 10 seats----- -->
                                    <div class="seats-m d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----right 2 seats----- -->
                                    <div class="seats-r d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 seats-row-l">A</div>
                        </div>
                        <div class="col-12 seats-row d-flex align-items-center">
                            <div class="col-1 seats-row-l">B</div>
                            <div class="col-10 seats-row-m">
                                <div class="col-12 seats">

                                    <!-- -----left 2 seats----- -->
                                    <div class="seats-l d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----middle 10 seats----- -->
                                    <div class="seats-m d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----right 2 seats----- -->
                                    <div class="seats-r d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 seats-row-l">B</div>
                        </div>
                        <div class="col-12 seats-row d-flex align-items-center">
                            <div class="col-1 seats-row-l">C</div>
                            <div class="col-10 seats-row-m">
                                <div class="col-12 seats">

                                    <!-- -----left 2 seats----- -->
                                    <div class="seats-l d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----middle 10 seats----- -->
                                    <div class="seats-m d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----right 2 seats----- -->
                                    <div class="seats-r d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 seats-row-l">C</div>
                        </div>
                        <div class="col-12 seats-row d-flex align-items-center">
                            <div class="col-1 seats-row-l">D</div>
                            <div class="col-10 seats-row-m">
                                <div class="col-12 seats">

                                    <!-- -----left 2 seats----- -->
                                    <div class="seats-l d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----middle 10 seats----- -->
                                    <div class="seats-m d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----right 2 seats----- -->
                                    <div class="seats-r d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 seats-row-l">D</div>
                        </div>
                        <div class="col-12 seats-row d-flex align-items-center">
                            <div class="col-1 seats-row-l">E</div>
                            <div class="col-10 seats-row-m">
                                <div class="col-12 seats">

                                    <!-- -----left 2 seats----- -->
                                    <div class="seats-l d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----middle 10 seats----- -->
                                    <div class="seats-m d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----right 2 seats----- -->
                                    <div class="seats-r d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 seats-row-l">E</div>
                        </div>
                        <div class="col-12 seats-row d-flex align-items-center">
                            <div class="col-1 seats-row-l">F</div>
                            <div class="col-10 seats-row-m">
                                <div class="col-12 seats">

                                    <!-- -----left 2 seats----- -->
                                    <div class="seats-l d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----middle 10 seats----- -->
                                    <div class="seats-m d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----right 2 seats----- -->
                                    <div class="seats-r d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 seats-row-l">F</div>
                        </div>
                        <div class="col-12 seats-row d-flex align-items-center">
                            <div class="col-1 seats-row-l">G</div>
                            <div class="col-10 seats-row-m">
                                <div class="col-12 seats">

                                    <!-- -----left 2 seats----- -->
                                    <div class="seats-l d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----middle 10 seats----- -->
                                    <div class="seats-m d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----right 2 seats----- -->
                                    <div class="seats-r d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 seats-row-l">G</div>
                        </div>
                        <div class="col-12 seats-row d-flex align-items-center">
                            <div class="col-1 seats-row-l">H</div>
                            <div class="col-10 seats-row-m">
                                <div class="col-12 seats">

                                    <!-- -----left 2 seats----- -->
                                    <div class="seats-l d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----middle 10 seats----- -->
                                    <div class="seats-m d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>

                                    <!-- -----right 2 seats----- -->
                                    <div class="seats-r d-flex">
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                        <div class="img-wrap seat">
                                            <img src="images/movie_seat.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 seats-row-l">H</div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="sub-title-b">購票資訊</div>
                        <hr>
                        <div class="ticket-detail">
                            <i class="fas fa-map-marker-alt"></i><span class="detail-title">城市：</span><span class="devision">北區</span>
                        </div>
                        <div class="ticket-detail">
                            <i class="far fa-calendar-alt"></i><span class="detail-title">日期：</span><span class="date">2022/1/21</span>
                        </div>
                        <div class="ticket-detail">
                            <i class="fas fa-kaaba"></i><span class="detail-title">影城：</span><span class="cinema">台北信義威秀</span>
                        </div>
                        <div class="ticket-detail">
                            <i class="fas fa-glasses"></i><span class="detail-title">類型：</span><span class="type">數位</span>
                        </div>
                        <div class="ticket-detail">
                            <i class="far fa-clock"></i><span class="detail-title">時間：</span><span class="showtime">09:45</span>
                        </div>
                        <div class="ticket-detail">
                            <div class="img-wrap">
                                <img src="images/movie_seat_white.svg" alt="">
                            </div>
                            <span class="detail-title">座位：</span><span class="my-seat">3</span>
                        </div>

                        <div class="btn-area">
                            <a class="btn btn-outline-light" href="#">
                                <span>重新選擇</span>
                            </a>
                            
                            <a class="btn" href="./payment-page.php">
                                <span>前往結帳</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>

    <script></script>

</body>
</html>