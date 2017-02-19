$(function(){
    
    $('.home').click(function(){
        $('#dashboard_home').slideDown(1000);
        $('#job_entry_main').slideUp(1000);
        $('#job_list_main').slideUp(1000);
        $('#user_account_main').slideUp(1000);
    });
    
    $('.job_entry').click(function(){
        $('#job_entry_main').slideDown(1000);
        $('#dashboard_home').slideUp(1000);
        $('#job_list_main').slideUp(1000);
        $('.user_account_main').slideUp(1000);
    });
    
    $('.job_list').click(function(){
        $('#job_list_main').slideDown(1000);
        $('#dashboard_home').slideUp(1000);
        $('#job_entry_main').slideUp(1000);
        $('#user_account_main').slideUp(1000);
    });
    
    $('.user_account').click(function(){
        $('#user_account_main').slideDown(1000);
        $('#dashboard_home').slideUp(1000);
        $('#job_entry_main').slideUp(1000);
        $('#job_list_main').slideUp(1000);
    });
});