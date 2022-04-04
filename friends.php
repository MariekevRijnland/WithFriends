<?php
    require_once 'DbConfig.php';

    class User extends DbConfig{
        //fetch(PDO::OBJ)
        //fetchAll(PDO::FETCH_OBJ)

        // public function getUser(){
        //     $sql = "SELECT friendCode, name, profilepic, friends FROM users";
        //     $stmt= $this->connect()->prepare($sql);
        //     $stmt->execute();
        //     return $stmt->fetchAll(PDO::FETCH_OBJ);
        // }
        public function getCode(){
            $sql = "SELECT friendCode FROM users WHERE name = 'Kenan'";
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

        public function search(){
            $query = "SELECT * FROM users like ".$_POST['term'];  // ? placeholder in query
            $stmt = $this->mysqli->prepare($query);
            $stmt->bind_param("s", "%$term%");       // insert your variable into the placeholder (still need to add % wildcards)
            $stmt->execute();
        } 
}
?>