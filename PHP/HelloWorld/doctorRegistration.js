$(document).ready(function(){

    var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

    $("#submit").click (function() {
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var email = $('#email').val();
        var pswd = $('#password').val();
        if( ($('#status').html().indexOf(email)>-1) || ($('#status').html().indexOf('Please enter email ID in correct format')>-1) )
        $('#estatus').val($('#status').html());
        var confrmPswd = $('#confirm_password').val();

      if((fname!='') && (lname!='') && (email!='') && (pswd!='') && (confrmPswd!=''))
      {
        if ( (pswd.length >= 8) && ($('#estatus').val()=='') && (pswd.match(/\d/)) && (pswd.match(/[a-z]/)) && (pswd.match(/[A-Z]/)) ) {
            if (pswd==confrmPswd) {
              $('#regform').attr('action', 'index.php');
            }
        }
      }
});

    $("input.text").keyup(function(){
        if($('#fname').val()!='')
          $('#fn_status').html('');
        if($('#fn_status').html()=='')
        {
              $("#fname").removeClass('object_error');
              $("#fname").addClass("object_ok");
        }
        if($('#lname').val()!='')
          $('#ln_status').html('');
        if($('#ln_status').html()=='')
        {
              $("#lname").removeClass('object_error');
              $("#lname").addClass("object_ok");
        }
        if($('#email').val()!=''){
          if( ($('#status').html().indexOf($('#email').val())==-1) && ($('#status').html().indexOf('Please enter email ID in correct format')==-1) )
          $('#status').html('');
        }
        if($('#status').html()=='')
        {
              $("#email").removeClass('object_error');
              $("#email").addClass("object_ok");
        }
        if($('#password').val()!='')
          $('#pw_status').html('');
        if($('#pw_status').html()=='')
        {
              $("#password").removeClass('object_error');
              $("#password").addClass("object_ok");
        }
        if($('#confirm_password').val()!='')
          $('#cpw_status').html('');
        if($('#pw_status').html()=='')
        {
          $("#confirm_password").removeClass('object_error');
          $("#confirm_password").addClass("object_ok");
        }
});


    $('input[type=password]').keyup(function() {
    // keyup code here
    // set password variable
    var pswd = $(this).val();
//validate length
if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
} else {
    $('#length').removeClass('invalid').addClass('valid');
}
//validate letter
if ( pswd.match(/[a-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}
}).focus(function() {
    $('#pswd_info').show();
}).blur(function() {
    $('#pswd_info').hide();
}); 

pic1 = new Image(16, 16);
pic1.src="images/ajax-loader.gif";
$("#email").change(function() {
   var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
   var usr = $("#email").val();
   var $email = $('#email');
   var patrn = pattern.test($email);
      if(usr.match(pattern)) {
           $("#status").html("<img src='images/ajax-loader.gif' align='absmiddle'>&nbsp;Checking availability...");
              $.ajax({ 
              type: "POST", 
              url: "check.php",
              data: "email="+ usr,
          }).done(function(data){
              if(data == 'OK') {
                  $("#email").removeClass('object_error'); // if necessary
                  $("#email").addClass("object_ok");
                  $("#status").html("&nbsp;<img src='images/valid.png' align='absmiddle'>");
              } 
              else { 

                  $("#email").removeClass('object_ok'); // if necessary
                  $("#email").addClass("object_error");
                  $("#status").html('<font color=red>The email <strong>'+usr+'</strong> already exists.</font>');
              } 
             });
      }
      else {
            $("#status").html('<font color="red">' +'Please enter email ID in correct format</font>');
            $("#email").removeClass('object_ok'); // if necessary
            $("#email").addClass("object_error");  
      }
 });


});