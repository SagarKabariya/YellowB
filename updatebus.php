<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include("headlink.php");	
?>
<style type="text/css">
td {
	border-bottom:thin;
	border-bottom-style:solid;
	border-bottom-color:#333;
	color:#FFF;
	text-align:center;
}
table
{
	background-color:rgba(0, 0, 0, 0.55);

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
session_start();
		   	include("Aheadmenu.php");
            	if(isset($_SESSION['uname']))
				{
					$userid=$_SESSION['uid'];
					$con=mysql_connect("localhost","root","");
					$db=mysql_select_db("yellowb",$con);
					$aa=mysql_query("SELECT `user_type` FROM `registration` WHERE `register_id` like '$userid'") or die("not fire");
					$row=mysql_fetch_row($aa);
					if($row[0] == 1)
					{
						//header("Location: http://localhost/yellowB/index.php");
					}
					
					echo "<font color='black'>Welcome ".$_SESSION['uname']."<font> ";
					echo "<a href='logout.php'>Logout</a>";
				}
				else
				{
					header("Location: http://localhost/yellowB/index.php");
				}
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
    <div style="margin-top:20px; margin-left:-50px;">
	<div>


            <div style="margin-left:292px; background-color:rgba(233, 189, 162, 0.69); width:700px; height:50px;">
            <center>
 <h1>--------Manage Bus--------</h1></center>
                            </div>
                            
                               <form name="registration" method="post" >
                   <?php
        require_once 'conn.php';
       $er=0;
	   $err=0;
	   $er1=0;
	   $er2=0;
       $get=  mysql_query("select * from bus where bus_id=$_REQUEST[id]");
       $g= mysql_fetch_array($get);
        if(isset($_REQUEST["back"]))
        {
			header('location:showbus.php');
		}
        if(isset($_REQUEST["save"]))
        {
            if($_REQUEST["name"]=="")
            {
                $er=1;
            }
			if($_REQUEST["no"]=="")
            {
                $err=1;
            }
			if($_REQUEST["noseat"]=="")
            {
                $er1=1;
            }
			if($_REQUEST["type"]=="")
            {
                $er2=1;
            }
           
            
            if($er!=1 && $err!=1 && $er1!=1 && $er2!=1)
            {

				$q1=$_REQUEST["name"];
				$q2=$_REQUEST["no"]; 
				$q3=$_REQUEST["noseat"];   
				$q4=$_REQUEST["type"];    
				$q5=$_REQUEST["id"];
				
				
			
               	if(mysql_query("UPDATE `bus` SET `bus_name`='$q1',`bus_number`='$q2',`no_of_seats`='$q3',`bus_type`='$q4' WHERE `bus_id`='$q5'"))
			   	{
					
				   header('location:showbus.php');
				   
			   	}
			   	else
			   	{
                echo "fail";
			   }
            }
            
        }
?>
 
 
 <form method="post">
            <table border="1" cellpadding="0" cellspacing="0" align="center" width="900px">
              <tr align="center">
                <td colspan="2"><font size="+1" style="font-weight:bolder"> Update Information </font></td>
              </tr>
             
                    
              <tr>
              <td></td>
              <td></td>
             
              <tr>
                <td align="center"><font size="3px">Bus Name:</font></td>
                <td align="center"><font size="2px"><input type="text" name="name" value="<?php echo $g[1];?>"></font></td>
              </tr>
              <tr>
                <td align="center"><font size="3px">Bus Number:</font></td>
                <td align="center"><font size="2px"><input type="text" name="no" value="<?php echo $g[2];?>" /></font></td>
              </tr>
            
              <tr>
                <td align="center"><font size="3px">Number Of Seat:</font></td>
                <td align="center"><font size="2px"><input type="text" name="noseat" value="<?php echo $g[3]; ?>" /></font></td>
              </tr>
               <tr>
                <td align="center"><font size="3px">Bus Type:</font></td>
                <td align="center"><font size="2px"><select name="type">
                										<option>Select</option>
                                                        <option>Ac</option>
                                                        <option>Non-Ac</option>
                									</select></font></td>
              </tr>
               
             
           
            </table>
            <br/>
            <br/>
            <center>
              <input name="save" type="submit" class="button" value="Update">
               <input name="back" type="submit" class="button" value="Back to page">
            </center>
            <br/>
            <br/>
          </form>
          </table>
                <br/>
                <br/>
              </form>
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