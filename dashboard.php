<?php 
   session_start();

   if(!isset($_SESSION['user_session'])){
       header("location:DatabaseConnection/Logout.php");
   }
   
?>
<?php

/**
 * Login Script
 *
 * @author Shivam Srivastava <xshivam@xgarbagelab.com>
 * 
 */
    include_once './DatabaseConnection/Job.php';
    $job = new Job();
   
    if(isset($_POST['submit']))
    {
        echo "<script type='text/javascript'>alert(Hello);</script>";
        // username and password sent from form
        $job_label=$_POST['job_label'];
        $job_department=$_POST['department_name'];
        $job_post=$_POST['post'];
        $job_state=$_POST['state'];
        $job_vacancies=$_POST['number_of_vacancies'];
        $job_age_limit=$_POST['age_limit'];
        $job_educational_qualification=$_POST['education_qualification'];
        $job_pay_scale=$_POST['pay_scale'];
        $job_selection_process=$_POST['selection_process'];
        $job_date_of_publish=$_POST['date_of_publish'];
        $job_last_date_of_fee_submission=$_POST['last_date_of_fees_submission'];
        $job_last_date_of_online_submission=$_POST['last_date_of_online_submission'];
        $job_online_link=$_POST['online_link'];
        $job_fees=$_POST['fees'];
        $job_other=$_POST['others'];
        
        echo "<script type='text/javascript'>alert('$job_last_date_of_fee_submission');</script>";

        $status_post = $job->register($job_label,$job_department,$job_post,$job_state,$job_vacancies,$job_age_limit,$job_educational_qualification,$job_pay_scale,$job_selection_process,$job_date_of_publish,$job_last_date_of_fee_submission,$job_last_date_of_online_submission,$job_online_link,$job_fees,$job_other);
        
        //echo "<script type='text/javascript'>alert('$status_post');</script>";
    }
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
                            <!-- 2. JOB ENTRY-->
<!--                            <form method="post">
                                <div class="col l10 m10 s10 card" id="job_entry_main">
                                    <h1 class="center">JOB ENTRY</h1><hr>
                                    <div class="input-field col l4 m4 s6">
                                        <input type="text"  id="job_label" class="clear validate" name ="job_lable">
                                        <label for="job_label">Job Label</label>
                                    </div>
                                    <div class="input-field col l4 m4 s6">
                                        <input type="text"  id="department_name" class="clear validate" name="department_name">
                                        <label for="department_name">Department Name</label>
                                    </div>

                                    <div class="input-field col l4 m4 s6">
                                        <input type="text" id="post" class="clear validate" name="post">
                                        <label for="post">Post</label>
                                    </div>

                                    <div class="input-field col l4 m4 s6">
                                    <select id="state" class="no-clear black-text " name="state">
                                      <option class="black-text" value="" disabled selected> Select State</option>
                                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                      <option value="Assam">Assam</option>
                                      <option value="Bihar">Bihar</option>
                                      <option value="Chhattisgarh">Chhattisgarh</option>
                                      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                      <option value="Daman and Diu">Daman and Diu</option>
                                      <option value="Delhi">Delhi</option>
                                      <option value="Goa">Goa</option>
                                      <option value="Gujarat">Gujarat</option>
                                      <option value="Haryana">Haryana</option>
                                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                      <option value="Jharkhand">Jharkhand</option>
                                      <option value="Karnataka">Karnataka</option>
                                      <option value="Kerala">Kerala</option>
                                      <option value="Madhya Pradesh">Madhya Pradesh/option>
                                      <option value="Maharashtra">Maharashtra</option>
                                      <option value="Manipur">Manipur</option>
                                      <option value="Meghalaya">Meghalaya</option>
                                      <option value="Mizoram">Mizoram</option>
                                      <option value="Nagaland">Nagaland</option>
                                      <option value="Orissa">Orissa</option>
                                      <option value="Puducherry">Puducherry</option>
                                      <option value="Punjab">Punjab</option>
                                      <option value="Rajasthan">Rajasthan</option>
                                      <option value="Sikkim">Sikkim</option>
                                      <option value="Tamil Nadu">Tamil Nadu</option>
                                      <option value="Telangana">Telangana</option>
                                      <option value="Tripura">Tripura</option>
                                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                                      <option value="Uttarakhand">Uttarakhand</option>
                                      <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>

                                    <div class="input-field col l4 m4 s6">
                                      <input type="text"  id="number_of_vacancies" class="no-clear validate" name="number_of_vacancies">
                                      <label for="number_of_vacancies">Number of Vacancies</label>
                                    </div>

                                    <div class="input-field col l4 m4 s6">
                                      <input type="text" id="age_limit" class="clear validate" name="age_limit">
                                      <label for="age_limit">Age Limit</label>
                                    </div>

                                    <div class="input-field col l4 m4 s6">
                                      <input type="text" id="education_qualification" class="clear validate" name="education_qualification">
                                      <label for="education_qualification">Education Qualification</label>
                                    </div>

                                     <div class="input-field col l4 m4 s6">
                                      <input type="text" id="pay_scale" class="clear validate" name="pay_scale">
                                      <label for="pay_scale">Pay Scale</label>
                                    </div>

                                    <div class="input-field col l4 m4 s6">
                                      <input type="text" id="selection_process" class="clear validate" name="selection_process">
                                      <label for="selection_process">Selection Process</label>
                                    </div>

                                    <div class="col l4 m4 s6">
                                      <label for="date_of_publish" class="date">Date of Publish</label>
                                      <input type="text"  placeholder="Select" id="date_of_publish" class="clear input-field date" name="date_of_publish">
                                    </div>

                                    <div class="col l4 m4 s6">
                                      <label for="last_date_of_fees_submission" class="date">Last Date of Fees Submission</label>
                                      <input type="text" placeholder="Select Date" id="last_date_of_fees_submission"  class="clear date" name="last_date_of_fees_submission">
                                    </div>

                                    <div class="col l4 m4 s6">
                                      <label for="last_date_of_online_submission" class="date">Last Date of Online Submission</label>
                                      <input type="text" placeholder="Select Date"  id="last_date_of_online_submission" class="clear date" name="last_date_of_online_submission">
                                    </div>

                                    <div class="input-field col l4 m4 s6">
                                      <input type="text" id="online_link" class="clear validate" name="online_link">
                                      <label for="online_link">Online Link</label>
                                    </div>

                                    <div class="input-field col l4 m4 s6">
                                      <input type="text" id="fees" class="clear validate" name="fees">
                                      <label for="Fees">Fees</label>
                                    </div>

                                    <div class="input-field col l4 m12 s12">
                                      <input type="text" id="others" class="clear validate" name="others">
                                      <label for="Others">Others</label>
                                    </div>

                                    <div class="row">
                                            <div class="col l2 m4 s12 offset-l4  ">
                                                <button class="btn waves-effect waves-light" id="submit" name="submit">Save
                                                    <i class="material-icons right">send</i>
                                                </button>
<!--                                                <a class="blue white-text btn"  id="submit" name="submit">SAVE<i class="material-icons right">send</i></a>-->
                                            </div>

                                           <div class="col l4 m6 s12 ">
    <!--                                            <button class="btn waves-effect waves-light" id="save_submit">Save & Submit
                                                    <i class="material-icons right">send</i>
                                                </button>-->
                                                <a class=" blue white-text btn "  id="save_submit" name="save_submit">SAVE & SUBMIT<i class="material-icons right">send</i></a>
                                            </div>
                                        </div>
                                </div>
                            </form>-->

                            
                            
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

      <script src="js/jquery.film_roll.js"></script>
      <script src="js/main.js"></script>
      <script src="js/login.js"></script>
<!--      <script src="js/job_submit.js"></script>-->
      <script src="js/dashboard.js"></script>
      <script>
          //select
        $(document).ready(function() {
            $('select').material_select();
            $('.date').pickadate({format: 'dd-mm-yyyy'});
           
          });
        </script>
    </body>
</html>
