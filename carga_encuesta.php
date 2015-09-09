<?php

 $host_db = "192.168.176.24";
 $user_db = "server";
 $pass_db = "root";

 $conexion = mysql_connect($host_db, $user_db, $pass_db);

 mysql_select_db("ingreso_svc", $conexion) or die("No se puede seleccionar la base de datos.");

 //$password=mysql_real_escape_string($_POST["password"]);
 
 //$password2=mysql_real_escape_string($_POST["password2"]);
 
//$nombre=mysql_real_escape_string($_POST["user"]);
//$email=($_POST["email"]);
 
 //$buscarUsuario = "SELECT * FROM users WHERE email = '$_POST[email]' ";

 //$result = mysql_query($buscarUsuario);

 //$count = mysql_num_rows($result);

 //$password = sha1($password2);
 $query = "INSERT INTO ot VALUES ('$_POST[ot]', date_format(STR_TO_DATE('$_POST[fecha]', '%d/%m/%Y'), '%Y-%m-%d'), '$_POST[base]','$_POST[movil]','$_POST[supervisor]','$_POST[tecnico1]','$_POST[tecnico2]','$_POST[motivo]')";

 if (!mysql_query($query, $conexion))
 {
 die('Error: ' . mysql_error());
 echo "Error al cargar los datos." . "<br />";
 }

 else{
	 
	 
echo "<script languaje='javascript'>
	alert('mauro gay');
    location.href = 'index.html';
   </script>";
 }

 

 mysql_close($conexion)

?>