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
        --box-shadow-red: 0px 0px 16px 4px rgba(245, 61, 61, 0.25);
        --box-shadow-black: 0px 0px 24px 0px rgba(0, 0, 0, 0.75);
        --box-shadow-black2: 0px 0px 32px 0px rgba(0, 0, 0, 0.75);
    }

    body {
        background: url("images/member_center_page/bg_img.jpg") top center no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    .container {
        margin-top: 200px;
    }

    /* -------------------------member l info------------------------- */
    .member-l-info, .member-l-setting, .member-r {
        background-color: rgba(18,18,18,0.9);
        border-radius: var(--border-radius-8);
    }
    
    .member-l-info {
        padding: 16px 0 32px 0;
        margin-bottom: 32px;
        font-size: 14px;
    }

    .member-l-info .img-wrap {
        width: 75%;
        margin: 32px 0 16px 0;
        padding: 0 40px;
    }

    .member-l-info .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        border-radius: var(--border-radius-50-percent);
    }

    .member-l-info .name {
        margin-bottom: 8px;
        padding: 0 40px;
    }

    .member-l-info .membership {
        margin-bottom: 24px;
        display: flex;
        justify-content: center;
    }

    .member-l-info .inner-content {
        padding: 4px 12px;
        margin-bottom: 24px;
        border: 0.75px solid white;
        border-radius: var(--border-radius-50);
        margin: 0 auto;
    }

    .member-l-info .inner-content i {
        margin-right: 8px;
    }

    .member-l-info p.body2-r {
        line-height: 170%;
        opacity: var(--opacity-75);
    }

    .member-l-info .social-media {
        display: flex;
        justify-content: space-between;
        padding: 0 48px;
        font-size: 32px;
        opacity: var(--opacity-50);
    }

    /* -------------------------setting row------------------------- */
    .member-l-setting .setting-row {
        display: flex;
        justify-content: space-between;
        padding: 24px 32px;
        border-bottom: 1px solid rgba(255,255,255,0.25);
    }

    .member-l-setting .setting-row .img-wrap {
        width: 28px;
        margin-right: 12px;
        display: flex;
    }

    .member-l-setting .setting-row .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
    }

    .member-l-setting .setting-row .body2-r {
        opacity: var(--opacity-50);
    }

    .member-l-setting .setting-row .ticket-count {
        margin-right: 12px;
    }

    .member-l-setting .setting-row .fa-chevron-right {
        opacity: var(--opacity-75);
        margin-top: auto 0;
    }
</style>

<body>
    <!-- navbar -->
    
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="member-l-info">
                            <div class="avatar d-flex justify-content-center">
                                <div class="img-wrap">
                                    <img src="images/forum_article_page/aside-avatar-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="name sub-title-b d-flex justify-content-center">Y'shtola Rhul</div>
                            <div class="membership">
                                <span class="inner-content">
                                    <i class="fas fa-address-card"></i><span class="body2-r">白金</span>
                                </span>
                            </div>
                            <div class="social-media">
                                <a href="#">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </div>
                        </div>

                        <div class="member-l-setting">
                            <div class="setting-row">
                                <div class="d-flex align-items-center">
                                    <div class="img-wrap">
                                        <img src="images/ticket.svg" alt="">
                                    </div>
                                    <span>我的票夾</span>
                                </div>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="ticket-count body2-r"><span class="count">12</span>部</div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="setting-row">
                                <div class="d-flex align-items-center">
                                    <div class="img-wrap">
                                        <img src="images/ticket.svg" alt="">
                                    </div>
                                    <span>文章蒐藏</span>
                                </div>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="setting-row">
                                <div class="d-flex align-items-center">
                                    <div class="img-wrap">
                                        <img src="images/ticket.svg" alt="">
                                    </div>
                                    <span>留言追蹤</span>
                                </div>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="setting-row">
                                <div class="d-flex align-items-center">
                                    <div class="img-wrap">
                                        <img src="images/ticket.svg" alt="">
                                    </div>
                                    <span>發文記錄</span>
                                </div>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="ticket-count body2-r"><span class="count">3</span>篇</div>
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="setting-row">
                                <div class="d-flex align-items-center">
                                    <div class="img-wrap">
                                        <img src="images/ticket.svg" alt="">
                                    </div>
                                    <span>信用卡設定</span>
                                </div>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="setting-row">
                                <div class="d-flex align-items-center">
                                    <div class="img-wrap">
                                        <img src="images/ticket.svg" alt="">
                                    </div>
                                    <span>設定</span>
                                </div>
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="member-r">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>  

    <!-- -----------footer Start----------- -->
    <?php require_once './tpl/foot.php' ?>

    <script>

    </script>
</body>