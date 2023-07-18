
<style media="screen">
  .bgAlert{
    position: fixed;
    top: 0%;
    left: 0px;
    height: 100vh;
    width: 100vw;
    background-color: rgba(10,10,10,.82);
    z-index: 11;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .containerAlert{
    position: relative;

    padding: 20px;
    min-width: 400px;
    width: 300px;
    height: 400px;
    border-radius: 5px;
  }
  .headAlert{
    position: relative;
    height: 80px;
    width: 100%;
    background: rgba(69,79,177,0.9);
  }
  .headAlert h3{
    position: relative;
    font-size: 1.7em;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
    color: white;
  }
  .headAlert h2{
    position: absolute;
    display: block;
    top: 50%;
    transform: translateY(-50%);
    right: 20px;
    color: white;
    font-size: 1.4em;
    cursor: pointer;
    z-index: 2;
  }
  .bodyAlert{
    position: relative;
    height: 180px;
    padding: 30px;
    width: 100%;
    background-color: #e0e0e0;
  }
  .bodyAlert h5{
    font-size: 1.4em;
    font-weight: 400;
  }
  .bodyAlert button{
    position: relative;
    height: 45px;
    width: 50%;
    top: 40px;
    left: 50%;
    transform: translateX( -50%);
    background: rgba(69,79,177,0.9);
    cursor: pointer;
    color: white;
    font-size: 1.3em;
    display: block;
  }

  @media screen and (max-width: 470px) {
    .containerAlert{
      width: 290px
    }
  }
</style>
<script src="https://kit.fontawesome.com/497e73f6af.js" crossorigin="anonymous"></script>
<section class="bgAlert">
  <div class="relative">
    <div class="containerAlert">
      <div class="headAlert">
        <h2 id="closeAlert">X</h2>
        <h3>Message</h3>
      </div>
      <div class="bodyAlert">
          <h5 id="messageAlert">Your account has been created</h5>

          <button id="" type="button" name="button">Ok</button>


      </div>
    </div>
  </div>
</section>



<script type="text/javascript">


  //bgRegister
</script>
