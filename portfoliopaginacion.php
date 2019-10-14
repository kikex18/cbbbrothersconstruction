<?php 
function paginacionDePortafolio($urlImagenes){
  /*Cantidad de imagenes que hay en una carpeta ( min = full LOL)*/
  $total_imagenes = count(glob("$urlImagenes{*.jpg}",GLOB_BRACE));
  /*Maximo de imagenes que mostraremos por pagina*/
  $total_imagenes_mostrar = 12; // Este numero puede variar segun tus necesidades
  /*Cantidad de paginas*/
  $GLOBALS["numero_paginas"] = ceil($total_imagenes / $total_imagenes_mostrar);
  /*Pagina actual*/
  $GLOBALS["pagina_actual"] = isset($_GET['page']) ? $_GET['page']: '1';
  /*Calcular el numero de inicio de cada pagina*/
  //$paginacion_parametros =  ($GLOBALS["pagina_actual"]* $total_imagenes_mostrar) - $total_imagenes_mostrar;
  /*Verificar si la variable es negativa*/
  $verificar = $total_imagenes - ($GLOBALS["pagina_actual"]* $total_imagenes_mostrar);
  //El conteo del FOR va en decremento
  if ($GLOBALS["pagina_actual"]== 1) {
    $GLOBALS["inicio"] = 1; // Numero de inicio de cada pagina
    $GLOBALS["prev"] = $GLOBALS["numero_paginas"];
  }else{
    $GLOBALS["inicio"] = (($GLOBALS["pagina_actual"]-1) * $total_imagenes_mostrar) + 1; // Numero de inicio de cada pagina
    $GLOBALS["prev"] = $GLOBALS["pagina_actual"]- 1;
  }
  /*Verificar si la variable es negativa*/

  if ($verificar < 1 ) {
    $GLOBALS["final"] = $total_imagenes;//Numero final de cada pagina
    $GLOBALS["next"] = 1;
  }else{
    $GLOBALS["final"] = ($GLOBALS["pagina_actual"]* $total_imagenes_mostrar);//Numero final de cada pagina
    $GLOBALS["next"] = $GLOBALS["pagina_actual"]+ 1;
  }
}
?>