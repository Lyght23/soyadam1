<?php
if (isset($_GET['eleccion'])) {
  $eleccionUsuario = $_GET['eleccion'];
  $opciones = ['piedra', 'papel', 'tijera'];
  $eleccionServidor = $opciones[array_rand($opciones)];

  echo '<!DOCTYPE html><html lang="es"><head>';
  echo '<meta charset="UTF-8">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
  echo '<title>Resultado</title>';
  echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
  echo '</head><body><div class="container mt-5">';

  if ($eleccionUsuario === $eleccionServidor) {
    echo "<div class='alert alert-primary' role='alert'>Empate. Ambos eligieron {$eleccionUsuario}.</div>";
  } elseif (($eleccionUsuario === 'piedra' && $eleccionServidor === 'tijera') ||
            ($eleccionUsuario === 'papel' && $eleccionServidor === 'piedra') ||
            ($eleccionUsuario === 'tijera' && $eleccionServidor === 'papel')) {
    echo "<div class='alert alert-success' role='alert'>Ganaste. {$eleccionUsuario} gana a {$eleccionServidor}.</div>";
  } else {
    echo "<div class='alert alert-danger' role='alert'>Perdiste. {$eleccionServidor} gana a {$eleccionUsuario}.</div>";
  }

  echo '<a href="index.php" class="btn btn-primary">Volver a Jugar</a>';
  echo '</div></body></html>';
} else {
  header("Location: index.php");
  exit();
}
?>
