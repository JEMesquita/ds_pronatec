<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso Pronatec - Agenda do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light" style="min-height: 100vh;">
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 600px;">
            <h1 class="text-center mb-4">Agenda do Aluno</h1>
            <p class="text-center mb-4">Gerencie seus compromissos e atividades aqui.</p>
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title text-center">Adicionar Compromisso</h3>
                    <form action="agenda.php" method="post">
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                        </div>
                        <div class="mb-3">
                            <label for="data" class="form-label">Data</label>
                            <input type="date" class="form-control" id="data" name="data" required>
                        </div>
                        <div class="mb-3">
                            <label for="hora" class="form-label">Hora</label>
                            <input type="time" class="form-control" id="hora" name="hora" required>
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar Compromisso</button>
                    </form>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title text-center">Meus Compromissos</h3>
                    <ul class="list-group" id="lista-compromissos">
                        <!-- Compromissos serão listados aqui -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-center mt-4 mb-3">
            <p>&copy; 2025 Curso Pronatec - Todos os direitos reservados.</p>
            <p>Desenvolvido por João Mesquita</p>
        </div>
    </footer>
</body>
</html>