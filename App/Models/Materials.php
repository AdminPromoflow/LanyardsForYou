<?php
/**
 *
 */
class Materials
{
  private $conn;
  private $idMaterial;

    function __construct($conn) {
        $this->conn = $conn;
    }

    function getMaterials(){
    try{
      $sql = $this->conn->conn()->query("SELECT * FROM  `Materials`");
        $data = $sql->fetchAll(PDO::FETCH_OBJ);
        $this->conn->close();
        return $data;
          }
      catch(PDOException $e){
          echo $query . "<br>" . $e->getMessage();
        }
    }
}




 ?>
