<div class="nameSides">
  <div class="relative">
    <img id="imgSides" src="../../Pages/General/AddToCart/Img/Sides/OneSide.png" alt="">

  <h3 id="textSides"><strong>Printed: </strong> One Side</h3>

</div>

</div>
<style media="screen">
  .nameSides{
    position: absolute;
    padding: 0.1vw;
    left: 50%;
    transform: translateX(-50%);
    bottom: 0%;
  }
  .relative{
    position: relative;
    height: 100%;
    width: 100%;
  }
  .nameSides img{
    position: relative;
    width: 3.5vw;
    left: 50%;
    transform: translateX(-50%);
  }
  .nameSides h3{
    font-size: clamp(10px, 1.2vw, 2.1em);
    font-weight: 100;
    text-align: center;
  }
</style>

<script type="text/javascript">
  changeSideOptions2()
    function  changeSideOptions2(){
      textSides.innerHTML = "<strong>Printed: </strong>" + "One side";

    }
    function  changeSideOptions3(){
      textSides.innerHTML = "<strong>Printed: </strong>" + "Two sides";
    }
</script>
