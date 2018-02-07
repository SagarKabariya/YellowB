<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include("headlink.php");	
	include("conn.php");
	$co=0;
	$sss[0]=0;
?>
<link href="seatchoosecss.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
session_start();
include("headmenu.php");
$rt=$_SESSION["rid"]=$_REQUEST['rid'];
$dt=$_SESSION["bkd"]=$_REQUEST['bkd'];
$ts=$_REQUEST['btt'];			
?>
</div>
<!-- .row -->
</div>
</nav>
</div>
<!-- .header-row -->
<div style="margin-top:20px; margin-left:30px;">
  <div style="margin-left:50px;">
    <div style="width:1200px;height:380px; background-color:rgba(0, 0, 1, 0.55); border:medium">
      <table style="background-color:rgba(220, 221, 214, 0.31);">
      <tr>
      <td>
      <form method="post" name="seatbooking">
        <?php 
		if(isset($_POST["seatchoose"]))
		{
			
			$strbook="INSERT INTO `book`(`register_id`, `route_id`, `book_no_of_seat`,`book_date`) VALUES (3,$rt,$ts,'$dt')";
			if(mysql_query($strbook))
			{
				$strgetid="SELECT book_id FROM `book` order by book_id desc limit 1";
				$strbook1=mysql_query($strgetid);	
				$ccc=mysql_fetch_row($strbook1);
				if($ts==1)
				{
					$insadv="INSERT INTO `book_details`(`book_id`, `s1`) VALUES ($ccc[0],$_POST[se1])";
				}
				elseif($ts==2)
				{
					$insadv="INSERT INTO `book_details`(`book_id`, `s1`, `s2`) VALUES ($ccc[0],$_POST[se1],$_POST[se2])";
				}
				elseif($ts==3)
				{
					$insadv="INSERT INTO `book_details`(`book_id`, `s1`, `s2`, `s3`) VALUES ($ccc[0],$_POST[se1],$_POST[se2],$_POST[se3])";
				}
				elseif($ts==4)
				{
					$insadv="INSERT INTO `book_details`(`book_id`, `s1`, `s2`, `s3`, `s4`) VALUES ($ccc[0],$_POST[se1],$_POST[se2],$_POST[se3],$_POST[se4])";
				}
				elseif($ts==5)
				{
					$insadv="INSERT INTO `book_details`(`book_id`, `s1`, `s2`, `s3`, `s4`, `s5`) VALUES ($ccc[0],$_POST[se1],$_POST[se2],$_POST[se3],$_POST[se4],$_POST[se5])";	
				}
				elseif($ts==6)
				{
				$insadv="INSERT INTO `book_details`(`book_id`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`) VALUES ($ccc[0],$_POST[se1],$_POST[se2],$_POST[se3],$_POST[se4],$_POST[se5],$_POST[se6])";	
				} 
				
				if(mysql_query($insadv))
				{
					$_SESSION["seatnumber"]=$ar;
					$_SESSION["confirm"]="yes";
					header("Location:bookseat.php");
				}
				else
				{
					echo "<script type='text/javascript'>alert('something happen was wrong');</script>";
				}
				
			}
			else
			{
					echo "not good";
			}
		}
		$str="select b.book_id,bd.s1,bd.s2,bd.s3,bd.s4,bd.s5,bd.s6 from book b,book_details bd where b.book_id=bd.book_id AND b.route_id= '$rt' AND b.book_date like '$dt'";
	$result=mysql_query($str);
				$count1[0]=0;
				$count2[0]=0;
				$count3[0]=0;
				$count4[0]=0;
				$count5[0]=0;
				$count6[0]=0;			
		while($getarry=mysql_fetch_array($result))
		{   array_push($count1,$getarry[1]);
			array_push($count2,$getarry[2]);
			array_push($count3,$getarry[3]);
			array_push($count4,$getarry[4]);
			array_push($count5,$getarry[5]);
			array_push($count6,$getarry[6]);					
		}
		array_shift($count1);
		array_shift($count2);
		array_shift($count3);
		array_shift($count4);
		array_shift($count5);
		array_shift($count6);
		
		$mainarray=array_merge($count1,$count2,$count3,$count4,$count5,$count6);
		$mainarray2=array_reverse($mainarray);
		sort($mainarray2);
		$arraytotal=array_unique($mainarray2);
		
		//print_r($arraytotal);
		$checkarray[0]=0;
		for($i=1;$i<=52;$i++)
		{
				$checkarray[$i]=$i;
		}
		echo "<br>";
		$firesult=array_diff($checkarray,$arraytotal);
		array_shift($firesult);
		//print_r($arraytotal);
		//print_r($firesult);
		$totarray=array_values($firesult);
		//print_r($totarray);
		$sss=$totarray;
		
		echo "<div style='width:240px; height:380px; background-color:rgba(0, 0, 1, 0.55); margin-top:-20px; margin-left:25px; padding-left:0px;'>";
		echo " <font face='Trajan Pro' size='+1' color='blue'>  Select seat as per your choice</font>";
		create($ts,$sss);
		
		function create($ts,$sss)
		{
			for($i=1;$i<=$ts;$i++)
			{
				
			echo "<br><font size='4' color='white' face='Trajan Pro'>select seat : </font>";
			echo "<select id='selectfirst".$i."' name='se".$i."' style='width:70px; padding-left:20px;'>";
			
						foreach ($sss as $k=>$v)
						{
							echo "<option id='$v' value='$v'>$v</option>";	
						}	
			echo "</select>";	
			echo "<br>";
			}		
		}
		echo "<br><input type='submit' name='seatchoose' id='seatchoose' class='btn btn-primary btn-block' value='Book your seat'>";
		echo "</div>";
		?>
        </form>
        </td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
        <tr>
        	
        </tr>
      </table>
    </div>
    <div style="position:absolute; width:780px;height:75px; background-color:rgba(0, 1, 1, 0.55); margin-top:-360px; margin-left:350px;">
    	<table style="width:100%; background-color:rgba(18, 221, 214, 0.31);">
        	<tr>
            <td>From</td>
            <td>TO</td>
            <td>Journey Date</td>
            <td>Bus Name</td>
            </tr>
            <tr>
            	<td>
                	<?php echo $_SESSION['from']; ?>
                </td>
                <td>
                <?php echo $_SESSION['to']; ?>
                </td>
                <td>
                <?php echo $_SESSION['jdt'];?>
                </td>
				<td>
                <?php echo $_SESSION['bname'];?>
                </td>
            </tr>
        </table>
    </div>
  </div>
  <div class="booking-row content-padding-xs">
    <div class="container"> </div>
    <!-- .container --> 
  </div>
  <font face='Trajan Pro' size='+3'>  </font>
  <!-- .booking-row -->
  </header>
  
  <?php include("footer.php"); ?>
</div>

<script src="js/bootstrap.datepicker.min.js"></script> 
<script src="js/jquery.stellar.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/main.js"></script> 
<!--Start of Zopim Live Chat Script--> 
<script type="text/javascript">
    	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    	$.src='http://v2.zopim.com/?1a5bDL1j16v3aB1MTxOQ5WTOhPBxbf79';z.t=+new Date;$.
    	type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    	</script> 
</body></html>