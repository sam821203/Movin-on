<!-- 這裡需要 require "./db.inc.php" -->
<?php require_once './tpl/head.php' ?>

<style>

    body {
        background: url("images/detail_page/bg_img/bg_img_gradient_1200.jpg") top center no-repeat;
        background-size: contain;
        background-color: var(--bg-color);
    }

    .related-articles-section .fa-chevron-right {
        opacity: var(--opacity-90);
        font-size: 16px;
    }

    /* -----------------movie detail section----------------- */
    .movie-detail-section { margin-top: 160px; }

    .movie-detail-section .social-media {
        margin-bottom: 32px;
    }

    .movie-detail-section .social-media i {
        font-size: 2.125rem;
        opacity: var(--opacity-90);
    }

    .movie-detail-section .social-media svg {
        font-size: 2.125rem;
        opacity: var(--opacity-75);
    }

    .movie-detail-section
    .movie-poster
    .img-wrap {
        width: 100%;
        border-radius: var(--border-radius-4);
    }

    .movie-detail-section
    .movie-poster
    .img-wrap 
    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        border-radius: var(--border-radius-4);
        box-shadow: var(--box-shadow-black);
    }
    
    .movie-detail-section .content { padding-left: 32px; }
    .movie-detail-section .content span {  display: inline-block; }

    .movie-detail-section .pg-rate {
        border: 1px solid var(--age12);
        border-radius: var(--border-radius-50);
        padding: 4px 12px;
        margin-bottom: 8px;
    }

    .movie-detail-section .rating {
        margin-bottom: 32px;
    }

    .movie-detail-section .rating i {
        font-size: 0.875rem;
    }

    .movie-detail-section .title-tc { 
        margin-bottom: 4px; 
        font-size: 48px;
        font-weight: 700;
    }

    .movie-detail-section .title-en { 
        margin-bottom: 16px;
        opacity: var(--opacity-50); 
        font-style: italic;
        font-size: 20px;
    }

    .movie-detail-section .reputation { 
        margin-bottom: 32px;
        display: flex;
        align-items: center;
    }

    .movie-detail-section .reputation .img-wrap1 {
        width: 24px;
        margin-right: 8px;
    }

    .movie-detail-section .reputation .img-wrap2 {
        width: 48px;
        margin-right: 8px;
        margin-top: 4px;
    }
    
    .movie-detail-section .reputation .img-wrap1 img,
    .movie-detail-section .reputation .img-wrap2 img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center center;
    }

    .movie-detail-section .content .sub-title-r { 
        margin-bottom: 8px; 
        opacity: var(--opacity-90);
        font-size: 20px;
    }

    .movie-detail-section .content p { 
        font-size: 20px;
    }

    .movie-detail-section .content .release-date,
    .movie-detail-section .content .movie-length,
    .movie-detail-section .content .movie-director {  
        opacity: var(--opacity-90); 
    }

    .movie-detail-section .content .date-data,
    .movie-detail-section .content .length-data,
    .movie-detail-section .content .director-data {  
        opacity: var(--opacity-75); 
    }

    .movie-detail-section .cat-tags {
        margin-bottom: 56px;
        width: 100%;
        display: flex;
    }

    .movie-detail-section .cat-tags .cat-tag {
        border: 1px solid rgba(255,255,255,0.75);
        border-radius: var(--border-radius-50);
        margin-right: 12px;
        margin-bottom: 32px;
    }

    /* .movie-detail-section .cat-tags .cat-tag {
        font-size: 20px;
        background-color: var(--card-color);
        border: none;
        border-radius: var(--border-radius-50);
        padding: 4px 20px 6px 20px;
        box-shadow: var(--box-shadow-card-sm);
        margin-right: 12px;
        opacity: var(--opacity-75);
    } */

    .movie-detail-section .description-title {
        margin-bottom: 32px;
    }

    .movie-detail-section .description {
        padding-top: 20px;
        border-top: 1px solid rgba(255,255,255,0.75);
        margin-bottom: 64px;
        font-size: 20px;
        opacity: var(--opacity-90);
    }

    .movie-detail-section .description p {
        overflow: auto;
        height: 152px;
    }

    .movie-detail-section .booking-trailer {
        display: flex;
    }

    .movie-detail-section .booking-trailer .img-wrap img {
        object-fit: cover;
        object-position: center center;
    }

    /* -----------------related articles section----------------- */
    .related-articles-section .arti-cat-tag {
        padding: 3px 20px 4px 20px;
        border: 1px solid rgba(255,255,255,0.5);
        border-radius: var(--border-radius-50);
        background-color: var(--bg-color);
        margin-right: 16px;
    }

    .related-articles-section .articles-1920 {
        width: 100%;
        margin: 0px;
    }

    .related-articles-section .articles-1920 .article-light,
    .related-articles-section .articles-1920 .article-dark {
        color: rgba(255,255,255,0.9);
    }

    /* .related-articles-section .articles-1920 .article-light .sub-title-r,
    .related-articles-section .articles-1920 .article-dark .sub-title-r {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    } */

    .related-articles-section .articles-1920 .article-light {
        padding: 16px 32px;
        margin-bottom: 24px;
        background-color: rgba(255,255,255,0.08);
        border-radius: var(--border-radius-8);
        box-shadow: var(--box-shadow-card-sm);
    }

    .related-articles-section .articles-1920 .article-dark {
        padding: 16px 32px;
        margin-bottom: 24px;
        background-color: rgba(255,255,255,0.02);
        border-radius: var(--border-radius-8);
        box-shadow: var(--box-shadow-card-sm);
    }

    .related-articles-section .time-stamp {
        opacity: var(--opacity-50);
    }

    .related-articles-section .articles-xl ul,
    .related-articles-section .articles-md ul {
        width: 100%;
    } 

    /* -----------------actors list section----------------- */
    .actors-list-section {
        width: 100%;
    }
    
    .actors-list-section .subtitle .sub-title-r {
        opacity: var(--opacity-75);
    }

    .actors-list-section .container-fluid {
        overflow: hidden;
    }

    /* carousel */
    .actors-list-section .wrap {
        max-width: 1920px;
        height: 640px;
        display: flex;
        align-items: center;
        overflow: hidden;
        position: relative;
    }

    .actors-list-section .next-btn,
    .actors-list-section .prev-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 3999;
        color: white;
        text-align: center;
        font-size: 24px;
        height: 100%;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .actors-list-section .next-btn {
        right: 0px;
        justify-content: flex-end;
        padding-left: 240px;
        padding-right: 40px;
        background-image: linear-gradient(to right, rgba(18, 18, 18, 0), rgba(18, 18, 18, 1));
    }

    .actors-list-section .prev-btn {
        left: 0px;
        padding-left: 40px;
        padding-right: 240px;
        background-image: linear-gradient(to right, rgba(18, 18, 18, 1), rgba(18, 18, 18, 0));
    }

    .actors-list-section .next-btn .img-wrap,
    .actors-list-section .prev-btn .img-wrap {
        width: 48px;
        height: 36px;
    }

    .actors-list-section .next-btn .img-wrap img,
    .actors-list-section .prev-btn .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        opacity: var(--opacity-90);
    }

    .actors-list-section .carousel-wrap {
        width: 2660px;
        display: flex;
        justify-content: space-between;
        transform: translateX(-266px);
        transition: .4s;
    }

    .actors-list-section .carousel-wrap span {
        display: block;
    }

    .actors-list-section .img-wrap {
        display: flex;
        width: 234px;
        height: 546px;
        overflow: hidden;
        position: relative;
        border-radius: var(--border-radius-4); 
        margin-bottom: 32px;
        margin: 0 16px;
    }

    .actors-list-section .img-wrap img {
        display: flex;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        -webkit-transition: all 0.6s;
        transition: all 0.6s;
        border-radius: var(--border-radius-4); 
    }
    
    .actors-list-section li {
        position: relative;
    }

    .actors-list-section .actor-name-tc1, 
    .actors-list-section .actor-name-en1,
    .actors-list-section .actor-name-tc2, 
    .actors-list-section .actor-name-en2,
    .actors-list-section .actor-name-tc3, 
    .actors-list-section .actor-name-en3,
    .actors-list-section .actor-name-tc4, 
    .actors-list-section .actor-name-en4,
    .actors-list-section .actor-name-tc5, 
    .actors-list-section .actor-name-en5,
    .actors-list-section .actor-name-tc6, 
    .actors-list-section .actor-name-en6,
    .actors-list-section .actor-name-tc7, 
    .actors-list-section .actor-name-en7,
    .actors-list-section .actor-name-tc8, 
    .actors-list-section .actor-name-en8 {
        text-decoration: none;
        -webkit-transition: all 1s;
        transform: translateY(40%);
        transition: all 1s;
        opacity: 0.2;
    }

    .actors-list-section .image-hover {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .actors-list-section li:hover img {
        -ms-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    .actors-list-section li:hover .image-hover {
        opacity: 1;
    }

    .actors-list-section li:hover .actor-name-tc1, 
    .actors-list-section li:hover .actor-name-en1,
    .actors-list-section li:hover .actor-name-tc2, 
    .actors-list-section li:hover .actor-name-en2,
    .actors-list-section li:hover .actor-name-tc3, 
    .actors-list-section li:hover .actor-name-en3,
    .actors-list-section li:hover .actor-name-tc4, 
    .actors-list-section li:hover .actor-name-en4,
    .actors-list-section li:hover .actor-name-tc5, 
    .actors-list-section li:hover .actor-name-en5,
    .actors-list-section li:hover .actor-name-tc6, 
    .actors-list-section li:hover .actor-name-en6,
    .actors-list-section li:hover .actor-name-tc7, 
    .actors-list-section li:hover .actor-name-en7,
    .actors-list-section li:hover .actor-name-tc8, 
    .actors-list-section li:hover .actor-name-en8 {
        top: 40px;
        transform: translateY(60%);
        opacity: 1;
    }

    /* -----------------movie stills section----------------- */
    .movie-stills-section {
        margin-bottom: 144px;
    }

    .movie-stills-section .movie-stills {
        margin: 96px 0 72px 0;
    }

    .movie-stills-section .imgs-demo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        border-radius: var(--border-radius-4); 
    }

    .movie-stills-section .hall-screen {
        position: relative;
        margin: 0 auto;
        height: 304px;
        width: 872px;
        background-image: url(images/detail_page/movie-stills/large-img.jpg);
        /* transform: perspective(1000px) rotateX(-30deg); */
        overflow: hidden;
        /* border-radius: var(--border-radius-4); */
        /* border-top-left-radius: 320% 120px;
        border-top-right-radius: 320% 120px; */
        box-shadow: 0 40px 55px -17px rgb(255 255 255 / 20%);
    }

    .movie-stills-section .hall-screen img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }

    .movie-stills-carousel {
        position: relative;
        overflow: hidden;
    }

    .movie-stills-carousel .img-wrap {
        width: 196px;
        height: 88px;
        margin-left: 16px;
        margin-right: 16px;
    }

    .movie-stills-carousel .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        border-radius: var(--border-radius-4); 
    }
    
    .movie-stills-carousel .carousel-wrap {
        width: 1114px;
        display: flex;
        justify-content: space-between;
        transform: translateX(0px);
        transition: .4s;
    }

    .movie-stills-carousel .carousel-wrap .img-wrap {
        width: 200px;
        height: 70px;
        margin-left: 16px;
        margin-right: 16px;
        display: flex;
        justify-content: space-between;
        transform: translateX(0px);
        transition: .4s;
        margin-top: 28px;
    }

    .movie-stills-carousel .carousel-wrap .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 50% 50%;
        border-radius: var(--border-radius-4); 
        filter: grayscale(1);
    }

    .movie-stills-section .movie {
        aspect-ratio: 16 / 9;
        background: var(--bg-color);
        background-image: linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)),
            linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)), linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)),
            linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)), linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)),
            linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)), linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)),
            linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)), linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)),
            linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)), linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)),
            linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)), linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)),
            linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)), linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)),
            linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)), linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1)),
            linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.1));

        background-repeat: no-repeat;
        background-position: 
            8% 5%, 18.5% 5%, 29% 5%, 39.5% 5%, 50% 5%, 60.5% 5%, 71% 5%, 81.5% 5%, 92% 5%,
            8% 92%, 18.5% 92%, 29% 92%, 39.5% 92%, 50% 92%, 60.5% 92%, 71% 92%, 81.5% 92%, 92% 92%; 

        background-size: 
            6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%,
            6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%, 6% 8%;
    }

    .movie-stills-section .movie-frame {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .movie-stills-section .movie-frame img {
        max-width: 100%;
        border-radius: 2px;
    }

    .movie-stills-section .next-btn,
    .movie-stills-section .prev-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 3999;
        color: white;
        text-align: center;
        font-size: 24px;
        height: 100%;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .movie-stills-section .next-btn {
        right: 0px;
        justify-content: flex-end;
        padding-left: 120px;
        padding-right: 40px;
        background-image: linear-gradient(to right, rgba(18, 18, 18, 0), rgba(18, 18, 18, 1), rgba(18, 18, 18, 1));
    }

    .movie-stills-section .prev-btn {
        left: 0px;
        padding-left: 40px;
        padding-right: 120px;
        background-image: linear-gradient(to right, rgba(18, 18, 18, 1), rgba(18, 18, 18, 0));
    }

    .movie-stills-section .next-btn .img-wrap,
    .movie-stills-section .prev-btn .img-wrap {
        width: 48px;
        height: 36px;
    }

    .movie-stills-section .next-btn .img-wrap img,
    .movie-stills-section .prev-btn .img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        opacity: var(--opacity-90);
    }

    
    /* =================================== @media =================================== */
    /* ============================================================================== */

    /* ------------------------  小於 1344px  ------------------------*/
    @media screen and (max-width: 1344px) {

    }

    /* ------------------------  小於 1200px  ------------------------*/
    @media screen and (max-width: 1200px) {

        .related-articles-section .subtitle,
        .actors-list-section .subtitle,
        .movie-stills-section .subtitle {
            padding: 0;
        }

        .movie-detail-section .movie-info { 
            margin-bottom: 32px;
            padding: 0; 
        }

        .movie-detail-section .movie-info .release-date i,
        .movie-detail-section .movie-info .movie-length i,
        .movie-detail-section .movie-info .movie-director i { 
            margin-right: 8px;
        }

        .movie-detail-section .description {
            margin-bottom: 20px;
        }

        .movie-detail-section .description-title {
            margin-bottom: 16px;
        }

        .movie-detail-section .description-title .section-header-b {
            font-size: 1.25rem;
        }

        .movie-detail-section .content { padding-left: 16px; }
        .movie-detail-section .title-tc { font-size: 34px; }
        .movie-detail-section .title-en { font-size: 16px; }

        .movie-detail-section .content { padding-left: 32px; }

        .movie-detail-section .content .date-data,
        .movie-detail-section .content .length-data,
        .movie-detail-section .content .director-data {  
            font-size: 16px;
            margin-right: 12px;
        }

        .movie-detail-section .content .fa-calendar-check,
        .movie-detail-section .content .fa-clock,
        .movie-detail-section .content .fa-video {  
            opacity: var(--opacity-90);
        }

        .movie-detail-section .cat-tags {
            margin-bottom: 0;
        }

        .movie-detail-section .cat-tags .cat-tag {
            font-size: 16px;
            background-color: var(--card-color);
            border: none;
            border-radius: var(--border-radius-50);
            padding: 4px 20px 6px 20px;
            box-shadow: var(--box-shadow-card-sm);
            margin-right: 12px;
            opacity: var(--opacity-75);
        }

        .movie-detail-section .reputation {
            margin-bottom: 0;
        }

        .movie-detail-section .description {
            border-top: none;
            font-size: 16px;
            padding-top: 0;
        }

        .movie-detail-section .description p {
            overflow: auto;
        }

        /* related articles section */
        .articles-xl li:nth-child(even){
            padding: 16px 32px;
            background-color: rgba(255,255,255,0.02);
            border-radius: var(--border-radius-8);
        }

        .articles-xl li:nth-child(odd) {
            padding: 16px 32px;
            background-color: rgba(255,255,255,0.08);
            border-radius: var(--border-radius-8);
        }
    }

    /* ------------------------  小於 992px  ------------------------*/
    @media screen and (max-width: 992px) {

        body {
            background: url("images/detail_page/bg_img/bg_img_gradient_992.jpg") top center no-repeat;
            background-size: contain;
            background-color: var(--bg-color);
        }

        /* section margin bottom */
        .movie-detail-section { margin-top: 288px; }
        .movie-detail-section .cat-tags .cat-tag { margin-top: 32px; }
        
        .movie-detail-section .content { 
            width: 100%;
            padding-left: 16px; 
        }
    
        .movie-detail-section .description-title {
            margin-bottom: 16px;
        }

        .movie-detail-section .description {
            margin-bottom: 40px;
            font-size: 16px;
        }
    }

    /* ------------------------  小於 768px  ------------------------*/
    @media screen and (max-width: 768px) {

        .related-articles-section .subtitle {
            align-items: end;
        }

        .movie-detail-section .movie-poster {
            padding: 0;
        }

        .movie-detail-section .title-tc { 
            margin-bottom: 4px; 
            font-size: 34px;
        }

        .movie-detail-section .title-en { 
            margin-bottom: 16px;
            font-size: 16px;
        }

        .movie-detail-section .rating {
            font-size: 14px;
        }

        .movie-detail-section .content p { 
            margin-bottom: 4px;
            font-size: 16px;
        }

        .movie-detail-section .cat-tags {
            margin-bottom: 32px;
        }

        .movie-detail-section .cat-tags .cat-tag {
            border: 1px solid rgba(255,255,255,0.75);
            border-radius: var(--border-radius-50);
            padding: 6px 20px;
            margin-right: 16px;
            margin-bottom: 32px;
        }

        .articles-md li:nth-child(even){
            width: 100%;
            padding: 16px 0;
            background-color: rgba(255,255,255,0.02);
            border-radius: var(--border-radius-8);
            margin-bottom: 8px;
        }

        .articles-md li:nth-child(odd) {
            width: 100%;
            padding: 16px 0;
            background-color: rgba(255,255,255,0.08);
            border-radius: var(--border-radius-8);
            margin-bottom: 8px;
        }
    }

    /* ------------------------  小於 418px  ------------------------*/
    @media screen and (max-width: 418px) {

        body {
            background: url("images/detail_page/bg_img/gradient.jpg") top center no-repeat;
            background-size: contain;
            background-color: var(--bg-color);
        }

        .movie-detail-section .cat-tags .cat-tag {
            font-size: 16px;
            background-color: var(--card-color);
            border: none;
            border-radius: var(--border-radius-50);
            padding: 4px 20px 6px 20px;
            box-shadow: var(--box-shadow-card-sm);
            margin-right: 12px;
            opacity: var(--opacity-75);
        }

        .movie-detail-section { margin-top: 200px; }

        .movie-detail-section .movie-poster .img-wrap img {
            width: 110px;
            height: 156px;
        }

        .movie-detail-section .pg-rate {
            border: none;
            background-color: var(--age12);
            border-radius: var(--border-radius-50-percent);
            padding: 6px;
            margin-bottom: 0;
            font-size: 12px;
        }

        .movie-detail-section .title-tc {
            line-height: 100%;
        }

        .movie-detail-section .rating {
            margin-bottom: 16px;
        }

        .movie-detail-section .rating i {
            font-size: 0.75rem;
        }

        .movie-detail-section .reputation {
            display: none;
        }

        .movie-detail-section .content p { 
            margin-bottom: 4px;
            font-size: 16px;
        }

        .movie-detail-section .cat-tags {
            margin-bottom: 24px;
        }

        .movie-detail-section .cat-tags .cat-tag {
            padding: 8px 16px;
            margin-top: 16px;
            margin-right: 12px;
            font-size: 14px;
        }

        .movie-detail-section .content p {
            margin-bottom: 2px;
            font-size: 14px;
        }

        .movie-detail-section .title-en {
            margin-bottom: 8px;
        }

        .movie-detail-section .movie-info p i {
            font-size: 14px;
        }

        .movie-detail-section .movie-info p i.fa-clock {
            font-size: 15px;
        }

        .movie-detail-section .movie-info p i.fa-calendar-check {
            font-size: 16px;
        }

        .movie-detail-section .description p {
            overflow: auto;
            height: 72;
            opacity: var(--opacity-90);
        }

        .movie-detail-section .content .date-data,
        .movie-detail-section .content .length-data,
        .movie-detail-section .content .director-data {
            font-size: 14px;
        }

        .movie-detail-section .description {
            margin-bottom: 24px;
        }

        /* 修改 arti- 的 class name */
        .spoiler-tag,
        .spoiler-free-tag,
        .arti-cat-tag { font-size: 14px; }

        .time-stamp { font-size: 12px; }

        .related-articles-section .spoiler-free-tag,
        .related-articles-section .spoiler-tag {
            width: 26px;
            height: 26px;
        }

        .related-articles-section .arti-cat-tag {
            padding: 4px 16px;
        }

        .related-articles-section .articles-md li:nth-child(even),
        .related-articles-section .articles-md li:nth-child(odd) {
            padding: 8px 0;
            border-radius: var(--border-radius-4);
        }

        .related-articles-section .subtitle .sub-title-r {
            display: none;
        }
    }
</style>

<body>
    <!-- movinon-navbar -->
    <?php require_once './tpl/movinon-navbar.php' ?>
		    
    <main>
        <!-- -----------movie detail section----------- -->
        <section class="movie-detail-section g-section-mb">
            <div class="container">

                <!-- social media display > 1200 -->
                <div class="row social-media flex-column d-none d-lg-none d-xl-flex">
                    <div class="d-flex justify-content-end mb-2">
                        <a href="#">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="#">
                            <i class="fab fa-line"></i>
                        </a>
                    </div>
                </div>

                <!-- movie info display > 1200 -->
                <div class="row movie-info d-none d-sm-none d-lg-flex">
                    <div class="col-xl-6 d-flex">
                        <div class="col-sm-3 col-lg-6 movie-poster">
                            <div class="img-wrap">
                                <img src="images/poster_images/MSRbo2ocgQ6N9DdzBUk0-280 x 400.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-sm-9 col-lg-6 content">
                            <div>
                                <span class="pg-rate body2-r">輔導級</span>
                            </div>
                            <div>
                                <span class="title-tc">永恆族</span>
                            </div>
                            <div>
                                <span class="title-en">Eternals</span>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="reputation">
                                <div class="img-wrap1">
                                    <img src="./images/icon_Rotten_Tomatoes.svg" alt="">
                                </div>
                                <span class="mr-3">53%</span>
                                <div class="img-wrap2">
                                    <img src="./images/icon_IMDB_Logo.svg" alt="">
                                </div>
                                <span>79%</span>
                            </div>
                            <!-- <p><span class="release-date"></span>日期：<span class="date-data">2021/11/03</span></p>
                            <p><span class="movie-length"></span>片長：<span class="length-data">156分鐘</span></p>
                            <p><span class="movie-director"></span>導演：<span class="director-data">趙婷</span></p> -->
                            <!-- <p class="release-date"><i class="far fa-calendar-check">日期</i><span class="date-data">2021/11/03</span></p>
                            <p class="movie-length"><i class="far fa-clock">片長</i><span class="length-data">156分鐘</span></p>
                            <p class="movie-director"><i class="fas fa-video">導演</i><span class="director-data">趙婷</span></p> -->

                            <p class="release-date">日期：<span class="date-data">2021/11/03</span></p>
                            <p class="movie-length">片長：<span class="length-data">156分鐘</span></p>
                            <p class="movie-director">導演：<span class="director-data">趙婷</span></p>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <div class="cat-tags">
                            <div class="cat-tag g-tag">奇幻</div>
                            <div class="cat-tag g-tag">冒險</div>
                            <div class="cat-tag g-tag">英雄</div>
                            <div class="cat-tag g-tag">劇情</div>
                        </div>
                        <div class="description-title">
                            <span class="section-header-b">劇情大綱</span>
                        </div>
                        <div class="description">
                            <p>永恆族是超越繁星的神族，七千年前來到地球，誓言保護人類，各色各異的他們，擁有超凡智慧與能力，長生不老，每人具備迥然不同的絕頂神力。然而守護地球期間，各自強大的永恆族人並非和樂融融，內部紛爭不斷，最終整個族群分崩離析，直到一群古老的宿敵現身永恆族是超越繁星的神族，七千年前來到地球，誓言保護人類，各色各異的他們，擁有超凡智慧與能力，長生不老，每人具備迥然不同的絕頂神力。然而守護地球期間，各自強大的永恆族人並非和樂融融，內部紛爭不斷，最終整個族群分崩離析，直到一群古老的宿敵現身……</p>
                        </div>
                        <div class="booking-trailer">
                            <button type="button" class="btn-brand">
                                <a href="./booking-movie-page.php">
                                    <div class="d-flex">
                                        <div class="img-wrap">
                                            <img src="images/icon_ticket_fill.svg" alt="">
                                        </div>
                                        <span>立即購票</span>
                                    </div>
                                </a>
                            </button>
                            <button type="button" class="btn-white-outline">
                                <div class="d-flex">
                                    <div class="img-wrap">
                                            <img src="images/icon_play_fill.svg" alt="">
                                        </div>
                                    <span>預告片</span>
                                </div>
                                    
                            </button>
                        </div>
                    </div>
                </div>

                <!-- movie info display < 418 -->
                <div class="row movie-info d-flex d-xs-flex d-sm-none d-none">
                    <div class="mycol-4 movie-poster">
                        <div class="img-wrap">
                            <img src="images/poster_images/MSRbo2ocgQ6N9DdzBUk0-280 x 400.jpg" alt="">
                        </div>
                    </div>

                    <div class="mycol-8 content">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div>
                                    <span class="title-tc">永恆族</span>
                                </div>
                                <div>
                                    <span class="title-en">Eternals</span>
                                </div>
                            </div>

                            <div>
                                <span class="pg-rate body2-r">12</span>
                            </div>
                        </div>
                        
                        
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="reputation">
                            <div class="img-wrap1">
                                <img src="./images/icon_Rotten_Tomatoes.svg" alt="">
                            </div>
                            <span class="mr-3">53%</span>
                            <div class="img-wrap2">
                                <img src="./images/icon_IMDB_Logo.svg" alt="">
                            </div>
                            <span>79%</span>
                        </div>

                        <p class="release-date"><i class="far fa-calendar-check"></i><span class="date-data">2021/11/03</span></p>
                        <p class="movie-length"><i class="far fa-clock"></i><span class="length-data">156分鐘</span></p>
                        <p class="movie-director"><i class="fas fa-video"></i><span class="director-data">趙婷</span></p>
                            
                        <!-- <p class="release-date">日期：<span class="date-data">2021/11/03</span></p>
                        <p class="movie-length">片長：<span class="length-data">156分鐘</span></p>
                        <p class="movie-director">導演：<span class="director-data">趙婷</span></p> -->
                    </div>

                    <div class="mycol-12">
                        <div class="cat-tags">
                            <div class="cat-tag g-tag">奇幻</div>
                            <div class="cat-tag g-tag">冒險</div>
                            <div class="cat-tag g-tag">英雄</div>
                            <div class="cat-tag g-tag">劇情</div>
                        </div>
                        <div class="description-title">
                            <span class="section-header-b">劇情大綱</span>
                        </div>
                        <div class="description">
                            <p>永恆族是超越繁星的神族，七千年前來到地球，誓言保護人類，各色各異的他們，擁有超凡智慧與能力，長生不老，每人具備迥然不同的絕頂神力。然而守護地球期間，各自強大的永恆族人並非和樂融融，內部紛爭不斷，最終整個族群分崩離析，直到一群古老的宿敵現身永恆族是超越繁星的神族，七千年前來到地球，誓言保護人類，各色各異的他們，擁有超凡智慧與能力，長生不老，每人具備迥然不同的絕頂神力。然而守護地球期間，各自強大的永恆族人並非和樂融融，內部紛爭不斷，最終整個族群分崩離析，直到一群古老的宿敵現身……</p>
                        </div>
                        <div class="booking-trailer">
                            <button type="button" class="btn-brand">
                                <a href="./booking-movie-page.php">
                                    <div class="d-flex">
                                        <div class="img-wrap">
                                            <img src="images/icon_ticket_fill.svg" alt="">
                                        </div>
                                        <span>立即購票</span>
                                    </div>
                                </a>
                            </button>
                            <button type="button" class="btn-white-outline">
                                <div class="d-flex">
                                    <div class="img-wrap">
                                            <img src="images/icon_play_fill.svg" alt="">
                                        </div>
                                    <span>預告片</span>
                                </div>
                                    
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- -----------related articles section----------- -->
        <section class="related-articles-section g-section-mb">
            <div class="container">
                <div class="row subtitle g-subtitle-mb">
                    <div class="mycol-6 d-flex">
                        <div class="red-line my-auto"></div>
                        <span class="section-header-b">討論區文章</span>
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


                <div class="row articles-1920 d-none d-xl-flex">
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-light d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free-tag">雷</div>
                                    <div class="arti-cat-tag g-tag">選片</div>
                                    <div class="sub-title-r">永恆族 vs 惡靈 首部曲</div>
                                </div>
                                <div class="time-stamp d-flex">1天前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-light d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-tag">雷</div>
                                    <div class="arti-cat-tag g-tag">討論</div>
                                    <div class="sub-title-r">永恆族 – 大型斯卡羅現場</div>
                                </div>
                                <div class="time-stamp d-flex">2天前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-dark d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-tag">雷</div>
                                    <div class="arti-cat-tag g-tag">討論</div>
                                    <div class="sub-title-r">永恆族-篇幅不足的半成品</div>
                                </div>
                                <div class="time-stamp d-flex">3天前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-dark d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free-tag">雷</div>
                                    <div class="arti-cat-tag g-tag">討論</div>
                                    <div class="sub-title-r">所以永恆族算成功了嗎</div>
                                </div>
                                <div class="time-stamp d-flex">1週前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-light d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free-tag">雷</div>
                                    <div class="arti-cat-tag g-tag">討論</div>
                                    <div class="sub-title-r">永恆族有一段關鍵台詞這樣改應該更好，你覺得呢？</div>
                                </div>
                                <div class="time-stamp d-flex">1月前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-light d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free-tag">雷</div>
                                    <div class="arti-cat-tag g-tag">討論</div>
                                    <div class="sub-title-r">永恆族有一段關鍵台詞這樣改應該更好有一段關鍵台詞</div>
                                </div>
                                <div class="time-stamp d-flex">1月前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-dark d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-tag">雷</div>
                                    <div class="arti-cat-tag g-tag">討論</div>
                                    <div class="sub-title-r">永恆族有一段關鍵台詞有一段關鍵台詞有一段關鍵台詞</div>
                                </div>
                                <div class="time-stamp d-flex">1月前</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6">
                        <a href="#">
                            <div class="article-dark d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="spoiler-free-tag">雷</div>
                                    <div class="arti-cat-tag g-tag">討論</div>
                                    <div class="sub-title-r">永恆族有一段關鍵台詞這樣不好有一段關鍵台詞</div>
                                </div>
                                <div class="time-stamp d-flex">1月前</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row articles-xl d-none d-md-flex d-lg-flex d-xl-none">
                    <ul>
                        <li class="mb-3"> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-tag">雷</div>
                                            <div class="arti-cat-tag g-tag">討論</div>
                                            <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                        </div>
                                        <div class="time-stamp d-flex">12小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-dark d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-tag">雷</div>
                                            <div class="arti-cat-tag g-tag">討論</div>
                                            <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                        </div>
                                        <div class="time-stamp d-flex">12小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-dark d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-free-tag">雷</div>
                                            <div class="arti-cat-tag g-tag">新聞</div>
                                            <div class="sub-title-r">《作家我就爛》逼退《永恆族》榮登...</div>
                                        </div>
                                        <div class="time-stamp d-flex">18小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-light d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-free-tag">雷</div>
                                            <div class="arti-cat-tag g-tag">選片</div>
                                            <div class="sub-title-r">月老 vs. 永恆族</div>
                                        </div>
                                        <div class="time-stamp d-flex">1天前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3"> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-tag">雷</div>
                                            <div class="arti-cat-tag g-tag">討論</div>
                                            <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                        </div>
                                        <div class="time-stamp d-flex">12小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-dark d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-tag">雷</div>
                                            <div class="arti-cat-tag g-tag">討論</div>
                                            <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                        </div>
                                        <div class="time-stamp d-flex">12小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-dark d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-free-tag">雷</div>
                                            <div class="arti-cat-tag g-tag">新聞</div>
                                            <div class="sub-title-r">《作家我就爛》逼退《永恆族》榮登...</div>
                                        </div>
                                        <div class="time-stamp d-flex">18小時前</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="mb-3">
                            <div class="col-12">
                                <a href="#">
                                    <div class="article-light d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="spoiler-free-tag">雷</div>
                                            <div class="arti-cat-tag g-tag">選片</div>
                                            <div class="sub-title-r">月老 vs. 永恆族</div>
                                        </div>
                                        <div class="time-stamp d-flex">1天前</div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="row articles-md d-sm-flex d-md-none d-lg-none d-xl-none">
                    <ul>
                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="extra-info">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center align-items-center">
                                                <div class="spoiler-tag">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="article-title">
                                        <div class="sub-title-r">永恆族可惜不能是獨立電影</div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="extra-info">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="spoiler-free-tag">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="article-title">
                                        <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="extra-info">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="spoiler-free-tag">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="article-title">
                                        <div class="sub-title-r">趙婷透露《永恆族》本來可能是黑暗結局</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="extra-info">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="spoiler-tag">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="article-title">
                                        <div class="sub-title-r">所以永恆族算成功了嗎</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="extra-info">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="spoiler-tag">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="article-title">
                                        <div class="sub-title-r">永恆族可惜不能是獨立電影</div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        
                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="extra-info">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="spoiler-free-tag">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="article-title">
                                        <div class="sub-title-r">《永恆族》可惜不能是獨立電影</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="extra-info">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="spoiler-free-tag">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="article-title">
                                        <div class="sub-title-r">趙婷透露《永恆族》本來可能是黑暗結局</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="extra-info">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="spoiler-free-tag">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="article-title">
                                        <div class="sub-title-r">所以永恆族算成功了嗎</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li> 
                            <div class="col-12">
                                <a href="#">
                                    <div class="extra-info">
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="d-flex align-items-center">
                                                <div class="spoiler-tag">雷</div>
                                                <div class="arti-cat-tag mr-2">討論</div>
                                            </div>
                                            <div class="time-stamp d-flex">12小時前</div>
                                        </div>
                                    </div>
                                    <div class="article-title">
                                        <div class="sub-title-r">所以永恆族算成功了嗎</div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- -----------actors list section----------- -->
        <section class="actors-list-section g-section-mb">
            <div class="container">
                <div class="row subtitle g-subtitle-mb">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b mr-3">主要演員列表</span>
                            <span class="sub-title-r  my-auto">共12人</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row mb-4">
                    <div class="wrap">
                        <div class="next-btn">
                            <div class="img-wrap">
                                <img src="images/icon_arrow_right.svg" alt="">
                            </div>
                        </div>
                        <div class="prev-btn">
                            <div class="img-wrap">
                                <img src="images/icon_arrow_left.svg" alt="">
                            </div>
                        </div>
                        <div class="carousel-wrap">

                            <!-- 空照片 -->
                            <li class="list-unstyled">
                                <div class="img-wrap actor1">
                                    <div></div>
                                </div>
                            </li>
                            <!-- 第一張圖片 img-1 -->
                            <li class="list-unstyled">
                                <div class="img-wrap actor1">
                                    <img src="images/detail_page/actors_list_section/actor-1-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1 sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>

                            <li class="list-unstyled">
                                <div class="img-wrap actor2">
                                    <img src="images/detail_page/actors_list_section/actor-2-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1 sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>

                            <li class="list-unstyled">
                                <div class="img-wrap actor3">
                                    <img src="images/detail_page/actors_list_section/actor-3-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1 sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>

                            <li class="list-unstyled">
                                <div class="img-wrap actor4">
                                    <img src="images/detail_page/actors_list_section/actor-4-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1 sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>

                            <li class="list-unstyled">
                                <div class="img-wrap actor5">
                                    <img src="images/detail_page/actors_list_section/actor-5-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1  sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>

                            <li class="list-unstyled">
                                <div class="img-wrap actor6">
                                    <img src="images/detail_page/actors_list_section/actor-6-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1 sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>

                            <li class="list-unstyled">
                                <div class="img-wrap actor7">
                                    <img src="images/detail_page/actors_list_section/actor-7-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1 sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>

                            <li class="list-unstyled">
                                <div class="img-wrap actor8">
                                    <img src="images/detail_page/actors_list_section/actor-8-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1 sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>

                            <li class="list-unstyled">
                                <div class="img-wrap actor9">
                                    <img src="images/detail_page/actors_list_section/actor-9-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1 sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>

                            <li class="list-unstyled">
                                <div class="img-wrap actor10">
                                    <img src="images/detail_page/actors_list_section/actor-10-25.jpg" alt="">
                                    <div>
                                        <img class="image-hover actor-hover-char1" src="images/detail_page/actors_list_section/actor-4-hover.jpg" alt="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <span class="actor-name-tc1 sub-title-b mb-1">中文姓名</span>
                                    <span class="actor-name-en1 italic-16">English</span>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- -----------movie stills section----------- -->
        <section class="movie-stills-section g-section-mb">
            <div class="container">
                <div class="row subtitle g-subtitle-mb">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="red-line my-auto"></div>
                            <span class="section-header-b mr-3">電影劇照</span>
                            <span class="sub-title-r my-auto">共8張</span>
                        </div>
                    </div>
                </div>

                <div class="row movie-stills">
                    <div class="hall-screen">
                        <img src="images/detail_page/movie_stills/movie_still_img2.jpg" alt="">
                    </div>
                </div>

                <div class="row movie-stills-carousel">

                    <div class="next-btn">
                        <div class="img-wrap">
                            <img src="images/icon_arrow_right.svg" alt="">
                        </div>
                    </div>
                    <div class="prev-btn">
                        <div class="img-wrap">
                            <img src="images/icon_arrow_left.svg" alt="">
                        </div>
                    </div>

                    <div class="carousel-wrap d-flex justify-content-between list-unstyled flex-nowrap">
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img1.jpg"></div>
                        </li>
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img2.jpg"></div>
                        </li>
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img3.jpg"></div>
                        </li>
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img4.jpg"></div>
                        </li>
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img5.jpg"></div>
                        </li>
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img6.jpg"></div>
                        </li>
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img7.jpg"></div>
                        </li>
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img8.jpg"></div>
                        </li>
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img9.jpg"></div>
                        </li>
                        <li class="movie">
                            <div class="movie-frame img-wrap"><img src="images/detail_page/movie_stills/movie_still_img10.jpg"></div>
                        </li>
                    </div>

                    
                </div>
            </div>
        </section>
    </main>    

    <?php require_once './tpl/movinon-footer.php' ?>

    <?php require_once './tpl/foot.php' ?>
    
    <script>
        // ----------actors list carousel----------
        let nowIndex = $(this).index() + 1;

        $('.actors-list-section .prev-btn').click(function () {

            nowIndex -= 1
            if (nowIndex < 0) {
                nowIndex = 0
            }

            let nowX = nowIndex * -266 + 'px';
            $('.actors-list-section .carousel-wrap').css('transform',`translateX(${nowX})`).css('transition','.6s');
        });

        $('.actors-list-section .next-btn').click(function () {

            nowIndex += 1
            if (nowIndex > 6) {
                nowIndex = 6
            }
            
            let nowX = nowIndex * -266 + 'px';
            $('.actors-list-section .carousel-wrap').css('transform',`translateX(${nowX})`).css('transition','.6s');
        });

        // -------------------- hall screen --------------------
        $(document).ready(function() {

            // Change image on selection
            $(".movie-stills-carousel .carousel-wrap li img").click(function() {

                // Get current image source
                const imgSrc = $(this).attr("src");

                // Apply grayscale to thumbnails except selected
                $(".movie-stills-carousel .carousel-wrap")
                    .find("img")
                    .css("filter", "grayscale(1)").css('transition', '.4s');
                $(this).css("filter", "none");

                // Change image
                $('.movie-stills .hall-screen img').attr('src', imgSrc);
            });

            $(".movie-stills-carousel .carousel-wrap li img").hover (function() {
                $(this).css("filter", "none").css('transition', '.4s');
            }, function () {
                $(this).css("filter", "grayscale(1)").css('transition', '.4s');
            });
        });

        // -------------------- hall screen carousel --------------------
        $('.movie-stills-carousel .prev-btn').click(function () {

            nowIndex -= 1
            if (nowIndex < 0) {
                nowIndex = 0
            }

            let nowX = nowIndex * -232 + 'px';
            $('.movie-stills-carousel .movie').css('transform',`translateX(${nowX})`).css('transition','.6s');
        });

        $('.movie-stills-carousel .next-btn').click(function () {

            nowIndex += 1
            if (nowIndex > 5) {
                nowIndex = 5
            }
            
            let nowX = nowIndex * -232 + 'px';
            $('.movie-stills-carousel .movie').css('transform',`translateX(${nowX})`).css('transition','.6s');
        });

        // -------------------- word limits --------------------
        const len = 16;
        const ellipsisLight = document.querySelectorAll('.related-articles-section .article-light .d-flex > div');
        const ellipsisDark = document.querySelectorAll('.related-articles-section .article-dark .d-flex > div');

        ellipsisLight.forEach((item) => {
            if(item.innerHTML.length > len) {
                let txt = item.innerHTML.substring(0, len) + '...';
                item.innerHTML = txt;
            }
        })

        ellipsisDark.forEach((item) => {
            if(item.innerHTML.length > len) {
                let txt = item.innerHTML.substring(0, len) + '...';
                item.innerHTML = txt;
            }
        })

    </script>
    <!-- <script src="js/detail-page.js"></script> -->
</body>
</html>