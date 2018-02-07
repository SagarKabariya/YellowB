<!DOCTYPE html>
<html lang="en">
<head>
<script type="application/javascript" language="javascript">
	
</script>
<?php
		include("headlink.php");
		?>
</head>
<body>
           <?php
		   	include("headmenu.php");
		   ?>
          </div>
          <!-- .row --> 
        </div>
        <!-- .container -->
        <form id="search-form" class="hidden-xs" method="post">
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
    <div class="booking-row content-padding-xs">
      <div class="container">
        <div class="row" style="margin-left:120px">
          <form id="booking-form" method="post">
             
            <div class="col-md-3 col-sm-6 icon-calendar">
              
              <input type="text" class="form-control" placeholder="From" id="source" name="source">
            </div>
            <div class="col-md-3 col-sm-6 icon-calendar">
              
              <input type="text" class="form-control" id="departure" placeholder="To" name="departure">
            </div>
            <div class="col-md-2 col-sm-4 icon-arrow">
									
									<select class="form-control" id="adults" name="adults">
										<option selected disabled>Passanger's  </option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
                                        <option>5</option>
										<option>6</option>
									</select>
								</div>
          
            <div class="col-md-2 col-sm-4">
              <input type="submit" class="btn btn-primary btn-block" name="book" value="Book a Seat">
            </div>
          </form>
          <?php
			  	if(isset($_POST['book']))
				{
					session_start();
					$_SESSION['from']=$_POST["source"];
					$_SESSION['to']=$_POST["departure"];
					$_SESSION['noseat']=$_POST["adults"];
					$_SESSION['bustype']=$_POST["btype"];
					header("location:searchroot.php");
					
				}	
			  ?>
        </div>
        <!-- .row --> 
      </div>
      <!-- .container --> 
    </div>
    <!-- .booking-row --> 
  </header>
  <!-- #header -->
  <article id="content">
    <section class="container content-padding-lg">
      <div class="row animated">
        <div class="col-sm-8 col-sm-offset-2 text-center">
          <h1 class="text-center"><small>What can you do with the YellowB Travel?</small>AWARD WINNING TRAVEL</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ornare eros. Ut pharetra ornare lorem, sit amet bibendum quam imperdiet ut. </p>
          <p>Duis diam eros, dignissim sed condimentum ac, vehicula nec nisl. Suspendisse condimentum libero tempus, accumsan augue et, varius dui. Morbi justo tortor, tincidunt ornare magna ut, molestie mattis enim. Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan. </p>
          <a href="resort.html" class="btn btn-inline">What's happening at the Leisure Center?</a> </div>
        <!-- .col-sm-8 --> 
      </div>
      <!-- .row --> 
    </section>
    <!-- .container -->
    <section class="fullwidth-row">
      <div class="container content-padding-xl">
        <div class="row animated">
          <div class="col-sm-12 parallax-container" data-stellar-offset-parent="true" data-stellar-vertical-offset="150">
            <div class="content-column half text-center"> <img src="images/5.jpg" class="parallax-image img-responsive" data-stellar-ratio="1.15123" alt=""> <img src="images/2.jpg" class="parallax-image img-responsive" data-stellar-ratio="0.94456456" alt=""> <img src="images/4.jpg" class="parallax-image img-responsive" data-stellar-ratio="1.111111" alt=""> </div>
            <!-- .content-column -->
            <div class="content-column half last">
              <h2><small>Discover Experiance of Laxury</small>TRAVEL LIKE A FLYING YOU ON SKY</h2>
              <p>Duis diam eros, dignissim sed condimentum ac, vehicula nec nisl. Suspendissecondimentum libero tempus, accumsan augue et, varius dui. Morbi justo tortor, tincidunt ornare magna ut, molestie mattis enim. </p>
              <p>Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque. </p>
              <a href="" class="btn btn-inline">Explore our Deluxe Golf Course</a> </div>
            <!-- .content-column --> 
          </div>
          <!-- .parallax-container --> 
        </div>
        <!-- .row --> 
      </div>
      <!-- .container --> 
    </section>
    <!-- .fullwidth-row -->
    <section class="container content-padding-lg">
      <div class="row animated">
        <aside class="col-sm-12">
          <h2 class="text-center"><small>Where you want to go with YellowB Travel</small>YellowB Destination Area</h2>
          <div class="services-carousel">
            <div class="item"> <a href="activities.html" class="link-image"><img src="images/1.jpg" alt=""></a>
              <div class="item-content">
                <h4><a href="activities.html">Amreli</a></h4>
                <p>Curabitur est gravida et libero vitae dictum. Magna pars studiorum, prodita quaerimus. </p>
              </div>
            </div>
            <div class="item"> <a href="activities.html" class="link-image"><img src="images/10.jpg" alt=""></a>
              <div class="item-content">
                <h4><a href="activities.html">Kheda</a></h4>
                <p>Curabitur est gravida et libero vitae dictum. Magna pars studiorum, prodita quaerimus. </p>
              </div>
            </div>
            <div class="item"> <a href="activities.html" class="link-image"><img src="images/9.jpg" alt=""></a>
              <div class="item-content">
                <h4><a href="activities.html">Surendra Nagar</a></h4>
                <p>Curabitur est gravida et libero vitae dictum. Magna pars studiorum, prodita quaerimus. </p>
              </div>
            </div>
            <div class="item"> <a href="activities.html" class="link-image"><img src="images/8.jpg" alt=""></a>
              <div class="item-content">
                <h4><a href="activities.html">Surat</a></h4>
                <p>Curabitur est gravida et libero vitae dictum. Magna pars studiorum, prodita quaerimus. </p>
              </div>
            </div>
            <div class="item"> <a href="activities.html" class="link-image"><img src="images/7.jpg" alt=""></a>
              <div class="item-content">
                <h4><a href="activities.html">Rajkot</a></h4>
                <p>Curabitur est gravida et libero vitae dictum. Magna pars studiorum, prodita quaerimus. </p>
              </div>
            </div>
          </div>
          <!-- .services-carousel --> 
        </aside>
        
        <!-- .col-sm-12 --> 
      </div>
      <!-- .row --> 
    </section>
  <!-- #content -->
  <footer id="footer" role="contentinfo">
		  		<div class="container">
		  			<div class="row" id="main-footer">
		  				<aside class="col-lg-2 col-md-3 col-sm-4 widget">
		  					<h5 class="widget-title">Ahmedabad Office</h5>
		  					<p>
		  					C 20-25, Arc complex, <br>
                            CG road, <br>
                            Ahmedabad<br>
		  					
		  					Tel  +44 (0) 1334 837000<br>
		  					Fax +44 (0) 1334 837099</p>
		  				</aside><!-- .widget -->
		  				<aside class="col-lg-2 col-md-3 col-sm-4 widget">
		  					<h5 class="widget-title">Baroda Office</h5>
		  					<p>
		  					C 20-25, Arc complex, <br>
                            CG road, <br>
                            Ahmedabad<br>
		  					
		  					Tel  +44 (0) 1334 837000<br>
		  					Fax +44 (0) 1334 837099</p>
		  				</aside><!-- .widget -->
		  				<aside class="col-lg-2 col-md-3 col-sm-4 widget">
		  					<h5 class="widget-title">The Club</h5>
		  					<p>
		  					C 20-25, Arc complex, <br>
                            CG road, <br>
                            Ahmedabad<br>
		  					
		  					Tel  +44 (0) 1334 837000<br>
		  					Fax +44 (0) 1334 837099</p>
		  				</aside><!-- .widget -->
		  				<aside class="col-lg-2 col-md-3 col-sm-4 widget">
		  					<h5 class="widget-title">Surat Office</h5>
		  					<p>
		  					C 20-25, Arc complex, <br>
                            CG road, <br>
                            Ahmedabad<br>
		  					
		  					Tel  +44 (0) 1334 837000<br>
		  					Fax +44 (0) 1334 837099</p>
		  				</aside><!-- .widget -->
		  				
		  				<aside class="col-lg-2 col-md-3 col-sm-4 widget">
		  					<a href="index-2.html"><img src="images/kk.png" alt="">.com</a>
		  				</aside><!-- .widget -->
		  			</div><!-- end .row -->
		  			<div class="row" id="absolute-footer">
		  				<div class="col-sm-12">
		  					<aside class="widget">
		  						<p>This Website has manage by the <font color="#FF0000"> HENRY SOFTWARE PVT. LTD.</font> All Rights Reserved. 
		  						<span class="pull-right hidden-xs">
		  							<a href="#" class="fa fa-boxed fa-rss" data-toggle="tooltip" data-placement="left" title="Leisure RSS"></a>
		  							<a href="http://www.pinterest.com/raducretu/curly-themes/" class="fa fa-boxed fa-pinterest" data-toggle="tooltip" data-placement="left" title="Leisure Pintrest Board"></a>
		  							<a href="https://www.facebook.com/cthemes" class="fa fa-boxed fa-facebook" data-toggle="tooltip" data-placement="left" title="Leisure on Facebook"></a>
		  							<a href="https://twitter.com/CurlyThemes" class="fa fa-boxed fa-twitter" data-toggle="tooltip" data-placement="left" title="Leisure on Twitter"></a>
		  						</span>
		  						</p>
		  					</aside><!-- .widget -->
		  				</div><!-- .col-sm-12 -->
		  			</div><!-- #absolute-footer -->
		  		</div><!-- .container -->
		  	</footer><!-- #footer -->	
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