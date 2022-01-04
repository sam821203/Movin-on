<!-- 這裡需要 require "./db.inc.php" -->
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

    /* ----------------------------top five section---------------------------- */
    .top-five-section .subtitle {
        margin-top: 200px;
    }

    .top-five-section .subtitle .red-line, 
    .top-five-section .subtitle .section-header-b {
        margin: auto 20px auto 0px;
    }

    .top-five-section .top-five-card {
        margin-bottom: 32px;
    }

    .top-five-section .img-wrap {
        width: 100%;
        margin-bottom: 12px;
        display: flex;
        border-radius: var(--border-radius-4);
        box-shadow: var(--box-shadow-black);
    }

    .top-five-section .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        border-radius: var(--border-radius-4);
    }

    .top-five-section .top-five-card .rating {
        padding-top: 4px;
        margin-bottom: 4px;
    }

    .top-five-section .top-five-card .rating .fa-star {
        margin-right: 6px;
    }

    .top-five-section p.italic-16 {
        color: rgb(145, 145, 145);
    }


    /* ----------------------------other movies section---------------------------- */
    .other-movies-section .mov-card {
       position: relative;
       margin-bottom: 32px;
       background-color: rgba(32,32,32,0.75);
       padding: 24px 0px;
       text-align: center;
       border-radius: var(--border-radius-8);
       box-shadow: var(--box-shadow-card-sm);
    }

    .other-movies-section .img-wrap {
        width: 120px;
        height: 120px;
        margin: 0 auto 12px auto;
    }

    .other-movies-section .img-wrap img {
        border-radius: 50%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        opacity: var(--opacity-75);
    }

    .other-movies-section .img-wrap:hover img {
        opacity: var(--opacity-90);
    }

    .other-movies-section .pg-rate { 
        border-radius: 0 8px 0 8px;
        padding: 4px 8px 6px 8px;
        position: absolute;
        top: 0px;
        right: 0px;
    }

    .other-movies-section .age0 { background-color: rgba(94,179,58,0.5); }
    .other-movies-section .age6 { background-color: rgba(26,162,229,0.5); }
    .other-movies-section .age12 { background-color: rgba(226,165,38,0.5); }
    .other-movies-section .age15 { background-color: rgba(236,119,32,0.5); }
    .other-movies-section .age18 { background-color: rgba(227,11,32,0.5); }


    .other-movies-section .italic-16 { opacity: var(--opacity-50); }

    /* =================================== @media =================================== */
    /* ============================================================================== */

    /* ------------------------  小於 1920px  ------------------------*/
    @media screen and (max-width: 1920px) {

        .top-five-section .top-five-card {
            margin-bottom: 0;
        }
    }

    /* ------------------------  小於 1200px  ------------------------*/
    @media screen and (max-width: 1200px) {

        .top-five-section .top-five-card {
            margin-bottom: 32px;
        }
    }

    /* ------------------------  小於 768px  ------------------------*/
    @media screen and (max-width: 768px) {

        /* top five section */
        .top-five-section .top-five-card {
            margin-bottom: 32px;
        }

        .top-five-section .rating {
            font-size: 14px;
        }

        /* other movies section */
        .other-movies-section .mov-card {
            border-radius: var(--border-radius-4);
        }

        .other-movies-section .img-wrap {
            width: 88px;
            height: 88px;
            margin: 0 auto 12px auto;
        }

        .other-movies-section .pg-rate {
            padding: 4px 6px 4px 6px;
            border-radius: 0 4px 0 4px;
        }
    }
    
    /* ------------------------  小於 576px  ------------------------*/
    @media screen and (max-width: 576px) {

        /* top five section */
        .top-five-section .top-five-card.col-6:nth-child(even), 
        .top-five-section .top-five-card.col-sm-6:nth-child(even) {
            padding: 0 16px 0 8px;
        }

        .top-five-section .top-five-card.col-6:nth-child(odd),
        .top-five-section .top-five-card.col-sm-6:nth-child(odd) {
            padding: 0 8px 0 16px;
        }

        .top-five-section .top-five-card .rating .fa-star {
            margin-right: 4px;
        }

        /* other movies section */
        .other-movies-section .mov-card {
            border-radius: var(--border-radius-4);
        }

        .other-movies-section .img-wrap {
            width: 80px;
            height: 80px;
        }

        .other-movies-section .pg-rate {
            padding: 4px;
            font-size: 14px;
        }

        .other-movies-section .row .col-4:nth-child(3n+1),
        .other-movies-section .row .col-sm-4:nth-child(3n+1),
        .other-movies-section .row .col-md-4:nth-child(3n+1) {
            padding: 0 8px 0 16px;
        }

        .other-movies-section .row .col-4:nth-child(3n+2),
        .other-movies-section .row .col-sm-4:nth-child(3n+2),
        .other-movies-section .row .col-md-4:nth-child(3n+2) {
            padding: 0 8px;
        }

        .other-movies-section .row .col-4:nth-child(3n+3),
        .other-movies-section .row .col-sm-4:nth-child(3n+3),
        .other-movies-section .row .col-md-4:nth-child(3n+3) {
            padding: 0 16px 0 8px;
        }

        .other-movies-section .mov-card {
            margin-bottom: 16px;
        }
    }

    /* ------------------------  小於 418px  ------------------------*/
    @media screen and (max-width: 418px) {

        /* top five section */
        .top-five-section .top-five-card .rating .fa-star {
            margin-right: 2px;
            font-size: 12px;
        }

        /* other movies section */
        .other-movies-section .img-wrap {
            width: 64px;
            height: 64px;
        }

        .other-movies-section .pg-rate {
            padding: 2px 4px 3px 4px;
            font-size: 12px;
        }
    }
    
</style>

<body>

    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <main>
        <!-- -----------top five section----------- -->
        <section class="top-five-section g-section-mb">
            <div class="container">
                <div class="row subtitle g-subtitle-mb">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line"></div>
                            <span class="section-header-b">訂票排行榜</span>
                        </div>
                    </div>
                </div>

                <div class="row d-none d-md-flex d-flex">
                    <div class="top-five-card col-md-4 col-lg-4 col-xl">
                        <a href="./booking-time-page.php">
                            <div class="img-wrap">
                                <img src="images/main_page/rank1.jpg" alt="">
                            </div>
                        </a>
                        <a href="./booking-time-page.php">
                            <div class="card-info">
                                <div class="d-flex justify-content-between">
                                    <div class="movie-title">
                                        <span class="sub-title-r">永恆族</span>
                                        <p class="italic-16">Eternals</p>
                                    </div>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <span>4.0</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-five-card col-md-4 col-lg-4 col-xl">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank2.jpg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-info">
                                <div class="d-flex justify-content-between">
                                    <div class="movie-title">
                                        <span class="sub-title-r">刀劍神域：<br>Progressive</span>
                                        <p class="italic-16">Sword Art Online: Progressive</p>
                                    </div>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <span>4.7</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-five-card col-md-4 col-lg-4 col-xl">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank3.jpg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-info">
                                <div class="d-flex justify-content-between">
                                    <div class="movie-title">
                                        <span class="sub-title-r">詭扯</span>
                                        <p class="italic-16">Treat or Trick</p>
                                    </div>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <span>4.1</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-five-card col-md-4 col-lg-4 col-xl">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank4.jpg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-info">
                                <div class="d-flex justify-content-between">
                                    <div class="movie-title">
                                        <span class="sub-title-r">我的英雄學院劇場版：世界英雄任務</span>
                                        <p class="italic-16">My Hero Academia The Movie : World Heores Mission</p>
                                    </div>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <span>4.4</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-five-card col-md-4 col-lg-4 col-xl">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank5.jpg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-info">
                                <div class="d-flex justify-content-between">
                                    <div class="movie-title">
                                        <span class="sub-title-r">迷離夜蘇活</span>
                                        <p class="italic-16">Last Night in Soho</p>
                                    </div>
                                    <div class="rating d-flex">
                                        <i class="fas fa-star"></i>
                                        <span>4.1</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row d-flex d-sm-flex d-lg-none">
                    <div class="top-five-card col-6 col-sm-6">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank1.jpg" alt="">
                            </div>
                        </a>
                        <a href="./booking-time-page.php">
                            <div class="card-info">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>

                                <div class="movie-title">
                                    <span class="sub-title-r">永恆族</span>
                                    <p class="italic-16">Eternals</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-five-card col-6 col-sm-6">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank2.jpg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-info">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>

                                <div class="movie-title">
                                    <span class="sub-title-r">刀劍神域：<br>Progressive</span>
                                    <p class="italic-16">Sword Art Online: Progressive</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-five-card col-6 col-sm-6">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank3.jpg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-info">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                                <div class="movie-title">
                                    <span class="sub-title-r">詭扯</span>
                                    <p class="italic-16">Treat or Trick</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-five-card col-6 col-sm-6">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank4.jpg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-info">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>

                                <div class="movie-title">
                                    <span class="sub-title-r">我的英雄學院劇場版：世界英雄任務</span>
                                    <p class="italic-16">My Hero Academia The Movie : World Heores Mission</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="top-five-card col-6 col-sm-6">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank5.jpg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-info">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>

                                <div class="movie-title">
                                    <span class="sub-title-r">迷離夜蘇活</span>
                                    <p class="italic-16">Last Night in Soho</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    
                </div>

                <!-- <div class="row d-flex d-sm-flex d-xl-none">
                    <div class="col-sm-6 col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank1.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank2.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank3.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank4.jpg" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-4 mb-4">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/main_page/rank5.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>   
        </section>
        
        <!-- -----------other movies section----------- -->
        <section class="other-movies-section g-section-mb">
            <div class="container">
                <div class="row subtitle g-subtitle-mb">
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

    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>

    <script></script>

</body>
</html>