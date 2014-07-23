<?php
include './model/aulas.php';
//
//if(isset($_POST['cadastrar'])){
    $aula = new Aulas();
 
 
    
//    
//    $aula->setData($_POST['data']);
//    $aula->setAluno($_POST['aluno']);
//    $aula->setCurso($_POST['curso']);
//    $aula->setDescricao($_POST['descricao']);
//    $aula->setDisciplina($_POST['disciplina']);
//    $aula->setFalta($_POST['falta']);
//    $aula->setPeriodo($_POST['periodo']);
//    $aula->setPresenca($_POST['presenca']);
//    $aula->setProfessor($_POST['professor']);
//    $aula->setTurma($_POST['turma']);

$aula->setAluno(86539);
$aula->setCurso(5);
$aula->setDisciplina(45);
$aula->setPeriodo(8);
$aula->setTurma(9);
$aula->setId(4);

    $retorno = @$aula->selectAula();
//$aula->setDescricao("Mais uma vez estou aqui meu Senhor");
    
//
//    
//    $result = $aula->updateAula();
    
    var_dump($retorno);
    
    
    if($retorno){
        echo 'sucesso';
    }
//}



?>

<form  enctype="multipart/form-data" action="" method="post">
    <label for="data">Data</label>
    <input type = "date" name = "data" value = "<?php?>">
    <br>
    <label for="descricao">Descrição</label>
    <textarea name="descricao" rows="4" cols="20">
    </textarea>
    <br>
    <label for="presenca">Presença</label>
    <input type = "text" name = "presenca" value = "" />
    <br>
    <label for="falta">Falta</label>
    <input type = "text" name = "falta" value = "" />
    <br>
    <label for="aluno">Aluno</label>
    <input type = "number" name = "aluno" value = "" />
    <br>
    <label for="curso">Curso:</label>
    <input type = "number" name = "curso" value = "" />
    <br>
    <label for="turma">Turma:</label>
    <input type = "number" name = "turma" value = "" />
    <br>
    <label for="periodo">Periodo:</label>
    <input type = "number" name = "periodo" value = "" />
    <br>
    <label for="disciplina">Disciplina</label>
    <input type = "number" name = "disciplina" value = "" />
    <br>
        <label for="professor">Professor</label>
    <input type = "number" name = "professor" value = "" />
    <br>
    <input type="submit" value="cadastrar" name="cadastrar">
        
</form>