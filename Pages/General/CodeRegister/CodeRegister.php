
<style media="screen">
  .bgCodeRegister{
    display: none;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100vh;
    width: 100vw;
    background-color: rgba(10,10,10,.82);
    z-index: 2;
  }
  .containerCodeRegister{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    min-height: 300px;
    min-width: 300px;
    height: 400px;
    width: 400px;
    border-radius: 5px;
  }
  .headCodeRegister{
    position: relative;
    height: 80px;
    width: 100%;
    background: rgb(63,152,237);
    background: linear-gradient(-90deg, rgba(63,152,237,1) 0%, rgba(69,79,177,1) 33%, rgba(143,82,180,1) 73%, rgba(196,56,149,1) 95%);
  }
  .headCodeRegister h3{
    position: relative;
    font-size: 1.7em;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
    color: white;
  }
  .headCodeRegister h2{
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
  .bodyCodeRegister{
    position: relative;
    height: calc(100% - 80px);
    width: 100%;
    background-color: #e0e0e0;
  }
  .inputCodeRegister{
    position: relative;
    width: 80%;
    padding: 10px 0px;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin-bottom: 20px;
  }
  .inputCodeRegister input{
    position: relative;
    width: 100%;
    height: 30px;
    margin: 20px 0  0px;
    border: 1px solid black;
    padding-left: 10px;
    font-size: 1.2em;
  }
  .inputCodeRegister label{
    font-size: 1.2em;
  }
  .bodyCodeRegister button{
    position: relative;
    height: 45px;
    width: 50%;
    top: 40px;
    left: 50%;
    transform: translateX( -50%);
    background: #C43895;
    cursor: pointer;
    color: white;
    font-size: 1.3em;
  }
  .bodyCodeRegister p{
    position: relative;
    display: block;
    height: 30px;
    width: 70%;
    top: 40px;
    left: 50%;
    transform: translateX( -50%);
    cursor: pointer;
    color: black;
    margin: 30px  0 0 0;
    font-size: 1.2em;
    text-align: center;
  }

  @media screen and (max-width: 470px) {
    .containerCodeRegister{
      width: 290px
    }
  }
</style>

<section class="bgCodeRegister">
  <div class="relative">
    <div class="containerCodeRegister">
      <div class="headCodeRegister">
        <h2 id="closeCodeRegister">X</h2>
        <h3>Code</h3>
      </div>
      <div class="bodyCodeRegister">
        <div class="inputCodeRegister">
          <label for="">Enter the code that we have sent to your email</label>
          <input type="text" name="" value=""><br>
        </div>
        <button type="button" name="button">Enter</button>
        <p id="codeRegisterNumber" >This code will expire in 90 seconds</p>
      </div>
    </div>
  </div>
</section>




<script type="text/javascript">

var closeCodeRegister = document.getElementById("closeCodeRegister");
var bgCodeRegister = document.getElementsByClassName("bgCodeRegister")[0].style;
closeCodeRegister.addEventListener("click",function(){
  bgCodeRegister.display = "none";
});








  //bgRegister
</script>
