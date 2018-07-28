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
       <table width="920" height="1" border="0" align="center" >
            
            <tr colspan=0>
  	        <td align="Center" colspan="5"><h2 align="center">Your Search Expenses</h2>
            </td>
            </tr>
 	
    
    		<tr>
            <th width="115" scope="row"> <p align="left">SI NO.</p></th>
            <th width="168" scope="row"> <p align="left">Categories</p></th>
            <th width="298" scope="row"> <p align="left">Description</p></th>
            <th width="108" scope="row"> <p align="left">Quantity</p></th>
            <th width="209" scope="row"> <p align="left">Price</p></th>
            </tr>
            
<?php
$con = mysql_connect("localhost","root","BJvZKFKeHV6GJ+");
if (!$con){
  die('Could not connect: ' . mysql_error());
}
$sino = 1;
mysql_select_db("expenses", $con);
$sdate = $_POST['sD'] + $_POST['sM'] * 30 + $_POST['sY'] * 365;
$edate = $_POST['eD'] + $_POST['eM'] * 30 + $_POST['eY'] * 365;
switch($_POST['Cat']){
	case 1:
	$result = mysql_query("SELECT * FROM myexpenses WHERE UserID = '$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate'");
	while($row = mysql_fetch_array($result)){
		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>$sino</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>$row[Cat]</p></th>";
        echo "<th width='298' scope='row'> <p align='left'>$row[Descript]</p></th>";
        echo "<th width='108' scope='row'> <p align='left'>$row[Quantity]</p></th>";
        echo "<th width='209' scope='row'> <p align='left'>Rs.$row[Price]</p></th>";
        echo "</tr>";
  	}
	break;
	case 2:
	$result = mysql_query("SELECT * FROM myexpenses WHERE UserID ='$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate' AND Cat = 'Cloth' ");
	while($row = mysql_fetch_array($result)){
  		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>$sino</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>$row[Cat]</p></th>";
        echo "<th width='298' scope='row'> <p align='left'>$row[Descript]</p></th>";
        echo "<th width='108' scope='row'> <p align='left'>$row[Quantity]</p></th>";
        echo "<th width='209' scope='row'> <p align='left'>Rs.$row[Price]</p></th>";
        echo "</tr>";
  	}
	break;
	case 3:
	$result = mysql_query("SELECT * FROM myexpenses WHERE UserID = '$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate' AND Cat = 'Electronic' ");
	while($row = mysql_fetch_array($result)){
  		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>$sino</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>$row[Cat]</p></th>";
        echo "<th width='298' scope='row'> <p align='left'>$row[Descript]</p></th>";
        echo "<th width='108' scope='row'> <p align='left'>$row[Quantity]</p></th>";
        echo "<th width='209' scope='row'> <p align='left'>Rs.$row[Price]</p></th>";
        echo "</tr>";
  	}
	break;
	case 4:
	$result = mysql_query("SELECT * FROM myexpenses WHERE UserID = '$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate' AND Cat = 'Household'");
	while($row = mysql_fetch_array($result)){
  		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>$sino</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>$row[Cat]</p></th>";
        echo "<th width='298' scope='row'> <p align='left'>$row[Descript]</p></th>";
        echo "<th width='108' scope='row'> <p align='left'>$row[Quantity]</p></th>";
        echo "<th width='209' scope='row'> <p align='left'>Rs.$row[Price]</p></th>";
        echo "</tr>";
  	}
	break;
	case 5:
	$result = mysql_query("SELECT * FROM myexpenses WHERE UserID = '$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate' AND Cat = 'Vehicle' ");
	while($row = mysql_fetch_array($result)){
  		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>$sino</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>$row[Cat]</p></th>";
        echo "<th width='298' scope='row'> <p align='left'>$row[Descript]</p></th>";
        echo "<th width='108' scope='row'> <p align='left'>$row[Quantity]</p></th>";
        echo "<th width='209' scope='row'> <p align='left'>Rs.$row[Price]</p></th>";
        echo "</tr>";
  	}
	break;
	
}
mysql_close($con);
?>
<?php
$con = mysql_connect("localhost","root","BJvZKFKeHV6GJ+");
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("expenses", $con);
$sdate = $_POST['sD'] + $_POST['sM'] * 30 + $_POST['sY'] * 365;
$edate = $_POST['eD'] + $_POST['eM'] * 30 + $_POST['eY'] * 365;
switch($_POST['Cat']){
	case 1:
	$result = mysql_query("SELECT SUM(Price) AS sum FROM myexpenses WHERE UserID = '$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate'");
	while($row = mysql_fetch_array($result)){
		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>Grand Total</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>Rs.$row[sum]</p></th>";
        echo "</tr>";
  	}
	break;
	case 2:
	$result = mysql_query("SELECT SUM(Price) AS sum FROM myexpenses WHERE UserID = '$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate' AND Cat = 'Cloth' ");
	while($row = mysql_fetch_array($result)){
  		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>Grand Total</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>Rs.$row[sum]</p></th>";
        echo "</tr>";
  	}
	break;
	case 3:
	$result = mysql_query("SELECT SUM(Price) AS sum FROM myexpenses WHERE UserID = '$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate' AND Cat = 'Electronic' ");
	while($row = mysql_fetch_array($result)){
		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>Grand Total</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>Rs.$row[sum]</p></th>";
        echo "</tr>";
  	}
	break;
	case 4:
	$result = mysql_query("SELECT SUM(Price) AS sum FROM myexpenses WHERE UserID = '$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate' AND Cat = 'Household'");
	while($row = mysql_fetch_array($result)){
  		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>Grand Total</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>Rs.$row[sum]</p></th>";
        echo "</tr>";
  	}
	break;
	case 5:
	$result = mysql_query("SELECT SUM(Price) AS sum FROM myexpenses WHERE UserID = '$_SESSION[login_user]' AND Date >= '$sdate' AND Date <= '$edate' AND Cat = 'Vehicle' ");
	while($row = mysql_fetch_array($result)){
  		echo "<tr>";
        echo "<th width='115' scope='row'> <p align='left'>Grand Total</p></th>";
		$sino++;
        echo "<th width='168' scope='row'> <p align='left'>Rs.$row[sum]</p></th>";
        echo "</tr>";
  	}
	break;
	
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
