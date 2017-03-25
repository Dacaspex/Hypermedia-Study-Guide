$( document ).ready(function() {

  $("div.js-expandable-list-body").each( function() {

    var $this = $(this);
    var expanded = false;
    var animationSpeed = 200;
    var closedHeight = $this.attr("closed-height");
    var $bar = $this.parent().children(".js-expandable-list-bar");
    var $button = $bar.children(".js-expandable-list-button");
    var $icon = $button.children("i");
    var $menu = $this.parent().children(".js-carousel-menu");

    $this.css("height", closedHeight);

    $button.click( function() {
      expanded = !expanded;
      updateList();
    });

    $this.on("swipe", function() {
      setTimeout(updateList, 100);
    });

    $menu.on("click", "div", function() {
      setTimeout(updateList, 100);
    });

    function updateList(){
      if(expanded){
        $this.addClass("study-list-open");
        $bar.css("box-shadow", "none");
        var newHeight = $this.find(".focus-content").height();
        $this.animate({
          height: newHeight
        }, animationSpeed);
        $icon.css("transform", "rotate(180deg)");
      } else{
        $this.removeClass("study-list-open");
        $bar.css("box-shadow", "");
        $this.animate({
          height: closedHeight
        }, animationSpeed);
        $icon.css("transform", "rotate(0deg)");
      }
    }

  });

});
