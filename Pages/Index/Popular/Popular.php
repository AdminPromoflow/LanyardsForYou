<style media="screen">
.Popular{
  position: relative;
  padding: 20px 50px;
}
.popularTitle{
  text-align: center;
  font-size: calc(1.3vw + 1.6em);
  font-weight: 400;
  color: black;
}
.containerPopular{
  position: relative;
  display: flex;
  margin: 30px 0 0 0;
}
.boxPopular{
  position: relative;
  width: 50%;
  padding: 20px;
}
.item-box-popular{
  position: relative;
  padding: 3px 0;
  width: 100%;
  display: flex;
  margin: 0px 0 10px 0;
  background-color: rgb(230, 230, 230);
  transition: all .5s;
}
.item-box-popular:hover{
  background-color: rgba(105, 105, 105,1);
  transition: all .5s;
}

.item-box-popular:hover .item-popular h3{
  color: white;
  transition: all .5s;
}

.item-popular{
  position: relative;
  height: 100%;
  width: 100%;
  display: flex;
  width: 50%;
  min-width: 271px;
  cursor: pointer;
}

.item-popular h3{
  padding-top: 5px;
   padding-left: 20px;
   font-size: 1.4em;
   color: black;
   font-weight: 300;
 }
 .textPopular1 h3{
   font-weight: 400;
 }

 .btn-popular{
  position: relative;
  padding: 8px;
  background: rgb(63,152,237);
  background: linear-gradient(90deg,  rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%);

  color: white;
  text-align: center;
  margin: 30px;
  cursor: pointer;

}
.btn-popular h2{
  font-weight: 400;

}

.btn-popular:hover{

}


.image-box-popular{
  position: relative;
  background-image: url("../../Pages/Index/Popular/Popular-box.jpg");
  height: 300px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  border: 1px solid black;
}

@media screen and (max-width: 1130px){

  .containerPopular{
    flex-direction:column-reverse;
  }
  .boxPopular{
    width: 80%;
    left: 50%;
    transform: translateX(-50%);

  }

}


@media screen and (max-width: 740px){
  .Popular{
    padding: 20px 5px;
  }
  .item-box-popular{
    flex-direction: column;
    justify-content: center;
  }
  .item-box-popular h3 {
    position: relative;
    left: 50%;
    transform: translateX(-50%);
  }
  .item-popular h3{
    padding-top: 0px;
  }
  .item-popular{
    width: 100%;
    padding: 2px;
  }
}


</style>

<section class="Popular">
<h1 class="popularTitle">Most popular lanyard</h1>
<div class="containerPopular">
  <div class="boxPopular">



    <div class="item-box-popular">
         <div class="item-popular">
           <h3 class="textPopular1">Material </h3>
         </div>
         <div class="item-popular">
           <h3 class="textPopular2"> Dye-sublimation </h3>
         </div>
       </div>

       <div class="item-box-popular">
         <div class="item-popular">
           <h3 class="textPopular1">Type of lanyard </h3>
         </div>
         <div class="item-popular">
           <h3 class="textPopular2"> Single ended </h3>
         </div>
       </div>

       <div class="item-box-popular">
         <div class="item-popular">
           <h3 class="textPopular1">Width </h3>
         </div>
         <div class="item-popular">
           <h3 class="textPopular2"> 20mm </h3>
         </div>
       </div>

       <div class="item-box-popular">
         <div class="item-popular">
           <h3 class="textPopular1">Colour</h3>
         </div>
         <div class="item-popular">
           <h3 class="textPopular2"> Coverage </h3>
         </div>
       </div>


       <div id="btn-popular" class="btn-popular">
         <h2 >View this lanyard</h2>
      </div>

  </div>
  <div class="boxPopular">
    <div class="image-box-popular">

    </div>
  </div>
</div>
</section>

<script type="text/javascript">


document.getElementById('btn-popular').addEventListener('click', e => {
  document.getElementsByClassName("stickyAddToCart")[0].style.display  = "block";

  /*  document.getElementById('btn-popular').addEventListener('mouseenter', e => {
      for (var i = 0; i < itemBoxPopular.length; i++) {
        itemBoxPopular[i].classList.add("itemPopular");
        textPopularWhite1[i].classList.add("textPopularWhite");
        textPopularWhite2[i].classList.add("textPopularWhite");

      }
    }
    );
    document.getElementById('btn-popular').addEventListener('mouseleave', e => {
          for (var i = 0; i < itemBoxPopular.length; i++) {
            itemBoxPopular[i].classList.remove("itemPopular");
            textPopularWhite1[i].classList.remove("textPopularWhite");
            textPopularWhite2[i].classList.remove("textPopularWhite");
          }

    }
  );*/
}
);

</script>
