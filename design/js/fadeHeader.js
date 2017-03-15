$( document ).ready(function() {

  var $left = $(".navbar-inner").children(".left");
  var $center = $(".navbar-inner").children(".center");
  var $header = $(".header");
  var $brand = $header.children(".brand");
  var $headerImg = $header.children(".header-image");

  if($brand.length){
    $left.css("color", "rgba(0,0,0,0)");
  }

  $(window).scroll(function() {
    var val = $(window).scrollTop() / $header.height();
    val = Math.min(Math.max(val, 0), 1);
    $headerImg.css("opacity", 1-val/2);
    if($brand.length){
      //Perform animation
      if($( document ).width() > 360){
        $center.css("left", "calc((50% - 50px) * "+val+")");
      } else{
        $center.css("left", "calc((50% - 50px) * "+(val*-1)+")");
      }
      if(val == 1){
        $brand.css("position", "fixed");
        $brand.css("top", (($(".navbar").height()-$brand.outerHeight(false))/2)+"px");
        $brand.css("bottom", "");
        $brand.css("z-index", "4");
        $brand.css("background-color", "rgba(0, 0, 0, 0)");
      } else{
        $brand.css("position", "absolute");
        $brand.css("top", "");
        $brand.css("bottom", "10px");
        $brand.css("z-index", "");
        $brand.css("background-color", "");
      }
    }
  });

});
