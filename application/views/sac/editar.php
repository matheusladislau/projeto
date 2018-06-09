 <form action="<?php echo site_url('sac/editar/'.$id); ?>" method="POST" id="form-sac">
   
<div class="animated fadeIn">
   <div class="row justify-content-center align-items-center">
      <div class="col-lg-8">
         <div class="card">
            <div class="card-header">
               <strong class="card-title">Editar SAC</strong>
            </div>

               <div class="card-body">
                  <div class="row">
                     <div class="col-lg-8 form-group">
                        <label class=" form-control-label">Assunto</label>
                        <input type="text" id="titulo" name="titulo" placeholder="Assunto" value="<?=htmlspecialchars($sac[0]->titulo)?>" class="form-control titulo" required>
                     </div>

                     <div class="col-lg-4 form-group">
                        <label class="form-control-label">Status</label>
                        <select name="encerrado" class="form-control" id="encerrado">
                           <option value="0">Aberto</option>
                           <option value="1" <?php if($sac[0]->encerrado){echo "selected";} ?>>Fechado</option>
                        </select>
                     </div>

                     <div class="col-lg-6 form-group">
                        <label class="form-control-label">Produtos</label>
                        <select name="id_produto" class="form-control" id="produto">
                           <option value="0" disabled selected>Selecione um produto</option>
                           <?php foreach ($produtos as $produto): ?>
                              <option value="<?php echo $produto->id_produto ?>" <?php if($sac[0]->id_produto == $produto->id_produto){echo "selected";} ?>><?php echo $produto->nome; ?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>

                     <div class="col-lg-6 form-group">
                        <label class="form-control-label">Cliente</label>
                        <select name="id_cliente" class="form-control" id="produto">
                           <option value="0" disabled selected>Selecione um cliente</option>
                           <?php foreach ($clientes as $cliente): ?>
                              <option value="<?php echo $cliente->id_cliente ?>"  <?php if($sac[0]->id_cliente == $cliente->id_cliente){echo "selected";} ?>><?php echo $cliente->nome; ?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>

                     <div class="col-md-12 form-group">
                        <label class=" form-control-label">Descrição</label>
                        <textarea id="descricao" name="descricao" class="form-control descricao" placeholder="Fale o problema tido com o  produto." required><?= htmlspecialchars($sac[0]->descricao)?></textarea>
                     </div>
                  </div>
               </div>

               <div class="card-footer text-right">
                  <a href="<?= site_url('sac/index')?>" class="btn btn-danger">
                     <i class="fa fa-times"></i> Cancelar
                  </a>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar">
                     <span class="fa fa-pencil-square-o"></span>
                     Editar
                 </button>

               </div>

         </div>

      </div>
   </div>
</div>
 <div class="modal fade" id="editar" role="dialog" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Excluir</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   Deseja realmente editar esse SAC?
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secundary" data-dismiss="modal">
                       Cancelar
                   </button>
                   <button  type="submit" class="btn btn-primary btn-remove-ok">
                       Confirmar
                   </button>
               </div>
           </div>
       </div>
   </div>
</form>
