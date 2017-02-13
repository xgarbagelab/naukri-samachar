$(function(){
    $('#login_submit').click(function(){
        var username=$('#username').val();
        var password=$('#password').val();
        
        if(username=="" || password==""){
            Materialize.toast('Field Cannot be left empty', 4000);  
        }
        
        else{
            $.ajax({
                type:'post',
                url:'login_action.php',
                data:{username:username,password:password},
                success:function(data){
                    if(data==1)
                    {
                        Materialize.toast('User Account Page not yet linked', 4000);  
                    }
                    
                    else if(data==2)
                    {
                        Materialize.toast('Undefined Role', 4000);  
                    }
                    
                    else if(data==3)
                    {
                        Materialize.toast('Wrong Username or Password', 4000);
                    }
                    
                    else{
                        alert(data);
                    }
                }
            });
        }
    });
});