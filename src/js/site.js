var $ = jQuery;
$(document).ready(function() {

  if($(".tabbed_content_tabs").length) {
    $(".tabbed_content_tab").on("click",function(e) {
      e.preventDefault();
      var h = $(this).attr("href");

      $(this).siblings().removeClass("active");
      $(this).addClass("active");

      $(".tabbed_content_item").removeClass("active");
      $(h).addClass("active");
    });
  }

  $(".tabbed_content_item").on("click",function() {
    var t = "#" + $(this).attr("aria-labelledby");

    $(this).siblings().removeClass("active");
    $(this).addClass("active");

    $(".tabbed_content_tab").removeClass("active");
    $(t).addClass("active");
  });

  $(".project_filters_select").on("change",function() {
    window.location = $(this).val();
  });

});
