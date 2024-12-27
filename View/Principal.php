<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Enlatados Juarez</title>
    <style>
        /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo (jogo da velha)222 */
        .w3-sidebar {
            width: 120px;
        }

        /*Define Fonte para todas as tags listadas abaixo*/
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }

        .cont {
            margin-left: 15%;
        }
    </style>
</head>

<body class="w3-light-grey">
    <div class="w3-padding-left" id="main">
        <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
            <a href="#home" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
                <i class="fa fa-home w3-xxlarge"></i>
                <p>HOME</p>
            </a>
            <a href="#dPessoais" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
                <i class="fa fa-address-book-o w3-xxlarge"></i>
                <p>Dados Pessoais</p>
            </a>
            <a href="#formacao" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
                <i class="fa fa-mortar-board w3-xxlarge"></i>
                <p>Formação</p>
            </a>
            <a href="#expeprofissional" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
                <i class="fa fa-briefcase w3-xxlarge"></i>
                <p>Experiência Profissional</p>
            </a>
        </nav>
        <!-- Importa os arquivos e verifica a conexao -->
        <?php
        include_once "Controller/ExperienciaProfissionalController.php";
        include_once "Controller/FormacaoAcadController.php";
        include_once "Model/Usuario.php";
        include_once "Controller/OutrasFormacoesController.php";

        if (!isset($_SESSION)) {
            session_start();
        }
        ?>
        <header class="w3-container w3-padding-32 w3-center " id="home">
            <h1>
                <img src="Img/CV.png" alt="Logo" class="w3-image" width="35%">
                </br>
            </h1>
            <a class="w3-text-cyan" href="https://pt.vecteezy.com/arte-vetorial/10941707-ilustracao-de-icone-de-vetor-dos-desenhos-animados-curriculo-pessoas-negocio-icone-conceito-isolado-vetor-premium-estilo-de-desenho-animado-plano">Designed by Vecteezy</a>
            <br>
            <h1 class="w3-text-cyan">SISTEMA DE CURRICULOS</h1>
        </header>
        <div class="cont">
            <div class="w3-padding-64 w3-content w3-text-grey" id="dPessoais">
                <h2 class="w3-text-cyan">Dados Pessoais</h2>
                <form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">
                    <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="<?php echo unserialize($_SESSION['Usuario'])->getID(); ?>">
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:11%;">
                            <i class="w3-xxlarge fa fa-user"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="<?php echo unserialize($_SESSION['Usuario'])->getNome(); ?>">
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:11%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtData" type="date" placeholder="" value="<?php echo unserialize($_SESSION['Usuario'])->getDataNascimento(); ?>">
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:11%;">
                            <i class="w3-xxlarge fa fa-drivers-license"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF" value="<?php echo unserialize($_SESSION['Usuario'])->getCPF(); ?>">
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:11%;">
                            <i class="w3-xxlarge fa fa-envelope-o"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Digite seu e-mail" value="<?php echo unserialize($_SESSION['Usuario'])->getEmail(); ?>">
                        </div>
                        <div class="w3-center w3-row w3-section">
                            <button name="btnAtualizarDadosP" class="w3-button w3-blue w3-cell w3-round-large">
                                Atualizar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
                <h2 class="w3-text-cyan">Formação</h2>
                <form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
                    <div class="w3-row w3-center">
                        <div class="w3-col" style="width:50%;">
                            Data Inicial
                        </div>
                        <div class="w3-res">
                            Data Final
                        </div>
                        <div class="w3-row w3-section w3-col" style="width:45%;">
                            <div class="w3-col" style="width:15%;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border w3-round-large" id="txtInicioFA" name="txtInicioFA" type="date" placeholder="">
                            </div>
                        </div>
                        <div class="w3-row w3-section w3-rest">
                            <div class="w3-col w3-margin-left" style="width:13%;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border w3-round-large" id="txtFimFA" name="txtFimFA" type="date" placeholder="">
                            </div>
                        </div>
                        <div>
                            <div class="w3-row w3-section">
                                <div class="w3-col" style="width:7%;">
                                    <i class="w3-xxlarge fa fa-align-justify"></i>
                                </div>
                                <div class="w3-rest">
                                    <input class="w3-input w3-border w3-round-large" id="txtDescFA" name="txtDescFA" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas-Centro Paula Souza">
                                </div>
                            </div>
                            <div class="w3-row w3-section">
                                <div class="w3-center">
                                    <button class="w3-button w3-block w3-blue w3-cell w3-round-large" id="btnAddFormacao" name="btnAddFormacao" style="width: 20%;">
                                        <i class="w3-xxlarge fa fa-user-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                </form>
                <div class="w3-container">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-center w3-blue">
                                <th>Início</th>
                                <th>Fim</th>
                                <th>Descrição</th>
                                <th>Apagar</th>
                            </tr>
                            <thead>
                                <?php $fCon = new FormacaoAcadController();
                                $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                                if ($results != null)
                                    while ($row = $results->fetch_object()) {
                                        echo '<tr>';
                                        echo '<td style="width: 18%;">' . $row->inicio . '</td>';
                                        echo '<td style="width: 15%;">' . $row->fim . '</td>';
                                        echo '<td style="width: 60%;">' . $row->descricao . '</td>';
                                        echo '<td style="width: 5%;"> 
                                        <form action="" method="post"> 
                                        <input type="hidden" name="id" value="' . $row->idformacaoAcademica . '"> 
                                        <button name="btnExcluirFA" class="w3-button w3-block w3-blue w3-cell w3-round-large"> 
                                        <i class="fa fa-user-times"></i> 
                                        </button>
                                        </td> 
                                        </form>';
                                        echo '</tr>';
                                    } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="w3-padding-128 w3-content w3-text-grey" id="outraformacao">
            <h2 class="w3-text-cyan">Outras Formações</h2>
            <form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
                <div class="w3-row w3-center">
                    <div class="w3-col" style="width:50%;">
                        Data Inicial
                    </div>
                    <div class="w3-res">
                        Data Final
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-row w3-section w3-col" style="width:45%;">
                        <div class="w3-col" style="width:15%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" id="txtInicioOutraFA" name="txtInicioOutraFA" type="date" placeholder="">
                        </div>
                    </div>
                    <div class="w3-row w3-section w3-rest">
                        <div class="w3-col w3-margin-left" style="width:13%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" id="txtFimOutraFA" name="txtFimOutraFA" type="date" placeholder="">
                        </div>
                    </div>
                    <div>
                        <div class="w3-row w3-section">
                            <div class="w3-col" style="width:7%;">
                                <i class="w3-xxlarge fa fa-align-justify"></i>
                            </div>
                            <div class="w3-rest">
                                <input class="w3-input w3-border w3-round-large" id="txtDescOutraFA" name="txtDescOutraFA" type="text" placeholder="Ex: Curso de Inglês - Inglês City">
                            </div>
                        </div>
                        <div class="w3-row w3-section">
                            <div class="w3-center">
                                <button class="w3-button w3-block w3-blue w3-cell w3-round-large" id="btnAddOutraFormacao" name="btnAddOutraFormacao" style="width: 20%;">
                                    <i class="w3-xxlarge fa fa-user-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            </form>
            <div class="w3-container">
                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Descrição</th>
                            <th>Apagar</th>
                        </tr>
                        <thead>
                            <?php $fCon = new OutrasFormacoesController();
                            $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                            if ($results != null)
                                while ($row = $results->fetch_object()) {
                                    echo '<tr>';
                                    echo '<td style="width: 18%;">' . $row->inicio . '</td>';
                                    echo '<td style="width: 15%;">' . $row->fim . '</td>';
                                    echo '<td style="width: 60%;">' . $row->descricao . '</td>';
                                    echo '<td style="width: 5%;"> 
                                        <form action="" method="post"> 
                                        <input type="hidden" name="id" value="' . $row->idoutrasformacoes . '"> 
                                        <button name="btnExcluirOFA" class="w3-button w3-block w3-blue w3-cell w3-round-large"> 
                                        <i class="fa fa-user-times"></i> 
                                        </button>
                                        </td> 
                                        </form>';
                                    echo '</tr>';
                                } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="w3-padding-64 w3-content w3-text-grey" id="expeprofissional">
        <h2 class="w3-text-cyan">Experiência Profissional</h2>
        <form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res">
                    Data Final
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" id="txtInicioExpeProfissional" name="txtInicioExpeProfissional" type="date" placeholder="">
                    </div>
                </div>
                <div class="w3-row w3-section w3-rest">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" id="txtFimExpeProfissional" name="txtFimExpeProfissional" type="date" placeholder="">
                    </div>
                </div>
                <div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" id="txtDescEmpresa" name="txtDescEmpresa" type="text" placeholder="Nome da Empresa">
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" id="txtDescExpeProfissional" name="txtDescExpeProfissional" type="text" placeholder="Ex: Desenvolvedor de Software">
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-center">
                            <button class="w3-button w3-block w3-blue w3-cell w3-round-large" id="btnAddExpeProfissional" name="btnAddExpeProfissional" style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
        </form>
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Empresa</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                    <thead>
                        <?php $fCon = new ExperienciaProfissionalController();
                        $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                        if ($results != null)
                            while ($row = $results->fetch_object()) {
                                echo '<tr>';
                                echo '<td style="width: 18%;">' . $row->inicio . '</td>';
                                echo '<td style="width: 18%;">' . $row->fim . '</td>';
                                echo '<td style="width: 35%;">' . $row->empresa . '</td>';
                                echo '<td style="width: 35%;">' . $row->descricao . '</td>';
                                echo '<td style="width: 5%;"> 
                                        <form action="" method="post"> 
                                        <input type="hidden" name="id" value="' . $row->idexperienciaprofissional . '"> 
                                        <button name="btnExcluirEP" class="w3-button w3-block w3-blue w3-cell w3-round-large"> 
                                        <i class="fa fa-user-times"></i> 
                                        </button>
                                        </td> 
                                        </form>';
                                echo '</tr>';
                            } ?>
            </table>

        </div><br><br><br>
        <div>
            <button class="w3-button w3-block w3-blue w3-cell w3-round-large" name="btnSair">
                <i class="fa fa-sign-out w3-xxlarge"></i>
                Sair</button>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>