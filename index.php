<?php
session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Caminatas Quebrada la Vieja </title>
<link href="estilo.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}


</script>

<script>
  $(function() {
    $( "#Fecha_Naci" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat:'yy-mm-dd'
    });
  });
  </script>


<script language="javascript" type="text/javascript">



    //*** Este Codigo permite Validar que sea un campo Numerico
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
    //*** Fin del Codigo para Validar que sea un campo Numerico

  function validar()
	{
		//alert(document.form.nom.value);
		var f=document.form;
		
				//*******************************************************
		if (f.Identificacion.value == 0)
		{ 
		alert("Por favor ingresé el Número de identidad."); 
			f.Identificacion.value="";
			f.Identificacion.focus();
			return false;
		}	
		
		
			//*******************************************************
		if (f.Tipo_Documento.value==0)
		{
			alert("Por favor indique el Tipo de Identidad.");
			f.Tipo_Documento.focus();
			return false;
		}
		
			//*******************************************************
		if (f.P_Apellido.value == 0)
		{ 
			alert("Por favor ingresé el Primer Apellido."); 
			f.P_Apellido.value="";
			f.P_Apellido.focus();
			return false;
		}	

				//*******************************************************
		if (f.P_Nombre.value == 0)
		{ 
			alert("Por favor  ingresé el Primer Nombre."); 
			f.P_Nombre.value="";
			f.P_Nombre.focus();
			return false;
		}	
		
			//*******************************************************
		if (f.Fecha_Naci.value == 0)
		{ 
			alert("Por favor ingresé la fecha de Nacimiento."); 
			f.Fecha_Naci.value="";
			f.Fecha_Naci.focus();
			return false;
		}	
		
		//*******************************************************
		if (f.Genero.value==0)
		{
			alert("Por favor indique el Genero.");
			f.Genero.focus();
			return false;
		}

		//*******************************************************
		if (f.Correo.value == 0)
		{
			alert("Por favor ingresé el Correo Electronico.");
			f.Correo.value="";
			f.Correo.focus();
			return false;
		}
		
						//*******************************************************
		if (f.Celular.value == 0)
		{
			alert("Por favor ingresé el Número Celular.");
			f.Celular.value="";
			f.Celular.focus();
			return false;
		}
		
			//*******************************************************
		if (f.Eps.value == 0)
		{
			alert("Por favor ingresé la Eps.");
			f.Eps.value="";
			f.Eps.focus();
			return false;
		}
		
		
		
		
		
		//alert("todo ok");
		document.form.submit();
	}
	
	
//*******************************************************	

</script>


<script language="javascript" type="text/javascript">

function isCheck() { 
if (document.getElementById( 'tyc' ).checked == true) { 
document.getElementById( 'boton' ).disabled = false; 
} else { 
document.getElementById( 'boton' ).disabled = true; 
} 
} 
</script>




<link href="estilo.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="estilos.css" type="text/css" />

<style type="text/css">
a:link {
	text-decoration: none;
	color: #000;
}
a:visited {
	text-decoration: none;
	color: #900;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
#templatemo_wrapper tr td #templatemo_header_1 #templatemo_header_3 #templatemo_header_3_info a {
	color: #F00;
}
#templatemo_wrapper tr td #templatemo_header_1 #templatemo_header_3 #templatemo_header_3_info p {
	color: #000;
}
.TEXTO {
	font-size: 14px;
}
</style>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<script src="js/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" language="javascript" src="js/calendar.js"></script>
<script type="text/javascript" language="javascript" src="js/calendar-es.js"></script>
<script type="text/javascript" language="javascript" src="js/calendar-setup.js"></script>

</head>
<body>

<table width="102%" border="0">
  <tr align="center">
    <td>&nbsp;</td>
    <td align="center">
         
      <table id="templatemo_wrapper" border="0">
         <tr>
            <td>
                 <div id="templatemo_cabezera_1">
&nbsp;&nbsp;                 </div>              
                 <div id="templatemo_cabezera_2">      </div>              
                 	
            
                                   
                       <div id="slider">
                       
                          <a href="http://www.idrd.gov.co"><img src="images/quebrada.jpg" alt="Agenda" width="961" height="308" title="IDRD." /></a>               
						
                          </div>  



               <div id="templatemo_header_1">
                 <div id="templatemo_header_3">
                    <br>       
                          <div id="templatemo_header_3_start"> </div>
                          <div id="templatemo_header_3_info">
						      
						  <h2 align='center'><font color="#008000">.: PARQUE NACIONAL -  QUEBRADA LA VIEJA  Domingo 21 de Agosto 2016.</font></h2>

                      
                                                   
						 <center><table width="850">
						
						 
						    <tr>
						      <td>&nbsp;</td>
						      <td> <p align="justify">
						      <strong>&nbsp;&nbsp;<font color="#00ade6">Ubicación </font></strong> <br>
El sendero se encuentra ubicada entre  las localidades   de Santa fe y Chapinero , atravesando sectores de bosque nativo y páramo, 
y sitios como claro de luna, el valle de las moras, miradores pico del águila. <br><br>

<strong>&nbsp;&nbsp;<font color="#00ade6">Descripción del recorrido  </font></strong> <br>
El recorrido da inicio en el reloj del parque nacional, donde se realizara un calentamiento de aproximadamente 20 minutos, 
el guía de caminatas del IDRD dará las recomendaciones de la actividad y se iniciará con la caminata con un desplazamiento 
hasta la parte alta y llegar a la avenida circunvalar e ingresar a los predios del acueducto, se continua el sendero hasta 
el valle de las moras continuando por este sendero hacia claro de luna y de allí bajar por la quebrada  la  Vieja para finalizar 
el recorrido en la carrera 7a con calle 72.<br>
Durante el recorrido se visitaran los siguientes atractivos:<br>
<strong>* Claro de luna<br>
* Valle de las moras <br>
* Miradores <br>
* Ecosistema de niebla y sub- páramo<br>
</strong></p><br>	</td>
						      </tr>
                          
					        <tr>
			                  <td height="20">&nbsp;</td>
			                  <td>  <font color="#00ade6"><strong>Recomendaciones</strong> </font>
			             
			                  <table width="850">
                            <tr>
			                  <td width="25" height="20"><strong>1.</strong></td>
			                  <td width="813">Llevar ropa cómoda.</td>
		                    <tr>
			                  <td height="20"><strong>2.</strong></td>
			                  <td> Llevar bloqueador solar.</td>
		                    <tr>
			                  <td height="20"><strong>3.</strong></td>
			                  <td>Hidratación y refrigerio.</td>
		                    <tr>
			                  <td height="20"><strong>4.</strong></td>
			                  <td>Calzado cómodo</td>
		                    <tr>
			                  <td height="20"><strong>5.</strong></td>
			                  <td>Llevar carné de la eps </td>
		                    <tr>
			                  <td height="20"><strong>6.</strong></td>
			                  <td><font align="justify">Medicamentos personales .</font></td>
		                    <tr>
			                  <td height="20"><strong>7.</strong></td>
			                  <td><font align="justify">No llevar mascotas. </font></td>
		                    <tr>
		                      <td height="21"><strong>8.</strong></td>
		                      <td><font align="justify">Caminata apta para mayores de 12 años. </font></td>
	                        <tr>
		                      <td height="21"><strong>9.</strong></td>
		                      <td><font align="justify">Abstenerse de participar mujeres en estado de embarazo, personas que tengan problemas cardiacos, asma, rodillas y que sufran de vértigo.</font></td>
	                       
                              
				            </table>    <br>
                               
                     <table width="800" border="0">
                      <tr>
    <td colspan="2"> <font color="#00ade6"><strong>Ficha Técnica de Páramo</strong> </font></td>
    </tr>
   <!--<tr>
    <td width="23%"><strong>Barrio:</strong></td>
    <td width="77%">Tihuaque</td>
  </tr>-->
   <tr>
    <td width="23%"><strong>Altitud:</strong></td>
    <td width="77%">3.100 m.s.n.m</td>
  </tr>
   <tr>
    <td width="23%"><strong>Temperatura:</strong></td>
    <td width="77%">12°</td>
  </tr>
  <tr>
    <td width="23%"><strong>Nivel:</strong></td>
    <td width="77%">Medio </td>
  </tr>
  <tr>
    <td width="23%"> <font color="#00ade6"><strong>Punto de Encuentro </strong> </font></td>
    <td width="77%">Reloj del parque Nacional</td>
  </tr>
  <tr>
    <td height="37"><strong>Fecha:</strong></td>
    <td> Domingo 21 de Agosto 2016  </td>
  </tr>
  <tr>
    <td height="36"><strong>Hora de encuentro: </strong> </td>
    <td>8:00 a.m. </td>
  </tr>
  
  <tr>
    <td height="30"><strong>Cupo Máximo:</strong></td>
    <td>40 Personas</td>
  </tr>
  
  <tr>
    <td height="33"><strong>Rango de Edad:</strong></td>
    <td>13 A 60 años</td>
  </tr>
  <!--<tr>
    <td height="33"><strong>RUTA:</strong></td>
    <td><div align="justify"> <strong>* SITP ruta 256 Ricuarte-Tiuaque</strong>, bajarse en la última parada <br>
http://www.sitp.gov.co/Publicaciones/servicio_urbano/ruta_256_ricaurte_tihuaque.<br> <strong>* Alimentador Tihuaque</strong> el cual se coge en el portal el 20 de julio, bajarse en la última parada<br> http://www.transmilenio.gov.co/sites/default/files/servicio_alimetador_13-9_tihuaque.pdf </div></td>

  </tr>-->
</table>    
                 </center>             
                              
                              </td>
			               
		                    </table>
						<br> 
                          
						    <h3 align="center"><font color="#00ade6">FORMULARIO DE INSCRIPCIÓN</font></h3>
                          
                          
                          
                           
                           <form name="form" method="post" action="IngresarCaminata.php">
                            <center>                      
                          <table width="665" border="0"  >
						    <tr>
						      <td>&nbsp;</td>
						      <td>Número de Identidad:</td>
						      <td colspan="2"><input type="text" name="Identificacion" id="Identificacion" maxlength="30" autocomplete="off" style="width:120px" onKeyUp="return ValNumero(this);" >
					          <font color="#FF0000" >*</font></td>
						      <td height="35">Tipo Documento:</td>
						      <td width="158" >
						        <select name="Tipo_Documento" id="Tipo_Documento" style="width:120px" >
				<option value="0">Seleccionar</option>
                                <option value="1">Cédula de Ciudadanía</option>
                                <option value="2">Tarjeta de Identidad</option>
                                <option value="3">Registro Civil</option>
                                <option value="4">Cédula de Extranjería</option>
                                <option value="5">Documento Nacional de Identidad</option>
                                <option value="0">Pasaporte</option>
                               
                                
				              </select>
					          <font color="#FF0000">*</font></td>
					        </tr>
						    <tr>
						      <td width="1">&nbsp;</td>
						      <td width="175">Primer Apellido:</td>
						      <td colspan="2"><input type="text" name="P_Apellido" id="P_Apellido" maxlength="30" autocomplete="off" style="width:120px">
					          <font color="#FF0000">*</font></td>
						      <td width="141" height="35">Segundo Apellido:</td>
						      <td >
						        <label for="Nombre"></label>
						        <input type="text" name="S_Apellido" id="S_Apellido" maxlength="30" autocomplete="off" style="width:120px"></td>
					        </tr>
						    <tr>
						      <td>&nbsp;</td>
						      <td>Primer Nombre:</td>
						      <td colspan="2"><input type="text" name="P_Nombre" id="P_Nombre" maxlength="30" autocomplete="off" style="width:120px">
					          <font color="#FF0000">*</font></td>
						      <td height="35">Segundo Nombre:</td>
						      <td><input type="text" name="S_Nombre" id="S_Nombre" maxlength="30" autocomplete="off" style="width:120px"></td>
					        </tr>
						    <tr>
						      <td >&nbsp;</td>
						      <td >Fecha de Nacimiento:</td>
						        <td colspan="2" ><input type="text" name="Fecha_Naci" id="Fecha_Naci"  maxlength="50" autocomplete="off" placeholder="AAAA-MM-DD" style="width:120px">
					          <font color="#FF0000">*</font></td>
						      <td height="35" >Género:</td>
						      <td><select name="Genero" id="Genero" style="width:120px">							
						      <option value="0">Seleccionar</option>
					            <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                </select>
						        <font color="#FF0000">*</font></td>
					        </tr>
						    <tr>
						      <td >&nbsp;</td>
						      <td >Correo Electrónico:</td>
						      <td colspan="2" ><input type="text" name="Correo" id="Correo" maxlength="50" autocomplete="off" placeholder="escribir en minuscula" style="width:120px">
					          <font color="#FF0000">*</font></td>
						      <td height="35" >Número Celular:</td>
						      <td><input type="text" name="Celular" id="Celular" maxlength="50" autocomplete="off" style="width:120px" onKeyUp="return ValNumero(this);">
					          <font color="#FF0000">*</font></td>
					        </tr>
						    <tr>
						      <td >&nbsp;</td>
						      <td >¿A qué EPS pertenece?</td>
						      <td colspan="2" ><input type="text" name="Eps" id="Eps" maxlength="50" autocomplete="off" style="width:120px">
					          <font color="#FF0000">*</font></td>
						      <td height="35" >&nbsp;</td>

						      <td>&nbsp;</td>
					        </tr>
						    <tr>
						      <td>&nbsp;</td>
						      <td>&nbsp;</td>
						      <td colspan="2">&nbsp;</td>
						      <td>&nbsp;</td>
						      <td>&nbsp;</td>
					        </tr>
						    <tr>
						      <td>&nbsp;</td>
						      <td colspan="5" bgcolor="#CCCCCC"><p align='justify'>Es necesario que usted  este informado ustedes van a  realizar una serie de prácticas físicas   que generan un esfuerzo máximo de sus capacidades funcionales, que al  practicarlas pueden tener algunos riesgos y complicaciones, (Lesiones músculo  articulares como desgarres, luxaciones, fracturas, caídas entre otros;  incremento de la frecuencia cardíaca, presión arterial, desmayos, fatiga,  dificultad para respirar).Las actividad que  desarrollará va a ser orientadas por personal  del <strong>IDRD  </strong>debidamente capacitado quienexplicara en qué  consiste como realizarla y los posibles riesgos que puede ofrecer.</p>
						        <p>Por  lo anterior mantenga atento a cambios en su organismos como mareos, náuseas, dolor de cabeza,  dificultad  para respirar, brote abundante, de inmediato debe  informar a las personas responsable y competentes más cercanas.</p>
                                <p>Si  consume   diariamente medicamentos de control, no olvide hacerlo en el recorrido,   agradecemos su consideración y honestidad con nosotros y  consigo mismo frente al estado óptimo de su salud.</p>
                                <p>Al llenar éste formulario asumo que he comprendido perfectamente todo lo anterior y doy <span id="OBJ_PREFIX_DWT25">mi</span> consentimiento, y solicito participar en la caminata.<br>
                                </p>
                                <p>Por lo tanto eximo al <strong>INSTITUTO DISTRITAL DE RECREACION Y DEPORTE -  IDRD </strong>de las responsabilidades que puedan ir más allá de la atención en primeros  auxilios y notificación a <span id="OBJ_PREFIX_DWT26">mi</span> EPS.  </p></td>
					        </tr>
						    <tr>
						      <td colspan="6">&nbsp;</td>
					        </tr>
						    <tr>
						      <td>&nbsp;</td>
						      <td colspan="3">Entiendo, acepto y doy mi consentimiento, y solicito participar en la caminata</td>
						      <td><input type="checkbox" id="tyc" name="tyc" onChange="isCheck()"></td>
						      <td></td>
					        </tr>
						    <tr>
						      <td height="20" colspan="6">&nbsp;</td>
					        </tr>
						    <tr>
						      <td colspan="6"><center><input type="button" id="boton" name="boton" value="ENVIAR DATOS"  onClick="validar()"Disabled>  
                         
                              </center> </td>
					        </tr>
						   
					       </table></center>

 </center>       
 
&nbsp &nbsp &nbsp &nbsp<font color ="#1e4268" style="font-style:italic" size="2"><strong>Nota:</strong> Los campos con </font><font color="#FF0000"> *</font> <font color ="#1e4268" style="font-style:italic" size="2">son obligatorios.</font> <br>
 &nbsp &nbsp &nbsp &nbsp<font color ="#1e4268" style="font-style:italic" size="2">tenga en cuenta el tiempo de disponibilidad para asistir a la caminata, si no asiste le está quitando la oportunidad a otra persona de participar.</font>
 <br><table>
 <tr>
 <!--<td>&nbsp &nbspVerifica tu inscripción:</td>
 <td><p><a href="http://www.idrd.gov.co//Formularios/2016/PARAMO_DEL_VERDILLO_2016_II/Consulta_Inscritos.php">&nbsp &nbspCLIC AQUÍ</a></p></td>-->
 </tr>
 </table>
					 
					
                           </form>
                           
                      
                         </div>
                          <div id="templatemo_header_3_end">
                          </div>
                       
                       
                 </div>
              </div>                 

         
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
