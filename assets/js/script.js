$(window).scroll(function () { //element window , pada saat di scroll
    var wScroll = $(this).scrollTop();


    // tampilkan  teknologi
    if (wScroll > $('.bentuk').offset().top - 200) {
        $('.bentuk .card').each(function (i) {
            setTimeout(function () {
                $('.bentuk .card').eq(i).addClass('muncul'); //eq adalah element yang keberapa
            }, 300 * (i + 1));

        })


    }

});