<?php
class Mail {

  private $recipients;
  function setRecipinets($recipients){
    $this->recipients = $recipients;
  }
  function successfulRegistration(){
    //  $to = $_POST["email"];
    // Correo electrónico de destino y asunto
    $recipients = array(
    'laurazoro@gmail.com',
    'lonsus30@gmail.com',
    'srdaniela2711@gmail.com'
  );
    $to = implode(',', $recipients);
    $subject = "Correo con estilo";

    // Dirección de correo electrónico del remitente
    $from = "admin@alejandrarozo.com";

    // Cabeceras del correo electrónico
    $headers = "From: $from\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "<style type='text/css'>
            @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;700&display=swap');
                    body {
                        font-family: 'Oswald', 'sans-serif';
                    }
                  </style>";
    // Estilos CSS
    $css = "
    <style>

    </style>
    ";

    // Contenido del correo electrónico
    $message = $css . "
    <html>
      <head>
          <title>Lanyards for you</title>
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
      </head>
      <body>
      <div  class='background' style= 'position: relative; width: 100%; background: rgb(245,245,245); padding: 2vw 0; ' >
      <div class='background2' style='width: 70%; overflow-x: hidden; min-width: 300px; margin: 0 auto; position: relative; background: white; margin-top: 4vw; margin-bottom: 4vw;'>

        <div class='header' style= 'position: relative; background: rgb(63,152,237); background: linear-gradient(90deg, rgba(63,152,237,0.9) 0%, rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%, rgb(196, 56, 149) 100%);'>
          <img  alt='Imagen' style='display: block; width: 40%; margin-left: 2vw;' src='https://lanyardsforyou.com/Pages/General/Menu/Logo.png'>
        </div>

        <div class='titleContainer' style=' position: relative; width: 85%;  margin: 0 auto; margin-top: calc(2.0vw + 1.0em); ' >
          <h1 style='font-family: Oswald, sans-serif; font-size: calc(1.2vw + 0.8em); position: relative; margin: 0 auto; letter-spacing: 0px; color: #664A99; text-align: center; '>HELLO AND WELCOME TO LANYARDS FOR YOU</h1>
          <h2 style='font-family: Oswald, sans-serif; font-weight: 300; font-size: calc(1.1vw + 0.7em); position: relative; margin: 0 auto; letter-spacing: 0px; color: #664A99; text-align: center; margin-top: calc(0.2vw + 0.2em); '>We're glad to have you here</h2>
        </div>

        <div class='imgEmail' style='position: relative; width: 85%;  margin: 0 auto;  margin-top: calc(0.8vw + 0.8em);'>
          <img   style='position: relative; width: 100%; ' alt='' src='https://lanyardsforyou.com/Pages/Index/Slider/Slide2.png'>
        </div>

        <div class='titleContainer' style=' position: relative; width: 85%;  margin: 0 auto; margin-top: calc(1.4vw + 0.4em); ' >
          <h3 style='font-family: Oswald, sans-serif; font-weight: 500; font-size: calc(1vw + 0.6em); position: relative; margin: 0 auto; letter-spacing: 0px; color: black; text-align: center;  '>We welcome you to our community</h3>
          <h4 style='font-family: Oswald, sans-serif; font-weight: 200; font-size: calc(0.9vw + 0.5em); position: relative; margin: 0 auto; letter-spacing: 0px; color: black; text-align: center; width: 60%; '>Please make a note of your account info to access:</h4>

          <h4 style='font-family: Oswald, sans-serif; font-weight: 400; font-size: calc(0.9vw + 0.5em); position: relative; margin: 0 auto; letter-spacing: 0px; color: black; text-align: center; margin-top: calc(0.3vw + 0.3em);  '>username: XXXXX</h4>
          <h4 style='font-family: Oswald, sans-serif; font-weight: 400; font-size: calc(0.9vw + 0.5em); position: relative; margin: 0 auto; letter-spacing: 0px; color: black; text-align: center; margin-top: calc(0.2vw + 0.2em); '>password: XXXXX </h4>

          <h3 style='font-family: Oswald, sans-serif; font-weight: 300; font-size: calc(1vw + 0.6em); position: relative; margin: 0 auto; letter-spacing: 0px; color: black; text-align: center; margin-top: calc(0.4vw + 0.4em); '>www.lanyardsforyou.com</h3>
        </div>

        <div class='footer' style= 'position: relative; background: #555FA8; width: 100%; margin-top: calc(1.8vw + 0.8em); heigth: calc(7.8vw + 5.9em); '>
          <img  alt='Imagen' style='display: block; width: calc(4.8vw + 2.9em); position: absolute; top: 1vw; left: 1vw; padding: 1vw 0; margin: 0 auto;' src='https://lanyardsforyou.com/Pages/General/Menu/Logo.png'>
        </div>

          </div>
      </div>
       </body>
    </html>
    ";



    // Envío del correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        echo 'Correo enviado correctamente.';
    } else {

        echo 'Error al enviar el correo.2';
    }
  }
}

 ?>
