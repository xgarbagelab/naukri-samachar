<?php

/**
 * Login Script
 *
 * @author Shivam Srivastava <xshivam@xgarbagelab.com>
 * 
 */
    require_once('./DatabaseConnection/Connection.php');
    $connection = new Connection();
    $databaseConnection = $connection -> dbConnect();


    include_once './DatabaseConnection/User.php';
    $user = new USER($databaseConnection);

    if($user->is_loggedin()!="")
    {
        //$user->redirect('home');
        echo "Already Login";
    }

    if(isset($_POST['btn-login']))
    {
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
            echo $user ->role($status);
        } else {
            echo 'No Such User Exist';
        }
    }
?>

<!doctype HTML>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAUKRI SAMACHAR-LOGIN</title>
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" >
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
     
        <div class="container">
            <div class="row">
                <div class="col l5 m5 s5 card" >
                    <div class="col l12 m12 s12  card">
                        <!--<h4 class="  white-text" >LOGIN </h4>&nbsp;&nbsp;&nbsp;<span class="grey-text" style="font-size:20px">This page is restricted</span></h3>-->
                        <img src="images/naukri_samachar_new_3.png" class="">
                    </div>
                    <form method="post" name="Login_Form">
                        <div class="input-field col l12 m12 s12">
                            <input id="uname"  name="uname" type="text" class="validate">
                            <label for="uname"><i class="fa fa-sign-in fa-2x"></i>&nbsp; Enter Your Username </label>
                        </div>

                        <div class="input-field col l12 m12 s12">
                            <input id="password"  name="password" type="password" class="validate">
                            <label for="password"><i class="fa fa-key fa-2x"></i>&nbsp;Enter Your Password </label>
                        </div>

                        <div class="input-field col l12 m12 s12 center">
                           <button class="btn waves-effect waves-light" id="submit" name="btn-login">Save
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
        
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/main.js"></script>
    </body>
</html>
