<?php
// mudar para production
if (isset($_SESSION['logado'])) {
    header('Location: index.php?page=dashboard');
    exit;
}

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    
    if ($email === 'minhaconta@teste.com' && $senha === '1234') {
        $_SESSION['logado'] = true;
        $_SESSION['nome_usuario'] = 'Atleta VIP';
        header('Location: index.php?page=dashboard');
        exit;
    } else {
        $erro = 'E-mail ou palavra-passe incorretos.';
    }
}
?>

<section class="login-container">
    <div class="login-box">
        <h2>Acesso à Plataforma</h2>
        <p>Acompanhe a sua evolução e treinos de hoje.</p>
        
        <?php if ($erro): ?>
            <div class="msg-erro"><?php echo $erro; ?></div>
        <?php endif; ?>

        <form action="index.php?page=login" method="POST">
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" value="aluno@teste.com" required>
            </div>
            <div class="input-group">
                <label for="senha">Palavra-passe</label>
                <input type="password" id="senha" name="senha" value="1234" required>
            </div>
            <button type="submit" class="btn-cta" style="width: 100%; margin-top: 1rem;">Entrar</button>
        </form>
        <p class="login-footer">Ainda não tem conta? <a href="index.php?page=registrar">Registrar</a></p>
    </div>
</section>