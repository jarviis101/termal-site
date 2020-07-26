
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

    $('.row-projects').slick({
      infinite: true,
      slidesToShow: 7,
      slidesToScroll: 1,
      prevArrow: $('#first-prev'),
      nextArrow: $('#first-next'),
      responsive: [
          {
            breakpoint: 1441,
            settings: {
              slidesToShow: 6,
            }
          },
          {
              breakpoint: 1369,
              settings: {
                slidesToShow: 5,
              }
          },
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 4,
            }
          },
          {
            breakpoint: 992,
            draggable: true,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 424,
            settings: {
              slidesToShow: 1,
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
        responsive: [
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 2,
              }
            },
            {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                }
            }
          ]
    });

    $('.second-row-partners').slick({
        prevArrow: '#second-prev',
        nextArrow: '#second-next',
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 2,
              }
            },
            {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                }
            }
          ]
    });

    $('.first-row-cert').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('#first-prev-cert'),
        nextArrow: $('#first-next-cert'),
        responsive: [
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 2,
              }
            },
            {
                breakpoint: 991,
                settings: {
                  slidesToShow: 1,
                }
            }
          ]
    });
    
    $('.second-row-cert').slick({
        prevArrow: '#second-prev-cert',
        nextArrow: '#second-next-cert',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 2,
              }
            },
            {
                breakpoint: 991,
                settings: {
                  slidesToShow: 1,
                }
            }
          ]
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
    $('#projects-section .slick-track').addClass("nav nav-pills")
});