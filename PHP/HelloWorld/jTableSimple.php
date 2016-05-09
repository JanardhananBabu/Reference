<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	<script >
			function book(wish_id, date, wish_list, btn) {
					  $.ajax({ 
			              type: "POST", 
			              url: "PersonActions.php?action=book",
			              data: { wish_id: wish_id, date: date, wish_list:wish_list}
			          }).done(function(data,status){
			          	alert(data);
			              	if (data == 'OK') {
			              		$(btn).css('background-color','grey');
			              		$(btn).val('Booked');
				        		$("#msg").html('Appoinment Booked for this Schedule!');
				                return;
				            }
				            else if(data == 'BA'){
				            $("#msg").html('You already have booked an appointment on this date. Please cancel it first before booking another !');	
				            }
				            else if(data == 'NF'){
				            $("#msg").html('This appointment is not free yet !');	
				            }
				        });
 				}
 				
	</script>
  </head>
  <body>
	<div id="PeopleTableContainer" style="width: 600px;"></div>
  	<p id="msg"></p>
	<script type="text/javascript">
		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'WishList Table',
				actions: {
					listAction: 'PersonActions.php?action=list',
					deleteAction: 'PersonActions.php?action=delete'
				},
				fields: {
					wish_id: {
						key: true,
						title: 'Wish ID',
						width: '30%',
						create: false,
						edit: false,
						list: false
					},
					appointment_date: {
						title: 'Appointment Date',
						width: '40%',
						type: 'date',
						create: false,
						edit: false,
					},
					customer_id: {
						create: false,
						edit: false,
						list: false
					},
					wish_list: {
						title: 'Schedule',
						width: '30%',
						create: false,
						edit: false
					},
					book: {
					    title: 'Book',
					    display: function (data) {
					       return '<button type="button" onclick="book('+data.record.wish_id+',\''+data.record.appointment_date+'\',\''+data.record.wish_list+'\',this); return false;">Book</button>';
					    },
					    create: false,
					    edit: false

					}   
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

	</script>
 
  </body>
</html>
