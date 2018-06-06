<!-- <pre>
<?php print_r($processos_seletivos); ?>
</pre> -->
<div class="animated fadeIn">
    <div class="row" >
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Processos Seletivos</strong>
                    <a href="<?=site_url('processo_seletivo/cadastrar');?>" class="btn btn-danger">CADASTRAR</a>
                </div>
                <div class="card-body">
                   <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th class="text-center">Codigo</th>
                           <th class="text-center">Nome</th>
                           <th class="text-center">Cargo</th>
                           <th class="text-center">Numero de Vagas</th>
                           <th class="text-center">Ações</th>
                        </tr>
                     </thead>

                     <tbody>
                        <?php foreach ($processos_seletivos as $processo_seletivo): ?>
                           <tr>
                              <td class="text-center"><?=$processo_seletivo->codigo; ?></td>
                              <td class="text-center"><?=$processo_seletivo->nome; ?></td>
                              <td class="text-center"><?=$processo_seletivo->nome_cargo; ?></td>
                              <td class="text-center"><?=$processo_seletivo->vagas; ?></td>

                              <td class="text-center">
                                 <a href="<?=site_url('processo_seletivo/excluir/'.$processo_seletivo->id_processo_seletivo);?>" class="btn btn-danger">
                                       <span class="fa fa-times"></span>
                                   </a>

                                 <a href="<?=site_url('processo_seletivo/editar/'.$processo_seletivo->id_processo_seletivo);?>" class="btn btn-primary">
                                       <span class="fa fa-pencil-square-o"></span>
                                   </a>

                                 <a href="<?=site_url('processo_seletivo/info/'.$processo_seletivo->id_processo_seletivo);?>" class="btn btn-warning">
                                       <span class="fa fa-clipboard"></span>
                                   </a>

                              </td>
                           </tr>
                       <?php endforeach ?>
                     </tbody>
                   </table>
               </div>
            </div>
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
        </div>
    </div>
</div>


<script src="<?= base_url('assets/js/lib/data-table/datatables.min.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/dataTables.bootstrap.min.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/dataTables.buttons.min.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/buttons.bootstrap.min.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/jszip.min.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/pdfmake.min.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/vfs_fonts.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/buttons.html5.min.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/buttons.print.min.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/buttons.colVis.min.js');?>"></script>
<script src="<?= base_url('assets/js/lib/data-table/datatables-init.js');?>"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable();
  } );
</script>
