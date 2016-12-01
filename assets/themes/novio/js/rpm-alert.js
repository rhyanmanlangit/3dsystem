$(document).ready (function(){
    $(".closeE").click(function showAlert() {
	       $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
	       $("#danger-alert").slideUp(500);
        });   
    });

    $(".closeS").click(function showAlert() {
	       $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
	       $("#success-alert").slideUp(500);
        });   
    });
 });