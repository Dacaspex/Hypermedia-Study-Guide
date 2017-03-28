$( document ).ready(function() {

  var $wizard = $(".preferences-wizard");
  var $skipButton = $wizard.children(".wizard-bottom").children(".wizard-skip");
  var $wizardOptionParent = $wizard.find(".wizard-option").parent();
  var preferences = [];
  var $saveButton = $wizard.find(".wizard-save").children("div");

  $wizardOptionParent.on("click", ".js-option", function(){checkOption($(this))});
  $saveButton.on("click", function(){postData(preferences)});

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
  }

  function postData(data){
    var formData = new FormData();
    for(var key in data){
      formData.append(key, data[key]);
    }
    var request = new XMLHttpRequest();
    request.open("POST", "/lang");
    request.send(formData);
  }

});
