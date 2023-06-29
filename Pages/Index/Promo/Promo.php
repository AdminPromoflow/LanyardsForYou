<style media="screen">
.promo{
    position: relative;
    padding: 15px;
    margin: 40px 0px;
  }
  .containerPromo{
    position: relative;
    display: flex;
    justify-content: center;
    width: 80vw;
    left: 50%;
    transform: translateX(-50%);
    flex-wrap: wrap;
    box-shadow: 3px 3px 6px grey;
    padding: 10px;
  }
  .partPromo{
    position: relative;
    max-width: 410px;
    padding: 10px;
  }
  .partPromo h3{
    position: relative;
    text-align:center;
    color:  black;
    top: 50%;
    transform: translateY(-50%);
    font-weight: 400;
    font-size: 1.4em;
  }
  .partPromo img{
    position: relative;
    height: 90%;
    width: 100px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .partPromo button{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(69,79,177,1);
    color: white;
    border: none;
    padding: 10px 15px;
    font: inherit;
    cursor: pointer;
    outline: inherit;
    font-weight: 500;
    font-size: 1.2em;
    box-shadow: 1px 1px 3px black;
  }
  .partPromo button:hover{
    background-color: rgb(75, 85, 191);
    color: white;
    transition: all .5s;
  }
</style>


<section class="promo">
  <?php include("../../Pages/General/AddToCart/AddToCart.php"); ?>

  <div class="containerPromo">

      <div class="partPromo">
        <h3><strong>Choose</strong> your accessory ... clip, loop, card holders etc ...  </h3>
      </div>
      <div class="partPromo">
        <img src="../../Pages/Index/Promo/promo.png" alt="">
      </div>
      <div class="partPromo">
        <h3><a href="../../Pages/Lanyards/Lanyard.php"><strong>Click here</strong></a> to get  pricing on your lanyard - we will
      give you an alternative costing price automaticlally for another style (where applicable) </h3>
      </div>
      <div class="partPromo">
        <a href="../../Pages/Lanyards/Lanyard.php">
      <button type="button" name="button"> Lanyards </button>
      </a>
      </div>
  </div>
</section>


<script type="text/javascript">

</script>
