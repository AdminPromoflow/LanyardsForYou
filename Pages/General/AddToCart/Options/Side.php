
    <div class="containerAddToCart containerLanyardTypeAddToCart">
      <h4>Select what sides you want printed</h4>

      <div class="lanyardTypeAddToCart">
        <div class="lanyardSideBox">
          <h4>Print one side</h4>
          <img src="../../Pages/General/AddToCart/Img/Sides/OneSide.png" alt="">
        </div>
        <div class="lanyardSideBox">
          <h4>Print two sides</h4>
          <img src="../../Pages/General/AddToCart/Img/Sides/TwoSides.png" alt="">
        </div>
      </div>
      <div class="buttonAddToCartContainer">
        <button id="openWithType3" class="backButtonAddTuCart" type="button" name="button">Back</button>
        <button id="openColorType2" class="nextButtonAddTuCart" type="button" name="button">Next</button>
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
    .lanyardSideBox{
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
    .lanyardSideBox img{
      position: relative;
      width: 75%;
      left: 50%;
      transform: translateX(-50%);
      margin: 1vw 0;
    }
    .borderBoxSideType{
      border: 3px solid blue;
    }
    </style>

    <script type="text/javascript">

    const lanyardSideBox = document.querySelectorAll(".lanyardSideBox");
    var imgSides = document.getElementById("imgSides");
    var textSides = document.getElementById("textSides");
    lanyardSideBox[0].classList.add("borderBoxSideType");
    lanyardSideBox[1].classList.remove("borderBoxSideType");



    for (let i = 0; i < lanyardSideBox.length; i++) {
      lanyardSideBox[i].addEventListener("click", function(){
        if (i ==  0) {
          sideSelected = "OneSide";
          lanyardSideBox[i].classList.add("borderBoxSideType");
          lanyardSideBox[i+1].classList.remove("borderBoxSideType");
          changeSideOptions2();
        }
        else if (i == 1) {
          sideSelected = "TwoSides";
          lanyardSideBox[i].classList.add("borderBoxSideType");
          lanyardSideBox[i-1].classList.remove("borderBoxSideType");
          changeSideOptions3();
        }
        changeSideOptions();
      })
    }

    function  changeSideOptions(){
      imgSides.src = "../../Pages/General/AddToCart/Img/Sides/"+sideSelected+".png";
    }


    var openWithType3 = document.getElementById('openWithType3');

    openWithType3.addEventListener('click', function(){
      containerAddToCart[3].style.display = "none";
      optionAddToCard2[3].style.background = "rgba(69,79,177,0.9)";

      containerAddToCart[2].style.display = "block";
      optionAddToCard2[2].style.background = "rgba(69,79,177,0.3)";
    })


    var openColorType2 = document.getElementById('openColorType2');

    openColorType2.addEventListener('click', function(){
      containerAddToCart[3].style.display = "none";
      optionAddToCard2[3].style.background = "rgba(69,79,177,0.9)";

      containerAddToCart[4].style.display = "block";
      optionAddToCard2[4].style.background = "rgba(69,79,177,0.3)";
    })







    </script>
