<?php

include_once 'Ahorcado.class.php';

if (class_exists('ahorcado')):
 $ahorcado = new ahorcado;
  echo($ahorcado->juego('a'));
endif;
?>