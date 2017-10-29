<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <frameset rows="9%,*" bordercolor="#fff">
      <frame src="<?=$this->load->view('navegacion.php')?>">
      <frame src="<?=$this->load->view('inicio.php')?>">
    </frameset>
  </body>
</html>
