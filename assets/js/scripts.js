
const swiperAssociates = new Swiper('.associates-slider', {
  slidesPerView: 'auto',
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 2000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


const swiperVideo = new Swiper('.video-swiper', {
  slidesPerView: 2,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: '.video-btn-next',
    prevEl: '.video-btn-prev',
  },
});


let contactsForm = $('.contacts-form');

contactsForm.on('submit', function (event) {
  event.preventDefault();
  var formData = new FormData(this);
  formData.append('action', 'contacts_form');
  $.ajax({
    type: "POST",
    url: adminAjax.url,
    data: formData,
    contentType: false,
    processData: false,
    seccess: function (response) {
      console.log('Ответ сервера: ' + response);
    }
  });

});

let menuToggle = $('.mobile-btn-menu');
menuToggle.on('click', function (event) {
  event.preventDefault();
  $('.header-nav').slideToggle(200);
});

let popupHeader = $('.call-btn');
popupHeader.on('click', function (event) {
  event.preventDefault();
  $('.modal-header').slideToggle(200);
});

let popupFooter = $('.footer-btn');
popupFooter.on('click', function (event) {
  event.preventDefault();
  $('.footer-modal').slideToggle(200);
});

$('.slider-product-btn-one').attr({
  "data-fancybox": "",
  "data-src": "#modal-page-contant-one"
});

$('.slider-product-btn-two').attr({
  "data-fancybox": "",
  "data-src": "#modal-page-contant-two"
});

$('.slider-product-btn-three').attr({
  "data-fancybox": "",
  "data-src": "#modal-page-contant-three"
});

// $('#order').attr("href","<?example.html?id=get_the_ID()?>");

jQuery(document).ready(function ($) {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 400)
      $("#totop").fadeIn();
    else
      $("#totop").fadeOut();
  });
  $("#totop").click(function () {
    $("body,html").animate({ scrollTop: 0 }, 800);
    return false;
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 400)
      $("#whatsapp").fadeIn();
    else
      $("#whatsapp").fadeOut();
  });

});