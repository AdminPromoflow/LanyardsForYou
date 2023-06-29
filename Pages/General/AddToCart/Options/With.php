<!-- _______________________ Choose with ends option _______________________ -->
<!-- _______________________ Choose with ends option _______________________ -->



  <div class="containerAddToCart containerLanyardTypeAddToCart">
    <h4>Select the width</h4>

    <div class="lanyardWithAddToCart">
      <div class="lanyardWithBox">
        <h4>10mm</h4>
        <img class="withImgOptions" src="../../Pages/General/AddToCart/Img/With/OneEnd10mm.png" alt="">
      </div>
      <div class="lanyardWithBox">
        <h4>15mm</h4>
        <img class="withImgOptions" src="../../Pages/General/AddToCart/Img/With/OneEnd15mm.png" alt="">
      </div>
      <div class="lanyardWithBox">
        <h4>20mm</h4>
        <img class="withImgOptions" src="../../Pages/General/AddToCart/Img/With/OneEnd20mm.png" alt="">
      </div>
      <div class="lanyardWithBox">
        <h4>25mm</h4>
        <img class="withImgOptions" src="../../Pages/General/AddToCart/Img/With/OneEnd25mm.png" alt="">
      </div>
      <div class="lanyardWithBox">
        <h4>30mm</h4>
        <img class="withImgOptions" src="../../Pages/General/AddToCart/Img/With/OneEnd30mm.png" alt="">
      </div>
    </div>
    <div class="buttonAddToCartContainer">
      <button id="openLanyardType3" class="backButtonAddTuCart" type="button" name="button">Back</button>
      <button id="openSides2" class="nextButtonAddTuCart" type="button" name="button">Next</button>
    </div>
  </div>

  <style media="screen">
  .lanyardWithAddToCart{
    position: relative;
    padding: 1vw;
    margin: 1vw  0;
    display: flex;
    justify-content: center;
    flex-wrap:wrap;
    flex-direction: row;
  }
  .lanyardWithBox{
    position: relative;
    padding: 1vw;
    background-color: rgba(255, 255, 255, .3);
    margin: 1vw;
    width: 40%;
    cursor: pointer;
    box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
    border: 3px solid transparent;

  }
  .lanyardWithBox img{
    position: relative;
    width: 75%;
    left: 50%;
    transform: translateX(-50%);
    margin: 1vw 0;
  }
  .borderBoxWith{
    border: 3px solid blue;
  }
  </style>

  <script type="text/javascript">
    const lanyardWithBox = document.querySelectorAll(".lanyardWithBox");
    var withOn = 0;

    lanyardWithBox[3].classList.add("borderBoxWith");



    const withImgOptions = document.querySelectorAll(".withImgOptions");

    var j = 10;
   function changeWithImgOptions(){
     for (let i = 0; i < withImgOptions.length; i++) {
       withImgOptions[i].src =  "../../Pages/General/AddToCart/Img/With/"+typeOneOrTwoEndsSelected+ j +"mm.png";
       j= j + 5;
     }
     if (j > 29) {
       j = 10;
     }

   }

   changeWithImgOptions();


    for (let i = 0; i < lanyardWithBox.length; i++) {

      lanyardWithBox[i].addEventListener("click", function(){

        lanyardWithBox[i].classList.add("borderBoxWith");

        withSelected = 10 + i*5;
        withSelected  = withSelected +  "mm";

        setOptionSelected("setWidthSelected", withSelected);


        changePriceAttachmentText();

        withOn  = i;
        turnOffOtherBoxessWith();
        turnOffOtherWithSelected();
        turnOnOtherWithSelected(typeOneOrTwoEndsSelected, withSelected, isWithAttachment);

      })

    }



    function turnOffOtherBoxessWith(){
     for (let i = 0; i < lanyardWithBox.length; i++) {
        if (i != withOn) {
          lanyardWithBox[i].classList.remove("borderBoxWith");
        }
      }
    }

   function turnOnOtherWithSelected(oneOrTwoEnds, withL, attach){

      var callByIdLanyard = 'lanyard'+oneOrTwoEnds+ withL + attach;
      var lanyardSelected =  document.getElementById(callByIdLanyard);
      lanyardSelected.style.display  =  "block";

    }

    function turnOffOtherWithSelected(){

      for (var i = 10; i < 31; i= i + 5) {

        document.getElementById('lanyardTwoEnd'+i+'mm').style.display = "none";
        document.getElementById('lanyardOneEnd'+i+'mm-attach').style.display = "none";
        document.getElementById('lanyardOneEnd'+i+'mm').style.display = "none";

      }

    }


    var openLanyardType3 = document.getElementById('openLanyardType3');

    openLanyardType3.addEventListener('click', function(){
      containerAddToCart[2].style.display = "none";
      optionAddToCard2[2].style.background = "rgba(69,79,177,0.9)";

      containerAddToCart[1].style.display = "block";
      optionAddToCard2[1].style.background = "rgba(69,79,177,0.3)";
    })


    var openSides2 = document.getElementById('openSides2');

    openSides2.addEventListener('click', function(){
      containerAddToCart[2].style.display = "none";
      optionAddToCard2[2].style.background = "rgba(69,79,177,0.9)";

      containerAddToCart[3].style.display = "block";
      optionAddToCard2[3].style.background = "rgba(69,79,177,0.3)";
    })



    function getSelecteWidth(){
      return widthSelected;
    }


  </script>
