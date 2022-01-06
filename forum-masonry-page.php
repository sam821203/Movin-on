<?php require_once 'db.inc.php' ?>
<!doctype html>
<html>
<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>


<!-- <link rel="stylesheet" href="css/forum-masonry-page.css"> -->
<!-- <link rel="stylesheet" href="/fontawesome-free-5.15.4-web/css/all.css"> -->

<style>
    /* global style css */
    <?php require_once './tpl/global-style.css' ?>
    /* forum masonry page css */
    <?php require_once './css/forum-masonry-page.css' ?>
</style>

<body>
    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <section class="masonry-articles-section">
        <div class="subtitle">
            <div class="col-6">
                <div class="movie-type-wrap">
                    <span class="body1-m type">新聞</span>
                    <span class="body1-m type">問片</span>
                    <span class="body1-m type">片單</span>
                    <span class="body1-m type">討論</span>
                    <span class="body1-m type">請益</span>
                    <span class="body1-m type">選片</span>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-end">
                <a href="./forum-masonry-page.php">
                    <div class="d-flex justify-content-end align-items-end">
                        <div class="sub-title-r">前往討論區</div>
                        <div class="ml-2"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </a>
            </div>
        </div>

        <div>
            <div class="masonry-wrapper">
                <div class="masonry">
                    <?php $sql = "SELECT `title`, `article`, `article_photo`, `spoiler_tag` FROM `spider_forum_article`";
                    $arr = $pdo->query($sql)->fetchAll();
                    foreach ($arr as $obj) {
                    ?>
                        <div class="masonry-item">
                            <div class="masonry-content">
                                <div class="article-tag">
                                    <p class="article-cat mr-2">分類</p>
                                    <p class="spoiler-tag"><?= $obj['spoiler_tag'] ?></p>
                                </div>
                                <img src="<?= $obj['article_photo'] ?>" alt="Dummy Image" class="atcphoto">
                                <div class="article-avatar">
                                    <div class="avatar">
                                        <img src="https://images.pexels.com/photos/762020/pexels-photo-762020.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                    </div>
                                </div>week1_eternals

                                <div class="masonry-content-text">
                                    <div>2021-12-20</span>by<span>aaa</span></div>
                                    <h3 class="masonry-title sub-title-b"><?= $obj['title'] ?></h3>
                                    <p class="masonry-description">
                                        <?= mb_substr($obj['article'],0,40) ?>...
                                    </p>
                                </div>
                                <div class="article-like">
                                    <div class="like-btn">
                                        <i class="fas fa-thumbs-up"></i>
                                        <p>20</p>
                                    </div>
                                    <div class="comment">
                                        <i class="far fa-comment"></i>
                                        <p>10</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>


    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>

    <script src="//unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <!-- <script src="https://kit.fontawesome.com/1392152695.js" crossorigin="anonymous"></script> -->
    <script src="js/forum-masonry-page.js"></script>
</body>

</html>