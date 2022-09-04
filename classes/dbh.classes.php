<?php

class Dbh {
    protected function connect(){
        try{
            $host = 'localhost';
            $user = 'root';
            $password = '~rn_~fayq(Es3.7';
            $dbname = 'writings';
            $dns = 'mysql:host='. $host .';dbname='.$dbname;
            $dbh = new PDO($dns, $user, $password);
            
            return $dbh;
        } catch(PDOException $e){
            print 'Error!: ' . $e->getMessage() . '<br>';
            die();
        }
    }
}