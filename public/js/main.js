$(document).ready(function(){
    $('.slider-section').slick({
        // autoplay: true,
        arrows: true,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                arrows: false
              }
            }
          ]
    });



    lightGallery(document.getElementById('index-lightgallery')); 

    $('.first-row-partners').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('#first-prev'),
        nextArrow: $('#first-next'),
    });

    $('.second-row-partners').slick({
        prevArrow: '#second-prev',
        nextArrow: '#second-next',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
    });

    $('.first-row-cert').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('#first-prev-cert'),
        nextArrow: $('#first-next-cert'),
    });
    
    $('.second-row-cert').slick({
        prevArrow: '#second-prev-cert',
        nextArrow: '#second-next-cert',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
    });

    $('.slider-advantages').slick({
        infinite: true,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: $('#adv-prev'),
        nextArrow: $('#adv-next'),
        responsive: [
            {
              breakpoint: 991,
              settings: {
                    slidesToShow: 3,
                    arrows: false,
                    prevArrow: '',
                    nextArrow: ''
              }
            },
            {
                breakpoint: 768,
                settings: {
                      slidesToShow: 2,
                      arrows: false,
                      prevArrow: null,
                      nextArrow: null
                }
            },
            {
                breakpoint: 425,
                settings: {
                      slidesToShow: 1,
                      arrows: false,
                      prevArrow: null,
                      nextArrow: null
                }
            }
        ]
    });

    // $('.first-row-products').slick({
    //     slidesToShow: 2,
    //     slidesToScroll: 2,
    //     slidesPerRow: 4,
    //     rows: 2,
    //     prevArrow: '#products-prev',
    //     nextArrow: '#products-next'
    // });
});