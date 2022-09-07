<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
<script src="fullcalendar/lib/jquery.min.js"></script>
<script src="fullcalendar/lib/moment.min.js"></script>
<script src="fullcalendar/fullcalendar.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cookie&family=Prata&display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;1,500&display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Allura&family=Josefin+Sans:ital,wght@1,300&display=swap"/>
  <link rel="stylesheet" href="AdminEvent.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<style>
	#calendar {
    width: 800px;
	margin-right: auto;
background: linear-gradient(#bcbcbc, #9198e5);}

.response {
    height: 60px;
	margin-left:auto;
	margin-right: auto;
}
	</style>
<script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD");

                $.ajax({
                    url: 'add-event.php',
                    data: 'title=' + title + '&start=' + start + '&end=' + end,
                    type: "POST",
                    success: function (data) {
                        displayMessage("Added Successfully");
                    }
                });
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true
                        );
            }
            calendar.fullCalendar('unselect');
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                    $.ajax({
                        url: 'edit-event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: "delete-event.php",
                    data: "&id=" + event.id,
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            displayMessage("Deleted Successfully");
                        }
                    }
                });
            }
        }

    });
});

function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script>

</head>
<body>
	<div class="dropdwn">
	
	<nav>
		<img class="logo" src="img/logo.png" alt="">
	
		 <ul>
			 <li><a href="AdminHome.php">Home</a></li>
			 <li><a style="background: #F7F7F7" href="AdminEvent.php">Event</a></li>
			 <li><a href="UserList.php">User</a></li>
			 
			 <li><a href="#">Hall <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="AdminHallBooking.php" style="background-color:white;">Booking List</a></li>
			 <li><a href="HallList.php" style="background-color:white;">Hall List</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#">Court <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="AdminCourtBooking.php" style="background-color:white;">Booking List</a></li>
			 <li><a href="CourtList.php" style="background-color:white;">Hall List</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#">Charity <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="CharityDonater.php" style="background-color:white;">Donater</a></li>
			 <li><a href="CharityTotal.php" style="background-color:white;">Total Amount</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="#">Foodbank <i class="fas fa-caret-down"></i></a>
			 <ul>
			 <li><a href="FoodbankDonater.php" style="background-color:white;">Donater</a></li>
			 <li><a href="ProductAmount.php" style="background-color:white;">Total Amount</a></li>
			 <li><a href="ProductList.php" style="background-color:white;">Products List</a></li>
			 </ul>
			 </li>
			 
			 <li><a href="AdminFeedback.php">Feedback</a></li>	
			 <li><a href="LoginAdmin.php">Sign Out</a></li>

		</ul>
		</nav>
	</div>
    <div class="response"></div>
    <div id='calendar'></div>
	
		<section class="footer">
		<div class="icons">
			<a href="https://www.facebook.com/wak.jas.792/" target="_blank" class="fab fa-facebook"></a>
			<a href="https://www.instagram.com/jasnihusaini/" target="_blank" class="fab fa-instagram"></a>	
			<p style="color:#BCBCBC; font-family: 'Ubuntu'; font-size: 12px">Artwork by Jasni Husaini | Powered by Dreamweaver</p>
		</div>	
	
	</section>
</body>


</html>