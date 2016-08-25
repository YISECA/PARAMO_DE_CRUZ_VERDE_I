<?php
session_start();
?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf8">

<title>Comprobante Caminatas </title>
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


$sql="SELECT Cedula, Primer_Apellido, Segundo_Apellido, Primer_Nombre, Segundo_Nombre, Fecha_Nacimiento, year(curdate()) - year(Fecha_Nacimiento), Id_Genero, Eps, Celular, Correo_Electronico, T_Caminata FROM QUEBRADA_LA_VIEJA_2016_I where Id_Persona='$_REQUEST[id]'"; 


$res=mysql_query($sql,$conexio);
$resultado = mysql_fetch_array ($res);


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
                    <br>     
                         
                         						      
						  <h2><center>
						    <font color="#00ade6">.: COMPROBANTE DE INSCRIPCIÓN A LA CAMINATA Quebrada la Vieja Domingo 21 de Agosto 2016
                            </font>
                          </center></h2>
                   
                   
                          
						  <p align='justify'>                           
						  <br> 
								 <center><table width="600" border="1">
  <tr>
    <td width="269"><div align="left">IDENTIFICACIÓN</div></td>
    <td width="544"><?php echo $resultado['Cedula']; ?></td>
  </tr>
  <tr bgcolor="#D8D8D8">
    <td ><div align="left">NOMBRES</div></td>
    <td><?php echo $resultado['Primer_Apellido']; ?>&nbsp;<?php echo $resultado['Segundo_Apellido']; ?></td>
  </tr>
  <tr>
    <td><div align="left">APELLIDOS</div></td>
    <td><?php echo $resultado['Primer_Nombre'];?>&nbsp;<?php echo $resultado['Segundo_Nombre']; ?></td>
  </tr>
  <tr bgcolor="#D8D8D8">
    <td><div align="left">FECHA DE NACIMIENTO</div></td>
    <td><?php echo $resultado['Fecha_Nacimiento'];?> </td>
  </tr>
  <tr>
    <td><div align="left">EDAD</div></td>
    <td><?php echo $resultado[6]; ?></td>
  </tr>
  <tr bgcolor="#D8D8D8">
    <td><div align="left">GÉNERO</div></td>
    <td><?php echo $resultado['Id_Genero']; ?> </td>
  </tr>
  <tr>
    <td><div align="left">EPS</div></td>
    <td> <?php echo $resultado['Eps']; ?> </td>
  </tr>
  <tr bgcolor="#D8D8D8">
    <td><div align="left">CELULAR</div></td>
    <td> <?php echo $resultado['Celular']; ?> </td>
  </tr>
  <tr>
    <td><div align="left">CORREO ELECTRÓNICO</div></td>
    <td><?php echo $resultado['Correo_Electronico']; ?></td>
  </tr>
  <tr bgcolor="#D8D8D8">
    <td><div align="left">TIPO DE CAMINATA</div></td>
    <td><?php echo $resultado['T_Caminata'];?></td>
  </tr>
</table></center>

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
