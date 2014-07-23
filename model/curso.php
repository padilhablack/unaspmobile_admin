<?php

require_once 'banco.php';

class Curso {

    private $id;
    private $nome;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function insereCurso() {
        $sql = mysql_query("INSERT INTO `curso`VALUES (NULL,'" . $this->getNome() . "')");

        if (!$sql) {
            die('Não foi possível inserir: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }

    public function seletCurso() {
        $sql = mysql_query("SELECT * FROM `curso` WHERE idCurso = " . $this->getId());
        $cont = 0;
        $array = "";
        while (($row = mysql_fetch_assoc($sql)) != NULL) {
            $array[$cont] = array(
                "idCurso" => $row['idCurso'],
                "nome" => $row['nome']
            );

            $cont ++;
        }
        return $array;
    }

    public function updateCurso() {
        $sql = mysql_query("UPDATE `curso` SET `nome`= '" . $this->getNome() . "' WHERE idCurso = '" . $this->getId() . "'");
        if (!$sql) {
            die('Não foi possível atualizar: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }

    public function deleteCurso() {
        $sql = mysql_query("DELETE FROM curso WHERE idCurso = '" . $this->getId() . "'");

        if (!$sql) {
            die('Não foi possível excluir: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }

}
