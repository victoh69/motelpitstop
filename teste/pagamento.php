<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "motelpitstop");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recebe a suíte via GET
$suite = isset($_GET['suite']) ? $_GET['suite'] : '';
$horas = isset($_GET['horas']) ? intval($_GET['horas']) : 1;
$pessoas = isset($_GET['pessoas']) ? intval($_GET['pessoas']) : 2;

// Definindo valor base por hora de cada suíte
$valorHora = 0;
switch ($suite) {
    case 'luxo':
        $valorHora = 80.00;
        break;
    case 'master':
        $valorHora = 120.00;
        break;
    case 'romantica':
        $valorHora = 100.00;
        break;
    case 'spa':
        $valorHora = 150.00;
        break;
    case 'executiva':
        $valorHora = 90.00;
        break;
    default:
        $valorHora = 0.00;
}

$valorPadrao = number_format($valorHora * $horas, 2, '.', '');

// Processa o formulário de pagamento
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $valor = floatval($_POST['valor']);
    $metodo = $conn->real_escape_string($_POST['metodo']);
    $suite = $conn->real_escape_string($_POST['suite']);
    $horas = intval($_POST['horas']);
    $pessoas = intval($_POST['pessoas']);

    $sql = "INSERT INTO pagamentos (nome, email, valor, metodo, suite, horas, pessoas) VALUES ('$nome', '$email', $valor, '$metodo', '$suite', $horas, $pessoas)";
    if ($conn->query($sql) === TRUE) {
        // Redireciona para a página final após o pagamento
        header("Location: final_pag.php");
        exit;
    } else {
        $mensagem = "Erro ao registrar pagamento: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagamento</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Atualiza o valor automaticamente ao mudar as horas
        function atualizarValor() {
            var valorHora = <?php echo json_encode($valorHora); ?>;
            var horas = document.getElementsByName('horas')[0].value;
            var valorTotal = (valorHora * horas).toFixed(2);
            document.getElementsByName('valor')[0].value = valorTotal;
        }
    </script>
</head>
<body>
    <header>
        <h1>Pagamento</h1>
    </header>
    <nav style="width:100%; display:flex; justify-content:flex-end; background:#f5f5f5; padding:20px 0; position:fixed; top:0; left:0; z-index:1000;">
        <ul style="display:flex; gap:40px; margin:0 50px 0 0; list-style:none;">
            <li><a href="inicio.php" style="font-size:22px; text-decoration:none; color:#333;">Início</a></li>
        </ul>
    </nav>
    <div style="height:80px;"></div> <!-- Espaço para não cobrir o conteúdo -->
    <section>
    <?php if (isset($mensagem)) echo "<p>$mensagem</p>"; ?>
    <form method="post" action="">
        <input type="hidden" name="suite" value="<?php echo htmlspecialchars($suite); ?>">
        <label>Nome:
            <input type="text" name="nome" required>
        </label><br><br>
        <label>E-mail:
            <input type="email" name="email" required>
        </label><br><br>
        <label>Suíte:
            <input type="text" value="<?php echo htmlspecialchars(ucfirst($suite)); ?>" disabled>
        </label><br><br>
        <label>Quantas horas?
            <input type="number" name="horas" min="1" max="24" required value="<?php echo $horas; ?>" onchange="atualizarValor()">
        </label><br><br>
        <label>Quantas pessoas?
            <input type="number" name="pessoas" min="1" max="6" required value="<?php echo $pessoas; ?>">
        </label><br><br>
        <label>Valor total:
            <input type="number" name="valor" step="0.01" required value="<?php echo $valorPadrao; ?>" readonly>
        </label><br><br>
        <label>Método de Pagamento:
            <select name="metodo" required>
                <option value="cartao">Cartão</option>
                <option value="boleto">Boleto</option>
                <option value="pix">PIX</option>
            </select>
        </label><br><br>
        <button type="submit">Reservar</button>
    </form>
    </section>
</body>
</html>