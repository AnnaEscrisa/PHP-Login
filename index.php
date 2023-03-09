<?php echo file_get_contents("./public/partials/head.inc.html"); ?>

<link rel="stylesheet" type="text/css" href="./Public/css/log-styles.css">
<link rel="stylesheet" type="text/css" href="./Public/css/stylesExtra.css">
</head>

<body class="main">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Log in</h3>
                </div>
                <div class="card-body">
                    <form action="./src/login.php" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="Usuario" type="text" class="form-control" placeholder="Usuario" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="Contraseña" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Entrar" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        No tienes cuenta?<a href="./Public/registro.php">Registrate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo file_get_contents("./public/partials/script.inc.html"); ?>