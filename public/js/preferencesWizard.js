$( document ).ready(function() {

  var $wizard = $(".preferences-wizard");
  var $skipButton = $wizard.children(".wizard-bottom").children(".wizard-skip");
  var $wizardOptionParent = $wizard.find(".wizard-option").parent();
  var preferences = [];

  $wizardOptionParent.on("click", ".js-option", function(){checkOption($(this))});
  $wizardOptionParent.on("click", "li", function(){checkOption($(this))});

  function checkOption($option) {
    $option.parent().children(".active").removeClass("active");
    $option.addClass("active");
    var value = $option.attr("pref-val");
    if(value == undefined){
      value = $option.html();
    }
    var type = $option.parent().attr("pref-type");
    if(type == undefined){
      console.log("No type set for preferenceswizard");
      return;
    }
    preferences[type] = value;
    nextOption();
  }

  function nextOption() {
    if($wizardOptionParent.children(".focus-content").next().position() == undefined){
      postData(preferences);
    }
    $wizard.trigger('swipeleft');
  }

  $skipButton.click(function(){
    nextOption();
  });

  function postData(data){
    var formData = new FormData();
    for(var key in data){
      formData.append(key, data[key]);
    }
    var request = new XMLHttpRequest();
    request.open("GET", "?");
    request.send(formData);
  }

});
