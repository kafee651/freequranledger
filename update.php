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
			<div id="content-outer" class="clear"><div id="content-wrap">
	  <div id="content">
      <table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="100%">
          
            <table width="482" height="415" border="0" align="left" >
              <tr colspan=0><td align="Center" colspan="6"><h2 align="center">Order Status</h2></td></tr>

              <tr>
								<td width="100%" align="center">
									<b id="welcome">Status</i></b>
								</td>
								<td width="100%" align="center">	   
									<b id="logout">Count</b>
								</td>
								<td width="100%" align="center">	   
									<b id="logout">View Order</b>
								</td>
							</tr>
							<?php
								include 'databaseconnection.php';
            
								// Establishing Connection with Server by passing server_name, user_id and password as a parameter
								$con = mysql_connect($dbhostname, $dbuserid, $dbpassword);
								if (!$con){
									die('Could not connect: ' . mysql_error());
								}
								mysql_select_db($dbname, $con);
								$query = mysql_query("select count(*) a from `order` where status = 1", $con);
								//$query = mysql_query("select * from profile where password='abu123' AND userid='abu123'", $con);
								while($row = mysql_fetch_array($query)){
									echo "<tr>";
									echo "<th width='168' scope='row'> <p align='left'>New Order</p></th>";
									echo "<th width='298' scope='row'> <p align='left'>$row[a]</p></th>";
									echo "<th width='298' scope='row'>";
									echo "<a href='./neworder.php'><button>View</button></a>";
									echo "</th>";
									echo "</tr>";
								}
								$query = mysql_query("select count(*) a from `order` where status = 2", $con);
								//$query = mysql_query("select * from profile where password='abu123' AND userid='abu123'", $con);
								while($row = mysql_fetch_array($query)){
									echo "<tr>";
									echo "<th width='168' scope='row'> <p align='left'>Assigned</p></th>";
									echo "<th width='298' scope='row'> <p align='left'>$row[a]</p></th>";
									echo "<th width='298' scope='row'>";
									echo "<a href='./assingedorder.php'><button>View</button></a>";
									echo "</th>";
									echo "</tr>";
								}
								$query = mysql_query("select count(*) a from `order` where status = 3", $con);
								//$query = mysql_query("select * from profile where password='abu123' AND userid='abu123'", $con);
								while($row = mysql_fetch_array($query)){
									echo "<tr>";
									echo "<th width='168' scope='row'> <p align='left'>Delivered</p></th>";
									echo "<th width='298' scope='row'> <p align='left'>$row[a]</p></th>";
									echo "<th width='298' scope='row'>";
									echo "<a href='./deliveredorder.php' ><button>View</button></a>";
									echo "</th>";
									echo "</tr>";
								}
								mysql_close($con);
							?>


            
          </table>
        </form>
      </td>
    </tr>
  </table> 
  </div>	
			
	<!-- content end -->	
	</div></div>
			<div id="content-outer" class="clear">
				<div id="content-wrap">
					<div id="content">
        				<table width="400" border="0" cellspacing="0" cellpadding="0">
							
						</table> 	
					</div>	
				</div>
			</div>
		
			<!-- footer starts here -->	
			<div id="footer-outer" class="clear"></div>
	
			<!-- footer-bottom starts -->		
			<div id="footer-bottom">
				<div class="bottom-left">
				<p>&copy; 2018 <strong>All reight are reserve</strong>&nbsp; &nbsp; &nbsp;Design by SMP</p>
				</div>
				<div class="bottom-right">
					<p><a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>| 
						<a href="http://validator.w3.org/check/referer">XHTML</a>|<a href="./index.html">Login pages</a>
					</p>
				</div>
				<!-- footer-bottom ends -->		
			</div>
	
		<!-- wrap ends here -->
		</div>
	</body>
</html>