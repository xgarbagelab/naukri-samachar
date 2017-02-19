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

//    if($user->is_loggedin()!="")
//    {
//        $user_name = $_SESSION['user_name']. " - You are already Logged In";
//        echo "<script type='text/javascript'>alert('$user_name');</script>";
//    }
    
    if(isset($_POST['login-btn']))
    {
        if($user->is_loggedin()!="")
        {
                $user_name = $_SESSION['user_name']. " - You are already Logged In";
                echo "<script type='text/javascript'>alert('$user_name');</script>";
                if($_SESSION['role'] == "ADMIN") {
                    $user->redirect("./dashboard.php");
                } else if ($_SESSION['role'] == "USER"){
                    //$user->redirect(USERPROFILE URL);
                }
        } else {
            echo "<a href=#login></a>";
        }
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
            $role = $user ->role($status);
            if($role == "ADMIN") {
                $_SESSION['roles'] = "ADMIN";
                $user->redirect("./dashboard.php");
            } 
            else if($role == "USER"){
                //$user->redirect("USERPROFILEPAGE") 
                $_SESSION['roles'] = "USER";
            } else {
                   echo "<script type='text/javascript'>alert('$role');</script>";
            }
        } else {
            $message = 'No Such User Exist';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>
<!doctype HTML>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAUKRI SAMACHAR</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" >
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font.css">
        <link rel="icon" href="images/ns_logo_favicon.png">
    </head>
    <body>
        <div class="page-wrap">  
            <div class="container-fluid">
                 <!--Navbar for large device-->
                <div class="row  center hide-on-small-and-down">
                    <div class="col l12 m12 s12 blue">
                        <div class="col l2 m2 s2 nav-logo">
                            <img src="images/naukri_samachar_new.png" class="responsive-img"> 
                        </div>

                        <div class="col l2 m2 s2 nav-bar">
                            <span><a href="#">HOME</a></span>
                        </div>
                        <div class="col l2 m2 s2 nav-bar">
                            <span><a href="#">JOB PORTAL</a></span>
                        </div>
                        <div class="col l2 m2 s2 nav-bar ">
                            <span><a href="#">COURSE PORTAL</a></span>
                        </div>
                        <div class="col l2 m2 s2 nav-bar">
                            <span><a href="#">CONTACT US</a></span>
                        </div>
                        <form method="post">
                            <div class="col l2 m2 s2 nav-bar nav-bar-login">
                                <span><a href="#login"><i class="fa fa-lock fa-3x"></i></a></span>
                            </div>
                        </form>
                    </div>
                    <!--<hr style="border:5px solid blue">--> 
                </div>

                <!--navbar for small device -->
                      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons hide-on-med-and-up">menu</i></a>
                      <ul class="side-nav black-text " id="mobile-demo">
                        <li class="center"><img src="images/naukri_samachar_new.png" class="responsive-img"> </li>
                        <li class="blue card"><a class="blue" href="sass.html">HOME</a></li>
                        <li class="orange card" ><a class="orange" href="badges.html">JOB PORTAL</a></li>
                        <li class="yellow card"><a class="Yellow" href="collapsible.html">COURSE PORTAL</a></li>
                        <li class="green card"><a class="green" href="mobile.html">CONTACT US</a></li>
                        <li class="red card"><a  class="red" href="#login"><i class="fa fa-lock fa-3x"></i></a></li>
                        <!--<li class="amber"><a  class="amber" href="mobile.html">SIGN-IN</a></li>-->
                      </ul>
                    <!--</div>-->
                <!--</nav>-->

                <div class="row home-main">
                    <div class="col l12 m12 s12">
                        <div class="col l9 m9 s9 home-content">
                            <p>NS (Naukri Samachaar) is a portal for all the government job 
                                seekers. This portal make the job easy for all the job hunters. 
                                This portal will update all the hunters with new opening in 
                                different Government departments with the massive collection of 
                                contents. We will be collaborating with all the famous coaching 
                                centers those helps the hunters to chose the best on based on 
                                their demographical and purpose. So please be keep in touch for 
                                better performance. We are trying to keep job hunting easy so that 
                                you just checkout your desire jobs and prepare to get them easily.
                                
                                You can check our course tab to get the content which help you
                                to get the job and help you too prepare for it in a systematic way.
                                You can also create account to checkout the book-marked job anywhere
                                anytime.</p>

                                <div class="col l9 m9 s9">
                                    <div class="box box-default" id="slider2-box">
                                        <div id="slider2">
                                            <div class="card center job-post">
                                                <h5 class=""><br>South India Banks Jobs</h5>
                                                <p>201 Vacancies-PO - PAN India</p>
                                                <p>Age - Not more than 25 years as on 31.12.2016.</p> 
                                                <p>Candidate should be born on or after 01.01.1992</p>
                                                <p>and on or before 31.12.1996</p>
                                                <p><a href="#" class="center">See Details</a></p>
                                            </div>
                                            <div class="card center job-post">
                                                <h5 class=" "><br>South India Banks Jobs</h5>
                                                <p>201 Vacancies-PO - PAN India</p>
                                                <p>Age - Not more than 25 years as on 31.12.2016.</p> 
                                                <p>Candidate should be born on or after 01.01.1992</p>
                                                <p>and on or before 31.12.1996</p>
                                                <p><a href="#" class="center">See Details</a></p>
                                            </div>

                                            <div class="card center job-post">
                                                <h5 class=" "><br>South India Banks Jobs</h5>
                                                <p>201 Vacancies-PO - PAN India</p>
                                                <p>Age - Not more than 25 years as on 31.12.2016.</p> 
                                                <p>Candidate should be born on or after 01.01.1992</p>
                                                <p>and on or before 31.12.1996</p>
                                                <p><a href="#" class="center">See Details</a></p>
                                            </div>
                                            
                                             <div class="card center job-post">
                                                <h5 class=" "><br>South India Banks Jobs</h5>
                                                <p>201 Vacancies-PO - PAN India</p>
                                                <p>Age - Not more than 25 years as on 31.12.2016.</p> 
                                                <p>Candidate should be born on or after 01.01.1992</p>
                                                <p>and on or before 31.12.1996</p>
                                                <p><a href="#" class="center">See Details</a></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col l3 m3 s3">
                            <p><img src="images/dominos.png" width="350" class="responsive-img"></p>
                            <p><img src="images/dominos.png" width="350" class="responsive-img"></p>
                            <!--<p><img src="images/dominos.png" width="350" class="responsive-img"></p>-->
                        </div>
                    </div>
                </div>

               <!--LOGIN MODAL-->
                <div id="login" class="modal">
                    <div class="modal-content">
                       <div class="row">
                            <div class="" >
                                <div class="col l12 m12 s12 center blue card">
                                    <h4 class="black-text  center white-text" style="font-family: carnas_light;margin:1.3% 0 0 0" >LOGIN </h4>

                                    <!--<img src="images/ns_login_logo_200.png" class=" ">-->
                                </div>

                                <!--<hr style="border:5px solid black">-->
                                <form method="post" name="Login_Form">
                                    <div class="input-field col l12 m12 s12">
                                        <input type="text" id="username" name="username">
                                        <label for="username"><i class="fa fa-user fa-2x"></i>&nbsp; Enter Your Username </label>
                                    </div>

                                    <div class="input-field col l12 m12 s12">
                                        <input type="password" id="password" name="password">
                                        <label for="password"><i class="fa fa-key fa-2x"></i>&nbsp;Enter Your Password </label>
                                    </div>

                                    <div class="input-field col l12 m12 s12 center">
                                        <button class="btn-flat" id="submit" name="btn-login">
                                            <a class="blue white-text btn"  id="login_submit">SUBMIT<i class="material-icons right">send</i></a>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <footer class="site-footer blue" >
            <p class="center  white-text" style="padding:1% 0 0 0">All rights reserved &copy; 2016 xgarbagelab.com</p>
       </footer>-->
     
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
      <script src="js/jquery.film_roll.js"></script>
      <script src="js/main.js"></script>
      <script src="js/login.js"></script>
    </body>
</html>
