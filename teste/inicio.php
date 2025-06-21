<?php
    $motelName = "Motel PitStop";
    $slogan = "Conforto, Discrição e Prazer Garantido!";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $motelName; ?> - Início</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1><?php echo $motelName; ?></h1>
        <p><?php echo $slogan; ?></p>
    </header>

    <nav style="width:100%; display:flex; justify-content:flex-end; background:#f5f5f5; padding:20px 0;">
        <ul style="display:flex; gap:40px; margin:0 50px 0 0; list-style:none;">
            <li><a href="inicio.php" style="font-size:22px; text-decoration:none; color:#333;">Início</a></li>
            <li><a href="suites.php" style="font-size:22px; text-decoration:none; color:#333;">Suítes</a></li>
            <li><a href="SAC.php" style="font-size:22px; text-decoration:none; color:#333;">SAC</a></li>
        </ul>
    </nav>

    <section style="text-align:center; margin:60px 0;">
        <h2>Bem-vindo ao <?php echo $motelName; ?></h2>
        <p style="font-size:20px; max-width:600px; margin:20px auto;">
            Descubra o melhor em conforto, privacidade e experiências inesquecíveis. Conheça nossas suítes exclusivas e faça já sua reserva!
        </p>
        <a href="suites.php">
            <button style="padding:15px 35px; font-size:20px; border-radius:8px; background:#007bff; color:#fff; border:none; cursor:pointer;">
                Ver Suítes
            </button>
        </a>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $motelName; ?> - Todos os direitos reservados.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>