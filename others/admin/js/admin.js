$(document).ready(function() {
$('#register_record').DataTable();
} );



$(document).on("change", "#landing_page", function () {

 var landing_page = $(this).val();
 //alert(landing_page);

 $.ajax({
     type : "POST",  //type of method
     url  : "get_form.php",  //your page
     data : { landing_page : landing_page},// passing the values
     success: function(result){
       document.getElementById("form_name").innerHTML=result;
     }
   });

});
