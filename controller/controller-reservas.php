<?php
define("Fich", "registro-reservas.html");
      
    $mensaje="<tr>".PHP_EOL;
    if (isset($_POST['nombre'])&&!empty($_POST['nombre'])) $nombre = $nombre= limpiarCodigoHTML($_POST['nombre']).PHP_EOL;
    if (isset($_POST['fecha'])&&!empty($_POST['fecha'])) $fecha= limpiarCodigoHTML($_POST['fecha']).PHP_EOL;
    if (isset($_POST['numPersona'])&&!empty($_POST['numPersona'])) $numPersona= limpiarCodigoHTML($_POST['numPersona']).PHP_EOL;
    if (isset($_POST['mail'])&&!empty($_POST['mail'])) $mail= limpiarCodigoHTML($_POST['mail']).PHP_EOL;
    if (isset($_POST['telf'])&&!empty($_POST['telf'])) $telf= limpiarCodigoHTML($_POST['telf']).PHP_EOL;
    if (isset($_POST['observaciones'])) $observaciones= limpiarCodigoHTML($_POST['observaciones']).PHP_EOL;

    
    $hoy ="<td>". date("d-m-a  h:m:s")."</td>".PHP_EOL;   
    $mensaje.=$hoy.$nombre.$fecha.$numPersona.$mail.$telf.$observaciones."</tr>".PHP_EOL;
    escribirFichero($mensaje);
    

function limpiarCodigoHTML($valor){
    return "<td>".strip_tags(trim($valor))."</td>";
}
function escribirFichero($mensaje){
    $file=fopen(Fich,'a') or die("Error al abrir el archivo");
    fwrite($file,$mensaje);
    fclose($file);
}
function  mostrarContenido(){
    $contenidofichero = file_get_contents(Fich);
    echo $contenidofichero;
}


?>