<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<style media="screen">
.stickyAddToCart{
  position: fixed;
  top: 0%;
  left: 0px;
  z-index: 50;
  height: 100vh;
  width: 100vw;
  background-color: rgba(0, 0, 0, .45);
  margin: 0;
  padding: 0;
  overflow-y: scroll;
  padding: 2vw;
  display: none;
}
 .backgroundAddToCart{
   position: absolute;
   height: 44vw;
   width: 88vw;
   left: 50%;
   transform: translateX(-50%) ;
   z-index: 50;
   top: 5%;
   background:  rgba(207, 198, 247, 0.86);
 }
 .relative{
   position: relative;
   height: 100%;
   width: 100%;
 }
 .containerBoxAddToCart{
   position: relative;
   height: 80%;
   margin: 5% 0;
   width: 80%;
   z-index: 3;
   left: 50%;
   transform: translateX(-50%);
   background-color: rgba(255, 255, 255, .4);
 }
 .containerBoxAddToCart2{
   position: relative;
   padding: 2vw;
   z-index: 3;
   left: 50%;
   transform: translateX(-50%);
   border: 1px solid black;
   padding: 4vw  0 0 0 ;
   background:  rgba(207, 198, 247, 0.86);
 }
 /*uno*/



  /*-------------------------------------------------------------------------*/
  /*-------------------------------------------------------------------------*/
  /*-------------------------------------------------------------------------*/
  /*-------------------------  Setting Lanyard  -----------------------------*/
  /*-------------------------------------------------------------------------*/
  /*-------------------------------------------------------------------------*/
  /*-------------------------------------------------------------------------*/

  .containerBoxAddToCart2  h4{
    padding: 1vw;
    font-weight: 300;
    font-size: 1.3em;
    min-width: auto;
  }
  .buttonAddToCartContainer{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    margin: 1vw 0;
    width: auto;
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
  }
  .nextButtonAddTuCart, .backButtonAddTuCart{
    position: relative;
    background:  rgba(69,79,177,0.9);
    color: white;
    font-size: 1.2em;
    padding: .5em 1.3em;
    border: none;
    cursor: pointer;
    transition: box-shadow  .5s;
    margin: 0.6vw;


  }
  .nextButtonAddTuCart:hover, .backButtonAddTuCart:hover{
    background:  rgba(69,79,177,0.6);
  }




</style>
<script type="text/javascript"  src="../../Pages/Libraries/jquery-3.5.0.min.js"></script>

<div id="stickyAddToCart" class="stickyAddToCart">

<section  class="backgroundAddToCart">

  <?php include "../../Pages/General/AddToCart/Other/close.php" ?>


  <div class="relative">

  <div class="containerBoxAddToCart">

    <?php include '../../Pages/General/AddToCart/Other/Title.php' ?>

    <?php include "../../Pages/General/AddToCart/Lanyards/30mmOneEnd.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/30mmOneEndWithAttach.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/30mmTwoEnds.php"?>

    <?php include "../../Pages/General/AddToCart/Lanyards/25mmOneEnd.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/25mmOneEndWithAttach.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/25mmTwoEnds.php"?>

    <?php include "../../Pages/General/AddToCart/Lanyards/20mmOneEnd.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/20mmOneEndWithAttach.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/20mmTwoEnds.php"?>

    <?php include "../../Pages/General/AddToCart/Lanyards/15mmOneEnd.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/15mmOneEndWithAttach.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/15mmTwoEnds.php"?>

    <?php include "../../Pages/General/AddToCart/Lanyards/10mmOneEnd.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/10mmOneEndWithAttach.php"?>
    <?php include "../../Pages/General/AddToCart/Lanyards/10mmTwoEnds.php"?>




    <?php include "../../Pages/General/AddToCart/Other/LanyardsOptionsChoosen/Material.php" ?>
    <?php include "../../Pages/General/AddToCart/Other/LanyardsOptionsChoosen/Sides.php" ?>
    <?php include "../../Pages/General/AddToCart/Other/LanyardsOptionsChoosen/Accessories.php" ?>





</div>


  <div class="containerBoxAddToCart2">

<!-- ___________________ container Options AddToCard 2 ___________________ -->
<!-- ___________________ container Options AddToCard 2 ___________________ -->


    <div class="containerOptionsAddToCard2">

      <div class="scrollOptionAddToCard2">

        <div class="optionAddToCard2">
          <h3>Material</h3>
        </div>
        <div class="optionAddToCard2">
          <h3>Lanyard Type</h3>
        </div>
        <div class="optionAddToCard2">
          <h3>Width</h3>
        </div>
        <div class="optionAddToCard2">
          <h3>Sides</h3>
        </div>
        <div class="optionAddToCard2">
          <h3>Color</h3>
        </div>
        <div class="optionAddToCard2">
          <h3>Attachment</h3>
        </div>
        <div class="optionAddToCard2">
          <h3>Clip</h3>
        </div>
        <div class="optionAddToCard2">
          <h3>Accessories</h3>
        </div>
        <div class="optionAddToCard2">
          <h3>Text</h3>
        </div>
    <!--    <div class="optionAddToCard2">
          <h3>Images</h3>
        </div>
        <div class="optionAddToCard2">
          <h3>Ammount</h3>
        </div>-->
    </div>
  </div>


  <style media="screen">

  .containerOptionsAddToCard2{
    position: relative;
    overflow-x: scroll;
    width: 70%;
    left: 50%;
    transform: translateX(-50%);
    margin: 2vw 0;
  }
  .scrollOptionAddToCard2{
    position: relative;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    flex-direction: row;
    padding: 0 1;
  }
  .optionAddToCard2{
    position: relative;
    padding: 1vw;
    background:  rgba(69,79,177,0.9);
    margin: 1vw;
    cursor: pointer;
    box-shadow: .2vw .2vw .2vw rgba(0, 0, 0, .4);
    transition: box-shadow  .5s;
  }
  .optionAddToCard2:hover{
    background:  rgba(69,79,177,0.6);
  }
  .optionAddToCard2 h3{
    font-weight: 400;
    color: white;
    text-shadow: .1vw  .1vw .2vw black;
  }




  .amountColorBox{
    position: relative;
    background-color: rgba(69,79,177,0.9);
    width: 30%;
    height: 6%;
    cursor: pointer;
    box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
    border: 3px solid transparent;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    min-width: 155px;
  }
  .amountColorBox h4{
    font-size: 1em;
    text-align: center;
    margin: 0;
    color: white;
    font-weight: 400;
  }
  .containerOptionsAmountColor{
    position: absolute;
    width: 102%;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    background-color: white;
    display: block;
  }
  .containerOptionsAmountColor h4{
    font-size: 0.9em;
    margin: 0;
    color: black;
    transition: all .5;
    display: block;
    font-weight: 100;
  }
  .optionAmountColor:nth-child(2n){
    background: rgba(207, 198, 247, 0.66);
  }
  .optionAmountColor:nth-child(2n+1){
    background: rgba(207, 198, 247, 1);
  }
  .optionAmountColor:hover{
    background-color: rgba(69,79,177,0.9);
  }
  .optionAmountColor:hover h4{
    color: white;
  }.amountColorBox{
    position: relative;
    background-color: rgba(69,79,177,0.9);
    width: 30%;
    height: 6%;
    cursor: pointer;
    box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
    border: 3px solid transparent;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    min-width: 155px;
  }
  .amountColorBox h4{
    font-size: 1em;
    text-align: center;
    margin: 0;
    color: white;
    font-weight: 400;
  }
  .containerOptionsAmountColor{
    position: absolute;
    width: 102%;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    background-color: white;
    display: block;
  }
  .containerOptionsAmountColor h4{
    font-size: 0.9em;
    margin: 0;
    color: black;
    transition: all .5;
    display: block;
    font-weight: 100;
  }
  .optionAmountColor:nth-child(2n){
    background: rgba(207, 198, 247, 0.66);
  }
  .optionAmountColor:nth-child(2n+1){
    background: rgba(207, 198, 247, 1);
  }
  .optionAmountColor:hover{
    background-color: rgba(69,79,177,0.9);
  }
  .optionAmountColor:hover h4{
    color: white;
  }

  </style>


  <!-- ___________________ No tengo ni idea que es esto ____________________ -->
  <!-- ___________________ No tengo ni idea que es esto ____________________ -->

  <style media="screen">
    .containerAddToCart{
      display: none;
      position: relative;
      background-color: rgba(255, 255, 255, .2);
      width: 79%;
      padding: 2vw 0;
      margin: 4% 0;
      left: 50%;
      transform: translateX(-50%);

    }
  </style>

  <script type="text/javascript">
  /*
        setWidthSelected
        getWidthSelected

        setClipSelected
        getClipSelected

        setTypeOneOrTwoEndsSelected
        getTypeOneOrTwoEndsSelected

        setIsWithAttachment
        getIsWithAttachment

        setSideSelected
        getSideSelected

        setColorSelected
        getColorSelected

        setMountColourSelected
        getMountColourSelected

        setAttachSelected
        getAttachSelected

  */

      var withSelected =  "25mm";
      var typeOneOrTwoEndsSelected = "OneEnd";
      var isWithAttachment = "";
      var sideSelected = "OneSide";
      var colorSelected = "rgb(255, 255, 255)";
      var mountColourSelected = "1";
      var attachSelected  =  "StandardDogClip";
      var clipSelected = "none";
      var value = "";

      setOptionSelected("setWidthSelected", withSelected);
      setOptionSelected("setClipSelected", clipSelected);
      setOptionSelected("setTypeOneOrTwoEndsSelected", typeOneOrTwoEndsSelected);
      setOptionSelected("setIsWithAttachment", isWithAttachment);
      setOptionSelected("setSideSelected", sideSelected);
      setOptionSelected("setColorSelected", colorSelected);
      setOptionSelected("setMountColourSelected", mountColourSelected);
      setOptionSelected("setAttachSelected", clipSelected);


    /*  getOptionSelected("getWidthSelected");
        getOptionSelected("getClipSelected");
        getOptionSelected("getTypeOneOrTwoEndsSelected");
        getOptionSelected("getIsWithAttachment");
        getOptionSelected("getSideSelected");
        getOptionSelected("getColorSelected");
        getOptionSelected("getMountColourSelected");
        getOptionSelected("getAttachSelected"); */

      function setOptionSelected(module1, value1){
        $.ajax( "../../App/Controller/Controller.php", {
          type: 'post',
          async: false,
          data: {
            module: module1,
            value: value1
                  },
          success: function(data){
         }
        }
       )
      }



      function getOptionSelected(module1){
        $.ajax( "../../App/Controller/Controller.php", {
          type: 'post',
          async: false,
          data: {
            module: module1
                  },
          success: function(data){
            value = data;
         }
        }
       )
      }
  </script>


    <?php include  "../../Pages/General/AddToCart/Options/Material.php" ?>
    <?php include  "../../Pages/General/AddToCart/Options/OneOrTwoEnds.php" ?>
    <?php include  "../../Pages/General/AddToCart/Options/With.php" ?>
    <?php include  "../../Pages/General/AddToCart/Options/Side.php" ?>
    <?php include  "../../Pages/General/AddToCart/Options/Color.php" ?>
    <?php include  "../../Pages/General/AddToCart/Options/Attachment.php" ?>
    <?php include  "../../Pages/General/AddToCart/Options/Clip.php" ?>
    <?php include  "../../Pages/General/AddToCart/Options/Accesories.php" ?>
    <?php include  "../../Pages/General/AddToCart/Options/Text.php" ?>




    <script type="text/javascript">

    const optionAddToCard2 = document.querySelectorAll(".optionAddToCard2");
    const containerAddToCart = document.querySelectorAll(".containerAddToCart");
    var containerOn = 0;



    for (let i = 0; i < optionAddToCard2.length; i++) {// Cambiar el 3 por optionAddToCard2.length

      containerAddToCart[i].style.display = "none";
      containerAddToCart[0].style.display = "block";
      optionAddToCard2[0].style.background = "rgba(69,79,177,0.3)";


      optionAddToCard2[i].addEventListener("click", function(){

        if (containerAddToCart[i].style.display == "none"){
          containerOn  = i;
          containerAddToCart[i].style.display = "block";
          optionAddToCard2[i].style.background = "rgba(69,79,177,0.3)";
          turnOffOtherContainers();
        }
      })
    }

    function turnOffOtherContainers(){
      for (let i = 0; i < optionAddToCard2.length; i++) { // Cambiar el 3 por optionAddToCard2.length
        if (i != containerOn) {
          containerAddToCart[i].style.display = "none";
          optionAddToCard2[i].style.background = "rgba(69,79,177,0.9)";
        }
      }
    }








    </script>

  </div>
</div>

</section>


</div>
