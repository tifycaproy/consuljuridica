$(document).ready(function(){


$("#"+$("#mostra_vista").val()).addClass("active");

if($("#publico").attr("checked",true)){
  $("#publicoval").val("1");
}
else {
    $("#publicoval").val("0");
}


$("#publico").click(function(){
  // alert($("#publicoval").val());
if($(this).attr("checked",true)){
  $("#publicoval").val("1");
  // alert($("#publicoval").val());
}
else {
  $("#publicoval").val("0");
  // alert($("#publicoval").val());
}
});

});
