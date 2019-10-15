<?php
function dbcon()
{ 
$con=mysql_connect('localhost','root','');
	mysql_select_db('db',$con);
}
?>