        <html lang="en">
        <head>
          <meta charset="utf-8">
          <title>jQuery UI Datepicker - Default functionality</title>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
          <script src="//code.jquery.com/jquery-1.10.2.js"></script>
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
          <link rel="stylesheet" href="/resources/demos/style.css">
          <script>
            $(function() {

              function clearAppointment() {
                if(!$('#col1').is(':disabled'))
                  $('#col1').css('background-color','green');
                if(!$('#col2').is(':disabled'))
                  $('#col2').css('background-color','green');
                if(!$('#col3').is(':disabled'))
                  $('#col3').css('background-color','green');
                if(!$('#col4').is(':disabled'))
                  $('#col4').css('background-color','green');
                if(!$('#col5').is(':disabled'))
                  $('#col5').css('background-color','green');
                if(!$('#col6').is(':disabled'))
                  $('#col6').css('background-color','green');
                if(!$('#col7').is(':disabled'))
                  $('#col7').css('background-color','green');
                if(!$('#col8').is(':disabled'))
                  $('#col8').css('background-color','green');

              }
              function wishDisable() {
                if(!$('#Appointment-1').is(':disabled'))
                  $('#Appointment-1').css('background-color','lightblue');
                if(!$('#Appointment-2').is(':disabled'))
                  $('#Appointment-2').css('background-color','lightblue');
                if(!$('#Appointment-3').is(':disabled'))
                  $('#Appointment-3').css('background-color','lightblue');
                if(!$('#Appointment-4').is(':disabled'))
                  $('#Appointment-4').css('background-color','lightblue');
                if(!$('#Appointment-5').is(':disabled'))
                  $('#Appointment-5').css('background-color','lightblue');
                if(!$('#Appointment-6').is(':disabled'))
                  $('#Appointment-6').css('background-color','lightblue');
                if(!$('#Appointment-7').is(':disabled'))
                  $('#Appointment-7').css('background-color','lightblue');
                if(!$('#Appointment-8').is(':disabled'))
                  $('#Appointment-8').css('background-color','lightblue');
              }

              $('#datepicker').datepicker();
              $('input.col').click(function() {
                clearAppointment();
                $(this).css('background-color','grey');               
                $('#selectBtnId').val(this.id);
                $('#msg').html('Appointment Selected, Hit Submit to confirm !');  
              });
              $('input.wish').click(function() {
                wishDisable();
                $(this).css('background-color','grey');               
                $('#wishBtnId').val(this.id); 
                $('#msg').html('Hit Submit to Add this schedule to your WishList !');
              });
              $('#clear').click(function() {
                $('#selectBtnId').val('');
                $('#wishBtnId').val('');
                $('#datepicker').val('');
                $('#msg').html('Select a Date and Hit Submit !');
                $('#col1').prop('disabled',true);
                $('#col1').css('background-color','white');
                $('#col2').prop('disabled',true);
                $('#col2').css('background-color','white');
                $('#col3').prop('disabled',true);
                $('#col3').css('background-color','white');
                $('#col4').prop('disabled',true);
                $('#col4').css('background-color','white');
                $('#col5').prop('disabled',true);
                $('#col5').css('background-color','white');
                $('#col6').prop('disabled',true);
                $('#col6').css('background-color','white');
                $('#col7').prop('disabled',true);
                $('#col7').css('background-color','white');
                $('#col8').prop('disabled',true);
                $('#col8').css('background-color','white');
                $('#Appointment-1').prop('disabled',true);
                $('#Appointment-1').css('background-color','white');
                $('#Appointment-2').prop('disabled',true);
                $('#Appointment-2').css('background-color','white');
                $('#Appointment-3').prop('disabled',true);
                $('#Appointment-3').css('background-color','white');
                $('#Appointment-4').prop('disabled',true);
                $('#Appointment-4').css('background-color','white');
                $('#Appointment-5').prop('disabled',true);
                $('#Appointment-5').css('background-color','white');
                $('#Appointment-6').prop('disabled',true);
                $('#Appointment-6').css('background-color','white');
                $('#Appointment-7').prop('disabled',true);
                $('#Appointment-7').css('background-color','white');
                $('#Appointment-8').prop('disabled',true);
                $('#Appointment-8').css('background-color','white');
              });
              $('#cancel').click(function() {
                if($('#bookedBtnId').val()!="") {
                  $('#'+$('#bookedBtnId').val()).prop('disabled',false);
                  $('#'+$('#bookedBtnId').val()).css('background-color','green'); 
                  $('#'+$('#bookedBtnId').val()).val('Select');  
                  $('#msg').html('Hit Sumit to confirm the cancellation!');
                  $('#cancelBtnSelected').val('selected');
                }
                else {
                  $('#msg').html('You have no current booking this date!');
                }
              });

            });

      </script>
    </head>
    <body>
      <center><h1>Welcome to Dr.Dre's Page </h1> </center>
      <h2>We assist all weekdays</h2> 
      <p>Pick an appointment</p><br>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Select a date : <input type="text" id="datepicker"  onclick="$('#selectBtnId').val('');" name="date"/>
        <input type="hidden" id="selectBtnId" name="selectBtnId"/></td></tr>
        <input type="hidden" id="wishBtnId" name="wishBtnId"/></td></tr>
        <input type="hidden" id="bookedBtnId" name="bookedBtnId"/></td></tr>
        <input type="hidden" id="cancelBtnSelected" name="cancelBtnSelected"/></td></tr>
        <input type="submit" id="submit" value="Submit"/>
        <input type="button" id="clear" value="Clear Selection"/>
        <input type="button" id="cancel" value="Cancel Current Booking"/>

      </form>
      <table border="1" style="width:25%; border: 1px solid black;">
        <tr style="border: 1px solid black;">
          <td style="width:200px;">10:00 AM to 11:00 AM</td> <!--Need to change the css properly -->
          <td style="width:100px;"><input type="button" class="col" id="col1" disabled value="Select" style="width:100%;"> </td> <!--Need to change the css properly -->
          <td style="width:100px;"><input type="button" class="wish" id="Appointment-1" disabled value="WishList" style="width:100%;"> </td> <!--Need to change the css properly -->
        </tr>
        <tr>
          <td>11:00 AM to 12:00 PM</td>
          <td><input type="button" class="col" id="col2" disabled value="Select" style="width:100%;"></td> 
          <td><input type="button" class="wish" id="Appointment-2" disabled value="WishList" style="width:100%;"> </td> 
        </tr>
        <tr>
          <td>12:00 PM to 01:00 PM</td>
          <td><input type="button" class="col" id="col3" disabled value="Select" style="width:100%;"> </td> 
          <td><input type="button" class="wish" id="Appointment-3" disabled value="WishList" style="width:100%;"> </td> 
        </tr>
        <tr>
          <td>02:00 PM to 03:00 PM</td>
          <td><input type="button" class="col" id="col4" disabled value="Select" style="width:100%;"> </td> 
          <td><input type="button" class="wish" id="Appointment-4" disabled value="WishList" style="width:100%;"> </td> 
        </tr>
        <tr>
          <td>03:00 PM to 04:00 PM</td>
          <td><input type="button" class="col" id="col5" disabled value="Select" style="width:100%;"> </td> 
          <td><input type="button" class="wish" id="Appointment-5" disabled value="WishList" style="width:100%;"> </td> 
        </tr>
        <tr>
          <td>04:00 PM to 05:00 PM</td>
          <td><input type="button" class="col" id="col6" disabled value="Select" style="width:100%;"> </td> 
          <td><input type="button" class="wish" id="Appointment-6" disabled value="WishList" style="width:100%;"> </td> 
        </tr>
        <tr>
          <td>05:00 PM to 06:00 PM</td>
          <td><input type="button" class="col" id="col7" disabled value="Select" style="width:100%;"> </td> 
          <td><input type="button" class="wish" id="Appointment-7" disabled value="WishList" style="width:100%;"> </td> 
        </tr>
        <tr>
          <td>06:00 PM to 07:00 PM</td>
          <td><input type="button" class="col" id="col8" disabled value="Select" style="width:100%;"> </td> 
          <td><input type="button" class="wish" id="Appointment-8" disabled value="WishList" style="width:100%;"> </td> 
        </tr>
      </table>
      <p id="msg"></p>

      <?php
      $servername = "db4free.net:3306";
      $username = "janabsrinivas";
      $password = "johnatus";
      $dbname = "hibernate_mytest";

        // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $formDate = $_POST["date"];
        $formSelectBtnId = $_POST["selectBtnId"];
        $formWishBtnId = $_POST["wishBtnId"];
        $formbookedBtnId = $_POST["bookedBtnId"];
        $formCancelBtnSelected = $_POST["cancelBtnSelected"];
        echo "<script>
        $(document).ready(function(){
          $('#datepicker').val('".$formDate."');
        });
      </script>";

      $date = DateTime::createFromFormat('m/d/Y',$formDate);
      $sql_date = $date->format("Y-m-d");


      if(!empty($formDate)) {
        if(!empty($formbookedBtnId) && empty($formSelectBtnId) && !empty($formCancelBtnSelected)) {
          $sqlDelete = "DELETE FROM Appointments  WHERE customer_id='1' AND appointment_timing='".$formbookedBtnId."' AND appointment_date = '".$sql_date."'" ;
          if ($conn->query($sqlDelete) !== FALSE) {
            $sqlUpdate = "UPDATE Appointment_Dates SET ".$formbookedBtnId."=0 WHERE date = '".$sql_date."'";
            if ($conn->query($sqlUpdate) !== FALSE) {
              echo "<script>
              $(document).ready(function(){
               $('#msg').html('Appointment Cancelled ! ');
               $('#cancelBtnSelected').val('');
             });
           </script>";
         } 
         else {
          echo "Error updating record: " . $conn->error;
        }
      } 
      else {
        echo "Error updating record: " . $conn->error;
      }
    }
     $sqlAppDateInsert = "INSERT INTO Appointment_Dates(date,col1,col2,col3,col4,col5,col6,col7,col8) VALUES('".$sql_date."',0,0,0,0,0,0,0,0)";
        if ($conn->query($sqlAppDateInsert) !== FALSE) {
          echo "<script>
            $(document).ready(function(){
               $('#msg').html('Date Selected, Hit Submit to see the available appointments! ');
             });
           </script>";
         } 
    $sql = "SELECT date,col1,col2,col3,col4,col5,col6,col7,col8 FROM Appointment_Dates WHERE date = '".$sql_date."'";
    if (($result = $conn->query($sql)) !== FALSE)
    {
      while($row = $result->fetch_assoc()) {
        if($row["col1"]==0) {
          echo "<script>
          $(document).ready(function(){
            $('#col1').prop('disabled',false);
            $('#col1').css('background-color','green');
          });
        </script>";
      }
      else {
        echo "<script>
        $(document).ready(function(){
          $('#Appointment-1').prop('disabled',false);
          $('#Appointment-1').css('background-color','lightblue');
        });
      </script>";
    }
    if($row["col2"]==0) {
      echo "<script>
      $(document).ready(function(){
        $('#col2').prop('disabled',false);
        $('#col2').css('background-color','green');
      });
    </script>";
  }
  else {
    echo "<script>
    $(document).ready(function(){
      $('#Appointment-2').prop('disabled',false);
      $('#Appointment-2').css('background-color','lightblue');

    });
  </script>";
}
if($row["col3"]==0) {
  echo "<script>
  $(document).ready(function(){
    $('#col3').prop('disabled',false);
    $('#col3').css('background-color','green');
  });
</script>";
}
else {
  echo "<script>
  $(document).ready(function(){
    $('#Appointment-3').prop('disabled',false);
    $('#Appointment-3').css('background-color','lightblue');

  });
</script>";}
if($row["col4"]==0) {
  echo "<script>
  $(document).ready(function(){
    $('#col4').prop('disabled',false);
    $('#col4').css('background-color','green');
  });
</script>";
}
else {
  echo "<script>
  $(document).ready(function(){
    $('#Appointment-4').prop('disabled',false);
    $('#Appointment-4').css('background-color','lightblue');

  });
</script>";
}
if($row["col5"]==0) {
  echo "<script>
  $(document).ready(function(){
    $('#col5').prop('disabled',false);
    $('#col5').css('background-color','green');
  });
</script>";
}
else {
  echo "<script>
  $(document).ready(function(){
    $('#Appointment-5').prop('disabled',false);
    $('#Appointment-5').css('background-color','lightblue');
  });
</script>";
}
if($row["col6"]==0) {
  echo "<script>
  $(document).ready(function(){
    $('#col6').prop('disabled',false);
    $('#col6').css('background-color','green');
  });
</script>";
}
else {
  echo "<script>
  $(document).ready(function(){
    $('#Appointment-6').prop('disabled',false);
    $('#Appointment-6').css('background-color','lightblue');

  });
</script>";
}
if($row["col7"]==0) {
  echo "<script>
  $(document).ready(function(){
    $('#col7').prop('disabled',false);
    $('#col7').css('background-color','green');
  });
</script>";
}
else {
  echo "<script>
  $(document).ready(function(){
    $('#Appointment-7').prop('disabled',false);
    $('#Appointment-7').css('background-color','lightblue');
  });
</script>";
}
if($row["col8"]==0) {
  echo "<script>
  $(document).ready(function(){
    $('#col8').prop('disabled',false);
    $('#col8').css('background-color','green');
  });
</script>";
}
else {
  echo "<script>
  $(document).ready(function(){
    $('#Appointment-8').prop('disabled',false);
    $('#Appointment-8').css('background-color','lightblue');
  });
</script>";
}
if( ($row["col1"]==0) && ($row["col2"]==0) && ($row["col3"]==0) && ($row["col4"]==0) && ($row["col5"]==0) && ($row["col6"]==0) && ($row["col7"]==0) && ($row["col8"]==0) ) {
echo "<script>
            $(document).ready(function(){
               $('#msg').html('Select an Appointment Timing ! ');
             });
           </script>";
}
}
}
else {
  echo "query failure";
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sqlSelectAppTime = "SELECT appointment_timing FROM Appointments WHERE customer_id='1' AND appointment_date = '".$sql_date."'";

if (($result = $conn->query($sqlSelectAppTime)) !== FALSE)
{
  while($row = $result->fetch_assoc()) {
    $appTime=trim($row["appointment_timing"]);
    if(!empty($appTime)) {
      echo "<script>
      $(document).ready(function(){
        $('#col1').prop('disabled',true);
        $('#col2').prop('disabled',true);
        $('#col3').prop('disabled',true);
        $('#col4').prop('disabled',true);
        $('#col5').prop('disabled',true);
        $('#col6').prop('disabled',true);
        $('#col7').prop('disabled',true);
        $('#col8').prop('disabled',true);
        $('#".$appTime."').prop('disabled',false);
        $('#".$appTime."').val('Booked');
        $('#".$appTime."').css('background-color','grey');
            if(".$appTime."==col1) {
              $('#Appointment-1').prop('disabled',true);
              $('#Appointment-1').css('background-color','white');
            }
            else if(".$appTime."==col2) {
              $('#Appointment-2').prop('disabled',true);
              $('#Appointment-2').css('background-color','white');
            }
            else if(".$appTime."==col3) {
              $('#Appointment-3').prop('disabled',true);
              $('#Appointment-3').css('background-color','white');
            }
            else if(".$appTime."==col4) {
              $('#Appointment-4').prop('disabled',true);
              $('#Appointment-4').css('background-color','white');
            }
            else if(".$appTime."==col5) {
              $('#Appointment-5').prop('disabled',true);
              $('#Appointment-5').css('background-color','white');
            }
            else if(".$appTime."==col6) {
              $('#Appointment-6').prop('disabled',true);
              $('#Appointment-6').css('background-color','white');
            }
            else if(".$appTime."==col7) {
              $('#Appointment-7').prop('disabled',true);
              $('#Appointment-7').css('background-color','white');
            }
            else if(".$appTime."==col8) {
              $('#Appointment-8').prop('disabled',true);
              $('#Appointment-8').css('background-color','white');
            }
        $('#bookedBtnId').val('".$appTime."');
        $('#msg').html('To change your appointment on this date, cancel your current appointment !');
        $('#selectBtnId').val('');
      });
    </script>";
  }
  else {
    echo "Select an appointment timing and Hit Submit !";
  }
}
}

if(!empty($formSelectBtnId)) {

  $sqlInsert = "INSERT INTO Appointments(customer_id, appointment_date, appointment_timing) VALUES('1','".$sql_date."','".$formSelectBtnId."')";
  if ($conn->query($sqlInsert) !== FALSE) {
    echo "<script>
    $(document).ready(function(){
     $('#msg').html('Appointment Booked. To change your appointment on this date, cancel your current appointment first and then book new one ! ');
     $('#col1').prop('disabled',true);
     $('#col2').prop('disabled',true);
     $('#col3').prop('disabled',true);
     $('#col4').prop('disabled',true);
     $('#col5').prop('disabled',true);
     $('#col6').prop('disabled',true);
     $('#col7').prop('disabled',true);
     $('#col8').prop('disabled',true);
     $('#".$formSelectBtnId."').prop('disabled',false);
     $('#selectBtnId').val('');
   });
 </script>";
} else {
  echo "<script>
  $(document).ready(function(){
   $('#msg').html('You have already booked this appointment timing. To change your appointment on this date, cancel your current appointment first and then book new one ! ');
 });
</script>";
}
if(empty($appTime)) {
  $sqlUpdate = "UPDATE Appointment_Dates SET ".$formSelectBtnId."=1 WHERE date = '".$sql_date."'";
  if ($conn->query($sqlUpdate) !== FALSE) {
    echo "<script>
    $(document).ready(function(){
      $('#selectBtnId').val('');
      $('#".$formSelectBtnId."').val('Booked');
      $('#".$formSelectBtnId."').css('background-color','grey');
      $('#msg').html('Appointment Booked Successfully !');
    });
  </script>";
} else {
  echo "Error updating record: " . $conn->error;
}
}
else {
  "<script>
  $(document).ready(function(){
   $('#msg').html('You already have booked an appointment in this date. Cancel your current appointment before selecting new one on same the date ! ');
 });
</script>";
}
}
  if(!empty($formWishBtnId)) {
      $sqlCheckWL = "SELECT * FROM Wish_List WHERE customer_id='1'  AND appointment_date='".$sql_date."' AND wish_list='".$formWishBtnId."'";
        if (($result = $conn->query($sqlCheckWL)) !== FALSE) {
            if(!empty($result->fetch_assoc())) {
              echo "You have already added this schedule to your wish list !";
            }
            else {
                $sqlInsertWL = "INSERT INTO Wish_List(customer_id,appointment_date,wish_list) VALUES('1','".$sql_date."','".$formWishBtnId."')";
                if (($result = $conn->query($sqlInsertWL)) !== FALSE)
                {
                  echo "<script>
                  $(document).ready(function(){
                    $('#".$formWishBtnId."').prop('disabled',false);
                    $('#".$formWishBtnId."').val('Added');
                    $('#".$formWishBtnId."').css('background-color','grey');
                    $('#wishBtnId').val('');
                  });
                </script>";

              }
            }
        }
        else {
            echo "Error updating record: " . $conn->error;
        }
  }
}

}

$conn->close();
?>
</body>
</html>
