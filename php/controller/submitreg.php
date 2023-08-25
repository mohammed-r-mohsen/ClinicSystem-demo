<?php
include '../model/user.php';
include '../model/doctor.php';
include '../controller/doctorDB.php';
include '../controller/userDB.php';

if(isset($_POST['regsubmit'])):
    $username =  $_POST['first_name'] . ' ' . $_POST['last_name'];
    $phone = $_POST['phone_number'];
    $password = $_POST['password'];
    $email = $_POST['email'];
if($_POST['type'] == "user") {
    $user = new user($username, $phone, $password, $email);
    DataBase::getDBoperation()->GetConn();
    userDB::GetUserDB()->CreateUser($user);
}elseif ($_POST['type']=="doctor") {
    $doctor = new doctor($username, $phone, $password, $email);
    DataBase::getDBoperation()->GetConn();
    doctorDB::GetDoctorDB()->CreateDoctor($doctor);
}
endif;