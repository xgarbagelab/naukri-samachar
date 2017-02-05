<?php

date_default_timezone_set("Asia/Kolkata");

$link = mysql_connect('localhost', 'xgarbage_shivam', 'ms_2010'); //password shivam database
if (!$link) {
    die('Not connected : ' . mysql_error());
}

 //make xgarbage_db the current db
$db_selected = mysql_select_db('xgarbage_naukrisamachaar', $link);
if (!$db_selected) {
    die ('Can\'t use xgarbage_naukrisamachaar : ' . mysql_error());
}

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

echo   $insert_enquiry = mysql_query("insert into naukrisamachaar_job (department,post,age_limit
       ,state,educational_qualification,selection_process,online_link,date_of_publish,last_date_of_online_submission,
       fees,last_date_of_fee_submission,other_comments,salary,vacancies)
       values('$department_name','$post','$age_limit','$state','$education_qualification','$selection_process'
       ,'$online_link','$date_of_publish','$last_date_of_online_submission','$fees','$last_date_of_fees_submission'
       ,'$others','$pay_scale','$number_of_vacancies')") or die(mysql_error()); 