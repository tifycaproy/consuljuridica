$(document).ready(function(){


$("#"+$("#mostra_vista").val()).addClass("active");

$("#enlace, #enlaceup").keyup(function(){
  $("#imagen,#imagenup").attr("required",false);
  $("#enlace,#enlaceup").attr("required",true);
});

// alert($("#imagenup").attr("value"));
if($("#imagenup").attr("value")){
  $(".existente,.quitarexistente").show();
  $(".no-existente").hide();
  $("#imagenup").attr("required",false);
  $("#enlaceup").attr("required",false);
}
else{
  if($("#enlaceup").val()){
    $("#enlaceup").attr("required",true);
    $("#imagenup").attr("required",false);
  }
}

$("#imagen,#imagenup,.existente").click(function(){
  $("#enlace,#enlaceup").val("");
  $("#enlace,#enlaceup").attr("required",false);
  $("#imagen").attr("required",true);
});
$(".quitarexistente").click(function(){
  $("#imagenup").attr("value",false);
  $("#imagenup").attr("href",false);
  $("#preview-file").attr("src","https://www.consuljuridica.com/material-dashboard-dark-edition-v2.1.0/assets/img/image_placeholder.jpg");
  $("#imagenup").attr("required",true);
});

$("#publico").prop("checked",false);

$("#publico").click(function(){
  if($("#publico").prop("checked")){
    $("#publicoval").val("1");
  }
  else {
    $("#publicoval").val("0");
  }
});

if($("#checkpublicoup").prop("checked")){
  $("#publicovalup").val("1");
  // alert(  $("#publicovalup").val());
}
else {
  $("#publicovalup").val("0");
  // alert(  $("#publicovalup").val());
}

$("#publicoup").click(function(){
  if($("#checkpublicoup").prop("checked")){
    $("#publicovalup").val("1");
    // alert(  $("#publicovalup").val());
  }
  else {
    $("#publicovalup").val("0");
    // alert(  $("#publicovalup").val());
  }
});
// Remove a few plugins from the default setup.
// ClassicEditor
//     .create( document.querySelector( '#editor' ), {
//       language: 'es',
//         removePlugins: [ 'Heading', 'Link' ],
//         toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote','|', 'undo', 'redo' ]
//     } )
//     .catch( error => {
//         console.log( error );
//     } );
// ClassicEditor
//     .create( document.querySelector( '#editor2' ), {
//       language: 'es',
//         removePlugins: [ 'Heading', 'Link' ],
//         toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote','|', 'undo', 'redo' ]
//     } )
//     .catch( error => {
//         console.log( error );
//     } );
});
