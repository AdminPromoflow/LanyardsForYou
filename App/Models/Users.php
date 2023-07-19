<?php
    class Users {
     private $idUser;
      private $name;
      private $email;
      private $password;
      private $conn;

        function __construct($conn) {
            $this->conn = $conn;
        }

        function setEmail($email){
          $this->email = $email;
        }
        function setName($name){
          $this->name = $name;
        }

        function setPassword($password){
          $this->password = $password;
        }

        function createUser(){
         try{
            $sql = "INSERT INTO `Users`(`nameUser`,  `emailUser`,  `passwordUser`)
            VALUES ('$this->name', '$this->email', '$this->password')";
            $this->conn->conn()->exec($sql);
            $this->conn->close();
            return 1;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
              return 0;
            }
        }

        function verifyExistUser(){
          try{
           $sql = $this->conn->conn()->query("SELECT COUNT(*) FROM `Users` WHERE `emailUser`  = '$this->email'  ");
           $data = $sql->fetch(PDO::FETCH_ASSOC);
             $this->conn->close();
             return $data;
               }
           catch(PDOException $e){
               echo $query . "<br>" . $e->getMessage();
               return $data;

             }


        }

}
?>
