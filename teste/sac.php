<?php
// sac.php - Página de SAC para Motel Pitstop

// Processa o formulário quando enviado
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $assunto = htmlspecialchars($_POST['assunto'] ?? '');
    $mensagem_usuario = htmlspecialchars($_POST['mensagem'] ?? '');

    // Aqui você pode enviar o e-mail ou salvar no banco de dados
    // Exemplo: mail('contato@motelpitstop.com', $assunto, $mensagem_usuario);

    $mensagem = 'Sua mensagem foi enviada com sucesso! Em breve entraremos em contato.';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>SAC - Motel Pitstop</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; margin: 0; }
        .menu {
            width: 100%;
            background: #b71c1c;
            padding: 16px 0;
            text-align: right;
            box-sizing: border-box;
        }
        .menu a {
            color: #fff;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            margin-right: 40px;
            padding: 8px 18px;
            border-radius: 6px;
            transition: background 0.2s;
        }
        .menu a:hover {
            background: #fff;
            color: #b71c1c;
        }
        .container { max-width: 500px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px #ccc; }
        h1 { color: #b71c1c; }
        label { display: block; margin-top: 15px; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; border-radius: 4px; border: 1px solid #ccc; }
        button { margin-top: 20px; background: #b71c1c; color: #fff; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
        .mensagem { margin-top: 20px; color: green; }
    </style>
</head>
<body>
    <nav class="menu">
        <a href="inicio.php">Início</a>
    </nav>
    <div class="container">
        <h1>Fale Conosco - SAC Motel Pitstop</h1>
        <p>Envie sua dúvida, sugestão ou reclamação. Retornaremos o mais breve possível.</p>
        <?php if ($mensagem): ?>
            <div class="mensagem"><?= $mensagem ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>