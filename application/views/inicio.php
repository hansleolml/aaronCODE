<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Proyecto Aaron</title>
  <link href ="<?=base_url();?>/plantilla/css/slide.css" rel ="stylesheet" type ="text/css">
  <link href ="<?=base_url();?>/plantilla/css/inicio.css" rel ="stylesheet" type ="text/css">
</head>
<body bgcolor="#ED1A24">
  <center>
  <table class="peru">
      <tr><td><img src="<?=base_url();?>/plantilla/imagen/logo1.jpg">
          <td><img src="<?=base_url();?>/plantilla/imagen/logo.png">
  </table>
  <div class="main">
        <div class="slides">
            <img src="<?=base_url();?>/plantilla/fondos/fondo1.jpg" alt="">
            <img src="<?=base_url();?>/plantilla/fondos/fondo2.jpg" alt="">
            <img src="<?=base_url();?>/plantilla/fondos/fondo3.jpg" alt="">
            <img src="<?=base_url();?>/plantilla/fondos/fondo4.jpg" alt="">
            <img src="<?=base_url();?>/plantilla/fondos/fondo5.jpg" alt="">
            <img src="<?=base_url();?>/plantilla/fondos/fondo6.jpg" alt="">
        </div>
    </div>
  <script src="<?=base_url();?>/plantilla/js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>/plantilla/js/jquery.slides.js" type="text/javascript"></script>
  <script>
        $(function(){
        $(".slides").slidesjs({
        play: {
        active: true,
          // [boolean] Generate the play and stop buttons.
          // You cannot use your own buttons. Sorry.
        effect: "fade",
          // [string] Can be either "slide" or "fade".
        interval: 2000,
          // [number] Time spent on each slide in milliseconds.
        auto: true,
          // [boolean] Start playing the slideshow on load.
        swap: true,
          // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
          // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
          // [number] restart delay on inactive slideshow
        }
        });
        });
  </script>

</body>
</html>
