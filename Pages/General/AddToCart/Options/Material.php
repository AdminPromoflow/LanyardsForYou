<!-- _______________________ Choose material options _______________________ -->
<!-- _______________________ Choose material options _______________________ -->

    <div class="containerAddToCart containerMaterialAddToCart">
      <h4>Select the material</h4>

      <div id="materialAddToCart" class=" materialAddToCart">

      </div>
      <div class="buttonAddToCartContainer">
        <button id="openLanyardType2" class="nextButtonAddTuCart" type="button" name="button">Next</button>
      </div>
    </div>


    <style media="screen">
    .materialAddToCart{
      position: relative;
      padding: 1vw;
      margin: 1vw  0;
      display: flex;
      justify-content: center;
      flex-wrap:  wrap;
      flex-direction: row;
    }
    .materialBox{
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
    .materialBox h4{
      position: relative;
      text-align: center;
      padding: 0;
    }
    .materialBox img{
      position: relative;
      width: 75%;
      left: 50%;
      transform:  translateX(-50%);
      margin: 1vw 0;
    }
    .borderBoxMaterial{
      border: 3px solid blue;
    }
    </style>

<script type="text/javascript">


addMaterialsAddToCartFromAddToCart();
function addMaterialsAddToCartFromAddToCart(){
  $.ajax( "../../App/Controller/Controller.php", {
    type: 'post',
    async: false,
    data: {
      module: "getMaterials"
    },
    success: function(data){
      var data = jQuery.parseJSON(data);
      addMaterialsAddToCartFromIndex(data);
   }
  }
 )
;

}


  function addMaterialsAddToCartFromIndex(data){
     var boxMaterial = "";
    for (var i = 0; i < data.length; i++) {

      var materialAddToCart = document.getElementById("materialAddToCart");

       boxMaterial  =  boxMaterial +
       '<div class=" materialBox">'+
         '<h4 class="nameMaterialOptions">'+data[i]["nameMaterial"]+'</h4>'+
         '<img src="'+data[i]["addressImgMaterial"]+'" alt="">'+
       '</div>';
      ;
    }
    materialAddToCart.innerHTML = boxMaterial;
  }


/*------------------- Activate a box  when you click  ------------------------*/
/*------------------- Activate a box  when you click  ------------------------*/

    const materialBox = document.querySelectorAll(".materialBox");
    const nameMaterialOptions = document.querySelectorAll(".nameMaterialOptions");
    var materialOn = 0;
    materialBox[0].classList.add("borderBoxMaterial");

    var nameMaterial =  document.getElementById('nameMaterial');




    for (let i = 0; i < materialBox.length; i++) {
      materialBox[i].addEventListener("click", function(){
        materialBox[i].classList.add("borderBoxMaterial");
        materialOn  = i;
        turnOffOtherBoxessMaterials();
        nameMaterial.innerHTML = "<strong>Material: </strong>" + nameMaterialOptions[i].innerHTML;
      })
    }


    function turnOffOtherBoxessMaterials(){
     for (let i = 0; i < materialBox.length; i++) {
        if (i != materialOn) {
          materialBox[i].classList.remove("borderBoxMaterial");
        }
      }
    }

/*----------------- Open lanyard type (one or two ends) ----------------------*/
/*----------------- Open lanyard type (one or two ends) ----------------------*/

  var openLanyardType2 = document.getElementById('openLanyardType2');

  openLanyardType2.addEventListener('click', function(){
    containerAddToCart[0].style.display = "none";
    optionAddToCard2[0].style.background = "rgba(69,79,177,0.9)";

    containerAddToCart[1].style.display = "block";
    optionAddToCard2[1].style.background = "rgba(69,79,177,0.3)";
  })




</script>
