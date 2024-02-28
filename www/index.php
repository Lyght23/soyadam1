<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piedra, Papel o Tijera</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Elige Piedra, Papel o Tijera</h2>
  <form action="welcome.php" method="get" class="row g-3">
    <div class="col-auto">
      <input type="radio" id="piedra" name="eleccion" value="piedra" required>
      <label for="piedra">Piedra</label><br>
      <input type="radio" id="papel" name="eleccion" value="papel" required>
      <label for="papel">Papel</label><br>
      <input type="radio" id="tijera" name="eleccion" value="tijera" required>
      <label for="tijera">Tijera</label>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Jugar</button>
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

