<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include("headlink.php");	
	    include("conn.php");
?>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
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
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
<style type="text/css">
	body{ 
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	.content{
		width:900px;
		margin:0 auto;
	}
	#searchid
	{
		width:500px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:500px;
		padding:10px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		height:50px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
</style>

</head>
<body>
<?php
session_start();
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
    <div style="margin-top:20px; margin-left:-50px;">
	<div>
   <br>
<div class="content">
<input type="text" class="search" id="searchid" placeholder="Search for website" />&nbsp; &nbsp; Ex:www.ehowto.in, www.ejob.guru<br /> 
<div id="result">
</div>
</div>
<br>
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