<?php
header('Content-type: application/json');
/*SELECT typeID, typeName FROM `invTypes` WHERE typeName =  'Tritanium'*/

$db_server = <serve>;
$db_user = <username>;
$db_password = <password>;

$con=mysql_connect($db_server,$db_user,$db_password);
// Check connection
$db_selected = mysql_select_db('neonicen_eve_rubicon');
	
$itemname = mysql_real_escape_string($_REQUEST['itemname']);

$query ="SELECT typeID, typeName FROM `invTypes` WHERE typeName = '" . $itemname . "'";

$result = mysql_query($query);


while($row = mysql_fetch_array($result))
  {
  echo "{\"typeID\":".$row['typeID'] . ", \"typeName\":\"" . $row['typeName'] . "\"}";
  }
mysql_free_result($result);
mysql_close($con);
?>
