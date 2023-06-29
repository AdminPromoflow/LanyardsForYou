<div class="containerAddToCart containercolorAddToCart">
  <h4>Select how many colour you want use (including images and text)</h4>
  <br>

  <div id="amountColorBox" class="amountColorBox">
    <h4 id="textAmountColour">Number of colours: 1</h4>

    <div id="containerOptionsAmountColor" class="containerOptionsAmountColor">
      <div class="optionAmountColor">
        <h4 class="optionAmountColorValue">1</h4>
      </div>
      <div class="optionAmountColor">
        <h4 class="optionAmountColorValue">2</h4>
      </div>
      <div class="optionAmountColor">
        <h4 class="optionAmountColorValue">3</h4>
      </div>
      <div class="optionAmountColor">
        <h4 class="optionAmountColorValue">4</h4>
      </div>
      <div class="optionAmountColor">
        <h4 class="optionAmountColorValue">Coverage</h4>
      </div>
    </div>
  </div>
  <br>

  <h4>Select the color</h4>

  <div class=" colorAddToCart">
    <div class=" colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class=" colorBox">
    </div>
    <div class=" colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class=" colorBox">
    </div>
    <div class=" colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class=" colorBox">
    </div>
    <div class=" colorBox">
    </div>
    <div class="colorBox">
    </div>
    <div class="colorBox">
    </div>
    <label for="otherColor" class="otherColorBox">
      <h4>Other colour</h4><input id="otherColor" type="color">
    </label>

  </div>
  <div class="buttonAddToCartContainer">
    <button id="openSideType3" class="backButtonAddTuCart" type="button" name="button">Back</button>
    <button id="openAttachType2" class="nextButtonAddTuCart" type="button" name="button">Next</button>
  </div>
</div>


<style media="screen">
.colorAddToCart{
  position: relative;
  padding: 1vw;
  margin: 1vw  0;
  display: flex;
  justify-content: center;
  flex-wrap:  wrap;
  flex-direction: row;
}
.colorBox{
  position: relative;
  padding: 1vw;
  background-color: rgba(255, 255, 255, .3);
  margin: 1vw;
  width: 10%;
  height: 6%;
  cursor: pointer;
  box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
  border: 3px solid transparent;
}
.otherColorBox{
  position: relative;
  padding: 0.5vw 1vw;
  background-color: rgba(255, 255, 255, .3);
  margin: 1vw;
  height: 6%;
  cursor: pointer;
  box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
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
}

.otherColorBox h4{
  position: relative;
  text-align: center;
  padding: 0;
  margin: 0;
  padding: 0;
  display: inline-block;
}


.borderBoxcolor{
  border: 3px solid blue;
}
</style>

<script type="text/javascript">


                              /* select and change lanyard colour*/

    var stringArray = ["rgb(137, 50, 58)", "rgb(214, 50, 50)", "rgb(239, 123, 60)",
                       "rgb(247, 231, 102)", "rgb(174, 212, 116)", "rgb(87, 192, 121)",
                       "rgb(54, 110, 89)", "rgb(204, 225, 244)", "rgb(77, 177, 231)",
                       "rgb(87, 192, 121)", "rgb(31, 86, 184)", "rgb(32, 74, 134)",
                       "rgb(245, 187, 215)", "rgb(230, 81, 135)", "rgb(120, 54, 109)",
                       "rgb(242, 245, 254)", "rgb(194, 191, 192)", "rgb(44, 43, 49)"];



    const colorBox = document.querySelectorAll(".colorBox");
    var colorOn = 0;

    colorBox[15].classList.add("borderBoxcolor");

    for (let i = 0; i < colorBox.length; i++) {
    colorBox[i].style.background = stringArray[i];
    colorBox[i].addEventListener("click", function(){

      colorBox[i].classList.add("borderBoxcolor");
      otherColorBox.style.border = "0px solid blue";

      colorOn  = i;
      turnOffOtherBoxessColor();

      colorSelected = stringArray[i];
      changeColorLanyard();
    })
    }

    function turnOffOtherBoxessColor(){
     for (let i = 0; i < colorBox.length; i++) {
        if (i != colorOn) {
          colorBox[i].classList.remove("borderBoxcolor");
        }
      }
    }


    function changeColorLanyard(){

      for (var i = 10; i < 21; i= i + 5) {

      //  alert("OneEnd-"+i+"mm-back-attach");
                                          // OneEnd-10mm-back-attach
      //  document.getElementsByClassName("OneEnd-10mm-back-attach")[0].style.background = colorSelected;

    //  alert("OneEnd-"+i+"mm-back-attach");
        document.getElementsByClassName("OneEnd-"+i+"mm-back")[0].style.background = colorSelected;
      //  document.getElementsByClassName("OneEnd-"+i+"mm-back-attach")[0].style.background = colorSelected;
        document.getElementsByClassName("TwoEnd-"+i+"mm-back")[0].style.background = colorSelected;

        document.getElementsByClassName("OneEnd-"+i+"mm-side1")[0].style.background = colorSelected;
      //  document.getElementsByClassName("OneEnd-"+i+"mm-side1-attach")[0].style.background = colorSelected;
        document.getElementsByClassName("TwoEnd-"+i+"mm-side1")[0].style.background = colorSelected;

        document.getElementsByClassName("OneEnd-"+i+"mm-side2")[0].style.background = colorSelected;
        //document.getElementsByClassName("OneEnd-"+i+"mm-side2-attach")[0].style.background = colorSelected;
        document.getElementsByClassName("TwoEnd-"+i+"mm-side2")[0].style.background = colorSelected;
      }

    }




                    /* select  option other colours*/


  var otherColorBox =  document.getElementsByClassName("otherColorBox")[0];


  otherColorBox.addEventListener("click", function(){
    otherColorBox.style.border = "2px solid blue";
    colorOn  = 20;
    turnOffOtherBoxessColor();


  })


  var otherColor = document.getElementById("otherColor");

  otherColor.addEventListener("input", function(){
    colorSelected = otherColor.value;
    changeColorLanyard();
  }, false);



                    /* Next and Back button*/

  var openSideType3 = document.getElementById('openSideType3');

  openSideType3.addEventListener('click', function(){
    containerAddToCart[4].style.display = "none";
    optionAddToCard2[4].style.background = "rgba(69,79,177,0.9)";

    containerAddToCart[3].style.display = "block";
    optionAddToCard2[3].style.background = "rgba(69,79,177,0.3)";
  })


  var openAttachType2 = document.getElementById('openAttachType2');

  openAttachType2.addEventListener('click', function(){
    containerAddToCart[4].style.display = "none";
    optionAddToCard2[4].style.background = "rgba(69,79,177,0.9)";

    containerAddToCart[5].style.display = "block";
    optionAddToCard2[5].style.background = "rgba(69,79,177,0.3)"; 
  })





                /* select  option amount of colours*/


  var containerOptionsAmountColor = document.getElementById("containerOptionsAmountColor");
  var amountColorBox = document.getElementById("amountColorBox");
  containerOptionsAmountColor.style.display = "none";


  amountColorBox.addEventListener("click",  function(){
    if (containerOptionsAmountColor.style.display == "block") {
      containerOptionsAmountColor.style.display = "none";
    }
    else if(containerOptionsAmountColor.style.display == "none"){
      containerOptionsAmountColor.style.display = "block";
    }
  })


  const optionAmountColor = document.querySelectorAll(".optionAmountColor");
  const optionAmountColorValue = document.querySelectorAll(".optionAmountColorValue");
  var textAmountColour = document.getElementById("textAmountColour");


  for (let i = 0; i < optionAmountColor.length; i++) {
    optionAmountColor[i].addEventListener("click", function(){
      mountColourSelected = optionAmountColorValue[i].innerHTML;
      textAmountColour.innerHTML = "Number of colours: " + mountColourSelected;
    })
  }


/*  window.addEventListener('click', function(e){
  if (document.getElementById('containerOptionsAmountColor').contains(e.target)){
  } else{
    containerOptionsAmountColor.style.display = "none";
  }
});*/



</script>
