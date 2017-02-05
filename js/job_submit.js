$(function(){
    $('#submit').click(function(){
        //alert("test");
        var department_name = $('#department_name').val();
        var post = $('#post').val();
        var state = $('#state').val();
        var number_of_vacancies = $('#number_of_vacancies').val();
        var age_limit = $('#age_limit').val();
        var education_qualification = $('#education_qualification').val();
        var pay_scale = $('#pay_scale').val();
        var selection_process = $('#selection_process').val(); 
        var online_link = $('#online_link').val();
        var date_of_publish = $('#date_of_publish').val();
        var last_date_of_online_submission = $('#last_date_of_online_submission').val();
        var fees = $('#fees').val();
        var last_date_of_fees_submission = $('#last_date_of_fees_submission').val();
        var others = $('#others').val();
        
        

        
//        alert(department_name);
//        alert(post);
//        alert(state);
//        alert(number_of_vacancies);
//        alert(age_limit);
//        alert(education_qualification);
//        alert(pay_scale);
//        alert(selection_process);
//        alert(online_link);
//        alert(date_of_publish);
//        alert(last_date_of_online_submission);
//        alert(fees);
//        alert(last_date_of_fees_submission);
//        alert(others);


        $.ajax({
            type:'post',
            url:'job_submit_action.php',
            data:{department_name:department_name,post:post,state:state,number_of_vacancies
            :number_of_vacancies,age_limit:age_limit,education_qualification:education_qualification,
            pay_scale:pay_scale,selection_process:selection_process,online_link:online_link,
            date_of_publish:date_of_publish,last_date_of_online_submission:last_date_of_online_submission,
            fees:fees,last_date_of_fees_submission:last_date_of_fees_submission,others:others},
            success:function(data)
            {
                $('#bulk_data').val(data);
                $('.clear').val('');
                $('.no-clear').val('');
               
                
            }
        });
    });
    
    
});

$(function(){
    $('#save_submit').click(function(){
        //alert("test");
        var department_name = $('#department_name').val();
        var post = $('#post').val();
        var state = $('#state').val();
        var number_of_vacancies = $('#number_of_vacancies').val();
        var age_limit = $('#age_limit').val();
        var education_qualification = $('#education_qualification').val();
        var pay_scale = $('#pay_scale').val();
        var selection_process = $('#selection_process').val(); 
        var online_link = $('#online_link').val();
        var date_of_publish = $('#date_of_publish').val();
        var last_date_of_online_submission = $('#last_date_of_online_submission').val();
        var fees = $('#fees').val();
        var last_date_of_fees_submission = $('#last_date_of_fees_submission').val();
        var others = $('#others').val();
        
//        alert(department_name);
//        alert(post);
//        alert(state);
//        alert(number_of_vacancies);
//        alert(age_limit);
//        alert(education_qualification);
//        alert(pay_scale);
//        alert(selection_process);
//        alert(online_link);
//        alert(date_of_publish);
//        alert(last_date_of_online_submission);
//        alert(fees);
//        alert(last_date_of_fees_submission);
//        alert(others);
        $.ajax({
            type:'post',
            url:'job_submit_action.php',
            data:{department_name:department_name,post:post,state:state,number_of_vacancies
            :number_of_vacancies,age_limit:age_limit,education_qualification:education_qualification,
            pay_scale:pay_scale,selection_process:selection_process,online_link:online_link,
            date_of_publish:date_of_publish,last_date_of_online_submission:last_date_of_online_submission,
            fees:fees,last_date_of_fees_submission:last_date_of_fees_submission,others:others},
            success:function(data)
            {
                $('#bulk_data').val(data);
                $('.clear').val('');
                
            }
        });
    });
    
    
});

$(function(){

  $('input[type="submit"]').click(function(){
  $('#state').prop('selectedIndex',0);

});
  

});
