<div id="closeAddToCart" class="closeAddToCart">
  <h2>X</h2>
</div>



<style media="screen">
  .closeAddToCart{
    position: absolute;
    top: 3vw;
    right: 3vw;
    cursor: pointer;
  }
  .closeAddToCart h2{
    color: white;
    text-shadow: 1px 1px 1px black;
    font-weight: 600;
    cursor: pointer;
    transition: all .5s;
    font-size: clamp(1.3em, 3vw, 5em);

  }
  .closeAddToCart h2:hover{
    text-shadow: 2px 2px 4px black;
  }
</style>

  <script type="text/javascript">
  var closeAddToCart = document.getElementById("closeAddToCart");
  var stickyAddToCart = document.getElementById("stickyAddToCart");

  closeAddToCart.addEventListener("click", function(){
    stickyAddToCart.style.display = "none";
  });

  </script>
