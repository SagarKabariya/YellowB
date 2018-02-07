<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include("headlink.php");	
		include("conn.php");
		session_start();
		include("headmenu.php");
	
?>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function()
{

$(".search").keyup(function() 
{ 

var searchid = $(this).val();
var dataString = 'search='+ searchid;

if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
		
	$("#resultdiv").html(html).show();
	
	}
	});
	
	
}return false;    
});




$(".search1").keyup(function() 
{ 

var searchid = $(this).val();
var dataString = 'search='+ searchid;

if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
		
	$("#resultdiv1").html(html).show();
	
	}
	});
	
	
}return false;    
});

jQuery("#resultdiv1").click(function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid1').val(decoded);
});
jQuery(document).click(function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search1")){
	jQuery("#resultdiv1").fadeOut(); 
	}
});
$('#searchid1').click(function(){
	jQuery("#resultdiv1").fadeIn();
});


$(document).ready(function()
{

jQuery("#resultdiv").click(function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).click(function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#resultdiv").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#resultdiv").fadeIn();
});
});
});
	</script>
    
 <script type="text/javascript">
 function checkvalid()
{
	 var x = document.forms["booking-form"]["source"].value;
	 var y = document.forms["booking-form"]["departure"].value;
	 var z = document.forms["booking-form"]["tjdate"].value;
	 var zz = document.forms["booking-form"]["adults"].value;
	  var zz = document.forms["nextpage"]["adults"].value;
	 
	 if (x == null || x == "") 
	{
		alert("FROM place is requires so must be filled out");
		return false;
	}
	else if (y == null || y == "") 
	{
		alert("Destination place is requires so must be filled out");
		return false;
	}
	else if (z == null || z == "") 
	{
		alert("Journey date is must be filled out");
		return false;
	}
	else if (zz == null || zz == "" || zz == "Passanger's") 
	{
		alert("Strenght of passangers is requires so must be filled out");
		return false;
	}	
}
 </script>   
    
<style type="text/css">
td {
	border-bottom:thin;
	border-bottom-style:solid;
	border-bottom-color:#333;
	color:#FFF;
	text-align:center;
}
table {
	background-color:#818181;
}
tr {
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
.content{
		width:300px;
		margin:0 auto;
	}
	#searchid
	{
		width:200px;
		
		padding:10px;
		font-size:14px;
	}
	#resultdiv
	{
		position:absolute;
		width:200px;
		padding:5px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: #F60;
	}
	#searchid1
	{
		width:200px;
		
		padding:10px;
		font-size:14px;
	}
	#resultdiv1
	{
		position:absolute;
		width:200px;
		padding:5px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: #F60;
	}
	.show
	{
		padding:5px; 
		font-size:15px; 
		height:30px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
</style>
<script type="text/javascript">
function check(id)
{
	var dt=$("#tjdate").val();
	var d = new Date().toString();
		
}
</script>

</head>
<body>
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
<div style="margin-top:20px; margin-left:-50px;">
  <div class="container">
    <div class="row">
      <form id="booking-form" method="post" onSubmit="return checkvalid()">
        
        
            <div class="col-md-3 col-sm-6 icon-calendar" style="width:250px; margin-left:180px;">
            <input type="text" class="search" id="searchid" placeholder="Search for city" name="source" autocomplete="false"/>&nbsp;      
            <div id="resultdiv"></div>
            </div>
            
            
            
                    
        <div style="width:250px; margin-top:00px; margin-left:430px; position:absolute">
          <div class="col-md-3 col-sm-6 icon-calenda">
            <input type="text" class="search1" id="searchid1" placeholder="Search for website" name="departure"/>
            <div id="resultdiv1"> </div>
          </div>
        </div>
        
        
        
        
        
        <div class="col-md-3 col-sm-6 icon-calendar" style="width:200px; position:absolute; margin-top:00px; margin-left:690px;">
         <label class="sr-only" for="arrival-date">Journey Date</label>
<input type="text" class="form-control" onChange="check(this.id)" data-provide="datepicker" data-date-autoclose="true" name="tjdate" data-date-format="yyyy-mm-dd" id="tjdate" placeholder="Journey Date">
								 
        </div>
       <!-- <div class="col-md-2 col-sm-4" style="width:150px;  position:absolute; margin-top:00px; margin-left:640px;">
          <select class="form-control" id="bustype" name="bustype">
            <option selected disabled>Bus-Type</option>
            <option>AC</option>
            <option>NON-AC</option>
          </select>
        </div>-->
       <!-- <div style="width:200px;  position:absolute; margin-top:00px; margin-left:800px;">
          <select class="form-control" id="adults" name="adults" style="width:150px">
            <option selected disabled>Passanger's</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select>
        </div>-->
        <div style="width:150px ; float:right; margin-top:00px; margin-right:95px;">
          <input type="submit" class="btn btn-primary btn-block" name="book" value="Search Root">
        </div>
      </form>
    </div>
    <!-- .row --> 
  </div>
  <!-- .container --> 
  
</div>
<!-- .booking-row -->
<?php
			  	if(isset($_POST['book']))
				{
					
					$_SESSION['from']=$_POST["source"];
					$_SESSION['to']=$_POST["departure"];
					$_SESSION['noseat']=$_POST["adults"];
					$_SESSION['bustype']=$_POST["btype"];
					$_SESSION['jdt']=$_POST["tjdate"];
				
					header("location:searchroot.php");
					
				}	
			  ?>
<div style="margin-left:90px; margin-top:50px; font-family:Arial, Helvetica, sans-serif;">
  <?php
		
			if(isset($_SESSION['from']))
			{
		?>
       <form method="post" id="nextpage">
  <div style=" border-color:#333; width:900px; font-family:AHRONI; margin-left:100px;">
    <table width="960px" >
      <tr>
        <th> Source City </th>
        <th> Destination City </th>
        <th> Journey Date</th>
		<th> Depart-Time</th>
		<th> Arrival-Time</th>
        <th> Fare </th>
        <th> Bus Name </th>
        <th> Bus Type </th>
        <th>Available seat </th>
        <th>Book seat </th>
        <th> Book </th>
      </tr>
      <?php
				$passrid=0;
				$curdt=date('20y-m-d');
				$s=$_SESSION['from'];
				$d=$_SESSION['to'];
				
				$jt=$_SESSION['jdt'];
				
			   $sid="select c_id from city where city_name like '$s'"; 
			   $ssid=mysql_query($sid);
			   $aa=mysql_fetch_row($ssid);
			   $finalsid=$aa[0];
			   
			   $did="select c_id from city where city_name like '$d'"; 
			   $ddid=mysql_query($did);
			   $bb=mysql_fetch_row($ddid);
			   $finaldid=$bb[0];
			    
			   $ww="select route_id,depart_time from route where source_id = '$aa[0]' AND destination_id = '$bb[0]'"; 
			   $ww1=mysql_query($ww);
			   $w1w=mysql_fetch_row($ww1);
			   
			   			   $rr="select route_id,arrival_time from route where source_id = '$aa[0]' AND destination_id = '$bb[0]'"; 
			   $rr1=mysql_query($rr);
			   $w1r=mysql_fetch_row($rr1);
			   
			   $getr="select route_id,fare,bus_id from route where source_id = '$aa[0]' AND destination_id = '$bb[0]'";
			   $getr1=mysql_query($getr);
			   while($getr2=mysql_fetch_array($getr1))
			   {
				   		$passrid=$getr2[0];
						$_SESSION['fare']=$getr2[1];
						
						$sel1="SELECT sum(book_no_of_seat) FROM book bk WHERE bk.book_date like '$jt' AND route_id like $getr2[0]";
					    $op1=mysql_query($sel1);
						$op2=mysql_fetch_row($op1);
						
						echo $op2[0];
								$q=0;
								$left="SELECT * from bus where bus_id like $getr2[2]";
								
			  					$res1=mysql_query($left);
								
				  			    if($res2=mysql_fetch_array($res1))
			   					{
									
									$q=$res2[3];
									$_SESSION['tos']=$q;
								
								}
								$_SESSION['btos']=$res2[3];
								$qq=$res2[3]-$op2[0];
								$_SESSION['bname']=$res2[1];
								$_SESSION['bno']=$res2[2];
								
								echo "<td>$s </td>";
								echo "<td>$d</td>";
								echo "<td>$jt</td>";
								echo "<td>$getr2[1]</td>";
								echo "<td style='color:black;font-weight:bold'><u>$res2[1]</u> </td>";
								echo "<td>$res2[4] </td>";
								echo "<td style='color:black;font-weight:bold'><u>$qq</u> </td>";
								echo "<td>
								<select id='btkt' name='btkt' style='border:none; background-color:grey;'>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								</select>								
								</td>";
								echo "<td>";
								if($qq>0)
								{
		echo "<input type='submit' name='choose' id='choose' class='btn btn-primary btn-block' value='Choose Seat'>";
									
	//									echo "<a href='chooseseat.php?rid=$getr2[0]&bkd=$jt&btt=$bt' class='btn btn-primary btn-block'>Choose Seat</a>";
								
								}
								else
								{
									echo "Seat not available";
								}
									echo "</td>";
								echo "</tr>";
								
							
				}
			  
			  
			    
			   ?>
    </table>
  </div>
  </form>
  <?php
							
			}
			else
			{
				echo "<b><u>Select first FROM Place and Destination place then you can find the roots</u></b>";
			}
		?>
        <?php
		if(isset($_POST["choose"]))
		{
			$bt=$_POST["btkt"];
			header("location:chooseseat.php?rid=$passrid[0]&bkd=$jt&btt=$bt");
		}
		?>
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