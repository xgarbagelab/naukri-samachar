<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/materialize.css">
         <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" >
    </head>
    <body>
        
        <div class="container-fluid">
            <div class="row card blue white-text">
                <div class="col l6 offset-l3   center">
                    <h1>JOB SUBMIT FORM</h1>
                </div>
            </div>
           <div class="row card">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                          <input  id="department_name" class="clear" name="department_name" type="text" class="validate">
                          <label for="department_name">Department Name</label>
                        </div>
                        <div class="input-field col s4">
                          <input id="post" class="clear" name="post" type="text" class="validate">
                          <label for="post">Post</label>
                        </div>
                        
                         <div class="input-field col s4">
                            <select id="state" class="no-clear">
                              <option value="" disabled selected>Select State</option>
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
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                          <input  id="number_of_vacancies" class="no-clear" name="number_of_vacancies"  type="text" class="validate">
                          <label for="number_of_vacancies">Number of Vacancies</label>
                        </div>
                        
                        <div class="input-field col s4">
                          <input id="age_limit" class="clear" name="age_limit" type="text" class="validate">
                          <label for="age_limit">Age Limit</label>
                        </div>
                        
                        <div class="input-field col s4">
                          <input id="education_qualification" class="clear" name="education_qualification" type="text" class="validate">
                          <label for="education_qualification">Education Qualification</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                          <input id="pay_scale" class="clear" name="pay_scale" type="text" class="validate">
                          <label for="pay_scale">Pay Scale</label>
                        </div>
                        
                        <div class="input-field col s4">
                          <input id="selection_process" class="clear" name="selection_process" type="text" class="validate">
                          <label for="selection_process">Selection Process</label>
                        </div>
                        
                         <div class="input-field col s4">
                          <input id="online_link" class="clear" name="online_link" type="text" class="validate">
                          <label for="online_link">Online Link</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col s4">
                           <label>Date of Publish</label>
                          <input for="date_of_publish" id="date_of_publish" class="clear" name="Date_of_Publish" type="date" class="datepicker">
                        </div>
                        
                        <div class=" col s4">
                          <label for="Last_Date_of_Online_Submission">Last Date of Online Submission</label>
                          <input id="last_date_of_online_submission" class="clear" name="Last_Date_of_Online_Submission" type="date" class="datepicker">
                        </div>
                        
                        <div class="input-field col s4">
                          <input id="fees" class="clear" name="Fees"  type="text" class="validate">
                          <label for="Fees">Fees</label>
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class=" col s6">
                            <label for="Last_Date_of_Fees_Submission">Last Date of Fees Submission</label>
                          <input id="last_date_of_fees_submission" class="clear" name="Last_Date_of_Fees_Submission" type="date" class="datepicker">
                        </div>
                        <div class="input-field col s6">
                          <input id="others" class="clear" name="Others" type="text" class="validate">
                          <label for="Others">Others</label>
                        </div>
                    </div>

<!--                        <div class="row">
                        <div class="col s12">
                          This is an inline input field:
                          <div class="input-field inline">
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                          </div>
                        </div>
                    </div>-->
                    
                </form>
               <div class="row">
                    <div class="col l2 offset-l4 ">
                        <button class="btn waves-effect waves-light" id="submit">Save
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                   
                   <div class="col l4 ">
                        <button class="btn waves-effect waves-light" id="save_submit">Save & Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
               
               <textarea id="bulk_data"></textarea>
            </div>
            
<!--            <div class="row card blue">
                <div class="col l12"><h1>NAUKRI SAMACHAR.COM</h1></div>
            </div>-->
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/job_submit.js"></script>
        <script>
        $(document).ready(function() {
            $('select').material_select();
          });
        </script>
    </body>
</html>
