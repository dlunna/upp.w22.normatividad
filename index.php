<!DOCTYPE html>
<html lang="mx">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../lib25/CSS/style.css">
</head>

<body>
  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php
    include('../lib25/header.html');
    ?>
  </header>

  <main>

    <br>
    <div class="row mb-3 text-center">
      <div class="col-md-8 themed-grid-col">
        <a class="btn btn-primary d-inline-flex align-items-center" href="./interna.php">Ver Normatividad Interna</a>
      </div>
      <div class="col-md-4 themed-grid-col">
        <a class="btn btn-primary d-inline-flex align-items-center" href="./externa.php">Ver Normatividad Externa</a>
      </div>
    </div>

    <?php include('./dotk/05main/contenido.html'); ?>    

  </main>

  <footer>
    <?php include('../lib25/footer.html'); ?>
  </footer>

  <?php
  include('../lib25/80js.html');
  ?>

</body>

</html>