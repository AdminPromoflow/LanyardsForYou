
    <div class="containerAddToCart containerclipAddToCart">
      <h4>Select the clip</h4>

      <div class=" clipAddToCart">
        <div class=" clipBox">
          <h4 class="nameclipOptions">None</h4>
          <img src="../../Pages/General/AddToCart/Img/Clips/noneIcon.png" alt="">
          <h4 class="priceClipOptions">+£0</h4>
        </div>
        <div class="clipBox">
          <h4 class="nameclipOptions">Quick Release  Plastic (Black)</h4>
          <img src="../../Pages/General/AddToCart/Img/Clips/QuickReleaseBlack.png" alt="">
          <h4 class="priceClipOptions">+£0.06</h4>
        </div>
        <div class="clipBox">
          <h4 class="nameclipOptions">Quick Release  Plastic (Coloured)</h4>
          <img src="../../Pages/General/AddToCart/Img/Clips/QuickReleasePlasticsColour.png" alt="">
          <h4 class="priceClipOptions">+£0.20</h4>
        </div>
        <div class="clipBox">
          <h4 class="nameclipOptions">Quick Release  Metal & Plastic </h4>
          <img src="../../Pages/General/AddToCart/Img/Clips/QuickReleaseMetal.png" alt="">
          <h4 class="priceClipOptions">+£0.65</h4>
        </div>

      </div>
      <div class="buttonAddToCartContainer">
        <button id="openAttachType3" class="nextButtonAddTuCart" type="button" name="button">Back</button>
        <button id="openAccessories2" class="nextButtonAddTuCart" type="button" name="button">Next</button>
      </div>
    </div>


    <style media="screen">
    .clipAddToCart{
      position: relative;
      padding: 1vw;
      margin: 1vw  0;
      display: flex;
      justify-content: center;
      flex-wrap:  wrap;
      flex-direction: row;
    }
    .clipBox{
      position: relative;
      padding: 1vw;
      background-color: rgba(255, 255, 255, .3);
      margin: 1vw;
      width: 30%;
      cursor: pointer;
      box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
      min-width: 150px;

    }
    .clipBox h4{
      position: relative;
      text-align: center;
      padding: 0;
    }
    .clipBox img{
      position: relative;
      width: 75%;
      left: 50%;
      transform:  translateX(-50%);
      margin: 1vw 0;
    }
    .borderBoxclip{
      border: 3px solid blue;
    }
    </style>




    <script type="text/javascript">
    setOptionSelected("setWidthSelected", withSelected);
     getOptionSelected("getWidthSelected");
   withSelected = value;
     getOptionSelected("getClipSelected");
   clipSelected = value;
     getOptionSelected("getTypeOneOrTwoEndsSelected");
   typeOneOrTwoEndsSelected =value;

   //alert(withSelected + "  " + clipSelected  + "  " + typeOneOrTwoEndsSelected);






   const clipBox = document.querySelectorAll(".clipBox");
   const clipImgAdress = document.querySelectorAll(".clipImgAdress");

    var clipOn = 0;

    clipBox[0].classList.add("borderBoxclip");


    for (let i = 0; i < clipBox.length; i++) {
      clipBox[i].addEventListener("click", function(){
        clipBox[i].classList.add("borderBoxclip");
        clipOn  = i;
        turnOffOtherBoxessClips();

        if (i == 0 && typeOneOrTwoEndsSelected == "OneEnd") {
          turnOffOtherTypeOneOrTwoEndsSelectedClip();
          turnOnOtherTypeOneOrTwoEndsSelectedClip(typeOneOrTwoEndsSelected, withSelected, "");
        }
        if (i == 0 && typeOneOrTwoEndsSelected == "TwoEnd") {
          turnOffOtherTypeOneOrTwoEndsSelectedClip();
          turnOnOtherTypeOneOrTwoEndsSelectedClip(typeOneOrTwoEndsSelected, withSelected, "");
        }
        else if (i != 0 && typeOneOrTwoEndsSelected == "OneEnd") {
          turnOffOtherTypeOneOrTwoEndsSelectedClip();
          turnOnOtherTypeOneOrTwoEndsSelectedClip(typeOneOrTwoEndsSelected, withSelected, "-attach");
          }

changeClip();

      })
    }


    function changeClip(){
     for (let i = 0; i < clipImgAdress.length; i++) {
       if (clipOn == 0) {
         clipImgAdress[i].src  = "../../Pages/General/AddToCart/Img/Clips/QuickReleaseTransparent.png";
       }
       else if (clipOn == 1) {
         clipImgAdress[i].src  = "../../Pages/General/AddToCart/Img/Clips/QuickReleaseBlack.png";
       }
       else if (clipOn == 2) {
         clipImgAdress[i].src  = "../../Pages/General/AddToCart/Img/Clips/QuickReleasePlasticsColour.png";
       }
       else if (clipOn == 3) {
         clipImgAdress[i].src  = "../../Pages/General/AddToCart/Img/Clips/QuickReleaseMetal.png";
       }

      }
    }


    function turnOffOtherBoxessClips(){
     for (let i = 0; i < clipBox.length; i++) {
        if (i != clipOn) {
          clipBox[i].classList.remove("borderBoxclip");
        }
      }
    }






    function turnOnOtherTypeOneOrTwoEndsSelectedClip(oneOrTwoEnds, withL, attach){
      var callByIdLanyard = 'lanyard'+oneOrTwoEnds+ withL + attach;
      var lanyardSelected =  document.getElementById(callByIdLanyard);
      lanyardSelected.style.display  =  "block";
    }

    function turnOffOtherTypeOneOrTwoEndsSelectedClip(){
      for (var i = 10; i < 31; i= i + 5) {
        document.getElementById('lanyardTwoEnd'+i+'mm').style.display = "none";
        document.getElementById('lanyardOneEnd'+i+'mm-attach').style.display = "none";
        document.getElementById('lanyardOneEnd'+i+'mm').style.display = "none";
      }
    }










    /* Next and Back button*/



        var openAttachType3 = document.getElementById('openAttachType3');

        openAttachType3.addEventListener('click', function(){
        containerAddToCart[6].style.display = "none";
        optionAddToCard2[6].style.background = "rgba(69,79,177,0.9)";


        containerAddToCart[5].style.display = "block";
        optionAddToCard2[5].style.background = "rgba(69,79,177,0.3)";
        })


        var openAccessories2 = document.getElementById('openAccessories2');

        openAccessories2.addEventListener('click', function(){
        containerAddToCart[6].style.display = "none";
        optionAddToCard2[6].style.background = "rgba(69,79,177,0.9)";

        containerAddToCart[7].style.display = "block";
        optionAddToCard2[7].style.background = "rgba(69,79,177,0.3)";
        })

    </script>
