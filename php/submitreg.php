<?php
include './model/user.php';
include './controller/userDB.php';
if(isset($_POST['regsubmit'])){
    $username =  $_POST['first_name'] . ' ' . $_POST['last_name'];
    $phone = $_POST['phone_number'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $user = new user($username , $phone , $password , $email);
    DataBase::getDBoperation()->GetConn();
    userDB::GetUserDB()->CreateUser($user);
}