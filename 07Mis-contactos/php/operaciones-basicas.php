<?php
$conexion = mysqli_connect("localhost","root","") or die("No se pudo conectar con el servidor de BD");
echo "Estoy conectado a MySQL <br>";

mysqli_select_db($conexion,"mis_contactos") or die("No se pudo seleccionar la BD 'mis_contactos'");
echo "BD seleccionada: <b>mis_contactos</b> <br>";

echo "<h1>Las cuatro operaciones basicas a una BD</h1>";
echo "<h2>1)INSERCION DE DATOS</h2>";

//INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_campos)
$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES('andresjr195@hotmail.com','Andres Restrepo','M','1992-04-12','573133990387','Colombia','and.png')";

$ejecutar_consulta = mysqli_query($conexion,$consulta);
echo "Se han insertado los datos <br>";

echo "<h2>ELIMINACION DE DATOS</h2>";

// DELETE FROM nombre_tabla WHERE campo = valor
$consulta = "DELETE FROM contactos WHERE email = 'andresjr195@hotmail.com'";

// $ejecutar_consulta = mysqli_query($conexion,$consulta);
echo "Datos eliminados <br>";

echo "<h2>MODIFICAR DATOS</h2>";
//UPDATE nombre_tabla SET nombre_campo = valor_campo, otro_campo = otro_valor WHERE campo = valor
$consulta = "UPDATE contactos SET email = 'transplants@hotmail.com', nombre = 'Zak Up', imagen = 'andres.png' WHERE email = 'andresjr195@hotmail.com'";

$ejecutar_consulta = mysqli_query($conexion,$consulta);
echo "Se han actualizado los datos <br>";

echo "<h2>CONSULTA DE DATOS</h2>";
//SELECT * FROM nombre_tabla WHERE campo = valor
$consulta = "SELECT * FROM contactos WHERE email = 'transplants@hotmail.com'";

$ejecutar_consulta = mysqli_query($conexion,$consulta);

while($registro=mysqli_fetch_array($ejecutar_consulta)){
    echo $registro["email"]."---";
    echo $registro["nombre"]."---";
    echo $registro["sexo"]."---";
    echo $registro["nacimiento"]."---";
    echo $registro["telefono"]."---";
    echo $registro["pais"]."---";
    echo $registro["imagen"]."---";
}

?>