<?php

include("con_bd.php");

if(isset($_POST['register'])){
    //if (strlen($_POST['fecha']) >= 1 &&
   if(strlen($_POST['lugar']) >= 1 &&
    strlen($_POST['problema']) >= 1 &&
    strlen($_POST['riesgo']) >= 1 &&
    strlen($_POST['descripcion']) >= 1 ) {
    //strlen($_POST['file']) >= 1 ) {
   
        $lugar = trim($_POST['lugar']);
        $problema = trim($_POST['problema']);
        $riesgo = trim($_POST['riesgo']);
        $descripcion = trim($_POST['descripcion']);
       // $file = trim($_POST['file']);
    
       $file = addslashes(file_get_contents($_FILES['file']['tmp_name']));

    $consulta = "INSERT INTO reportesacoso(lugar, problema, riesgo, descripcion,file) VALUES ('$lugar','$problema','$riesgo','$descripcion','file')";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){
        include("upload.php");
        ?>
                <h3>Reporte Enviado</h3>
            
                <?php
    } else {
        ?>
        <h3>Error al enviar</h3>
        <?php
    }
}else{
    ?>
    <h3>Falta completar los campos</h3>
<?php
}
} ?>
