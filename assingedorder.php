<?php
  session_start(); 
	if(!$_SESSION['login_user'])  {
		header("location:index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Ledger It</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="Erwin Aligam - styleshout.com" />
<meta name="description" content="Site Description Here" />
<meta name="keywords" content="keywords, here" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="noarchive" />

<link rel="stylesheet" type="text/css" media="screen" href="./css/screen.css" />

</head>

<body>

<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">			
				<h1 id="logo-text"><a href="./index.php" title="">Free Quran Ledger</a></h1>		
				<p id="slogan">Use as tracker... </p>	
				<div  id="nav">
					<ul>
						<li><a href="./profile.php">Home</a></li>
						<li><a href="./insert.php">Create</a></li>
						<li class="first" id="current"><a href="./update.php">Update</a></li>
						<li><a href="./search_date.php">Search</a></li>
						<li><a href="./create_user.php">Create New User</a></li>
						<li><a href="./logout.php">Logout</a></li>		
					</ul>		
				</div>	
				<div id="header-image"></div>
			</div>
	
	<!-- featured starts -->
	<!-- content -->
	<div id="content-outer" class="clear"><div id="content-wrap">
	
		<div id="content">
       <table width="1000" height="1" border="0" align="center" >
            
            <tr colspan=0>
  	        <td align="Center" colspan="7"><h2 align="center">New Order List</h2>
            </td>
            </tr>
 	
    
    		<tr>
            <th width="50" scope="row"> <p align="left">SI</p></th>
            <th width="100" scope="row"> <p align="left">Order NO.</p></th>
            <th width="150" scope="row"> <p align="left">Person Name</p></th>
            <th width="100" scope="row"> <p align="left">Contact NO.</p></th>
            <th width="100" scope="row"> <p align="left">Assigned TO</p></th>
			<th width="100" scope="row"> <p align="left">Assigned ON</p></th>
			<th width="50" scope="row"> <p align="left">Update</p></th>
            </tr>
            
<?php
	// Database credential file
	include 'databaseconnection.php';
            
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$con = mysql_connect($dbhostname, $dbuserid, $dbpassword);

	// Selecting Database
	$db = mysql_select_db($dbname, $con);
	$sino = 1;
	$query = mysql_query("select * from `order` where status = 2", $con);
	while($row = mysql_fetch_array($query)){
		echo "<tr>";
        echo "<th width='50' scope='row'> <p align='left'>$sino</p></th>";
		$sino++;
        echo "<th width='100' scope='row'> <p align='left'>$row[orderid]</p></th>";
        echo "<th width='150' scope='row'> <p align='left'>$row[name]</p></th>";
        echo "<th width='100' scope='row'> <p align='left'>$row[contact]</p></th>";
		echo "<th width='100' scope='row'> <p align='left'>$row[asignto]</p></th>";
		echo "<th width='100' scope='row'> <p align='left'>$row[asigndate]</p></th>";
		echo "<th width='50' scope='row'>";
		echo "<a href='./assingedorder.php'><button>Update</button></a>";
		echo "</th>";
        echo "</tr>";
  	}
	mysql_close($con);
?>
      	</table>
      	</div>	
			
	<!-- content end -->	
	</div></div>
		
	<!-- footer starts here -->	
	<div id="footer-outer" class="clear"></div>
	
	<!-- footer-bottom starts -->		
	<div id="footer-bottom">
		<div class="bottom-left">
		<p>&copy; 2018 <strong>All reight are reserve</strong>&nbsp; &nbsp; &nbsp;Design by SMP</p>
		</div>
	
		<div class="bottom-right">
			<p>		
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
		   	<a href="http://validator.w3.org/check/referer">XHTML</a>	|			
			<a href="../new site/index.php">Login Pages</a></p>
		</div>
	<!-- footer-bottom ends -->		
	</div>
	
<!-- wrap ends here -->
</div>

</body>
</html>
