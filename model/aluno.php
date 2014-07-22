<?php

class aluno {
    private $id;
    private $nome;
    private $senha;
    
    public function getId() {
        return $this->id;
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

  public function selectAluno() {
        $sql = "SELECT * FROM aluno ORDER BY nome";
        $query = mysql_query($sql);

        $array = array();
        $cont = 0;

        while ($resultado = mysql_fetch_assoc($query)) {
            $array[$cont] = array(
                "idAluno" => $resultado['idAluno'],
                "nome" => $resultado['nome']
            );
            $cont++;
        }

        return $array;
    }
    
       public function updateAluno() {

        $sql = "UPDATE `aluno` SET "
                . " nome ='".$this->getNome()."',"
                . " senha = '".$this->getSenha()."' "
                . "WHERE idAluno = ".$this->getId()."";

        if (mysql_query($sql)) {

            return true;
        } else {

            return false;
        }
    }
    
    public function deleteAluno(){
        $sql = "DELETE FROM  aluno  WHERE "
             . "WHERE idAluno = ".$this->getId()."";
    }
    
}
