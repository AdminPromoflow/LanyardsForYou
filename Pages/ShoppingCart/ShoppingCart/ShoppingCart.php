<style media="screen">
  .shoppingCart{
    position: relative;
    padding: 40px 0px;

  }
  .containerShoppingCart{
    position: relative;
    width: 90%;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    min-height: 70vh;
  }
  .productosContainer{
    position: relative;
    padding: 2px;
    width: 59.3%;
  }
  .productosContainer h3{
    font-size: 1.4em;
    font-weight: 300;
    margin: 0 0 40px 0;
  }
  .priceContainer{
    position: relative;
    padding: 10px;
    width: 38.3%;
    border-radius: 5px;
    background-color: rgb(230, 230, 230);
    border: 1px solid black;
  }
  .boxShoppingCart{
    position: relative;
    width: 95%;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    min-height: 100px;
    margin: 10px 0;
    border-radius: 3px;
    box-shadow: 3px 3px 4px grey, -1px -1px 1px grey;
  }
  .boxImageShoppingCart{
    position: relative;
    min-width: 20%;
    padding: 1px;

  }
  .boxImageShoppingCart img{
    position: relative;
    height: 100px;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%) rotate(0deg);
    padding: 10px;
  }
  .contectShoppingCart{
    position: relative;
    min-width: 40%;
    padding: 1px;
    background-color: white;
    padding: 5px 15px;
    background-color: rgb(230, 230, 230);
  }
  .contectShoppingCart h3, .priceShoppingCart h3{
    margin: 3px;
    font-size: 1.25em;
    font-weight: 300;
  }

  .priceShoppingCart{
    position: relative;
    min-width: 24%;
    padding: 1px;
    padding: 25px 15px;
  }
  .containerTextBoxShoppingCart{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 1px;
    width: 220px;
  }
  .priceShoppingCart h3:nth-child(3){
    border-top: 1px solid lightgrey;
    margin-top: 10px;
  }

  .wrapContainer{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    padding: 2px 0 20px 0;
    border-top: 2px solid black;
  }
  .priceContainer h2 {
    position: relative;
    margin: 15px 0;
    text-align: center;
  }
  .orderProductContainer{
    position: relative;
    padding: 2px;
    display: inline-block;
    width: 100%;
  }
  .orderProductContainer:nth-child(odd){
  }
  .orderProductContainer h4{
    font-weight: 400;
  }
  .orderProduct{
    position: relative;
    width: 50%;
    height: 100%;
    padding: 5px 10px;
    border-top: 1px solid black;
  }
  .noBorderTop{
    border-top: 0px solid black !important;
  }
  .orderProduct h3{
    font-size: 1.1em;
    font-weight: 300;
  }
  .orderProduct:nth-child(1){
    float: left;
  }
  .orderProduct:nth-child(1) h3{
    text-align: left;
  }
  .orderProduct:nth-child(2) {
    float: left;
  }
  .orderProduct:nth-child(2) h3{
    text-align: right;
  }

  .shoppingCart button{
    position: relative;
    padding: 5px 10px;
    font-size: 1.2em;
    font-weight: 300;
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(69,79,177,1);
    color: white;
    cursor: pointer;
    margin: 15px 0;
  }


  @media only screen and (max-width:1245px){
    .productosContainer{
      width: 100%;
    }
  .priceContainer{
      position: relative;
      width: 100%;
      margin: 25px 0;
    }

  }
  @media only screen and (max-width:740px){
    .boxImageShoppingCart{
      min-width: 100%;
    }
    .contectShoppingCart{
      min-width: 100%;
    }
    .priceShoppingCart{
      min-width: 100%;
    }
  }
</style>
<section class="shoppingCart">
  <div class="containerShoppingCart">
    <div class="productosContainer">
      <h3>Hello Cat, this are the products that you have add at your shopping cart</h3>
      <div class="boxShoppingCart">
        <div class="boxImageShoppingCart">
          <img src="../../Pages/ShoppingCart/ShoppingCart/iconLanyard2.png" alt="">
        </div>
        <div class="contectShoppingCart">
          <div class="containerTextBoxShoppingCart">
          <h3><strong>Material </strong>Flat polyester</h3>
          <h3><strong>With </strong>20mm</h3>
          <h3><strong>Printed </strong>1 colour</h3>
          <h3><strong>Side </strong>2 sides</h3>
        </div>
        </div>
        <div class="priceShoppingCart">
          <div class="containerTextBoxShoppingCart">
          <h3><strong>Unit price </strong>£1.3</h3>
          <h3><strong>Amount </strong>100 units</h3>
          <h3><strong>Subtotal </strong>£130</h3>
        </div>
        </div>
      </div>

      <div class="boxShoppingCart">
        <div class="boxImageShoppingCart">
          <img src="../../Pages/ShoppingCart/ShoppingCart/iconLanyard2.png" alt="">
        </div>
        <div class="contectShoppingCart">
          <div class="containerTextBoxShoppingCart">
          <h3><strong>Material </strong>Flat polyester</h3>
          <h3><strong>With </strong>20mm</h3>
          <h3><strong>Printed </strong>1 colour</h3>
          <h3><strong>Side </strong>2 sides</h3>
        </div>
        </div>
        <div class="priceShoppingCart">
          <div class="containerTextBoxShoppingCart">
          <h3><strong>Unit price </strong>£1.3</h3>
          <h3><strong>Amount </strong>100 units</h3>
          <h3><strong>Subtotal </strong>£130</h3>
        </div>
        </div>
      </div>

      <div class="boxShoppingCart">
        <div class="boxImageShoppingCart">
          <img src="../../Pages/ShoppingCart/ShoppingCart/iconLanyard2.png" alt="">
        </div>
        <div class="contectShoppingCart">
          <div class="containerTextBoxShoppingCart">
          <h3><strong>Material </strong>Flat polyester</h3>
          <h3><strong>With </strong>20mm</h3>
          <h3><strong>Printed </strong>1 colour</h3>
          <h3><strong>Side </strong>2 sides</h3>
        </div>
        </div>
        <div class="priceShoppingCart">
          <div class="containerTextBoxShoppingCart">
          <h3><strong>Unit price </strong>£1.3</h3>
          <h3><strong>Amount </strong>100 units</h3>
          <h3><strong>Subtotal </strong>£130</h3>
        </div>
        </div>
      </div>


    </div>
    <div class="priceContainer">
      <h2>YOUR ORDER</h2>

      <div class="wrapContainer noBorderTop">
        <div class="orderProductContainer">
          <div class="orderProduct noBorderTop">
            <h3><strong>PRODUCT</strong></h3>
          </div>
          <div class="orderProduct noBorderTop">
            <h3><strong>SUBTOTAL</strong></h3>
          </div>
        </div>
        <div class="orderProductContainer">
          <div class="orderProduct">
            <h3>Flat polyester, 20mm, 1 colour and 2 siddes</h3>
          </div>
          <div class="orderProduct">
            <h3>£130</h3>
          </div>
        </div>
        <div class="orderProductContainer">
          <div class="orderProduct">
            <h3>Flat polyester, 20mm, 1 colour and 2 siddes</h3>
          </div>
          <div class="orderProduct">
            <h3>£130</h3>
          </div>
        </div>
        <div class="orderProductContainer">
          <div class="orderProduct">
            <h3>Flat polyester, 20mm, 1 colour and 2 siddes</h3>
          </div>
          <div class="orderProduct">
            <h3>£130</h3>
          </div>
        </div>
      </div>
      <div class="wrapContainer ">
        <div class="orderProductContainer">
          <div class="orderProduct noBorderTop">
            <h3><strong>Subtotal</strong></h3>
          </div>
          <div class="orderProduct noBorderTop">
            <h3>£390</h3>
          </div>
        </div>
        <div class="orderProductContainer">
          <div class="orderProduct ">
            <h3><strong>VAT(20%)</strong></h3>
          </div>
          <div class="orderProduct ">
            <h3>£78</h3>
          </div>
        </div>
        <div class="orderProductContainer">
          <div class="orderProduct ">
            <h3><strong>TOTAL</strong></h3>
          </div>
          <div class="orderProduct ">
            <h3>£468</h3>
          </div>
        </div>
        <div class="orderProductContainer">
          <h4> By clicking place order I accept I have read and agree to the website terms and conditions <strong>*</strong></h4>
        </div>
        <div class="orderProductContainer">
          <button type="button" name="button">Place order</button>
        </div>
      </div>
    </div>
  </div>
  <button type="button" name="button">Add more products to shopping cart</button>
</section>
<script type="text/javascript">

</script>
