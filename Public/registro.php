<?php echo file_get_contents("./partials/head.inc.html"); ?>
<link rel="stylesheet" type="text/css" href="./css/log-styles.css">
<link rel="stylesheet" type="text/css" href="./css/stylesExtra.css">
</head>

<body class="main">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card2">
                <div class="card-header">
                    <h3>Registrar nuevo usuario</h3>
                </div>
                <div class="card-body">
                    <form action="../src/registrar.php" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input required name="Nombre" class="form-control" type="text" placeholder="Nombre" required>
                        </div>
                        <div class="input-group form-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input required name="Apellidos" class="form-control" type="text" placeholder="Apellidos" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-person-cane"></i></span>
                            </div>
                            <input required name="Edad" class="form-control" type="number" placeholder="Edad" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                            </div>
                            <input required name="Email" class="form-control" type="email" placeholder="Email" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input required name="Usuario" class="form-control" type="text" placeholder="Usuario" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="Contraseña" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="Contraseña_confirmar" class="form-control" placeholder="Confirma tu contraseña" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Entrar" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Ya estas registrado?<a href="../index.php">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo file_get_contents("./partials/script.inc.html"); ?>