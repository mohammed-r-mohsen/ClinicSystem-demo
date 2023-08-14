<?php 
class user
{

    private $username ; 
    private $phone ; 
    private $password ; 
    private $email ; 
    private $type ;
    private $folder ; 
    private $profile ; 

    public function __construct( $username ,$phone,$password,$email) {
        $this->username = $username;
        $this->phone =$phone;
        $this->password=password_hash($password , PASSWORD_DEFAULT);
        $this->email= $email;
    }

    function Setusername($username) {
        $this->username = $username;
    }

    function  Setphone($phone){
        $this->phone = $phone;
    }

    function Setpassword($password) {
        $this->password = password_hash($password , PASSWORD_DEFAULT) ;
    }

    function Seteemail($email) {
        $this->email = $email;
    }

    function Settype($type) {
        $this->type = $type;
    }

    function Setfolder($folder){
        $this->folder = $folder;
    }

    function Setprofile($profile) {
        $this->profile = $profile;
    }
    //getters
    function Getusername() : string   { 
        
        return ($this -> username);   
     }
    
    function getPhone():string     {
        return ( $this-> phone);
    }
    
    function getpassword(){
        return  $this->password;
    }
    
    function getEmail(){
        return $this-> email;
    }
    
    function getType(){
        return $this-> type;
    }
    
    function getFolder(){
        return $this-> folder;
    }
    
    function getProfile(){
        return $this-> profile;
    }    

}