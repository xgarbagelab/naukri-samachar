<form method="post">
                            <div class="col l12 m12 s12 card " style="margin:-0.5% 0 0 0 ">
                                <br>
                                <!--<h4 class="">JOB ENTRY</h4>--><p class="btn-floating tooltipped  left orange" data-position="right" data-delay="50" data-tooltip="Job Entry"> <i class=" fa fa-keyboard-o"></i></p>
                                <br><br><br><hr>
                                <div class="input-field col l4 m4 s6">
                                    <input type="text"  id="job_label" name ="job_label" class="clear validate">
                                    <label for="job_label">Job Label</label>
                                </div>
                                <div class="input-field col l4 m4 s6">
                                    <input type="text"  id="department_name" name ="department_name" class="clear validate">
                                    <label for="department_name">Department Name</label>
                                </div>

                                <div class="input-field col l4 m4 s6">
                                    <input type="text" id="post" name="post" class="clear validate">
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
                                  <input type="text"  id="number_of_vacancies" name="number_of_vacancies" class="no-clear validate">
                                  <label for="number_of_vacancies">Number of Vacancies</label>
                                </div>
                        
                                <div class="input-field col l4 m4 s6">
                                  <input type="text" id="age_limit" name="age_limit" class="clear validate">
                                  <label for="age_limit">Age Limit</label>
                                </div>

                                <div class="input-field col l4 m4 s6">
                                  <input type="text" id="education_qualification" name="education_qualification" class="clear validate">
                                  <label for="education_qualification">Education Qualification</label>
                                </div>

                                 <div class="input-field col l4 m4 s6">
                                  <input type="text" id="pay_scale" class="clear validate" name="pay_scale" >
                                  <label for="pay_scale">Pay Scale</label>
                                </div>
                        
                                <div class="input-field col l4 m4 s6">
                                  <input type="text" id="selection_process" name="selection_process" class="clear validate">
                                  <label for="selection_process">Selection Process</label>
                                </div>

                                <div class="col l4 m4 s6">
                                  <label for="date_of_publish" class="date">Date of Publish</label>
                                  <input type="text"  placeholder="Select" id="date_of_publish" name="date_of_publish" class="clear input-field date">
                                </div>
                                
                                <div class="col l4 m4 s6">
                                  <label for="last_date_of_fees_submission" class="date">Last Date of Fees Submission</label>
                                  <input type="text" placeholder="Select Date" id="last_date_of_fees_submission" name="last_date_of_fees_submission"  class="clear date" >
                                </div>

                                <div class="col l4 m4 s6">
                                  <label for="last_date_of_online_submission" class="date">Last Date of Online Submission</label>
                                  <input type="text" placeholder="Select Date"  id="last_date_of_online_submission" name="last_date_of_online_submission" class="clear date">
                                </div>
                        
                                <div class="input-field col l4 m4 s6">
                                  <input type="text" id="online_link" name="online_link" class="clear validate">
                                  <label for="online_link">Online Link</label>
                                </div>
                                
                                <div class="input-field col l4 m4 s6">
                                  <input type="text" id="fees" name="fees" class="clear validate">
                                  <label for="Fees">Fees</label>
                                </div>

                                <div class="input-field col l4 m12 s12">
                                  <input type="text" id="others" name="others" class="clear validate">
                                  <label for="Others">Others</label>
                                </div>
                    
                                <div class="row">
                                        <div class="col l2 m4 s12 offset-l4  ">
                                            <button class="btn waves-effect waves-light" id="submit"  name="submit">Save
                                                <i class="material-icons right">send</i>
                                            </button>
<!--                                            <a class="red white-text btn"  id="submit">SAVE<i class="material-icons right">send</i></a>-->
                                        </div>

                                       <div class="col l4 m6 s12 ">
<!--                                            <button class="btn waves-effect waves-light" id="save_submit">Save & Submit
                                                <i class="material-icons right">send</i>
                                            </button>-->
                                            <a class=" red white-text btn "  id="save_submit">SAVE & SUBMIT<i class="material-icons right">send</i></a>
                                        </div>
                                    </div>
                                <br>
                            </div>

                                <br><br>
                            </div>
    </form>
