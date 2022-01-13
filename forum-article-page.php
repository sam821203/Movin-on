<?php require_once './tpl/head.php' ?>
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>

<style>
    <?php require_once './css/forum-article-page.css' ?>
</style>

<body>
    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <main>
        <div class="main-article">
            <div class="container">
                <div class="row">
                    <div class="left-side-section col-lg-12 col-xl-9">
                        <!-- left side article -->
                        <div class="left-side-article">
                            <p class="body1-r"><span class="date body1-m">2021-11-23</span>by<a href=""><span class="author-name">Y'shtola Rhul</a></span></p>
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
                                        八爪博士說 彼得 你長大了 喔買尬 我也崩了
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
                                        看到陶比真的超感動 小時候雖已看了無數次 回家又再重新看了一次陶比三部曲 感謝他們給我精彩的童年
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
                                        <button type="submit" class="btn-brand-left-comment mr-0">送出</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="aside-section mycol-12 col-xl-3">

                        <!-- 小於 1200 -->
                        <div class="d-none d-lg-none d-xl-block col-xl-12 aside-ads">
                            <a href="#">
                                <div class="img-wrap">
                                    <img src="images/forum_article_page/ads_img.jpg" alt="">
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

                        <div class="d-none d-lg-none d-xl-block aside-related-articles">
                            <div class="d-flex subtitle g-subtitle-mb">
                                <div class="d-flex">
                                    <div class="red-line my-auto"></div>
                                    <span class="section-header-b">相關看板文章</span>
                                </div>
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

                        <!-- 小於 992 -->
                        <div class="d-none d-md-none d-lg-block d-xl-none aside-related-articles g-section-mb">
                            <div class="mycol-12 d-flex subtitle g-subtitle-mb">
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

                        <!-- 小於 418 後顯示 -->
                        <div class="d-block d-lg-block d-xl-none aside-related-articles g-section-mb">
                            <div class="subtitle g-subtitle-mb">
                                <div class="mycol-6 d-flex">
                                    <div class="red-line my-auto"></div>
                                    <span class="section-header-b">相關看板文章</span>
                                </div>
                                <div class="mycol-6 d-flex justify-content-end align-items-end">
                                    <a href="#">
                                        <div class="d-flex justify-content-end align-items-end">
                                            <div class="sub-title-r mt-2">前往討論區</div>
                                            <div class="ml-2"><i class="fas fa-chevron-right"></i></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- ------------第一篇相關文章------------ -->
                            <div class="d-flex flex-wrap">
                                <div class="mycol-12">
                                    <a href="">
                                        <div class="related-articles d-flex">
                                            <div class="mycol-9 content">
                                                <div class="d-flex tags">
                                                    <div class="spoiler body2-r">雷</div>
                                                    <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                                </div>
                                                <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                            </div>
                                            <div class="mycol-3 img-wrap">
                                                <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mycol-12">
                                    <a href="">
                                        <div class="related-articles d-flex">
                                            <div class="mycol-9 content">
                                                <div class="d-flex tags">
                                                    <div class="spoiler body2-r">雷</div>
                                                    <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                                </div>
                                                <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                            </div>
                                            <div class="mycol-3 img-wrap">
                                                <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mycol-12">
                                    <a href="">
                                        <div class="related-articles d-flex">
                                            <div class="mycol-9 content">
                                                <div class="d-flex tags">
                                                    <div class="spoiler body2-r">雷</div>
                                                    <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                                </div>
                                                <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                            </div>
                                            <div class="mycol-3 img-wrap">
                                                <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mycol-12">
                                    <a href="">
                                        <div class="related-articles d-flex">
                                            <div class="mycol-9 content">
                                                <div class="d-flex tags">
                                                    <div class="spoiler body2-r">雷</div>
                                                    <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                                </div>
                                                <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                            </div>
                                            <div class="mycol-3 img-wrap">
                                                <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mycol-12">
                                    <a href="">
                                        <div class="related-articles d-flex">
                                            <div class="mycol-9 content">
                                                <div class="d-flex tags">
                                                    <div class="spoiler body2-r">雷</div>
                                                    <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                                </div>
                                                <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                            </div>
                                            <div class="mycol-3 img-wrap">
                                                <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="mycol-12">
                                    <a href="">
                                        <div class="related-articles d-flex">
                                            <div class="mycol-9 content">
                                                <div class="d-flex tags">
                                                    <div class="spoiler body2-r">雷</div>
                                                    <div class="arti-cat-tag g-tag body2-r">新聞</div>
                                                </div>
                                                <p>湯姆：《蜘蛛人：無家日》的戰鬥場景非常暴...</p>
                                            </div>
                                            <div class="mycol-3 img-wrap">
                                                <img src="images/forum_article_page/related-arti-img1.jpg" alt="">
                                            </div>
                                        </div>
                                    </a>
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