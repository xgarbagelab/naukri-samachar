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


include_once 'User.php';
$user = new USER($databaseConnection);

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$status = $user ->login($username, $password);

if($status != 0){
    $role = $user ->role($status);
    if($role == "ADMIN") {
        $user->redirect("./dashboard.php");
    } 
    else if($role == "USER"){
        //$user->redirect("USERPROFILEPAGE") 
    } else {
        
    }
} else {
    echo 'No Such User Exist';
}





