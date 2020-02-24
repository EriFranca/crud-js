<?php
session_start();

if (!isset($_SESSION['UsuarioID'])) {
    header('location: ../../index.php');
}
include '../../includes/header.php';
?>


<nav class="navbar sticky-top navbar-dark bg-dark shadow">
    <div class="container">
        <a href="https://github.com/mrbrunelli" target="__blank" class="nav-brand"><i class="fab fa-js fa-3x text-warning"></i></a>
        <ul class="nav">
            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle nav-link text-light" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-ninja text-warning"></i> <?= $_SESSION['UsuarioNome'] ?>
                    </a>
                    <div class="dropdown-menu shadow text-center" aria-labelledby="dropdown">
                        <a href="../../backend/deslogar.php" class="dropdown-item"><i class="fas fa-sign-out-alt text-warning"></i> Sair</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-between">
        <div class="col-md-4">
            <div class="form-group">
                <label for="id"><small>ID</small></label>
                <input type="text" class="form-control" name="id" id="id" disabled>
            </div>
            <div class="form-group">
                <label for="nome"><small>Nome</small></label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="form-group">
                <label for="login"><small>Login</small></label>
                <input type="text" class="form-control" name="login" id="login">
            </div>
            <div class="form-group">
                <label for="senha"><small>Senha</small></label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <div class="form-group">
                <label for="confirmaSenha"><small>Confirmar senha</small></label>
                <input type="password" class="form-control is-valid" name="confirmaSenha" id="confirmaSenha">
            </div>
        </div>

        <div class="col-md-7">
            <div class="tabela shadow">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Login</th>
                    </thead>
                    <tbody id="lista">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include '../../includes/footer.php';
?>