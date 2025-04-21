<HTML>

<HEAD>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JUEGO DADOS - PRÁCTICA OBLIGATORIA</title>
  <link rel="stylesheet" href="./bootstrap.min.css">
</head>

</HEAD>

<BODY>
  <?php
    include('funciones.php');

    $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      try {
        $jug1 = limpiarCampo($_POST["jug1"]);
        $jug2 = limpiarCampo($_POST["jug2"]);
        $jug3 = limpiarCampo($_POST["jug3"]);
        $jug4 = limpiarCampo($_POST["jug4"]);
        $numDados = limpiarCampo($_POST["numdados"]);

        if (empty($jug1) || empty($jug2) || empty($jug3) || empty($jug4) || empty($numDados)) {
          throw new Exception("Falta algun campo por rellenar");
        }

        if ($numDados < 1 || $numDados > 10) {
          throw new Exception("El numero de dados debe ser entre 1 y 10");
        }

        $jugadores = array(
          $jug1 => tirarDados($numDados),
          $jug2 => tirarDados($numDados),
          $jug3 => tirarDados($numDados),
          $jug4 => tirarDados($numDados)
        );
        var_dump($jugadores);

        $puntos = array();
        foreach ($jugadores as $nombre => $dados) {
          $puntos[$nombre] = calcularPuntos($dados);
        }
        // puntuacion más alta
        $maxPuntos = max($puntos);

        // ganadores
        $ganadores = array_keys($puntos, $maxPuntos);
        $numGanadores = count($ganadores);

        generarTabla($jugadores);

        resultados($puntos, $ganadores);

      } catch (Exception $e) {
        $error = $e->getMessage();
      }
    }
  ?>

  <form name='juegodados' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <div class="container ">
      <!--Aplicacion-->
      <div class="card border-success mb-3" style="max-width: 30rem;">
        <div class="card-header"><B>JUEGO DADOS</B> </div>
        <div class="card-body">


          <div><?php echo $error; ?></div>

          <B>Jugador 1: </B><input type='text' name='jug1' value='' size=25><br><br>
          <B>Jugador 2: </B><input type='text' name='jug2' value='' size=25><br><br>
          <B>Jugador 3: </B><input type='text' name='jug3' value='' size=25><br><br>
          <B>Jugador 4: </B><input type='text' name='jug4' value='' size=25><br><br><br>

          <B>Numero Dados: <input type='text' name='numdados' value='' size=5><br><br>


            <B>Pulsa para Tirar Dados:

              <div>

                <input type="submit" value="Tirar Dados" name="tirar" class="btn btn-warning disabled">
                


              </div>






  </FORM>

</BODY>

</HTML>