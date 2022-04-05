<?php
    require_once 'DbConfig.php';

    class Friend extends DbConfig{
        //fetch(PDO::OBJ)
        //fetchAll(PDO::FETCH_OBJ)

        // public function getUser(){
        //     $sql = "SELECT friendCode, name, profilepic, friends FROM users";
        //     $stmt= $this->connect()->prepare($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll(PDO::FETCH_OBJ);
        // }
        public function getCode(){
            $sql = "SELECT friendCode from users limit 1;";
            $stmt= $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function getFriend(){
            $sql = "SELECT * FROM users LIMIT 1";
            $stmt= $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function getProfilePic(){
            $sql = "SELECT profilepic FROM `users` WHERE profilepic = 'pfp.png'";
            $stmt= $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>