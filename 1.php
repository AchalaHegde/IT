<?php
/**$db_host="localhost";
$db_user="root";
$db_passwd="tiger";
$db_name="vote";
echo $db_host."<br />";
echo $db_user."<br />";
echo $db_passwd."<br />";
echo $db_name."<br />"; **/
$dbh=mysqli_connect("localhost","root","tiger","vote")or die("Error connecting to the database");
echo "Successfully connected";
echo "<br />";
$q="select * from cr";
echo '<form id="myform">';
$r=mysqli_query($dbh,$q)or die("Error querying database");
while($v=mysqli_fetch_array($r,MYSQLI_ASSOC)){
	echo '<input type="radio" id="name1" name="candidate" value="'.$v['name']."'></input><br />';
echo "<br />";
}
?>
