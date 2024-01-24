// récupère le fichier fichier.html puis exécute la fonction
$.get(
    "ajax.html",
    {id:1},
    function(data){
    alert(data);
    });
    

$('.log').ajaxStart(function() {$(this).append('Start.');});
$('.log').ajaxSend(function() {$(this).append('Send.');});
$('.log').ajaxComplete(function() {$(this).append('Complete.');});
$('.log').ajaxStop(function() {$(this).append('Stop.');});
$('.log').ajaxSuccess(function() {$(this).append('Success.');});

$('.trigger').click(function() {
$('.result').load('fichier.json');
});
