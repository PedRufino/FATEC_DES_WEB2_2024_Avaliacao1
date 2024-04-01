<?php include "./includes/session.php"; ?>
<?php include './includes/register.php' ?>

<?php include './includes/base/headIni.php' ?>
<title><?php echo htmlspecialchars($_SESSION["username"]);?> | Cadastro</title>
<link rel="stylesheet" href="./assets/css/cadastro.css">
<?php include './includes/base/headEnd.php' ?>

<?php include './includes/base/header.php' ?>
<div class="container">
    <div class="divForm">
        <h3 class="text-center">Cadastro de Alunos</h3>
        <?php
        if (!empty($msgSucesso)) {
            echo '<div class="alert alert-success alert-dismissible text-center" role="alert">' . $msgSucesso . '</div>';
        }
        ?>
        <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="col-md-6">
                <label class="form-label">Nome</label>
                <input type="text" name="fname" placeholder="João de Souza" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">RA</label>
                <input type="text" name="ra" minlength="13" maxlength="13" placeholder="0000000000000" class="form-control" required>
            </div>
            <div class="col-lg-6">
                <label class="form-label">Placa do Veiculo</label>
                <input type="text" name="placa_veiculo" placeholder="ABC1234" minlength="7" maxlength="7" class="form-control">
            </div>
            <div class="col-lg-3">
                <label class="form-label">Tipo de Veiculo</label>
                <select name="veiculo" class="form-select" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="carro">Carro</option>
                    <option value="moto">Moto</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Cadastar</button>
            </div>
            <div class="text-center">
                <a href="./welcome.php" class="btn btn-dark">Área Inicial</a>
            </div>
        </form>
    </div>
</div>
</body>

</html>