<?php 
header("Content-type: application/vnd.ms-excel" ) ; 
header("Content-Disposition: attachment; filename=Lista_Quebrada_La_Vieja_21_Agosto_2016.xls" ) ; 
//en la sigte linea colocar entre comillas el nombre del servidor mysql (generalmente, localhost) 
$servidor="localhost"; 
//en la sigte linea colocar entre comillas el nombre de usuario 
$user="idrdgov_Agenda"; 
//en la sigte linea colocar entre comillas la contraseña 
$pass="Agenda2013"; 
//en la sigte linea colocar entre comillas e nombre de la base de datos 
$db="idrdgov_Caminatas"; 
//en la sigte linea colocar entre comillas e nombre de la tabla

$tabla="QUEBRADA_LA_VIEJA_2016_I"; 
mysql_connect($servidor,$user,$pass) ; 
mysql_select_db($db) ; 
$qry=mysql_query("SELECT Cedula, Primer_Apellido, Segundo_Apellido, Primer_Nombre, Segundo_Nombre, Fecha_Nacimiento, year(curdate()) - year(Fecha_Nacimiento), Id_Genero, Eps, Celular, Correo_Electronico, T_Caminata FROM QUEBRADA_LA_VIEJA_2016_I" ) ; 
$campos = mysql_num_fields($qry) ; 
$i=0; 
echo "<table><tr>"; 
while($i<$campos){ 
echo "<td>". mysql_field_name ($qry, $i) ; 
echo "</td>"; 
$i++; 
} 
echo "</tr>"; 
while($row=mysql_fetch_array($qry)){ 
echo "<tr>"; 
for($j=0; $j<$campos; $j++) { 
echo "<td>".$row[$j]."</td>"; 
} 
echo "</tr>"; 
} 
echo "</table>"; 
?> 
