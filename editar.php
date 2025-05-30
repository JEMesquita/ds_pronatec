<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Editar Aluno</h2>
    <form method="get" class="mb-4">
        <div class="input-group">
            <input type="text" name="matricula" class="form-control" placeholder="Informe a matrícula" required>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
    <?php
    if (isset($_GET['matricula'])) {
        $matricula = trim($_GET['matricula']);
        $stmt = $conn->prepare("SELECT * FROM alunos WHERE matricula = ?");
        $stmt->bind_param("s", $matricula);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="<?php echo htmlspecialchars($row['nome']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($row['email']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telefone" class="form-control" value="<?php echo htmlspecialchars($row['telefone']); ?>">
        </div>
        <button type="submit" name="atualizar" class="btn btn-success">Atualizar</button>
    </form>
    <?php
        } else {
            echo "<div class='alert alert-danger'>Aluno não encontrado.</div>";
        }
        $stmt->close();
    }
    if (isset($_POST['atualizar'])) {
        $id = $_POST['id'];
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $telefone = trim($_POST['telefone']);
        $stmt = $conn->prepare("UPDATE alunos SET nome=?, email=?, telefone=? WHERE id=?");
        $stmt->bind_param("sssi", $nome, $email, $telefone, $id);
        if ($stmt->execute()) {
            echo "<div class='alert alert-success mt-3'>Dados atualizados com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Erro na atualização: " . $conn->error . "</div>";
        }
        $stmt->close();
    }
    ?>
    <a class="btn btn-secondary mt-3" href="index.php">Voltar à Home</a>
</div>
</body>
</html>