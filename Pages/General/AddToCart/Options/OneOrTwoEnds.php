<!-- ____________________ Choose one or two ends option ____________________ -->
<!-- ____________________ Choose one or two ends option ____________________ -->


    <div class="containerAddToCart containerLanyardTypeAddToCart">
      <h4>Select the lanyard type</h4>

      <div class="lanyardTypeAddToCart">
        <div class="lanyardTypeBox">
          <h4>One end</h4>
          <img src="../../Pages/General/AddToCart/Img/LanyardType/LanyardTypeOneEnd.png" alt="">
        </div>
        <div class="lanyardTypeBox">
          <h4>Two ends</h4>
          <img src="../../Pages/General/AddToCart/Img/LanyardType/LanyardTypeTwoEnds.png" alt="">
        </div>
      </div>
      <div class="buttonAddToCartContainer">
        <button id="openMaterialType2" class="backButtonAddTuCart" type="button" name="button">Back</button>
        <button id="openWithType2" class="nextButtonAddTuCart" type="button" name="button">Next</button>

      </div>
    </div>

    <style media="screen">
    .lanyardTypeAddToCart{
      position: relative;
      padding: 1vw;
      margin: 1vw  0;
      display: flex;
      justify-content: center;
      flex-wrap:wrap-reverse;
      flex-direction: row;
    }
    .lanyardTypeBox{
      position: relative;
      padding: 1vw;
      background-color: rgba(255, 255, 255, .3);
      margin: 1vw;
      width: 40%;
      cursor: pointer;
      box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
      min-width: 150px;
      border: 3px solid transparent;
    }
    .lanyardTypeBox img{
      position: relative;
      width: 75%;
      left: 50%;
      transform: translateX(-50%);
      margin: 1vw 0;
    }
    .borderBoxLanyardType{
      border: 3px solid blue;
    }
    </style>

    <script type="text/javascript">


      const lanyardTypeBox = document.querySelectorAll(".lanyardTypeBox");





    setWidthSelected();
    function setWidthSelected(){
        $.ajax( "../../App/Controller/Controller.php", {
          type: 'post',
          async: false,
          data: {
            module: "setWidthSelected",
            withSelected:withSelected
          },
          success: function(data){
         }
        }
       )

     }

      var lanyardSelected =  document.getElementById('lanyard'+typeOneOrTwoEndsSelected+ withSelected + isWithAttachment);
      lanyardSelected.style.display  =  "block";


      lanyardTypeBox[0].classList.add("borderBoxLanyardType");

      for (let i = 0; i < lanyardTypeBox.length; i++) {
        lanyardTypeBox[i].addEventListener("click", function(){
          if (i ==  0) {
            typeOneOrTwoEndsSelected = "OneEnd";
            lanyardTypeBox[i].classList.add("borderBoxLanyardType");
            lanyardTypeBox[i+1].classList.remove("borderBoxLanyardType");
          }
          else if (i == 1) {
            typeOneOrTwoEndsSelected = "TwoEnd";
            lanyardTypeBox[i].classList.add("borderBoxLanyardType");
            lanyardTypeBox[i-1].classList.remove("borderBoxLanyardType");
          }
          turnOffOtherTypeOneOrTwoEndsSelected();
          turnOnOtherTypeOneOrTwoEndsSelected(typeOneOrTwoEndsSelected, withSelected, isWithAttachment);
          changeWithImgOptions();
        })
      }




      function turnOnOtherTypeOneOrTwoEndsSelected(oneOrTwoEnds, withL, attach){
        var callByIdLanyard = 'lanyard'+oneOrTwoEnds+ withL + attach;
        var lanyardSelected =  document.getElementById(callByIdLanyard);
        lanyardSelected.style.display  =  "block";
      }

      function turnOffOtherTypeOneOrTwoEndsSelected(){
        for (var i = 10; i < 31; i= i + 5) {
          document.getElementById('lanyardTwoEnd'+i+'mm').style.display = "none";
          document.getElementById('lanyardOneEnd'+i+'mm-attach').style.display = "none";
          document.getElementById('lanyardOneEnd'+i+'mm').style.display = "none";
        }
      }



      var openMaterialType2 = document.getElementById('openMaterialType2');

      openMaterialType2.addEventListener('click', function(){
        containerAddToCart[1].style.display = "none";
        optionAddToCard2[1].style.background = "rgba(69,79,177,0.9)";

        containerAddToCart[0].style.display = "block";
        optionAddToCard2[0].style.background = "rgba(69,79,177,0.3)";
      })

      var openWithType2 = document.getElementById('openWithType2');

      openWithType2.addEventListener('click', function(){
        containerAddToCart[1].style.display = "none";
        optionAddToCard2[1].style.background = "rgba(69,79,177,0.9)";

        containerAddToCart[2].style.display = "block";
        optionAddToCard2[2].style.background = "rgba(69,79,177,0.3)";
      })






    </script>
