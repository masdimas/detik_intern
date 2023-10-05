<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $('.slider-single').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        adaptiveHeight: true,
        infinite: false,
        useTransform: true,
        speed: 400,
        cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        responsive: [{
            breakpoint: 420,
            settings: {
                arrows: false,
                dots: true,
            }
        }]
    });

    $('.slider-nav')
        .on('init', function(event, slick) {
            $('.slider-nav .slick-slide.slick-current').addClass('is-active');
        })
        .slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: false,
            arrows: false,
            focusOnSelect: false,
            infinite: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            }, {
                breakpoint: 420,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            }]
        });

    $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
        $('.slider-nav').slick('slickGoTo', currentSlide);
        var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
        $('.slider-nav .slick-slide.is-active').removeClass('is-active');
        $(currrentNavSlideElem).addClass('is-active');
    });

    $('.slider-nav').on('click', '.slick-slide', function(event) {
        event.preventDefault();
        var goToSingleSlide = $(this).data('slick-index');

        $('.slider-single').slick('slickGoTo', goToSingleSlide);
    });
</script>

<script>
    $(document).ready(function() {
        $('.carousel').slick({
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
            centerMode: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    // centerMode: true,

                }

            }, {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    infinite: true,

                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                }
            }]
        });
    });
</script>

<script>
    var alert_del = document.querySelectorAll('.alert-del');
    alert_del.forEach((x) =>
        x.addEventListener('click', function () {
            x.parentElement.classList.add('hidden');
        })
    );

    var alert_del = document.querySelectorAll('.btn-close');
    alert_del.forEach((x) =>
        x.addEventListener('click', function () {
            x.parentElement.classList.add('hidden');
        })
    );
</script>

<script>
    // Get the current URL
    var currentUrl = window.location.pathname;

    // Select the navigation links
    var navLinks = document.querySelectorAll('.navbar-button');

    // Loop through the links and add the "active" class to the appropriate link
    for (var i = 0; i < navLinks.length; i++) {
      var linkUrl = navLinks[i].getAttribute('href');
      
      if (linkUrl === currentUrl) {
        navLinks[i].classList.add('active');
      }
    }
  </script>

<script>
    $(function() {
        $("#share-link").click(function(){
            setTimeout(function() {
            $("#tooltip-animation").removeClass("visible");
            $("#tooltip-animation").addClass("invisible");
         }, 2000)
        })
    });
</script>

