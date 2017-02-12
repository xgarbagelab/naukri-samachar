<?php

/**
 * Login Script
 *
 * @author Shivam Srivastava <xshivam@xgarbagelab.com>
 * 
 */

require_once('./Connection.php');
$connection = new Connection();
$databaseConnection = $connection -> dbConnect();

session_start();

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM naukrisamachaar_user WHERE user_emain='$username' and user_password='$password'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1 && $result){ 
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        $_SESSION["username"] = $row[1];
        $_SESSION["userId"] =  $row[0];
    }
    
    $userId = $_SESSION["userId"];
    
    //To get the role
    $sql = "SELECT * FROM naukrisamachaar_userroles WHERE user_id = '$userId'";
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);
    
    if($count == 1 && $result) {
        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
            $_SESSION["role"] = $row[1];
        }
    }
    
    if($_SESSION["role"] == "ADMIN") {
       header("location:../Dashboard.php"); 
    } else if($_SESSION["role"] == "USER") {
       echo "User Account Page not yet linked"; 
    } else {
       echo "Undefined Role";
    }
}
else {
    $_SESSION["status"] = "Wrong Credential";
    header("location:Test.php"); 
    echo "Wrong Username or Password";
}


