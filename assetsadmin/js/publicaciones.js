$(function(){
    var palabras = 1;
   $("#publicar").on('keyup', function(){
       console.log($(this).val().length);
       $("#palabras").text($(this).val().length);
   });
});