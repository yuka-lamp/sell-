$(function() {
    $.fatNav();
});

$(".ac dt").on("click", function() {
  $(this).next().slideToggle();
});
