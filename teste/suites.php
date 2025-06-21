<?php
    $motelName = "Motel PitStop";
    $slogan = "Conforto, Discrição e Prazer Garantido!";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $motelName; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1><?php echo $motelName; ?></h1>
        <p><?php echo $slogan; ?></p>
    </header>

    <nav style="width:100%; display:flex; justify-content:flex-end; background:#f5f5f5; padding:20px 0; position:fixed; top:0; left:0; z-index:1000;">
        <ul style="display:flex; gap:40px; margin:0 50px 0 0; list-style:none;">
             <li><a href="inicio.php" style="font-size:22px; text-decoration:none; color:#333;">Início</a></li>
            <li><a href="#suites" style="font-size:22px; text-decoration:none; color:#333;">Suítes</a></li>
            <li><a href="#SAC" style="font-size:22px; text-decoration:none; color:#333;">SAC</a></li>
        </ul>
    </nav>
    <div style="height:80px;"></div> <!-- Espaço para não cobrir o conteúdo -->

    <section id="suites">
        <h2>Nossas Suítes Principais</h2>
        <div class="suite">
            <img src="img/luxo.jpg" alt="Suíte Luxo" style="width:400px; height:260px; object-fit:cover; border-radius:12px; margin-bottom:15px;">
            <h3>Suíte Luxo</h3>
            <p>Banheira de hidromassagem, TV 4K, ar-condicionado e muito mais!</p>
            <a href="pagamento.php?suite=luxo">
                <button style="padding:10px 25px; font-size:16px; border-radius:6px; background:#007bff; color:#fff; border:none; cursor:pointer;">
                    Reservar e Pagar
                </button>
            </a>
        </div>
        <div class="suite">
            <img src="img/premium.jpg" alt="Suíte Master" style="width:400px; height:260px; object-fit:cover; border-radius:12px; margin-bottom:15px;">
            <h3>Suíte Master</h3>
            <p>Ambiente espaçoso, decoração temática e total privacidade.</p>
            <a href="pagamento.php?suite=master">
                <button style="padding:10px 25px; font-size:16px; border-radius:6px; background:#007bff; color:#fff; border:none; cursor:pointer;">
                    Reservar e Pagar
                </button>
            </a>
        </div>
        <div class="suite">
            <img src="img/romance.jpg" alt="Suíte Romântica" style="width:400px; height:260px; object-fit:cover; border-radius:12px; margin-bottom:15px;">
            <h3>Suíte Romântica</h3>
            <p>Clima intimista, iluminação especial, cama king size e decoração exclusiva.</p>
            <a href="pagamento.php?suite=romantica">
                <button style="padding:10px 25px; font-size:16px; border-radius:6px; background:#007bff; color:#fff; border:none; cursor:pointer;">
                    Reservar e Pagar
                </button>
            </a>
        </div>
        <div class="suite">
            <img src="img/spa.jpg" alt="Suíte Spa" style="width:400px; height:260px; object-fit:cover; border-radius:12px; margin-bottom:15px;">
            <h3>Suíte Spa</h3>
            <p>Jacuzzi privativa, sauna, ducha dupla e amenities premium.</p>
            <a href="pagamento.php?suite=spa">
                <button style="padding:10px 25px; font-size:16px; border-radius:6px; background:#007bff; color:#fff; border:none; cursor:pointer;">
                    Reservar e Pagar
                </button>  
            </a>
        </div>
        <div class="suite">
            <img src="img/executiva.jpg" alt="Suíte Executiva" style="width:400px; height:260px; object-fit:cover; border-radius:12px; margin-bottom:15px;">
            <h3>Suíte Executiva</h3>
            <p>Ambiente moderno, mesa de trabalho, Wi-Fi de alta velocidade e minibar.</p>
            <a href="pagamento.php?suite=executiva">
                <button style="padding:10px 25px;
                font-size:16px;
                border-radius:6px;
                background:#007bff;
                color:#fff;
                border:none;
                cursor:pointer;">
                    Reservar e Pagar
                </button>
            </a>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $motelName; ?> - Todos os direitos reservados.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
