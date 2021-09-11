$("document").ready(function () {
  $(":button").click(function () {
    var c = $(this).text();
    $("#box").css("color", c);
  });
});
