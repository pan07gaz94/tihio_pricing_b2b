// $(".hover").mouseleave(
//     function () {
//       $(this).removeClass("hover");
//     }
//   );


$( window ).resize(function() {
    var windowHeight = $( window ).height();
$("body").css('height',windowHeight+"px")
})