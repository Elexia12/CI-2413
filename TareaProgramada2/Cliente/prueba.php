<?php

include_once 'Ahorcado.class.php';

if (class_exists('ahorcado')):
 $ahorcado = new ahorcado;
  echo($ahorcado->juego('a'));
  print('<br>');
  echo($ahorcado->juego('m'));
  print('<br>');
  echo($ahorcado->juego('p'));
  print('<br>');
  echo($ahorcado->juego('o'));
endif;
?>