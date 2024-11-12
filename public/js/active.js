(function ($) {
    'use strict';

    var browserWindow = $(window);

    // :: 1.0 Preloader Active Code
    browserWindow.on('load', function () {
        $('.preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

    // :: 2.0 Nav Active Code
    if ($.fn.classyNav) {
        $('#alazeaNav').classyNav();
    }

    // :: 3.0 Search Active Code
    $('#searchIcon').on('click', function () {
        $('.search-form').toggleClass('active');
    });
    $('.closeIcon').on('click', function () {
        $('.search-form').removeClass('active');
    });

    // :: 4.0 Sliders Active Code
    if ($.fn.owlCarousel) {
        var welcomeSlide = $('.hero-post-slides');
        var testiSlides = $('.testimonials-slides');
        var portfolioSlides = $('.portfolio-slides');

        welcomeSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            center: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });

        testiSlides.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 700,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });

        portfolioSlides.owlCarousel({
            items: 2,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: false,
            autoplayTimeout: 5000,
            smartSpeed: 700,
            center: true
        });
    }

    // :: 5.0 Masonary Gallery Active Code
    if ($.fn.imagesLoaded) {
        $('.alazea-portfolio').imagesLoaded(function () {
            // filter items on button click
            $('.portfolio-filter').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // init Isotope
            var $grid = $('.alazea-portfolio').isotope({
                itemSelector: '.single_portfolio_item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.single_portfolio_item'
                }
            });
        });
    }

    // :: 6.0 magnificPopup Active Code
    if ($.fn.magnificPopup) {
        $('.portfolio-img, .product-img').magnificPopup({
            gallery: {
                enabled: true
            },
            type: 'image'
        });
        $('.video-icon').magnificPopup({
            type: 'iframe'
        });
    }

    // :: 7.0 Barfiller Active Code
    if ($.fn.barfiller) {
        $('#bar1').barfiller({
            tooltip: true,
            duration: 1000,
            barColor: '#70c745',
            animateOnResize: true
        });
        $('#bar2').barfiller({
            tooltip: true,
            duration: 1000,
            barColor: '#70c745',
            animateOnResize: true
        });
        $('#bar3').barfiller({
            tooltip: true,
            duration: 1000,
            barColor: '#70c745',
            animateOnResize: true
        });
        $('#bar4').barfiller({
            tooltip: true,
            duration: 1000,
            barColor: '#70c745',
            animateOnResize: true
        });
    }

    // :: 8.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up"></i>'
        });
    }

    // :: 9.0 CounterUp Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // :: 10.0 Sticky Active Code
    if ($.fn.sticky) {
        $(".alazea-main-menu").sticky({
            topSpacing: 0
        });
    
        // Change navbar color when it becomes sticky
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 50) { // Sesuaikan angka 50 dengan posisi scroll yang diinginkan
                $(".alazea-main-menu").addClass("sticky-navbar");
            } else {
                $(".alazea-main-menu").removeClass("sticky-navbar");
            }
        });
    }
    

    // :: 11.0 Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip()
    }

    // :: 12.0 Price Range Active Code
    $('.slider-range-price').each(function () {
        var min = jQuery(this).data('min');
        var max = jQuery(this).data('max');
        var unit = jQuery(this).data('unit');
        var value_min = jQuery(this).data('value-min');
        var value_max = jQuery(this).data('value-max');
        var label_result = jQuery(this).data('label-result');
        var t = $(this);
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [value_min, value_max],
            slide: function (event, ui) {
                var result = label_result + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
                console.log(t);
                t.closest('.slider-range').find('.range-price').html(result);
            }
        });
    })

    // :: 13.0 prevent default a click
    $('a[href="#"]').on('click', function ($) {
        $.preventDefault();
    });

    // :: 14.0 wow Active Code
    if (browserWindow.width() > 767) {
        new WOW().init();
    }

})(jQuery);


// let currentIndex = 0;
// const images = document.querySelectorAll(".slider-image"); // Pilih semua gambar dengan kelas slider-image
// const dots = document.querySelectorAll(".dot");

// function nextImage() {
//     images[currentIndex].classList.remove("active"); // Sembunyikan gambar saat ini
//     dots[currentIndex].classList.remove("active"); // Nonaktifkan indikator saat ini
    
//     currentIndex = (currentIndex + 1) % images.length; // Pergi ke gambar berikutnya, loop kembali ke awal setelah gambar terakhir

//     images[currentIndex].classList.add("active"); // Tampilkan gambar baru
//     dots[currentIndex].classList.add("active"); // Aktifkan indikator baru
// }

// function currentSlide(index) {
//     images[currentIndex].classList.remove("active");
//     dots[currentIndex].classList.remove("active");

//     currentIndex = index - 1;

//     images[currentIndex].classList.add("active");
//     dots[currentIndex].classList.add("active");
// }


document.addEventListener("DOMContentLoaded", function() {
    let currentIndex = 0;
    const images = document.querySelectorAll(".slider-image"); // Pilih semua gambar dengan kelas slider-image
    const dots = document.querySelectorAll(".dot"); // Pilih semua dot indikator

    function showImage(index) {
        // Hapus kelas aktif dari gambar dan dot sebelumnya
        images[currentIndex].classList.remove("active");
        dots[currentIndex].classList.remove("active");

        // Perbarui indeks ke gambar baru yang dipilih
        currentIndex = index;

        // Tambahkan kelas aktif pada gambar dan dot baru
        images[currentIndex].classList.add("active");
        dots[currentIndex].classList.add("active");
    }

    function currentSlide(index) {
        showImage(index - 1); // Mengonversi urutan (1, 2, 3) ke indeks array (0, 1, 2)
    }

    // Tambahkan event listener pada setiap dot
    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            currentSlide(index + 1);
        });
    });

    // Mulai gambar pertama dengan status aktif
    if (images.length > 0) {
        images[0].classList.add("active");
        dots[0].classList.add("active");
    }

    // Optional: Set timer untuk berpindah otomatis antar gambar
    setInterval(() => showImage((currentIndex + 1) % images.length), 5000);
});


