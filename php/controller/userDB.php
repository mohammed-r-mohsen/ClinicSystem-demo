<?php 
    include 'DATABASE.php';
 class userDB
{
    private static $userDB = null ;  
    private $TableName = "user";
    
   public static function GetUserDB()
   {
       if(self::$userDB ==null)
       {
           self::$userDB = new userDB();
       }
       return self::$userDB;
   }



    public function setTable(string  $table)
    {
        $this->TableName = $table;
    }
    
    public function getTable()
    {
        return $this->TableName;
    }


     public function CreateUser(user $user)
     {
         $UserName=$user->Getusername();
         $UserEmail= $user->getEmail();
         $phone=$user->getPhone();
         $Password =$user->getpassword();
        
        try {
             DataBase::getDBoperation()->connect();
            
             $dirname = uniqid();
 
            $dbsql='USE '.DataBase::getDBoperation()->getdbName();
            $sql = "INSERT INTO `user`(`username`, `email`, `password`, `number`, `folder`, `type`) 
                    VALUES ('$UserName','$UserEmail','$Password','$phone','$dirname','user');";
             mkdir("../php/stoarage/$dirname",0700 , true);               
             
            DataBase::getDBoperation()->GetConn()->exec($dbsql);
            DataBase::getDBoperation()->GetConn()->exec($sql);
            
            return header("Location:http://localhost/ClinicSystem/ClinicSystemSite/");
            
            DataBase::getDBoperation()->disconnect();
        } catch (PDOException $th) {
            return header("Location:http://localhost/ClinicSystem/register/");

        }
     }
   
     public function DeleteAdmin($adminname)
     {
         try {
             DataBase::getDBoperation()->connect();
             $dbsql = 'USE '.DataBase::getDBoperation()->getdbName();
             
             $sql = "DELETE FROM admin WHERE admin.username ='$adminname';";
             
             DataBase::getDBoperation()->GetConn()->exec($dbsql);
             DataBase::getDBoperation()->GetConn()->exec($sql);
             
              
              DataBase::getDBoperation()->disconnect();
              return header("Location:http://localhost/news-project/sufee-admin-dashboard-master/admin-list.php");

         
         
            } catch (PDOException $TH) {
                return header("Location:http://localhost/news-project/sufee-admin-dashboard-master/admin-list.php");

         }
     }
    
 
     public function GetRowData($adminName)
     {
        try {
            DataBase::getDBoperation()->connect();

            $dbsql = 'USE '.DataBase::getDBoperation()->getdbName();
            $sql = "SELECT * FROM admin WHERE username = '$adminName'";
            DataBase::getDBoperation()->GetConn()->exec($dbsql);
            $result =  DataBase::getDBoperation()->GetConn()->prepare($sql);
            $result->execute();
            $DATA =[];
            if($result)
            {
                $admin = $result->fetchAll();
                
            }
            return $admin ;    
           
             
        } catch (PDOException $th) {
            return "cannot get the data causse $th" ; 
        }
     }
 
     public function UpdateAdmin($adminName , user $user)
     {
        //  $username = $admin->getName();
        //  $email = $admin->getemail();
        //  $password = $admin->getpassssword();
        //  $AdminPassword = password_hash($password , PASSWORD_DEFAULT);
        try {
            DataBase::getDBoperation()->connect();
            $dbsql = 'USE '.DataBase::getDBoperation()->getdbName();
            $sql = "UPDATE `admin` SET `username` ='$username', `email` = '$email', `password` = '$AdminPassword' WHERE `admin`.`username` = '$adminName';";
            DataBase::getDBoperation()->GetConn()->exec($dbsql);
            DataBase::getDBoperation()->GetConn()->exec($sql);
            
             return 'update record ';
             DataBase::getDBoperation()->disconnect();
           } catch (PDOException $TH) {
            return $TH->getMessage();
        }
        
     }
      
      public function GetUserData()
      {
          try {
              DataBase::getDBoperation()->connect();

              $dbsql = 'USE '.DataBase::getDBoperation()->getdbName();
              $sql = "SELECT * FROM user;";
              DataBase::getDBoperation()->GetConn()->exec($dbsql);
              $result =  DataBase::getDBoperation()->GetConn()->prepare($sql);
              $result->execute();
              $DATA =[];
              if($result)
              {
                  $users = $result->fetchAll();
                  
              }
              return $users ;    
             
               
          } catch (PDOException $th) {
              return "cannot get the data causse $th" ; 
          }
      }
}
