<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>

<style>

    <?php require_once './tpl/global-style.css' ?>

    body {
        background: url("images/forum_overview_page/bg_img.jpg") top center no-repeat;
        background-size: contain;
        background-color: var(--bg-color);
        width: 100%;
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
    }

    .forum-info-section .main-header-b {
        margin-bottom: 16px;
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
        box-shadow: var(--box-shadow-black-25);
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
        border-radius: var(--border-radius-8);
        box-shadow: var(--box-shadow-black);
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

    .forum-cat-section .img-wrap {
        width: 100%;
        height: 100%;
        position: relative;
        border-radius: var(--border-radius-8);
        box-shadow: var(--box-shadow-black-25);
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

    .forum-cat-section .img-wrap:hover .section-header-r,
    .forum-cat-section .img-wrap:hover .content .sub-title-m {
        opacity: var(--opacity-90);
        transition: .4s ease-in-out;
    }

    .forum-cat-section .card-md:hover .img-wrap {
        opacity: 1;
        transition: .4s ease-in-out;
    }

    /* =================================== @media =================================== */
    /* ============================================================================== */

    /* ------------------------  小於 1920px  ------------------------*/
    @media screen and (max-width: 1920px) {
        .forum-info-section {
            margin-bottom: 48px;
        }
    }

    /* ------------------------  小於 992px  ------------------------*/
    @media screen and (max-width: 992px) {
        body {
            background: url("images/forum_overview_page/bg_img_992_min.jpg") top center no-repeat;
            background-size: contain;
            background-color: var(--bg-color);
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
        }

        .movinon-navbar .img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: 50% 50%;
        }
    }

    /* ------------------------  小於 768px  ------------------------*/
    @media screen and (max-width: 768px) {

        /* 這裡強制將 .section-header-r 改為 字重500 */
        .forum-cards-section .card-md .section-header-r { 
            font-size: 20px; 
            font-weight: 500;
            margin-bottom: 6px;
        }

        .forum-cards-section .img-wrap .content {
            bottom: 16px;
            left: 16px;
        }
    }

    /* ------------------------  小於 418px  ------------------------*/
    @media screen and (max-width: 418px) {
        
        .forum-info-section { margin-top: 96px; }

        .forum-cards-section .card-md .section-header-r { 
            font-weight: 400;
            margin-bottom: 4px;
            font-size: 16px;
        }

        /* 將預設的 .body1-b 改為 .body2-m  */
        .forum-cards-section .card-md .body1-b { 
            font-weight: 700;
            margin-bottom: 4px;
            font-size: 14px;
        }

        .forum-cards-section .img-wrap .content {
            bottom: 12px;
            left: 12px;
        }

        .forum-cards-section .card-md,
        .forum-cat-section .card-md {
            margin-bottom: 16px;
        }

        .forum-cards-section .col-6.card-md:nth-child(even),
        .forum-cat-section .col-6.card-md:nth-child(even) {
            padding: 0 16px 0 8px;
        }

        .forum-cards-section .col-6.card-md:nth-child(odd),
        .forum-cat-section .col-6.card-md:nth-child(odd) {
            padding: 0 8px 0 16px;
        }

        .forum-cards-section .com-count {
            border-radius: var(--border-radius-50);
            padding: 2px 6px;
            margin-left: 8px;
        }
    }
</style>

<body>
    
    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

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
                                ⚠️ 請於標題最前面加上 #有雷<br>
                                2. 禁止於無雷文章回應爆雷<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                4. 分享資訊時儘量以官網資訊爲主，且禁止分享營利個人頁面網址<br>
                                5. 發文前請確認是否重複轉貼文章，若 7 日內有其他人張貼，請勿再次張貼<br>
                                <br>
                                ⚠️ 重要聲明：本討論區是以即時上載留言的方式運作，對所有留言的真實性、完整性及立場等，不負任何法律責任。而一切留言之言論只代表留言者個人意見，並非本網站之立場，用戶不應信賴內容，並應自行判斷內容之真實性。於有關情形下，用戶應尋求專業意見(如涉及醫療、法律或投資等問題)。 由於本討論區受到「即時上載留言」運作方式所規限，故不能完全監察所有留言，若讀者發現有留言出現問題，請聯絡我們。有權刪除任何留言及拒絕任何人士上載留言，同時亦有不刪除留言的權利。切勿上傳和撰寫 侵犯版權(未經授權)、粗言穢語、誹謗、渲染色情暴力或人身攻擊的言論，敬請自律。本網站保留一切法律權利。</p>
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
                                ⚠️ 請於標題最前面加上 #有雷<br>
                                2. 禁止於無雷文章回應爆雷<br>
                                3. 禁止發表與本板主旨無關的內容與回應<br>
                                4. 分享資訊時儘量以官網資訊爲主，且禁止分享營利個人頁面網址<br>
                                5. 發文前請確認是否重複轉貼文章，若 7 日內有其他人張貼，請勿再次張貼<br>
                                <br>
                                ⚠️ 重要聲明：本討論區是以即時上載留言的方式運作，對所有留言的真實性、完整性及立場等，不負任何法律責任。而一切留言之言論只代表留言者個人意見，並非本網站之立場，用戶不應信賴內容，並應自行判斷內容之真實性。於有關情形下，用戶應尋求專業意見(如涉及醫療、法律或投資等問題)。 由於本討論區受到「即時上載留言」運作方式所規限，故不能完全監察所有留言，若讀者發現有留言出現問題，請聯絡我們。有權刪除任何留言及拒絕任何人士上載留言，同時亦有不刪除留言的權利。切勿上傳和撰寫 侵犯版權(未經授權)、粗言穢語、誹謗、渲染色情暴力或人身攻擊的言論，敬請自律。本網站保留一切法律權利。</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- -----------forum cards section----------- -->
        <section class="forum-cards-section g-section-mb">
            <div class="container d-none d-xl-block">
                <div class="row subtitle g-subtitle-mb">
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
                                    <img src="images/forum_overview_page/card_1.jpg" alt="">
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
                                    <img src="images/forum_overview_page/card_2.jpg" alt="">
                                    <div class="content">
                                        <div class="section-header-r">駭客任務</div>
                                        <span class="body1-b">Today</span><span class="caption-12 com-count com-2-count">+<span class="count">34</span></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-8">
                        <a href="./forum-masonry-page.php">
                            <div class="img-wrap card-3">
                                <img src="images/forum_overview_page/card_3.jpg" alt="">
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
                                <img src="images/forum_overview_page/card_4.jpg" alt="">
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
                                <img src="images/forum_overview_page/card_5.jpg" alt="">
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
                                <img src="images/forum_overview_page/card_6.jpg" alt="">
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
                                        <img src="images/forum_overview_page/card_7.jpg" alt="">
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
                                        <img src="images/forum_overview_page/card_8.jpg" alt="">
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
                                        <img src="images/forum_overview_page/card_9.jpg" alt="">
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
                                        <img src="images/forum_overview_page/card_10.jpg" alt="">
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
            <div class="container d-sm-block d-xl-none">
                <div class="row subtitle g-subtitle-mb">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line"></div>
                            <span class="section-header-b">精選討論區</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_1_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">再說一次我願意</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-1-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_2_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">駭客任務</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-2-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="./forum-masonry-page.php">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_3_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">蜘蛛人: 無家日</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-3-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_4_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">魔鬼剋星未來世</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-4-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_5_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">梅艷芳</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-5-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_6_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">迷離夜蘇活</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-6-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_7_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">詭扯</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-7-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_8_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">瀑布</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-8-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_9_1200.jpg" alt="">
                                <div class="content">
                                    <div class="section-header-r">永恆族</div>
                                    <span class="body1-b">Today</span><span class="caption-12 com-count com-9-count">+<span class="count">134</span></span>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <div class="col-6 card-md">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="images/forum_overview_page/card_10_1200.jpg" alt="">
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
        
        <!-- -----------forum cat section----------- -->
        <section class="forum-cat-section g-section-mb">
            <div class="container">
                <div class="row subtitle g-subtitle-mb">
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

    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>

    <script src=""></script>
</body>
</html>