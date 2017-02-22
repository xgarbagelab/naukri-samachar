<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Login</title>
    </head>
    <body>
        <div id ="header" style="width : 100%; background-color: #000000; color: #FFFFFF; text-align: center;">
            Test Login
        </div>
        <form action="Login.php" method="post" name="Login_Form">
            <div id="data_for_login">
                <input type ="text" id ="username" name="username"/>
                <input type ="text" id ="password" name="password"/>
                <input type="submit" value="Login"/>
                <!--<label>
                    //<?PHP 
//                        echo $_SESSION["status"];
//                        if($_SESSION["status"] == "Wrong Credentials") {
//                            session_abort();
//                        }
//                    ?>
                </label>-->
            </div>
        </form>
    </body>
</html>
