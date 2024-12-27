<?php if (!isset($_SESSION)) {
    session_start();
}
class OutrasFormacoesController
{
    public function inserir($inicio, $fim, $descricao, $idusuario)
    {
        require_once "Model/OutrasFormacoes.php";
        $Oformacao = new OutrasFormacoes();
        $Oformacao->setInicio($inicio);
        $Oformacao->setFim($fim);
        $Oformacao->setDescricao($descricao);
        $Oformacao->setIdUsuario($idusuario);
        $r = $Oformacao->inserirBD();
        return $r;
    }
    public function remover($id)
    {
        require_once "Model/OutrasFormacoes.php";
        $Oformacao = new OutrasFormacoes();
        $r = $Oformacao->excluirBD($id);
        return $r;
    }
    public function gerarLista($idusuario)
    {
        require_once "Model/OutrasFormacoes.php";
        $Oformacao = new OutrasFormacoes();
        return $results = $Oformacao->listaOutrasFormacoes($idusuario);
    }
}
