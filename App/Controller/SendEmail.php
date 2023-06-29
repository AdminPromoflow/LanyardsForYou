<?php
/*---------------------------------  -----------------------------------*/
    if ($_POST['type']=="sendCodeRegister"){


      $fromEmail = 'smartbusinesscenter@impresistem.com';
      $toEmail = 'aelnajard@gmail.com';
      $subjectName = 'test';
      $message = ':P';



      $to = $toEmail;
      $subject = $subjectName;
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
      $message = '<!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title></title>
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,100;1,300&display=swap" rel="stylesheet">
        </head>
        <body>
          <section class="emailCodeSection">
            <div class="emailCodeContainer">
               <h1>Registration code</h1>
              <h3>Hello, welcome to our virtual lanyards store.</h3>
              <h3>The registration code is:</h3>
              <div class="codeContainer">
                <h3>234578</h3>
              </div>
              <h3>Have a good day and enjoy our website</h3>
              <h3>Best regard</h3>
              <img src="http://cat.smartbusinesscenter.net/Pages/General/Menu/Logo.png" alt="">
            </div>
          </section>
          <script type="text/javascript">

          </script>
        </body>
      </html>';
      $result = @mail($to, $subject, $message, $headers);
    }

 ?>
