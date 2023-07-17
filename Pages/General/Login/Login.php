
<style media="screen">
  .bgLogin{
    position: fixed;
    top: 0%;
    left: 0px;
    height: 100vh;
    width: 100vw;
    background-color: rgba(10,10,10,.82);
    z-index: 200;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .containerLogin{
    position: relative;
    min-height: 400px;
    min-width: 300px;
    height: 200px;
    width: 400px;
    border-radius: 5px;
    padding: 30px;
    background: gold;
  }
  .headLogin{
    position: relative;
    height: 80px;
    width: 100%;
    background: rgba(69,79,177,0.9);
  }
  .headLogin h3{
    position: relative;
    font-size: 1.7em;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
    color: white;
  }
  .headLogin h2{
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
  .bodyLogin{
    position: relative;
    height: calc(100% - 80px);
    width: 100%;
    background-color: #e0e0e0;
  }
  .inputLogin{
    position: relative;
    width: 80%;
    padding: 10px 0px;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .inputLogin input{
    position: relative;
    width: 100%;
    height: 30px;
    margin: 10px 0;
    border: 1px solid black;
    padding-left: 10px;
    font-size: 1.2em;
  }
  .inputLogin label{
    font-size: 1.2em;
  }
  .bodyLogin button{
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
  }
  .bodyLogin a{
    position: relative;
    display: block;
    height: 45px;
    width: 50%;
    top: 40px;
    left: 50%;
    transform: translateX( -50%);
    cursor: pointer;
    color: black;
    margin: 10px  0;
    font-size: 1.3em;
    text-align: center;
  }
  @media screen and (max-width: 470px) {
    .containerLogin{
      width: 290px
    }
  }
</style>
<script src="https://kit.fontawesome.com/497e73f6af.js" crossorigin="anonymous"></script>
<section class="bgLogin">
  <div class="relative">
    <div class="containerLogin">
      <div class="headLogin">
        <h2 id="closeLogin">X</h2>
        <h3>Login</h3>
      </div>
      <div class="bodyLogin">
        <div class="inputLogin">
          <label for="emailLogin">Email</label>
          <input type="email" id="emailLogin" name="fname">

          <label for="passwordLogin">Password</label>
          <input type="password" id="passwordLogin" name="fname">


      <!--    <label for="">Email</label>
          <input type="text" id="emailLogin" name="" value=""><br>
          <label for="">Password</label>
          <input type="password" id="passwordLogin" name="" value="">-->
        </div>

        <button id="login" type="button" name="button">Enter</button>
        <a id="openRegister" >Create an Account  <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>


<?php include("../../Pages/General/Register/Register.php"); ?>
<?php include("../../Pages/General/Alert/Alert.php"); ?>

<script type="text/javascript">

/*var closeLogin = document.getElementById("closeLogin");
var bgLogin = document.getElementsByClassName("bgLogin")[0].style;
closeLogin.addEventListener("click",function(){
  bgLogin.display = "none";
});*/



var openRegister = document.getElementById("openRegister");
var bgLogin = document.getElementsByClassName("bgLogin")[0].style;
var bgRegister = document.getElementsByClassName("bgRegister")[0].style;

openRegister.addEventListener("click",function(){
  bgLogin.display = "none";
  bgRegister.display = "block";
});

  var login  =  document.getElementById("login");
  var passwordLogin = document.getElementById("passwordLogin");

  var messageAlert = document.getElementById("messageAlert");
  var bgAlert = document.getElementsByClassName("bgAlert")[0].style;


  login.addEventListener("click", function(){
    if (emailLogin.value.includes('@')) {
      if (emailLogin.value.includes('.')) {
        messageAlert.innerHTML = "Haz ingresado un correo válido";
        bgAlert.display =  "block";
        bgLogin.display =  "none";
      }
      else {
        messageAlert.innerHTML = "No haz ingresado un correo válido";
        bgAlert.display =  "block";
        bgLogin.display =  "none";
      }
    }
    else{
      messageAlert.innerHTML = "No haz ingresado un correo válido";
      bgAlert.display =  "block";
      bgLogin.display =  "none";
    }
    //alert(emailLogin.value + "porfis2" + passwordLogin.value + ":)");
  })


  bgLogin.display = "none";
  bgLogin.display = "flex";
  var openLogin = document.getElementById("openLogin");
  openLogin.addEventListener("click",function(){
    //alert("Hola");
  });
</script>
