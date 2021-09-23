<?php
include("../admin/conec.php"); 
     $conn=conectarse(); 
   include("../admin/encabezado.php");
     $titulo="Crear usuarios - VG"; 
	 encabezado($titulo);
	 include("../admin/menu.php");
	 $sql1="select * from nivel";
    $result = pg_query($conn,$sql1);
?>
<section>
<br/> <br/>
<form method="post" action="../admin/crearusuario2.php" onsubmit="return validarUsuario()">
<center>
<table width="1600" height="224" border="3"  bgcolor="#9BCDED">
<tr>
<th height="61" colspan="4" align="center">
<font color="#663333" size="6">Formulario para crear usuarios</font>
</th>
</tr>
  <tr>
    <td width="254" height="120" align="center"><br/><p> <label><strong>C&oacute;digo:</strong>
    <input type="number" name="codigo" id="codigo" placeholder="Digite el c&oacute;digo" onkeypress="return numero(event)" ></label></p>
<p><br/><label> <strong>Nombres:</strong>
  <input type="text" name="nombre" id="nombre" placeholder="Digite el nombre" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" ></label></p>
  <p><br/> <label><strong>Apellidos:</strong></label>
    <input type="text" name="apellidos2" id="apellido" placeholder="Digite los apellidos" onkeyup="return mayuscula(this)" onkeypress="return letra(event)" >
  </p><br/>
  </td>
    <td width="305" align="center"><p><br/> <label><strong>Nickname:</strong>
  <input type="text" name="nickname" id="nickname" placeholder="Digite el nickname" ></label></p>
<p><br/> <label><strong>Contrase&ntilde;a:</strong>
  <input type="password" name="contra" id="contrasena" placeholder="Digite la contrase&ntilde;a" ></label></p>
  <p><br/> <label><strong>Correo:</strong>
  <input type="text" name="correo" id="correo" placeholder="Digite el correo" ></label></p>
		 <p><br/> <strong>Cargo:</strong>
  <select name="cargo">
			 <option value="1" selected>Sin cargo</option>
	  <option value="2">Soporte</option>
	  <option value="3">Moderacion</option>
	  <option value="4">Administrador</option>
			 </select></p><br/>
  </td>
    <td width="323" align="center"><p> <br/><strong>G&eacute;nero:</strong>
  <label for="M"><input type="radio" name="genero" value="M" id="M" checked>Masculino</label>
<label for="F"><input type="radio" name="genero" value="F" id="F">Femenino</label></p>
<p> <br/><label><strong>Fecha nacimiento:</strong>
  <input type="date" name="nacer" id="fchnacimiento"></label></p>
  <p> <br/><label><strong>Tel&eacute;fono: </strong>
  <input type="tel" name="tel" id="telefono" placeholder="Digite el tel&eacute;fono" onkeypress="return numero(event)" ></label></p><br/></td>
    <td width="327" align="center"><p> <br/><strong>Pa&iacute;s:</strong>
  <select name="pais">
<option value="AF">Afganist&aacute;n</option>
<option value="AL">Albania</option>
<option value="DE">Alemania</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Ant&aacute;rtida</option>
<option value="AG">Antigua y Barbuda</option>
<option value="AN">Antillas Holandesas</option>
<option value="SA">Arabia Saud&iacute;</option>
<option value="DZ">Argelia</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaiy&aacute;n</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrein</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BE">B&eacute;lgica</option>
<option value="BZ">Belice</option>
<option value="BJ">Benin</option>
<option value="BM">Bermudas</option>
<option value="BY">Bielorrusia</option>
<option value="MM">Birmania</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia y Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BR">Brasil</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="BT">But&aacute;n</option>
<option value="CV">Cabo Verde</option>
<option value="KH">Camboya</option>
<option value="CM">Camer&uacute;n</option>
<option value="CA">Canad&aacute;</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CY">Chipre</option>
<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
<option value="CO" selected>Colombia</option>
<option value="KM">Comores</option>
<option value="CG">Congo</option>
<option value="CD">Congo, Rep&uacute;blica Democr&aacute;tica del</option>
<option value="KR">Corea</option>
<option value="KP">Corea del Norte</option>
<option value="CI">Costa de Marf&iacute;l</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croacia (Hrvatska)</option>
<option value="CU">Cuba</option>
<option value="DK">Dinamarca</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="EC">Ecuador</option>
<option value="EG">Egipto</option>
<option value="SV">El Salvador</option>
<option value="AE">Emiratos &aacute;rabes Unidos</option>
<option value="ER">Eritrea</option>
<option value="SI">Eslovenia</option>
<option value="ES">Espa&ntilde;a</option>
<option value="US">Estados Unidos</option>
<option value="EE">Estonia</option>
<option value="ET">Etiop&iacute;a</option>
<option value="FJ">Fiji</option>
<option value="PH">Filipinas</option>
<option value="FI">Finlandia</option>
<option value="FR">Francia</option>
<option value="GA">Gab&oacute;n</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GD">Granada</option>
<option value="GR">Grecia</option>
<option value="GL">Groenlandia</option>
<option value="GP">Guadalupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GY">Guayana</option>
<option value="GF">Guayana Francesa</option>
<option value="GN">Guinea</option>
<option value="GQ">Guinea Ecuatorial</option>
<option value="GW">Guinea-Bissau</option>
<option value="HT">Hait&iacute;</option>
<option value="HN">Honduras</option>
<option value="HU">Hungr&iacute;a</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IQ">Irak</option>
<option value="IR">Ir&aacute;n</option>
<option value="IE">Irlanda</option>
<option value="BV">Isla Bouvet</option>
<option value="CX">Isla de Christmas</option>
<option value="IS">Islandia</option>
<option value="KY">Islas Caim&aacute;n</option>
<option value="CK">Islas Cook</option>
<option value="CC">Islas de Cocos o Keeling</option>
<option value="FO">Islas Faroe</option>
<option value="HM">Islas Heard y McDonald</option>
<option value="FK">Islas Malvinas</option>
<option value="MP">Islas Marianas del Norte</option>
<option value="MH">Islas Marshall</option>
<option value="UM">Islas menores de Estados Unidos</option>
<option value="PW">Islas Palau</option>
<option value="SB">Islas Salom&oacute;n</option>
<option value="SJ">Islas Svalbard y Jan Mayen</option>
<option value="TK">Islas Tokelau</option>
<option value="TC">Islas Turks y Caicos</option>
<option value="VI">Islas V&iacute;rgenes (EEUU)</option>
<option value="VG">Islas V&iacute;rgenes (Reino Unido)</option>
<option value="WF">Islas Wallis y Futuna</option>
<option value="IL">Israel</option>
<option value="IT">Italia</option>
<option value="JM">Jamaica</option>
<option value="JP">Jap&oacute;n</option>
<option value="JO">Jordania</option>
<option value="KZ">Kazajist&aacute;n</option>
<option value="KE">Kenia</option>
<option value="KG">Kirguizist&aacute;n</option>
<option value="KI">Kiribati</option>
<option value="KW">Kuwait</option>
<option value="LA">Laos</option>
<option value="LS">Lesotho</option>
<option value="LV">Letonia</option>
<option value="LB">L&iacute;bano</option>
<option value="LR">Liberia</option>
<option value="LY">Libia</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lituania</option>
<option value="LU">Luxemburgo</option>
<option value="MK">Macedonia, Ex-Rep&uacute;blica Yugoslava de</option>
<option value="MG">Madagascar</option>
<option value="MY">Malasia</option>
<option value="MW">Malawi</option>
<option value="MV">Maldivas</option>
<option value="ML">Mal&iacute;</option>
<option value="MT">Malta</option>
<option value="MA">Marruecos</option>
<option value="MQ">Martinica</option>
<option value="MU">Mauricio</option>
<option value="MR">Mauritania</option>
<option value="YT">Mayotte</option>
<option value="MX">M&eacute;xico</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldavia</option>
<option value="MC">M&oacute;naco</option>
<option value="MN">Mongolia</option>
<option value="MS">Montserrat</option>
<option value="MZ">Mozambique</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NI">Nicaragua</option>
<option value="NE">N&iacute;ger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk</option>
<option value="NO">Noruega</option>
<option value="NC">Nueva Caledonia</option>
<option value="NZ">Nueva Zelanda</option>
<option value="OM">Om&aacute;n</option>
<option value="NL">Pa&iacute;ses Bajos</option>
<option value="PA">Panam&aacute;</option>
<option value="PG">Pap&uacute;a Nueva Guinea</option>
<option value="PK">Paquist&aacute;n</option>
<option value="PY">Paraguay</option>
<option value="PE">Per&uacute;</option>
<option value="PN">Pitcairn</option>
<option value="PF">Polinesia Francesa</option>
<option value="PL">Polonia</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="UK">Reino Unido</option>
<option value="CF">Rep&uacute;blica Centroafricana</option>
<option value="CZ">Rep&uacute;blica Checa</option>
<option value="ZA">Rep&uacute;blica de Sud&aacute;frica</option>
<option value="DO">Rep&uacute;blica Dominicana</option>
<option value="SK">Rep&uacute;blica Eslovaca</option>
<option value="RE">Reuni&oacute;n</option>
<option value="RW">Ruanda</option>
<option value="RO">Rumania</option>
<option value="RU">Rusia</option>
<option value="EH">Sahara Occidental</option>
<option value="KN">Saint Kitts y Nevis</option>
<option value="WS">Samoa</option>
<option value="AS">Samoa Americana</option>
<option value="SM">San Marino</option>
<option value="VC">San Vicente y Granadinas</option>
<option value="SH">Santa Helena</option>
<option value="LC">Santa Luc&iacute;a</option>
<option value="ST">Santo Tom&eacute; y Pr&iacute;ncipe</option>
<option value="SN">Senegal</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leona</option>
<option value="SG">Singapur</option>
<option value="SY">Siria</option>
<option value="SO">Somalia</option>
<option value="LK">Sri Lanka</option>
<option value="PM">St Pierre y Miquelon</option>
<option value="SZ">Suazilandia</option>
<option value="SD">Sud&aacute;n</option>
<option value="SE">Suecia</option>
<option value="CH">Suiza</option>
<option value="SR">Surinam</option>
<option value="TH">Tailandia</option>
<option value="TW">Taiw&aacute;n</option>
<option value="TZ">Tanzania</option>
<option value="TJ">Tayikist&aacute;n</option>
<option value="TF">Territorios franceses del Sur</option>
<option value="TP">Timor Oriental</option>
<option value="TG">Togo</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad y Tobago</option>
<option value="TN">T&uacute;nez</option>
<option value="TM">Turkmenist&aacute;n</option>
<option value="TR">Turqu&iacute;a</option>
<option value="TV">Tuvalu</option>
<option value="UA">Ucrania</option>
<option value="UG">Uganda</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekist&aacute;n</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="YE">Yemen</option>
<option value="YU">Yugoslavia</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabue</option>
</select></p>
<p> <br/><label><strong>Dinero:</strong>
  <input type="number" name="dinero" id="dinero" placeholder="Ingrese el dinero" onkeypress="return numero(event)" ></label></p>
<p><br/> <label><strong>Puntos:</strong>
  <input type="number" name="puntos" id="puntos" placeholder="Ingrese los puntos" onkeypress="return numero(event)" ></label></p>
<p><br/> <label><strong>Nivel:</strong>
   <select name="nivel">
  <?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

$codigo = $row["0"] ; //Asignamos el id del campo que quieras mostrar
$nombre = $row["1"]; // Asignamos el nombre del campo que quieras mostrar
echo "<option value=".$codigo.">".$nombre."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select></label></p><br/>
</td>
  </tr>
  <tr>
    <td height="61" colspan="4" align="center"><button>
  <img src="../admin/enviar.svg" alt="Enviar" width="32" height="32" style="vertical-align: middle">
  Enviar
</button> <button type="reset">
  <img src="../admin/borrar.svg" alt="Borrar todo" width="32" height="32" style="vertical-align: middle">
  Borrar
</button></td>
  </tr>
</table></center>
</form>
<br/><br/><br/>
</section>
<?php
include('../admin/footer.php');
?>
</body>
</html>