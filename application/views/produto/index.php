<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <?php if($this->session->flashdata('success')): ?>
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show mt-2">
                        <?php echo $this->session->flashdata('success'); ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('danger')): ?>
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show mt-2">
                        <?php echo $this->session->flashdata('danger'); ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Produtos</strong>
                </div>
                <div class="card-body">
                    <table id="vagas" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Lote</th>
                                <th>Recebimento</th>
                                <th>Fornecedor</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($produtos)): ?>
                                <?php foreach($produtos as $produto): ?>
                                    <tr>
                                        <td><?= $produto->codigo;?></td>
                                        <td><?= $produto->nome;?></td>
                                        <td><?= $produto->lote;?></td>
                                        <td><?= $produto->recebimento;?></td>
                                        <td><?= $produto->razao_social;?></td>
                                        <td>
                                            <a href="produto/editar/<?php echo $produto->id_produto?>" class="btn btn-primary" title="Editar produto">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <button type="button" class="btn btn-danger" title="Excluir produto" data-toggle="modal" data-target="#excluirProduto">
                                                <span class="fa fa-times"></span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="excluirProduto" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Deseja realmente excluir esse produto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secundary" data-dismiss="modal">
                    Cancelar
                </button>
                <a href="produto/deletar/<?php echo $produto->id_produto?>" class="btn btn-primary">
                    Confirmar
                </a>
            </div>
        </div>
    </div>
</div>
