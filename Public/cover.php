<?php echo file_get_contents("./partials/head.inc.html") ?>
<?php

include_once "../src/funciones.php";

checkSession();


$Nombre = FetchDatosPersonales("Nombre", $_SESSION["Usuario"]);
$Apellidos = FetchDatosPersonales("Apellidos", $_SESSION["Usuario"]);
$Edad = FetchDatosPersonales("Edad", $_SESSION["Usuario"]);
$Email = FetchDatosPersonales("Email", $_SESSION["Usuario"]);
?>

<link rel="stylesheet" type="text/css" href="./css/cover.css">
<link rel="stylesheet" type="text/css" href="./css/stylesExtra.css">
</head>

<body>
  <div class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">PAC1</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="../src/session-close.php">Cerrar Sesion</a>
          </nav>
        </div>
      </header>
      <main role="main" class="inner-cover">
        <h1 class="cover-heading">Hola, <?php echo $_SESSION["Usuario"] ?> </h1>
        <p class="lead"> Tus datos personales son:
        <p> Nombre: <?php echo $Nombre ?></p>
        <p> Apellido: <?php echo $Apellidos ?></p>
        <p> Edad: <?php echo $Edad ?></p>
        <p> Email: <?php echo $Email ?></p>

        <button type="button" class="btn btn-lg btn-secondary" data-toggle="modal" data-target="#modal">Sobre este proyecto</button>
        <div class="modal fade" id='modal' tabindex='-1' role='dialog' aria-labelledby="ModalLabel" aria-hidden='true'>
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title w-100 text-center" id="exampleModalLabel">PHP - SQL</h5>
              </div>
              <div class="modal-body">
                Web API construida en PHP con las siguientes funcionalidades:
                <p>
                <ul class="ul-list">
                  <li>Registro de un nuevo usuario y log in para usuarios existentes</li>
                  <li>Apertura y cierre de sesión</li>
                  <li>Página de inicio, de acceso limitado a usuarios con una sesión iniciada, que muestra los datos del usuario</li>
                  <li>Acceso a la base de datos SQL de los usuarios e inserción de datos en la misma</li>
                  <li>Front-end simple con bootstrap + css</li>
                </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
</body>

</html>