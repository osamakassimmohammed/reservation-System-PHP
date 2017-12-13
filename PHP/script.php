<?php   

mysql_connect("localhost", "root", "") or die (mysql_error ());
mysql_select_db("uuss") or die(mysql_error());

$btn=$_post['btn'];
if(isset($_post['$btn'])
$insid=$_post['stadiums'];
$date=$_post['date'];
$time=$_post['time'];
$textarea=$_post['textarea'];

mysql_query("INSERT INTO ins(insid,date,time,textarea) VALUES('$stadiums','$date','$time ','$textarea')"); 
   or die (mysql_error ());
)
?>