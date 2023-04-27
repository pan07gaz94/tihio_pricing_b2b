// $(".hover").mouseleave(
//     function () {
//       $(this).removeClass("hover");
//     }
//   );


// $( window ).resize(function() {
//     var windowHeight = $( window ).height();
// $("body").css('height',windowHeight+"px")
// })


$(document).ready(function() {
  var currentUrl = window.location.href;
  var hasVParam = currentUrl.indexOf('?v=') !== -1;
  var vParamSet = localStorage.getItem('vParamSet');
  if (!hasVParam && !vParamSet) {
    var updatedUrl = currentUrl + '?v=' + Math.floor(Math.random() * 1000000) + 1;
    localStorage.setItem('vParamSet', true);
    window.location.href = updatedUrl;
  } else if (hasVParam && !vParamSet) {
    var vParamValue = parseInt(currentUrl.substring(currentUrl.indexOf('?v=') + 3));
    if (!isNaN(vParamValue)) {
      var newVParamValue = vParamValue + Math.floor(Math.random() * 1000000) + 1;
      var updatedUrl = currentUrl.replace('?v=' + vParamValue, '?v=' + newVParamValue);
      localStorage.setItem('vParamSet', true);
      window.location.href = updatedUrl;
    }
  } else {
    localStorage.removeItem('vParamSet');
  }
});


$(".preview-img").on("click", function () {



  if ($(this).hasClass('modalOpen')) {

    $(this).removeClass('modalOpen')
    $(this).css('width', '20%')
    var parent = $(this).parent()
    var childForHide = parent.find('.widget-body-parent')
    parent.css('height', '150px')
    childForHide.show()

  }
  else {
    $(this).addClass('modalOpen')
    $(this).css('width', '100%')
    var parent = $(this).parent()
    var childForHide = parent.find('.widget-body-parent')
    parent.css('height', '385px')
    childForHide.hide()
  }

});