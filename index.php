<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso Pronatec - Cadastro de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="bg-light" style="min-height: 100vh;">
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 600px;">
            <img src="pronatec.jpg" alt="Logo do Curso Pronatec" class="img-fluid mx-auto d-block mb-4" style="max-width: 420px;">
        </div>
        <div>
            <h1 class="text-center mb-4">Curso Pronatec</h1>
            <p class="text-center mb-4">Bem-vindo ao sistema de cadastro de alunos do curso Pronatec. Utilize o menu abaixo para gerenciar os cadastros.</p>
            <div class="alert alert-info" role="alert">
                <strong>Instruções:</strong> Selecione uma das opções do menu para cadastrar, editar, buscar ou listar alunos.
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Menu</h3>
                    <ul class="list-group">
                        <li class="list-group-item text-center"><a href="inserir.php">Cadastrar Aluno</a></li>
                        <li class="list-group-item text-center"><a href="editar.php">Alterar Dados de Aluno</a></li>
                        <li class="list-group-item text-center"><a href="buscar.php">Localizar Cadastro</a></li>
                        <li class="list-group-item text-center"><a href="listar.php">Listar e Excluir Alunos</a></li>
                        <li class="list-group-item text-center"><a href="agenda.php">Agenda do Alunos</a></li>
                        <li class="list-group-item text-center"><a href="biblioteca.php">Biblioteca On-line</a></li>
                    </ul>
                </div>
            </div>
            <div class="alert alert-warning" role="alert">
                <strong>Atenção:</strong> Certifique-se de que os dados inseridos estão corretos antes de salvar.
            </div>
            <div class="alert alert-success" role="alert">
                <strong>Sucesso!</strong> O sistema foi desenvolvido como parte do curso Pronatec e está pronto para uso.
            </div>
            <div class="alert alert-danger" role="alert">
                <strong>Erro!</strong> Caso encontre algum problema, entre em contato com o suporte técnico.
            </div>
            <div class="alert alert-secondary" role="alert">
                <strong>Informação:</strong> Este sistema é uma demonstração e não deve ser utilizado para fins comerciais.
            </div>
            <div class="alert alert-dark" role="alert">
                <strong>Nota:</strong> O sistema foi desenvolvido utilizando PHP e MySQL, e é compatível com a maioria dos navegadores modernos.
            </div>
            <div class="alert alert-light" role="alert">
                <strong>Observação:</strong> Para mais informações sobre o curso Pronatec, visite o site oficial.
            </div>
        </div>
    </div>
    <footer>
        <div class="text-center mt-4">
        <p>&copy; 2025 Curso Pronatec - Todos os direitos reservados.</p>
        <p>Desenvolvido por João Mesquita</p>
        </div>
    </footer>
</body>
</html>
