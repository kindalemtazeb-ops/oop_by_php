<?php
class dbh{
    private function connect(){
        try{
     $username="root";
     $password="";
     $dbh=new pdo('mysql:host=localhost;dbname=ooplogin');
     return $dbh;

        }
        catch(pdoexception $e){
        print "error!:" .$e->getmessage()."<br>";
        die();
        }
    }

}
?>