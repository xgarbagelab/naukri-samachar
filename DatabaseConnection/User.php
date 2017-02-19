<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Shivam Srivastava <xshivam@xgarbagelab.com>
 */
class USER
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function register($fname,$lname,$uname,$umail,$upass)
    {
       try
       {
           $new_password = password_hash($upass, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO users(user_name,user_email,user_pass) 
                                                       VALUES(:uname, :umail, :upass)");
              
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $new_password);            
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function login($umail,$upass)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM naukrisamachaar_user WHERE user_password=:upass AND user_emain=:umail LIMIT 1");
          $stmt->execute(array(':umail'=>$umail,':upass'=>$upass));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() == 1)
          {
                $_SESSION['user_session'] = $userRow['user_id'];
                $_SESSION['user_name'] = $userRow['user_name'];
                return ($userRow['user_id']);
          } else {
              return 0;
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
   
   public function role($id) {
        try
        {
            $stmt = $this->db->prepare("SELECT * FROM naukrisamachaar_userroles WHERE user_id=:id LIMIT 1");
            $stmt->execute(array(':id'=>$id));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount() == 1)
            {
                  return $userRow['user_role'];
            } else {
                return "NO ROLES";
            }
        } catch(PDOException $e) {
             echo $e->getMessage();
        }
    }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
}
?>