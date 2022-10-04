$(document).ready(function () {
    // Swiper
    var gkaThemeSlider = new Swiper('.gka-theme-swiper-container', {
        // autoplay: {
        //     delay: 7000,
        // },
        // loop: true,
        // If we need pagination
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true
        // },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1200: {
                allowTouchMove: false,
            }
        }
    });

    for (var i = 0; i < gkaThemeSlider.length; i++) {
        gkaThemeSlider[i].on('slideChange', function () {
            console.log("slide change"); 
            $(".pagination .active").html(this.activeIndex + 1);
        });
    }
    

    // Listing Swiper (Floorplan, Available Homes)
    var thumbsSlider = new Swiper(".thumbsSlider", {
        spaceBetween: 10,
        slidesPerView: 10,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var gkaListingSwiper = new Swiper('.gka-theme-listing-swiper-container', {
        //slidesPerView: 2,
        //spaceBetween: 40,
        //centeredSlides: true,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            type: "fraction",
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: thumbsSlider,
        },
        breakpoints: {
            1200: {
                allowTouchMove: false,
                slidesPerView: 2,
                spaceBetween: 40,
                centeredSlides: true,
            }
        }
    });


}); /* Document Ready End */