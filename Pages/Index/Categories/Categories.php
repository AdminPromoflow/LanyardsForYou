<style media="screen">
  .categoriesSection{
    position: relative;
    padding: 30px;
  }
  .boxCategories{
    position: relative;
    margin: 30px;
    background-color: white;
    box-shadow: 1px 1px 2px black;
    min-width: 250px;
    cursor: pointer;
    border-left: 1px solid grey;
  }
  .boxCategories h2{
    position: relative;
    background: rgb(63,152,237);
    background: linear-gradient(90deg,  rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%);

    padding: 15px;
    color: white;
    text-align: center;
    font-weight: 400;
    font-size: 1.3em;
    border-bottom: 1px solid grey;
    border-top: 1px solid grey;
  }
  .boxCategories h2:nth-child(3){
    font-size: 1em;
  }
  .containerImgCategories{
    position: relative;
    min-height: 150px;
    display: flex;
  }
  .containerImgCategories img{
    position: relative;
    left: 50%;
    transform: translateX( -50%);
    align-self: center;

  }
  .containerCategories{
    position: relative;
    max-width: 95vw;
    display: flex;
    flex-flow: wrap;
    flex-direction: row;
    justify-content: center;
    left: 50%;
    transform: translateX(-50%);
  }
  .titleCategoriess{
    text-align: center;
    font-size: calc(1.3vw + 1.6em);
    font-weight: 400;
    color: black;
  }
</style>

<section class="categoriesSection">
  <h1 class="titleCategoriess">Lanyards</h1>
  <div  id="containerCategories" class="containerCategories">

  </div>
</section>

<script type="text/javascript">
getMaterialsCategoriesSection();
function getMaterialsCategoriesSection(){
  $.ajax( "../../App/Controller/Controller.php", {
    type: 'post',
    async: false,
    data: {
      module: "getMaterials",

    },
    success: function(data){
      var data = jQuery.parseJSON(data);
      addMaterialsCategories(data);
   }
  }
  )
}

function addMaterialsCategories(data){
    var boxMaterial = "";
  for (var i = 0; i < data.length; i++) {

    var containerCategories = document.getElementById("containerCategories");

     boxMaterial  =  boxMaterial +
    '<div class="boxCategories">' +
      '<h2>'+data[i]["nameMaterial"]+'</h2>' +
      '<div class="containerImgCategories">' +
        '<img src="'+data[i]["addressImgMaterial"]+'" alt="">' +
      '</div>' +
    '</div>';

    containerCategories.innerHTML = boxMaterial;
    ;
   }
}



</script>
