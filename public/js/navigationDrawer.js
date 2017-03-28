$( document ).ready(function() {

  $("div.js-navigation-drawer-button").each( function() {

    var $this = $(this);
    var expanded = false;
    var animationSpeed = 200;
    var $drawer = $("#"+$this.attr("drawer-id"));
    var $background = $(".navigation-drawer-bg");
    var alignProperty = $drawer.attr("align-property");
    var closedValue = $drawer.attr("align-value");

    $this.click( function() {
      if($drawer.hasClass("js-drawer-open")){
        expanded = false;
      } else{
        expanded = true;
      }
      //expanded = !expanded;
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
