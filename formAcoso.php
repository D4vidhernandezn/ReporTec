<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTldTmk5CbXU2U5AOUX7KWosLVed3CTo8vy3A&usqp=CAU" type="image/x-icon"/>

    <!-- =============================== = Bootstrap = ================================ -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    
  <link rel="stylesheet" href="css/styles.css">

    <!-- =============================== = Font Awesome = ================================ -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />

    <title>Reportar Acoso</title>
  </head>
  <body>
    <!--Inicio de header-->
    <div id="bannerSIE">
      <img src="img/bannerSIE.jpg" alt="Banner sie"/>
    </div>
    <header id="header">
      <div id="headline">
        <h1> Reportec</h1>
      </div>
      <div class="titulo"><h4>Reportar Acoso</h4></div>
      <!--<div class="salir">Salir</div> -->
    </header>
    <!--Fin del Header-->

    <!--Inicio del Formulario-->

    <div id="formulario">
      <!--Fecha-->
      <div id="date" name="fecha" class="align-middle text-center font-weight-bold">
        <script src="js/date.js" ></script>
      </div>

      <form action="" method="POST" enctype="multipart/form-data">
        <label for="" class="align-middle text-center font-weight-bold lugar">Lugar:</label>
        <input type="text" name="lugar" id="" class="inputLugar" required />

        <div id="problem">
        <label for="" class="align-middle text-center font-weight-bold problema">Problema:</label>
        <input type="text" name="problema" id="" class="inputProblem" required />
        </div>

        <div id="seleccionar"> 
        <label for="" class="align-middle text-center font-weight-bold riesgo">Nivel de riesgo:</label>
        <select name="riesgo" id="" class="nivelOption">
          <option value="Tolerable">Tolerable</option>
          <option value="Moderado">Moderado</option>
          <option value="Emergencia">Emergencia</option>
        </select></div>
        <br/>

        <label class="align-middle text-center font-weight-bold titleDescrip" for="">Descripción:</label><br/>
        <textarea name="descripcion" id="" cols="30" rows="10"required ></textarea>
  
        <p id="addFoto">Foto <input type="file" name="file" id="" value="foto" /></p>
        <p><input type="submit" name="register" value="Enviar" id="send" class="btn" /></p>
     </form>  
     <?php 
     include("registrar.php");
     ?>
      </div>
    <!--Fin del Formulario-->
  </body>
</html>
