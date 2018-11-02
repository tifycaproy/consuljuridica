$(document).ready(function(){
  $(".nav-item").click(function(){
    $("#"+$(this)[0].id).addClass("active");
  });
});
