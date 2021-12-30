
<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>
    <style>

    <?php require_once './tpl/global-style.css' ?>

    :root{
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
        --box-shadow-red: 0px 0px 16px 4px rgba(245,61,61,0.25);
    }

    .content-section .img-wrap {
        max-width: 198px;
        object-fit: cover;
        object-position: 50% 50%;
        margin-bottom: 12px;
    }

    .img-wrap img{
        width: 100%;
        border-radius: var(--border-radius-4);
    }

    .rating {
        padding-top: 4px;
    }

    .rating .fa-star {
        margin-right: 6px;
    }

    .related-articles-section .articles .sub-title-r {
        overflow:hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
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

    .content-section p {
        color: rgb(145, 145, 145);
    }

    /* .movies-tab-bar {
        margin-bottom: 128px;
    } */

    .movies-tab-bar #myTab {
        display: flex;
        justify-content: center;
        margin-bottom: 128px;
        border: 1px solid white;
        padding-left: 240px;
        padding-right: 240px;
    }

    .movies-tab-bar .tab-content {
        justify-content: space-between;
    }
    
    </style>
</head>
<body>
    <nav></nav>

    <main>
        <div class="movies-tab-bar">
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

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="content-section">
                                <div class="container justify-content-between position-relative px-0">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">

                                                <div class="img-wrap">
                                                    <img src="images/t010027326c5efc4864.jpeg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
                                                        </div>
                                                        <div class="rating d-flex">
                                                            <i class="fas fa-star"></i>
                                                            <span>4.5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-md-4 col-sm-6 col-xs-6 col-6">
                                            <div class="mycard">
                                                <div class="img-wrap">
                                                    <img src="images/movies_overview_page/8yokt1b1YUePcbyPmSeC-280 x 400.jpg" alt="" >
                                                </div>
                                                
                                                <div class="mycard-info">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="movie-title">
                                                            <span class="sub-title-r">刀劍神域: Progressive</span>
                                                            <p class="italic-16">Sword Art Online: Progressive</p>
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

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">我不好</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">機車</div>
                    </div>
                </div>
                

                <!-- <div class="row typesBorder">
                    <a href="" class="playName">現正熱映</a>
                    <a href="" class="playName">本週上映</a>
                    <a href="" class="playName" >即將上映</a>                        
                </div> -->
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
        

       
    </main>
    
    <footer></footer>

    <?php require_once './tpl/foot.php' ?>

</body>
</html>