<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia | O Seu Treino Levado a Sério</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="navbar">
        <div class="logo"><a href="index.php?page=home">MT<span>GYM</span></a></div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php?page=home">Início</a></li>
                <li><a href="index.php?page=modalidades">Modalidades</a></li>
                <li><a href="index.php?page=planos">Planos</a></li>
                <li><a href="index.php?page=contato">Contato</a></li>
            </ul>
        </nav>
        <div class="nav-actions">
            <?php if(isset($_SESSION['logado'])): ?>
                <a href="index.php?page=dashboard" class="btn-dashboard">O Meu Painel</a>
                <a href="index.php?page=logout" class="btn-sair">Sair</a>
            <?php else: ?>
                <a href="index.php?page=login" class="btn-login">Entrar</a>
                <a href="index.php?page=registrar" class="btn-registrar">Criar Conta</a>
            <?php endif; ?>
        </div>
        <a href="https://wa.me/551982619876" target="_blank" class="btn-whatsapp">WhatsApp</a>
    </header>
    <main>