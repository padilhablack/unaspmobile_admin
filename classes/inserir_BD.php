<?php

include './banco.php';
// Se o usuário clicou no botão cadastrar efetua as ações
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

            // Insere os dados no banco
            $sql = mysql_query("INSERT INTO `unaspmobile`.`material` (`idmaterial`, `tipo`, `autor`, `titulo`, `ano`, `data`, `assunto`, `editora`, `serie`, `quantidade`, `disponivel`, `foto`) VALUES (NULL, '" . $tipo . "', '" . $autor . "', '" . $titulo . "', '" . $ano . "', CURRENT_TIMESTAMP, '" . $assunto . "', '" . $editora . "', '" . $serie . "','".$qntd."', '0', '" . $nome_imagem . "')");
            // Se os dados forem inseridos com sucesso
            if ($sql) {
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
?>