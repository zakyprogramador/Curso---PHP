<?php 
if(!$registro_contacto["pais"])
{
    include("conexion.php");
}
$consulta= "SELECT * FROM pais ORDER BY pais";
$ejecutar_consulta = $conexion->query($consulta);

while($registro = $ejecutar_consulta->fetch_assoc())
{
    $nombre_pais = $registro["pais"];
    echo "<option value='".$registro["pais"]."'";
    if($nombre_pais==$registro_contacto["pais"])
    {
        echo " selected";
    }
    echo ">".$registro["pais"]."</option>";
}
?>