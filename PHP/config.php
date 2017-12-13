<?php 
session_start();
$con=mysql_connect("mysql4.000webhost.com","a7559499_root","O123456");
mysql_select_db("a7559499_DB1",$con);
function getUserData($userID){
    
    $query=mysql_query("select * from username where userID=$userID limit 1");
   return $data=mysql_fetch_array($query,1);
}
?>