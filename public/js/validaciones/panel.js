$(document).ready(function(){


$("#"+$("#mostra_vista").val()).addClass("active");

if($("#publico").attr("checked",true)){
  $("#publicoval").val("1");
}
else {
    $("#publicoval").val("0");
}


$("#enlace").keyup(function(){
  $("#imagen").attr("required",false);
  $("#enlace").attr("required",true);
});

$("#imagen").click(function(){
  $("#enlace").val("");
  $("#enlace").attr("required",false);
  $("#imagen").attr("required",true);
});

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
