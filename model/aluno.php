<?php

require_once 'banco.php';

class aluno {

    private $id;
    private $nome;
    private $senha;

    public function getId() {
        return (INT) $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function insereAluno() {
        $sql = mysql_query("INSERT INTO aluno (`idAluno`, `nome`, `senha`) VALUES ('" . $this->getId() . "', '" . $this->getNome() . "', '" . $this->getSenha() . "');");

        if ($sql) {
            return true;
        } else {
            return false;
        }
    }

    public function selectAluno() {
        $sql = mysql_query("SELECT * FROM aluno ORDER BY nome");
        $array = "";
        $cont = 0;

        while ($resultado = mysql_fetch_assoc($sql)) {
            $array[$cont] = array(
                "idAluno" => $resultado['idAluno'],
                "nome" => $resultado['nome']
            );
            $cont++;
        }

        return $array;
    }

    public function updateAluno() {

        $sql = mysql_query("UPDATE `aluno` SET "
                . " nome ='" . $this->getNome() . "',"
                . " senha = '" . $this->getSenha() . "' "
                . "WHERE idAluno = " . $this->getId());

        if ($sql) {

            return true;
        } else {

            return false;
        }
    }

    public function deleteAluno() {
        $sql = mysql_query("DELETE FROM  aluno WHERE idAluno = ".$this->getId());

        if ($sql) {

            return true;
        } else {

            return false;
        }
    }

}
