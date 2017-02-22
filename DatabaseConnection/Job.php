<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Job
 *
 * @author Shivam Srivastava <xshivam@xgarbagelab.com>
 * 
 */
require_once('Connection.php');
class Job {
    private $dbConnection;
    
    function __construct()
    {
        $connection = new Connection();
        $databaseConnection = $connection -> dbConnect();
        $this->dbConnection = $databaseConnection;
    }
    
    public function register($job_lable,$job_department,$job_post,$job_state,$job_vacancies,$job_age_limit,$job_educational_qualification,$job_pay_scale,$job_selection_process,$job_date_of_publish,$job_last_date_of_fee_submission,$job_last_date_of_online_submission,$job_online_link,$job_fees,$job_other)
    {
        $job_date_of_publish = date('Y-m-d',strtotime($job_date_of_publish));
        $job_last_date_of_online_submission = date('Y-m-d',strtotime($job_last_date_of_online_submission));
        $job_last_date_of_fee_submission = date('Y-m-d',strtotime($job_last_date_of_fee_submission));
        
        try{
            $stmt =$this->dbConnection->prepare("INSERT INTO naukrisamachaar_job(job_label,department,post,age_limit,state,educational_qualification,selection_process,online_link,date_of_publish,last_date_of_online_submission,fees,last_date_of_fee_submission,other_comments,salary,vacancies)
                  VALUES(:job_lable, :job_department, :job_post, :job_age_limit, :job_state, :job_educational_qualification,:job_selection_process, :job_online_link, :job_date_of_publish,  :job_last_date_of_online_submission, :job_fees, :job_last_date_of_fee_submission, :job_other, :job_pay_scale, :job_vacancies)");
            $stmt->bindparam(":job_lable", $job_lable);
            $stmt->bindparam(":job_department", $job_department);
            $stmt->bindparam(":job_post", $job_post);            
            $stmt->bindparam(":job_age_limit", $job_age_limit); 
            $stmt->bindparam(":job_state",$job_state);  
            $stmt->bindparam(":job_educational_qualification", $job_educational_qualification);
            $stmt->bindparam(":job_selection_process", $job_selection_process);
            $stmt->bindparam(":job_online_link", $job_online_link);
            $stmt->bindparam(":job_date_of_publish", $job_date_of_publish);  
            $stmt->bindparam(":job_last_date_of_online_submission", $job_last_date_of_online_submission);
            $stmt->bindparam(":job_fees", $job_fees);
            $stmt->bindparam(":job_last_date_of_fee_submission", $job_last_date_of_fee_submission);
            $stmt->bindparam(":job_pay_scale", $job_pay_scale); 
            $stmt->bindparam(":job_other", $job_other);
            $stmt->bindparam(":job_vacancies", $job_vacancies);
            
            $stmt->execute();        
        } catch(Exception $e){
           echo $e->getMessage();
        }
   
         return $stmt; 
       
    }
    
}
