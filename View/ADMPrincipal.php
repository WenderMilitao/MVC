<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Painel de Administração</title>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }
    </style>
</head>

<body class="w3-light-grey">
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <header class="w3-container w3-padding-32 w3-center " id="home">
        <br>
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large"> ADMINISTRAÇÃO
        </h1>
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large"> SISTEMA DE CURRICULOS
        </h1>
    </header>
    <div class="w3-padding-large" id="main">
        <form action="" method="post" class="w3-container w3-light-grey w3-text-blue w3-margin w3-center">
            <button name="btnListarCadastrados" class="w3-button w3-margin w3-blue w3-cell w3-round-large">
                <br><i class="fa fa-group w3-xxlarge"></i><br>
                <p class="w3-xlarge">Usuários<br> Cadastrados</p>
            </button>
            <button name="btnListarAdministradores" class="w3-button w3-margin w3-blue w3-cell w3-round-large">
                <br><i class="fa fa-briefcase w3-xxlarge"></i><br>
                <p class="w3-xlarge">Administradores<br> Cadastrados</p>
            </button>
            <div class="w3-row w3-section">
                <div>
                    <button name="btnVoltarParaLogin" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 28%;"> Voltar
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>