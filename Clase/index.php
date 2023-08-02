<?php
require_once("Persona.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Persona</title>
</head>
<body>
    <fieldset>
    <legal>Formulario Persona</legal>
    <form action="#" method="post">
    <p>Cedula:<input type="number" name="id"><p>
    <p>Nombre:<input type="text" name="nombre"><p>
    <P>Correo:<input type="correo" name="email"></p>
    <p>Deseo Recibir Boletin Informativo<input type="checkbox" name="boletin" value="1"></p>
    <p>Comentario</p>
     
    <textarea name="comentario" id="comentario" rows="4" cols="50" placeholder="Escribe un comentario"></textarea>
     
    <p>Sexo</p>
    <input type="radio" name="sexo" value="Masculino">M
    <input type="radio" name="sexo" value="Femenino">F







    
    <p><input type="submit" name="Enviar"></p>
    </form>
    <?php
    if($_POST){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $correo=$_POST['email'];
    $comentario=$_POST['comentario'];
    $sexo=$_POST['sexo'];
    if(isset($_POST['boletin']) && $_POST['boletin'] == "1") {
        $boletin = 1; // Checkbox seleccionado
    } else {
        $boletin = 0; // Checkbox no seleccionado
    }
    
    // Resto del código para procesar los demás datos del formulario
    
    // Ejemplo de cómo mostrar el valor del boletín
    echo "Valor del boletín: " . $boletin;

    $p1=new Persona($id,$nombre,$correo,$comentario,$sexo,$boletin);
    
    $persona =array($p1);
    
    foreach($persona as $personas){
    echo $personas->getId();
    echo "<br>";
    echo $personas->getNombre();
    echo "<br>";
    echo $personas->getCorreo();
    echo "<br>";
    echo $personas->getComentario();
    echo "<br>";
    echo $personas->getSexo();
    echo "<br>";
    echo $personas->getBoletin();
    }
    }
    ?>
    </fieldset>
</body>
</html>