$(document).ready(function () {
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




  $('.disable').children().off('mouseenter mouseleave');
  $('.disable .title').append("<span class='avalableMessage'> NOT AVAILABLE</span>");

//THIS COMMENT AN EXEI TEXT DIAFORETIKOY MEGE8US ALLA OXI AKRAIA DIAFORA

  // $(document).ready(function() {
  //   var maxHeight = 0;
  //   $('.widget-container').each(function() {
  //     if ($(this).height() > maxHeight) {
  //       maxHeight = $(this).height();
  //     }
  //   });
  //   $('.widget-container').height(maxHeight);
  // });



});


var lastClicked = null; // initialize lastClicked variable
$(".preview-img").on("click", function () {
  // Check if parent has class "disable"
  if ($(this).parent().hasClass('disable')) {
    return; // if parent has "disable" class, do nothing and exit
  }
  // Check if this is the same element as last clicked
  if ($(this)[0] === lastClicked?.[0]) {
    if ($(this).hasClass('modalOpen')) {
      $(this).removeClass('modalOpen')
      $(this).css('width', '20%')
      var parent = $(this).parent()
      var childForHide = parent.find('.widget-body-parent')
      parent.css('height', 'fit-content')
      childForHide.show()
      lastClicked = null; // reset lastClicked
    } else {
      $(this).addClass('modalOpen')
      $(this).css('width', '100%')
      var parent = $(this).parent()
      var childForHide = parent.find('.widget-body-parent')
      parent.css('height', '385px')
      childForHide.hide()
    }
  } else {
    // open the clicked element
    $(this).addClass('modalOpen')
    $(this).css('width', '100%')
    var parent = $(this).parent()
    var childForHide = parent.find('.widget-body-parent')
    parent.css('height', '385px')
    childForHide.hide()

    // close the last clicked element, if any
    if (lastClicked) {
      lastClicked.removeClass('modalOpen')
      lastClicked.css('width', '20%')
      var parent = lastClicked.parent()
      var childForHide = parent.find('.widget-body-parent')
      parent.css('height', 'fit-content')
      childForHide.show()
    }
    lastClicked = $(this); // update lastClicked
  }
});





$(window).on('resize', function() {
  var bodyHeight = $('body').height();
  var bodyWidth = $('body').width();
  $('html').css('--body-height', bodyHeight + 'px');
  $('html').css('--body-width', bodyWidth + 'px');
});
