# Issue 06 - Teste Cliente

Verificar se a tabela cliente ta cadastrando e editando normalmente. 

#### CLASSE DE EQUIVALÊNCIA

| ID | NOME | CLASSE DE EQUIVALÊNCIA VÁLIDA | CLASSE DE EQUIVALÊNCIA INVÁLIDA |
| ------ | --------- | ---------------| ------------------------------|
|CE1|	Nome|	Somente Letras de 1 a 45 caracteres|	campo em branco, numeros e caracteres especias|
|CE2|	Email|	Letras, Números e caracteres especiais seguindo a validação de email(Ex: XXXX@XXX.com)|	Tags HTML, Fora de Validação, somente numeros|
|CE3|	Data Nascimento|	dia ate 31, mês até 12, ano a partir de 1900|	Letras,caracteres especiais,campo em branco|
|CE4| Sexo| Feminino ou Masculino| Nenhuma alternativa
|CE5| CPF | Somente Números, obrigatório 11 carateres, padrão XXX.XXX.XXX-XX| Campo em Branco, letras, caracteres especiais
|CE6| Telefone |Somente Números, obrigatório 10 ou 11 carateres, padrão (XX) XXXXX-XXXX| Campo em Branco, letras, caracteres especiais
|CE7|Estado | Obrigatório escolher um item no combobox| Nenhuma escolha
|CE8|Cidade |Obrigatório escolher um item no combobox| Nenhuma escolha
|CE9|Endereço| Letras e Números, de 1 a 45 caracteres|Campo vazio, caracteres especiais, só numeros
|CE10|Numero| Número e Letra| Somente letra, campo em branco,caracteres especiais
|CE11|Complemento| Número e Letra| caracteres especiais
|CE12|Bairro| Letras e Números, de 1 a 45 caracteres|Campo vazio, caracteres especiais,so numeros
|CE13|CEP|Somente Números, obrigatório 8 carateres,padrão XXXXX-XXX|Campo em Branco, letras, caracteres especiais
|CE14|	Botão Cadastrar|	Cadastrar tudo o que for de acordo com os requisitos válidos da tabela|	mudar de tela sem correção, cadastrar com erro|
|CE15|	Botão Cancelar Cadastro|	volta pra tela de listagem |	faz qualquer coisa,menos voltar pra tela de listagem|
|CE16|	Botão excluir |	Remover todos os dados contidos naquela tabela|	permanecer os dados,Dar erro na página|
|CE17|	Edição|	editar tudo o que for de acordo com os requisitos válidos da tabela|	qualquer campo que esteja fora dos requisitos|
|CE18|	Botão atualizar|	apresentar modal |atualizar sem confirmação|
|CE19|	Botão Cancelar edição|	volta pra tela de listagem|	faz qualquer coisa,menos voltar pra tela de listagem|
|CE20| Botão novo cadastro| ir para tela de cadastro|	Dar erro na página|

#### TESTE			
| ID |	ENTRADA |	SAÍDA ESPERADA | RESULTADO |
| ------ | --------- | ---------------| ------------------------------|
|CE1|	123456|	aparece msg de erro e não cadastra|	falhou|
|CE1|	ABCD$$$#|	aparece msg de erro e não cadastra|	falhou|
|CE1|	ABCD|	cadastrar|	Falhou|
|CE1|	$$$$$$###****|	aparece msg de erro e não cadastra|	falhou|
|CE1|	nenhum caracter|	aparece msg de erro e não cadastra|	falhou|
|CE1|	mais de 45 caracteres|	aparece msg de erro e não cadastra|	falhou|
|CE1|	ate 45 caracter|cadastrar|	falhou|
|CE2|	testanto@testar.com|	cadastrar|	falhou|
|CE2|	testandotestanto|	aparece msg de erro e não cadastra|	falhou|
|CE2|	13232323|	aparece msg de erro e não cadastra|	falhou|
|CE2|	<script></script>|	aparece msg de erro e não cadastra|	falhou|
|CE3|	32/13/0019|	aparece msg de erro e não cadastra	|falhou|
|CE3|	nenhum caracter|	aparece msg de erro e não cadastra|	falhou|
|CE3|	12/12/2012|	cadastrar|	falhou|
|CE3|	oo/oo/oooo|	aparece msg de erro e não cadastra|	falhou|
|CE4|	nenhuma alternativa|	aparece msg de erro e não cadastra|	falhou|
|CE4|	Feminino|	cadastrar|	falhou|
|CE4|   Masculino|Cadastrar|falhou
|CE5|	somente letras|	não permitir|	ok|
|CE5|	caracteres especiais|	não permitir|	ok|
|CE5|	menor que 11 caracteres|	aparece msg de erro e não cadastra|	falhou|
|CE5|	maior que 11 caracteres|	não permitir|	ok|
|CE5|	dentro do padrão|	cadastrar|	falhou|
|CE5|   campo em branco| aparece msg e não cadastra| falhou
|CE6|	somente letras|	não permitir|	ok|
|CE6|	caracteres especiais|	não permitir|	ok|
|CE6|	menor que 10 caracteres|	aparece msg de erro e não cadastra|	falhou|
|CE6|	maior que 11 caracteres|	não permitir|	ok|
|CE6|	dentro do padrão|	cadastrar|	falhou|
|CE6|   campo em branco| aparece msg e não cadastra| falhou
|CE7|  escolher um item combobox|cadastrar|falhou
|CE7|  não ter nenhum item escolhido no combobox|aparece msg de erro e não cadastra|falhou
|CE8|  escolher um item combobox|cadastrar|falhou
|CE8|  não ter nenhum item escolhido no combobox|aparece msg de erro e não cadastra|falhou
|CE9|	123456|	aparece msg de erro e não cadastra|	falhou|
|CE9|	ABCD$$$#|	aparece msg de erro e não cadastra|	falhou|
|CE9|	ABCD|	cadastrar|	Falhou|
|CE9|	$$$$$$###****|	aparece msg de erro e não cadastra|	falhou|
|CE9|	nenhum caracter|	aparece msg de erro e não cadastra|	falhou|
|CE9|	mais de 45 caracteres|	aparece msg de erro e não cadastra|	falhou|
|CE9|	ate 45 caracter|cadastrar|	falhou|
|CE9|  HHHH5555|cadastrar|falhou
|CE10| 25A|cadastrar|falhou
|CE10|25|cadastrar|falhou
|CE10| hhhhhhh|aparece msg de erro e não cadastra| falhou
|CE10|	$$$$$$###****|	aparece msg de erro e não cadastra|	falhou|
|CE10|	nenhum caracter|	aparece msg de erro e não cadastra|	falhou|
|CE11| casa 1|cadastrar|falhou
|CE11|  A|cadastrar|falhou
|CE11| hhhhhhh|cadastrar| falhou
|CE11|	$$$$$$###****|	aparece msg de erro e não cadastra|	falhou|
|CE11|	nenhum caracter|	aparece msg de erro e não cadastra|	falhou|
|CE12|	123456|	aparece msg de erro e não cadastra|	falhou|
|CE12|	ABCD$$$#|	aparece msg de erro e não cadastra|	falhou|
|CE12|	ABCD|	cadastrar|	Falhou|
|CE12|	$$$$$$###****|	aparece msg de erro e não cadastra|	falhou|
|CE12|	nenhum caracter|	aparece msg de erro e não cadastra|	falhou|
|CE12|	mais de 45 caracteres|	aparece msg de erro e não cadastra|	falhou|
|CE12|	ate 45 caracter|cadastrar|	falhou|
|CE12|  HHHH5555|cadastrar|falhou
|CE13|	somente letras|	não permitir|	ok|
|CE13|	caracteres especiais|	não permitir|	ok|
|CE13|	menor que 8 caracteres|	aparece msg de erro e não cadastra|	falhou|
|CE13|	maior que 8 caracteres|	não permitir|	ok|
|CE13|	dentro do padrão|	cadastrar|	falhou|
|CE13|   campo em branco| aparece msg e não cadastra| falhou
|CE14| todos os dados de acordo com os requisitos válidos| cadastrar| falhou
|CE14| algum campo com erro| aparece msg e não cadastra| falhou
|CE15| clicar no botão cancelar| ir para tela de listar|ok
|CE16| Clicar no botão excluir| Apresentar modal para confirmação| falhou
|CE17| editar os dados de acordo com os requisitos válidos| cadastrar| falhou
|CE17| algum campo com erro| aparece msg e não cadastra| falhou
|CE18| Clicar botão atualizar| apresentar modal de confirmação| falhou
|CE19|Clicar no botão cancelar de atualização! voltar para tela de listar|falhou
|CE20|Clicar no botão novo cadastro|ir para tela de cadastro|falhou