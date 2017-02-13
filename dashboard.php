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
    
    <body >
        <div class="page-wrap"> 
        
            <div class="container-fluid"   >
                <div class="row" style="padding: 0 0 0 0; margin: -0.5% 0 0 0;">
                    <div class="col l12 m12 s12 card blue">
                        <h4>WELCOME</h4>
                    </div>
                    
                    <!--<div class="row" style="padding: -5% 0 0 0; margin: 0% 0 0 -1%"  >-->
                        <div class="col l12 m12 s12" style="padding: 0 0 0 0; margin: -0.5% 0 0 0%;">
                            <!-- 0. MENU -->
                            <div class="col l2 m2 s12 card    blue z-depth-2" style="border-radius:25px 10px 10px 25px;border-right: 5px dashed white; ">
                                <div class="col l12 m12 s12 center" id="side-navbar">
                                    <p><a href="#">HOME</a></p><hr>
                                    <p><a href="#">JOB ENTRY</a></p><hr>
                                    <p><a href="#">JOB LIST</a></p><hr>
                                    <p><a href="#">PROFILE</a></p><hr>
                                    <p><a href="#">EMPTY</a></p><hr>
                                    <p><a href="#">EMPTY</a></p><hr>
                                    <p><a href="#">EMPTY</a></p><hr>
                                    <p><a href="#">EMPTY</a></p><hr>
                                    <p><a href="#">EMPTY</a></p>
                                </div>
                            </div>
                            
                            <!-- 1. HOME -->
                            
                            <!-- 2. JOB ENTRY-->
                            
                            <div class="col l10 m10 s10 card red-text" id="job_entry_main">
                                <div class="input-field col s4">
                                    <input type="text"  id="job_label" class="clear validate">
                                    <label for="job_label">Job Label</label>
                                </div>
                                <div class="input-field col s4">
                                    <input type="text"  id="department_name" class="clear validate">
                                    <label for="department_name">Department Name</label>
                                </div>

                                <div class="input-field col s4">
                                    <input type="text" id="post" class="clear validate">
                                    <label for="post">Post</label>
                                </div>
                    
                                <div class="input-field col s4">
                                    <select id="state" class="no-clear black-text ">
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
                    
                                <div class="input-field col s4">
                                  <input type="text"  id="number_of_vacancies" class="no-clear validate">
                                  <label for="number_of_vacancies">Number of Vacancies</label>
                                </div>
                        
                                <div class="input-field col s4">
                                  <input type="text" id="age_limit" class="clear validate">
                                  <label for="age_limit">Age Limit</label>
                                </div>

                                <div class="input-field col s4">
                                  <input type="text" id="education_qualification" class="clear validate">
                                  <label for="education_qualification">Education Qualification</label>
                                </div>

                                 <div class="input-field col s4">
                                  <input type="text" id="pay_scale" class="clear validate" >
                                  <label for="pay_scale">Pay Scale</label>
                                </div>
                        
                                <div class="input-field col s4">
                                  <input type="text" id="selection_process" class="clear validate">
                                  <label for="selection_process">Selection Process</label>
                                </div>

                                <div class=" col s4">
                                  <label for="date_of_publish" class="date">Date of Publish</label>
                                  <input type="text"  placeholder="Select" id="date_of_publish" class="clear input-field date">
                                </div>
                                
                                <div class=" col s4">
                                  <label for="last_date_of_fees_submission" class="date">Last Date of Fees Submission</label>
                                  <input type="text" placeholder="Select Date" id="last_date_of_fees_submission"  class="clear date" >
                                </div>

                                <div class=" col s4">
                                  <label for="last_date_of_online_submission" class="date">Last Date of Online Submission</label>
                                  <input type="text" placeholder="Select Date"  id="last_date_of_online_submission" class="clear date">
                                </div>
                        
                                <div class="input-field col s4">
                                  <input type="text" id="online_link" class="clear validate">
                                  <label for="online_link">Online Link</label>
                                </div>
                                
                                <div class="input-field col s4">
                                  <input type="text" id="fees" class="clear validate">
                                  <label for="Fees">Fees</label>
                                </div>

                                <div class="input-field col s4">
                                  <input type="text" id="others" class="clear validate">
                                  <label for="Others">Others</label>
                                </div>
                    
                                <div class="row">
                                        <div class="col l2 offset-l4 ">
<!--                                            <button class="btn waves-effect waves-light" id="submit">Save
                                                <i class="material-icons right">send</i>
                                            </button>-->
                                            <a class="blue white-text btn"  id="submit">SAVE<i class="material-icons right">send</i></a>
                                        </div>

                                       <div class="col l4 ">
<!--                                            <button class="btn waves-effect waves-light" id="save_submit">Save & Submit
                                                <i class="material-icons right">send</i>
                                            </button>-->
                                            <a class=" blue white-text btn "  id="save_submit">SAVE & SUBMIT<i class="material-icons right">send</i></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    <!--</div>-->
                </div>
            </div>
            <footer class="site-footer blue" style="margin-bottom: -80px;height: 55px" >
                <p class="center  white-text" style="padding:0% 0 0 0">All rights reserved &copy; 2016 xgarbagelab.com</p>
            </footer>
        </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
      <script src="js/jquery.film_roll.js"></script>
      <script src="js/main.js"></script>
      <script src="js/login.js"></script>
      <script src="js/job_submit.js"></script>
      
      <script>
          //select
        $(document).ready(function() {
            $('select').material_select();
            $('.date').pickadate();
           
          });
        </script>
    </body>
</html>
