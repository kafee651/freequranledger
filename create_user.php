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
						<li><a href="./update.php">Update</a></li>
						<li><a href="./search_date.php">Search</a></li>
						<li  class="first" id="current"><a href="./create_user.php">Create New User</a></li>
						<li><a href="./logout.php">Logout</a></li>		
					</ul>		
				</div>	
				<div id="header-image"></div>
	</div>
	
	<!-- featured starts -->
	<!-- content -->
	<div id="content-outer" class="clear"><div id="content-wrap">
		<div id="content">
        		<table width="400" border="0" cellspacing="0" cellpadding="0">
   				<tr>
   					<td width="100%"><form action="./create_user_comp.php" method="POST" >
       						<table width="430" height="415" border="0" align="left" >
           						<tr colspan=0><td align="Center" colspan="3"><h2 align="center">Create New User</h2></td></tr>
							    <tr><th width="156" scope="row"><p align="left">User Name<font color="#FF0000">*</font></p></th>
           							<td width="259"><font face='Verdana' size='2'>
           								<input size="50" maxlength="50" name="uname" type="text" id="name" /></font>
           							</td>
           							<td width="1"><span id="msgbox1"  ></span>
           							</td>
           						</tr>
           						<tr><th width="156" scope="row"><p align="left">User Id<font color="#FF0000">*</font></p></th>
           							<td width="259"><font face='Verdana' size='2'>
           								<input size="50" maxlength="50" name="userid" type="text" id="name" /></font>
           							</td>
           							<td width="1"><span id="msgbox1"  ></span></td>
           						</tr>
           						<tr><th width="156" scope="row"><p align="left">Password<font color="#FF0000">*</font></p></th>
           							<td width="259"><font face='Verdana' size='2'>
           								<input size="50" maxlength="50" name="Password" type="password" id="name" /></font>
           							</td>
           							<td width="1"><span id="msgbox1"  ></span></td>
           						</tr>
								   <tr><th width="156" scope="row"><p align="left">Contact No.<font color="#FF0000">*</font></p></th>
           							<td width="259"><font face='Verdana' size='2'>
           								<input size="50" maxlength="50" name="contact" type="text" id="name" /></font>
           							</td>
           							<td width="1"><span id="msgbox1"  ></span></td>
           						</tr>
								   <tr><th width="156" scope="row"><p align="left">Email Id<font color="#FF0000">*</font></p></th>
           							<td width="259"><font face='Verdana' size='2'>
           								<input size="50" maxlength="50" name="emailid" type="text" id="name" /></font>
           							</td>
           							<td width="1"><span id="msgbox1"  ></span></td>
           						</tr>
           						<tr><th height="78" colspan="3" align="left" scope="row"><font color="#FF0000">*</font>All fields are compulsory<br/>
           							<center><input type="submit" />
           									<input type="reset" />
           							</center>
           							<br/></th>
           						</tr>
      					</table>
      				</form></td>
    			</tr>
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
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> |<a href="http://validator.w3.org/check/referer">XHTML</a>	|<a href="./index.html">Login pages</a></p>
		</div>
	<!-- footer-bottom ends -->		
	</div>
	
<!-- wrap ends here -->
</div>

</body>
</html>
