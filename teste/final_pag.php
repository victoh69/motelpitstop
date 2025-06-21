<?php
// final_pag.php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reserva Efetuada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        .success {
            color: #27ae60;
            font-size: 2em;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 25px;
            background: #27ae60;
            color: #fff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1em;
            margin-top: 20px;
            transition: background 0.2s;
        }
        .btn:hover {
            background: #219150;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success">&#10004; Reserva efetuada com sucesso!</div>
        <p>Obrigado por reservar conosco.<br>
        Em breve você receberá um e-mail com os detalhes da sua reserva.</p>
        <a href="inicio.php" class="btn">Voltar para a página inicial</a>
    </div>
</body>
</html>