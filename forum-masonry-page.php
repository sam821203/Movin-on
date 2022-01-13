<?php require_once './tpl/head.php' ?>
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>

<style>
    <?php require_once './css/forum-masonry-page.css' ?>
</style>

<body>
    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <div class="masonry-title-section">
        <div class="text-center">
            <div class="title-tc">蜘蛛人：無家日</div>
            <div class="title-en">Spider-man: no way home</div>
        </div>
    </div>

    <section class="masonry-articles-section">
        <div>
            <div class="cat-tag-selector"><i class="fas fa-grip-vertical"></i>依類別分類</div>

            <div class="movie-type-wrap d-flex flex-wrap">
                <a href="" class="d-flex">
                    <span class="body1-m type g-tag">新聞</span>
                </a>
                <a href="" class="d-flex">
                    <span class="body1-m type g-tag">問片</span>
                </a>
                <a href="" class="d-flex">
                    <span class="body1-m type g-tag">片單</span>
                </a>
                <a href="" class="d-flex">
                    <span class="body1-m type g-tag">討論</span>
                </a>
                <a href="" class="d-flex">
                    <span class="body1-m type g-tag">請益</span>
                </a>
                <a href="" class="d-flex">
                    <span class="body1-m type g-tag">選片</span>
                </a>
            </div>
        </div>

        <a href="./forum-masonry-page.php">
            <div class="filter d-flex justify-content-end align-items-end">
                <!-- <div class="sub-title-r">熱門文章</div>
                <div class="ml-2"><i class="fas fa-chevron-right"></i></div> -->
                <i class="fas fa-sort-amount-down"></i>
            </div>
        </a>

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
                                    <p class="article-cat body1-m">分類</p>
                                    <p class="spoiler-tag"><?= $obj['spoiler_tag'] ?></p>
                                </div>

                                <div>
                                    <div class="img-wrap">
                                        <div class="img-gradient-15"></div>
                                        <div class="img-filter-15"></div>
                                        <img src="<?= $obj['article_photo'] ?>" alt="Dummy Image">
                                    </div>
                                </div>
                                
                                <div class="article-avatar">
                                    <div class="avatar">
                                        <img src="https://images.pexels.com/photos/762020/pexels-photo-762020.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                    </div>
                                </div>

                                <div class="masonry-content-text">
                                    <div>2021-12-20</span>by<span>aaa</span></div>
                                    <h3 class="masonry-title sub-title-b"><?= $obj['title'] ?></h3>
                                    <p class="masonry-description">
                                        <?= $obj['article'] ?>
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
                                <div class="overflow-gradient"></div>
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