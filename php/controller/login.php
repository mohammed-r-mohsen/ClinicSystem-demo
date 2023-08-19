<?php 
 include '../controller/userDB.php';
 session_start() ;
 if(isset($_POST['log-form'])):
    unset($_SESSION['message']);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $row = userDB::GetUserDB()->GetUserData();
 foreach ($row as $item):
       $verfiypassword = password_verify($password, $item['password'] );
       $verfiyusername = strcmp($item['username'] , $username)==0 ;
    if($verfiyusername && $verfiypassword) :
        $_SESSION["id"]=$item['id'];
        $_SESSION['username'] = $item['username'];
        return  header("Location:http://localhost/ClinicSystem/ClinicSystemSite/");
    else :
        $_SESSION['message'] = "Error username or password please try again "; 
        header("Location:http://localhost/ClinicSystem/Login/" , ); 
    endif;
endforeach;
endif;