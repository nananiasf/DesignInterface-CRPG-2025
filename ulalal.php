<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFPR - Resultado do Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Cabeçalho -->
    <header>
        <h2>Cantores Topzeras</h2>
        <nav>
            <a href="index.html">Início</a>
            <a href="carros.html">Carros</a>
            <a href="ego.html">Artistas</a>
            <a href="aura.html">Compartilhe sua opinião</a>
        </nav>
    </header>

    <!-- Conteúdo principal -->
    <main>
        <h1>Dados Recebidos</h1>
        <div class="contato-form">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST["nome"]) . "</p>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";

                if (!empty($_POST["Comentário"])) {
                    echo "<p><strong>Comentário:</strong> " . nl2br(htmlspecialchars($_POST["Comentário"])) . "</p>";
                }

                // Exibe os outros campos que o aluno adicionar
                foreach ($_POST as $campo => $valor) {
                    if (!in_array($campo, ["nome", "email", "Comentário"])) {
                        echo "<p><strong>" . ucfirst($campo) . ":</strong> " . htmlspecialchars($valor) . "</p>";
                    }
                }
            } else {
                echo "<p>Nenhum dado foi enviado.</p>";
            }
            ?>
        </div>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2025  - Todos os direitos reservados</p>
    </footer>

</body>

</html>
