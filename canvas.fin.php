<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>

<style>

    <?php require_once './tpl/global-style.css' ?>
    <?php require_once './css/bootstrap-switch.css' ?>

    
    /* 背景、彈幕 */
    .head {
        position: absolute;
        width: 100%;
        height: 100px;
        z-index: 5;
        background: rgba(18, 18, 18, 0.5);
        color:white;
        text-align: center;
        line-height: 100px;
    }

    .bg {
        position: relative;
        width: 100%;
        height: 1080px;
        background-image: url("images/main_page/hero-img1.jpg") ;
        background-repeat: no-repeat;
        background-size:cover ;
    }

    canvas {
        pointer-events: none;
        position: absolute;
        width: 100%;
        height:100%;
        top: 0;
        left: 0;
    }

    .hero {
        padding: 0px;
        position: relative;
        display:flex;
        justify-content:center;
    }

    /* 輸入、功能 */
    .inputgroup {
        position: absolute;
        width: 100%;
        bottom: 96px;
        display: flex;   
        justify-content: center;
        align-items: center;
    }
    
    /* 標籤選擇 */

    .tag{
    margin: 8px;
    padding: 0px 10px 3px 10px;
    border-radius:50px ;
    }

    #tag_immortal{
        letter-spacing: 0.05em;
        color:#E4D965;
        background-color:rgb(183,175,101,0.25);
    }

    #tag_sao {
    letter-spacing: 0.05em;
    color:#F53D3D;
    background-color:rgb(141,31,31,0.25) ;
    }

    #tag_trick {
    letter-spacing: 0.05em;
    color:#5E8FF1;
    background-color:rgb(31,71,150,0.25) ;
    }

    #tag_mha{
    letter-spacing: 0.05em;
    color:#5AC392;
    background-color: rgb(71,125,100,0.25); 
    }

    #tag_soho{
    letter-spacing: 0.05em;
    color:#FF6FBD;
    background-color: rgb(255,111,189,0.25);
    }


    /* =================修改上啦式選單的背景圖片================= */
    #dropdownMenuButton {
        text-decoration: none;
        background: rgb(255, 255, 255, 0.1);
        color: rgb(255, 255, 255);
        padding: 8px 24px;
        border-radius: var(--border-radius-50);
        margin-right: 16px;
    }
    
    .tag-menu {
        text-align:center ;
        background: rgb(255, 255, 255, 0.1);
        padding: 10px;
    }
    
    a {  
        padding-bottom: 5px;
        line-height: 30px;
        color:white;
        /* border-bottom: 1px solid #deedee; */
    }

    .middle-bg {
        background-color: rgba(18,18,18,0.9);
        border-radius: var(--border-radius-50);
        display: flex;
        padding: 12px 40px 12px 48px;
        margin: 0 24px;
    }

    /* 訊息欄 */
    /* ==========修改 padding========== */
    .inputbar{
        width: 327px;
        height: 39px;
        color: white;
        outline: none;
        padding: 8px 24px;
        background: rgba(255,255,255,0.1);
        border: none;
        box-shadow: 0px 0px 24px #000000;
        border-radius: 50px;
        margin-right: 16px;
    }

    .inputgroup > button{
        border: none;
        cursor: pointer;
        color:white;
        height: 30px;
        width: 64px;
        margin-right: 10px;
        border-radius: 50px;
        background-color: rgb(0, 0, 0);
    }

    .inputgroup > button:hover{
        background-color: #F53D3D;
        box-shadow: 0px 0px 24px 4px rgba(245, 61, 61, 0.5);
        outline: none;
    } 

    .send {
        margin-right: 8px;
        background-color: #F53D3D;
        border-radius: 50px;
        color: white;
        font-weight: 700;
        padding: 0 24px;
    }

    .clear {
        margin-right: 32px;
        border-radius: 50px;
        color: white;
        background-color: transparent;
        border: 1px solid white;
        padding: 0 24px;
    }

    /* 修改 placeholder 的字體顏色 */
    ::-webkit-input-placeholder { /* Edge */
    color: rgba(255,255,255,0.25)
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: rgba(255,255,255,0.25)
    }

    ::placeholder {
    color: rgba(255,255,255,0.25)
    }

    /* 背景更換 */
    .colorDiv{
        display: flex;
    }

    .inputgroup .colorDiv img{
        width: 80px;
        height: 40px;
    }

    .colorDiv .dropdown-menu{
        right: 0;
        left: auto;
        padding: 5px;
        width: 190px;
        color: rgba(255, 255, 255, 0.5);
        background: rgba(0, 0, 0, 0.5);
    }

    .colorDiv .dropdown-menu li {
        display: inline-block;
    }

    .colorDiv .dropdown-menu li p{
        line-height: 35px;
        margin:0px 5px;
    }

    .colorDiv .dropdown-menu li a{
        padding: 3px !important;
    }

    .colorDiv .dropdown-menu li a image{
        width: 34px;
        height: 34px;
    }

    .preview {
        width: 34px;
        height: 34px;
        border-radius: 17px;
        background-size: cover;
        background-position:center center;
        background-repeat: no-repeat;  
        background-image: url(./images/main_page/hero-img1.jpg);
    }

    #colorDropdownMenu{
        border-style: none;
    }

</style>

<body>

    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>

    <main>
        <div class="hero container-fluid">
            <!-- ---------------background-img--------------- -->
            <div class="bg"></div>

            <!-- ---------------canvas--------------- -->
            <canvas class="dm"></canvas>
            
            <!-- ---------------inputgroup--------------- -->
            <div class="inputgroup row">
    
                <!-- 彈幕開關 -->
                <input type="checkbox" name="my-checkbox" checked>
                
                <div class="middle-bg">
                    <!-- 標籤選單 -->
                    <div class="dropup col-xs-2 col-xs-offset-1">
                        <!-- ==========修改 style="border: none;========== -->
                        <button class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: none;">
                        電影標籤
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu tag-menu" aria-labelledby="dropdownMenu">
                            <li><a id=tag_immortal class=tag  href="#">永恆族</a></li>
                            <li><a id=tag_sao class=tag href="#">刀劍神域</a></li>
                            <li><a id=tag_trick class=tag  href="#">詭扯</a></li>
                            <li><a id=tag_mha class=tag href="#">我的英雄學院</a></li>
                            <li><a id=tag_soho class=tag  href="#">逃離夜蘇活</a></li>
                        </ul>
                    </div>
                    
                    <!-- 留言訊息欄 -->
                    <div >
                        <input 
                        class="inputbar " 
                        name=txt 
                        type="text" 
                        value="" 
                        maxlength="20"  
                        placeholder="選擇電影標籤後才能發言喔 !">
                    </div>
                    <button class="btn send" disabled >送出</button>
                    <button class="btn clear">清除</button>
                </div>

                <!-- 背景設定 -->
                <div class="colorDiv dropup">
                    <a id="colorDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                       href="javascript:;">
                        <div class=preview></div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="colorDropdownMenu">
                        <li><a class="canvas-preview" href="#"><img src="images/main_page/hero-img1.jpg"></a></li>
                        <li><a class="canvas-preview" href="#"><img src="images/main_page/eternals-bg-img-min.jpg"></a></li>
                        
                        <li>
                            <p>點擊更換背景圖</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

    <!-- canvbootstrap switchas js -->
    <script src='https://files.lovelong.cn/common/ui/bootstrap/bootstrap-switch/js/bootstrap-switch.min.js'></script>

    
    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>

    <!-- canvas js -->
    <script src="./js/canvas.fin.js"></script>
    
    <!-- bootstrap switch js -->
    <script src='https://files.lovelong.cn/common/ui/bootstrap/bootstrap-switch/js/bootstrap-switch.min.js'></script>
</body>

</html>