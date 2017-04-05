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

  initValues();
  $(window).resize(function() {
    initValues();
  }); 

  $(window).scroll(function() {
    if (isDesktop() && enableFixed()) {  
      if ($(window).scrollTop() > topScroll && $(window).scrollTop() < bottomScroll) {
        nav_drawer.addClass("navigation-drawer-fixed");
        nav_drawer.removeClass("navigation-drawer-fixed-bottom");
        nav_drawer.css("width",nav_drawer_width);
        $(".col-5-triple").css("margin-left",nav_drawer_width + 20);
      } else if ($(window).scrollTop() > bottomScroll) {
        nav_drawer.removeClass("navigation-drawer-fixed");
        nav_drawer.addClass("navigation-drawer-fixed-bottom");
        $(".col-5-triple").css("margin-left",nav_drawer_width + 20);
        nav_drawer.parent().css("position","relative");
      } else {
        removeAll();
      }
    } else { 
      removeAll();
    }
  });

  function initValues() {
    nav_drawer = $("aside.navigation-drawer");
    nav_drawer_width = nav_drawer.outerWidth() - 1;
    topScroll = $(".card-cols").position().top + 20;
    bottomScroll = $(".card-cols").position().top + $(".card-cols").height() - nav_drawer.outerHeight() - 40;
  }

  function removeAll() {
    nav_drawer.removeClass("navigation-drawer-fixed-bottom");
    nav_drawer.removeClass ("navigation-drawer-fixed");
    $(".col-5-triple").css("margin-left","0");
  }

  function isDesktop() {
    return $(".navigation-drawer-button").css("display") == "none";
  }

  function enableFixed() {
    return nav_drawer.height() < $(".card-cols").height() - $(".breadcrumb").outerHeight() - 60;
  }
});

