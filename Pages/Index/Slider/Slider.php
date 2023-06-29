<style media="screen">
  .sliderSection{
    position: relative;
    height: 70vh;
    width: 100vw;
    overflow-x: hidden;
    min-height: 568px;
  }
  .containerSlider{
    position: absolute;
    height: 100%;
    width: 300vw;
    display: flex;
    left: 0vw;
  }
  .sliderRelative{
    position: relative;
    height: 100%;
    width: 100%;
  }
  .slider{
    position: relative;
    width: 33.3%;
    height: 100%;
    float: left;
    background-color: #cccccc; /* Used if the image is unavailable */
    height: 100%;
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
  }
  .slider:nth-child(1) {
    background-image: url("../../Pages/Index/Slider/Slide1.png");
  }
  .slider:nth-child(2) {
    background-image: url("../../Pages/Index/Slider/Slide2.png");
  }
  .slider:nth-child(3) {
    background-image: url("../../Pages/Index/Slider/Slide3.png");
  }
  .moveSliderContainer{
    position: absolute;
    width: 100vw;
    height: 70%;
    top: 50%;
    transform: translateY(-50%);
    left: 0px;
    z-index: 2;
    display: flex;
  }
  .btnMoveSliderContainer{
    position: absolute;
    left: 0px;
    bottom: 15px;
    z-index: 2;
    left: 50%;
    transform: translateX(-50%);
    padding: 5px;
  }
  .moveSlider{
    position: relative;
    width: 49.5%;
    height: 100%;
    display: inline-block;
  }
  .btnMoveSlider{
    position: relative;
    height: 16px;
    width: 60px;
    background-color: white;
    margin: 0 5px;
    display: inline-block;
    border-radius: 10px;
    border: 3px solid black;
    box-shadow: 2px 2px 3px black;
    transition: width .5s;
  }
  .btnMoveSlider:hover{
    width: 85px;
    transition: width .5s;
  }
  .containerSlider1{
    position: absolute;
    height: 100%;
    width: 50%;
    padding: 30px;
  }
  .slider1{
    position: relative;
    height: 63%;
    width: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 280px;
    min-height: 280px;
    max-width: 400px;
    max-height: 550px;

  }
  .corner{
    position: absolute;
    height: 90px;
    width: 90px;
  }
  .corner:nth-child(1){
    border-top: 10px solid red;
    border-left: 10px solid red;
    top: 0px;
    left: 0px;
  }
  .corner:nth-child(2){
    border-top: 10px solid red;
    border-right: 10px solid red;
    top: 0px;
    right: 0px;
  }
  .corner:nth-child(3){
    border-bottom: 10px solid red;
    border-left: 10px solid red;
    bottom: 0px;
    left: 0px;
  }
  .corner:nth-child(4){
    border-bottom: 10px solid red;
    border-right: 10px solid red;
    bottom: 0px;
    right: 0px;
    }
    .containerTextSlider1{
      position: relative;
      padding: 20px;
      margin: 20px;
      top: 50%;
      transform: translateY(-50%);
    }
    .containerTextSlider1 p{
      color: black;
      font-weight: 300;
      text-align: justify;
      font-size: 1.4em;
    }
   .containerTextSlider1 h2{
      margin: 5px 0px;
      text-align: center;
      font-weight: 500;
    }
    .containerTextSlider1 button{
      position: relative;
      left: 50%;
      transform: translateX(-50%);
      padding: 7px 28px;
      background-color: red;
      border: 0px solid black;
      font-size: 1.4em;
      font-weight: 300;
      margin: 5px 0px;
      color: white;
      cursor: pointer;
      z-index: 500;
    }
    .slider2{
      position: relative;
      top: 45%;
      left: 50%;
      width: 95%;
      padding: 10px;
      transform: translate(-50%,-50%);
      background-color: rgba(255, 255, 255, 0.7);
      z-index: 2;

    }
    .slider2 p{
      color: black;
      font-weight: 300;
      text-align: center;
      font-size: 1.4em;
    }
    .slider2 h2{
       margin: 5px 0px;
       text-align: center;
       font-weight: 500;
       width: auto;

     }
     .slider2 button{
       position: relative;
       left: 50%;
       transform: translateX(-50%);
       padding: 7px 28px;
       background-color: white;
       border: 1px solid black;
       font-size: 1.4em;
       font-weight: 300;
       margin: 5px 0px;
       color: black;
       cursor: pointer;
       z-index: 100;
       }
    @media only screen and (max-width:768px){
      .containerSlider1{
        width: 100%;
      }
    }

</style>

<section class="sliderSection">
  <div class="moveSliderContainer">
    <div class="sliderRelative">
      <div class="moveSlider">
      </div>
      <div class="moveSlider">
      </div>
    </div>
  </div>
  <div class="btnMoveSliderContainer">
    <div class="sliderRelative">
      <div class="btnMoveSlider">
      </div>
      <div class="btnMoveSlider">
      </div>
      <div class="btnMoveSlider">
      </div>
    </div>
  </div>
  <div class="containerSlider">
    <div class="sliderRelative">
      <div class="slider">
        <div class="containerSlider1">
          <div class="sliderRelative">
            <div class="slider1">
              <div class="corner">
              </div>
              <div class="corner">
              </div>
              <div class="corner">
              </div>
              <div class="corner">
              </div>
              <div class="containerTextSlider1">
                <p>As the future moves more towards contactless and hands free actions, what better way to carry your ID card, keys, passes, tickets etc than on a </p>
                <h2>LANYARD</h2>
                <button id="slideStart" type="button" name="button">Start</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider">
        <div class="slider2">
          <h2>MOST POPULAR LANYARDS</h2> <br>
          <p>Hands free, light and comfortable to wear, hard to lose.
            We have the options you need to fit all necks!</p> <br>
            <button type="button" name="button">Go</button>
        </div>
      </div>
      <div class="slider">
        <div class="slider2">
          <h2>CUSTOM LANYARDS</h2> <br>
          <p>Material can be tubular, polyester, bamboo or woven, there are many choices.
          There are even LED light up lanyards!  </p><br>
          <p>The width of the lanyard can be for comfort or to accommodate your logo. </p> <br>
          <p>If in doubt you should choose a 20mm or 15mm dye sublimated polyester lanyard - a firm favourite and
          the price is right!</p> <br>
            <button type="button" name="button">Go</button>
        </div>
      </div>
    </div>
  </div>
</section>


<script type="text/javascript">
var moveSlider = document.getElementsByClassName('moveSlider');
var containerSlider = document.getElementsByClassName('containerSlider');
var containerSliderLeft = containerSlider[0].offsetLeft;
//Left
moveSlider[0].addEventListener("mousedown",function(){
  if (containerSlider[0].style.left  == "-200vw" ){
   containerSlider[0].style.left = "-100vw";
 }
 else if (containerSlider[0].style.left  == "-100vw") {
   containerSlider[0].style.left = 0;
 }
 else if (containerSlider[0].style.left  == 0 || containerSlider[0].style.left  == "0px"){
   containerSlider[0].style.left = "-200vw";
 }
 containerSlider[0].style.transition = "2s";
} )
//Right
moveSlider[1].addEventListener("mousedown",function(){
   if (containerSlider[0].style.left  == 0 || containerSlider[0].style.left  == "0px"){
    containerSlider[0].style.left = "-100vw";
  }
  else if (containerSlider[0].style.left  == "-100vw") {
    containerSlider[0].style.left = "-200vw";
  }
  else if (containerSlider[0].style.left  == "-200vw") {
    containerSlider[0].style.left = 0;
  }
  //se mueva con efecto
  containerSlider[0].style.transition = "2s";
})

var btnMoveSlider = document.getElementsByClassName("btnMoveSlider");

btnMoveSlider[0].addEventListener("click",function(){
    containerSlider[0].style.left = 0;
    containerSlider[0].style.transition = "2s";
})
btnMoveSlider[1].addEventListener("click",function(){
   containerSlider[0].style.left = "-100vw";
   containerSlider[0].style.transition = "2s";
})
btnMoveSlider[2].addEventListener("click",function(){
  containerSlider[0].style.left = "-200vw";
  containerSlider[0].style.transition = "2s";
})


var slideStart = document.getElementById('slideStart');

slideStart.addEventListener("click",function(){
  alert("hola");
})




</script>
