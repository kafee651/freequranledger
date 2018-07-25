<?php
    // Starting Session
    session_start(); 
    // Variable To Store Error Message
    $error=''; 
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
	        session_destroy();
            header("location: index.php");
        }
        else{
            // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['password'];
            
            // Database credential file
            include 'databaseconnection.php';
            
            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            $connection = mysql_connect($dbhostname, $dbuserid, $dbpassword);
            // To protect MySQL injection for Security purpose
            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysql_real_escape_string($username);
            $password = mysql_real_escape_string($password);
            
            // Selecting Database
            $db = mysql_select_db($dbname, $connection);
            
            echo $connection;
            echo $db;
            // SQL query to fetch information of registerd users and finds user match.
            $query = mysql_query("select * from profile where password='$password' AND userid='$username'", $connection);
            $rows = mysql_num_rows($query);
            print_r($rows);
            echo $query;
            echo $rows;
            if ($rows == 1) {
                $_SESSION['login_user']=$username; // Initializing Session
                header("location:profile.php"); // Redirecting To Other Page
            } else {
                $error = "Username or Password is invalid";
		        session_destroy();
		        header("location:index.php");
            }
            mysql_close($connection); // Closing Connection
        }
    }
    else{
	session_destroy();
        header("location: index.php");
    }
?>
