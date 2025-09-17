<?php
function limpiar($dato) {
    return htmlspecialchars(trim($dato));
}

$curp = limpiar($_POST['curp']);
$certificado = limpiar($_POST['certificado']);
$entidad = limpiar($_POST['entidad']);
$municipio = limpiar($_POST['municipio']);
$oficialia = limpiar($_POST['oficialia']);
$fecha_registro = limpiar($_POST['fecha_registro']);
$libro = limpiar($_POST['libro']);
$num_acta = limpiar($_POST['num_acta']);

$nombre = limpiar($_POST['nombre']);
$primer_apellido = limpiar($_POST['primer_apellido']);
$segundo_apellido = limpiar($_POST['segundo_apellido']);
$sexo = limpiar($_POST['sexo']);
$fecha_nacimiento = limpiar($_POST['fecha_nacimiento']);
$lugar_nacimiento = limpiar($_POST['lugar_nacimiento']);

$padre_nombre = limpiar($_POST['padre_nombre']);
$padre_primer_apellido = limpiar($_POST['padre_primer_apellido']);
$padre_segundo_apellido = limpiar($_POST['padre_segundo_apellido']);
$padre_nacionalidad = limpiar($_POST['padre_nacionalidad']);
$padre_curp = limpiar($_POST['padre_curp']);

$madre_nombre = limpiar($_POST['madre_nombre']);
$madre_primer_apellido = limpiar($_POST['madre_primer_apellido']);
$madre_segundo_apellido = limpiar($_POST['madre_segundo_apellido']);
$madre_nacionalidad = limpiar($_POST['madre_nacionalidad']);
$madre_curp = limpiar($_POST['madre_curp']);

$anotaciones = limpiar($_POST['anotaciones']);
$certificacion = limpiar($_POST['certificacion']);

// Formatear fechas
setlocale(LC_TIME, 'es_ES.UTF-8');
$fecha_registro_fmt = strftime("%d de %B de %Y", strtotime($fecha_registro));
$fecha_nacimiento_fmt = strftime("%d de %B de %Y", strtotime($fecha_nacimiento));
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Acta de Nacimiento - México</title>
  <link rel="stylesheet" href="estilos.css" />
</head>
<body>
  <div class="border">

    <!-- Título central -->
     <div class="grid-container">
    <div class="titulo">
      <p>Estados Unidos Mexicanos</p>
      <p>Acta de Nacimiento</p>
    </div>
     </div>

    <!-- Identificación electrónica -->
    <div class="grid-container">
      <div>
        <table class="table-bordered">
          <tr><th>Clave Única de Registro de Población:</th></tr>
          <tr><td><?= $curp ?></td></tr>
        </table>
        <table class="table-bordered">
          <tr><th>Número de Certificado de Nacimiento:</th></tr>
          <tr><td><?= $certificado ?></td></tr>
        </table>
        <table class="table-bordered">
          <tr><th>Entidad de Registro:</th></tr>
          <tr><td><?= $entidad ?></td></tr>
        </table>
        <table class="table-bordered">
          <tr><th>Municipio de Registro:</th></tr>
          <tr><td><?= $municipio ?></td></tr>
        </table>

        <!-- Datos de registro -->
    <table class="table-bordered tabla-datos">
      <thead>
        <tr>
          <th>Oficialía</th>
          <th>Fecha de Registro</th>
          <th>Libro</th>
          <th>Número de Acta</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $oficialia ?></td>
          <td><?= $fecha_registro_fmt ?></td>
          <td><?= $libro ?></td>
          <td><?= $num_acta ?></td>
        </tr>
      </tbody>
    </table>
      </div>
    </div>

<div class="container">
<!-- Datos personales -->
    <table class="table-bordered">
      <thead>
        <tr>
          <th>Datos de la Persona Registrada</th>
        </tr>
      </thead>
    </table>
      </div>
<!-- <h3>Datos de la Persona Registrada</h3>-->
<table class="tabla-invertida">
  <tr>
    <td><?= $nombre ?></td>
    <td><?= $primer_apellido ?></td>
    <td><?= $segundo_apellido ?></td>
  </tr>
  <tr>
    <th>Nombre(s)</th>
    <th>Primer Apellido</th>
    <th>Segundo Apellido</th>
  </tr>
  <tr>
    <td><?= $sexo ?></td>
    <td><?= $fecha_nacimiento_fmt ?></td>
    <td><?= $lugar_nacimiento ?></td>
  </tr>
  <tr>
    <th>Sexo</th>
    <th>Fecha de Nacimiento</th>
    <th>Lugar de Nacimiento</th>
  </tr>
</table>
</div>

    <!-- Datos de filiación -->
    <table class="table-bordered">
      <thead>
        <tr>
          <th>Datos de Filiación - Padre</th>
        </tr>
      </thead>
    </table>
      </div>
    <!--<h3>Datos de Filiación - Padre</h3>-->
    <table class="tabla-invertida">
      <tr>
        <td><?= $padre_nombre ?></td>
        <td><?= $padre_primer_apellido ?></td>
        <td><?= $padre_segundo_apellido ?></td>
        <td><?= $padre_nacionalidad ?></td>
        <td><?= $padre_curp ?></td>
      </tr>
      <tr>
        <th>Nombre(s)</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Nacionalidad</th>
        <th>CURP</th>
      </tr>
    </table>

    <table class="table-bordered">
      <thead>
        <tr>
          <th>Datos de Filiación - Madre</th>
        </tr>
      </thead>
    </table>
      </div>

    <!--<h3>Datos de Filiación - Madre</h3>-->
    <table class="tabla-invertida">
      <tr>
        <td><?= $madre_nombre ?></td>
        <td><?= $madre_primer_apellido ?></td>
        <td><?= $madre_segundo_apellido ?></td>
        <td><?= $madre_nacionalidad ?></td>
        <td><?= $madre_curp ?></td>
      </tr>
      <tr>
        <th>Nombre(s)</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Nacionalidad</th>
        <th>CURP</th>
      </tr>
    </table>

    <!-- Anotaciones -->
    <table class="table-bordered">
      <thead>
        <tr>
          <th>Anotaciones Marginales</th>
          <th>Certificación</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= nl2br($anotaciones) ?></td>
          <td><?= nl2br($certificacion) ?></td>
        </tr>
      </tbody>
    </table>

    <!-- Firma -->
    <div class="firma">
      Firma Electrónica<br><br>
      __________________________<br>
      Director del Registro Civil
    </div>

    <!-- Leyenda -->
    <div class="leyenda">
      La presente copia certificada del acta de nacimiento es válida conforme a la legislación mexicana vigente.
    </div>

  </div>
</body>
</html>

