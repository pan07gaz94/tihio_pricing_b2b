// $(".hover").mouseleave(
//     function () {
//       $(this).removeClass("hover");
//     }
//   );


// $( window ).resize(function() {
//     var windowHeight = $( window ).height();
// $("body").css('height',windowHeight+"px")
// })


$( ".preview-img" ).on( "click", function() {

if ($(this).hasClass('modalOpen')) {

  $(this).removeClass('modalOpen')
  $(this).css('width','20%')
var parent = $(this).parent()
var childForHide = parent.find('.widget-body-parent')
parent.css('height','150px')
childForHide.show()

}
else{
  $(this).addClass('modalOpen')
  $(this).css('width','100%')
var parent = $(this).parent()
var childForHide = parent.find('.widget-body-parent')
parent.css('height','385px')
childForHide.hide()
}
  } );