<?php

class DbConfig {

    public function connect(){
        try{
<<<<<<< HEAD
            $conn = new PDO("mysql:host=localhost;dbname=wfriends", 'root', '');
=======
            $conn = new PDO("mysql:host=38.242.233.110;port=3306;dbname=wfriends", 'marly', 'LeidenPlymouth1');
>>>>>>> develop
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}