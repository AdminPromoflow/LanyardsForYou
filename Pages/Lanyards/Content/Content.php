<style media="screen">
.containerLanyards{
  position: relative;
  padding: 2px;
  width: 100%;
  min-height: 90vh;
  display: flex;
  flex-wrap: wrap;
}
.filterContainer{
  position: relative;
  width: 25%;
  min-height: 500px;
  background: rgb(63,152,237);
  background: linear-gradient(90deg,  rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%);
  z-index: 3;
}
.lanyardsContainer{
  position: relative;
  width: 74.3%;
  min-height: 500px;
}
.closeMenuLanyards{
  position: absolute;
  padding: 0px;
  margin: 13px;
  top: 0px;
  right: 0px;
  cursor: pointer;
}
.closeMenuLanyards img{
  height: 25px;
  width: 25px;
}
.showFilterContainer{
  position: absolute;
  padding: 10px;
  border-radius: 4px;
  background-color: rgba(69,79,177,1);
  top: 10px;
  left: 10px;
  z-index: 100;
  cursor: pointer;
  z-index: 2;
}
.showFilterContainer h3{
  font-size: 1.2em;
  font-weight: 300;
  color: white;
}
.wrapLanyards{
  position: relative;
  padding: 10px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.boxLanyards{
  position: relative;
  padding: 10px;
  background-color: rgb(230, 230, 230);
  border-radius: 2px;
  margin: 15px;
}
.boxLanyards img{
  position: relative;
  height: 150px;
  border-bottom: 1px solid lightgrey;
  left: 50%;
  transform: translateX(-50%);
}
.boxLanyards h2{
  position: relative;
  text-align: left;
  font-size: 1.2em;
  font-weight: 300;
}
.boxLanyards button{
  position: relative;
  padding: 5px 10px;
  font-size: 1.2em;
  font-weight: 300;
  left: 50%;
  transform: translateX(-50%);
  background-color: rgba(69,79,177,1);
  color: white;
  cursor: pointer;
  margin: 5px 0;
}



.wrapFilterLanyards{
  position: relative;
  margin: 60px 10px;
}
.filterMaterialContainer{
  position: relative;
  padding: 15px 0px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  flex-direction: row;
  border-bottom: 3px solid black;
  border-top: 3px solid black;
  margin: 20px  10px;

}
.textFilterMaterial{
  position: relative;
  width: 100%;
  text-align: center;
  color: white;
  font-size: 1.3em;
  font-weight: 300;
  margin: 10px 0;
}
.boxFilterMaterial{
  position: relative;
  padding: 5px;
  background-color: rgb(131, 138, 198);
  margin: 4px;
  cursor: pointer;
}
.boxFilterMaterial h3{
  font-size: 1.2em;
  font-weight: 300;
  color: white;
  text-shadow: 1px 1px 0 black;
}

</style>
<div class="containerLanyards">
  <div id="openFilter" class="showFilterContainer">
    <h3 >Show filter</h3>
  </div>
  <section id="filterContainer" class="filterContainer">
    <div class="closeMenuLanyards">
      <img id="closeFilter" class="closeFilter" src="../../Pages/Lanyards/Content/close.png" alt="">
    </div>
    <div class="wrapFilterLanyards">
      <div class="filterMaterialContainer">
        <h3 class="textFilterMaterial">Filter material:</h3>
        <div class="boxFilterMaterial">
          <h3>Flat polyester</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>Tube polyester</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>Natural Bamboo</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>Dyed Bamboo</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>Recycled PED</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>Dye-sublimation</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>Dye-sub Recycled PET</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>Woven</h3>
        </div>
      </div>
      <div class="filterMaterialContainer">
        <h3 class="textFilterMaterial">Filter width:</h3>
        <div class="boxFilterMaterial">
          <h3>10mm</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>15mm</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>20mm</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>25mm</h3>
        </div>
        <div class="boxFilterMaterial">
          <h3>30mm</h3>
        </div>

      </div>
    </div>
  </section>
  <section id="lanyardsContainer" class="lanyardsContainer">
    <div class="wrapLanyards">
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
      <div class="boxLanyards">
        <img src="../../Pages/Lanyards/Content/image.png" alt="">
        <h2><strong>Material:</strong> Flat polyester</h2>
        <h2><strong>With:</strong> 20mm</h2>
        <h2><strong>Printed:</strong> 1 colour</h2>
        <h2><strong>Side:</strong> 2</h2>
        <button class="seeLanyardsProduct" type="button" name="button">See this lanyard</button>
      </div>
    </div>
  </section>


</div>


<script type="text/javascript">


// open and close filter section

  var openFilter = document.getElementById("openFilter");
  var closeFilter = document.getElementById("closeFilter");
  var filterContainer = document.getElementById("filterContainer");
  var lanyardsContainer = document.getElementById("lanyardsContainer");

  openFilter.addEventListener("click",function(){
    openFilter.style.display = "none";
    closeFilter.style.display = "block";
    filterContainer.style.display = "block";
    lanyardsContainer.style.width = "74.5%";
  })
  closeFilter.addEventListener("click",function(){
    openFilter.style.display = "block";
    closeFilter.style.display = "none";
    filterContainer.style.display = "none";
    lanyardsContainer.style.width = "100%";
   })

   openFilter.style.display = "none";
   const seeLanyardsProduct = document.querySelectorAll(".seeLanyardsProduct");
   for(let i=0; i < seeLanyardsProduct.length; i++) {
     seeLanyardsProduct[i].addEventListener("click", function(){
       document.getElementsByClassName("backgroundAddToCart")[0].style.display  = "block";
     })
   }
</script>
