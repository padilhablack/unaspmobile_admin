<?php

require 'banco.php';

class Aulas {

    private $id;
    private $data;
    private $descricao;
    private $presenca;
    private $falta;
    private $aluno;
    private $curso;
    private $turma;
    private $periodo;
    private $disciplina;
    private $professor;

    public function getId() {
        return $this->id;
    }

    public function getData() {
        return $this->data;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPresenca() {
        return $this->presenca;
    }

    public function getFalta() {
        return $this->falta;
    }

    public function getAluno() {
        return $this->aluno;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getTurma() {
        return $this->turma;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function getDisciplina() {
        return $this->disciplina;
    }

    public function getProfessor() {
        return $this->professor;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPresenca($presenca) {
        $this->presenca = $presenca;
    }

    public function setFalta($falta) {
        $this->falta = $falta;
    }

    public function setAluno($aluno) {
        $this->aluno = $aluno;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function setTurma($turma) {
        $this->turma = $turma;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function setDisciplina($disciplina) {
        $this->disciplina = $disciplina;
    }

    public function setProfessor($professor) {
        $this->professor = $professor;
    }

    public function insereAula() {

        $sql = mysql_query("INSERT INTO `aulas` VALUES ('','" . $this->getData() . "','"
                . $this->getDescricao() . "','"
                . $this->getPresenca() . "','"
                . $this->getFalta() . "','"
                . $this->getAluno() . "','"
                . $this->getCurso() . "','"
                . $this->getTurma() . "','"
                . $this->getPeriodo() . "','"
                . $this->getDisciplina() . "','"
                . $this->getProfessor() . "')");

        if (!$sql) {
            die('Não foi possível Inserir: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }

    public function selectAula($valor) {
        $array = "";
        $cont = 0;
        $sql = "";
        if (@$valor == 'all') {
            $sql = mysql_query("SELECT * FROM `aulas` WHERE idAulas = " . $this->getId());
            while (($row = mysql_fetch_assoc($sql)) != NULL) {
                $array[$cont] = array(
                    "idAulas" => $row['idAulas'],
                    "data" => $row['data'],
                    "descricao" => $row['descricao'],
                    "presenca" => $row['presenca'],
                    "falta" => $row['falta'],
                    "idAluno" => $row['idAluno'],
                    "idCurso" => $row['idCurso'],
                    "idTurma" => $row['idTurma'],
                    "idPeriodo" => $row['idPeriodo'],
                    "idDisciplina" => $row['idDisciplina'],
                    "idProfessor" => $row['idProfessor']
                );
                $cont++;
            }
        } else {
            $sql = mysql_query("select descricao,presenca,falta, DATE_FORMAT( `data` , '%d/%c/%Y' ) AS data from aulas where
                idAluno = '" . $this->getAluno() . "' and
                idCurso = '" . $this->getCurso() . "' and 
                idTurma = '" . $this->getTurma() . "' and 
                idPeriodo = '" . $this->getPeriodo() . "' and 
                idDisciplina = '" . $this->getDisciplina() . "'
                order by 'data'");

            while (($row = mysql_fetch_assoc($sql)) != NULL) {
                $array[$cont] = array(
                    "data" => $row['data'],
                    "descricao" => $row['descricao'],
                    "presenca" => $row['presenca'],
                    "falta" => $row['falta']
                );
                $cont++;
            }
        }
        return $array;
    }
    public function updateAula() {
        $sql = mysql_query("UPDATE  aulas  SET `data` = '" . $this->getData() . "',"
                . "`descricao`='" . $this->getDescricao() . "',"
                . "`presenca`= '" . $this->getPresenca() . "',"
                . "`falta`='" . $this->getFalta() . "',"
                . "`idAluno`= '" . $this->getAluno() . "',"
                . "`idCurso`='" . $this->getCurso() . "',"
                . "`idTurma`='" . $this->getTurma() . "',"
                . "`idPeriodo`='" . $this->getPeriodo() . "',"
                . "`idDisciplina`= '" . $this->getDisciplina() . "',"
                . "`idProfessor`= '" . $this->getProfessor()
                . "' WHERE idAulas = '" . $this->getId() . "'");


        if (!$sql) {
            die('Não foi possível atualizar: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }

    public function deleteAula() {
        $sql = mysql_query("DELETE FROM `aulas` WHERE idAulas = '" . $this->getId() . "'");

        if (!$sql) {
            die('Não foi possível excluir: ' . mysql_error());
            return false;
        } else {
            return true;
        }
    }

}
