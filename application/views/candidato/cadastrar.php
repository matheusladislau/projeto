<!-- CANDIDATO -->
<div class="animated fadeIn">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-10">
      <div class="card">
        <div class="card-header">
          <strong class="card-title">Cadastrar Candidato</strong>
        </div>

        <form action="<?php echo site_url('candidato/cadastrar'); ?>" method="POST" id="form_candidato" novalidate="novalidate">
          <div class="card-body card-block">
            <div class="row">

              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">Nome</label>
                <input type="text" id="nome" name="nome" value = "<?php echo isset($old_data['nome']) ? $old_data['nome'] : null;?>" placeholder="Nome completo" class="form-control" required>
              </div>

              <div class="form-group col-12 col-md-6">
                <label for="email-input" class=" form-control-label">E-mail</label>
                <input type="email" id="email" name="email" placeholder="joao@provedor.com" class="form-control" value="<?php echo isset($old_data['email']) ? $old_data['email'] : null;?>" required>
              </div>
              <div class="form-group col-12 col-md-6">
                <label class="form-control-label">Senha</label>
                <input id="senha" value="<?php echo isset($old_data['senha']) ? $old_data['senha'] : null;?>" name="senha" type="password" placeholder="Password" class="form-control <?php echo isset($errors['senha']) ? 'is-invalid' : '' ?>" required>
              </div>

              <div class="form-group col-12 col-md-6">
                <label class="form-control-label">Confirmar Senha</label>
                <input id="senha2" value="<?php echo isset($old_data['senha2']) ? $old_data['senha2'] : null;?>" name="senha2" type="password" placeholder="Repetir password" class="form-control <?php echo isset($errors['senha2']) ? 'is-invalid' : '' ?>" required>
              </div>
              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">Data de Nascimento</label>
                <input type="text" id="data_nacimento" name="data_nacimento" value="<?php echo isset($old_data['data_nascimento']) ? $old_data['data_nascimento'] : null;?>"  placeholder="00/00/0000" class="form-control data">
              </div>

              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">Sexo</label><br>
                <input type="radio" name="sexo" id="sexo_masc" value="0" <?php echo isset($old_data['sexo']) && $old_data['sexo'] == '0' ? 'checked' : 'checked'?> /><label for="sexo_masc">Masculino</label>
                <input type="radio" name="sexo" id="sexo_fem" value="1" <?php echo isset($old_data['sexo']) && $old_data['sexo'] == '1' ? 'checked' : ''?> /><label for="sexo_fem" >Feminino</label>
              </div>

              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">CPF</label>
                <input type="text" id="cpf" name="cpf" value="<?php echo isset($old_data['cpf']) ? $old_data['cpf'] : null;?>" placeholder="000.000.000-00" class="form-control cpf">
              </div>

              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">Telefone</label>
                <input type="text" id="telefone" name="tel"  value="<?php echo isset($old_data['tel']) ? $old_data['tel'] : null;?>" placeholder="(00)00000-0000" class="form-control alter_mask">
              </div>

              <!-- INÍCIO ENDEREÇO -->
              <div class="form-group col-12 col-md-6">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control">
                  <option value="">Selecionar estado</option>
                  <?php foreach($estados as $estado): ?>
                    <option value="<?php echo $estado->id_estado; ?>"><?php echo $estado->nome; ?></option>
                  <?php endforeach ?>
                </select>
              </div>

              <div class="form-group col-12 col-md-6">
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade" class="form-control">
                  <option value="">Selecionar cidade</option>
                </select>
              </div>

              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">CEP</label>
                <input type="cep" id="cep" name="cep" value="<?php echo isset($old_data['cep']) ? $old_data['cep'] : null;?>"  placeholder="00000-000" class="form-control cep" required>
              </div>

              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">Bairro</label>
                <input type="bairro" id="bairro" name="bairro" value="<?php echo isset($old_data['bairro']) ? $old_data['bairro'] : null;?>"  placeholder="Bairro" class="form-control" required>
              </div>
              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">Endereço</label>
                <input type="logradouro" id="logradouro" name="logradouro"  value="<?php echo isset($old_data['logradouro']) ? $old_data['logradouro'] : null;?>"  placeholder="Rua/Av./Travessa..." class="form-control" required>
              </div>

              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">Número</label>
                <input type="numero" id="numero" name="numero" value="<?php echo isset($old_data['numero']) ? $old_data['numero'] : null;?>"  placeholder="Número da residência" class="form-control" required>
              </div>

              <div class="form-group col-12 col-md-6">
                <label class=" form-control-label">Complemento</label>
                <input type="complemento" id="complemento" name="complemento" value="<?php echo isset($old_data['complemento']) ? $old_data['complemento'] : null;?>" placeholder="Complemento" class="form-control" >
              </div>

              <div class="form-group col-12 col-md-6">
                <label for="vaga">Vagas disponíveis</label>
                <select name="vaga" id="vaga" class="form-control">
                  <?php foreach($vagas as $vaga): ?>
                    <option value="<?php echo $vaga->id_vaga; ?>"><?php echo $vaga->nome; ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div> <!-- FIM VAGAS -->

            </div>

              <div class="card-footer text-right">
                <a href="<?=site_url('candidato')?>" class="btn btn-danger btn-sm">
                  <i class="fa fa-times"></i> Cancelar
                </a>
                <button type="submit" class="btn btn-primary btn-sm" name="cadastrar" onclick="this.disabled=true;this.form.submit();">
                  <i class="fa fa-plus"></i> Cadastrar
                </button>
              </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
