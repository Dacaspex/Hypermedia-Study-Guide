$( document ).ready(function() {

  $(".js-navigation-drawer-button").each( function() {

    var $this = $(this);
    var expanded = false;
    var animationSpeed = 200;
    var $drawer = $("#"+$this.attr("drawer-id"));
    $drawerArray.push($drawer);
    var $background = $(".navigation-drawer-bg");
    var alignProperty = $drawer.attr("align-property");
    var closedValue = $drawer.attr("align-value");

    var $brand = $(".js-header").children(".js-product").children("div");

    $this.click( function() {
      if($drawer.hasClass("js-drawer-open")){
        expanded = false;
      } else{
        expanded = true;
      }
      updateDrawer();
    });

    $drawer.on(("swipe" + alignProperty), function(){
      expanded = false;
      updateDrawer();
    });

    $background.click( function() {
      expanded = false;
      updateDrawer();
    });

    function updateDrawer(){
      if(expanded){
        $brand.css("z-index", "1");
        $drawer.addClass("js-drawer-open");
        var anim = {};
        anim[alignProperty] = "0px";
        $drawer.animate(anim, animationSpeed);
        $("html,body").css("overflow", "hidden");
        $background.css("z-index", "2");
        $background.animate({
          opacity: 0.3
        }, animationSpeed);
      } else{
        $brand.css("z-index", "");
        $drawer.removeClass("js-drawer-open");
        var anim = {};
        anim[alignProperty] = closedValue;
        $drawer.animate(anim, animationSpeed);
        $("html,body").css("overflow", "");
        $background.animate({
          opacity: 0
        }, animationSpeed, function() {
          $background.css("z-index", "-1");
        });
      }
    }

  });

});
