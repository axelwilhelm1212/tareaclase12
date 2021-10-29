<?php
function guardarArchivo() {
    if($_FILES["archivo"]["error"]=== UPLOAD_ERR_OK){
        $nombreAleatorio = date("Ymdhmsi"); //2021010420453710
        //Es importante generar un nombre aleatorio para impedir que dos personas
        //carguen archivos con nombres identicos
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];//obtiene el nombre
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);//Esto halla la extension del archivo
        move_uploaded_file($archivo_tmp, "files/$nombreAleatorio.$extension");
    }
}
guardarArchivo();

?>