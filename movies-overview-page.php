
<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>

    <style>

        .content-section .mycard .img-wrap {
            max-width: 280px;
            margin-bottom: 12px;
            box-shadow: var(--box-shadow-black);
            border-radius: var(--border-radius-4);
            display: flex;
            transition: .4s;
        }

        .content-section .mycard .img-wrap img{
            width: 100%;
            object-fit: cover;
            object-position: 50% 50%;
            border-radius: var(--border-radius-4);
        }

        .content-section .mycard .img-wrap:hover {
            box-shadow: var(--box-shadow-white);
        }

        .content-section .mycard-info .rating .fa-star {
            margin-right: 6px;
        }

        .content-section .movie-title {
            overflow: hidden;
            width: 65%;
        }

        .content-section .movie-title p span {
            font-size: 1.25rem;
            font-weight: 400;
            width: 200px;
            margin: 0 auto;
            white-space: nowrap;
            overflow: hidden;
        }

        .content-section .movie-title span.sub-title-r {
            display: inline-block;
            padding-left: 0;
            transition: .6s;
            line-height: 100%;
        }

        .content-section .movie-title span.sub-title-r:hover {
            -webkit-animation: marquee 6s linear infinite;    
            animation: marquee 6s linear infinite;
        }

        /* Make it move */
        @keyframes marquee {
            0%   { transform: translate(0, 0); }
            100% { transform: translate(-100%, 0); }
        }

        .movies-tab-bar {
            margin-top: 200px;
            width: 100%;
        }

        .movies-tab-bar .playName {
            color: #eee;
            border: 1px solid #ccc;
            padding: 5px 10px;
            width: fit-content;
            font-weight: 700;
            text-decoration: none;
        }

        .icon {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .typesBorder{
            justify-content: center;
        }

        .movies-tab-bar .playName {
            color: #eee;
            border: 1px solid #ccc;
            padding: 10px 50px;
            width: fit-content;
            font-weight: 700;
            text-decoration: none;
        }

        .movies-tab-bar .row {
            margin: 0 auto;
        }

        .content-section .mycard {
            margin-bottom: 48px;
        }

        .content-section p.italic-16 {
            width: 85%;
            color: rgb(145, 145, 145);
            line-height: 140%;
            font-size: 14px;
        }

        .content-section .rating span {
            line-height: 120%;
        }

        .movies-tab-bar #myTab {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 96px;
            border: none;
            padding: 0;
        }

        .movies-tab-bar .nav-tabs .nav-item.show .nav-link, 
        .nav-tabs .nav-link.active {
            color: white;
            font-weight: 700;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid var(--brand-color);
            font-size: 1.125rem;
            box-shadow: 0 10px 10px -10px var(--brand-color);
        }

        .movies-tab-bar .nav-link {
            border-color: transparent;
            display: block;
            padding: 1rem 0.75rem;
            color: white;
            font-weight: 400;
            /* transition: .3s ease-in-out; */
        }

        .movies-tab-bar .nav-link {
            border-color: transparent;
            display: block;
            padding: 1rem 0.75rem;
            color: white;
            font-weight: 400;
            /* transition: .3s ease-in-out; */
        }

        /* 問題：如合去掉閃一下的 border?  */
        .movies-tab-bar .nav-tabs .nav-link:hover {
            border-color: rgba(255,255,255,0);
            transition: .3s ease-in-out;
        }

        .movies-tab-bar .nav-tabs .nav-link:focus {
            /* border-color: rgba(255,255,255,0); */
            border-bottom: 2px solid var(--brand-color);
            transition: .3s ease-in-out;
        }

        .movies-tab-bar .tab-content {
            width: 100%;
            justify-content: space-between;
        }
    </style>
</head>

<body>

    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <?php require_once './db.inc.php' ?>

    <main>
        <div class="movies-tab-bar g-section-mb">
            <div class="container">
                <div class="row justify-content-center">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">現正熱映</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">本週上映</a> 
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">即將上映</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <!-- 修改這裡的 bug，在大螢幕看原因 -->
                    <div class="tab-content flex-grow-1" id="myTabContent">

                        <!-- 現正熱映 -->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-section g-section-mb">
                                <div class="d-flex justify-content-between position-relative px-0">
                                    <div class="row mb-3">

                                        <!-- 1/5更改 電影資料提取與輸出 -->
                                        <?php
                                        $sql = "SELECT `poster`, `mName_TC`,  `mName_EN`, `movinon_rate` FROM `movie`WHERE `ov_id`='1' ";
                                        $arr = $pdo->query($sql)->fetchAll();
                                        foreach ($arr as $obj) {
                                        ?>
                                            <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                                <div class="mycard">
                                                    <a href="./detail-page.php">
                                                        <div class="img-wrap">

                                                            <!-- 1/5更改 海報資料輸出 -->
                                                            <img src=".\images\movies_overview_page\現正熱映\<?= $obj['poster'] ?>.jpg ">
                                                        </div>
                                                    </a>

                                                    <div class="mycard-info">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="movie-title">
                                                                <!-- 1/5更改 中文名資料輸出 -->
                                                                <p><span class="sub-title-r"><?= $obj['mName_TC'] ?></span></p>
                                                            </div>

                                                            <div class="rating d-flex">
                                                                <i class="fas fa-star"></i>

                                                                <!-- 1/5更改 評分資料輸出 -->
                                                                <span><?= $obj['movinon_rate'] ?></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- 1/5更改 英文名資料輸出 -->
                                                        <p class="italic-16"><?= $obj['mName_EN'] ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>

                                        <!-- ---------------------------End--------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 本週上映 -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-section g-section-mb">
                                <!-- 1/5 class增加container -->
                                <div class="d-flex justify-content-between position-relative px-0">
                                    <div class="d-flex flex-wrap mb-3">

                                        <!-- 1/5更改 電影資料提取與輸出 -->
                                        <?php
                                        $sql = "SELECT `poster`, `mName_TC`,  `mName_EN`, `movinon_rate` FROM `movie`WHERE `ov_id`='2' ";
                                        $arr = $pdo->query($sql)->fetchAll();
                                        foreach ($arr as $obj) {
                                        ?>
                                            <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                                <div class="mycard">
                                                    <a href="./detail-page.php">
                                                        <div class="img-wrap">

                                                            <!-- 1/5更改 海報資料輸出 -->
                                                            <img src=".\images\movies_overview_page\本週新片\<?= $obj['poster'] ?>.jpg">
                                                        </div>
                                                    </a>

                                                    <div class="mycard-info">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="movie-title">
                                                                <!-- 1/5更改 中文名資料輸出 -->
                                                                <p><span class="sub-title-r"><?= $obj['mName_TC'] ?></span></p>
                                                            </div>

                                                            <div class="rating d-flex">
                                                                <i class="fas fa-star"></i>

                                                                <!-- 1/5更改 評分資料輸出 -->
                                                                <span><?= $obj['movinon_rate'] ?></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- 1/5更改 英文名資料輸出 -->
                                                        <p class="italic-16"><?= $obj['mName_EN'] ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>

                                        <!-- ---------------------------End--------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 即將上映 -->
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-section g-section-mb">
                                <div class="d-flex justify-content-between position-relative px-0">
                                    <div class="row mb-3">
                                        <!-- 1/5更改 電影資料提取與輸出 -->
                                        <?php
                                        $sql = "SELECT `poster`, `mName_TC`,  `mName_EN`, `movinon_rate` FROM `movie`WHERE `ov_id`='3' ";
                                        $arr = $pdo->query($sql)->fetchAll();
                                        foreach ($arr as $obj) {
                                        ?>
                                            <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                                <div class="mycard">
                                                    <a href="./detail-page.php">
                                                        <div class="img-wrap">

                                                            <!-- 1/5更改 海報資料輸出 -->
                                                            <img src=".\images\movies_overview_page\即將上映\<?= $obj['poster'] ?>.jpg ">
                                                        </div>
                                                    </a>

                                                    <div class="mycard-info">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="movie-title">
                                                                <!-- 1/5更改 中文名資料輸出 -->
                                                                <p><span class="sub-title-r"><?= $obj['mName_TC'] ?></span></p>
                                                            </div>

                                                            <div class="rating d-flex">
                                                                <i class="fas fa-star"></i>

                                                                <!-- 1/5更改 評分資料輸出 -->
                                                                <span><?= $obj['movinon_rate'] ?></span>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- 1/5更改 英文名資料輸出 -->
                                                        <p class="italic-16"><?= $obj['mName_EN'] ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>           
                                        <!-- ---------------------------End--------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>

    <script>
        const len = 42;
        const ellipsis = document.querySelectorAll('.mycard-info p.italic-16');
        ellipsis.forEach((item) => {
            if(item.innerHTML.length > len) {
                let txt = item.innerHTML.substring(0, len) + '...';
                item.innerHTML = txt;
            }
        })
    </script>
</body>
</html>