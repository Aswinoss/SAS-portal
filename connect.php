<?php
 
 $conn_error='could not connect.try again later';
 $mysql_host ='localhost';
 $mysql_user ='root';
 $mysql_pass ='';
 $mysql_db='student';
 
  $conn   =   mysql_connect($mysql_host , $mysql_user , $mysql_pass);
  $conn1 =   mysql_select_db($mysql_db);
 
  if(!$conn || !$conn1)
  {
  echo $conn_error;
  } 
  
 
  
  
?>