<?php
class CadastroAlunoDTO {
    private $id_Aluno;
    private $nome;
    private $matricula; // Adicionado
    private $email;
    private $senha;

    public function setId_Aluno($id_Aluno) { 
        $this->id_Aluno = $id_Aluno;
    }

    public function getId_Aluno() { 
        return $this->id_Aluno;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setMatricula($matricula) { // Método para setar matrícula
        $this->matricula = $matricula;
    }

    public function getMatricula() { // Método para obter matrícula
        return $this->matricula;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha() {
        return $this->senha;
    }
}
?>
