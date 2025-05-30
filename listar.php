<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar e Excluir Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Lista de Alunos</h2>
    <?php
    // Exclusão segura e redirecionamento para evitar exclusão duplicada ao atualizar
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if ($id > 0) {
            $stmt = $conn->prepare("DELETE FROM alunos WHERE id = ?");
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                echo "<div class='alert alert-success'>Aluno excluído com sucesso!</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro ao excluir: " . $conn->error . "</div>";
            }
            $stmt->close();
            // Redireciona para evitar exclusão duplicada ao atualizar a página
            echo "<script>window.location='listar.php';</script>";
            exit;
        }
    }

    $sql = "SELECT * FROM alunos ORDER BY nome";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        echo "<table class='table table-bordered'><thead class='table-light'><tr>
            <th>ID</th><th>Nome</th><th>Matrícula</th><th>Email</th><th>Telefone</th><th>Ações</th></tr></thead><tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".htmlspecialchars($row["id"])."</td>
                    <td>".htmlspecialchars($row["nome"])."</td>
                    <td>".htmlspecialchars($row["matricula"])."</td>
                    <td>".htmlspecialchars($row["email"])."</td>
                    <td>".htmlspecialchars($row["telefone"])."</td>
                    <td>
                        <a class='btn btn-danger btn-sm' href='listar.php?id=".$row["id"]."' onclick='return confirm(\"Deseja realmente excluir este aluno?\")'>Excluir</a>
                    </td>
                  </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<div class='alert alert-warning'>Nenhum aluno cadastrado.</div>";
    }
    ?>
    <a class="btn btn-secondary mt-3" href="index.php">Voltar à Home</a>
</div>
</body>
</html>