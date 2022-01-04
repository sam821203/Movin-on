
<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>

    <style>

        <?php require_once './tpl/global-style.css' ?>

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

        /* .content-section .mycard-info {
            
        } */

        .content-section .movie-title {
            overflow: hidden;
            width: 65%;
        }

        .content-section .movie-title p span {
            font-size: 1.125rem;
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
            justify-content:center;
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
            margin-bottom: 32px;
        }

        .content-section p.italic-16 {
            color: rgb(145, 145, 145);
            line-height: 140%;
            font-size: 14px;
            /* white-space: nowrap; */
            /* space */
        }

        .content-section .rating span {
            line-height: 120%;
        }

        .movies-tab-bar #myTab {
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
        }

        .movies-tab-bar .nav-link {
            border-color: transparent;
            display: block;
            padding: 1rem 0.75rem;
            color: white;
            font-weight: 400;
            transition: .3s ease-in-out;
        }

        .movies-tab-bar .nav-link {
            border-color: transparent;
            display: block;
            padding: 1rem 0.75rem;
            color: white;
            font-weight: 400;
            transition: .3s ease-in-out;
        }

        /* 問題：如合去掉閃一下的 border?  */
        .movies-tab-bar .nav-tabs .nav-link:hover {
            border-color: rgba(255,255,255,0);
            transition: .3s ease-in-out;
        }

        .movies-tab-bar .nav-tabs .nav-link:focus {
            border-color: rgba(255,255,255,0);
            border-bottom: 2px solid var(--brand-color);
            transition: .3s ease-in-out;
        }

        .movies-tab-bar .tab-content {
            justify-content: space-between;
        }
    </style>
</head>

<body>

    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <main>
        <div class="movies-tab-bar g-section-mb">
            <div class="container">
                <div class="row">
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
                    <div class="tab-content" id="myTabContent">

                        <!-- 現正熱映 -->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-section g-section-mb">
                                <div class="container justify-content-between position-relative px-0">
                                    <div class="row mb-3">
                                        <!-- 第一部電影 -->
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="./detail-page.php">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank1.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">永恆族</span></p>
                                                            <p class="italic-16">Eternals</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank2.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">刀劍神域: Progressive</span></p>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank3.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">詭扯</span></p>
                                                            <p class="italic-16">Treat or trick</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank4.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">我的英雄學院劇場版：世界英雄任務</span></p>
                                                            <p class="italic-16">My Hero Academia The Movie : World Heores Mission</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.4</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank5.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">迷離夜蘇活</span></p>
                                                            <p class="italic-16">Last Night in Soho</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank6.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">梅艷芳</span></p>
                                                            <p class="italic-16">Anita Mui Yim Fong</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank7.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">瀑布</span></p>
                                                            <p class="italic-16">The Falls</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank8.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">粉紅雲</span></p>
                                                            <p class="italic-16">The Pink Cloud</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank9.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">脫稿玩家</span></p>
                                                            <p class="italic-16">Free Guy</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank10.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">心靈遊戲</span></p>
                                                            <p class="italic-16">Mind Game</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>3.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">是誰得手林布蘭？</span></p>
                                                            <p class="italic-16">My Rembrandt</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>3.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/7dbaQctoROYyqluIZbgB-280 x 400.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">老鷹之手</span></p>
                                                            <p class="italic-16">Eagle Hand</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        
                                        <!-- ---------------------------End--------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 本週上映 -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
                            本週上映
                            <div class="content-section g-section-mb">
                                <div class="container justify-content-between position-relative px-0">
                                    <div class="row mb-3">
                                        <!-- 第一部電影 -->
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="./detail-page.php">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank1.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">永恆族</span></p>
                                                            <p class="italic-16">Eternals</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank2.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">刀劍神域: Progressive</span></p>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank3.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">詭扯</span></p>
                                                            <p class="italic-16">Treat or trick</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank4.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">我的英雄學院劇場版：世界英雄任務</span></p>
                                                            <p class="italic-16">My Hero Academia The Movie : World Heores Mission</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.4</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank5.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">迷離夜蘇活</span></p>
                                                            <p class="italic-16">Last Night in Soho</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>43.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank6.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">梅艷芳</span></p>
                                                            <p class="italic-16">Anita Mui Yim Fong</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank7.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">瀑布</span></p>
                                                            <p class="italic-16">The Falls</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank8.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">粉紅雲</span></p>
                                                            <p class="italic-16">The Pink Cloud</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank9.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">脫稿玩家</span></p>
                                                            <p class="italic-16">Free Guy</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank10.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">心靈遊戲</span></p>
                                                            <p class="italic-16">Mind Game</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>3.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">是誰得手林布蘭？</span></p>
                                                            <p class="italic-16">My Rembrandt</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>3.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/7dbaQctoROYyqluIZbgB-280 x 400.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">老鷹之手</span></p>
                                                            <p class="italic-16">Eagle Hand</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        
                                        <!-- ---------------------------End--------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 即將上映 -->
                        <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="home-tab">
                            即將上映
                            <div class="content-section g-section-mb">
                                <div class="container justify-content-between position-relative px-0">
                                    <div class="row mb-3">
                                        <!-- 第一部電影 -->
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank1.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">永恆族</span></p>
                                                            <p class="italic-16">Eternals</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank2.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">刀劍神域: Progressive</span></p>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank3.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">詭扯</span></p>
                                                            <p class="italic-16">Treat or trick</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank4.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">我的英雄學院劇場版：世界英雄任務</span></p>
                                                            <p class="italic-16">My Hero Academia The Movie : World Heores Mission</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.4</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank5.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">迷離夜蘇活</span></p>
                                                            <p class="italic-16">Last Night in Soho</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>43.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank6.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">梅艷芳</span></p>
                                                            <p class="italic-16">Anita Mui Yim Fong</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank7.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">瀑布</span></p>
                                                            <p class="italic-16">The Falls</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank8.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">粉紅雲</span></p>
                                                            <p class="italic-16">The Pink Cloud</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank9.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">脫稿玩家</span></p>
                                                            <p class="italic-16">Free Guy</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/rank10.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">心靈遊戲</span></p>
                                                            <p class="italic-16">Mind Game</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>3.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">是誰得手林布蘭？</span></p>
                                                            <p class="italic-16">My Rembrandt</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>3.9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <a href="#">
                                                    <div class="img-wrap">
                                                        <img src="images/movies_overview_page/7dbaQctoROYyqluIZbgB-280 x 400.jpg" alt="" >
                                                    </div>
                                                </a>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <p><span class="sub-title-r">老鷹之手</span></p>
                                                            <p class="italic-16">Eagle Hand</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ---------------------------End--------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- <div class="row typesBorder">
                    <a href="" class="playName">現正熱映</a>
                    <a href="" class="playName">本週上映</a>
                    <a href="" class="playName" >即將上映</a>                        
                </div> -->
            </div>
        </div>
    </main>
    
    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>

</body>
</html>