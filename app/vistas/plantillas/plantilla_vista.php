<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo $url_sitio;?>public/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="<?php echo $url_sitio . "public/icons/pan.png";?>">
    <title>Pan Doña Elsita</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row bg-warning text-center">
        <div class="col-12">
          <a href="https://api.whatsapp.com/send?phone=5049570-4017"><img src="<?php echo $url_sitio. "public/icons/whatsapp.png";?>" width="18.5" height"18.5" class="my-2 ml-3"><small class="ml-2 font-weight-bold" style="color: #000000">9570-4017</small></a>
          <img src="<?php echo $url_sitio. "public/icons/telefono.png";?>" width="16" height"16" class="my-2 ml-3"><small class="ml-2 font-weight-bold" style="color: #oooooo">Telef: 2662-22-19</small>
          <img src="<?php echo $url_sitio. "public/icons/gmail.png";?>" width="16" height"16" class="my-2 ml-3"><small class="ml-2 font-weight-bold" style="color: #oooooo">panitab@hotmail.es</small>
          <img src="<?php echo $url_sitio. "public/icons/gmail.png";?>" width="16" height"16" class="my-2 ml-3"><small class="ml-2 font-weight-bold" style="color: #oooooo">panitabora86@gmail.com</small>
        </div>
      </div>



      <div class="row shadow-sm">
        <div class="col-12 px-0">
          <?php include "app/vistas/plantillas/modulos/menu.php";?>
        </div>
      </div>

      <div class="row">
        <div class="col-12 px-0">
           <?php 
              $rc = new RutasControlador();

              if (isset($_GET["vista"])) {
                include $rc -> ProcesarRuta($_GET["vista"]);
              }else{
                include $rc -> ProcesarRuta("inicio");
              }
            ?>

        </div>
      </div>

      <div class="row bg-warning">
        <div class="col-12 text-dark text-center">
          <h4><smal class="font-weight-bold font-italic my-2">¡Es Pan, es Sabor, es Calidad!</small></h4>
          <h6>Elaborado por Panificadora Tabora | Santa Rosa de Copan</h6>
        </div>
      </div>
    </div>
        

    
    <script src="<?php echo $url_sitio;?>public/js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?php echo $url_sitio;?>public/js/popper.min.js"></script>
    <script src="<?php echo $url_sitio;?>public/js/bootstrap.min.js"></script>
  </body>
</html>