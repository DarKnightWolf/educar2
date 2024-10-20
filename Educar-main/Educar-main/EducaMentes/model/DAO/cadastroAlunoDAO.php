<?php

require_once 'Conexao.php';
require_once '../model/DTO/CadastroAlunoDTO.php'; // Alterado para CadastroAlunoDTO

class CadastroAlunoDAO { // Alterado para CadastroAlunoDAO
    // Estabelecer conexão com o banco de dados
    public $pdo = null;

    // Construtor da classe que estabelece a conexão com o banco de dados no momento da criação do objeto DAO
    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function cadastroAluno(CadastroAlunoDTO $CadastroAlunoDTO) { // Alterado para cadastroAluno
        try {
            // Escrever a operação que o software vai realizar no banco de dados
            $sql = "INSERT INTO cadastroaluno (nome, matricula, email, senha) VALUES (?, ?, ?, ?)"; // Alterado para incluir matrícula
            $stmt = $this->pdo->prepare($sql);

            $nome = $CadastroAlunoDTO->getNome();
            $matricula = $CadastroAlunoDTO->getMatricula(); // Obtendo matrícula
            $email = $CadastroAlunoDTO->getEmail();
            $senha = $CadastroAlunoDTO->getSenha();

            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $matricula); // Ligando o valor da matrícula
            $stmt->bindValue(3, $email);
            $stmt->bindValue(4, $senha);
            
            $retorno = $stmt->execute();

            return $retorno;

        } catch (PDOException $exe) {
            echo $exe->getMessage();
        }
    }
}
?>
