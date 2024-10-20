<?php
// Simulação de autenticação do usuário (pai)
$usuario_autenticado = true;
$tipo_usuario = "pai"; // Pode ser "pai", "professor" ou "administrador"

// Simulação de dados
$informacoes_estudante = [
    'nome' => 'João Silva',
    'turma' => '3º Ano B',
    'notas' => [
        'Matemática' => '8.5',
        'Português' => '9.0',
        'Ciências' => '8.0'
    ],
    'observacoes' => 'João está progredindo bem, mas precisa melhorar sua participação em sala de aula.'
];

$informacoes_turma = [
    'mensagem' => 'A prova de Ciências será na próxima quarta-feira.',
    'evento' => 'Visita ao museu na sexta-feira.'
];

$informacoes_escola = [
    'comunicado' => 'A escola estará fechada na próxima semana para manutenção.',
    'aviso' => 'O período de matrículas para o próximo semestre já está aberto.'
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Informativo</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Definição básica */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Container principal */
.container {
    background-color: #ffffff;
    width: 80%;
    max-width: 900px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

/* Cabeçalho */
header {
    background-color: #4CAF50;
    color: #ffffff;
    padding: 20px;
    text-align: center;
}

/* Seções */
section {
    padding: 20px;
    border-bottom: 1px solid #cccccc;
}

section h2 {
    margin-top: 0;
    color: #333333;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    background-color: #f9f9f9;
    margin: 5px 0;
    padding: 10px;
    border: 1px solid #cccccc;
    border-radius: 4px;
}

/* Estilo para o texto */
p {
    color: #555555;
    line-height: 1.6;
}

/* Última seção sem borda */
section:last-child {
    border-bottom: none;
}

    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Painel Informativo - Escola Exemplo</h1>
        </header>
        
        <?php if ($usuario_autenticado && $tipo_usuario == "pai"): ?>
            <section class="informacoes-estudante">
                <h2>Informações do Estudante</h2>
                <p><strong>Nome:</strong> <?= $informacoes_estudante['nome'] ?></p>
                <p><strong>Turma:</strong> <?= $informacoes_estudante['turma'] ?></p>
                <h3>Notas:</h3>
                <ul>
                    <?php foreach ($informacoes_estudante['notas'] as $disciplina => $nota): ?>
                        <li><?= $disciplina ?>: <?= $nota ?></li>
                    <?php endforeach; ?>
                </ul>
                <p><strong>Observações:</strong> <?= $informacoes_estudante['observacoes'] ?></p>
            </section>
            
            <section class="informacoes-turma">
                <h2>Informações da Turma</h2>
                <p><strong>Mensagem:</strong> <?= $informacoes_turma['mensagem'] ?></p>
                <p><strong>Evento:</strong> <?= $informacoes_turma['evento'] ?></p>
            </section>
            
            <section class="informacoes-escola">
                <h2>Informações da Escola</h2>
                <p><strong>Comunicado:</strong> <?= $informacoes_escola['comunicado'] ?></p>
                <p><strong>Aviso:</strong> <?= $informacoes_escola['aviso'] ?></p>
            </section>
        <?php else: ?>
            <p>Você precisa estar autenticado como pai para visualizar esta página.</p>
        <?php endif; ?>
    </div>
</body>
</html>
