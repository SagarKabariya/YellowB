<?php
include('db.php');
if($_POST)
{
	
$q=$_POST['search'];
$sql_res=mysql_query("select c_id,city_name from city where city_name like '$q%'");

while($row=mysql_fetch_array($sql_res))
{
$username=$row['city_name'];
$b_username='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
?>
<div class="show" align="left">
<span class="name"><?php echo $final_username; ?></span>
</div>
<?php
}
}
?>
