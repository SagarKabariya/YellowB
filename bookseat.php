<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include("headlink.php");	
	include("conn.php");
?>
<style type="text/css">
td {
	border-bottom:thin;
	border-bottom-style:solid;
	border-bottom-color:#333;
	color:#000;
	text-align:center;
}
table
{
	rgba(251, 251, 251, 0.83);
	border:double;
}
tr
{
	height:35px;
	text-align:center;
	border-bottom:thin;
	border-bottom-style:solid;
	border-bottom-color:#333;
}
th {
	text-align:center;
	background-color:#666;
	font-size:16px;
	font-weight:bolder;
}
</style>
</head>
<body>
<?php
		   	include("headmenu.php");
		   ?>
          </div>
          <!-- .row --> 
        </div>
        <!-- .container -->
        <form id="search-form" action="http://demo.curlythemes.com/leisure-html/search.html" class="hidden-xs" method="post">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <input type="text" class="search-field" placeholder="Type something to search  ...">
                <a href="#" class="close-search fa fa-search"></a> </div>
            </div>
          </div>
        </form>
        <!-- #search-form --> 
      </nav>
      <!-- #main-nav -->
      <label class="toggle-nav-label" for="toggle-main-nav"><i class="fa fa-bars fa-lg"></i> Menu</label>
      <label class="toggle-nav-label" for="toggle-secondary-nav"><i class="fa fa-info-circle fa-lg"></i> Services</label>
    </div>
    <!-- .header-row -->
    
    <div style="margin-left:250px; margin-top:50px; font-family:Arial, Helvetica, sans-serif; width:860px;">
    
      <div>
          
          <?php
		  	session_start();
			$rid=$_SESSION["rid"];
			$bdt=$_SESSION["bkd"];
			if(isset($_SESSION["confirm"]))
			{
			$totamount=0;			  
			  $nos=$_SESSION['noseat'];
			  $bt=$_SESSION['bustype'];
			  $totamount=$nos*$_SESSION['fare'];
			   echo "<div style='background-color:#FFF; border-bottom:thick; border-bottom-style:double; width:730;';>			
			<table width='723' height='173' align='center'>
			  <tr>
				<td width='185' height='73' rowspan='2'><img src='images/kk.png' alt='' width='185' height='30' /></td>
				<td colspan='3' rowspan='2'>YellowB Bus Service Pvt ltd.</td>
				<td width='138'><p>Date :</p></td>
			  </tr>
			  <tr>
				<td height='31'>". date('20y-m-d')."</td>
			  </tr>
			  <tr>
				<td height='28'>From</td>
				<td width='207'>TO</td>
				<td width='94'>Journey Date</td>
				<td width='65'>Route ID</td>
				<td>Fare</td>
			  </tr>
			  <tr>
				<td>". $_SESSION['from']."</td>
				<td>".$_SESSION['to']."</td>
				<td>".$bdt."</td>
				<td>". $rid."</td>
				<td>". $_SESSION['fare']."</td>
			  </tr>
			</table>
			<br>
			Seating Infromation And Bus Information
			<table width='722' border='1' align='center'>
			  <tr>
				<td width='109' colspan='2'>Your Seat Number</td>
				<td width='195'>Bus Name</td>
				<td width='96'>Bus Number</td>
				<td width='81'>Total Seat</td>
				<td width='99'>Total Payment</td>
			  </tr>
			  <tr>
				<td>";
				
				echo "</td>
				<td>".$_SESSION['bname']."</td>
				<td>".$_SESSION['bno']."</td>
				<td>".$nos."</td>
				<td>".$totamount ."</td>
			  </tr>
			</table>
			<br>
			<table width='570' height='66' border='1' align='center'>
			  <tr>
				<td width='259' height='25'>Name </td>
				<td width='392'>Contact no</td>
			  </tr>
			  <tr>
				<td height='33'>sagar kabariya</td>
				<td>7405728288</td>
			  </tr>
			</table>
			<br>
			<div style='height:80px; color:black; margin-left:100px;'>Signture :
			<br>
			This is digital print of your ticket and is valid for authentication at journey.
			</div>
			</div>";
			session_destroy();
		  }
		  else
		  {
			header("location:index.php");
		  }
	 ?>
      </div>
    </div>
   
    <div class="booking-row content-padding-xs">
      <div class="container"> </div>
      <!-- .container --> 
    </div>
    <!-- .booking-row --> 
  </header>
  <!-- #header -->
  <footer id="footer" role="contentinfo">
    <div class="container">
      <div class="row" id="main-footer">
        <aside class="col-lg-2 col-md-3 col-sm-4 widget">
          <h5 class="widget-title">Leisure Club</h5>
          <p>St Andrews Scotland,
            United Kingdom KY16 8PN<br>
            <br>
            Tel  +44 (0) 1334 837000<br>
            Fax +44 (0) 1334 837099</p>
        </aside>
        <!-- .widget -->
        <aside class="col-lg-2 col-md-3 col-sm-4 widget">
          <h5 class="widget-title">The Resort</h5>
          <p> <a href="members.html">Member Bookings</a><br>
            <a href="events.html">Open Competitions</a><br>
            <a href="contact.html">Location</a><br>
            <a href="contact.html">Contact us</a><br>
            <a href="resort.html">Our Team</a><br>
          </p>
        </aside>
        <!-- .widget -->
        <aside class="col-lg-2 col-md-3 col-sm-4 widget">
          <h5 class="widget-title">The Club</h5>
          <p> <a href="resort.html">Clubhouse</a><br>
            <a href="resort.html">Officers &amp; Council </a><br>
            <a href="resort.html">History</a><br>
            <a href="resort.html">Locality</a><br>
            <a href="media-gallery.html">Gallery</a><br>
          </p>
        </aside>
        <!-- .widget -->
        <aside class="col-lg-2 col-md-3 col-sm-4 widget">
          <h5 class="widget-title">The Courses</h5>
          <p> <a href="activities.html">Headfort Old</a><br>
            <a href="activities.html">Headfort New</a><br>
            <a href="activities.html">Rankings</a><br>
            <a href="activities.html">Practice Facilities</a><br>
            <a href="media-gallery.html">Flora and Fauna</a><br>
          </p>
        </aside>
        <!-- .widget -->
        <aside class="col-lg-2 col-md-3 col-sm-4 widget">
          <h5 class="widget-title">Visitors</h5>
          <p> <a href="room-view.html">Visitor Booking</a><br>
            <a href="members.html">Green Fees</a><br>
            <a href="resort.html">Societies / Groups</a><br>
            <a href="members.html">Testimonials</a><br>
          </p>
        </aside>
        <!-- .widget -->
        <aside class="col-lg-2 col-md-3 col-sm-4 widget"> <a href="index-2.html"><img src="images/logo-leisure.png" alt=""></a> </aside>
        <!-- .widget --> 
      </div>
      <!-- end .row -->
      <div class="row" id="absolute-footer">
        <div class="col-sm-12">
          <aside class="widget">
            <p>Leisure - HTML Template. Designed with special care by <a href="http://demo.curlythemes.com/" target="_blank"><abbr title="Premium WordPress Themes & Plugins">Curly Themes</abbr></a>. All Rights Reserved. <span class="pull-right hidden-xs"> <a href="#" class="fa fa-boxed fa-rss" data-toggle="tooltip" data-placement="left" title="Leisure RSS"></a> <a href="http://www.pinterest.com/raducretu/curly-themes/" class="fa fa-boxed fa-pinterest" data-toggle="tooltip" data-placement="left" title="Leisure Pintrest Board"></a> <a href="https://www.facebook.com/cthemes" class="fa fa-boxed fa-facebook" data-toggle="tooltip" data-placement="left" title="Leisure on Facebook"></a> <a href="https://twitter.com/CurlyThemes" class="fa fa-boxed fa-twitter" data-toggle="tooltip" data-placement="left" title="Leisure on Twitter"></a> </span> </p>
          </aside>
          <!-- .widget --> 
        </div>
        <!-- .col-sm-12 --> 
      </div>
      <!-- #absolute-footer --> 
    </div>
    <!-- .container --> 
  </footer>
  <!-- #footer --> 
</div>
<!-- #site --> 

<!-- All Pages JS --> 
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/dropdown-menu.min.js"></script> 
<script src="js/waypoints.min.js"></script> 
<script src="js/waypoints-sticky.min.js"></script> 
<script src="js/jquery.velocity.min.js"></script> 
<script src="js/velocity.ui.js"></script> 
<script src="js/doubletaptogo.js"></script> 

<!-- Individual JS --> 
<script src="js/bootstrap.datepicker.min.js"></script> 
<script src="js/jquery.stellar.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 

<!-- Main JS --> 
<script src="js/main.js"></script> 
<!--Start of Zopim Live Chat Script--> 
<script type="text/javascript">
    	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    	$.src='http://v2.zopim.com/?1a5bDL1j16v3aB1MTxOQ5WTOhPBxbf79';z.t=+new Date;$.
    	type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    	</script> 
<!--End of Zopim Live Chat Script-->
</body>

<!-- Mirrored from demo.curlythemes.com/leisure-html/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 01 Jan 2015 07:24:56 GMT -->
</html>