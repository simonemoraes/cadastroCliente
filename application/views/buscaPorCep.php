<?php include 'cabecalho.php' ?>

        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="panel panel-default div_panel">
                        <div class="panel-heading text-center">Busca por Cep</div>
                        <div class="panel-body">
                            <form id="form_cadastro" onsubmit="return false;">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <input class="form-control" required="" type="text" name="cep" id="cep" placeholder="Digite o cep">
                                        </div>

                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <button style="width: 100%;" class="btn btn-info" id="btn_buscar">
                                                <i class="fa fa-floppy-o" aria-hidden="true"></i> &nbsp;Buscar</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div style="border-top: 1px solid #ddd" class="panel-body painelCep">

                            <h5 class="text-center"><strong>Resultado da busca:</strong></h5>
                            <h5 class="text-success text-center" id="resultado_txt"></h5>

                            <div class="row">
                                <div class="col-md-4 col-md-4 col-sm-4 col-xs-4 alinhamento">
                                    <label for="tipoLogradouro"><strong>Tipo de logradouro:</strong></label>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="fontLabel" id="tipoLogradouro" for="tipoLogradouro"></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 alinhamento">
                                    <label for="logradouro"><strong>Logradouro:</strong></label>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="fontLabel" id="logradouro" for="logradouro"></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 alinhamento">
                                    <label for="bairro"><strong>Bairro:</strong></label>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="fontLabel" id="bairro" for="bairro"></label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 alinhamento">
                                    <label for="cidade"><strong>Cidade:</strong></label>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="fontLabel" id="cidade" for="cidade"></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4 alinhamento">
                                    <label for="uf"><strong>UF:</strong></label>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label class="fontLabel" id="uf" for="uf"></label>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

<script src="<?= base_url("js/bootstrap.min.js") ?>"></script>

<script src="<?= base_url("js/jquery-1.12.4.js") ?>"></script>
<script src="<?= base_url("js/jquery-1.12.0-ui.js") ?>"></script>
<script src="<?= base_url("js/jscript.js") ?>"></script>
    </body>
</html>



