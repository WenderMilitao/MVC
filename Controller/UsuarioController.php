<?php if (!isset($_SESSION)) {
    session_start();
}
class UsuarioController
{
    public function inserir($nome, $cpf, $email, $senha)
    {
        require_once "Model/Usuario.php";
        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setCPF($cpf);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        $r = $usuario->inserirBD();
        $_SESSION['Usuario'] = serialize($usuario);
        return $r;
    }

    public function atualizar($id, $nome, $cpf, $email, $dataNascimento)
    {
        require_once "Model/Usuario.php";
        $usuario = new Usuario();
        $usuario->setID($id);
        $usuario->setNome($nome);
        $usuario->setCPF($cpf);
        $usuario->setEmail($email);
        $usuario->setDataNascimento($dataNascimento);
        $r = $usuario->atualizarBD();
        $_SESSION['Usuario'] = serialize($usuario);
        return $r;
    }

    public function login($cpf, $senha)
    {
        require_once "Model/Usuario.php";
        $usuario = new Usuario();
        $usuario->carregarUsuario($cpf);
        $verSenha = $usuario->getSenha();
        if ($senha == $verSenha) {
            $_SESSION['Usuario'] = serialize($usuario);
            return true;
        } else {
            return false;
        }
        $usuario = new Usuario();
        $results = $usuario->gerarLista();
        if ($results != null)
            while ($row = $results->fetch_object()) {
                echo '<tr>';
                echo '<td style="width: 1%;">' . $row->idusuario . '</td>';
                echo '<td style="width: 50%;">' . $row->nome . '</td>';
                echo '</tr>';
            }
    }
    public function gerarListaUsuario()
    {
        require_once "Model/Usuario.php";
        $usuario = new Usuario();
        return $results = $usuario->listaCadastrados();
    }
}
