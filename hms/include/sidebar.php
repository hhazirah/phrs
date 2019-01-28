<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">

<nav>
						
						<!-- start: MAIN NAVIGATION MENU -->
								<style>
				#clock {
   text-align: center;

   font-size: 13px;

}
				</style>
				
				
				<div id="para1" class="text-center" >	
				</div>
				<div id="clock">

</div>	


				<script>
				
				
document.getElementById("para1").innerHTML = formatAMPM();

function formatAMPM() {
var d = new Date(),
    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    ampm = d.getHours() >= 12 ? 'pm' : 'am',
    months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
return days[d.getDay()]+'  '+d.getDate()+' '+months[d.getMonth()]+' '+d.getFullYear()+' ' ;
}
</script>
<script>
function clock(){

//Save the times in variables

var today = new Date();

var hours = today.getHours();
var minutes = today.getMinutes();
var seconds = today.getSeconds();


//Set the AM or PM time

if (hours >= 12){
  meridiem = " PM";
}
else {
  meridiem = " AM";
}


//convert hours to 12 hour format and put 0 in front
if (hours>12){
	hours = hours - 12;
}
else if (hours===0){
	hours = 12;	
}

//Put 0 in front of single digit minutes and seconds

if (minutes<10){
	minutes = "0" + minutes;
}
else {
	minutes = minutes;
}

if (seconds<10){
	seconds = "0" + seconds;
}
else {
	seconds = seconds;
}


document.getElementById("clock").innerHTML = (hours + ":" + minutes + ":" + seconds + meridiem);
}
setInterval('clock()', 1000);
</script>

						<div class="navbar-title">
							<span><center>Main Navigation</center></span>
						</div>

						<ul class="main-navigation-menu">
							<li>
								<a href="dashboard.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>

							<li>
								<a href="view-record.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-file"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Health Record </span>
										</div>
									</div>
								</a>
							</li>

							<!--<li>
								<a href="book-appointment.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-pencil-alt"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Book Appointment </span>
										</div>
									</div>
								</a>
							</li>-->

							<li>
								<a href="appointment-history.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-list"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Appointment History </span>
										</div>
									</div>
								</a>
							</li>


						</ul>
						<!-- end: CORE FEATURES -->
						
					</nav>
					</div>
			</div>