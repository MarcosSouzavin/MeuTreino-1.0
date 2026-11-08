<section class="dashboard-header">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1>Olá, <?php echo htmlspecialchars($_SESSION['nome_usuario']); ?>! ⚡</h1>
            <p>Foco de hoje: <strong>Hipertrofia - Membros Inferiores</strong></p>
        </div>
        <a href="index.php?page=logout" class="btn-logout">Terminar Sessão</a>
    </div>
</section>

<section class="dashboard-grid container">

    <div class="dash-card">
        <h3>🔥 Treino do Dia</h3>
        <ul class="treino-lista">
            <li>Agachamento Livre - 4x10</li>
            <li>Leg Press 45º - 4x12</li>
            <li>Cadeira Extensora - 3x15 (Falha)</li>
        </ul>
        <button class="btn-cta btn-small">Iniciar Treino</button>
    </div>

    <div class="dash-card highlight-ai">
        <h3>🧠 Ajuste da IA (Nutrição)</h3>
        <p>Notámos um aumento no seu gasto calórico esta semana. Sugerimos adicionar <strong>150 kcal</strong> em carboidratos no pré-treino.</p>
        <a href="#">Atualizar Dieta</a>
    </div>


    <div class="dash-card">
        <h3>📈 A Sua Evolução</h3>
        <p>Peso Atual: 78.5 kg (-1.2 kg este mês)</p>
        <div class="progress-bar">
            <div class="progress" style="width: 65%;"></div>
        </div>
        <p style="font-size: 0.8rem; margin-top: 5px;">65% rumo ao objetivo de 75 kg</p>
    </div>
</section>