$( document ).ready(function() {

  var $left = $(".js-navbar").find(".js-product");
  var $center = $(".js-navbar").find(".js-brand");
  var $header = $(".js-header");
  var $brand = $header.children(".js-product");
  var $headerImg = $header.children(".js-header-image");
  var prevVal;

  if($brand.length){
    $left.css("color", "rgba(0,0,0,0)");
    $center.css("left", "20px");
    $center.css("transform", "translateX(0%)");
  }

  scrollCallback();

  $(window).scroll(scrollCallback);

  function scrollCallback(){
    var val = $(window).scrollTop() / $header.height();
    val = Math.min(Math.max(val, 0), 1);
    if(prevVal === val){
      return;
    }
    prevVal = val;
    $headerImg.css("opacity", 1-val/2);
    if($brand.length){
      //Perform animation
      if($( document ).width() > 360){
        $center.css("left", "calc((50% * "+val+" + "+20*(1-val)+"px)");
        $center.css("transform", "translateX(-" + (50 * val) + "%)");
      } else{
        $center.css("left", "calc((50% * "+(val*-1)+" + 20px)");
        $center.css("transform", "translateX(-" + (50 * val) + "%)");
      }
      if(val == 1){
        $brand.css("position", "fixed");
        $brand.css("top", (($(".navbar").height()-$brand.outerHeight(false))/2)+"px");
        $brand.css("bottom", "");
        $brand.css("z-index", "6");
        $brand.css("background-color", "rgba(0, 0, 0, 0)");
      } else{
        $brand.css("position", "absolute");
        $brand.css("top", "");
        $brand.css("bottom", "10px");
        $brand.css("z-index", "");
        $brand.css("background-color", "");
      }
    }
  }

});
