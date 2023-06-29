<style media="screen">
  .contactUs{
    padding: 30px 0;
    position: relative;
    background: rgb(250,250,250);
    background: linear-gradient(0deg, rgba(69,79,177, .06) 96%, rgba(256,256,256,0.002) 100%);
  }
  .contactUsTitle{
    position: relative;
    text-align: center;
    font-size: calc(1.3vw + 1.6em);
    font-weight: 400;
    color: black;
  }
  .contactUsContainer{
    position: relative;
    display: flex;
    flex-wrap:wrap-reverse;
    justify-content: center;
    width: 95vw;
    left: 50%;
    transform: translateX(-50%);
    margin-top : 60px;
  }
  .contactUsBox{
    position: relative;
    width: 50%;
    padding: 50px 30px;
  }
  .contactUsBox input{
    position: relative;
    height: 35px;
    width: 100%;
    font-size: 1.4em;
    padding-left: 10px;
    margin: 10px 0;
  }
  .contactUsBox textarea {
    position: relative;
    width: 100%;
    font-size: 1.4em;
    padding: 5px 10px;
    margin: 10px 0;
    border: none;
    border-bottom: 1px solid lightgrey;
  }
  .contactUsBox h3{
    position: relative;
    font-weight: 300;
    font-size: 1.4em;
    margin: 0px 0 10px 0;
  }
  .contactUsBox button{
      position: relative;
      padding: 8px 15px;
      background: rgb(63,152,237);
      background: linear-gradient(90deg,  rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%);
      color: white;
      text-align: center;
      margin: 30px;
      cursor: pointer;
      left: 50%;
      transform: translateX(-50%);
      font-size: 1.1em;
      cursor: pointer;
  }
  @media screen and (max-width: 1024px){
    .contactUsBox{
      position: relative;
      width: 100%;
      padding: 10px 30px;
    }
  }
  #map {
    height: 300px;
    z-index: 1;
   }
</style>
<section class="contactUs">
  <h1 class="contactUsTitle">Contact us</h1>
  <div class="contactUsContainer">
    <div class="contactUsBox">
      <h3>Your contact info</h3>
      <input type="text" name="" placeholder="Name" value="">
      <input type="text" name="" placeholder="Email address" value="">
      <input type="text" name="" placeholder="Contact number" value="">
      <textarea name="name" placeholder="Message us" rows="3" cols="80"></textarea>
      <button type="button" name="button">Submit</button>
    </div>
    <div class="contactUsBox">
      <div id="map"></div>
    </div>
  </div>

</section>

<script type="text/javascript">
  var map = L.map('map').setView([50.859644, -1.320230], 10);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(map);


var marker = L.marker([50.859644, -1.320230]).addTo(map);
</script>
