<?php require_once 'db.inc.php'; ?>
<?php session_start(); ?>
<?php require_once './tpl/head.php' ?>

<link rel="stylesheet" type="text/css" href="css/jquery.seat-charts.css">

<style>
    <?php require_once './tpl/global-style.css' ?>
    
    body {
        width: 100%;
        background-position: top center;
        background-repeat: no-repeat;
        background-size: contain;
        background-color: var(--bg-color);
    }

    input#Numseats {
        width: 88px;
        height: 32px;
        margin-left: 8px;
        border: 4px 0 0 4px;
        border-color: rgba(255,255,255,0.5);
        border-radius: var(--border-radius-4);
        background-color: rgba(255,255,255,0.25);
    }

    button#takeData {
        width: 56px;
        border-radius: 0 4px 4px 0;
    }

    /* -----------------movie info section----------------- */
    .movie-info-section {
        margin-top: 248px;
    }

    .movie-info-section .movie-info,
    .movie-info-section .movie-division {
        margin-bottom: 72px;
    }

    .movie-info-section .movie-info .movie-poster {
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
    .movie-info-section .content .movie-director {
        opacity: var(--opacity-90);
    }

    .movie-info-section .content .length-data,
    .movie-info-section .content .director-data {
        opacity: var(--opacity-75);
    }

    /* -----------------seat dataviz section----------------- */
    .seat-dataviz {
        width: 100%;
        margin-bottom: 40px;
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
        margin-right: 10px;
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

    .booking-seat-section .ticket-detail i {
        margin-right: 12px;
    }

    .booking-seat-section .seat-column {
        width: 42px;
        display: flex;
        justify-content: center;
        opacity: var(--opacity-75);
    }

    .ticket-detail .detail-title {
        opacity: var(--opacity-90);
    }

    .ticket-detail .devision,
    .ticket-detail .date,
    .ticket-detail .cinema,
    .ticket-detail .type,
    .ticket-detail .showtime,
    .ticket-detail .my-seat {
        opacity: var(--opacity-50);
    }

    .ticket-detail .fa-map-marker-alt {
        font-size: 20px;
    }

    .ticket-detail .fa-calendar-alt {
        font-size: 18px;
    }

    .ticket-detail .fa-kaaba {
        font-size: 16px;
    }

    .ticket-detail .fa-clock {
        font-size: 18px;
    }

    .ticket-detail .img-wrap {
        width: 18px;
        margin-right: 12px;
        display: flex;
    }

    .ticket-detail .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    /* -----------------btn area----------------- */
    .seats-area .btn-area {
        margin-top: 48px;
        display: flex;
        justify-content: space-between;
    }

    .seats-area .btn-area a {
        border-radius: var(--border-radius-50);
        padding: 8px 36px;
        color: white;
    }

    .seats-area .btn-area a:nth-child(2) {
        background-color: var(--brand-color);
        box-shadow: var(--box-shadow-red);
    }

    .booking-details {
        float: left;
        text-align: left;
        margin-left: 35px;
        font-size: 12px;
        position: relative;
        height: 401px;
    }

    .booking-details h2 {
        margin: 25px 0 20px 0;
        font-size: 17px;
    }

    .booking-details h3 {
        margin: 5px 5px 0 0;
        font-size: 14px;
    }

    div.seatCharts-cell {
        color: white;
        height: 25px;
        width: 25px;
        line-height: 25px;
    }

    div.seatCharts-seat {
        color: #FFFFFF;
        cursor: pointer;
    }

    div.seatCharts-row {
        height: 35px;
    }

    div.seatCharts-seat.available {
        background: url(images/movie_seat.svg);
        background-position: center;
        background-size: cover;
        opacity: var(--opacity-25);
    }

    div.seatCharts-seat.available.first-class {
        /* 	background: url(vip.png); */
        /* background-color: #3a78c3; */
        background-color: #121212;
    }

    div.seatCharts-seat.focused {
        background-color: #76B474;
    }

    div.seatCharts-seat.selected {
        background: var(--brand-color);
        background-position: center;
        background-size: cover;
        opacity: var(--opacity-90);
    }

    div.seatCharts-seat.unavailable {
        background: url(images/movie_seat.svg);
        background-position: center;
        background-size: cover;
        opacity: var(--opacity-10);
    }

    div.seatCharts-container {
        width: 100%;
        padding: 10px 120px;
        float: left;
    }

    ul.seatCharts-legendList {
        display: flex;
        padding-left: 0px;
    }

    span.seatCharts-legendDescription {
        margin-left: 5px;
        line-height: 30px;
    }

    div.seatCharts-space {
        background-color: rgba(0, 0, 0, 0);
    }

    #selected-seats {
        list-style: none;
        max-height: 100px;
        overflow-y: scroll;
        overflow-x: none;
        width: 200px;
        color: red;
    }
</style>

<?php if (isset($_GET['movie_id'])) { ?>
    <?php $sql = "SELECT `movie_bg`FROM `movie` WHERE `movie_id` = {$_GET['movie_id']}";
    $arr = $pdo->query($sql)->fetchAll();
    foreach ($arr as $objbg) {
    ?>

        <body onload="onLoaderFunc()" style="background-image: url('images/<?= $objbg['movie_bg'] ?>')">

            <!-- movinon-navbar -->
            <?php require_once './tpl/movinon-navbar.php' ?>
            <script type="text/javascript">
                // <!--google_ad_client = "ca-pub-2783044520727903";
                // /* jQuery_demo */
                // google_ad_slot = "2780937993";
                // google_ad_width = 728;
                // google_ad_height = 90;
                //-->
            </script>
            <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>


            <?php
            $count = 0;
            $total = 0;

            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
                <main>
                    <div class="movie-info-section">
                        <div class="container">
                            <div class="row movie-info">
                                <?php foreach ($_SESSION['cart'] as $key => $obj) { ?>
                                    <div class="col-9 d-flex">
                                        <div class="col-1"></div>
                                        <div class="col-10">
                                            <div class="d-flex">
                                                <div class="movie-poster">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/現正熱映/<?= $obj['movie_poster']?>.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div>
                                                        <span class="pg-rate body2-r"><?= $obj['pg_rate'] ?></span>
                                                    </div>
                                                    <div>
                                                        <span class="title-tc main-header-b"><?= $obj['movie_TC'] ?></span>
                                                    </div>
                                                    <div>
                                                        <span class="title-en italic-20 mb-3"><?= $obj['movie_EN'] ?></span>
                                                    </div>
                                                    <div class="rating mb-5">
                                                        <i class="fas fa-star "></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>

                                                    <p><span class="movie-length"></span>片長：<span class="length-data"><?= $obj['length'] ?>分鐘</span></p>
                                                    <p><span class="movie-director"></span>導演：<span class="director-data"><?= $obj['director'] ?></span></p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>

                                    <div class="col-3"></div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>

                    <div class="booking-seat-section g-section-mb">
                        <div class="container">
                            <div class="mycol-12 d-flex">
                                選擇座位數量: <input type="number" id="Numseats" required min="1" max="10">
                                <br /><br />
                                <button id="takeData" class="btn-white-outline">確定</button>
                            </div>

                            <div class="row seat-dataviz w-100">
                                <div class="mycol-9 d-flex justify-content-between align-items-center w-100">
                                    <!-- 座位狀態 -->
                                    <div class="d-flex" id="legend"></div>
                                    <div class="d-flex align-items-center">
                                        <div>剩餘訂票時間：<span class="time-left" id="count-down-timer">02:53</span></div>
                                    </div>
                                </div>
                                <div class="mycol-3"></div>
                            </div>

                            <p id="notification"></p>
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
                                    <div id="seat-map">
                                    </div>
                                </div>
                                <?php foreach ($_SESSION['cart'] as $key => $obj) {
                                ?>
                                    <div class="col-3">
                                        <div class="sub-title-b">購票資訊</div>
                                        <hr>
                                        <div class="ticket-detail">
                                            <i class="fas fa-map-marker-alt"></i><span class="detail-title">城市：</span><span class="devision"><?= $obj['division'] ?></span>
                                        </div>
                                        <div class="ticket-detail">
                                            <i class="far fa-calendar-alt"></i><span class="detail-title">日期：</span><span class="date"><?= $obj['movie_date'] ?></span>
                                        </div>
                                        <div class="ticket-detail">
                                            <i class="fas fa-kaaba"></i><span class="detail-title">影城：</span><span class="cinema"><?= $obj['cinema'] ?></span>
                                        </div>
                                        <div class="ticket-detail">
                                            <i class="fas fa-glasses"></i><span class="detail-title">類型：</span><span class="type"><?= $obj['movie_cat'] ?></span>
                                        </div>
                                        <div class="ticket-detail">
                                            <i class="far fa-clock"></i><span class="detail-title">時間：</span><span class="showtime"><?= $obj['showtime'] ?></span>
                                        </div>
                                        <div class="ticket-detail">
                                            <div class="img-wrap">
                                                <img src="images/movie_seat_white.svg" alt="">
                                            </div>
                                            <span class="detail-title">座位：</span><span class="my-seat" id="counter">0</span>
                                        </div>
                                        <ul id="selected-seats">
                                        </ul>
                                        Total: <b>$<span id="total">0</span></b>
                                    </div>
                                <?php } ?>


                                <div class="btn-area">
                                    <a class="btn btn-outline-light" href="#" id="resetSeat">
                                        <span>重新選擇</span>
                                    </a>

                                    <a class="btn" href="new-payment-page.php" id="headtopay" data-movie-poster="<?= $obj['movie_poster'] ?>" data-movieTC="<?= $obj['movie_TC'] ?>" data-movieEN="<?= $obj['movie_EN'] ?>" data-date="<?= $obj['movie_date'] ?>" data-moviecat="<?= $obj['movie_cat'] ?>" data-showtime="<?= $obj['showtime'] ?>" data-cinema="<?= $obj['cinema'] ?>" data-ticket-poster="<?= $obj['ticket_poster'] ?>" data-pg-rate="<?= $obj['pg_rate'] ?>">
                                        <span>前往結帳</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>

                </main>
            <?php } ?>


            <?php require_once './tpl/movinon-footer.php' ?>

            <?php require_once './tpl/foot.php' ?>

            <script>
                // setInterval(function() {
                //     alert("選位已逾時，請重新選擇。")
                //     location.reload();
                // }, 300000);

                $('a#resetSeat').click(function() {
                    location.reload();
                    unset($_SESSION['seat']);
                });

                $('a#headtopay').click(function(event) {
                    // event.preventDefault();
                    // let x = $('#total').text();
                    // console.log(x);
                    //取得 button 的 jQuery 物件
                    let btn = $(this);
                    //送出 post 請求，加入細節
                    let item = $('#selected-seats').children('.sentSeat').length;
                    // console.log(item);

                    let seatCount = $('input#Numseats').val();
                    if (item != seatCount) {
                        event.preventDefault();
                        alert('請選擇正確座位數量');
                        unset($_SESSION['seat']);
                        // location.reload();
                        // console.log(seatCount);
                        // console.log(item);
                    }; 

                    const selectSeatsArray = [];
                    $('#selected-seats').find('p').each((i, v) => {
                        selectSeatsArray.push($(v).text());
                    })

                    console.log('selectSeatsArray', selectSeatsArray);

                    let objpaydetail = {
                        movie_TC: btn.attr('data-movieTC'),
                        movie_EN: btn.attr('data-movieEN'),
                        movie_poster: btn.attr('data-movie-poster'),
                        movie_date: btn.attr('data-date'),
                        movie_cat: btn.attr('data-moviecat'),
                        showtime: btn.attr('data-showtime'),
                        cinema: btn.attr('data-cinema'),
                        ticket_poster: btn.attr('data-ticket-poster'),
                        pg_rate: btn.attr('data-pg-rate'),
                        payTotal: $('#total').text(),
                        seatTotal: $('#counter').text(),
                        seatName: selectSeatsArray
                    };

                    console.log(objpaydetail);

                    $.post('setSeat.php', objpaydetail, function(obj) {
                        if (obj['success']) {
                            
                        }
                        console.log(obj);
                    }, 'json');
                });
            </script>

            <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script src="js/jquery.seat-charts.js"></script>
            <script>
                function paddedFormat(num) {
                    return num < 10 ? "0" + num : num;
                }

                function startCountDown(duration, element) {

                    let secondsRemaining = duration;
                    let min = 0;
                    let sec = 0;

                    let countInterval = setInterval(function() {

                        min = parseInt(secondsRemaining / 60);
                        sec = parseInt(secondsRemaining % 60);

                        element.textContent = `${paddedFormat(min)}:${paddedFormat(sec)}`;

                        secondsRemaining = secondsRemaining - 1;
                        if (secondsRemaining < 0) {
                            clearInterval(countInterval)
                        };

                    }, 1000);
                }

                window.onload = function() {
                    let time_minutes = 5; // Value in minutes
                    let time_seconds = 00; // Value in seconds

                    let duration = time_minutes * 60 + time_seconds;

                    element = document.querySelector('#count-down-timer');
                    element.textContent = `${paddedFormat(time_minutes)}:${paddedFormat(time_seconds)}`;

                    startCountDown(--duration, element);
                };
            </script>
            <script>
                var firstSeatLabel = 1;

                $(document).ready(function() {
                    var $cart = $('#selected-seats'),
                        $counter = $('#counter'),
                        $total = $('#total'),
                        sc = $('#seat-map').seatCharts({
                            map: [
                                '_ffff_ffffffffff_ffff_',
                                '_ffff_ffffffffff_ffff_',
                                '_ffff_ffffffffff_ffff_',
                                '_ffff_ffffffffff_ffff_',
                                '_ffff_ffffffffff_ffff_',
                                '_ffff_ffffffffff_ffff_',
                                '_ffff_ffffffffff_ffff_',
                                '_ffff_ffffffffff_ffff_',
                                '_ffff_ffffffffff_ffff_',
                                '_ffff_ffffffffff_ffff_'

                            ],
                            seats: {
                                f: {
                                    price: 230,
                                    classes: 'first-class', //your custom CSS class
                                    category: '電影票'
                                }

                            },
                            naming: {
                                top: false,
                                getLabel: function(character, row, column) {
                                    return firstSeatLabel++;
                                },
                            },
                            legend: {
                                node: $('#legend'),
                                items: [
                                    // 1/11 修改：新增您的座位
                                    ['f', 'current seat', '您的座位'],
                                    ['f', 'available', '未售出'],
                                    ['f', 'unavailable', '已售出']
                                ]
                            },
                            click: function() {

                                // console.log('hi');
                                if (this.status() == 'available') {
                                    const nrow = this.settings.row + 1;
                                    const ncolumn = this.settings.column;
                                    //let's create a new <li> which we'll add to the cart items
                                    $('<li>' + '<p>' + nrow + '排' + ncolumn + '號' + '</p>' + ': $' + this.data().price + '</li>')
                                        .attr('id', 'cart-item-' + this.settings.id)
                                        .addClass('sentSeat')
                                        .data('seatId', this.settings.id)
                                        .appendTo($cart);

                                    /*
                                     * Lets update the counter and total
                                     *
                                     * .find function will not find the current seat, because it will change its stauts only after return
                                     * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                                     */
                                    $counter.text(sc.find('selected').length + 1);
                                    $total.text(recalculateTotal(sc) + this.data().price);

                                    return 'selected';
                                } else if (this.status() == 'selected') {
                                    //update the counter
                                    $counter.text(sc.find('selected').length - 1);
                                    //and total
                                    $total.text(recalculateTotal(sc) - this.data().price);

                                    //remove the item from our cart
                                    $('#cart-item-' + this.settings.id).remove();

                                    //seat has been vacated
                                    return 'available';
                                } else if (this.status() == 'unavailable') {
                                    //seat has been already booked
                                    return 'unavailable';
                                } else {
                                    return this.style();
                                }
                            }
                        });

                    //this will handle "[cancel]" link clicks
                    $('#selected-seats').on('click', '.cancel-cart-item', function() {
                        //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
                        sc.get($(this).parents('li:first').data('seatId')).click();
                    });

                    //let's pretend some seats have already been booked
                    sc.find('f.available').status('unavailable');

                    function takeData() {
                        if (($("#Numseats").val().length == 0)) {
                            alert("請選擇座位");


                        } else {
                            sc.find('f.unavailable').status('available');
                            sc.get(['1_2', '4_1', '7_1', '7_2', '7_3', '7_4', '7_5', '7_6', '7_7', '7_8', '7_9', '7_10', '7_11', '7_12', '7_13', '7_14', '7_15', '7_16', '7_17', '7_18', '7_19', '7_20']).status('unavailable');
                            $(".seatCharts-cell *").prop("disabled", true);
                            $("div.wrapper *").prop("disabled", false);
                            document.getElementById("notification").innerHTML = "<b style='margin-bottom:0px;background:#F53D3D;'>請開始選擇座位</b>";
                        }
                    }

                    $('#takeData').click(takeData);
                });

                function recalculateTotal(sc) {
                    var total = 0;

                    //basically find every selected seat and sum its price
                    sc.find('selected').each(function() {
                        total += this.data().price;
                    });

                    return total;
                }
            </script>
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-36251023-1']);
                _gaq.push(['_setDomainName', 'jqueryscript.net']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();
            </script>

        </body>
<?php }
} ?>

</html>