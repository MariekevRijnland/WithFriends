<?php
require_once 'DbConfig.php';

Class Qr extends DbConfig {

    public function getQR(){
    $sql = "SELECT friendCode FROM users";
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}


?>