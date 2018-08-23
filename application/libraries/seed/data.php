<?php
$seeds = array(
  'setor' => array(
    'dataset' => array(
      array(
        array(
          'fields' => array(
            'nome'
          ),
          'values' => array(
              'Financeiro'
          ),
        ),
        array(
          'fields' => array(
            'nome'
          ),
          'values' => array(
              'Contabilidade'
          ),
        ),
        array(
          'fields' => array(
            'nome'
          ),
          'values' => array(
              'Regursos Humanos'
          ),
        ),
        array(
          'fields' => array(
            'nome'
          ),
          'values' => array(
              'Prestação de contas'
          ),
        )
      )
    ),
  ),
  // Pessoa
  'pessoa' => array(
    'dataset' => array(
      array(
        // --------------------------Cliente--------------------------------
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Camilo Silva',
              'camilosilva@teste.com',
              '1998-10-20'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Pedro Silva',
              'pedrosilva@teste.com',
              '1990-10-20'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Matheus Santos',
              'matheussantos@teste.com',
              '1996-11-23'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Rodrigo Santos',
              'rodrigosantos@teste.com',
              '1996-11-23'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Fernando Santos',
              'fernandosantos@teste.com',
              '1996-11-23'
          ),
        ),
        // --------------------------Candidato--------------------------------
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Camila Mota',
              'camilamota@teste.com',
              '1998-10-20'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Pietra Silva',
              'pietrasilva@teste.com',
              '1990-10-20'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Maitê Santos',
              'maitesantos@teste.com',
              '1996-11-23'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Yasmyn Santos',
              'yasminsantos@teste.com',
              '1996-11-23'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Carla Santos',
              'carlasantos@teste.com',
              '1996-11-23'
          ),
        ),

        // --------------------------Funcionario--------------------------------
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Ederson Pia',
              'edersonpia@teste.com',
              '1998-10-20'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Luciana Santos',
              'luciansantos@teste.com',
              '1990-10-20'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Paloma Cabral',
              'palomacabral@teste.com',
              '1996-11-23'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Carol Santos',
              'Carolsantos@teste.com',
              '1996-11-23'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Amanda Santos',
              'amandasantos@teste.com',
              '1996-11-23'
          ),
        ),
        // --------------------------Fornecedor--------------------------------
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'João Carlos',
              'joaocarlos@teste.com',
              '1998-10-20'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Diana Costa',
              'dianacoste@teste.com',
              '1990-10-20'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Amanda Ribeiro',
              'amandaribeiro@teste.com',
              '1996-11-23'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Joaquim Costa',
              'joaquincosta@teste.com',
              '1996-11-23'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'email',
            'data_criacao'
          ),
          'values' => array(
              'Carlos Lopes',
              'carloslopes@teste.com',
              '1996-11-23'
          ),
        )
      )
    ),
  ),
  // id_pessoa 1 - 15 
  'pessoa_fisica' => array(
    'dataset' => array(
      array(
        // --------------------------Cliente--------------------------------
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '1',
              '1996-03-22',
              '0'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '2',
              '1996-03-22',
              '0'
          ),
        ),

        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '3',
              '1999-12-03',
              '0'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '4',
              '1999-12-01',
              '0'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '5',
              '1999-12-21',
              '0'
          ),
        ),
        // --------------------------Candidato--------------------------------

        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '6',
              '1996-03-22',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '7',
              '1996-03-22',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '8',
              '1999-12-03',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '9',
              '1999-12-01',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '10',
              '1999-12-21',
              '1'
          ),
        ),



        // --------------------------Funcionário--------------------------------

        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '11',
              '1996-03-22',
              '0'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '12',
              '1996-03-22',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '13',
              '1999-12-03',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '14',
              '1999-12-01',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '15',
              '1999-12-21',
              '1'
          ),
        ),
      )
    ),
  ),
  'usuario' => array(
    'dataset' => array(
      array(
        // --------------------------Cliente--------------------------------
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
              'admin@adimin.com',
              'admin',
              '1',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
              'pedrosilva@teste.com',
              'pedrosilva',
              '4',
              '2'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'matheussantos@teste.com',
            'matheussantos',
            '4',
            '3'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'rodrigosantos@teste.com',
            'rodrigosantos',
            '4',
            '4'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'fernandosantos@teste.com',
              'fernandosantos',
              '4',
              '5'
          ),
        ),
        // --------------------------Candidato--------------------------------
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'camilamota@teste.com',
              'camilamota',
              '5',
              '6'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'pietrasilva@teste.com',
              'pietrasilva',
              '5',
              '7'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'maitesantos@teste.com',
              'maitesantos',
              '5',
              '8'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'yasminsantos@teste.com',
              'yasminsantos',
              '5',
              '9'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'carlasantos@teste.com',
              'carlasantos',
              '5',
              '10'
          ),
        ),

        // --------------------------Funcionario--------------------------------
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'edersonpia@teste.com',
              'edersonpia',
              '6',
              '11'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'luciansantos@teste.com',
              'luciansantos',
              '6',
              '12'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'palomacabral@teste.com',
              'palomacabral',
              '6',
              '13'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'carolsantos@teste.com',
              'carolsantos',
              '6',
              '14'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
              'Amanda Santos',
              'amandasantos@teste.com',
              '6',
              '15'
          ),
        ),
        // --------------------------Fornecedor--------------------------------
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
              'joaocarlos@teste.com',
              'joaocarlos',
              '3',
              '16'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
              'dianacoste@teste.com',
              'dianacoste',
              '3',
              '17'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
              'amandaribeiro@teste.com',
              'amandaribeiro',
              '3',
              '18'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'joaquincosta@teste.com',
              'joaquincosta',
              '3',
              '19'
          ),
        ),
        array(
          'fields' => array(
            'login',
            'senha',
            'id_grupo_acesso',
            'id_pessoa'
          ),
          'values' => array(
            'carloslopes@teste.com',
              'carloslopes',
              '3',
              '20'
          ),
        )
      )
    ),
  ),
  // id_pessoa 1 - 15 
  'pessoa_fisica' => array(
    'dataset' => array(
      array(
        // --------------------------Cliente--------------------------------
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '1',
              '1996-03-22',
              '0'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '2',
              '1996-03-22',
              '0'
          ),
        ),

        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '3',
              '1999-12-03',
              '0'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '4',
              '1999-12-01',
              '0'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '5',
              '1999-12-21',
              '0'
          ),
        ),
        // --------------------------Candidato--------------------------------

        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '6',
              '1996-03-22',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '7',
              '1996-03-22',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '8',
              '1999-12-03',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '9',
              '1999-12-01',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '10',
              '1999-12-21',
              '1'
          ),
        ),



        // --------------------------Funcionário--------------------------------

        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '11',
              '1996-03-22',
              '0'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '12',
              '1996-03-22',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '13',
              '1999-12-03',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '14',
              '1999-12-01',
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'data_nascimento',
            'sexo'
          ),
          'values' => array(
              '15',
              '1999-12-21',
              '1'
          ),
        ),
      )
    ),
  ),
  // id_pessoa 16 - 20 
  'pessoa_juridica' => array(
    'dataset' => array(
      array(
        // --------------------------Cliente--------------------------------
        array(
          'fields' => array(
            'id_pessoa',
            'razao_social'
          ),
          'values' => array(
              '16',
              'HGT - Contrabilidade'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'razao_social'
          ),
          'values' => array(
              '17',
              'Faber Castel'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'razao_social'
          ),
          'values' => array(
              '18',
              'Recort - Papelaria'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'razao_social'
          ),
          'values' => array(
              '19',
              'Bic - Canetas'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa',
            'razao_social'
          ),
          'values' => array(
              '20',
              'Tilibra'
          ),
        ),
      )
    ),
  ),       
  // id_pessoa 1 - 5
  'cliente' => array(
    'dataset' => array(
      array(
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '2'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '3'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '4'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '5'
          ),
        )
      )
    ),
  ),
  // id_pessoa 6 - 10
  'candidato' => array(
    'dataset' => array(
      array(
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '6'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '7'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '8'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '9'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '10'
          ),
        )
      )
    ),
  ),
  // id_pessoa 11 - 15
  'funcionario' => array(
    'dataset' => array(
      array(
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '11'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '12'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '13'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '14'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa'
          ),
          'values' => array(
              '15'
          ),
        )
      )
    ),
  ),
   // id_pessoa 16 - 20
  'fornecedor' => array(
    'dataset' => array(
      array(
        array(
          'fields' => array(
            'id_pessoa_juridica'
          ),
          'values' => array(
              '1'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa_juridica'
          ),
          'values' => array(
              '2'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa_juridica'
          ),
          'values' => array(
              '3'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa_juridica'
          ),
          'values' => array(
              '4'
          ),
        ),
        array(
          'fields' => array(
            'id_pessoa_juridica'
          ),
          'values' => array(
              '5'
          ),
        )
      )
    ),
  ),
 'endereco' => array(
  'dataset' => array(
    array(
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11673-040',
          'Poiares',
          'Rua José Miranda de Faria',
          '125',
          '',
          '1',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11660-405',
          'Benfica',
          'Rua Antônio Mathias dos Reis Filho',
          '658',
          'Fundos',
          '2',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11674-640',
          'Tinga',
          'Rua Filadelfo Reis',
          '658',
          'Fundos',
          '3',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11675-030',
          'Ponte Seca',
          'Rua José Benedito de Faria',
          '658',
          '',
          '4',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11665-070',
          'Indaiá',
          'Avenida Pernambuco',
          '32',
          '',
          '5',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '13560-970',
          'Centro',
          'Rua Episcopal',
          '112',
          '',
          '6',
          'São Carlos',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '13566-590',
          'Parque Arnold Schimidt',
          'Avenida Trabalhador Sancarlense',
          '474',
          '',
          '7',
          'São Carlos',
          'SP'
        ),
      ),

      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '13575-004',
          'Vila Boa Vista 1',
          'Rua Sebastião José Alexandre',
          '856',
          '',
          '8',
          'São Carlos',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '13575-004',
          'Vila Boa Vista 1',
          'Rua Sebastião José Alexandre',
          '856',
          '',
          '9',
          'São Carlos',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11660-005',
          'Centro',
          'Avenida Arthur Costa Filho',
          '248',
          '',
          '10',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11660-005',
          'Centro',
          'Avenida Arthur Costa Filho',
          '248',
          '',
          '11',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11660-300',
          'Centro',
          'Avenida Oswaldo Cruz',
          '248',
          '',
          '12',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11660-130',
          'Centro',
          'Rua Sebastião Mariano Nepomuceno',
          '168',
          '',
          '13',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11660-270',
          'Centro',
          'Rua Luiz Passos Júnior',
          '168',
          '',
          '14',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11661-300',
          'Balneário Forest',
          'Avenida Presidente Castelo Branco',
          '168',
          '',
          '15',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11660-005',
          'Centro',
          'Avenida Arthur Costa Filho',
          '168',
          '',
          '16',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11661-230',
          'Balneário Forest',
          'Rua Queluz',
          '351',
          '',
          '17',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11661-415',
          'Sumaré',
          'Rua Horácio Valério dos Santos',
          '957',
          '',
          '18',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11674-560',
          'Tinga',
          'Rua Miguel Adelaide',
          '841',
          '',
          '19',
          'Caraguatatuba',
          'SP'
        ),
      ),
      array(
        'fields' => array(
          'cep',
          'bairro',
          'logradouro',
          'numero',
          'complemento',
          'id_pessoa',
          'cidade',
          'estado'
        ),
        'values' => array(
          '11670-020',
          'Barranco Alto',
          'Rua Ismael Iglesias',
          '351',
          '',
          '20',
          'Caraguatatuba',
          'SP'
        ),
      ),
      ),
    )
  ),

'documento' => array(
  'dataset' => array(
    array(
      array(
        'fields' => array(
          'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '374.792.834-07',
          'cpf',
          '1'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '731.236.712-75',
          'cpf',
          '2'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '394.837.759-65',
          'cpf',
          '3'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '215.735.616-90',
          'cpf',
          '4'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '173.832.582-23',
          'cpf',
          '5'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '939.556.578-09',
          'cpf',
          '6'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '833.281.143-00',
          'cpf',
          '7'
        ),
      ),

      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '427.484.675-07',
          'cpf',
          '8'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '433.055.654-54',
          'cpf',
          '9'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '556.347.541-78',
          'cpf',
          '10'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '584.258.854-42',
          'cpf',
          '11'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '218.367.372-97',
          'cpf',
          '12'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '804.992.368-15',
          'cpf',
          '13'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '147.342.332-50',
          'cpf',
          '14'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '176.315.189-12',
          'cpf',
          '15'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '35.477.426/0001-15',
          'cnpj',
          '16'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '13.386.062/0001-25',
          'cnpj',
          '17'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '00.652.062/0001-88',
          'cnpj',
          '18'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '99.450.233/0001-53',
          'cnpj',
          '19'
        ),
      ),
      array(
        'fields' => array(
         'numero',
          'tipo',
          'id_pessoa'
        ),
        'values' => array(
          '52.096.012/0001-65',
          'cnpj',
          '20'
        ),
      ),
      ),
    )
  ),
  'telefone' => array(
    'dataset' => array(
      array(
        array(
          'fields' => array(
            'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 99587-3123',
            '1'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 98875-3123',
            '2'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 95877-3123',
            '3'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 97748-3123',
            '4'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 99915-3123',
            '5'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 95248-3123',
            '6'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 98754-3123',
            '7'
          ),
        ),
  
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 99745-3123',
            '8'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 98875-3123',
            '9'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 98574-3123',
            '10'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 95487-3123',
            '11'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 95326-3123',
            '12'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 95872-3123',
            '13'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 95872-3123',
            '14'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 95874-3123',
            '15'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 55484-3123',
            '16'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 95872-3123',
            '17'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 98542-3123',
            '18'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 65214-3123',
            '19'
          ),
        ),
        array(
          'fields' => array(
           'numero',
            'id_pessoa'
          ),
          'values' => array(
            '(13) 25415-3123',
            '20'
          ),
        ),
        ),
      )
    ),

  
  'produto' => array(
    'dataset' => array(
      array(
        array(
          'fields' => array(
            'codigo',
            'nome',
            'fabricacao',
            'validade',
            'lote',
            'recebimento',
            'id_fornecedor',
            'valor'
          ),
          'values' => array(
            '741',
            'imposto de renda',
            '2018-01-02',
            '2018-03-03',
            '15987x',
            '2018-01-03',
            '1',
            '1,417.98'
          ),
        ),
        array(
          'fields' => array(
            'codigo',
            'nome',
            'fabricacao',
            'validade',
            'lote',
            'recebimento',
            'id_fornecedor',
            'valor'
          ),
          'values' => array(
            '369',
            'lapis',
            '2017-01-02',
            '2018-01-03',
            '15987x',
            '2018-01-01',
            '4',
            '1.98'
          ),
        ),
        array(
          'fields' => array(
            'codigo',
            'nome',
            'fabricacao',
            'validade',
            'lote',
            'recebimento',
            'id_fornecedor',
            'valor'
          ),
          'values' => array(
            '23494',
            'lapis',
            '2017-01-02',
            '2018-02-03',
            '15987x',
            '2018-01-03',
            '4',
            '117.98'
          ),
        ),
        array(
          'fields' => array(
            'codigo',
            'nome',
            'fabricacao',
            'validade',
            'lote',
            'recebimento',
            'id_fornecedor',
            'valor'
          ),
          'values' => array(
            '2336494',
            'caderno',
            '2017-01-02',
            '2018-02-03',
            '152547x',
            '2018-01-03',
            '5',
            '117.98'
          ),
        ),
        array(
          'fields' => array(
            'codigo',
            'nome',
            'fabricacao',
            'validade',
            'lote',
            'recebimento',
            'id_fornecedor',
            'valor'
          ),
          'values' => array(
            '2336494',
            'resma',
            '2017-01-02',
            '2020-12-03',
            '152547x',
            '2018-01-03',
            '3',
            '15.98'
          ),
        ),
        array(
          'fields' => array(
            'codigo',
            'nome',
            'fabricacao',
            'validade',
            'lote',
            'recebimento',
            'id_fornecedor',
            'valor'
          ),
          'values' => array(
            '233464364',
            'cartucho',
            '2017-01-02',
            '2020-12-03',
            '152547x',
            '2018-01-03',
            '3',
            '15.98'
          ),
        ),
      )
    ),
  ),

  'cargo' => array(
    'dataset' => array(
      array(
        array(
          'fields' => array(
            'nome',
            'descricao',
            'salario',
            'id_setor'
          ),
          'values' => array(
            'Contador',
            'Realiza a contabilidade da empresa',
            '417.98',
            '2'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'descricao',
            'salario',
            'id_setor'
          ),
          'values' => array(
            'Auxiliar Financeiro',
            'Auxilia nas tarefas financeiras da empresa',
            '417.98',
            '1'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'descricao',
            'salario',
            'id_setor'
          ),
          'values' => array(
            'Recrutador',
            'Realiza o rerutamento da empresa',
            '317.98',
            '3'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'descricao',
            'salario',
            'id_setor'
          ),
          'values' => array(
            'Agente Administrativo',
            'Realiza a prestação de contas da empresa',
            '417.98',
            '4'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'descricao',
            'salario',
            'id_setor'
          ),
          'values' => array(
            'Auxiliar de RH',
            'Realiza o controle do RH da empresa',
            '287.98',
            '3'
          ),
        ),
        array(
          'fields' => array(
            'nome',
            'descricao',
            'salario',
            'id_setor'
          ),
          'values' => array(
            'Gerente Financeiro',
            'Realiza o controle financeiro da empresa',
            '617.98',
            '1'
          ),
        ),
      )
    ),
  ),



);
