$term = trim(strip_tags($_GET['term']));

$qstring = "SELECT * as value,id FROM test WHERE city_name LIKE '%".$term."%'";
$result = mysql_query($qstring);

while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
		$row['value']=htmlentities(stripslashes($row['value']));
		$row['id']=(int)$row['id'];
		$row_set[] = $row;//build an array
}
echo json_encode($row_set);