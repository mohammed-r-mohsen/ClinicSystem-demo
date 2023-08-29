<?php 
 include '../controller/userDB.php';
 include '../controller/doctorDB.php';
 session_start();
 if(isset($_POST['log-form'])):
    unset($_SESSION['message']);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rowUser = userDB::GetUserDB()->GetUserData();
    $rowdoctor = doctorDB::GetDoctorDB()->GetdoctorData();
 foreach ($rowUser as $item):
       $verfiypassword = password_verify($password, $item['password'] );
       $verfiyusername = strcmp($item['username'] , $username)==0 ;
    if($verfiyusername && $verfiypassword) :
        $_SESSION["id"]=$item['id'];
        $_SESSION['username'] = $item['username'];
        return  header("Location:http://localhost/ClinicSystem/ClinicSystemSite/");
    endif;
endforeach;
foreach ($rowdoctor as $item) : 
    $verfiypassword = password_verify($password, $item['password'] );
    $verfiyusername = strcmp($item['username'] , $username)==0 ;
 if($verfiyusername && $verfiypassword) :
     $_SESSION["id"]=$item['id'];
     $_SESSION['username'] = $item['username'];
     return  header("Location:http://localhost/ClinicSystem/ClinicSystemSite/");
 endif;
endforeach;
endif;
// CHECK IF USER THEN CHECK IF DOCTOR
$_SESSION['message'] = "Error username or password please try again "; 
