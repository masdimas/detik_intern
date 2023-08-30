// Running Sponsor
$('.slick-sponsor').slick({
        speed: 7000,
        autoplay: true,
        autoplaySpeed: 0,
        centerMode: true,
        cssEase: 'linear',
        slidesToShow: 7,
        // slidesToScroll: 1,
        infinite: true,
        // initialSlide: 1,
        arrows: false,
        buttons: false,
        responsive: [
          {
            breakpoint: 1366,
            settings: {
              slidesToShow: 5,
              infinite: true,
              centerPadding: '10px'
            }
          },
          {
            breakpoint: 1280,
            settings: {
              slidesToShow: 5,
              infinite: true,
              centerPadding: '10px'
            }
          },
          {
      breakpoint: 1200,
      settings: {
        slidesToShow: 5,
        infinite: true,
        centerPadding: '10px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        infinite: true,
        centerPadding: '10px'
      }
    },
    {
      breakpoint: 850,
      settings: {
        slidesToShow: 3,
        infinite: true
      }
    },
    {
      breakpoint: 780,
      settings: {
        slidesToShow: 3,
        infinite: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        infinite: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        infinite: true
      }
    },
  ]
});

//Speakers Banner
$('.home-page .box-speakers').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    // centerMode: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    initialSlide: 1,
    // arrows: true,
    buttons: false,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
});

//CUSTOM FILE INPUT - FILE NAME REPLACE
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").text(fileName);
});

//MODAL SUCCESS REGISTRATION
$(document).ready(function() {
  // Transition effect for navbar 
  $(window).scroll(function() {
    // checks if window is scrolled more than 500px, adds/removes solid class
    if($(this).scrollTop() > 20) { 
        $('.navbar').addClass('solid');
    } else {
        $('.navbar').removeClass('solid');
    }
  });

  //WOW JS INIT
  new WOW().init();

  //CUSTOM FILE INPUT - FILE NAME REPLACE
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });

  //DISABLE MODAL CLICK OUTSIDE AREA
  $('#myModal').modal({backdrop: 'static', keyboard: false}) 
});

//PHOTO PREVIEW
function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#foto').attr('src', e.target.result);
        $('.btn-file').children('img').css('visibility','hidden');
        $('.box-foto').children('.label').css('display','none');
    };

    reader.readAsDataURL(input.files[0]);
}
else {
  $('#foto').attr('src', 'https://cdnstatic.detik.com/live/2022/microsite/techconference2022/images/cnbc-grey.png');
  $('.btn-file').children('img').css('visibility','visible');
}
}

//MODAL REGISTRATION SUCCESS
var myVar;
function myFunction() {
myVar = setTimeout(showPage, 3000);
}
function showPage() {
document.getElementById("loader").style.display = "none";
document.getElementById("loader-text").style.display = "none";
document.getElementById("myDiv").style.display = "block";
}

// Swiper Speakers
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
});
