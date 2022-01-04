// $('.carousel-wrap li').hover(function () {
        //     $(this).children().eq(1).css('opacity', '1');
        // }, function () {
        //     $(this).children().eq(1).css('opacity', '0');
        // });
        
        // ----------carousel----------
        let nowIndex = $(this).index() + 1;

        $('.actors-list-section .fa-chevron-left').click(function () {

            nowIndex -= 1
            if (nowIndex < 0) {
                nowIndex = 0
            }

            let nowX = nowIndex * -266 + 'px';
            $('.actors-list-section .carousel-wrap').css('transform',`translateX(${nowX})`).css('transition','.8s');
        });

        $('.actors-list-section .fa-chevron-right').click(function () {
            console.log('hit', nowIndex)
            nowIndex += 1
            if (nowIndex > 4) {
                nowIndex = 4
            }
            
            let nowX = nowIndex * -266 + 'px';
            $('.actors-list-section .carousel-wrap').css('transform',`translateX(${nowX})`).css('transition','.8s');
        });

        // ----------image demo----------
        $('.movie-stills-carousel .img-wrap > img').click(function () {
            const imgSrc = $(this).attr('src');
            $('.img-demo img').attr('src', imgSrc);
        })

        // 問題：如何能讓 text 的轉場更自然？
        // ----------image change actor text 1----------
        $('.actor1').hover(function() {
            $('.actor-hover-char1').css('opacity', '1');
            $('.actor-name-tc1').text('角色').fadeIn();
            $('.actor-name-en1').text('char').fadeIn();
        }, function() {
            $('.actor-hover-char1').css('opacity', '0');
            $('.actor-name-tc1').text('中文').fadeIn();
            $('.actor-name-en1').text('english').fadeIn();
        });

        // ----------image change actor text 2----------
        $('.actor2').hover(function() {
            $('.actor-hover-char2').css('opacity', '1');
            $('.actor-name-tc2').text('角色');
            $('.actor-name-en2').text('char');
        }, function() {
            $('.actor-hover-char2').css('opacity', '0');
            $('.actor-name-tc2').text('中文');
            $('.actor-name-en2').text('english');
        });

        // ----------image change actor text 3----------
        $('.actor3').hover(function() {
            $('.actor-hover-char3').css('opacity', '1');
            $('.actor-name-tc3').text('角色');
            $('.actor-name-en3').text('char');
        }, function() {
            $('.actor-hover-char3').css('opacity', '0');
            $('.actor-name-tc3').text('中文');
            $('.actor-name-en3').text('english');
        });

        // ----------image change actor text 4----------
        $('.actor4').hover(function() {
            $('.actor-hover-char4').css('opacity', '1');
            $('.actor-name-tc4').text('角色');
            $('.actor-name-en4').text('char');
        }, function() {
            $('.actor-hover-char4').css('opacity', '0');
            $('.actor-name-tc4').text('中文');
            $('.actor-name-en4').text('english');
        });

        // ----------image change actor text 5----------
        $('.actor5').hover(function() {
            $('.actor-hover-char5').css('opacity', '1');
            $('.actor-name-tc5').text('角色');
            $('.actor-name-en5').text('char');
        }, function() {
            $('.actor-hover-char5').css('opacity', '0');
            $('.actor-name-tc5').text('中文');
            $('.actor-name-en5').text('english');
        });

        // ----------image change actor text 6----------
        $('.actor6').hover(function() {
            $('.actor-hover-char6').css('opacity', '1');
            $('.actor-name-tc6').text('角色');
            $('.actor-name-en6').text('char');
        }, function() {
            $('.actor-hover-char6').css('opacity', '0');
            $('.actor-name-tc6').text('中文');
            $('.actor-name-en6').text('english');
        });

        // ----------image change actor text 7----------
        $('.actor7').hover(function() {
            $('.actor-hover-char7').css('opacity', '1');
            $('.actor-name-tc7').text('角色');
            $('.actor-name-en7').text('char');
        }, function() {
            $('.actor-hover-char7').css('opacity', '0');
            $('.actor-name-tc7').text('中文');
            $('.actor-name-en7').text('english');
        });

        // ----------image change actor text 8----------
        $('.actor8').hover(function() {
            $('.actor-hover-char8').css('opacity', '1');
            $('.actor-name-tc8').text('角色');
            $('.actor-name-en8').text('char');
        }, function() {
            $('.actor-hover-char8').css('opacity', '0');
            $('.actor-name-tc8').text('中文');
            $('.actor-name-en8').text('english');
        });