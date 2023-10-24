$(document).ready(function () {
  var termSwiper = new Swiper(".termSwiper", {
    direction: "vertical",
    slidesPerView: "auto",
    freeMode: true,
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    mousewheel: true,
  });

  // services
  $('.services__item button').on('click', function () {
    var serviceName = $(this).parent().find('h2').text();
    $('#service_name').val(serviceName);
    $('.order-details-name').text(serviceName);

    var radioBtn = $(this).siblings('.radio__btns').find('input[type=radio]:checked').parent();
    var serviceKolvo = radioBtn.find('span:first').text();
    var servicePrice = radioBtn.find('span:last').text();

    $('#service_kolvo').val(serviceKolvo);
    $('#service_price').val(servicePrice);

    $('.order-details-charact span:first').text(serviceKolvo);
    $('.order-details-charact span:last').text(servicePrice);
  });

  // show popup after submit form
  // document.addEventListener( 'wpcf7mailsent', function( event ) {
  //   if ( '#fa5fe38' == event.detail.contactFormId ) {
  //     jQuery('#modal-order-yes').modal('show');
  //   }
  // }, false );

//   document.addEventListener( 'wpcf7mailsent', function( event ) {
//     $('#modal-order').modal('close');
//     $('#modal-order-yes').modal('show');
// }, false );;

  document.addEventListener( 'wpcf7mailsent', function( event ) {
    $('#modal-order-yes').modal();
  }, false );

  // document.addEventListener('wpcf7mailsent', function(event) {
  // $.fancybox.close('#modal-order');
  // $.fancybox.open('#modal-order-yes');
  // });

});