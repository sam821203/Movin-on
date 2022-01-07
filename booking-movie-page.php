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
       border-radius: var(--border-radius-4);
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
        border-radius: 0 4px 0 4px;
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

    <?php require_once './db.inc.php' ?>

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

                    <!-- 1/6更改 電影資料提取與輸出 -->
                    <?php
                    $sql = "SELECT `poster`, `name_c`,  `name_e`, `score` FROM `movie_list` WHERE `parents_ID`='1' LIMIT 5 ";
                    $arr = $pdo->query($sql)->fetchAll();
                    foreach ($arr as $obj) {
                    ?>
                        <div class="top-five-card col-md-4 col-lg-4 col-xl">
                            <a href="./booking-time-page.php">
                                <div class="img-wrap">
                                    <img src=".\images\movies_overview_page\<?= $obj['poster'] ?> ">
                                </div>
                            </a>
                            <a href="./booking-time-page.php">
                                <div class="card-info">
                                    <div class="d-flex justify-content-between">
                                        <div class="movie-title">
                                            <span class="sub-title-r"><?= $obj['name_c'] ?></span>
                                            <p class="italic-16"><?= $obj['name_e'] ?></p>
                                        </div>
                                        <div class="rating d-flex">
                                            <i class="fas fa-star"></i>
                                            <span><?= $obj['score'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
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
                    <?php
                    $sql = "SELECT `poster`, `name_c`,  `name_e`, `rating` FROM `movie_list` ";
                    $arr = $pdo->query($sql)->fetchAll();
                    foreach ($arr as $obj) {
                    ?>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                            <a href="#">
                                <div class="mov-card">
                                    <div class="img-wrap">
                                        <img src=".\images\movies_overview_page\<?= $obj['poster'] ?> ">
                                    </div>
                                    <p class="sub-title-r"><?= $obj['name_c'] ?></p>
                                    <p class="italic-16"><?= $obj['name_e'] ?></p>
                                    <div class="pg-rate "><?= $obj['rating'] ?></div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                
            </div>
            
        </section>
    </main>

    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>

    <!-- booking-ratingcolor js -->
    <script src="./js/booking-ratingcolor.js"></script> 

</body>
</html>