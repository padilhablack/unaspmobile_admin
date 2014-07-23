<?php

require_once 'banco.php';

class Emprestimo {

    private $idemprestimo;
    private $data_saida;
    private $data_deovolucao;
    private $idmaterial;
    private $idaluno;

    public function getIdemprestimo() {
        return (int)$this->idemprestimo;
    }

    public function getData_saida() {
        return $this->data_saida;
    }

    public function getData_deovolucao() {
        return $this->data_deovolucao;
    }

    public function getIdmaterial() {
        return $this->idmaterial;
    }

    public function getIdaluno() {
        return $this->idaluno;
    }

    public function setIdemprestimo($idemprestimo) {
        $this->idemprestimo = $idemprestimo;
    }

    public function setData_saida($data_saida) {
        $this->data_saida = $data_saida;
    }

    public function setData_deovolucao($data_deovolucao) {
        $this->data_deovolucao = $data_deovolucao;
    }

    public function setIdmaterial($idmaterial) {
        $this->idmaterial = $idmaterial;
    }

    public function setIdaluno($idaluno) {
        $this->idaluno = $idaluno;
    }

    public function inserirEmprestimo() {
        $sql = mysql_query("INSERT INTO `unaspmobile`.`emprestimo` "
                . " VALUES (NULL, CURRENT_TIMESTAMP, '".$this->getData_deovolucao()."', '" . $this->getIdmaterial() . "', '" . $this->getIdaluno() . "')");

        if ($sql) {
            return true;
        } else {
            return false;
        }
    }

    public function selectEmprestimo() {
        $array = "";
        $cont = 0;
        $result = mysql_query("select idAluno,tipo,autor,titulo,ano,assunto,editora,serie,foto,
                               DATE_FORMAT( `data_saida` , '%d/%c/%Y' ) AS `data_saida`,
                               DATE_FORMAT( `data_devolucao` , '%d/%c/%Y' ) AS `data_devolucao`
                               from emprestimo inner join material on 
                                material.idmaterial = emprestimo.idmaterial and
                               emprestimo.idAluno = '" . $this->getIdaluno() . "'");
        while (($row = mysql_fetch_assoc($result)) != NULL) {
            $array[$cont] = array(
                "idAluno" => $row['idAluno'],
                "tipo" => $row['tipo'],
                "autor" => $row['autor'],
                "titulo" => $row['titulo'],
                "ano" => $row['ano'],
                "editora" => $row['editora'],
                "data_saida" => $row['data_saida'],
                "data_devolucao" => $row['data_devolucao']
            );
            $cont++;
        }
        return $array;
    }
    
    
    public function deleteEmprestimo(){
        $sql = mysql_query('DELETE FROM  emprestimo  WHERE idemprestimo = '.$this->getIdemprestimo());
        
        if($sql){
            return true;
        }else{
            return false;
        }
    }

        public function updateEmprestimo(){
        $sql = mysql_query("UPDATE emprestimo  SET  "
                          . "data_saida = CURRENT_TIMESTAMP, "
                         . "data_devolucao ='".$this->getData_deovolucao()."', "
                         . "idmaterial ='".$this->getIdmaterial()."', "
                        . "idAluno ='".$this->getIdaluno()."' "
                         . "WHERE idAluno = ".$this->getIdaluno());
        
        if($sql){
            return true;
        }else{
            return false;
        }
    }

    
}

