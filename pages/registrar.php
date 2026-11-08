<?php
if (isset($_SESSION['logado'])) {
    header('Location: index.php?page=dashboard');
    exit;
}

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nome = $_POST['nome'] ?? '';

    $_SESSION['logado'] = true;
    $_SESSION['nome_usuario'] = $nome;
    
    header('Location: index.php?page=dashboard');
    exit;
}
?>

<section class="login-container">
    <div class="login-box">
        <h2>Comece a sua Evolução</h2>
        <p>Crie a sua conta e configure o seu objetivo.</p>
        
        <form action="index.php?page=registrar" method="POST">
            <div class="input-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="senha">Palavra-passe</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn-cta" style="width: 100%; margin-top: 1rem;">Criar Conta e Continuar</button>
        </form>
        <p class="login-footer">Já tem conta? <a href="index.php?page=login">Fazer Login</a></p>
    </div>
</section>