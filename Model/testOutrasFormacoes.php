<?php
// Incluir a classe OutrasFormacoes
require_once 'OutrasFormacoes.php';

// Criar uma nova instância da classe
$formacao = new OutrasFormacoes();

// Testar inserção no banco de dados
$formacao->setIdUsuario(1); // Substitua por um ID de usuário válido
$formacao->setInicio('2022-01-01');
$formacao->setFim('2023-01-01');
$formacao->setDescricao('Curso de PHP');

// Inserir a formação no banco de dados
if ($formacao->inserirBD()) {
    echo "Formação inserida com sucesso! ID: " . $formacao->getId();
} else {
    echo "Erro ao inserir a formação!";
}

echo "<br><br>";


// Testar listagem de formações de um usuário
$idusuario = 1; // Substitua por um ID de usuário válido
$formacoes = $formacao->listaOutrasFormacoes($idusuario);

if ($formacoes->num_rows > 0) {
    while ($row = $formacoes->fetch_assoc()) {
        echo "ID: " . $row["idoutrasformacoes"] . " - Descrição: " . $row["descricao"] . "<br>";
    }
} else {
    echo "Nenhuma formação encontrada para o usuário.";
}

echo "<br><br>";


// Testar exclusão de uma formação
$idParaExcluir = $formacao->getId(); // Pegue o ID da formação inserida acima
if ($formacao->excluirBD($idParaExcluir)) {
    echo "Formação excluída com sucesso!";
} else {
    echo "Erro ao excluir a formação!";
}
