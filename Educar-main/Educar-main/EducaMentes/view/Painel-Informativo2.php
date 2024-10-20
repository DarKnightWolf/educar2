<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Painel Informativo | Admin</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: sans-serif;
            background-color: #F2E5BF;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #F2E5BF;
        }
        .info-section {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        h1, h2 {
            text-align: center;
            color: #302c2c;
        }
        p {
            text-align: justify;
            color: #333;
        }
        .btn-custom {
            background-color: #257180;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: block;
            margin: 20px auto;
            width: 200px;
            text-align: center;
        }
        .btn-custom:hover {
            background-color: darkslategrey;
        }
        .alert-success {
            background-color: #302c2c;
            color: white;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
            display: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand custom-brand" href="#">EducaMentes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <a href="sair.php" class="btn custom-btn">Sair</a>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <header class="text-center mb-4">
            <h1>Painel Informativo</h1>
            <hr>
        </header>
        
        <div class="info-section">
            <h2>Informações Gerais</h2>
            <p>Aqui você pode gerenciar as informações importantes relacionadas ao sistema. Utilize os botões abaixo para acessar cada funcionalidade e realizar as ações necessárias.</p>
        </div>

        <div class="info-section">
            <h2>Status do Sistema</h2>
            <p>O sistema está funcionando normalmente. Todos os serviços estão operando dentro dos parâmetros esperados e não há problemas detectados.</p>
        </div>

        <div class="info-section">
            <h2>Últimas Atualizações</h2>
            <p>Recentemente, o sistema foi atualizado com as seguintes funcionalidades e melhorias:</p>
            <ul>
                <li>Correção de bugs na interface de usuário.</li>
                <li>Melhoria no desempenho das consultas ao banco de dados.</li>
                <li>Adição de novas opções de personalização para os administradores.</li>
            </ul>
        </div>

        <a href="#" class="btn btn-custom">Ver Detalhes</a>

        <div class="alert-success" id="successMessage">
            Ação realizada com sucesso!
        </div>
    </div>

    <script>
        // Exemplo de funcionalidade para exibir mensagem de sucesso
        document.querySelector('.btn-custom').addEventListener('click', function() {
            const message = document.getElementById('successMessage');
            message.style.display = 'block';
            setTimeout(function() {
                message.style.display = 'none';
            }, 3000);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
