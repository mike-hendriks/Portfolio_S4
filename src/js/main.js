$(function(){
  // Scroll parallax effect
  // if ($('.rellax').length > 0) {
      // var rellax = new Rellax('.rellax');
  // }

  // Page load effect
  window.addEventListener("beforeunload", function () {
    document.body.classList.add("animate-out");
  });

  // Animate in new blocks

  $('.fade_on_load').each( function(i){
      var el = $(this);
      setTimeout(function(){
        $(el).addClass('reveal');

        }, 200 * i);
    });

  var $animation_elements = $('.has_overlay');
  var $window = $(window);
  $window.on('load', check_if_in_view);
  $window.on('scroll', check_if_in_view);
  $window.on('scroll resize', check_if_in_view);

  function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
        $element.addClass('reveal');
      // } else {
      //   $element.removeClass('in-view');
      }
    });
  }

  // Initiate slider
$('.carousel').owlCarousel({
  items: 1,
      margin: 10,
  nav: true,
  // singleItem: true,
  // center: true
});

  $('.burger_menu').on('click', function(){
      $(this).toggleClass('active');
      $('nav').toggleClass('active');
      $('main').toggleClass('inactive');
      $('body').toggleClass('menu_active');
  })


  // Glitch effect
  var tl = new TimelineMax({repeat: 0,repeatDelay: 3, delay: 1}),
    tl2 = new TimelineMax({repeat: -1,repeatDelay: 4, delay: 4}),
    glitch = $(".glitch"),
    top = $(".top")
    bottom = $(".bottom"),
    txt = $("#txt"),
    bg_overlay = $(".bg_overlay"),
    tv = $(".tv"),

    tl.to(glitch, 0.08, {skewX:60,ease: Power4.easeInOut})
        .to(glitch, 0.04, {skewX:0,ease: Power4.easeInOut})
        .to(glitch, 0.04, {opacity:0})
        .to(glitch, 0.04, {opacity:1})
        .to(glitch, 0.01, { className: '+=greenShadow'})
        .to(glitch, 0.04, {x:-20})
        .to(glitch, 0.04, {x:0})
        .to(glitch, 0.01, { className: '+=redShadow'})
        .to(glitch, 0.01, { className: '-=greenShadow'})
        .add("split", 0)

        .to(txt, 0, { scale:1.1},'split')
        .to(txt, 0, { scale:1}, "+=0.02")

        .to(top, 0.3, {x:-60,ease: Power4.easeInOut},'split')
        .to(bottom, 0.3, {x:60,ease: Power4.easeInOut},'split')
        // .to(glitch, 0.08, { className: '+=greenShadow'},'split')
        // .to(glitch, 0.1, { className: '+=redShadow'})

        .to(glitch, 0.02, {scaleY:1.1,ease: Power4.easeInOut})
        .to(glitch, 0.04, {scaleY:1,ease: Power4.easeInOut})

        .to(top, 0.02, {x:-20})
        .to(top, 0.04, {x:0})

      .to(bg_overlay, 1, {opacity:0.90, ease:Power2.easeInOut}, "+=.5")


  tl2
    .to(glitch, 0.08, { className: '+=redShadow'},'split')
    .to(glitch, 0.1, { className: '+=greenShadow'})
    .to(glitch, 0.1, { className: '-=greenShadow'})
    .to(glitch, 0.02, {scaleY:1.1,ease: Power4.easeInOut})
    .to(glitch, 0.04, {scaleY:1,ease: Power4.easeInOut})
    .to(top, 0.02, {x:-20})
    .to(top, 0.04, {x:0})
    .to(glitch, 0.08, { className: '+=redShadow'},'split');

  // End of glitch effect

})
