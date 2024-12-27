<?php
// Incluir a classe OutrasFormacoes
require_once 'FormacaoAcad.php';

// Criar uma nova instância da classe
$formacaoacad = new FormacaoAcad();

// Testar inserção no banco de dados
$formacaoacad->setIdUsuario(1); // Substitua por um ID de usuário válido
$formacaoacad->setInicio('2022-01-01');
$formacaoacad->setFim('2023-01-01');
$formacaoacad->setDescricao('Curso de PHP');

// Inserir a formação no banco de dados
if ($formacaoacad->inserirBD()) {
    echo "Formação inserida com sucesso! ID: " . $formacaoacad->getId();
} else {
    echo "Erro ao inserir a formação!";
}

echo "<br><br>";


// Testar listagem de formações de um usuário
$idusuario = 1; // Substitua por um ID de usuário válido
$formacoesacad = $formacaoacad->listaFormacoes($idusuario);

if ($formacoesacad->num_rows > 0) {
    while ($row = $formacoesacad->fetch_assoc()) {
        echo "ID: " . $row["idformacaoAcademica"] . " - Descrição: " . $row["descricao"] . "<br>";
    }
} else {
    echo "Nenhuma formação encontrada para o usuário.";
}

echo "<br><br>";


// Testar exclusão de uma formação
$idParaExcluir = $formacaoacad->getID(); // Pegue o ID da formação inserida acima
if ($formacaoacad->excluirBD($idParaExcluir)) {
    echo "Formação excluída com sucesso!";
} else {
    echo "Erro ao excluir a formação!";
}
