<?php include "./includes/session.php"; ?>

<?php include './includes/base/headIni.php' ?>
<title><?php echo htmlspecialchars($_SESSION["username"]);?> | Dashboard</title>
<link rel="stylesheet" href="./assets/css/welcome.css">
<style>
    .mtText{
        margin-top: 5rem;
    }
</style>
<?php include './includes/base/headEnd.php' ?>

<?php include './includes/base/header.php' ?>
<nav class="navbar fixed-top bg-dark align-items-center">
    <div class="container-fluid">
        <a class="navbar-brand text-light"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
        <a type="submit" href="./includes/logout.php" class="btn btn-danger">Sair</a>
    </div>
</nav>
<div class="container">
    <div class="page-header text-center mtText">
        <h1>Bem-vindo ao <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
    </div>
    <div class="page-header text-center">
        <a href="cadastro.php" class="btn btn-primary m-2">Cadastrar Alunos</a>
        <br/>
        <form method="GET">
            <button type="submit" class="btn btn-dark">Listar Todos</button>
            <button type="submit" name="tipo" value="motos" class="btn btn-dark">Listar Motos</button>
            <button type="submit" name="tipo" value="carros" class="btn btn-dark">Listar Carros</button>
        </form>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do Aluno(a)</th>
                <th scope="col">RA</th>
                <th scope="col">Tipo de Veículo</th>
                <th scope="col">Placa do Veículo</th>
                <th scope="col">Data do Cadastro</th>
            </tr>
        </thead>
        <tbody>
            <?php include "./includes/listar.php"; ?>
        </tbody>
        <?php
            if (!empty($msg)) {
                echo '<h5 class="container text-center mt-3">Todos os Alunos Cadastrados'.$msg.'</h5>';
            }
        ?>
    </table>
    <footer class="footer fixed-bottom bg-light">
        <p class="container text-center py-md-1">
            O sistema <?php echo htmlspecialchars($_SESSION["username"]); ?> 
            serve para simplificar o cadastro de veículos dos alunos. 
            Esse processo ágil e organizado garante que cada aluno 
            tenha acesso a um estacionamento seguro enquanto 
            frequenta as aulas, contribuindo para a comodidade 
            e fluidez do dia-a-dia na faculdade.
        </p>
        <p class="text-center size-fonte">Fatec &copy; 2024</p>
    </footer>
</div>
<?php include './includes/base/footer.php' ?>