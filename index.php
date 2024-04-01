<?php include './includes/login.php';?>

<!-- Cria um modelo que abre e depois fecha a tag <head></head> -->
<?php include './includes/base/headIni.php' ?>
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/index.css">
<?php include './includes/base/headEnd.php' ?>

<!-- Cria um modelo que abre e depois fecha a tag <body> -->
<?php include './includes/base/header.php' ?>
    <div class="row m-0">
        <div class="col-md-4 p-0 vh-100 overflow-hidden teste">
            <img src="./assets/img/fatec.jpg" alt="">
        </div>
        <div class="col-md-8 p-0 d-flex justify-content-center align-items-center">
            <div class="wrapper">
                <div class="text-center">
                <h2>Acessar</h2>
                <p>Favor inserir login e senha.</p>
                </div>
                <?php
                    if (!empty($error_message)) {
                        echo '<div class="alert alert-danger text-center" role="alert">' . $error_message . '</div>';
                    }
                ?>
                <form class="row g-3 needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label class="form-label">Usuário</label>
                        <input type="text" name="username" class="form-control" placeholder="Usuário">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Senha</label>
                        <input type="password" name="password" class="form-control" placeholder="Senha">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-color" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- Cria um modelo que fecha a tag </body> -->
<?php include './includes/base/footer.php' ?>