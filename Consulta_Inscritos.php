<?php
session_start();
?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf8">

<title>Consulta Caminatas </title>
<link href="estilo.css" rel="stylesheet" type="text/css">

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


		    <?php
    
	include("conectar_bd.php"); 
   conectar_bd();



$query=mysql_query("SELECT Cedula, Primer_Apellido, Segundo_Apellido, Primer_Nombre, Segundo_Nombre, Fecha_Nacimiento, year(curdate()) - year(Fecha_Nacimiento), Id_Genero, Eps, Celular, Correo_Electronico, T_Caminata FROM QUEBRADA_LA_VIEJA_2016_I",$conexio);
$result=mysql_num_rows($query);


$consulta=mysql_query("SELECT count(*) FROM `QUEBRADA_LA_VIEJA_2016_I`",$conexio);
$re4=mysql_fetch_row($consulta);
$cont=$re4[0];

?>


</head>
<body>

<table width="102%" border="0">
  <tr align="center">
    <td>&nbsp;</td>
    <td align="center">
         
      <table id="templatemo_wrapper2" border="0">
         <tr>
            <td>
             <center>
                 <div id="templatemo_cabezera_1">
&nbsp;&nbsp;                 </div>              
                 <div id="templatemo_cabezera_2">      </div>              
                 	
            
                                  
                       <div id="slider">
                       
                          <a href="http://www.idrd.gov.co"><img src="images/quebrada.jpg" alt="Agenda" width="961" height="308" title="IDRD." /></a>               
						
                          </div>  

</center>  

               <div id="#templatemo_header_1_2">
                 <div id="templatemo_nuevo3">
                    <br>       <br>    <br>    
                         
                         						      
						  <h2><center>
						    <font color="#00ade6">.: Consulta Inscritos Caminata Quebrada la Vieja Domingo 21 de Agosto 2016
                            </font>
                          </center></h2>
                   
                   
                          
						  <p align='justify'>                           
						  <br>
						  <h3><font color="#00ade6"> Total Inscritos: </font><?php echo "$cont";?></h3>
						  <table width="1550" border="1">

						    <tr bgcolor="#00ade6">
						    <td width="18" height="24" bgcolor="#00ade6"><div align="center">No</div></td>
                                                      <td width="106" height="24" bgcolor="#00ade6"><div align="center"># Identificación</div></td>
						      <td width="100" bgcolor="#00ade6"><div align="center">Apellidos</div></td>
						      <td width="100" bgcolor="#00ade6"><div align="center">Nombres</div></td>
						      <td width="83" bgcolor="#00ade6"><div align="center">Fecha Nacimiento</div></td>
						      <td width="70" bgcolor="#00ade6"><div align="center">Edad</div></td>
						      <td width="52" bgcolor="#00ade6"><div align="center">Género</div></td>
						      <td width="76" bgcolor="#00ade6"><div align="center">Eps</div></td>
						      <td width="82" bgcolor="#00ade6"><div align="center">Celular</div></td>
						      <td width="75" bgcolor="#00ade6"><div align="center">Correo Electrónico</div></td>
						      <td width="150" height="24" bgcolor="#00ade6"><div align="center">Tipo de Caminata </div></td>
						      
						    

                          
					        </tr>
					        
		        
					        
						      <?php  $i=1;
						      
						      while($fila=mysql_fetch_array($query)) {	      
						      
						    
						      
						       ?>
						      
  <tr>
        <td> <center><?php echo $i++; ?> </center></td>
        <td> <center><?php echo $fila['Cedula']; ?> </center></td>
	<td> <center><?php echo $fila['Primer_Apellido']; ?>&nbsp;<?php echo $fila['Segundo_Apellido']; ?> </center></td>
	<td> <center><?php echo $fila['Primer_Nombre'];?>&nbsp;<?php echo $fila['Segundo_Nombre']; ?> </center></td>
	<td> <center><?php echo $fila['Fecha_Nacimiento'];?> </center></td>
        <td> <center><?php echo $fila[6]; ?></center> </td>
        <td> <center><?php echo $fila['Id_Genero']; ?> </center></td>
        <td> <center><?php echo $fila['Eps']; ?> </center></td>
        <td> <center><?php echo $fila['Celular']; ?> </center></td>
	<td> <center><?php echo $fila['Correo_Electronico']; ?></center></td>
	<td> <center><?php echo $fila['T_Caminata'];?></center></td>
		
  </tr>
  <?php } ?>

						    </table>
						    <a href="<?php  echo "DescargarLista.php";?>">
  <center><FONT color="#009966" face="Georgia, Times New Roman, Times, serif" size="5"> <strong>Exportar a Excel</strong> </FONT> </center>  </a>      
						  <br>
						    <h3 align="center">&nbsp;</h3>
                          
                          
                           <br>
                           <BR>
                        
                        
                       
                       
                 </div>
              </div>                 
<center>
</center>
</div>
                               


                 
           </td>
         </tr>         
      </table>         
         
         
    </td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
