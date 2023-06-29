<div class="containerAddToCart containerAccessoriesAddToCart">
  <h4>Select the Accessories</h4>

  <div class=" AccessoriesAddToCart">
    <div class=" AccessoriesBox">
      <h4 class="nameAccessoriesOptions">None</h4>
      <img src="../../Pages/General/AddToCart/Img/Accessories/noneIcon.png" alt="">
    </div>
    <div class="AccessoriesBox">
      <h4 class="nameAccessoriesOptions">Plastic Wallet</h4>
      <img src="../../Pages/General/AddToCart/Img/Accessories/OlasticWallet.png" alt="">
    </div>
    <div class="AccessoriesBox">
      <h4 class="nameAccessoriesOptions">Rigid Card Holder</h4>
      <img src="../../Pages/General/AddToCart/Img/Accessories/RigidCardHolder.png" alt="">
    </div>
      </div>
  <div class="buttonAddToCartContainer">
    <button id="openClip3" class="nextButtonAddTuCart" type="button" name="button">Back</button>
    <button id="openText2" class="nextButtonAddTuCart" type="button" name="button">Next</button>

  </div>
</div>


<style media="screen">
.AccessoriesAddToCart{
  position: relative;
  padding: 1vw;
  margin: 1vw  0;
  display: flex;
  justify-content: center;
  flex-wrap:  wrap;
  flex-direction: row;
}
.AccessoriesBox{
  position: relative;
  padding: 1vw;
  background-color: rgba(255, 255, 255, .3);
  margin: 1vw;
  width: 30%;
  cursor: pointer;
  box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
  min-width: 207px;
  border: 3px solid transparent;

}
.AccessoriesBox h4{
  position: relative;
  text-align: center;
  padding: 0;
}
.AccessoriesBox img{
  position: relative;
  width: 75%;
  left: 50%;
  transform:  translateX(-50%);
  margin: 1vw 0;
}
.borderBoxAccessories{
  border: 3px solid blue;
}
</style>

<script type="text/javascript">
const accessoriesBox = document.querySelectorAll(".AccessoriesBox");
var accessoriesOn = 0;
accessoriesBox[0].classList.add("borderBoxAccessories");
var boxImgAccessories = document.getElementById("boxImgAccessories");


for (let i = 0; i < accessoriesBox.length; i++) {
  accessoriesBox[i].addEventListener("click", function(){
    accessoriesBox[i].classList.add("borderBoxAccessories");
    accessoriesOn  = i;
    turnOffOtherBoxessAccessories();
    if (i==0) {
      boxImgAccessories.src = "../../Pages/General/AddToCart/Img/Accessories/AccessoriesTransparent.png";
    }
    else if (i==1){
      boxImgAccessories.src = "../../Pages/General/AddToCart/Img/Accessories/OlasticWallet.png";
    }
    else if (i == 2){
      boxImgAccessories.src = "../../Pages/General/AddToCart/Img/Accessories/RigidCardHolder.png";
    }
  })
}


function turnOffOtherBoxessAccessories(){
 for (let i = 0; i < accessoriesBox.length; i++) {
    if (i != accessoriesOn) {
      accessoriesBox[i].classList.remove("borderBoxAccessories");
    }
  }
}









        var openClip3 = document.getElementById('openClip3');

        openClip3.addEventListener('click', function(){
        containerAddToCart[7].style.display = "none";
        optionAddToCard2[7].style.background = "rgba(69,79,177,0.9)";


        containerAddToCart[6].style.display = "block";
        optionAddToCard2[6].style.background = "rgba(69,79,177,0.3)";
        })


        var openText2 = document.getElementById('openText2');

        openText2.addEventListener('click', function(){
        containerAddToCart[7].style.display = "none";
        optionAddToCard2[7].style.background = "rgba(69,79,177,0.9)";

        containerAddToCart[8].style.display = "block";
        optionAddToCard2[8].style.background = "rgba(69,79,177,0.3)";
        })



        
</script>
