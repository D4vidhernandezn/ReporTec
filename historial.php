<?php
include ("con_bd.php");
$sql="SELECT * FROM `reportes_acoso` ";
$res=mysqli_query($conex,$sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTldTmk5CbXU2U5AOUX7KWosLVed3CTo8vy3A&usqp=CAU" type="image/x-icon">

    <!-- =============================== = Bootstrap = ================================ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />  
     
    <!-- =============================== = Font Awesome = ================================ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
    <title>Historial</title>
</head>
<body>
</body>
<!--Inicio de header-->
<div id="bannerSIE">
    <img src="img/bannerSIE.jpg" alt="Banner sie">
</div>
<header id="header">
    <div id="headline">
        <h1>Reportec</h1>
    </div>
    <div class="titulo"><h4>Historial</h4></div>
   <!--<div class="salir">Salir</div> --> 
</header>
<!--Fin del Header-->


<!--Inico Caja de opciones -->
<div id="historial">
<?php
while ($data=mysqli_fetch_array($res))
{
echo $data['lugar'];
echo $data['problema'];
echo $data['riesgo'];
echo '<img src="'.$data['ruta'].'" width="150px" height="150px">';
echo '<br>';
}
?><br>
</div>
<!--Fin Caja de opciones -->
</body>
</html>