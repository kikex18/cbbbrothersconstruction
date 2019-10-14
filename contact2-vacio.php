<?php 
/*
By Geo ;) 
*/

/*********** Config ***************/
$companyName = "";
$companyEmail =""; //1,2,3... correos
$emailForThanks =""; // 1 correo nada mas

/*********************************/

@session_start();
$GLOBAL['url'] = $_SESSION['url'];
if($_POST){
  //verificamos que el token de la variable session sea igual al que se envio por el fomulario
  if (!isset($_SESSION['token']) || $_SESSION['token'] != $_POST['token']) {
      //inmediatamente redireccionamos a la URL donde se encuentra el contact form
      echo '<script language="javascript"> alert("Please, try again"); </script>';
      echo '<script language="javascript"> window.setTimeout( window.location.href="thank-you.php",2000); </script>';
  }else{  
    //destruimos la sesion
    @session_destroy();
    $honeypot = $_POST['firstname'];
    if (!empty($honeypot)) {
        //inmediatamente redireccionamos a la URL donde se encuentra el contact form
        echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
        echo '<script language="javascript"> window.setTimeout( window.location.href="thank-you.php",1000); </script>';
    }else{
      if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"]){    
        //declaramos las variables publicas en una clase
        class emailVariables
        {
            public $email;
            public $name;
            public $phone;
            public $subject;
            public $message;
        }
        //OBTENIENDO LAS VARIABLES
        //Elimina todos los caracteres menos letras, dígitos y !#$%&'*+-=?^_`{|}~@.[].
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $name = strip_tags($_POST['name']);
        //Elimina todos los caracteres excepto dígitos y los signos de suma y resta.
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
        //Esta función intenta devolver un string con todos los bytes NULL y las etiquetas HTML y PHP retirados de un str dado. 
        $subject = strip_tags($_POST['subject']);
        $message = strip_tags($_POST['message']);
        function validarDatos($email,$name,$phone,$subject,$message){
          $out = new emailVariables();
          //comprobando que el campo email no esta vacio
          if (!empty($email)) {
              //con preg_match solo permitimos email con letras, numeros, -, _ y .
            if (!preg_match('/^[A-Za-z0-9-_.]+@[A-Za-z0-9-.]+.[A-Za-z]{2,4}$/', $email)) { 
              //si el email no es valido, destruimos la variable
                unset($email);
              die('<script language="javascript"> window.parent.alert("Invalid email!."); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
              } else{ // si el campo email es valido
                $out->email = $email;
              }
          }else{ // si el campo email esta vacio
            die('<script language="javascript"> window.parent.alert("Empty email field!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
          }
          //Validando el campo name
          if (!empty($name)) { //comprobando si esta vacio
            if (preg_match("/^\p{L}([- ']\p{L}|\p{L})*$/u", $name)) {//comprobando caracteres no validos
                if (strlen($name) <= 60) {//comprobando longitud de caracters
                  $out->name = $name;
                }else{
                  die('<script language="javascript"> window.parent.alert("The name field contains more than 60 characters!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
                }
            }else{
                die('<script language="javascript"> window.parent.alert("The name field contains invalid characters!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
            }   
          }else{
            die('<script language="javascript"> window.parent.alert("Empty name field!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
          }
          //comprobando que el campo phone no esta vacio
          if (!empty($phone)) {
            $out->phone = $phone;
          }else{
            die('<script language="javascript"> window.parent.alert("Empty phone field!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
          }
          //comprobando que el campo subject no esta vacio
          if (!empty($subject)) {   
            if (strlen($subject) <= 100) {//comprobando longitud de caracters
              $out->subject = $subject;
            }else{
              die('<script language="javascript"> window.parent.alert("The subject field contains more than 100 characters!"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
            }
          }else{
            die("<script language='javascript'> window.parent.alert('Empty subject field!'); </script> <script language='javascript'> window.setTimeout( window.location.href='contact.php',2000); </script>");
          }
          //comprobando que el campo message no esta vacio
          if (!empty($message)) {
            $out->message = $message;
          }else{
            die('<script language="javascript"> window.parent.alert("Empty message field"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
          }
          return $out;
        }//END FUNCTION validarDatos
        //Validamos los datos y limpiamos las variables
        $variablesLimpias = validarDatos($email,$name,$phone,$subject,$message);
        //variables limpias
        $email = $variablesLimpias->email;
        $name = $variablesLimpias->name;
        $phone = $variablesLimpias->phone;
        $subject = $variablesLimpias->subject;
        $message = $variablesLimpias->message;
        //Enviando email
              $mymail = $companyEmail;
              $cc = "New Message ['$companyName']"; //asunto por defecto
              $cabeceras = "From: " . $email . "\r\n";
              $cabeceras .= "Reply-To: ". $email . "\r\n";
              $cabeceras .= "MIME-Version: 1.0\r\n";
              $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
              $FrOm .= 'X-MAILER: PHP'.phpversion();
              $BoDy .= '
                          <html>
                          <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
                              <head>
                                  <title>Message sent from your website \ </title>
                                  <style type="text/css">
                                  th, td{
                                     width: 25%;
                                     text-align: left;
                                     vertical-align: top;
                                     border: 1px solid #000;
                                     border-collapse: collapse;
                                     padding: 0.3em;
                                     caption-side: bottom;                                   
                                 }
                                 th{
                                    background: #eee;
                                 }
                                 caption {
                                     padding: 0.3em;
                                     color: #fff;
                                     background: #000;
                                  }
                                     </style>
                              </head>

                              <body>
                              <header>
                                <h2>-This e-mail was sent from a contact form on ('.$companyName.')</h2>
                              </header>
                              <div class="container">
                              <table rules="all" style="border: 1px solid #000;" cellpadding="10">
                                  <caption>Customer information</caption>                                
                                  <tr>
                                       <th><strong>Date:</strong></th>
                                       <td>'.date(DATE_RFC2822).'</td>
                                   </tr>';
                                      $BoDy .= '
                                   <tr>
                                      <th><strong>Email Address:</strong></th>
                                      <td>' . $email . '</td>
                                   </tr>
                                   <tr>
                                      <th><strong>Name:</strong></th>
                                      <td>' . $name . '</td>
                                   </tr> 
                                   <tr>
                                      <th><strong>Phone:</strong></th>
                                      <td>' . $phone . '</td>
                                   </tr> 
                                   <tr>
                                      <th><strong>Subject:</strong></th>
                                      <td>' . $subject . '</td>
                                   </tr> 
                                   <tr>
                                      <th><strong>Message:</strong></th>
                                      <td>' . $message . '</td>
                                   </tr>
                              </table>
                              </div>
                              </body>
                          </html>';
              $send = mail("$mymail", "$cc", "$BoDy", "$cabeceras");
              ///Redirección después de enviar el mensaje
              if($send){
          $to = $email;
              $subjectResp = "Thanks for Trusting $companyName";
              $txt = "Your message has received. You'll hear from us very soon. Thank you!";
              $headers = "From: $emailForThanks";
                mail($to,$subjectResp,$txt,$headers);
              echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
                echo '<script language="javascript"> window.setTimeout( window.location.href="thank-you.php",1000); </script>';
              }
      }else{
        die('<script language="javascript"> window.parent.alert("Captcha code not valid"); </script> <script language="javascript"> window.setTimeout( window.location.href="contact.php",2000); </script>');
      }//END ELSE CAPTCHA
    }//END ELSE HONEYPOT
  }//END ELSE TOKEN
}else{
  
}