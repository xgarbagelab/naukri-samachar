<?php

date_default_timezone_set("Asia/Kolkata");

//////$link = mysql_connect('localhost', 'xgarbage_shivam', 'ms_2010'); //password shivam database
//$link = mysql_connect('localhost','root','');//local database
//{
//    die('Not connected : ' . mysql_error());
//}
//
//// //make xgarbage_db the current db
//////$db_selected = mysql_select_db('xgarbage_naukrisamachaar', $link);//server database
//$db_selected = mysql_select_db('nsm4', $link);//local database
//if (!$db_selected) {
//    die ('Can\'t use xgarbage_naukrisamachaar : ' . mysql_error());
//}

// Create connection
$conn = mysqli_connect("localhost","root", "","nsm4");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$job_label = $_POST['job_label'];
$department_name = $_POST['department_name'];
$post = $_POST['post'];
$state = $_POST['state'];
$number_of_vacancies = $_POST['number_of_vacancies'];
$age_limit = $_POST['age_limit'];
$education_qualification = $_POST['education_qualification'];
$pay_scale = $_POST['pay_scale'];
$selection_process = $_POST['selection_process'];
$online_link = $_POST['online_link'];
$date_of_publish = $_POST['date_of_publish'];
$last_date_of_online_submission = $_POST['last_date_of_online_submission'];
$fees = $_POST['fees'];
$last_date_of_fees_submission = $_POST['last_date_of_fees_submission'];
$others = $_POST['others'];

//echo $department_name;
//echo $post;
//echo $state;
//echo $number_of_vacancies;
//echo $age_limit;
//echo $education_qualification;
//echo $pay_scale;
//echo $selection_process;
//echo $online_link;
//echo $date_of_publish;
//echo $last_date_of_online_submission;
//echo $fees;
//echo $last_date_of_fees_submission;
//echo $others;

echo   $insert_enquiry = mysqli_query($conn,"insert into naukrisamachaar_job (job_label,department,post,age_limit
       ,state,educational_qualification,selection_process,online_link,date_of_publish,last_date_of_online_submission,
       fees,last_date_of_fee_submission,other_comments,salary,vacancies)
       values('$job_label','$department_name','$post','$age_limit','$state','$education_qualification','$selection_process'
       ,'$online_link','$date_of_publish','$last_date_of_online_submission','$fees','$last_date_of_fees_submission'
       ,'$others','$pay_scale','$number_of_vacancies')") or die(mysql_error()); 