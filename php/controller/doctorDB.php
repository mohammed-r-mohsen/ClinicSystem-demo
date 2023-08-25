<?php 
 class doctorDB
{
    private static $doctorDB = null ;  
    private $TableName = "doctor";
    
   public static function GetDoctorDB()
   {
       if(self::$doctorDB ==null)
       {
           self::$doctorDB = new doctorDB();
       }
       return self::$doctorDB;
   }



    public function setTable(string  $table)
    {
        $this->TableName = $table;
    }
    
    public function getTable()
    {
        return $this->TableName;
    }


     public function CreateDoctor(doctor $doctor)
     {
         $doctorName=$doctor->Getusername();
         $doctorEmail= $doctor->getEmail();
         $phone=$doctor->getPhone();
         $Password =$doctor->getpassword();
        
        try {
             DataBase::getDBoperation()->connect();
            
             $dirname = uniqid();
 
            $dbsql='USE '.DataBase::getDBoperation()->getdbName();
            $sql = "INSERT INTO `doctor`( `username`, `email`, `password`, `phone`) 
                    VALUES ('$doctorName','$doctorEmail','$Password','$phone')"; 
            DataBase::getDBoperation()->GetConn()->exec($dbsql);
            DataBase::getDBoperation()->GetConn()->exec($sql);
            
            return header("Location:http://localhost/ClinicSystem/ClinicSystemSite/");
            
            DataBase::getDBoperation()->disconnect();
        } catch (PDOException $th) {
            echo "$th";
            // return header("Location:http://localhost/ClinicSystem/register/");

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
