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
            $sql = "INSERT INTO `Users`(`name`,  `email`,  `password`)
            VALUES ('$this->name', '$this->email', '$this->password')";
            $this->conn->conn()->exec($sql);
            $this->conn->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }


}
?>
