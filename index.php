<?php
session_start(); // Iniciar a sessao

// Definir um fuso horario padrao
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Celke</title>
  <!-- Adicionando Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilo adicional para centralizar a página */
    body,
    html {
      height: 100%;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }
  </style>
</head>

<body>
  <div class=" container text-center">
    <!-- Logo -->

    <div class=" col-md-6">
      <img src="Up-Resultados_Logotipo-1.png (2).webp" alt="Logo" style=height:100px; width=200px>
      <div class=" card">
        <div class="card-body">



          <h2 class="card-title">Registrar ponto</h2>
          <?php
          if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
          ?>
          <p id="horario"><?php echo date("d/m/Y H:i:s"); ?></p>
          <a href="registrar_ponto.php" class="btn btn-primary">Registrar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Adicionando Bootstrap JS e jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function atualizarHorario() {
      var data = new Date().toLocaleString("pt-br", {
        timeZone: "America/Sao_Paulo"
      });
      document.getElementById("horario").innerHTML = data.replace(", ", " - ");
    }

    setInterval(atualizarHorario, 1000);
  </script>

</body>

</html>