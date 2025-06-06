<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Cadastrar Aluno</h2>
    <form method="post">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="mb-3">
            <label>Matrícula</label>
            <input type="text" class="form-control" name="matricula" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" class="form-control" name="telefone">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = trim($_POST['nome']);
        $matricula = trim($_POST['matricula']);
        $email = trim($_POST['email']);
        $telefone = trim($_POST['telefone']);
        $stmt = $conn->prepare("INSERT INTO alunos (nome, matricula, email, telefone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $matricula, $email, $telefone);
        if ($stmt->execute()) {
            echo "<div class='alert alert-success mt-3'>Aluno cadastrado com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Erro: " . $conn->error . "</div>";
        }
        $stmt->close();
    }
    ?>
    <a class="btn btn-secondary mt-3" href="index.php">Voltar à Home</a>
</div>
</body>
</html>