$( document ).ready(function() {

  $(".js-carousel").each( function() {

    var $this = $(this);
    var animationSpeed = 200;
    var clickableMenu = ($this.attr("clickable-menu") == 'true');
    var menuAnimation = ($this.attr("menu-animation") == 'true');
    var $slide = $this.find(".js-carousel-slide");
    var $inner = $this.find(".js-carousel-inner");
    var $menu = $this.find(".js-carousel-menu");
    var $curElement = $inner.children(":first-child");
    var $curMenuElement = $menu.children(":first-child");

    $curElement.addClass("focus-content");

    if(clickableMenu){
      $menu.on("click", "div", function() {
        var index = $(this).index();

        $curElement.removeClass("focus-content");
        $curElement = $inner.children(":nth-child("+(index+1)+")");
        $curElement.addClass("focus-content");

        $slide.animate({
            scrollLeft: $curElement.position().left + $slide.scrollLeft()
        }, animationSpeed);
        var prevIndex = $curMenuElement.index();
        if((index-prevIndex) > 0){
          menuAnimationRight($curMenuElement, $(this));
        } else if((index-prevIndex) < 0){
          menuAnimationLeft($curMenuElement, $(this));
        }
        $curMenuElement = $(this);
      });
    }

    $this.on("swipeleft", function(){
      //Skip if next element is outside of bounds
      if($curElement.next().position() == undefined){
        return;
      }
      $curElement.removeClass("focus-content");
      $curElement = $curElement.next();
      $curElement.addClass("focus-content");

      menuAnimationRight($curMenuElement, $curMenuElement.next());
      $curMenuElement = $curMenuElement.next();

      $slide.animate({
          scrollLeft: $curElement.position().left + $slide.scrollLeft()
      }, animationSpeed);
    });

    $this.on("swiperight", function(){
      //Skip if next element is outside of bounds
      if($curElement.prev().position() == undefined){
        return;
      }
      $curElement.removeClass("focus-content");
      $curElement = $curElement.prev();
      $curElement.addClass("focus-content");

      menuAnimationLeft($curMenuElement, $curMenuElement.prev());
      $curMenuElement = $curMenuElement.prev();

      $slide.animate({
          scrollLeft: $curElement.position().left + $slide.scrollLeft()
      }, animationSpeed);
    });

    function menuAnimationLeft($from, $to){
      if(menuAnimation){
        $from.children("div").animate({
          width: '0%'
        }, animationSpeed, function(){
          $from.toggleClass("active inactive");
          $from.children("div").css("width",  "100%");
        });
        $to.toggleClass("inactive active");
      } else{
        $from.toggleClass("active inactive");
        $to.toggleClass("inactive active");
      }
    }

    function menuAnimationRight($from, $to){
      if(menuAnimation){
        $from.children("div").css("float", "right");
        $from.children("div").animate({
          width: '0%'
        }, animationSpeed, function(){
          $from.toggleClass("active inactive");
          $from.children("div").css("width",  "100%");
          $from.children("div").css("float", "none");
        });
        $to.toggleClass("inactive active");
      } else{
        $from.toggleClass("active inactive");
        $to.toggleClass("inactive active");
      }
    }

  });
});
