<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once './tpl/head.php' ?>

<style>
    /* 1/11 修改 bgi */
    body {
        width: 100%;
        background-position: top center;
        background-repeat: no-repeat;
        background-size: contain;
        background-color: var(--bg-color);
    }

    /* -------section margin bottom------- */
    .movie-selecting-section {
        margin-top: 240px;
    }

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

    .movie-selecting-section .movie-info .img-wrap {
        display: flex;
        box-shadow: var(--box-shadow-black);
        border-radius: var(--border-radius-4);
    }

    .movie-selecting-section .movie-info .img-wrap img {
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
    .movie-selecting-section .content .movie-director {
        opacity: var(--opacity-90);
    }

    .movie-selecting-section .content .length-data,
    .movie-selecting-section .content .director-data {
        opacity: var(--opacity-75);
    }

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

    /* 1/11更改:註解border,margin需要改 */
    .movie-selecting-section .movie-division .division>span {
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

    .movie-showtime-section .timetable .timetable-row {
        display: flex;
    }

    .movie-showtime-section .divide-line {
        background-color: rgba(255, 255, 255, 0.25);
        height: 1px;
        border-radius: var(--border-radius-50);
        margin-top: 32px;
        margin-bottom: 4px;
    }

    /* 1/11 更改 */
    .movie-showtime-section .cinema-name {
        width: 18%;
        padding-right: 16px;
        word-break: break-all;
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
        background-color: rgba(255, 255, 255, 0.1);
        line-height: 100%;
    }

    .movie-showtime-section .movie-type span.digital {
        padding: 12px 20px 11px 20px;
    }

    .movie-showtime-section .movie-type span.imax {
        padding: 12px 16px 11px 16px;
    }

    .movie-showtime-section .options .showtime {
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: var(--border-radius-4);
        padding: 12px 16px 10px 16px;
        margin-right: 16px;
        margin-bottom: 16px;
        line-height: 100%;
    }

    .movie-showtime-section .showtime .body1-r {
        opacity: var(--opacity-90);
    }

    .movie-showtime-section .options .dot {
        width: 8px;
        height: 8px;
    }

    /* -----------------selected----------------- */
    /* 1/11 更改:註解選取日期、地區css */
    .timetable .showtime.selected {
        border: 1px solid var(--brand-color);
        opacity: 1;
        box-shadow: var(--box-shadow-red);
    }

    /* 1/11 更改:加入 hover */
    .movie-selecting-section .movie-date .selected:hover,
    .movie-selecting-section .movie-division .div-sel:hover {
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
        /* .movie-selecting-section { margin-top: 96px; } */
        .movie-selecting-section {
            margin-top: 144px;
        }

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

        .movie-selecting-section .movie-info .booking-time-poster {
            width: 33.33%;
        }

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

        .movie-selecting-section {
            margin-top: 32px;
        }

        .movie-selecting-section .movie-info,
        .movie-selecting-section .movie-date,
        .movie-selecting-section .movie-division {
            margin-bottom: 32px;
        }

        .section-header-b {
            font-size: 20px;
        }

        .related-articles-section .subtitle {
            margin-bottom: 24px;
        }

        .sub-title-r,
        .sub-title-m,
        .sub-title-b {
            font-size: 16px;
        }

        .body1-r,
        .body1-m,
        .body1-b {
            font-size: 14px;
        }

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

<?php if (isset($_GET['movie_id'])) { ?>
    <?php $sql = "SELECT `movie_bg`FROM `movie` WHERE `movie_id` = {$_GET['movie_id']}";
    $arr = $pdo->query($sql)->fetchAll();
    foreach ($arr as $objbg) {
    ?>

        <body style="background-image: url('images/<?= $objbg['movie_bg'] ?>')">
            <!-- movinon-navbar -->
            <?php require_once './tpl/movinon-navbar.php' ?>

            <main>
                <!-- -----------movie selecting section----------- -->
                <section class="movie-selecting-section g-section-mb">
                    <div class="container">
                        <div class="row movie-info">

                            <div class="d-flex">
                                <?php
                                $sql = "SELECT `id`, `poster`, `ticket_poster`, `pg_rate_text`, `mName_TC` , `mName_EN`, `length`, `director_TC` FROM `movie` WHERE `movie_id` = {$_GET['movie_id']}";
                                $arr = $pdo->query($sql)->fetchAll();
                                foreach ($arr as $objM) {
                                ?>
                                    <div class="booking-time-poster">
                                        <div class="img-wrap">
                                            <img src="images/movies_overview_page/現正熱映/<?= $objM['poster'] ?>.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="content">
                                        <div>
                                            <span class="pg-rate body2-r"><?= $objM['pg_rate_text'] ?></span>
                                        </div>
                                        <div>
                                            <span class="title-tc"><?= $objM['mName_TC'] ?></span>
                                        </div>
                                        <div>
                                            <span class="title-en"><?= $objM['mName_EN'] ?></span>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star "></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>

                                        <p><span class="movie-length"></span>片長：<span class="length-data"><?= $objM['length'] ?>分鐘</span></p>
                                        <p><span class="movie-director"></span>導演：<span class="director-data"><?= $objM['director_TC'] ?></span></p>

                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row movie-date">
                            <div class="col-12 mb-3">
                                <i class="far fa-calendar-check"></i>
                                <span class="sub-title-r">日期</span>
                            </div>
                            <div class="col-12">
                                <div class="x d-flex">
                                    <?php if (isset($_GET['movie_id'])) { ?>
                                        <div class="x d-flex">
                                            <?php
                                            $sql = "SELECT *
                                FROM `date`";

                                            $arr1 = $pdo->query($sql)->fetchAll();
                                            foreach ($arr1 as $obj1) {
                                                $strStyleDate = "";
                                                if ($_GET['sub_date_id'] == $obj1['date_id']) {
                                                    $strStyleDate =  "style='border:1px solid #F53D3D ; opacity:1 ; box-shadow:0 0 16px 4px rgba(245, 61, 61, 0.25)'";
                                                }
                                            ?>
                                                <a href="booking-time-page.php?movie_id=<?= $_GET['movie_id'] ?>&sub_date_id=<?= $obj1['date_id'] ?>&sub_division_id=<?= $_GET['sub_division_id'] ?>#abc" class="sel">
                                                    <div class="day selected" id="abc" <?= $strStyleDate ?>>
                                                        <span>星期<?= $obj1['week'] ?></span>
                                                        <span class="sub-title-r">1月</span>
                                                        <span class="roboto-condensed"><?= $obj1['date'] ?></span>
                                                    </div>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row movie-division">
                                <div class="col-12 mb-3">
                                    <i class="fas fa-city"></i>
                                    <span class="sub-title-r">城市</span>
                                </div>
                                <div class="col-12">
                                    <?php if (isset($_GET['sub_date_id'])) { ?>
                                        <div class="divisions">
                                            <?php
                                            $sql = "SELECT `division_id`,`division`
                                FROM `division` 
                                ";
                                            $arr = $pdo->query($sql)->fetchAll();
                                            foreach ($arr as $obj2) {
                                                $strStyleDiv = "";
                                                if ($_GET['sub_division_id'] == $obj2['division_id']) {
                                                    $strStyleDiv =  "style='border:1px solid #F53D3D ; opacity:1 ; box-shadow:0 0 16px 4px rgba(245, 61, 61, 0.25)'";
                                                }
                                            ?>
                                                <a href="booking-time-page.php?movie_id=<?= $_GET['movie_id'] ?>&sub_date_id=<?= $_GET['sub_date_id'] ?>&sub_division_id=<?= $obj2['division_id'] ?>#def" class="division" id="divisiondv1">
                                                    <span class="division selected div-sel" id="def" <?= $strStyleDiv ?>><?= $obj2['division'] ?></span>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
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
                        <?php if (
                            isset($_GET['sub_division_id'])
                        ) { ?>
                            <?php $sql = "SELECT `cinema_name`,`screen`,`showtime`,`seat`,`left_seat`,`date`,`division`
                            FROM `cinema` 
                            WHERE `division_id` = '$_GET[sub_division_id]'
                            AND `movie_id` = '$_GET[movie_id]'
                            AND `date_id` = '$_GET[sub_date_id]'
                             ";
                            $arr3 = $pdo->query($sql)->fetchAll();
                            // echo '<pre>';
                            // print_r($arr3);
                            // echo '</pre>';
                            foreach ($arr3 as $obj) {
                                // echo '<pre>';
                                // print_r($obj);
                                // echo '</pre>';
                                $arrNew[$obj['cinema_name']][] = $obj['showtime'];
                                $arrData[$obj['cinema_name'] . $obj['showtime']] = $obj['left_seat'];
                                $arrDataSeat[$obj['cinema_name'] . $obj['showtime']] = $obj['seat'];
                            } ?>
                            <?php foreach ($arrNew as $hall => $time) { ?>

                            <div class="row timetable">
                                <div class="col-12">
                                    <div class="timetable-row">
                                        <div class="cinema-name sub-title-r"><?= $hall ?></div>
                                        <div class="showtime-options-wrap">
                                            <div class="showtime-options">
                                                <div class="movie-type">
                                                    <span class="digital"><?= $arr3[0]['screen'] ?></span>
                                                </div>
                                                <div class="options d-flex flex-wrap">
                                                    <!-- 第一個場次 -->
                                                    <?php foreach ($time as $stime) { ?>
                                                    <a href="new-booking-seat-page.php?movie_id=<?= $_GET['movie_id'] ?>" data-movie-poster="<?= $objM['poster'] ?>" data-movieTC="<?= $objM['mName_TC'] ?>" data-movieEN="<?= $objM['mName_EN'] ?>" data-date="1月<?= $obj['date'] ?>" data-division="<?= $obj['division'] ?>" data-moviecat="<?= $arr3[0]['screen'] ?>" data-showtime="<?= $stime ?>" data-cinema="<?= $hall ?>" data-left-seat="<?= $obj['left_seat'] ?>" data-ticket-poster="<?= $objM['ticket_poster'] ?>" data-pg-rate="<?= $objM['pg_rate_text'] ?>" data-length="<?= $objM['length'] ?>" data-director="<?= $objM['director_TC'] ?>" id="showdetail">
                                                        <div class="showtime d-flex">
                                                            <div class="dot green-dot my-auto mr-2" data-seat="<?= $arrDataSeat[$hall . $stime] ?>" data-left-seat="<?= $arrData[$hall . $stime] ?>"></div>
                                                            <span class="body1-r"><?= $stime ?></span>
                                                        </div>
                                                    </a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divide-line"></div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </section>
            </main>

            <?php require_once './tpl/movinon-footer.php' ?>

            <?php require_once './tpl/foot.php' ?>

            <script>

                // left seat light                                                
                $(document).ready(function(event) {
                    // event.preventDefault();

                    // console.log(seatPercent);

                    $('.dot').each((i, v) => {
                        let dotSeat = $('.dot').eq(i).attr('data-seat');
                        let dotLeftSeat = $('.dot').eq(i).attr('data-left-seat');
                        let seatPercent = Math.round(dotLeftSeat / dotSeat * 100) + "%";
                        if (seatPercent < 40 + "%") {
                            $('.dot').eq(i).addClass('yellow-dot');
                        } else if (seatPercent < 5 + "%") {
                            $('.dot').eq(i).addClass('red-dot');
                        } else {
                            $('.dot').eq(i).addClass('green-dot');
                        }
                    });
                });

                // carry data to next page
                $('a#showdetail').click(function(event) {
                    // event.preventDefault();
                    //取得 button 的 jQuery 物件
                    let btn = $(this);
                    // console.log('hi');

                    //送出 post 請求，加入細節
                    let objShowdetail = {
                        movie_TC: btn.attr('data-movieTC'),
                        movie_EN: btn.attr('data-movieEN'),
                        movie_poster: btn.attr('data-movie-poster'),
                        movie_date: btn.attr('data-date'),
                        division: btn.attr('data-division'),
                        movie_cat: btn.attr('data-moviecat'),
                        showtime: btn.attr('data-showtime'),
                        cinema: btn.attr('data-cinema'),
                        ticket_poster: btn.attr('data-ticket-poster'),
                        pg_rate: btn.attr('data-pg-rate'),
                        length: btn.attr('data-length'),
                        director: btn.attr('data-director'),
                    };
                    $.post('setCart.php', objShowdetail, function(obj) {
                        if (obj['success']) {
                            alert(`您選擇的時刻為:` + objShowdetail['showtime']);
                        }
                        // console.log(obj);
                    }, 'json');
                });
            </script>
        </body>
<?php }
} ?>

</html>