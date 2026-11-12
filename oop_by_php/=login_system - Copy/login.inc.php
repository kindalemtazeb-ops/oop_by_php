<?php
if(isset($_post['submit'])){
    
$uid=$_post['uid'];
$pwd=$_post['pwd'];
$pwdrepeat=$_post['pwdrepeat'];
$email=$_post['email'];
//instantiate signup controler class
include "../classes/signup-controler.class.php";
include "../classes/signup.class.php";
$signup=new signup_controler($uid,$pwd,$pwdrepeat,$email);
}
?>