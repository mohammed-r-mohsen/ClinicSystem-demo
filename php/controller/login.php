<?php 
 include '../controller/userDB.php';
 
 if(isset($_POST['log-form'])):
    echo "tes1";
    $username = $_POST['username'];
    $password = $_POST['password'];
 $row = userDB::GetUserDB()->GetUserData();
 $_SESSION['LoginStatues'] = 'error login please try again ' ;
 
 foreach ($row as $item):
       $verfiypassword = password_verify($password, $item['password'] );
       $verfiyusername = strcmp($item['username'] , $username)==0 ;
    if($verfiyusername && $verfiypassword) :   
        return  header("Location:http://localhost/ClinicSystem/ClinicSystemSite/");
    endif;
endforeach;
else :
     header("Location:http://localhost/ClinicSystem/Login/");
endif;