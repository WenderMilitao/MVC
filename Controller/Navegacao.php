<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php switch ($_POST) {
        //Caso a variavel seja nula mostrar tela de login 
    case isset($_POST[null]):
        include_once "View/login.php";
        break;
        //---Primeiro Acesso--//
    case isset($_POST["btnPrimeiroAcesso"]):
        include_once "View/Primeiroacesso.php";
        break;
        //---Cadastrar--// 
    case isset($_POST["btnCadastrar"]):
        require_once "Controller/UsuarioController.php";
        $uController = new UsuarioController();
        if ($uController->inserir($_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"], $_POST["txtSenha"])) {
            include_once "View/cadastroRealizado.php";
        } else {
            include_once "View/cadastroNaoRealizado.php";
        }
        break;
        //--Direciona Usuario--//
    case isset($_POST["btnCadRealizado"]):
        require_once "View/Principal.php";
        break;
    case isset($_POST["btnCadNRealizado"]):
        require_once "View/Login.php";
        break;
    case isset($_POST["btnInfExcluir"]):
        require_once "View/Principal.php";
        break;
    case isset($_POST["btnAtualizacaoCadastro"]):
        require_once "View/Principal.php";
        break;
        //--Atualizar--// 
    case isset($_POST["btnAtualizarDadosP"]):
        require_once "Controller/UsuarioController.php";
        $uController = new UsuarioController();
        if ($uController->atualizar($_POST["txtID"], $_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"], date("Y-m-d", strtotime($_POST["txtData"])))) {
            include_once "View/atualizacaoRealizada.php";
        } else {
            include_once "View/operacaoNaoRealizada.php";
        }
        break;
        //--Fazer Login--// 
    case isset($_POST["btnLogin"]):
        require_once "Controller/UsuarioController.php";
        $uController = new UsuarioController();
        if ($uController->login($_POST["txtLogin"], $_POST["txtSenha"])) {
            include_once "View/Principal.php";
        } else {
            include_once "View/cadastroNaoRealizado.php";
        }
        break;
        //--Adicionar Formacao--// 
    case isset($_POST["btnAddFormacao"]):
        require_once "Controller/FormacaoAcadController.php";
        include_once "Model/Usuario.php";
        $fController = new FormacaoAcadController();
        if ($fController->inserir(date("Y-m-d", strtotime($_POST["txtInicioFA"])), date("Y-m-d", strtotime($_POST["txtFimFA"])), $_POST["txtDescFA"], unserialize($_SESSION["Usuario"])->getID()) != false) {
            include_once "View/cadastroRealizado.php";
        } else {
            include_once "View/operacaoNaoRealizada.php";
        }
        break;
        //--Excluir Formacao-// 
    case isset($_POST["btnExcluirFA"]):
        require_once "Controller/FormacaoAcadController.php";
        include_once "Model/Usuario.php";
        $fController = new FormacaoAcadController();
        if ($fController->remover($_POST["id"]) == true) {
            include_once "View/informacaoExcluida.php";
        } else {
            include_once "View/operacaoNaoRealizada.php";
        }
        break;
        //--Adicionar OutrasFormacoes--// 
    case isset($_POST["btnAddOutraFormacao"]):
        require_once "Controller/OutrasFormacoesController.php";
        include_once "Model/Usuario.php";
        $fController = new OutrasFormacoesController();
        if ($fController->inserir(date("Y-m-d", strtotime($_POST["txtInicioOutraFA"])), date("Y-m-d", strtotime($_POST["txtFimOutraFA"])), $_POST["txtDescOutraFA"], unserialize($_SESSION["Usuario"])->getID()) != false) {
            include_once "View/cadastroRealizado.php";
        } else {
            include_once "View/operacaoNaoRealizada.php";
        }
        break;
        //--Excluir OutrasFormacoes-// 
    case isset($_POST["btnExcluirOFA"]):
        require_once "Controller/OutrasFormacoesController.php";
        include_once "Model/Usuario.php";
        $fController = new OutrasFormacoesController();
        if ($fController->remover($_POST["id"]) == true) {
            include_once "View/informacaoExcluida.php";
        } else {
            include_once "View/operacaoNaoRealizada.php";
        }
        break;
        //--Adicionar ExperienciaProfissional--// 
    case isset($_POST["btnAddExpeProfissional"]):
        require_once "Controller/ExperienciaProfissionalController.php";
        include_once "Model/Usuario.php";
        $fController = new ExperienciaProfissionalController();
        if ($fController->inserir(date("Y-m-d", strtotime($_POST["txtInicioExpeProfissional"])), date("Y-m-d", strtotime($_POST["txtFimExpeProfissional"])), $_POST["txtDescEmpresa"], $_POST["txtDescExpeProfissional"], unserialize($_SESSION["Usuario"])->getID()) != false) {
            include_once "View/cadastroRealizado.php";
        } else {
            include_once "View/operacaoNaoRealizada.php";
        }
        break;
        //--Excluir ExperienciaProfissional-// 
    case isset($_POST["btnExcluirEP"]):
        require_once "Controller/ExperienciaProfissionalController.php";
        include_once "Model/Usuario.php";
        $fController = new ExperienciaProfissionalController();
        if ($fController->remover($_POST["id"]) == true) {
            include_once "View/informacaoExcluida.php";
        } else {
            include_once "View/operacaoNaoRealizada.php";
        }
        break;
        // Login ADM 
    case isset($_POST["btnLoginADM"]):
        require_once "Controller/AdministradorController.php";
        $aController = new AdministradorController();
        if ($aController->login($_POST['txtLoginADM'], $_POST['txtSenhaADM'])) {
            include_once 'View/ADMPrincipal.php';
        } else {
            include_once "View/operacaoNaoRealizada.php";
        }
        break;
        // Direciona ADM 
    case isset($_POST["btnADM"]):
        include_once 'View/ADMLogin.php';
        break;
    case isset($_POST["btnListarCadastrados"]):
        include_once 'View/ADMListarCadastrados.php';
        break;
    case isset($_POST["btnListarAdministradores"]):
        include_once 'View/ADMListarAdminsitradores.php';
        break;
    case isset($_POST["btnVoltar"]):
        include_once "View/ADMPrincipal.php";
        break;
    case isset($_POST["btnVisualizar"]):
        $_SESSION["idusuario"] = $_POST["id"];
        include_once "View/ADMVisualizarCadastro.php";
        break;
    case isset($_POST["btnVoltarLista"]):
        include_once "View/ADMListarCadastrados.php";
        break;
    case isset($_POST["btnImprimir"]):
        include_once "View/ADMVisualizarCadastro.php";
        break;
    case isset($_POST["btnVoltarParaLogin"]):
        include_once 'View/ADMLogin.php';
        break;
    case isset($_POST["btnVoltarParaLoginUsuario"]):
        include_once 'View/Login.php';
        break;
        // Voltar tela login Usuario
    case isset($_POST["btnSair"]):
        include_once 'View/Login.php';
        break;
}
