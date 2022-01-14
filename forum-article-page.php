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
                    <!-- 01/12 更改 文章欄資料提取  -->
                    <?php
                    if (isset($_GET['id'])) {
                        $sql = "SELECT `article_cat`, `title`, `article`, `article_photo`, `spoiler_tag`, `thumb_num`, `member_id`, `article_id` FROM `spider_forum_article` WHERE `article_id`={$_GET['id']}";
                        $arr = $pdo->query($sql)->fetch();
                    }
                    ?>

                    <div class="left-side-section col-lg-12 col-xl-9">
                        <!-- left side article -->
                        <div class="left-side-article">
                            <p class="body1-r"><span class="date body1-m">2021-11-23</span>by<a href=""><span class="author-name">Y'shtola Rhul</a></span></p>
                            <p class="section-header-b"><?= $arr['title'] ?></p>
                            <div class="article-extra-info d-flex align-items-center">
                                <span class="arti-cat-tag g-tag g-tag"><?= $arr['article_cat'] ?></span><span class="spoiler"><?= $arr['spoiler_tag'] ?></span>
                            </div>

                            <div class="article-content">
                                <p class="sub-title-r"><?= nl2br($arr['article']) ?></p>

                                <div class="img-wrap">
                                    <img src="<?= $arr['article_photo'] ?>.jpg">
                                </div>
                            </div>

                            <div class="comment-data d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <a href="#">
                                        <div class="thumbs-up">
                                            <i class="fas fa-thumbs-up"></i><span>243</span>
                                        </div>
                                    </a>

                                    <!-- 01/12 更改 留言筆數提取  -->
                                    <?php
                                    if (isset($_GET['id'])) {
                                        $sql = "SELECT COUNT(*) FROM `comment` WHERE `title_id`={$_GET['id']}";
                                        $total = $pdo->query($sql)->fetch();
                                    }
                                    ?>

                                    <!-- 01/12 更改 留言筆數置入  -->
                                    <a href="#">
                                        <div class="comment">
                                            <span><i class="far fa-comment"></i><?php echo ($total['COUNT(*)']) ?></span>
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
                                <span class="comment-count sub-title-b"><?php echo ($total['COUNT(*)']) ?></span>
                                <span class="comments">Comments</span>
                            </div>

                            <!-- 0110 更改 增加篩選選單 -->
                            <ul class="nav justify-content-end nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">時間順序</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">熱門留言</a>
                                </li>
                            </ul>

                            <!-- 0110 更改 增加篩選欄位 -->
                            <div class="tab-content flex-grow-1" id="myTabContent">

                                <!-- 0110 更改 增加時間篩選欄位 -->
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    <!-- 01/12 更改 留言資料提取  -->
                                    <?php
                                    if (isset($_GET['id'])) {
                                        $sql =
                                            "SELECT `comment_id`,`comment_content`,`like_num_cm`,`create_time`,`name`,`avatar` FROM `comment` 
                                            INNER JOIN `users` ON `comment`.`member_id` = `users`.`member_id` 
                                            WHERE `title_id`= {$_GET['id']}";

                                        $arr = $pdo->query($sql)->fetchAll();
                                        foreach ($arr as $obj) {
                                    ?>

                                            <!-- ------------------第一則留言 comment------------------ -->
                                            <div class="comment comment-1">
                                                <div class="avatar">
                                                    <div class="img-wrap">
                                                        <img src=".\images\forum_article_page\avatar\<?= $obj['avatar'] ?>.svg">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="member-info">
                                                            <a href="#">
                                                                <span class="member-name sub-title-b"><?= $obj['name'] ?></span>
                                                            </a>
                                                            <i class="far fa-clock"></i><span class="timestamp"><?= $obj['create_time'] ?></span>
                                                        </div>
                                                        <a href="#">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>
                                                    </div>
                                                    <p>
                                                        <?= $obj['comment_content'] ?>
                                                    </p>
                                                    <div class="response d-flex justify-content-end">
                                                        <div class="d-flex align-items-end">
                                                            <!-- 01/12 更改 會員按攢紀錄資料提取  -->
                                                            <?php
                                                            if (isset($_SESSION['member_id'])) {
                                                                $like = "SELECT `like` FROM `user_like`  WHERE `title_id`={$_GET['id']} AND `comment_id`={$obj['comment_id']} AND `member_id`={$_SESSION['member_id']}";
                                                                $a = $pdo->query($like)->fetch();
                                                            }
                                                            ?>
                                                            <a class="thumb-<?= $a['like'] ?>" href="<?= $obj['comment_id'] ?>"><i class="fas fa-thumbs-up"></i></a><span class="like-count"><?= $obj['like_num_cm'] ?></span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#"><span>回覆</span></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>

                                <!-- 這裡 -->
                                <!-- 0110 更改 增加時間篩選欄位 -->
                                <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="home-tab">

                                    <!-- 01/12 更改 留言資料提取  -->
                                    <?php
                                    if (isset($_GET['id'])) {
                                        $sql =
                                            "SELECT `comment_id`,`comment_content`,`like_num_cm`,`create_time`,`name`,`avatar` FROM `comment` INNER JOIN `users` ON `comment`.`member_id` = `users`.`member_id` WHERE `title_id`= {$_GET['id']} ORDER BY `like_num_cm` DESC ";

                                        $arr = $pdo->query($sql)->fetchAll();
                                        foreach ($arr as $obj) {
                                    ?>

                                            <?php
                                            if (isset($_GET['id'])) {
                                                $sql = "SELECT COUNT(*) FROM `comment` WHERE `title_id`={$_GET['id']}";
                                                $total = $pdo->query($sql)->fetch();
                                            }
                                            ?>

                                            <!-- ------------------第一則留言 comment------------------ -->
                                            <div class="comment comment-1">
                                                <div class="avatar">
                                                    <div class="img-wrap">
                                                        <img src=".\images\forum_article_page\avatar\<?= $obj['avatar'] ?>.svg">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="member-info">
                                                            <a href="#">
                                                                <span class="member-name sub-title-b"><?= $obj['name'] ?></span>
                                                            </a>
                                                            <i class="far fa-clock"></i><span class="timestamp"><?= $obj['create_time'] ?></span>
                                                        </div>
                                                        <a href="#">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>
                                                    </div>

                                                    <p>
                                                        <?= $obj['comment_content'] ?>
                                                    </p>

                                                    <div class="response d-flex justify-content-end">
                                                        <div class="d-flex align-items-end">
                                                            <!-- 01/12 更改 會員按攢紀錄資料提取  -->
                                                            <?php
                                                            if (isset($_SESSION['member_id'])) {
                                                                $like = "SELECT `like` FROM `user_like`  WHERE `title_id`={$_GET['id']} AND `comment_id`={$obj['comment_id']} AND `member_id`={$_SESSION['member_id']}";
                                                                $a = $pdo->query($like)->fetch();
                                                            }
                                                            ?>
                                                            <a class="thumb-<?= $a['like'] ?>" href="<?= $obj['comment_id'] ?>"><i class="fas fa-thumbs-up"></i></a><span class="like-count"><?= $obj['like_num_cm'] ?></span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#"><span>回覆</span></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                            <!-- 01/12 更改 留言欄會員資料提取  -->
                            <?php
                            if (isset($_SESSION['email'])) {
                                $sql = "SELECT `avatar`,`member_id` FROM `users`  WHERE `email`='{$_SESSION['email']}' ";
                                $arr = $pdo->query($sql)->fetchAll();
                                foreach ($arr as $obj) {
                            ?>
                                    <div class="write-comment">
                                        <div class="avatar">
                                            <div class="img-wrap">
                                                <img class="user_identify" id="<?= $obj['member_id'] ?>" src=".\images\forum_article_page\avatar\<?= $obj['avatar'] ?>.svg">
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
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>


                    <div class="aside-section col-xl-3">

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

    <!-- forum-comment -->
    <script src="./js/forum-comment.js"></script>
    <!-- thumbsup -->
    <script src="./js/thumbsup.js"></script>

</body>

</html>