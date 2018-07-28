<?php
  session_start(); 
	if(!$_SESSION['login_user'])  {
		header("location:index.php");
	}
  // Database credential file
  include 'databaseconnection.php';
          
  // Establishing Connection with Server by passing server_name, user_id and password as a parameter
  $con = mysql_connect($dbhostname, $dbuserid, $dbpassword);

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
  mysql_select_db($dbname, $con);

  $orderid=$_POST['orderid'];
  $deliveredby=$_POST['deliveredby'];
  $deliveredreview=$_POST['deliveredreview'];
  $delivereddate=date("Y-m-d H:i:s",mktime(0, 0, 0));
  $status=3;
  $query=mysql_query("UPDATE freequranledger.order SET deliveredby = '$deliveredby', deliveredreview = '$deliveredreview',  status = '$status', delivereddate = '$delivereddate' WHERE orderid = '$orderid'", $con);
  mysql_close($con);
  header("location:profile.php");
?>