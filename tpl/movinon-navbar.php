<nav>
    <div class="movinon-navbar">
        <div class="d-flex justify-content-between align-items-center w-100">
            <a class="d-none d-sm-none d-md-flex align-items-center" href="./main-page.php">
                <div class="movinon-logotype-wrap">
                    <img src="./images/logotype.svg" alt="">
                </div>
            </a>
            
            <!-- display 小於 768px -->
            <a class="d-flex d-sm-flex d-md-none align-items-center" href="./main-page.php">
                <div class="movinon-logo-wrap">
                    <img src="./images/logo.svg" alt="">
                </div>
            </a>

            <div class="options d-flex justify-content-between">
                <ul class="d-flex justify-content-between">
                    <li class="options-spacing">
                        
                        <a href="#" aria-haspopup="true">電影排行榜<i class="fas fa-chevron-down body1-r"></i></a>

                        <ul class="dropdown" aria-label="submenu">
                            <li><a class="hover-items" href="./movies-overview-page.php">現正熱映</a></li>
                            <li><a class="hover-items" href="#">即將上映</a></li>
                            <li><a class="hover-items" href="#">本週新片</a></li>
                        </ul>
                    </li>

                    <li class="options-spacing"><a href="./forum-overview-page.php">影迷討論區</a></li>
                    <li class="options-spacing"><a href="#">電影新聞</a></li>
                    <li class="options-spacing"><a href=./booking-movie-page.php>立即購票</a></li>

                    <!-- <li class="options-spacing">
                        <div class="options-outline d-flex">
                            <div class="img-wrap">
                                <img src="images/ticket_icon.svg" alt="">
                            </div>
                            <a href="#">立即購票</a>
                        </div>
                    </li> -->
                </ul>
            </div>

            <div class="navbar-icons d-flex justify-content-end my-auto">
                <a class="d-flex justify-content-center" href="#">
                    <div class="img-wrap1 d-flex align-items-center">
                        <img src="images/icon_help.svg" alt="">
                    </div>
                </a>

                <!-- 登入視窗連結 -->
                <div class="img-wrap2 d-flex align-items-center dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false"><img src="images/icon_account.svg" alt=""></a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                    <?php if ( !isset($_SESSION['name'])) { ?>

                        <a class="text-white mb-3" href="#" data-toggle="modal" data-target="#exampleModalLogin">
                            <div class="body1-m mb-3">登入</div>
                        </a>
                        <div class="divide-line"></div>
                        <a class="text-white" type="button" href="#" data-toggle="modal" data-target="#exampleModal">
                            <div class="body1-m mt-3">註冊</div>    
                        </a>
                        <?php } ?>

                        <!-- <div class="divide-line"></div> -->
                        <?php if (isset($_SESSION['name'])) { ?>
                            <a href="">會員中心</a>
                            <a type="button" class="btn btn-outline-light" href="#" id="logout">登出</a>
                        <?php } ?>

                    </div>
                </div>
            </div>
            
            <div class="d-block d-lg-block d-xl-none menu-bar">
                <div class="lines">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>

                <div class="menu-items">
                    <a class="btn border-light rounded text-white mb-3" href="#" data-toggle="modal" data-target="#exampleModalLogin">登入</a>
                    <a type="button" class="btn border-light rounded text-white mb-4" href="#" data-toggle="modal" data-target="#exampleModal">註冊</a>

                    <a href="./movies-overview-page.php">
                        <div class="item mb-2">電影排行榜</div>
                    </a>
                    <a href="./forum-overview-page.php">
                        <div class="item mb-2">影迷討論區</div>
                    </a>
                    <a href="#">
                        <div class="item mb-2">電影新聞</div>
                    </a>
                    <a href="./booking-movie-page.php">
                        <div class="item mb-2">立即購票</div>
                    </a>
                </div>
            </div>

            

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">註冊帳號</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" id="myForm">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">信箱</label>
                                    <input type="email" class="form-control" id="email" placeholder="請填寫 E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">密碼</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="請輸入密碼">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">姓名</label>
                                    <input type="text" class="form-control" id="name" placeholder="請輸入姓名">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">生日</label>
                                    <input type="text" class="form-control" id="birthdate" placeholder="請填寫生日">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">地址</label>
                                    <input type="text" class="form-control" id="address" placeholder="請填寫地址">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn" id="btn_register">註冊</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 登入視窗 -->
            <div class="modal fade" id="exampleModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">登入</h5><span class="Login">Login</span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" id="myForm_login">
                                <div class="col-md-12">
                                    <label for="email_login" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email_login" placeholder="請填寫 E-mail">
                                </div>
                                <div class="col-md-12">
                                    <label for="pwd_login" class="form-label">密碼</label>
                                    <input type="password" class="form-control" id="pwd_login" placeholder="請輸入密碼">
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn" id="btn_login">登入</button>
                                </div>
                                <div class="col-6"><a href="">忘記密碼？</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <!-- <div class="text-end">
                <a class="btn btn-outline-light me-2" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalLogin">Login</a>
                <a type="button" class="btn btn-warning" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign-up</a>
            </div> -->
        </div>
    </div>
</nav>