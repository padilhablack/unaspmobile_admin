<?php

require_once '../model/material.php';
if (isset($_POST['enviar'])) {

    // Recupera os dados dos campos
    $tipo = $_POST['tipo'];
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $ano = $_POST['ano'];
    $assunto = $_POST['assunto'];
    $editora = $_POST['editora'];
    $serie = $_POST['serie'];
    $qntd = $_POST['quantidade'];
    $foto = $_FILES["imagem"];

    // Se a foto estiver sido selecionada

    if (!empty($foto["name"])) {

        // Largura máxima em pixels
        $largura = 400;
        // Altura máxima em pixels
        $altura = 800;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 1000;

        // Verifica se o arquivo é uma imagem
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($foto["tmp_name"]);

        // Verifica se a largura da imagem é maior que a largura permitida
        if ($dimensoes[0] > $largura) {
            @$error[1] = "<font color='red'> A largura da imagem não deve ultrapassar " . $largura . " pixels </font>";
        }

        // Verifica se a altura da imagem é maior que a altura permitida
        if ($dimensoes[1] > $altura) {
            @$error[2] = "<font color='red'>Altura da imagem não deve ultrapassar " . $altura . "pixels</font>";
        }

        // Se não houver nenhum erro
        if (count(@$error) == 0) {

            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

            // Caminho de onde ficará a imagem
            $caminho_imagem = "../server/php/" . $nome_imagem;

            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
            
            //cria um novo material
            $material = new Material();

            $material->setTipo($tipo);
            $material->setAutor($autor);
            $material->setTitulo($titulo);
            $material->setAno($ano);
            $material->setAssunto($assunto);
            $material->setEditora($editora);
            $material->setFoto_nome($nome_imagem);
            $material->setQuantidade($qntd);
            $material->setSerie($serie);
            
            // Insere os dados no banco
            // Se os dados forem inseridos com sucesso
            if ($material->insertMaterial()) {
                echo "<font color='green'>Você foi cadastrado com sucesso.</font>";
            }
        }

        // Se houver mensagens de erro, exibe-as
        if (count(@$error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "<br />";
            }
        }
    }
}