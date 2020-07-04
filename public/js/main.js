$(document).ready(function(){
    $('.slider-section').slick();
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
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: $('#adv-prev'),
        nextArrow: $('#adv-next'),
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