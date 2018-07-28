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
            <!--header ends-->
	
            <!-- featured starts -->
            <!-- content -->
            <div id="content-outer" class="clear">
              <div id="content-wrap">
                <div id="content">
                  <table width="400" border="0" cellspacing="0" cellpadding="0">
                    <tr><td width="100%">
                        
                        <table width="482" height="415" border="0" align="left" >
                          <tr colspan=0><td align="Center" colspan="6"><h2 align="center">Assign the Order</h2></td>
                          </tr>

                          
                           

                          <?php
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
                            $query = mysql_query("select * from `order` where orderid = $orderid", $con);
                          
                            while($row = mysql_fetch_array($query)){

                              echo "<form action='./deliveredupdate_comp.php' name='input' method='POST' >";


                              echo "<tr> <th width='87' scope='row'><p align='left'>Order Id<font color='#FF0000'>*</font></p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>";
                              echo "<input size='15' maxlength='10' name='orderid' type='text' id='name' value='$row[orderid]' /></font></td></tr>";
                              
                              echo "<!-- Language Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Language</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[language]</font></td></tr>";

                              echo "<!-- Name of person-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Name of person</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[name]</font></td></tr>";

                              echo "<!-- Contact Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Contact</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[contact]</font></td></tr>";

                              echo "<!-- Email ID Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Email ID</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[emailid]</font></td></tr>";

                              echo "<!-- Address Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Address</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[address]</font></td></tr>";
                              
                              echo "<!-- Description of Book Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Description of Book</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[descript]</font></td></tr>";

                              echo "<!-- Quantity Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Quantity</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[quantity]</font></td></tr>";

                              echo "<!-- Create Review Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Create Review</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[createreview]</font></td></tr>";

                              echo "<!-- Create Date Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Creation Date</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[createdon]</font></td></tr>";

                              echo "<!-- Created By Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Creation By</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[createdby]</font></td></tr>";

                              echo "<!-- Assigned Review Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Assigned Review</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[assignreview]</font></td></tr>";

                              echo "<!-- Assigned Date Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Assinged Date</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[asigndate]</font></td></tr>";

                              echo "<!-- Assigned to Row-->";
                              echo "<tr><th width='87' scope='row'><p align='left'>Assigned TO</p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>$row[asignto]</font></td></tr>";

                              echo "<tr> <th width='87' scope='row'><p align='left'>Delivered By<font color='#FF0000'>*</font></p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>";
                              echo "<input size='15' maxlength='50' name='deliveredby' type='text' id='name' /></font></td></tr>";
                              
                              echo "<tr> <th width='87' scope='row'><p align='left'>Delivered Review<font color='#FF0000'>*</font></p></th>";
                              echo "<td colspan='4'><font face='Verdana' size='2'>";
                              echo "<input size='15' maxlength='100' name='deliveredreview' type='text' id='name' /></font></td></tr>";

                              echo "<tr><th height='78' colspan='6' align='left' scope='row'><font color='#FF0000'>*</font>All fields are compulsory<br/>";
                              echo "<center> <input type='submit' />&nbsp; &nbsp; &nbsp;<input type='reset' /></center><br/></th></tr>"; 
                            }
                            if (!mysql_query($query,$con))
                            {
                              die('Error: ' . mysql_error());
                            }
                            mysql_close($con);
                          ?>
                          <!-- Reivew of Order-->
                          
                          
                        </table>
                        </form>
                      </tr>
                    </table> 
                  </div>	
        
                <!-- content end -->	
                </div>
              </div>
      
	
              
              <!-- footer starts here -->	
	
  
            <div id="footer-outer" class="clear"></div>
	
	
            <!-- footer-bottom starts -->		
	          <div id="footer-bottom">
		          <div class="bottom-left"> <p>&copy; 2018 <strong>All reight are reserve</strong>&nbsp; &nbsp; &nbsp;Design by SMP</p></div>
	
              <div class="bottom-right"> 
                <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
                <a href="http://validator.w3.org/check/referer">XHTML</a>	|
                <a href="../new site/index.php">Login Page</a>		
              </div>
    
            <!-- footer-bottom ends -->		
	          </div>
	          <!-- wrap ends here -->
            </div>

    </body>
</html>
