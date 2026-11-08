<?php

session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


$allowed_pages = ['home', 'modalidades', 'planos', 'contato', 'login', 'registrar', 'dashboard', 'logout'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home'; 
}

if ($page === 'dashboard' && !isset($_SESSION['logado'])) {
    header('Location: index.php?page=login');
    exit;
}

require_once 'includes/header.php';
require_once "pages/{$page}.php";
require_once 'includes/footer.php';
?>