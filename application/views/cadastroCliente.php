<?php include 'cabecalho.php' ?>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    
                    <div id="div_error" style="display: none">
                        
                    </div>

                                        
                    <!-- Inicio painel -->
                    <div class="panel panel-default div_panel">
                        <div class="panel-heading text-center">
                            <h4><strong>Cadastro de Cliente</strong></h4>
                        </div>
                        <div class="panel-body">
                            <form id="form_cadastro" onsubmit="return false;">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control sr-only"  type="text" name="id_cliente" id="id_cliente" placeholder="Id">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input   itemid="Nome do cliente" class="form-control verificar"  type="text" name="nome_cliente" id="nome_cliente" placeholder="Nome">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input itemid="E-mail do cliente" class="form-control verificar" type="email" name="email_cliente" id="email_cliente" placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input itemid="CPF do cliente" class="form-control verificar" type="text" name="cpf_cliente" id="cpf_cliente" placeholder="Cpf">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-xs-8">
                                            <button style="width: 100%;" class="btn btn-info"  id="btn_salvar">
                                                <i class="fa fa-floppy-o" aria-hidden="true"></i> &nbsp;Salvar</button>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-6 col-xs-8">
                                            <button style="width: 100%;" class="btn btn-info" id="btn_remover">
                                                <i class="fa fa-trash" aria-hidden="true"></i> &nbsp;Remover</button>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-6 col-xs-8">
                                            <button style="width: 100%;" class="btn btn-info" title="Alualizar tabela" id="btn_atualiza">
                                                <i class="fa fa-refresh" aria-hidden="true"></i> &nbsp;Atualizar</button>
                                        </div>
                                        
                                        

                                    </div>
                                </div>


                            </form>
                        </div>

                        <div style="border-top: 1px solid #ddd" class="panel-body">
                            <table class="table table-bordered" id="tabelaClientes">
                                <thead style="background-color: #f5f5f5;">
                                    <tr class="text-center">
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Nome</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Cpf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($clientesRetorno as $value): ?>
                                        <tr>
                                            <td id="id"><?= $value['id'] ?></td>
                                            <td id="nome"><?= $value['nome'] ?></td>
                                            <td id="email"><?= $value['email'] ?></td>
                                            <td id="cpf"><?= $value['cpf'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>


                    <!-- Fim painel -->

                </div>
            </div>

        </div>
    </div>

    <script src="<?= base_url("js/jquery-1.11.3.min.js") ?>"></script>
    <script src="<?= base_url("js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("js/jscript.js") ?>"></script>

</body>
</html>
