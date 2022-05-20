<html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0">
<title>Mi Web Personal</title>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/jspdf.min.js"></script>
     <script type="text/javascript" src="js/contacto.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body class="contenido">

          <nav class="menu">
          <b><font size= "7">MI WEB PERSONAL</b></font size= "7">
          <font size= "6"><a href="https://aldoavilez.github.io/index/index.html">Bienvenida</a>
          <a href="https://aldoavilez.github.io/pasado/pasado.html">Pasado</a>
          <a href="https://aldoavilez.github.io/presente/presente.html">Presente</a>
          <a href="https://aldoavilez.github.io/futuro/futuro.html">Futuro</a>
     </font size= "6"></b></nav>
<br>
  <section class="form-register">
     <div >
          <FORM CLASS="borde" ACTION="contacto.php" METHOD="POST">
         <hr>  
          <div><font size="5">
               <label class="upcontrols">Nombre</label>
               <input class="controls" type="text" name ="nombre" class="form-control" placeholder="Teclea tu nombre">
          </div><br>
          <hr>
          <div>
               <label  class="upcontrols">Edad</label>
               <input  class="controls"  type="number" name="edad" placeholder="Teclea tu edad">
          </div><br>
          <hr>
          <div>
               <label  class="upcontrols">Escuela</label>
               <input class="controls" type="text" name="escuela"  placeholder="Teclea tu Escuela">
          </div><br>
          <hr>
          <div>
               <label  class="upcontrols">Fecha de nacimiento</label>
               <input class="controls" type="date" name="fecha">
          </div><br>
          <hr>
          <div>
               
             </select>
               
          </div><br>
        <hr>
          <div></div>
        <button class="botons" onclick="registra()">Guardar</button>
     </div>
    <hr> 
     <div id="alumnos">

     </div></font size="5">

  </section>
</form>
<?PHP
   
   if (isset($_REQUEST['insertar']))   {
     $insertar = $_REQUEST['insertar'];
 
   // Obtener valores introducidos en el formulario
      $nombre = $_REQUEST['nombre'];
      $edad = $_REQUEST['edad'];
      $escuela = $_REQUEST['escuela'];
      $fecha = $_REQUEST['fecha'];

      print ("<H1>Agregando noticias</H1>\n");

   // Comprobar que se han introducido todos los datos obligatorios
      $errores = "";
      if (trim($nombre) == "")
         $errores = $errores . "   <LI>Se requiere nombre\n";
      if (trim($edad) == "")
         $errores = $errores . "   <LI>Se requiere edad\n";
      if (trim($escuela) == "")
         $errores = $errores . "   <LI>Se requiere nombre de escuela\n";
     if (trim($fecha) == "")
         $errores = $errores . "   <LI>Se requiere fecha de nacimiento\n";

   // Mostrar errores encontrados
      if ($errores != "")
      {
         print ("<P>No se ha podido realizar la insercion debido a los siguientes errores:</P>\n");
         print ("<UL>");
         print ($errores);
         print ("</UL>");
         print ("<P>[ <A HREF='javascript:history.back()'>Volver</A> ]</P>\n");
      }
      else
      {
          // Si los datos son correctos, procesar formulario
 
   // Insertar la noticia en la Base de Datos
      $conexion = mysqli_connect ("localhost", "root", "","contacto")
         or die ("No se puede conectar con el servidor");
      

      $instruccion = "insert into comentario (nombre, edad,escuela, fecha)  values " .
                     "('$nombre', '$edad','$escuela','$fecha') ";

      $consulta = mysqli_query ( $conexion,$instruccion)
         or die ("Fallo en la inserción");
      mysqli_close ($conexion)
         or die ("Fallo al cerrar conexion");  
            
         print ("<P>Estos son los datos introducidos:</P>\n");
         print ("<UL>\n");
         print ("   <LI>Nombre: $nombre\n");
         print ("   <LI>Edad: $edad\n");
         print ("   <LI>Escuela: $escuela\n");
         print ("   <LI>Fecha: $fecha\n");

         print ("</UL>\n");
         print ("<P>[ <A HREF='contacto.php'>Insertar otra noticia</A> ]</P>");
      }
   }
   else
   {
?>
<?PHP
} 
?>
</body>
</html>