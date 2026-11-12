<?php
class signup_controler{
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;
    public function __construct($uid,$pwd,$pwdrepeat,$email){
        $this->$uid=$uid;
        $this->$pwd=$pwd;
        $this->$pwdrepeat=$pwdrepeat;

        $this->$email=$email;
    }
    private function emptyinput(){
        $result;
       if(empty($this->$uid)||empty($this->$pwd)||empty($this->$pwdrepeat)||empty($this->$email)){
           $result=false;
        }else{
            $result=true;
            }
        return $result;
        }                                                   
}



?>