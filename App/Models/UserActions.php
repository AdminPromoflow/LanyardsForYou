<?php
    class UsersActions {
      private $idUser;
      private $idUserAction;
      private $ip;
      private $enterFair;
      private $timeLogin;


      private $sessionNumber;
      private $timeExit;
      private $enterCheckOut;
      private $didTheOrder;
      private $likes;
      private $dislikes;
      private $improvements;
      private $thingWouldLike;
      private $contacUs;
      private $download;
      private $city;

      private $con;

      function __construct($con) {
          $this->con = $con;
      }

      function setIdUser($idUser){
        $this->idUser = $idUser;
      }

      function setIdUserActions($idUserAction){
        $this->idUserAction = $idUserAction;
      }

      function setIp($ip){
        $this->ip = $ip;
      }

      function setCity($city){
        $this->city = $city;
      }

      function setIdUserAction($idUserAction){
        $this->idUserAction = $idUserAction;
      }

      function setDownload($download){
        $this->download = $download;
      }

      function setEnterFair($enterFair){
        $this->enterFair = $enterFair;
      }
      function setTimeLogin($timeLogin){
        $this->timeLogin = $timeLogin;
      }

      function updateEnterFair(){
        try{
          $sql = "UPDATE `UserActions`  SET `EnterFair` =  '$this->enterFair'  WHERE `idUserActions` = '$this->idUserAction'";
          $this->con->conn()->exec($sql);
          $this->con->close();
            }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
          }
      }

      function updateTimeLogin(){
        try{
          $sql = "UPDATE `UserActions`  SET `timeLogin` =  '$this->timeLogin'  WHERE `idUserActions` = '$this->idUserAction'";
          $this->con->conn()->exec($sql);
          $this->con->close();
            }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
          }
      }

      function countUsersActionsByIp(){
       try{
        $sql = $this->con->conn()->query("SELECT COUNT(*) FROM `UserActions` WHERE `ip`  = '$this->ip'  ");
        $data = $sql->fetch(PDO::FETCH_ASSOC);
          $this->con->close();
          return $data;
            }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
          }
      }

      function getIdUser(){
        try{
          $sql = $this->con->conn()->query("SELECT `idUser` FROM `UserActions` WHERE `ip` = '$this->ip' ORDER BY `idUserActions`  LIMIT 1");
           $data = $sql->fetch(PDO::FETCH_OBJ);
           $this->con->close();
           return $data;
           }
         catch(PDOException $e){
             echo $query . "<br>" . $e->getMessage();
           }
      }
      function readIp(){
        try{
          $sql = $this->con->conn()->query("SELECT `idUserActions`, `idUser` FROM `UserActions` WHERE `ip` =  '$this->ip' ORDER BY `idUserActions` DESC LIMIT 1");
           $data = $sql->fetch(PDO::FETCH_OBJ);
           $this->con->close();
           return $data;
           }
         catch(PDOException $e){
             echo $query . "<br>" . $e->getMessage();
           }
      }

      function createUserActionIp(){
        try{
          $sql = "INSERT INTO `UserActions`( `idUser`,  `ip`, `EnterFair`, `city`) VALUES ('$this->idUser',  '$this->ip', '$this->enterFair','$this->city')";
          $this->con->conn()->exec($sql);
          $this->con->close();
            }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
          }
      }

    function  getIdUserAction(){
      try{
        $sql = $this->con->conn()->query("SELECT `idUserActions` FROM `UserActions` WHERE `ip` = '$this->ip' ORDER BY `idUserActions` DESC LIMIT 1");
         $data = $sql->fetch(PDO::FETCH_OBJ);
         $this->con->close();
         return $data;
         }
       catch(PDOException $e){
           echo $query . "<br>" . $e->getMessage();
         }
    }

      function updateDownload(){
        try{
          $sql = "UPDATE
          `UserActions`
          SET `download` =  '$this->download'
          WHERE `idUserActions` = '$this->idUserAction'
          ";
          $this->con->conn()->exec($sql);
          $this->con->close();
            }
        catch(PDOException $e){
            echo $query . "<br>" . $e->getMessage();
          }
      }

/*
      function setContactUs($contactUs){
        $this->contactUs=$contactUs;
      }

      function setContactMedia($contactUsMedia){
        $this->contactUsMedia=$contactUsMedia;
      }

        function setIdUser($idUser){
          $this->idUser=$idUser;
        }
        function setIdUserAction($idUserAction){
          $this->idUserAction=$idUserAction;
        }
        function setOperativeSystem($operativeSystem){
          $this->operativeSystem=$operativeSystem;
        }
        function setSessionNumber($idSessionNumber){
          $this->idSessionNumber=$idSessionNumber;
        }

        function setSessionId($sessionId){
          $this->sessionId = $sessionId;
        }
        function setTimeLogin($timeLogin){
          $this->timeLogin = $timeLogin;
        }
        function setTimeLoginLandingPage($timeLoginLandingPage){
          $this->timeLoginLandingPage = $timeLoginLandingPage;
        }
        function setTimeExit($timeExit){
          $this->timeExit = $timeExit;
        }


        function readUsersActionsSession(){
          try{
            $sql = $this->con->conn()->query("SELECT `idUserActions` FROM `UserActions` WHERE `idUser`= '$this->idUser' ORDER BY `timeLogin` DESC LIMIT 1 ");
            $data = $sql->fetch(PDO::FETCH_OBJ);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

        function readUserActionsIdUser(){
          try{
            $sql = $this->con->conn()->query("SELECT `idUser` FROM `UserActions` WHERE `ip`= '$this->ip' ORDER BY `idUserActions` DESC LIMIT 1 ");
            $data = $sql->fetch(PDO::FETCH_OBJ);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }


        function readUsersActions(){
          try{
            $sql = $this->con->conn()->query("SELECT  `Users`.NIT, `Users`.email, `UserActions`.EnterFair, `UserActions`.timeLogin,
             `UserActions`.timeGoCheckOut, `UserActions`.timeExit, `UserActions`.sessionNumber
            FROM `UserActions`
            INNER JOIN `Users`
            ON `Users`.idUser=`UserActions`.idUser");
            $data = $sql->fetchAll(PDO::FETCH_OBJ);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }


        function readUsersActionsIp(){
         try{
          $sql = $this->con->conn()->query("SELECT COUNT(*)  FROM `UserActions` WHERE ip = '$this->ip'  ");
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $this->con->close();
            return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }




        function saveUserActions(){
          try{
            $sql = "INSERT INTO `UserActions`(idUser,timeLoginLandingPage, EnterFair, ip)
                  VALUES (
                    '$this->idUser',
                    '$this->timeLoginLandingPage',
                    '$this->enterFair',
                    '$this->ip'
                  )";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

        function updateUserActions(){

          try{
            $sql = "UPDATE
            `UserActions`
            SET `EnterFair` =  '$this->enterFair',
            `sessionNumber` =  '$this->sessionId'

            WHERE `idUserActions` = '$this->idUser'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }


        function updateContactUs(){
          try{
            $sql = "UPDATE
            `UserActions`
            SET `contactUs` =  '$this->contactUs',
            `contactUsMedia` =  '$this->contactUsMedia'

            WHERE `idUserActions` = '$this->idUserAction'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }






        function updateUserActionsOS(){
          try{
            $sql = "UPDATE
            `UserActions`
            SET `operativeSystem` =  '$this->operativeSystem'

            WHERE `idUserActions` = '$this->idUserAction'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }


        }


        function readUserActionLastId(){
          try{
             $sql = $this->con->conn()->query("SELECT `idUserActions`  FROM `UserActions` ORDER BY `idUserActions` DESC LIMIT 1");
             $data = $sql->fetch(PDO::FETCH_ASSOC);
             $this->con->close();
             return $data;
               }
           catch(PDOException $e){
               echo $query . "<br>" . $e->getMessage();
             }
        }

        //


        function updateTimeExit(){
          try{
            $sql = "UPDATE
            `UserActions`
            SET `timeExit` =  '$this->timeExit'
            WHERE `idUserActions` = '$this->idUser'
            ";
            $this->con->conn()->exec($sql);
            $this->con->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

*/


}
?>
