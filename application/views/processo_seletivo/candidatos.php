<div class="row justify-content-center align-items-center">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <strong>Candidatos do Processo Seletivo <b><?php echo($processo_seletivo[0]->nome) ?> </b></strong>
            </div>
            <div class="row" style="margin-top: 5px;">
                <div class="col-md-12">
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success">
                            <p><span class="glyphicon glyphicon-ok-sign"></span> <?= $this->session->flashdata('success') ?></p>
                        </div>
                    <?php elseif ($this->session->flashdata('danger')) : ?>
                        <div class="alert alert-danger">
                            <p><span class="glyphicon glyphicon-remove-sign"></span> <?= $this->session->flashdata('danger') ?></p>
                        </div>
                    <?php endif; ?>
                </div>    
            </div>
            <table id="bootstrap-data-table" class="table table-striped table-bordered datatable">
                     <thead>
                        <tr>
                           <th class="text-center">Candidato</th>
                           <th class="text-center">Nome</th>
                           <th class="text-center">e-mail</th>
                           <th class="text-center">Curriculum</th>
                           <th class="text-center">Ações</th>
                        </tr>
                     </thead>

                     <tbody>
                         <?php foreach ($candidatos as $candidato): ?> 
                           <tr>
                              <td><img src="<?=base_url();?>uploads/profileImage/<?=$candidato->imagem;?>"></td>
                              <td><?php echo $candidato->nome; ?></td>
                              <td><?php echo $candidato->email; ?></td>
                              <td>
                                <?php
                                  if(!empty($candidato->curriculum)) {
                                ?> 
                                &nbsp;&nbsp;- &nbsp;
                                <a href="<?=$candidato->curriculum;?>" download><i class="fa fa-file-o"></i> Meu Curriculum</a>
                                <?php } ?></td>

                              <td class="text-center">

                                 <a title="Aprovar" href="" class="btn btn-success" onclick="aprovar(<?php echo $candidato->id_candidato;?>)">
                                       <span class="fa fa-check"></span>
                                 </a>

                                 <button title="Reprovar" data-href="" class="btn btn-danger" onclick="reprovar(<?php echo $candidato->id_candidato;?>)">
                                   <span class="fa fa-times"></span>
                                 </button>
                              </td><!-- Fim dos botões -->
                           </tr>
                       <?php endforeach ?>
                     </tbody>
                   </table>
                       

        </div>
    </div>
</div>

