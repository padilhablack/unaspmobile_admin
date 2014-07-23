<?php

require_once 'banco.php';

class Disciplina {

    private $id;
    private $nome;
    private $idProfessor;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdProfessor() {
        return $this->idProfessor;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdProfessor($idProfessor) {
        $this->idProfessor = $idProfessor;
    }

    public function insereDisciplina() {
        $sql = mysql_query("INSERT INTO `disciplina`VALUES (NULL,'" . $this->getNome() . "','" . $this->getIdProfessor() . "')");

        if (!$sql) {
            die('Não foi possível inserir: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }

    public function seletCurso() {
        $sql = mysql_query("SELECT * FROM `disciplina` WHERE idDisciplina = " . $this->getId());
        $cont = 0;
        $array = "";
        while (($row = mysql_fetch_assoc($sql)) != NULL) {
            $array[$cont] = array(
                "idDisciplina" => $row['idDisciplina'],
                "nome" => $row['nome'],
                "idProfessor" => $row['idProfessor']
            );

            $cont ++;
        }
        return $array;
    }

    public function updateCurso() {
        $sql = mysql_query("UPDATE `disciplina` SET `nome`= '" . $this->getNome() . "', idProfessor = '".$this->getIdProfessor()."'  WHERE idDisciplina = '" . $this->getId() . "'");
        if (!$sql) {
            die('Não foi possível atualizar: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }

    public function deleteCurso() {
        $sql = mysql_query("DELETE FROM disciplina WHERE idDisciplina = '" . $this->getId() . "'");

        if (!$sql) {
            die('Não foi possível excluir: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }

}
