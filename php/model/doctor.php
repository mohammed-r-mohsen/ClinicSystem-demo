<?php 
class doctor
{

    private $username ; 
    private $phone ; 
    private $password ; 
    private $email ; 
    private $department ;
    private $education ; 
    private $qualifications ; 
    private $order ;
    private $clinic ; 



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

    function Setemail($email) {
        $this->email = $email;
    }

    function Settype($department) {
        $this->department = $department;
    }

    function Setfolder($education){
        $this->education = $education;
    }

    function Setprofile($qualifications) {
        $this->qualifications = $qualifications;
    }

    function SetOrder($order) {
        $this->order = $order;
    }

    function SetClinic($clinic) {
        $this->clinic = $clinic;
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
    
    function getdepartment() : string{
        return $this-> department;
    }
    
    function geteducation(){
        return $this-> education;
    }
    
    function getqualifications(){
        return $this-> qualifications;
    }    

    function Getorder() {
        return $this->order;
    }

    function Getclinic() {
        return $this->clinic;
    }

}