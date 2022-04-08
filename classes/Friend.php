<?php
    require_once 'DbConfig.php';

class Friend extends DbConfig
{
    //fetch(PDO::OBJ)
    //fetchAll(PDO::FETCH_OBJ)

    // public function getUser(){
    //     $sql = "SELECT friendCode, name, profilepic, friends FROM users";
    //     $stmt= $this->connect()->prepare($sql);
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_OBJ);
    // }
    public function getCode($userID)
    {
        $sql = "SELECT friendCode FROM users WHERE userID = :userID";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":userID", $userID);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getFriend()
    {
        $sql = "SELECT * FROM users LIMIT $i";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProfilePic()
    {
        $sql = "SELECT profilepic FROM `users` WHERE profilepic = 'pfp.png'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function search($term)
    {
        $sql = "SELECT * FROM users WHERE friendCode LIKE :term";

        $stmt = $this->connect()->prepare($sql);

        $stmt->bindParam(":term", $term);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function addFriend($userID, $friendID)
    {
        $sql = "INSERT INTO friends (userID, friendID) VALUES (:userid, :friendid)";

        $stmt = $this->connect()->prepare($sql);

        $stmt->bindParam(":userid", $userID);
        $stmt->bindParam(":friendid", $friendID);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function getFriendCode($userID)
    {
        $sql = "SELECT friendCode FROM users WHERE userID  = :userID";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":userID", $userID);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function deleteFriend($userID)
    {
        $sql = "SELECT * FROM friends WHERE userID = :userID AND friendID = friendID ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":userID", $userID);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}

?>