<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Buscar Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Buscar Aluno</h2>
    <form method="get" class="mb-4">
        <div class="input-group">
            <input type="text" name="busca" class="form-control" placeholder="Digite o nome ou matrícula" required>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
    <?php
    if (isset($_GET['busca'])) {
        $busca = "%{$_GET['busca']}%";
        $stmt = $conn->prepare("SELECT * FROM alunos WHERE nome LIKE ? OR matricula LIKE ?");
        $stmt->bind_param("ss", $busca, $busca);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            echo "<table class='table table-bordered'><thead class='table-light'><tr>
                <th>ID</th><th>Nome</th><th>Matrícula</th><th>Email</th><th>Telefone</th></tr></thead><tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["matricula"]."</td>
                      <td>".$row["email"]."</td><td>".$row["telefone"]."</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-warning'>Nenhum aluno encontrado.</div>";
        }
        $stmt->close();
    }
    ?>
    <a class="btn btn-secondary mt-3" href="index.php">Voltar à Home</a>
</div>
</body>
</html>