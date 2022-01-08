<?php require_once './tpl/head.php' ?>

<style>

        body {
            background: url("images/forum_overview_page/bg-img-min.jpg") top center no-repeat;
            background-size: contain;
            background-color: var(--bg-color);
            width: 100%;
        }

        .main-article {
            margin-top: 256px;
        }

        .sub-title-r {
            line-height: 170%;
        }
        
        /* ----------------------left side section---------------------- */

        /* left side article */
        .left-side-section .left-side-article {
            background-color: var(--card-color);
            padding: 128px 104px 56px 104px;
            border-radius: var(--border-radius-8);
            margin-bottom: 32px;
            box-shadow: var(--box-shadow-card-lg);
        }
        
        .left-side-article p:nth-child(1) { margin-bottom: 8px; }

        .left-side-article .section-header-b { 
            margin-bottom: 12px; 
            line-height: 140%;
        }

        .left-side-article .article-extra-info { margin-bottom: 48px; }

        .left-side-article .date {
            margin-right: 16px;
            opacity: var(--opacity-50);
        }

        .left-side-article .author-name {
            margin-left: 8px;
        }

        .left-side-article .arti-cat-tag {
            border: 1px solid rgba(255,255,255,0.5);
            border-radius: var(--border-radius-50);
            background-color: var(--bg-color);
        }

        .left-side-article .spoiler,
        .left-side-article .spoiler-free {
            border-radius: var(--border-radius-50);
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 12px;
        }

        .left-side-article .spoiler {
            background-color: var(--brand-color);
            box-shadow: var(--box-shadow-red);
            color: var(--bg-color);
            display: flex;
            align-items: center;
        }

        .left-side-article .spoiler-free {
            background-color: rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.1);
        }

        .left-side-article .sub-title-r {
            opacity: var(--opacity-75);
        }

        .left-side-article .img-wrap {
            width: 100%;
            height: 100%;
            position: relative;
            margin: 48px 0 56px 0;
            display: flex;
        }

        .left-side-article .img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: 50% 50%;
            border-radius: var(--border-radius-8);
        }

        .left-side-article .comment-data {
            border-top: 1px solid rgba(255,255,255,0.25)
        }

        .left-side-article .article-content {
            margin-bottom: 88px;
        }

        .left-side-article .thumbs-up,
        .left-side-article .comment,
        .left-side-article .share {
            padding: 12px 24px;
        }

        .left-side-article .thumbs-up:hover .thumbs-up {
            background-color: #ccc;
        }

        .left-side-article .comment-data i {
            margin-right: 8px;
            font-size: 20px;
        }

        /* left side comment */
        .left-side-comment {
            background-color: var(--card-color);
            padding: 0 104px;
            border-radius: var(--border-radius-8);
        }

        .left-side-comment .comment-count,
        .left-side-comment .comments {
            padding-top: 64px;
            padding-bottom: 32px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left-side-comment .comment-count {
            opacity: var(--opacity-75);
            margin-right: 8px;
        }

        .left-side-comment .comments {
            opacity: var(--opacity-50);
        }

        .left-side-comment .tab-bar {
            padding: 12px 16px;
            font-size: 20px;
            margin-bottom: 32px;
            cursor: pointer;
        }

        .left-side-comment .tab-bar.chosen { 
            font-weight: 700; 
            border-bottom: 2px solid var(--brand-color);
        }

        .left-side-comment .comment {
            width: 100;
            display: flex;
            padding: 40px 0 20px 0;
            border-bottom: 1px solid rgba(255,255,255,0.25);
        }

        .left-side-comment .comment-1 {
            border-top: 1px solid rgba(255,255,255,0.25);
        }

        .left-side-comment .comment .avatar,
        .left-side-comment .write-comment .avatar {
            width: 7%;
        }

        .left-side-comment .comment .avatar .img-wrap,
        .left-side-comment .write-comment .avatar .img-wrap {
            width: 100%;
            display: flex;
        }

        .left-side-comment .comment .avatar .img-wrap img,
        .left-side-comment .write-comment .avatar .img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: 50% 50%;
            border-radius: var(--border-radius-50-percent);
            box-shadow: var(--box-shadow-avatar-sm);
        }

        .left-side-comment .comment .content {
            width: 93%;
            padding-left: 20px;
        }

        .left-side-comment .comment p {
            opacity: var(--opacity-75);
        }

        .left-side-comment .member-name {
            opacity: var(--opacity-90);
            margin-right: 16px;
        }

        .left-side-comment .member-info {
            margin-bottom: 12px;
        }

        .left-side-comment .fa-clock {
            opacity: var(--opacity-75);
            margin-right: 8px;
        } 

        .left-side-comment .timestamp { opacity: var(--opacity-50); }
        .left-side-comment .fa-ellipsis-h { opacity: var(--opacity-50); }

        .left-side-comment .response a,
        .left-side-comment .response i,
        .left-side-comment .response span {
            margin: auto 0;
            display: block;
        }

        .left-side-comment .fa-thumbs-up {
            font-size: 20px;
        }

        .left-side-comment .like-count {
            padding-left: 8px;
        }

        .left-side-comment .reply {
            background-color: rgba(255,255,255,0.1);
            border-radius: var(--border-radius-4);
            padding: 4px 12px;
            margin-left: 24px;
        }

        .left-side-comment .fa-ellipsis-h {
            display: flex;
            align-items: start;
        }

        /* write comment */
        .write-comment {
            display: flex;
            padding: 40px 0 56px 0;
        }

        .write-comment .form {
            width: 93%;
        }

        .write-comment .form-group {
            margin-left: 20px;
        }
        
        .write-comment .form-control {
            color: rgba(255,255,255,0.25);
            background-color: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.75);
            border-radius: var(--border-radius-4);
        }

        .btn-brand {
            color: #fff;
            background-color: var(--brand-color);
            transition: .2s;
            padding: 4px 24px;
        }

        .btn-brand:hover {
            color: #fff;
            font-weight: 700;
            box-shadow: var(--box-shadow-red);
        }

        /* ----------------------aside section---------------------- */
        .aside-section .col-xl-3,
        .aside-section .col-xl-12,
        .aside-section .col-lg-3,
        .aside-section .col-lg-9 {
            padding: 0;
        }

        /* aside ads */
        .aside-ads {
            margin-bottom: 32px;
            height: 256px;
            background-color: var(--card-color);
            border-radius: var(--border-radius-8);
            box-shadow: var(--box-shadow-card-lg);
        }

        /* aside member info */
        .aside-member-info {
            margin-bottom: 96px;
            font-size: 14px;
            background-color: var(--card-color);
            border-radius: var(--border-radius-8);
            box-shadow: var(--box-shadow-card-lg);
        }

        .aside-member-info .img-wrap {
            width: 75%;
            margin: 32px 0 16px 0;
            padding: 0 40px;
        }

        .aside-member-info .img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
            border-radius: var(--border-radius-50-percent);
            box-shadow: var(--box-shadow-avatar-lg);
        }

        .aside-member-info .name {
            margin-bottom: 8px;
            padding: 0 40px;
        }

        .aside-member-info .membership {
            margin-bottom: 24px;
            display: flex;
            justify-content: center;
        }

        .aside-member-info .inner-content {
            padding: 4px 12px;
            margin-bottom: 24px;
            border: 0.75px solid white;
            border-radius: var(--border-radius-50);
            margin: 0 auto;
        }

        .aside-member-info .inner-content i {
            margin-right: 8px;
        }

        .aside-member-info .description {
            margin-bottom: 24px;
            padding: 0 40px;
        }

        .aside-member-info p.body2-r {
            line-height: 170%;
            opacity: var(--opacity-75);
        }

        .aside-member-info .social-media {
            margin-bottom: 24px;
            display: flex;
            justify-content: space-between;
            padding: 0 88px;
            font-size: 32px;
            opacity: var(--opacity-50);
        }
        
        /* extra info */
        .aside-member-info .extra-info {
            display: flex;
            border-top: 1px solid rgba(255,255,255,0.25);
        }

        .aside-member-info .ticket,
        .aside-member-info .post {
            width: 50%;
            padding-bottom: 16px;
        }

        .aside-member-info .ticket {
            border-right: 1px solid rgba(255,255,255,0.25);
        }

        .aside-member-info .extra-info .ticket-count {
            padding: 16px 40px 0 40px;
            text-align: center;
            font-size: 56px;
            opacity: var(--opacity-25);
            font-weight: 700;
            line-height: 100%;
        }
        
        .aside-member-info .extra-info .my-ticket,
        .aside-member-info .extra-info .my-post {
            padding: 0 40px;
            text-align: center;
            font-size: 1rem;
            opacity: var(--opacity-75);
        }

        /* aside related articles */
        .aside-related-articles .related-articles {
            background-color: rgba(32,32,32,0.25);
            border: 1px solid rgba(255,255,255,0.25);
            border-radius: var(--border-radius-8);
            display: flex;
            margin-bottom: 20px;
        }

        .aside-related-articles .content {
            width: 75%;
            padding: 16px 12px 16px 24px;
        }

        .aside-related-articles .spoiler,
        .aside-related-articles .spoiler-free {
            border-radius: var(--border-radius-50-percent);
            width: 28px;
            height: 28px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 8px;
        }

        .aside-related-articles .spoiler {
            background-color: var(--brand-color);
            box-shadow: var(--box-shadow-red);
            color: var(--bg-color);
        }

        .aside-related-articles .spoiler-free {
            background-color: rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.1);
        }

        .aside-related-articles .arti-cat-tag {
            border: 1px solid rgba(255,255,255,0.5);
            border-radius: var(--border-radius-50);
            background-color: var(18,18,18,0.5);
        }

        .aside-related-articles .content .tags {
            margin-bottom: 8px;
        }

        .aside-related-articles .content p {
            opacity: var(--opacity-90);
        }

        .aside-related-articles .img-wrap {
            width: 25%;
        }

        .aside-related-articles .img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
            border-radius: 0px 8px 8px 0px;
        }

        .aside-related-articles .content p {
            line-height: 140%;
        }

        /* =================================== @media =================================== */
        /* ============================================================================== */

        /* ------------------------  小於 1920px  ------------------------*/
        @media screen and (max-width: 1920px) {
            /* .forum-info-section {
                margin-bottom: 48px;
            } */
        }

        /* ------------------------  小於 1400px  ------------------------*/
        @media screen and (max-width: 1400px) {

            /* left side article */
            .left-side-article {
                padding: 96px 64px;
            }

            .left-side-comment { padding: 0 64px; }

            /* aside member info */
            .aside-member-info .social-media {
                padding: 0 64px;
            }

            .aside-member-info .img-wrap {
                padding: 0 32px;
            }

            .aside-member-info .extra-info .ticket-count {
                padding: 16px 32px 0 32px;
            }
            
            .aside-member-info .extra-info .my-ticket,
            .aside-member-info .extra-info .my-post {
                padding: 0 24px;
            }
        }

        /* ------------------------  小於 1200px  ------------------------*/
        @media screen and (max-width: 1200px) {

            /* left side section */
            .left-side-section {
                padding: 0 32px;
            }
            
            .left-side-section .left-side-article {
                padding: 72px 64px;
            }
            
            /* aside-related-articles */
            .aside-related-articles .related-articles {
                display: block;
                padding-bottom: 16px;
                margin-bottom: 32px;
                border-radius: var(--border-radius-4);
            }

            .aside-related-articles .related-articles .img-wrap {
                width: 100%;
                display: flex;
            }

            .aside-related-articles .related-articles .img-wrap img {
                border-radius: 4px 4px 0 0;
            }

            .aside-related-articles .related-articles .content {
                width: 100%;
                padding: 24px 16px 16px 24px;
            }
        }

        /* ------------------------  小於 992px  ------------------------*/
        @media screen and (max-width: 992px) {

            body {
                background: url("images/movie_booking_page/bg_img/TEST.jpg") top center no-repeat;
                background-size: contain;
                background-color: var(--bg-color);
            }

            .main-article .container {
                max-width: 100%;
            }
        }

        /* ------------------------  小於 768px  ------------------------*/
        @media screen and (max-width: 768px) {

            /* left side section */
            .left-side-section .left-side-article {
                padding: 56px 48px;
            }

            /* left side article */
            .left-side-article .article-content {
                margin-bottom: 48px;
            }

            .left-side-article p.section-header-b {
                font-size: 1.25rem;
            }

            .left-side-article p.sub-title-r {
                font-size: 1rem;
            }

            .left-side-article .article-extra-info .arti-cat-tag,
            .left-side-article .article-extra-info .spoiler,
            .left-side-article .article-extra-info .spolier-free,
            .left-side-article .article-extra-info .comment span {
                font-size: 0.875rem;
            }

            /* left side comment */
            .left-side-comment .comment .content {
                width: 88%;
            }

            .left-side-comment .comment .avatar, 
            .left-side-comment .write-comment .avatar {
                width: 12%;
            }

            .left-side-comment .comment-count,
            .left-side-comment .comments {
                padding: 48px 0 24px 0;
            }

            .left-side-comment .comment p {
                margin-bottom: 24px;
            }

            .left-side-comment .tab-bar,
            .left-side-comment .tab-bar.chosen,
            .left-side-comment .sub-title-b {
                font-size: 1rem;
            }

            .left-side-comment .reply,
            .left-side-comment .like-count {
                font-size: 0.875rem;
            }

        }

        /* ------------------------  小於 576px  ------------------------*/
        @media screen and (max-width: 576px) {

            /* left side article */
            .left-side-section .left-side-article,
            .left-side-section .left-side-comment {
                padding: 24px 0px;
                border-radius: 0;
                margin: 0;
                background-color: var(--bg-color);
            }

            .left-side-article .img-wrap {
                margin: 24px 0 32px 0;
            }

            .left-side-article .thumbs-up, 
            .left-side-article .comment, 
            .left-side-article .share {
                padding: 16px;
            }

            .left-side-comment .comment {
                padding: 20px 0 10px 0;
            }

            .left-side-comment .comment .content p {
                margin-bottom: 8px;
            }

            /* aside-related-articles */
            .aside-related-articles .related-articles {
                display: block;
                padding-bottom: 8px;
            }

            .aside-related-articles .related-articles .img-wrap {
                height: 144px;
            }
            
        }

        /* ------------------------  小於 418px  ------------------------*/
        @media screen and (max-width: 418px) {

            .left-side-section {
                padding: 0 16px;
            }

            /* left side comment */
            .left-side-comment .comment-count,
            .left-side-comment .comments {
                display: none;
            }

            .left-side-comment .comment .content {
                padding-left: 12px;
            }

            .left-side-comment .comment .content p {
                font-size: 0.875rem;
            }

        }
    </style>
</head>
<body>

    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <main>
        <div class="main-article">
            <div class="container">
                <div class="row">
                    <div class="left-side-section col-lg-12 col-xl-9">
                        <div class="left-side-article">
                            <p class="body1-r"><span class="date body1-m">2021-11-23</span>by<span class="author-name"><a href="">Y'shtola Rhul</a></span></p>
                            <p class="section-header-b">蜘蛛人確定有三代同堂，可以看爆了吧</p>
                            <div class="article-extra-info d-flex align-items-center">
                                <span class="arti-cat-tag g-tag g-tag">情報</span><span class="spoiler">雷</span>
                            </div>

                            <div class="article-content">
                                <p class="sub-title-r">電影宣傳和首映藏成這樣，<br>
                                    是不是幾乎可以確定蜘蛛人有三代同堂了？<br>
                                    而有三代同堂觀眾就會看爆了吧？<br>
                                    <br>
                                    但因為我方的荷蘭弟顧此失彼，<br>
                                    陶比和加菲都在戰鬥中受重傷，<br>
                                    接下來荷蘭弟爆發加運用了鋼鐵人之力成功把反派送回原本的宇宙，<br>
                                    最後陶比和加菲笑著對荷蘭弟說：「你有著我們所沒有的力量，你才是真正的蜘蛛人啊」後就領便當消失了。
                                </p>
                                
                                <div class="img-wrap">
                                    <img src="images/forum_article_page/image-1.jpg" alt="">
                                </div>
                                
                                <p class="sub-title-r">預告說到其他宇宙的蜘蛛人反派都有死亡加荷蘭弟要阻止奇異博士殺其他宇宙的反派，<br>
                                    這邊就是暗示了這集的精神，<br>
                                    殺反派是錯的及其他宇宙的蜘蛛人是失敗的，<br>
                                    所以荷蘭弟在對付反派的同時還要阻止奇異博士加預防陶比和加菲不小心殺死反派，<br>
                                    三代同堂當然是真的，<br>
                                    <br>
                                    奇異博士面帶微笑對荷蘭弟說，<br>
                                    他們的宇宙也有真正的蜘蛛人在保護他們了，<br>
                                    荷蘭弟以微笑回應，完。
                                    <br>
                                    這樣充滿MCU精神的三代同堂蜘蛛人，<br>
                                    大家應該會看爆吧？o'_'o
                                </p>
                            </div>
                            
                            <div class="comment-data d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <a href="#">
                                        <div class="thumbs-up">
                                            <i class="fas fa-thumbs-up"></i><span>243</span>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="comment">
                                            <span><i class="far fa-comment"></i>24</span>
                                        </div>
                                    </a>
                                </div>
                                <a href="#">
                                    <div class="share">
                                        <span><i class="fas fa-share-square"></i>分享</span>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                        
                        <!-- left side comment -->
                        <div class="left-side-comment g-section-mb">
                            <div class="d-flex justify-content-center sub-title-r">
                                <span class="comment-count sub-title-b">23</span>
                                <span class="comments">Comments</span>
                            </div>
                            <div class="d-flex justify-content-end">
                                <span class="tab-bar chosen">時間順序</span>
                                <span class="tab-bar">熱門留言</span>
                            </div>
                            <!-- ------------------第一則留言 comment------------------ -->
                            <div class="comment comment-1">
                                <div class="avatar">
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/avatar-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between">
                                        <div class="member-info">
                                            <a href="#">
                                                <span class="member-name sub-title-b">KENDO777</span>
                                            </a>
                                            <i class="far fa-clock"></i><span class="timestamp">17小時</span>
                                        </div>
                                        <a href="#">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                    </div>
                                    <p>
                                        三代同堂只是幻想啦，最後的三打三是蜘蛛人，猛毒，八爪博士
                                    </p>
                                    <div class="response d-flex justify-content-end">
                                        <div class="d-flex align-items-end">
                                            <a href="#"><i class="fas fa-thumbs-up"></i></a><span class="like-count">112</span>
                                        </div>
                                        <div class="reply">
                                            <a href="#"><span>回覆</span></a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="comment">
                                <div class="avatar">
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/avatar-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between">
                                        <div class="member-info">
                                            <a href="#">
                                                <span class="member-name sub-title-b">joe2</span>
                                            </a>
                                            <i class="far fa-clock"></i><span class="timestamp">1天前</span>
                                        </div>
                                        <a href="#">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                    </div>
                                    <p>
                                        八爪博士說  彼得 你長大了  喔買尬 我也崩了
                                    </p>
                                    <div class="response d-flex justify-content-end">
                                        <div class="d-flex align-items-end">
                                            <a href="#"><i class="fas fa-thumbs-up"></i></a><span class="like-count">112</span>
                                        </div>
                                        <div class="reply">
                                            <a href="#"><span>回覆</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="avatar">
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/avatar-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between">
                                        <div class="member-info">
                                            <a href="#">
                                                <span class="member-name sub-title-b">alldishuang</span>
                                            </a>
                                            <i class="far fa-clock"></i><span class="timestamp">1天前</span>
                                        </div>
                                        <a href="#">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                    </div>
                                    <p>
                                        真的超感動 QQ
                                    </p>
                                    <div class="response d-flex justify-content-end">
                                        <div class="d-flex align-items-end">
                                            <a href="#"><i class="fas fa-thumbs-up"></i></a><span class="like-count">25</span>
                                        </div>
                                        <div class="reply">
                                            <a href="#"><span>回覆</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="avatar">
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/avatar-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="d-flex justify-content-between">
                                        <div class="member-info">
                                            <a href="#">
                                                <span class="member-name sub-title-b">riddle6</span>
                                            </a>
                                            <i class="far fa-clock"></i><span class="timestamp">1週前</span>
                                        </div>
                                        <a href="#">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                    </div>
                                    <p>
                                        看到陶比真的超感動  小時候雖已看了無數次  回家又再重新看了一次陶比三部曲  感謝他們給我精彩的童年
                                    </p>
                                    <div class="response d-flex justify-content-end">
                                        <div class="d-flex align-items-end">
                                            <a href="#"><i class="fas fa-thumbs-up"></i></a><span class="like-count">112</span>
                                        </div>
                                        <div class="reply">
                                            <a href="#"><span>回覆</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="write-comment">
                                <div class="avatar">
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/avatar-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="寫些什麼"></textarea>
                                    </div>

                                    <div class="d-flex justify-content-end align-items-end">
                                        <button type="submit" class="btn btn-brand">送出</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="aside-section col-lg-12 col-xl-3">
                        <div class="d-none d-lg-none d-xl-block col-xl-12 aside-ads">
                            <a href="#">
                                <div class="img-wrap">
                                    <img src="" alt="------放廣告------">
                                </div>
                            </a>
                        </div>
                        <div class="d-none d-lg-none d-xl-block col-xl-12 aside-member-info">
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
                            <p class="description body2-r">
                                從早期BBS起家，之後開始經營電影部落格，並在許多媒體撰寫影評相關文章的草根寫手。從觀眾的角度出發，希望能協助大家找到適合自己的電影。
                            </p>
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
                            <div class="extra-info">
                                <div class="ticket">
                                    <div class="ticket-count roboto-condensed">16</div>
                                    <div class="my-ticket">我的票夾</div>
                                </div>

                                <div class="post">
                                    <div class="ticket-count roboto-condensed">5</div>
                                    <div class="my-post">發文記錄</div>
                                </div>
                            </div>
                        </div>

                        <!-- 小於 1200 後顯示 d-lg-flex d-xl-none -->
                        <div class="d-none col-xl-12 aside-member-info">
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
                            <p class="description body2-r">
                                從早期BBS起家，之後開始經營電影部落格，並在許多媒體撰寫影評相關文章的草根寫手。從觀眾的角度出發，希望能協助大家找到適合自己的電影。
                            </p>
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
                            <div class="extra-info">
                                <div class="ticket">
                                    <div class="ticket-count roboto-condensed">16</div>
                                    <div class="my-ticket">我的票夾</div>
                                </div>

                                <div class="post">
                                    <div class="ticket-count roboto-condensed">5</div>
                                    <div class="my-post">發文記錄</div>
                                </div>
                            </div>
                        </div>


                        <div class="d-none d-lg-none d-xl-block aside-related-articles">
                            <div class="d-flex subtitle g-subtitle-mb">
                                <div class="red-line my-auto"></div>
                                <span class="section-header-b">相關看板文章</span>
                            </div>

                            <!-- ------------第一篇相關文章------------ -->
                            <a href="#">
                                <div class="related-articles">
                                    <div class="content">
                                        <div class="d-flex tags">
                                            <div class="spoiler body2-r">雷</div>
                                            <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                        </div>
                                        <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                    </div>
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="related-articles">
                                    <div class="content">
                                        <div class="d-flex tags">
                                            <div class="spoiler body2-r">雷</div>
                                            <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                        </div>
                                        <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                    </div>
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="related-articles">
                                    <div class="content">
                                        <div class="d-flex tags">
                                            <div class="spoiler body2-r">雷</div>
                                            <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                        </div>
                                        <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                    </div>
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="related-articles">
                                    <div class="content">
                                        <div class="d-flex tags">
                                            <div class="spoiler body2-r">雷</div>
                                            <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                        </div>
                                        <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                    </div>
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="related-articles">
                                    <div class="content">
                                        <div class="d-flex tags">
                                            <div class="spoiler body2-r">雷</div>
                                            <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                        </div>
                                        <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                    </div>
                                    <div class="img-wrap">
                                        <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-lg-block d-xl-none aside-related-articles g-section-mb">
                            <div class="col-12 d-flex subtitle g-subtitle-mb">
                                <div class="red-line my-auto"></div>
                                <span class="section-header-b">相關看板文章</span>
                            </div>

                            <!-- ------------第一篇相關文章------------ -->
                            <div class="d-flex flex-wrap">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="related-articles">
                                        <div class="img-wrap">
                                            <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex tags">
                                                <div class="spoiler body2-r">雷</div>
                                                <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                            </div>
                                            <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="related-articles">
                                        <div class="img-wrap">
                                            <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex tags">
                                                <div class="spoiler body2-r">雷</div>
                                                <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                            </div>
                                            <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="related-articles">
                                        <div class="img-wrap">
                                            <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex tags">
                                                <div class="spoiler body2-r">雷</div>
                                                <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                            </div>
                                            <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="related-articles">
                                        <div class="img-wrap">
                                            <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex tags">
                                                <div class="spoiler body2-r">雷</div>
                                                <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                            </div>
                                            <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="related-articles">
                                        <div class="img-wrap">
                                            <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex tags">
                                                <div class="spoiler body2-r">雷</div>
                                                <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                            </div>
                                            <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="related-articles">
                                        <div class="img-wrap">
                                            <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex tags">
                                                <div class="spoiler body2-r">雷</div>
                                                <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                            </div>
                                            <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- movinon footer -->
    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>
    
    <script src=""></script>

</body>

</html>