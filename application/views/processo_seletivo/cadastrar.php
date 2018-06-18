<!-- <pre>
<?php print_r($vagas); ?>
</pre> -->
<div class="row justify-content-center align-items-center">
   <div class="col-lg-10">
  <div class="card">
    <div class="card-header">
      <strong>Cadastrar Processo Seletivo</strong>
    </div>
    <?php echo validation_errors(); ?>
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
     <form action="<?php echo site_url('processo_seletivo/cadastrar'); ?>" method="POST" id="form_processo_seletivo" >
       <div class="card-body card-block">

        <div class="row">

          <div class="form-group col-12 col-md-6">
             <label class=" form-control-label">Código</label>
             <input type="text" id="codigo" name="codigo" placeholder="Código do processo seletivo" class="form-control" required>
           </div>

          <div class="form-group col-12 col-md-6">
             <label class=" form-control-label">Nome</label>
             <input type="text" id="nome" name="nome" placeholder="Nome do processo seletivo" class="form-control" required>
           </div>

           <div class="form-group col-12 col-md-6">
             <label class=" form-control-label">Data de início</label>
             <input type="text" id="data_inicio" name="data_inicio" placeholder="00/00/0000" class="form-control data">
           </div>

           <div class="form-group col-12 col-md-6">
             <label class=" form-control-label">Data de término</label>
             <input type="text" id="data_fim" name="data_fim" placeholder="00/00/0000" class="form-control data">
           </div>

           <div class="form-group col-12">
            <label class=" form-control-label">Vaga</label>
             <select class="form-control" name="id_vaga">
               <option value="">Selecionar vaga</option>
               <?php foreach ($vagas as $vaga): ?>
                 <option value="<?php echo $vaga->id_vaga ?>"><?php echo $vaga->cargo; ?></option>
               <?php endforeach; ?>
             </select>
           </div>

           <div class="form-group col-12">
             <label class=" form-control-label">Descrição</label>
             <textarea auto-resize placeholder="Descrição do processo seletivo" id="descricao" name="descricao" class="form-control" required></textarea>
             <span class="invalid-feedback" id="invalid-descricao">
               Campo obrigatório
             </span>
           </div>

						 <div class="form-group col-12">
							 <div id="newlink">
							 <label class=" form-control-label">Etapas</label>
               <!-- Aqui vai o template -->
						 </div>
					 </div>

       </div>
       <a title="Adicionar Nova Etapa" id="addnew" class="btn btn-primary text-white btn-sm addDiv" href="javascript:add_etapa()">
        <i class="fa fa-plus"></i> Adicionar Etapa </a>
    </div>

     <div class="card-footer text-right">
        <a title="Cancelar Cadastro" href="<?=site_url('processo_seletivo')?>" class="btn btn-danger btn-sm">
            <i class="fa fa-times"></i> Cancelar
          </a>
          <button title="Cadastrar Processo" type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Cadastrar
          </button>

        </div>
       </form>
  </div>
</div>

<!-- Template -->
<div class="form-group col-12 cloned-main" id="template1" style="display:none;">
  <div class="cloned-div">
    <label class="form-control-label">Nome</label>
    <input type="text" name="nome_etapa[]" placeholder="Nome da etapa" class="form-control" required>
    <label class="form-control-label">Descrição</label>
    <textarea auto-resize placeholder="Descrição da etapa"  name="descricao_etapa[]" class="form-control" required></textarea>
    <a name="button" class="btn btn-danger btn-sm remDiv"><i class="fa fa-times"></i> Excluir</a><br><br>
  </div>
</div>
