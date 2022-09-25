// сделать 2 js один для основной страницы, другой - общий
// сделать всё на vanilla

// добавить на LOGO.png ссылку на основной сайт




 $(function() {
     if (`http://o95280mn.beget.tech/`== window.location.href) {
    
     $($('.nav-link[href]')[0]).addClass('active btn btn-warning text-dark');
      
    } else {
        $('.nav-link[href]').each(function() {
            if (this.href == window.location.href) {
                $(this).addClass('active btn btn-warning text-dark');
     
            }
        });
    }
 });

function scrollToKatalog() {
  $('html, body').animate({
        scrollTop: $('#cards').offset().top
    }, 500);
};


$('.navbar-toggler').click(function() {
    if ($('#phoneNav').css("display") !== "none"){
        $('#phoneNav').css("display", "none")
    } else {
        $('#phoneNav').css("display", "block")    
    }
  
})


$(function () {
  $('.carousel').carousel({
    interval: 3000,
    keyboard: false,
    pause: false,
    ride: 'carousel',
    wrap: true
  });
});






//PhoneNav padding auto
// let p = heightNavPhone();
// function heightNavPhone() {
//   let y = $('.navbar').outerHeight();
//   let z = $('#phoneNav').height();
//  // let x = $('.navbar').css('padding-top');
//  return (y - z)/2 ;
// }
//
// $('#phoneNav').css('padding-top', p).css('padding-bottom', p);


// let s = $('.navbar').outerHeight();
// s.addEventListener('resize', console.log("resized"));



// TODO: height что то про саженцы = height картинки



// function carouselHeight() {
//     $('.carousel-inner').css({
//         height: $(window).height() + 'px'
//     });
// }
// carouselHeight(); // устанавливаем высоту окна при первой загрузке страницы
// $(window).resize( carouselHeight ); // обновляем при изменении размеров окна

// function carouselHeight() {
//   let y = $('.carousel-inner').height()
//    = $('.carousel-item').height();
// }
//
// window.onresize = carouselHeight;
