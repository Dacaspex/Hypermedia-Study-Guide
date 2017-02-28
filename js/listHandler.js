$( document ).ready(function() {

  $("div.expandable-list-body").each( function() {

    var $this = $(this);
    var expanded = false;
    var animationSpeed = 200;
    var closedHeight = $this.attr("closed-height");
    var $bar = $this.parent().children(".expandable-list-bar");
    var $button = $bar.children(".expandable-list-button");
    var $icon = $button.children("i");
    var $menu = $this.parent().children(".carousel-menu");

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
        $bar.css("box-shadow", "none");
        var newHeight = $this.find(".focus-content").height();
        $this.animate({
          height: newHeight
        }, animationSpeed);
        $icon.css("transform", "rotate(180deg)");
      } else{
        $bar.css("box-shadow", "");
        $this.animate({
          height: closedHeight
        }, animationSpeed);
        $icon.css("transform", "rotate(0deg)");
      }
    }

  });

});
