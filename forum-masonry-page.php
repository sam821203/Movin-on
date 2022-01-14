<?php require_once './tpl/head.php' ?>
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>

<style>
    <?php require_once './css/forum-masonry-page.css' ?>
</style>

<?php if (isset($_GET['movie_id'])) { ?>

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
                        <span class="body1-m type g-tag news" data-cat='1'>新聞</span>
                    </a>
                    <a href="" class="d-flex">
                        <span class="body1-m type g-tag askfilm" data-cat='2'>問片</span>
                    </a>
                    <a href="" class="d-flex">
                        <span class="body1-m type g-tag filmlist" data-cat='3'>片單</span>
                    </a>
                    <a href="" class="d-flex">
                        <span class="body1-m type g-tag discuss" data-cat='4'>討論</span>
                    </a>
                    <a href="" class="d-flex">
                        <span class="body1-m type g-tag askfor" data-cat='5'>請益</span>
                    </a>
                    <a href="" class="d-flex">
                        <span class="body1-m type g-tag selfilm" data-cat='6'>選片</span>
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
                        <?php $sql = "SELECT `article_cat_id`,`article_cat`,`movie_id`,`title`, `article`, `article_photo`, `spoiler_tag` FROM `spider_forum_article` WHERE `movie_id` = '{$_GET['movie_id']}'";
                        $arr = $pdo->query($sql)->fetchAll();
                        foreach ($arr as $obj) {
                        ?>
                            <div class="masonry-item masonry-item<?= $obj['article_cat_id'] ?>" data-cat="<?= $obj['article_cat_id'] ?>">
                                <div class="masonry-content">
                                    <div class="article-tag">
                                        <p class="article-cat body1-m"><?= $obj['article_cat'] ?></p>
                                        <p class="spoiler-free-tag"><?= $obj['spoiler_tag'] ?></p>
                                    </div>

                                    <div>
                                        <div class="img-wrap">
                                            <div class="img-gradient-15"></div>
                                            <div class="img-filter-15"></div>
                                            <img src="images/forum_masonry_page/<?= $obj['article_photo']?>.jpg" alt="">
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
                                            <?= nl2br($obj['article']) ?>
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
        <script>
            $(document).ready(function() {
                let sTag = $('.spoiler-free-tag');
                // console.log(sTagText);
                let spoiler = '雷'

                sTag.each((i, v) => {
                    if ($(v).text() == spoiler) {
                        sTag.eq(i).addClass('spoiler-tag');
                    };
                });
            });

            let msItem = $('.masonry-item');
            let msItem1 = $('.masonry-item1');
            let msItem2 = $('.masonry-item2');
            let msItem3 = $('.masonry-item3');
            let msItem4 = $('.masonry-item4');
            let msItem5 = $('.masonry-item5');
            let msItem6 = $('.masonry-item6');
            $('.news').click(function(e) {
                e.preventDefault();
                msItem.each((i, v) => {
                    if ($('.news').attr('data-cat') != $(v).attr('data-cat')) {
                        msItem1.show();
                        msItem2.hide();
                        msItem3.hide();
                        msItem4.hide();
                        msItem5.hide();
                        msItem6.hide();
                    };
                });
            });

            $('.askfilm').click(function(e) {
                e.preventDefault();
                msItem.each((i, v) => {
                    if ($('.askfilm').attr('data-cat') != $(v).attr('data-cat')) {
                        msItem1.hide();
                        msItem2.show();
                        msItem3.hide();
                        msItem4.hide();
                        msItem5.hide();
                        msItem6.hide();
                    };
                });
            });

            $('.filmlist').click(function(e) {
                e.preventDefault();
                msItem.each((i, v) => {
                    if ($('.filmlist').attr('data-cat') != $(v).attr('data-cat')) {
                        msItem2.hide();
                        msItem1.hide();
                        msItem3.show();
                        msItem4.hide();
                        msItem5.hide();
                        msItem6.hide();
                    };
                });
            });

            $('.discuss').click(function(e) {
                e.preventDefault();
                msItem.each((i, v) => {
                    if ($('.discuss').attr('data-cat') != $(v).attr('data-cat')) {
                        msItem2.hide();
                        msItem3.hide();
                        msItem1.hide();
                        msItem4.show();
                        msItem5.hide();
                        msItem6.hide();
                    };
                });
            });

            $('.askfor').click(function(e) {
                e.preventDefault();
                msItem.each((i, v) => {
                    if ($('.askfor').attr('data-cat') != $(v).attr('data-cat')) {
                        msItem2.hide();
                        msItem3.hide();
                        msItem4.hide();
                        msItem1.hide();
                        msItem5.show();
                        msItem6.hide();
                    };
                });
            });

            $('.selfilm').click(function(e) {
                e.preventDefault();
                msItem.each((i, v) => {
                    if ($('.selfilm').attr('data-cat') != $(v).attr('data-cat')) {
                        msItem2.hide();
                        msItem3.hide();
                        msItem4.hide();
                        msItem5.hide();
                        msItem1.hide();
                        msItem6.show();
                    };
                });
            });
        </script>
        <script src="js/forum-masonry-page.js"></script>

    </body>
<?php } ?>

</html>