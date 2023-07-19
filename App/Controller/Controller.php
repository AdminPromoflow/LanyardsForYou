<?php
session_start();
require_once('../Config/database.php');

require_once('../Models/Materials.php');
require_once('../Models/Users.php');


    if ($_POST['module']=="setWidthSelected") {
        $_SESSION["withSelected"] = $_POST['value'];
    }
    elseif ($_POST['module']=="getWidthSelected") {
        echo  $_SESSION["withSelected"]."" ;
    }




    elseif ($_POST['module']=="setClipSelected") {
        $_SESSION["clipSelected"] = $_POST['value'];
    }
    elseif ($_POST['module']=="getClipSelected") {
        echo  $_SESSION["clipSelected"]."" ;
    }



    elseif ($_POST['module']=="setTypeOneOrTwoEndsSelected") {
        $_SESSION["typeOneOrTwoEndsSelected"] = $_POST['value'];
    }
    elseif ($_POST['module']=="getTypeOneOrTwoEndsSelected") {
        echo  $_SESSION["typeOneOrTwoEndsSelected"]."" ;
    }


    elseif ($_POST['module']=="setIsWithAttachment") {
        $_SESSION["isWithAttachment"] = $_POST['value'];
    }
    elseif ($_POST['module']=="getIsWithAttachment") {
        echo  $_SESSION["isWithAttachment"]."" ;
    }




    elseif ($_POST['module']=="setSideSelected") {
        $_SESSION["sideSelected"] = $_POST['value'];
    }
    elseif ($_POST['module']=="getSideSelected") {
        echo  $_SESSION["sideSelected"]."" ;
    }




    elseif ($_POST['module']=="setColorSelected") {
        $_SESSION["colorSelected"] = $_POST['value'];
    }
    elseif ($_POST['module']=="getColorSelected") {
        echo  $_SESSION["colorSelected"]."" ;
    }




    elseif ($_POST['module']=="setMountColourSelected") {
        $_SESSION["mountColourSelected"] = $_POST['value'];
    }
    elseif ($_POST['module']=="getMountColourSelected") {
        echo  $_SESSION["mountColourSelected"]."" ;
    }




    elseif ($_POST['module']=="setAttachSelected") {
        $_SESSION["attachSelected"] = $_POST['value'];
    }
    elseif ($_POST['module']=="getAttachSelected") {
        echo  $_SESSION["attachSelected"]."" ;
    }










    elseif ($_POST['module']=="getMaterials") {

        $db = new Database();
        $material = new Materials($db);
        echo json_encode($material->getMaterials());
    }
    elseif ($_POST['module']=="createUser") {
      $db = new Database();
      $user = new Users($db);
      $user->setEmail($_POST['email']);
      echo $user->verifyExistUser()["COUNT(*)"]);
      //       $countUsers = ($user->verifyRepeatUser()["COUNT(*)"]);

      if (0) {
        $db = new Database();
        $user = new Users($db);
        $user->setEmail($_POST['email']);
        $user->setName($_POST['name']);
        $user->setPassword($_POST['password']);

       $result = json_encode($user->createUser());

        echo $result;
      }
      else {
       echo -1;
      }
    }








 ?>
