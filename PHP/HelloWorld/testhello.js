$(document).ready(function(){

    var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

    $("#submit").click (function() {

        if ($('#fname').val() == '') {
            $('#fn_status').html("<font color='red'>" +"please enter your first name</font>");
        }
        else{
            $('#regform').attr('action', 'index.php');
        }     
});

});