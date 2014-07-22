<?php

require_once 'banco.php';

class Material {

    private $id;
    private $tipo;
    private $autor;
    private $titulo;
    private $ano;
    private $assunto;
    private $editora;
    private $serie;
    private $quantidade;
    private $foto_nome;

    //geters 
    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getAssunto() {
        return $this->assunto;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function getSerie() {
        return $this->serie;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getFoto_nome() {
        return $this->foto_nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setFoto_nome($foto_nome) {
        $this->foto_nome = $foto_nome;
    }

    public function insertMaterial() {

        $sql = mysql_query("INSERT INTO `unaspmobile`.`material`  VALUES (NULL, '" . $this->tipo . "', '" . $this->autor . "', '" . $this->titulo . "', '" . $this->ano . "', CURRENT_TIMESTAMP, '" . $this->assunto . "', '" . $this->editora . "', '" . $this->serie . "','" . $this->quantidade . "', '0', '" . $this->foto_nome . "')");

        if (mysql_query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function selectMaterial() {

        $array = "";
        $cont = 0;
        $result = mysql_query('SELECT idmaterial, tipo, autor, titulo, ano, `data`, assunto, editora, serie, quantidade, disponivel, foto FROM material');
        while (($row = mysql_fetch_assoc($result)) != NULL) {
            $array[$cont] = array(
                "idmaterial" => $row['idmaterial'],
                "tipo" => $row['tipo'],
                "autor" => $row['autor'],
                "titulo" => $row['titulo'],
                "ano" => $row['ano'],
                "data" => $row['data'],
                "assunto" => $row['assunto'],
                "editora" => $row['editora'],
                "serie" => $row['serie'],
                "quantidade" => $row['quantidade'],
                "disponivel" => $row['disponivel'],
                "foto" => $row['foto']
            );
            $cont++;
        }
        return $array;
    }

    public function updateMaterial() {

        $sql = "UPDATE material SET"
                . "tipo='" . $this->getTipo() . "', "
                . "autor ='" . $this->getTipo() . "', "
                . "titulo ='" . $this->getTitulo() . "',"
                . " ano = '" . $this->getAno() . "', "
                . "data = CURRENT_TIMESTAMP, "
                . "assunto = '" . $this->getAssunto() . "',"
                . " editora = '" . $this->getEditora() . "',"
                . " serie = '" . $this->getSerie() . "',"
                . " quantidade = '" . $this->getQuantidade() . "',"
                . " foto = '" . $this->getFoto() . "'"
                . "Where idmaterial = '" . $this->getId();

        if (mysql_query($sql)) {

            return true;
        } else {

            return false;
        }
    }

    public function deleteMaterial() {
        $sql = "DELETE FROM material WHERE idmaterial = '" . $this->getId() . "'";

        if (mysql_query($sql)) {

            return true;
        } else {

            return false;
        }
    }

}
