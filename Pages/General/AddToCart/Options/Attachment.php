
    <div class="containerAddToCart containerattachmentAddToCart">
      <h4>Select the attachment (This price changes according to the width of the lanyard)</h4>

      <div class=" attachmentAddToCart">
        <div class=" attachmentBox">
          <h4 class="nameAttachmentOptions">Standard Dog Clip</h4>
          <img src="../../Pages/General/AddToCart/Img/Attachment/StandardDogClip.png" alt="">
          <h4 class="priceAttachmentOptions">N/A</h4>
        </div>
        <div class="attachmentBox">
          <h4 class="nameAttachmentOptions">Crab Hook</h4>
          <img src="../../Pages/General/AddToCart/Img/Attachment/CrabHook.png" alt="">
          <h4 class="priceAttachmentOptions">+£0.36</h4>
        </div>
        <div class="attachmentBox">
          <h4 class="nameAttachmentOptions">Metal JHook</h4>
          <img src="../../Pages/General/AddToCart/Img/Attachment/MetalJHook.png" alt="">
          <h4 class="priceAttachmentOptions">+£0.36</h4>
        </div>
        <div class="attachmentBox">
          <h4 class="nameAttachmentOptions">Slide Clip</h4>
          <img src="../../Pages/General/AddToCart/Img/Attachment/SlideClip.png" alt="">
          <h4 class="priceAttachmentOptions">+£0.36</h4>
        </div>
        <div class=" attachmentBox">
          <h4 class="nameAttachmentOptions">Swivel Clips</h4>
          <img src="../../Pages/General/AddToCart/Img/Attachment/SwivelClips.png" alt="">
          <h4 class="priceAttachmentOptions">+£0.36</h4>
        </div>
        <div class=" attachmentBox">
          <h4 class="nameAttachmentOptions">Crocodile Clip</h4>
          <img src="../../Pages/General/AddToCart/Img/Attachment/CrocodileClip.png" alt="">
          <h4 class="priceAttachmentOptions">+£0.36</h4>
        </div>

      </div>
      <div class="buttonAddToCartContainer">
        <button id="openColour3" class="nextButtonAddTuCart" type="button" name="button">Back</button>
        <button id="openClip2" class="nextButtonAddTuCart" type="button" name="button">Next</button>
      </div>
    </div>


    <style media="screen">
    .attachmentAddToCart{
      position: relative;
      padding: 1vw;
      margin: 1vw  0;
      display: flex;
      justify-content: center;
      flex-wrap:  wrap;
      flex-direction: row;
    }
    .attachmentBox{
      position: relative;
      padding: 1vw;
      background-color: rgba(255, 255, 255, .3);
      margin: 1vw;
      width: 25%;
      cursor: pointer;
      box-shadow: .2vw .2vw .4vw  rgba(0, 0, 0, 0.2);
      min-width: 150px;
      border: 3px solid transparent;
    }
    .attachmentBox h4{
      position: relative;
      text-align: center;
      padding: 0;
    }
    .attachmentBox img{
      position: relative;
      width: 75%;
      left: 50%;
      transform:  translateX(-50%);
      margin: 1vw 0;
    }
    .borderBoxattachment{
      border: 3px solid blue;
    }
    </style>

    <script type="text/javascript">
    const attachmentBox = document.querySelectorAll(".attachmentBox");
    var attachmentBoxOn = 0;
    attachmentBox[0].classList.add("borderBoxattachment");

    /* Price attachment*/

const nameAttachmentOptions = document.querySelectorAll(".nameAttachmentOptions");


    for (let i = 0; i < attachmentBox.length; i++) {
      attachmentBox[i].addEventListener("click", function(){
        attachmentBox[i].classList.add("borderBoxattachment");
        attachmentBoxOn  = i;

        turnOffOtherBoxessAttachment();
        attachSelected = nameAttachmentOptions[i].innerHTML.replace(/\s/g, '');

        changeAtachment();

      })
    }

    function turnOffOtherBoxessAttachment(){
     for (let i = 0; i < attachmentBox.length; i++) {
        if (i != attachmentBoxOn) {
          attachmentBox[i].classList.remove("borderBoxattachment");
        }
      }
    }

    const attachmentImgAddress = document.querySelectorAll(".attachmentImgAddress");
    function changeAtachment(){

      for (var i = 0; i < attachmentImgAddress.length; i++) {
        attachmentImgAddress[i].src = "../../Pages/General/AddToCart/Img/Attachment/" + attachSelected + ".png";

      }


    }



                          /* Price attachment changes with width*/
  const priceAttachmentOptions = document.querySelectorAll(".priceAttachmentOptions");
  changePriceAttachmentText();



  var widthSelected = "";


      function changePriceAttachmentText(){
        var priceStandardDogClip = ["N/A", "N/A", "N/A", "N/A", "N/A"];
        var CrabHook = ["+£0.36", "+£0.38", "+£0.83", "+£0.86", "+£0.89"];
        var MetalJHook = ["+£0.26", "+£0.29", "+£0.29", "+£0.33", "+£0.36"];
        var SlideClip = ["+£0.45", "+£0.48", "+£0.50", "+£0.52", "+£0.54"];
        var SwivelClips = ["+£0.10", "+£0.15", "+£0.17", "+£0.19", "+£0.23"];
        var CocodrileClip = ["+£0.18", "+£0.20", "+£0.22", "+£0.25", "+£0.27"];


        var index = 0;

        getOptionSelected("getWidthSelected");
        widthSelected = value;

        var j = 10;

        for (var i = 0; i < 5; i++) {
          if (withSelected == (j + 'mm')) {
            index = i;
          }
          j= j + 5;

        }

          priceAttachmentOptions[0].innerHTML =  priceStandardDogClip[index];
          priceAttachmentOptions[1].innerHTML =  CrabHook[index];
          priceAttachmentOptions[2].innerHTML =  MetalJHook[index];
          priceAttachmentOptions[3].innerHTML =  SlideClip[index];
          priceAttachmentOptions[4].innerHTML =  SwivelClips[index];
          priceAttachmentOptions[5].innerHTML =  CocodrileClip[index];/**/

      }




              /* Next and Back button*/


        var openColour3 = document.getElementById('openColour3');

        openColour3.addEventListener('click', function(){
       containerAddToCart[5].style.display = "none";
        optionAddToCard2[5].style.background = "rgba(69,79,177,0.9)";


         containerAddToCart[4].style.display = "block";
        optionAddToCard2[4].style.background = "rgba(69,79,177,0.3)";
        })


        var openClip2 = document.getElementById('openClip2');

        openClip2.addEventListener('click', function(){
        containerAddToCart[5].style.display = "none";
        optionAddToCard2[5].style.background = "rgba(69,79,177,0.9)";

        containerAddToCart[6].style.display = "block";
        optionAddToCard2[6].style.background = "rgba(69,79,177,0.3)";
        })












    </script>
