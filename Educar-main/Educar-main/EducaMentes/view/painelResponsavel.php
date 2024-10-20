<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Informativo</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #006D7C;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #2F838B;
    padding: 20px;
    border-radius: 10px;
    width: 400px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

.painel {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 10px;
    border-radius: 5px;
    color: black;
}

button {
    background-color: #004D61;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 5px;
    width: 200px;
}

button.warning {
    background-color: #FF3B30;
}

button.risk {
    background-color: #FF9500;
}

button.absence {
    background-color: #FFCC00;
}

button:hover {
    opacity: 0.8;
}

.mais-recursos {
    background-color: #0F9D58;
    margin-top: 20px;
    width: 150px;
    padding: 10px;
}

.mais-recursos:hover {
    background-color: #0B7B43;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Painel informativo:</h2>
        <div class="painel">
            <div class="item">
                <button>RESUMO DA REUNIÃO!</button>
                <img src="https://img.icons8.com/ios/50/meeting.png" alt="Reunião">
            </div>
            <div class="item">
                <button class="warning">ADVERTÊNCIA!</button>
                <img src="https://img.icons8.com/ios/50/error.png" alt="Advertência">
            </div>
            <div class="item">
                <button class="risk">RISCO DE REPROVAÇÃO!</button>
                <img src="https://img.icons8.com/ios/50/no-entry.png" alt="Risco de Reprovação">
            </div>
            <div class="item">
                <button class="absence">AUSÊNCIA NA AULA!</button>
                <img src="https://img.icons8.com/ios/50/eye.png" alt="Ausência">
            </div>
        </div>
        <div class="recursos">
            <button class="mais-recursos">MAIS RECURSOS</button>
        </div>
    </div>
</body>
</html>
