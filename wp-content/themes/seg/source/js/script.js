function yacor(){
  let links = $('.data-org__nav-link');
  let titles = $('.mini-title');

  titles.each(function(index, value){
    let ids = $(links[index]).attr('href').replace("#", "");
    $(value).attr('id', ids);
  })

}


$(document).ready(function(){
  yacor();
    $('.modal-box-slider').slick({
      // centerMode: true,
      slidesToShow: 3,
      // slidesToScroll: 1,
      Infinity: true,
      dots: false,
      arrows: true,
  });

  $.fancybox.defaults.btnTpl.z = '<button data-fancybox-z class="fancybox-button" title="zoom 300%">+/-</button>';

    $(".principle-list" ).each(function( index ) {
      let dataatr = $(this).find(".slick-current").find('.modal-box__img').attr('data-fancybox');
      // console.log(dataatr);
          $('[data-fancybox="'+dataatr+'"]').fancybox({ buttons : ['z', 'close'], afterShow : function(instance, current ) {

            $('[data-fancybox-z]').toggleClass("zoom", current.ratio == 3)
          }
        });
    });

  $(document).on('click.fb', '[data-fancybox-z]', function( e ) {

      var instance = $.fancybox.getInstance();

      var current = instance.current;

      current.ratio = current.ratio != 3 ? 3 : 1/3;

      current.width  = current.width  * current.ratio;

      current.height = current.height * current.ratio;

      instance[ current.ratio == 3 ?  "scaleToActual" : "scaleToFit"]();

      $(this).toggleClass("zoom", current.ratio == 3);

  });




});


