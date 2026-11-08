<section class="page-header">
    <div class="container text-center">
        <h1>Fale Connosco</h1>
        <p>Dúvidas sobre a Inteligência Artificial, treinos ou o futuro Modo PRO? A nossa equipa está pronta para ajudar.</p>
    </div>
</section>

<section class="contact-container container">
    <!-- Informações de Contacto Direto -->
    <div class="contact-info">
        <h2>Suporte Rápido</h2>
        <p>Precisa de ajuda imediata com a sua conta? Utilize os canais abaixo.</p>
        
        <div class="info-item">
            <span class="icon">
        <img src="assets/img/email.png" alt="Ícone de E-mail" class="icon-img"></span>
            <div>
                <strong>E-mail de Suporte</strong>
                <p>ajudaMTgym@gmail.com</p>
            </div>
        </div>
        
        <div class="info-item">
            <span class="icon">
        <img src="assets/img/zapzap.png" alt="Ícone de WhatsApp" class="icon-img"></span>
            <div>
                <strong>WhatsApp (Apenas Mensagens)</strong>
                <p>+55 19 98261-9876</p>
            </div>
        </div>

        <div class="info-item">
             <span class="icon">
        <img src="assets/img/ING.png" alt="Ícone de Instagram" class="icon-img"></span>
            <div>
                <strong>Instagram
                </strong>
                <p>@mvinik14</p>
            </div>
        </div>
    </div>

    <!-- Formulário de Mensagem -->
    <div class="contact-form-box">
        <h2>Envie uma Mensagem</h2>
        
        <?php
        // Simulação de envio de formulário
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<div class="msg-sucesso">Mensagem enviada com sucesso! Responderemos em breve.</div>';
        }
        ?>

        <form action="index.php?page=contato" method="POST" class="contact-form">
            <div class="input-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="assunto">Assunto</label>
                <select id="assunto" name="assunto" required>
                    <option value="">Selecione uma opção...</option>
                    <option value="duvida">Dúvida sobre os Planos</option>
                    <option value="suporte">Problema Técnico / App</option>
                    <option value="parceria">Parcerias e Negócios</option>
                </select>
            </div>
            <div class="input-group">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn-cta">Enviar Mensagem</button>
        </form>
    </div>
</section>