
<!DOCTYPE html>
<html>
<head>
  <title>AgregarTerapeuta</title>
<meta name="encoding" charset="utf-8">
<meta name="viewpor" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../../css/estiloT.css">
</head>
<body >


<form action="" class="formulario">

  <h1 class="formulario__titlo">Registro de Terapeutas</h1>

  <label for="" class="formulario__label">Nombre: </label>
  <br><br>
          <input type="text" class="formulario__input" required>
  <label for="" class="formulario__label">
  Apellido Paterno:</label>
  <br><br>
        <input type="text" class="formulario__input" required>

  <label for="" class="formulario__label">
  Cedula Profesional:</label>
  <br><br>
        <input type="text" class="formulario__input" required>

    <label for="" class="formulario__label">Telefono:</label>
    <br><br>
        <input type="number" class="formulario__input" maxlength="10" required>
<label for="" class="formulario__label">Contraseña: </label>  
<br><br>
   <input type="email" class="formulario__input" required >

  <label for="" class="formulario__label">Correo: </label>
  <br><br>
   <input type="text" class="formulario__input" required>
<br><br>

 <label for="" class="formulario__label">Dirección: </label>
 <br><br>
<button>
  <a href="agregarDireccion.php">...</a> 
</button>


<br><br>
     <input class="formulario__subimit" type="submit" value="REGISTRAR">


</form>
<br><br>

<button >
  <a href="Admi.php" title="index"><img src="../../imagenes/descarga.png" alt="Error, imagen no encontrada!!" width="200px">  </a>
</button>

<br><br>


<script src="../Js/forms.js"></script>


</body>
</html>