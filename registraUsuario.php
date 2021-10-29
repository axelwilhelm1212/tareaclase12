<?php
//Definicion
function regUsuario($nom , $em, $pas, $tel, $dni ){
    $contenido = file_get_contents("datos.txt");
    $contenido .= $nom;
    $contenido .= " ";
    $contenido .= $em;
    $contenido .= " ";
    $contenido .=  md5($pas);
    $contenido .= "\n";
    $contenido .= $tel;
    $contenido .= " ";
    $contenido .= $dni;
    $contenido .= " ";
    
    file_put_contents("datos.txt", $contenido);
}

regUsuario($_POST["nombreUs"], $_POST["emailUs"], $_POST["passUs"],$_POST["telefonoUs"], $_POST["dniUs"]) ;
echo "Datos enviados correctamente. <br>";
echo "Usuario " .$_POST["nombreUs"]. " Registrado con éxito<br>";
echo "<a href=\"registro.php\">Registrar otro</a>";
?>