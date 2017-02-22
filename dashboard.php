<?php 
    session_start();
   $_SESSION['user_session'];
   
//   if(!isset($_SESSION['user_session'])){
//       header("location:DatabaseConnection/Logout.php");
//   }
   
?>
<!doctype HTML>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAUKRI-SAMACHAR | DASHBOARD</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" >
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/font.css">
        <link rel="icon"       href="images/ns_logo_favicon.png">
    </head>   
    
    <body class="blue-grey darken-3" style="font-family:carnas_regular">
        <!--<div class="page-wrap" >--> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col l12 m12 s12 blue-grey darken-3" ><!--style="margin:-1.2% 0 0 -2.2%;"-->
                        <!left bar start here-->
                        <div class="col l2 m2 s2">
                            <div class="col l12 m12 s12 card"  >
                                <h4 class="black-text center">DASHBOARD</h4>
                                <img src="images/profile_pic.jpg" style="margin:0 0 0 25%" width="100"  class="center circle responsive-img">
                                <p class="center"><?php echo $_SESSION['user_name']; ?></p>
                            </div>
                            <div class="col l12 m12 s12 card "  >
                                <p class=" white center card">
                                    <i class="fa fa-home fa-2x"></i>&nbsp;&nbsp;
                                    <a href="#" class="home black-text " style="font-size:20px">HOME</a>
                                </p>
                                <p class=" white center card">
                                    <i class="fa fa-keyboard-o fa-2x"></i>&nbsp;&nbsp;
                                    <a href="#" class="job_entry black-text" style="font-size:20px">JOB ENTRY</a>
                                </p>
                                <p class="white center card">
                                    <i class="fa fa-list fa-2x"></i>&nbsp;&nbsp;
                                    <a href="" class="black-text" style="font-size:20px">JOB LIST</a>
                                </p>
                                <p class="white center card">
                                    <i class="fa fa-user-circle fa-2x"></i>&nbsp;&nbsp;
                                    <a href="" class="black-text" style="font-size:20px">USER ACCOUNT</a>
                                </p>
                                
                                <p class="white center card">
                                    <i class=" "></i>&nbsp;&nbsp;
                                    <a href="" class="black-text" style="font-size:20px">EMPTY</a>
                                </p>
                                
                                <p class="white center card">
                                    <i class=" "></i>&nbsp;&nbsp;
                                    <a href="" class="black-text" style="font-size:20px">EMPTY</a>
                                </p>
                                
                                <p class="white center card">
                                    <i class=" "></i>&nbsp;&nbsp;
                                    <a href="" class="black-text" style="font-size:20px">EMPTY</a>
                                </p>
                                
                                <p class="white center card">
                                    <i class=" "></i>&nbsp;&nbsp;
                                    <a href="" class="black-text" style="font-size:20px">EMPTY</a>
                                </p>
                                
                                 <p class="white center card">
                                    <i class=""></i>&nbsp;&nbsp;
                                    <a href="" class="black-text" style="font-size:20px">EMPTY</a>
                                </p>
                                
                                 <p class="white center card">
                                    <i class=""></i>&nbsp;&nbsp;
                                    <a href="" class="black-text" style="font-size:20px">EMPTY</a>
                                </p>
                                
                               
                                   
                               
                            </div>
                        </div>
                        <!left bar ends here-->
                        <!right bar start here-->
                        <div class="col l10 m10 s10 card black-text white  ">
                            <div class="col l8 m8 s8 ">
                                <h3 class="center ">WELCOME MR <?php echo $_SESSION['user_name']; ?></h3>
                            </div>
                            <div class="col l4 m4 s4 ">
                                <br>
                                <a href="DatabaseConnection/Logout.php"><i class="fa fa-power-off right fa-3x black-text"></i></a>
                            </div>
                        </div>   
                        
                        <div class="col l10 m10 s10">
                           <div class="row white " id="dashboard_home">
                                <?php include "dashboard_home.php";?>
                           </div> 
                            <div class="row " id="job_entry_main">
                                <?php include "dashboard_job_entry.php";?>
                            </div>
                            
                            
                        </div>
                        
                            
                           
                        </div>
                        <!right bar ends here-->
                    </div>
                      <!--<p class="center  white-text" style="">All rights reserved &copy; 2016 xgarbagelab.com</p>-->
                </div>
                 
            </div>
        <!--</div>-->
   
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
      <script src="js/dashboard.js"></script>
      <script>
          //select
        $(document).ready(function() {
            $('select').material_select();
            $('.date').pickadate();
           
          });
        </script>
    </body>
</html>
