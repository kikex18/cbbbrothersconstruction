<?php 
@session_start();
include('conexion.php');
// Invisible reCaptcha

//verificamos que el token de la variable session sea igual al que se envio por el fomulario
if (!isset($_SESSION['token']) || $_SESSION['token'] != $_POST['token']) {
    //inmediatamente redireccionamos a la URL donde se encuentra el contact form
    echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
    echo '<script language="javascript"> window.setTimeout( window.location.href="reviews.php",2000); </script>';
}else{  
  //destruimos la sesion
  @session_destroy();
  $honeypot = $_POST['firstname'];
  if (!empty($honeypot)) {
      echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
      echo '<script language="javascript"> window.setTimeout( window.location.href="reviews.php",1000); </script>';
  }else{
    if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"]){    
      if ($link->connect_error) {
            die("Connection failed: " . $link->connect_error);
        } 
        $nombre = mysqli_real_escape_string($link,isset($_POST['name']) ? $_POST['name']: ''); 
        $city = mysqli_real_escape_string($link,isset($_POST['city']) ? $_POST['city']: '');
        $star = mysqli_real_escape_string($link,isset($_POST['rating']) ? $_POST['rating']: ''); 
        $date = mysqli_real_escape_string($link,isset($_POST['date']) ? $_POST['date']: ''); 
        $project = mysqli_real_escape_string($link,isset($_POST['project']) ? $_POST['project']: '');
        $review = mysqli_real_escape_string($link,isset($_POST['review']) ? $_POST['review']: ''); 

        if ($star==0) {

          die('<script language="javascript"> window.parent.alert("Please select a Star"); </script> <script language="javascript"> window.setTimeout( window.location.href="reviews.php",2000); </script>');
        }else{
          $sql = "INSERT INTO `reviews` (name, city, project, rdate, review, start)VALUES ('$nombre', '$city', '$project', '$date', '$review', '$star')";
        }
        
        if ($link->query(strip_tags($sql)) === TRUE) {
          header("Location: reviews.php"); /* Redirect browser */
          /* Make sure that code below does not get executed when we redirect. */
          exit;
        } else {
          header("Location: reviews.php");
        }

        $link->close();
    }
    else{
      die('<script language="javascript"> window.parent.alert("Captcha code not valid"); </script> <script language="javascript"> window.setTimeout( window.location.href="reviews.php",2000); </script>');
    }
  }
}
?>
