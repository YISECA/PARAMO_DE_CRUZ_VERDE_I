<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

//print_r($_POST);

if (


isset($_POST['Identificacion'])&&
isset($_POST['Tipo_Documento']) && 
isset($_POST['P_Apellido'])&&
isset($_POST['P_Nombre'])


)
{

$Pais= '41';
$Ciudad= 'BOGOTA D.C'; 
$Etnia= '4';

$Caminata= 'Caminata Quebrada la Vieja el día 21 de Agosto de 2016';
$Fecha_Registro=date("Y-m-d H:i:s");

include("conectar_bd.php"); 
   conectar_bd();
   


$consulta=mysql_query("SELECT count(*) FROM `QUEBRADA_LA_VIEJA_2016_I`",$conexio);
$re4=mysql_fetch_row($consulta);
$cont=$re4[0];


   /*$sqlusuario= "SELECT count(*) FROM `QUEBRADA_LA_VIEJA_2016_I`";
		$resultado = mysql_query($sqlusuario,$conexio);
		$fila= mysql_fetch_row($resultado);
		
		echo $cont;*/
		if($cont>=40){
				?> 
				<script language="JavaScript" type="text/javascript">
				alert("LO SENTIMOS cupos llenos para la caminata Quebrada la Vieja. Total de Cupos (<?php echo $cont; ?>)");
				</script>         
				<?php
				echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
			
		}
		else{


mysql_query("INSERT INTO QUEBRADA_LA_VIEJA_2016_I(Cedula,Id_TipoDocumento,Primer_Apellido,Segundo_Apellido,Primer_Nombre,Segundo_Nombre,Fecha_Nacimiento,Id_Pais,Nombre_Ciudad,Id_Genero,Id_Etnia,Eps,Celular,Correo_Electronico,T_Caminata,Fecha_Registro)  VALUES ('$_POST[Identificacion]','$_POST[Tipo_Documento]','$_POST[P_Apellido]','$_POST[S_Apellido]','$_POST[P_Nombre]','$_POST[S_Nombre]','$_POST[Fecha_Naci]','$Pais','$Ciudad','$_POST[Genero]','$Etnia','$_POST[Eps]','$_POST[Celular]','$_POST[Correo]','$Caminata','$Fecha_Registro')", $conexio); 



	$sedes="SELECT `Id_Persona` FROM `QUEBRADA_LA_VIEJA_2016_I` WHERE Fecha_Registro='$Fecha_Registro'; ";
	$res_Sede=mysql_query($sedes,$conexio);
	$resultado = mysql_fetch_array ($res_Sede);
		
	$Id_Sesion= $resultado["Id_Persona"];


try{
		
								
				?>	
					<script language="JavaScript" type="text/javascript">
					alert("USUARIO REGISTRADO CORRECTAMENTE PARA LA CAMINATA Quebrada la Vieja el día 21 de Agosto de 2016.");
					</script>  
					
			<?php
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=comprobante.php?id=$Id_Sesion\">";
			}
			
			catch(Exception $e){
			?>	
					<script language="JavaScript" type="text/javascript">
					alert("ERROR AL INTENTAR LA SUSCRIPCIÓN A LA CAMINATA Quebrada la Vieja POR FAVOR INTENTE MAS TARDE.");
					</script>  
		
		
			<?php
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
		
		}
		}

}

?>
