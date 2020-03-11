$(document).ready(function() {
  $('.drawer').drawer();
});

$(".ac dt").on("click", function() {
  $(this).next().slideToggle();
});
