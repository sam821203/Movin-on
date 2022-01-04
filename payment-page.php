<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>

<style>

    <?php require_once './tpl/global-style.css' ?>

    /* -----------------payment section----------------- */
    .payment-section {
        margin-top: 280px;
    }

    .payment-section .fa-info-circle {
        color: var(--brand-color);
        cursor: pointer;
    }

    /* -----------------payment section l----------------- */
    .payment-section-l .body1-r {
        opacity: var(--opacity-75);
        margin-bottom: 80px;
    }

    .payment-section-l {
        margin-top: 40px;
    }

    .payment-section-l .myticket {
        position: relative;
    }

    .payment-section-l .ticket-img-wrap {
        position: absolute;
        max-width: 322px;
        border-radius: 50px;
        box-shadow: var(--box-shadow-black);
    }

    .payment-section-l .ticket-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    .payment-section-l .poster-img-wrap {
        position: absolute;
        top: 56px;
        left: 0;
    }

    .payment-section-l .poster-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    .payment-section-l .ticket-card {
        width: 100%;
    }

    .payment-section-l .content {
        position: absolute;
        top: 24px;
        left: 32px;
        color: #121212;
        font-family: 'Roboto Condensed', sans-serif;
    }

    .payment-section-l .content .body2-r {
        opacity: var(--opacity-50);
    }

    .payment-section-l .content .section-header-b {
        margin-bottom: 4px;
    }

    .payment-section-l .content .order-num {
        color: rgba(18,18,18,0.5);
        margin-bottom: 256px;
    }

    .payment-section-l .content .title-en {
        opacity: var(--opacity-50);
    }

    .payment-section-l .content .col-12 {
        padding: 0;
    }

    .payment-section-l .content-row {
        width: 256px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
    }

    .payment-section-l .pg-rate {
        padding: 4px 12px;
        border-radius: var(--border-radius-50);
        border: 1px solid rgba(18,18,18,0.5);
        color: rgba(18,18,18,0.5);
    }




    /* -----------------payment section r----------------- */
    .payment-section-r .detail-head,
    .payment-section-r .detail-head .detail-head-l,
    .payment-section-r .detail-inline,
    .payment-section-r .detail-inline .detail-inline-l,
    .payment-section-r .detail-fee,
    .payment-section-r .detail-total,
    .payment-section-r .detail-total .detail-total-l {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .payment-section-r .detail-head,
    .payment-section-r .detail-inline,
    .payment-section-r .detail-fee,
    .payment-section-r .detail-total {
        padding: 12px 24px;
    }

    .payment-section-r .detail-head {
        margin-bottom: 16px;
        background-color: var(--bg-color);
        border-radius: var(--border-radius-4);
        font-weight: 700;
        font-size: 20px;
    }

    .payment-section-r .detail-fee {
        display: flex;
        justify-content: end;
        border-bottom: 1px solid rgba(255,255,255,0.25);
        padding-bottom: 24px;
    }

    .payment-section-r .detail-total {
        padding-top: 24px;
    }

    .payment-section-r .detail-fee .body2-r,
    .payment-section-r .detail-total .body2-r {
        opacity: var(--opacity-25);
        margin-right: 20px;
    }

    .payment-section-r .detail-head .col-6,
    .payment-section-r .detail-head .col-4,
    .payment-section-r .detail-inline .col-6,
    .payment-section-r .detail-inline .col-4,
    .payment-section-r .detail-total .col-6,
    .payment-section-r .detail-total .col-4 {
        padding: 0;
    }

    .payment-section-r-top,
    .payment-section-r-bottom {
        background-color: rgba(32,32,32,0.75);
        border-radius: var(--border-radius-8);
        box-shadow: var(--box-shadow-card-lg);
    }

    .payment-section-r-top {
        padding: 40px 88px;
    }

    .payment-section-r-bottom {
        /* padding 88px - 左右的 padding 16px */
        padding: 40px 72px;
    }

    .payment-section-r-top {
        margin-bottom: 32px;
    }

    .payment-section-r-bottom .credit-card input {
        background-color: rgba(255,255,255,0.1);
        border-radius: var(--border-radius-4);
        width: 100%;
        border: none;
        padding: 12px 24px;
    }

    .payment-section-r-bottom .credit-card .credit-card-subtitle:nth-child(n) {
        font-size: 1.25rem;
        margin-bottom: 12px;
    }

    .payment-section-r .card-number,
    .payment-section-r .card-holder,
    .payment-section-r .card-extra-info {
        margin-bottom: 32px;
    }

    /* 微調 Roboto 的 line-height */
    .payment-section-r .card-extra-info .ccv-code {
        line-height: 144%;
    }

    .payment-section-r .e-invoice {
        margin-top: 64px;
    }

    .payment-section-r .e-invoice .e-invoice-select {
        margin-bottom: 32px;
    }

    .my-form-check .form-group .form-control {
        background-color: rgba(255,255,255,0.1);
        border: none;
        color: rgba(255,255,255,0.9);
    }

    .my-form-check .custom-select {
        background: rgba(255,255,255,0.9) url("images/triangle_down.svg") right 0.75rem center/12px 12px no-repeat;
    }

    .payment-section-r .agreement-alert {
        color: var(--brand-color);
        margin-left: 12px;
        margin-right: 4px;
    }

    .payment-section-r-bottom .agreement-check {
        padding: 0 16px;
    }

    /* -----------------btn area----------------- */
    .payment-section-r .btn-area .btn {
        border-radius: var(--border-radius-50);
        padding: 4px 64px;
        background-color: var(--brand-color);
        box-shadow: var(--box-shadow-red);
        color: white;
    }
</style>

<body>

    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <main>
        <section class="payment-section">
            <div class="container">
                <div class="row">
                    <div class="col-4 payment-section-l">
                        <div class="section-header-b g-subtitle-mb">票根明細</div>
                        <div class="body1-r"><i class="fas fa-info-circle"></i>&nbsp&nbsp請檢查票根明細，如顯示的資訊有物，<br>請洽客服中心尋求幫助，謝謝</div>
                        <div class="myticket">
                            <div class="ticket-img-wrap">
                                <img src="images/ticket_single.svg" alt="">
                            </div>
                            <div class="ticket-card">
                                <div class="poster-img-wrap">
                                    <img src="images/payment_page/movie_ticket_img.jpg" alt="">
                                </div>
                                <div class="content">

                                    <p class="order-num">訂單編號：85769903432490</p>

                                    <div class="content-row col-12 d-flex justify-content-between">
                                        <div>
                                            <div class="section-header-b">永恆族</div>
                                            <div class="title-en">Eternals</div>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <span class="pg-rate">輔導級</span>
                                        </div>
                                    </div>

                                    <div class="content-row">
                                        <div>
                                            <div class="body2-r">影城</div>
                                            <div class="sub-title-b">台北信義威秀</div>
                                        </div>
                                        <div>
                                            <div class="body2-r">座位</div>
                                            <div class="sub-title-b">D排 8號</div>
                                        </div>
                                    </div>

                                    <div class="content-row">
                                        <div>
                                            <div class="body2-r">日期</div>
                                            <div class="body2-b">2021/11/29</div>
                                        </div>
                                        <div>
                                            <div class="body2-r">場次</div>
                                            <div class="body2-b">19:20</div>
                                        </div>
                                        <div>
                                            <div class="body2-r">類型</div>
                                            <div class="body2-b">數位</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="col-8 payment-section-r">
                        <div class="payment-section-r-top">
                            <div class="section-header-b g-subtitle-mb">交易明細</div>
                            <div class="col-12 detail-head">
                                <div class="col-6 detail-head-l d-flex justify-content-between">
                                    <div class="col-4 head1">票種</div>
                                        <div class="col-4 head2">價格</div>
                                        <div class="col-4 head3">數量</div>
                                    </div>
                                <div class="col-6 text-right">
                                    <div class="detail-head-r">合計</div>
                                </div>
                            </div>

                            <div class="col-12 detail-inline">
                                <div class="col-6 detail-inline-l d-flex justify-content-between">
                                    <div class="col-4 ticket-type">全票</div>
                                    <div class="col-4 ticket-price">$ 330</div>
                                    <div class="col-4 ticket-quan">2</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="detail-inline-r total">$ 660</div>
                                </div>
                            </div>

                            <div class="col-12 detail-inline">
                                <div class="col-6 detail-inline-l d-flex justify-content-between">
                                    <div class="col-4 ticket-type">優待票</div>
                                    <div class="col-4 ticket-price">$ 310</div>
                                    <div class="col-4 ticket-quan">1</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="detail-inline-r total">$ 310</div>
                                </div>
                            </div>

                            <div class="col-12 detail-fee">
                                <div class="fee"><span class="body2-r">訂票手續費</span>$ 20</div>
                            </div>

                            <div class="col-12 detail-total">
                                <div class="col-6 detail-total-l d-flex justify-content-between">
                                    <div class="body2-r">＊ 網路訂票每章需加收 NT$ 20 手續費</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="detail-total-r total">$ 990</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="payment-section-r-bottom g-section-mb">

                            <!-- 信用卡付款 -->
                            <div>
                                <div class="section-header-b g-subtitle-mb col-12">付款方式</div>
                                <div class="credit-card">
                                    <div class="col-12 credit-card-subtitle">信用卡<span>請輸入卡號</span></div>
                                    <div class="card-number d-flex">
                                        <div class="col-3">
                                            <input type="text" placeholder="1234" name="card_number_1">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" placeholder="1234" name="card_number_2">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" placeholder="1234" name="card_number_3">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" placeholder="1234" name="card_number_4">
                                        </div>
                                    </div>

                                    <div class="card-holder">
                                        <div class="col-12 credit-card-subtitle">持卡者姓名<span>請輸入信用卡背後的姓名</span></div>
                                        <div class="col-12">
                                            <input type="text" placeholder="1234" name="holder_name">
                                        </div>
                                    </div>

                                    <div class="card-extra-info d-flex">
                                        <div class="col-6">
                                            <div class="credit-card-subtitle">到期年限</div>
                                            <div>
                                                <input type="text" placeholder="00/00" name="expire-date">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="credit-card-subtitle ccv-code">CCV code</div>
                                            <div>
                                                <input type="text" placeholder="123" name="ccv-code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <!-- 電子發票 -->
                            <div class="e-invoice">
                                <div class="section-header-b g-subtitle-mb col-12">電子發票</div>
                                <div class="e-invoice-select d-flex">
                                    <form class="my-form-check col-3" name="myForm" method="post" action="">
                                        <div class="form-group d-flex">
                                            <select class="form-control custom-select" id="exampleFormControlSelect1" name="payment_type">
                                                <option value="捐贈">捐贈</option>
                                                <option value="捐贈">3</option>
                                            </select>
                                        </div>
                                    </form>

                                    <form class="my-form-check col-9" name="myForm" method="post" action="">
                                        <div class="form-group">
                                            <select class="form-control custom-select" id="exampleFormControlSelect1" name="payment_type">
                                                <option value="創世基金會">創世基金會</option>
                                                <option value="創世基金會">3</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- 同意條款 -->
                            <div class="agreement-check d-flex justify-content-between">
                                <form action="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            我已同意<span class="agreement-alert">購票規定事項</span><i class="fas fa-info-circle"></i>
                                        </label>
                                    </div>
                                </form>

                                <a class="btn-area" href="#">
                                    <div class="btn">
                                        <span class="sub-title-b">結帳</span>
                                    </div>
                                </a>
                            </div>
                        </div>
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