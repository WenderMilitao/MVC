<?php if (!isset($_SESSION)) {
    session_start();
}
class ExperienciaProfissionalController
{
    public function inserir($inicio, $fim, $empresa, $descricao, $idusuario)
    {
        require_once "Model/ExperienciaProfissional.php";
        $expprofissional = new ExperienciaProfissional();
        $expprofissional->setInicio($inicio);
        $expprofissional->setFim($fim);
        $expprofissional->setEmpresa($empresa);
        $expprofissional->setDescricao($descricao);
        $expprofissional->setIdUsuario($idusuario);
        $r = $expprofissional->inserirBD();
        return $r;
    }
    public function remover($id)
    {
        require_once "Model/ExperienciaProfissional.php";
        $expprofissional = new ExperienciaProfissional();
        $r = $expprofissional->excluirBD($id);
        return $r;
    }
    public function gerarLista($idusuario)
    {
        require_once "Model/ExperienciaProfissional.php";
        $expprofissional = new ExperienciaProfissional();
        return $results = $expprofissional->listaExperiencias($idusuario);
    }
}
