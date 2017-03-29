$( document ).ready(function() {

  $(".js-navigation-drawer-button").each( function() {

    var $this = $(this);
    var animationSpeed = 200;
    var $drawer = $("#"+$this.attr("drawer-id"));
    $drawer.data('expanded', false);
    var $background = $(".navigation-drawer-bg");
    var alignProperty = $drawer.attr("align-property");
    var closedValue = $drawer.attr("align-value");
    var animationTimeout = null;

    var $brand = $(".js-header").children(".js-product").children("div");

    $this.click( function() {
      if($drawer.hasClass("js-drawer-open")){
        $drawer.data('expanded', false);
      } else{
        $drawer.data('expanded', true);
      }
      updateDrawer();
    });

    $drawer.on(("swipe" + alignProperty), function(){
      $drawer.data('expanded', false);
      updateDrawer();
    });

    $background.click( function() {
      $drawer.data('expanded', false);
      updateDrawer();
    });

    function updateDrawer(){
      if($drawer.data('expanded')){
        if (animationTimeout !== null) {
          clearInterval(animationTimeout);
        }
        $brand.css("z-index", "1");
        $drawer.addClass("js-drawer-open");
        var anim = {};
        anim[alignProperty] = "0px";
        $drawer.animate(anim, animationSpeed);
        $("html,body").css("overflow", "hidden");
        $background.addClass("active");
      } else{
        $brand.css("z-index", "");
        $drawer.removeClass("js-drawer-open");
        var anim = {};
        anim[alignProperty] = closedValue;
        $drawer.animate(anim, animationSpeed);
        $("html,body").css("overflow", "");
        $background.removeClass("active");
      }
    }

  });

});
