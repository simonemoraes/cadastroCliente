<!DOCTYPE HTML>
<html>
    <head>
        <title>Cadastro de Cliente</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, inicial-scale=1.0"/>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css") ?>" media = "all">
        <link rel="stylesheet" href="<?= base_url("css/estilo.css") ?>" media = "all">
        
        <link rel="stylesheet" href="<?= base_url("css/jquery-ui.min.css") ?>">
        <link rel="stylesheet" href="<?= base_url("css/font_awesome/css/font-awesome.min.css") ?>">

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navPrincipal">
            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#elementoCollapsel">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="<?= base_url() ?>" class="navbar-brand">Loja de Efeitos</a>
                </div>

                <div class="navbar-collapse collapse" id="elementoCollapsel">

                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url("index.php/cadastrocliente/formulario") ?>">Cadastra Clientes</a></li>
                        <li><a href="<?= base_url("index.php/cadastrocliente_control/dragAndDrop") ?>">Efeito Drag and Drop</a></li>
                        <li><a href="<?= base_url("index.php/cadastrocliente_control/formularioCep") ?>">Busca por Cep</a></li>
                    </ul>

                </div>

            </div>
        </nav>