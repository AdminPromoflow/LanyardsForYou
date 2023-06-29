<div class="containerAddToCart containerTextAddToCart">
  <h4>Select the Text</h4>

  <div class=" TextAddToCart">
    <div class=" TextBox">
      <h4 class="nameTextOptions">Please type text below</h4>
      <input id="textInput" type="text" name="" value="">
    </div>


    <div class="TextBox">
      <h4 class="nameTextOptions">Choose a font</h4>
      <div id="amountTextBox" class="amountTextBox">
        <h4 id="textAmountText">Arial</h4>

        <div id="containerOptionsAmountText" class="containerOptionsAmountText">
          <div class="optionAmountText">
            <h4 class="optionAmountTextValue">Arial</h4>
          </div>
          <div class="optionAmountText">
            <h4 class="optionAmountTextValue">Helvetica</h4>
          </div>
          <div class="optionAmountText">
            <h4 class="optionAmountTextValue">Sans Serif</h4>
          </div>
          <div class="optionAmountText">
            <h4 class="optionAmountTextValue">Allerta Stencil, sans-serif</h4>
          </div>
          <div class="optionAmountText">
            <h4 class="optionAmountTextValue">Montserrat, sans-serif</h4>
          </div>
          <div class="optionAmountText">
            <h4 class="optionAmountTextValue">Saira Condensed, sans-serif</h4>
          </div>
          <div class="optionAmountText">
            <h4 class="optionAmountTextValue">Lobster Cursive</h4>
          </div>
        </div>
      </div>
    </div>


    <div class="TextBox">
      <h4 class="nameTextOptions">Size</h4>
      <div class="BoxNameTextOptions">
        <img src="../../Pages/General/AddToCart/Img/Text/Minus.png" alt="">
        <img src="../../Pages/General/AddToCart/Img/Text/Plus.png" alt="">
      </div>
    </div>
    <div class="TextBox">
      <h4 class="nameTextOptions">Styling</h4>
      <div class="BoxNameTextOptions">
        <img src="../../Pages/General/AddToCart/Img/Text/Bold.png" alt="">
        <img src="../../Pages/General/AddToCart/Img/Text/Italics.png" alt="">
        <img src="../../Pages/General/AddToCart/Img/Text/Underline.png" alt="">
      </div>
    </div>
    <div class=" TextBox">
      <h4 class="nameTextOptions">Colour</h4>
        <input class="textColour" type="color" name="" value="">
    </div>
    <div class="TextBox">
      <h4 class="nameTextOptions">Space</h4>
      <div class="BoxNameTextOptions">
        <img src="../../Pages/General/AddToCart/Img/Text/Minus.png" alt="">
        <img src="../../Pages/General/AddToCart/Img/Text/Plus.png" alt="">
      </div>
    </div>
    <div class="TextBox">
      <h4 class="nameTextOptions">Weigth text</h4>
      <div class="BoxNameTextOptions">
        <img src="../../Pages/General/AddToCart/Img/Text/Minus.png" alt="">
        <img src="../../Pages/General/AddToCart/Img/Text/Plus.png" alt="">
      </div>
    </div>
    <div class="TextBox">
      <h4 class="nameTextOptions">Position</h4>
      <div class="BoxNameTextOptions">
        <img src="../../Pages/General/AddToCart/Img/Text/ArrowTop.png" alt="">
        <img src="../../Pages/General/AddToCart/Img/Text/ArrowBotton.png" alt="">
        <img src="../../Pages/General/AddToCart/Img/Text/ArrowRight.png" alt="">
        <img src="../../Pages/General/AddToCart/Img/Text/ArrowLeft.png" alt="">
      </div>
    </div>
    <div class="TextBox">
      <h4 class="nameTextOptions">Rotation</h4>
      <div class="BoxNameTextOptions">
        <img src="../../Pages/General/AddToCart/Img/Text/RotationRight.png" alt="">
        <img src="../../Pages/General/AddToCart/Img/Text/RotationLeft.png" alt="">
      </div>
    </div>





  </div>
  <div class="buttonAddToCartContainer">
    <button id="openAccesories3" class="nextButtonAddTuCart" type="button" name="button">Back</button>
    <button id="openImg2" class="nextButtonAddTuCart" type="button" name="button">Next</button>
  </div>
</div>


<style media="screen">
    .textColour{
      position: relative;
      height: 45px;
    }
    .TextAddToCart{
      position: relative;
      padding: 1vw;
      margin: 1vw  0;
      display: flex;
      justify-content: center;
      flex-wrap:  wrap;
      flex-direction: row;
    }
    .TextBox{
      position: relative;
      padding: 1vw;
      background-color: rgba(255, 255, 255, .3);
      margin: 1vw;
      width: 30%;
      cursor: pointer;
      box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
      min-width: 150px;
      border: 3px solid transparent;
    }
    .BoxNameTextOptions{
      position: relative;
      width: 90%;
      margin: 1vw 0;
      width: 90%;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }
    .BoxNameTextOptions img{
      position: relative;
      height: 30px;
      width: 30px;
      display: inline-block;
      margin: 0 5px;
      filter: drop-shadow(1px 1px 2px grey);
    }
    .BoxNameTextOptions img:hover{
      position: relative;
      filter: drop-shadow(3px 2px 3px grey);
    }
    .BoxNameTextOptions img:active{
      position: relative;
      filter: drop-shadow(1px 1px 1px grey);
    }
    .TextBox  input{
      position: relative;
      width: 70%;
      margin: 10px;
      padding: 5px;
      font-size: 1.1em;
      font-weight: 300;
      text-align: center;
      left: 50%;
      transform: translateX(-50%);
    }
    .TextBox:nth-child(1){
      width: 100%;
    }
    .TextBox h4{
      position: relative;
      text-align: center;
      padding: 0;
    }
    .borderBoxText{
      border: 3px solid blue;
    }







    .amountTextBox{
      position: relative;
      background-color: rgba(69,79,177,0.9);
      padding: 5px;
      cursor: pointer;
      box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
      border: 3px solid transparent;
      left: 50%;
      transform: translateX(-50%);
      z-index: 3;
      min-width: 70px;
      margin: 1vw 0;
    }
    .amountTextBox h4{
      font-size: 1em;
      text-align: center;
      margin: 0;
      Color: white;
      font-weight: 400;
    }
    .containerOptionsAmountText{
      position: absolute;
      width: 102%;
      top: 100%;
      left: 50%;
      transform: translateX(-50%);
      background-color: white;
      display: block;
    }
    .containerOptionsAmountText h4{
      font-size: 0.9em;
      padding: 5px;
      Color: black;
      transition: all .5;
      display: block;
      font-weight: 100;
    }
    .optionAmountText:nth-child(2n){
      background: rgba(207, 198, 247, 0.66);
    }
    .optionAmountText:nth-child(2n+1){
      background: rgba(207, 198, 247, 1);
    }
    .optionAmountText:hover{
      background-color: rgba(69,79,177,0.9);
    }
    .optionAmountText:hover h4{
      Color: white;
    }
</style>
<script type="text/javascript">


                /* select  option amount of Texts*/


  var containerOptionsAmountText = document.getElementById("containerOptionsAmountText");
  var amountTextBox = document.getElementById("amountTextBox");
  containerOptionsAmountText.style.display = "none";


  amountTextBox.addEventListener("click",  function(){
    if (containerOptionsAmountText.style.display == "block") {
      containerOptionsAmountText.style.display = "none";
    }
    else if(containerOptionsAmountText.style.display == "none"){
      containerOptionsAmountText.style.display = "block";
    }
  })


  const optionAmountText = document.querySelectorAll(".optionAmountText");
  const optionAmountTextValue = document.querySelectorAll(".optionAmountTextValue");
  var textAmountText = document.getElementById("textAmountText");


  for (let i = 0; i < optionAmountText.length; i++) {
    optionAmountText[i].addEventListener("click", function(){
      mountTextSelected = optionAmountTextValue[i].innerHTML;
      textAmountText.innerHTML = "" + mountTextSelected;
    })
  }











          var openClip3 = document.getElementById('openAccesories3');

          openClip3.addEventListener('click', function(){
          containerAddToCart[8].style.display = "none";
          optionAddToCard2[8].style.background = "rgba(69,79,177,0.9)";


          containerAddToCart[7].style.display = "block";
          optionAddToCard2[7].style.background = "rgba(69,79,177,0.3)";
          })


          var openText2 = document.getElementById('openImg2');

          openText2.addEventListener('click', function(){
          containerAddToCart[8].style.display = "none";
          optionAddToCard2[8].style.background = "rgba(69,79,177,0.9)";

          containerAddToCart[9].style.display = "block";
          optionAddToCard2[9].style.background = "rgba(69,79,177,0.3)";
          })





          var textInput = document.getElementById('textInput');
          const text = document.querySelectorAll(".text");




          //for (let i = 0; i < textInput.length; i++) {
            textInput.addEventListener("keyup", function(){
              for (var i = 0; i < text.length; i++) {
                text[i].innerHTML  =  textInput.value;
              }
            //  mountTextSelected = optionAmountTextValue[i].innerHTML;
            //  textAmountText.innerHTML = "" + mountTextSelected;
            })



</script>
