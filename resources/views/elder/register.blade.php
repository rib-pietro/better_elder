@extends('main')

@section('content')

<div class="main">
	<div class="container-fluid">
		<h1 class="h1">Cadastro de Idosos</h1>
		<div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          	<form class="needs-validation" novalidate action="/customer/create" method="post">
          		{{ csrf_field() }}
	            <div class="row">
	              <div class="col-md-8 mb-3">
	                <label for="firstName">Nome completo *:</label>
	                <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="customers_name">
	                <div class="invalid-feedback">
	                  Valid first name is required.
	                </div>
	              </div>
	              <div class="col-md-4 mb-3">
	                <label for="age">Idade</label>
	                <input type="number" class="form-control" id="age" placeholder="" value="" required name="age">
	                <div class="invalid-feedback">
	                  Valid last name is required.
	                </div>
	              </div>
	            </div>

	            <div class="row">
	              <div class="col-md-4 mb-3">
	                <label for="cpf">CPF*:</label>
	                <input type="text" class="form-control" id="cpf" placeholder="" value="" required name="cpf">
	                <div class="invalid-feedback">
	                  Valid first name is required.
	                </div>
	              </div>
	              <div class="col-md-4 mb-3">
	                <label for="sus_number">Nº Cartão do SUS</label>
		                <input type="text" class="form-control" id="sus_number" placeholder="00000000000000" required name="sus_number">
		                <div class="invalid-feedback" style="width: 100%;">
		                  Your username is required.
		                </div>
	              </div>
	              <div class="col-md-4 mb-3">
	                <label for="document">Documento</label>
		                <input type="text" class="form-control" id="document" placeholder="00000000000000" required name="document">
		                <div class="invalid-feedback" style="width: 100%;">
		                  Your username is required.
		                </div>
	              </div>
	            </div>

	            <div class="row">
	              <div class="col-md-6 mb-3">
	                <label for="birth_date">Data de nascimento*:</label>
	                <input type="date" class="form-control" id="birth_date" placeholder="" value="" required name="birth_date">
	                <div class="invalid-feedback">
	                  Valid first name is required.
	                </div>
	              </div>
	              <div class="col-md-6 mb-3">
	                <label for="sex">Sexo</label>
	                <select class="custom-select d-block w-100" id="sex" required name="sex">
	                  <option value="m">Masculino</option>
	                  <option value="f">Feminino</option>
	                </select>
	                <div class="invalid-feedback" style="width: 100%;">
	                  Your username is required.
	                </div>
	              </div>
	            </div>

	            <div class="mb-3">
	              	<label for="mothers_name">Nome da mãe:*</label>
		            <input type="text" class="form-control" id="mothers_name"  required name="mothers_name">
		            <div class="invalid-feedback" style="width: 100%;">
		              Your username is required.
		            </div>
	            </div>

	            <h4 class="mb-3">Sabe ler e escrever?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="alphabetized_yes" name="alphabetized" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="alphabetized_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="alphabetized_no" name="alphabetized" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="alphabetized_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Tem religião?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="religion_yes" name="religion" type="radio" class="custom-control-input enabler" data-target="religion" checked required value="1">
	                <label class="custom-control-label" for="religion_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="religion_no" name="religion" type="radio" class="custom-control-input disabler" data-target="religion" required value="0">
	                <label class="custom-control-label" for="religion_no">Não</label>
	              </div>
	              <div class="mt-2">
	              	<input type="text" class="form-control" id="religion" placeholder="" required>	
	              </div>
	              
	            </div>

	            <div class="mb-3">
	              	<label for="scholarity">Escolaridade:*</label>
		            <input type="text" class="form-control" id="scholarity"  required name="scholarity">
		            <div class="invalid-feedback" style="width: 100%;">
		              Your username is required.
		            </div>
	            </div>

	            <div class="mb-3">
	              	<label for="occupation">Ocupação:*</label>
		            <input type="text" class="form-control" id="occupation"  required name="occupation">
		            <div class="invalid-feedback" style="width: 100%;">
		              Your username is required.
		            </div>
	            </div>

	            <div class="mb-3">
	                <label for="ethnicity">Etnia:*</label>
	                <select class="custom-select d-block w-100" id="ethnicity" required name="ethnicity">
	                  <option value="branco">Branco</option>
	                  <option value="pardo">Pardo</option>
	                  <option value="preto">Preto</option>
	                  <option value="indígena">Indígena</option>
	                  <option value="amarelo">Amarelo</option>
	                </select>
	                <div class="invalid-feedback" style="width: 100%;">
	                  Your username is required.
	                </div>
	          	</div>

	          	<div class="mb-3">
	                <label for="ethnicity">Estado civil:*</label>
	                <select class="custom-select d-block w-100" id="ethnicity" required name="ethnicity">
	                  <option value="solteiro">Solteiro (a)</option>
	                  <option value="casado">Casado (a)</option>
	                  <option value="divorciado">Divorciado (a)</option>
	                  <option value="viúvo">Viúvo (a)</option>
	                </select>
	                <div class="invalid-feedback" style="width: 100%;">
	                  Your username is required.
	                </div>
	          	</div>

	          	<div class="mb-3">
	                <label for="local">Unidade básica de saúde que frequenta:*</label>
	                <select class="custom-select d-block w-100" id="local" required name="id_local">
	                	@foreach($receptions as $r)
	                  	<option value="{{$r->id_local}}">
	                  		{{$r->local_name}}
	                  	</option>
	                  	@endforeach
	                </select>
	                <div class="invalid-feedback" style="width: 100%;">
	                  Your username is required.
	                </div>
	          	</div>

	          	<h4>Tem alguma alergia de maior gravidade?</h4>

	          	<div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="gravity_yes" name="gravity" type="radio" class="custom-control-input enabler" data-target="gravity_alergy" checked required value="1">
	                <label class="custom-control-label" for="gravity_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="gravity_no" name="gravity" type="radio" class="form-control custom-control-input disabler" data-target="gravity_alergy" data-input="gravity_alergy" required value="0">
	                <label class="custom-control-label" for="gravity_no">Não</label>
	              </div>
	              <div class="mt-2">
	              	<input type="text" class="form-control" id="gravity_alergy" placeholder="" required value="">	
	              </div>
	              
	            </div>

	            <h4>Tem alguma deficiência?</h4>

	          	<div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="deficiency_yes" name="deficiency_input" type="radio" class="custom-control-input enabler" data-target="deficiency" checked required value="1">
	                <label class="custom-control-label" for="deficiency_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="deficiency_no" data-input="deficiency" name="deficiency_input" type="radio" class="custom-control-input disabler" data-target="deficiency" required value="0">
	                <label class="custom-control-label" for="deficiency_no">Não</label>
	              </div>
	              <div class="mt-2">
	              	<input type="text" class="form-control" id="deficiency" placeholder="" required>	
	              </div>
	              
	            </div>

	            <div class="mb-3">
	                <label for="ethnicity">Tipo sanguíneo:*</label>
	                <select class="custom-select d-block w-100" id="ethnicity" required name="ethnicity">
	                	<option value="">Não sabe informar</option>
		                  <option value="a+">A+</option>
		                  <option value="a-">A-</option>
		                  <option value="b+">B+</option>
		                  <option value="b-">B-</option>
		                  <option value="ab+">AB+</option>
		                  <option value="ab-">AB-</option>
		                  <option value="o+">O+</option>
		                  <option value="o-">O-</option>
	                </select>
	                <div class="invalid-feedback" style="width: 100%;">
	                  Your username is required.
	                </div>
	          	</div>

	          	<div class="row">
	              <div class="col-md-4 mb-3">
	                <label for="zipcode">CEP *:</label>
	                <input type="text" class="form-control" id="zipcode" placeholder="" value="" required name="zipcode">
	                <div class="invalid-feedback">
	                  Valid first name is required.
	                </div>
	              </div>
	              <div class="col-md-8 mb-3">
	                <label for="street">Rua</label>
	                <input type="text" class="form-control" id="street" placeholder="" value="" required name="street">
	                <div class="invalid-feedback">
	                  Valid last name is required.
	                </div>
	              </div>
	            </div>

	            <div class="row">
	              <div class="col-md-8 mb-3">
	                <label for="city">Cidade *:</label>
	                <input type="text" class="form-control" id="city" placeholder="" value="" required name="city">
	                <div class="invalid-feedback">
	                  Valid first name is required.
	                </div>
	              </div>
	              <div class="col-md-4 mb-3">
	                <label for="complement">Complemento:*</label>
	                <input type="text" class="form-control" id="complement" placeholder="" value="" required name="complement">
	                <div class="invalid-feedback">
	                  Valid first name is required.
	                </div>
	              </div>
	            </div>

	            <div class="row">
	              <div class="col-md-8 mb-3">
	                <label for="neighbourhood">Bairro *:</label>
	                <input type="text" class="form-control" id="neighbourhood" placeholder="" value="" required name="neighbourhood">
	                <div class="invalid-feedback">
	                  Valid first name is required.
	                </div>
	              </div>
	              <div class="col-md-4 mb-3">
	                <label for="state">UF:*</label>
	                <select class="custom-select d-block w-100" id="state" required name="state">
	                  <option value="">Choose...</option>
	                  <option>California</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please provide a valid state.
	                </div>
	              </div>
	            </div>

	            <div class="mb-3">
	              <label for="phone">Telefone: *</label>
	              <input type="text" class="form-control" id="phone" placeholder="1234 Main St" required name="phone">
	              <div class="invalid-feedback">
	                Please enter your shipping address.
	              </div>
	            </div>

	            <h4 class="mb-3">Vocẽ mora sozinho?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="alone_yes" name="live_alone" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="alone_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="alone_no" name="live_alone" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="alone_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Você mora com familiares?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="family_yes" name="live_with_family" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="family_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="family_no" name="live_with_family" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="family_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Você mora com seu cônjuge ou companheiro(a)?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="partner_yes" name="live_with_partner" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="partner_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="partner_no" name="live_with_partner" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="partner_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Nos últimos 30 dias, você se encontrou com amigos ou familiares para conversar ou fazer alguma atividade, como ir ao cinema, ir à igreja ou passear?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="activity_yes" name="activity_together" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="activity_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="activity_no" name="activity_together" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="activity_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">em caso de necessidade, você conta com alguém para acompanhá-lo(a) à Unidade de Sáude ou a uma consulta?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="company_yes" name="company_attendance" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="company_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="company_no" name="company_attendance" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="company_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Você tem fácil acesso aos serviços de farmácia, padaria ou supermercados?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="commerce_yes" name="basic_commerce_access" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="commerce_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="commerce_no" name="basic_commerce_access" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="commerce_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Você tem fácil acesso ao transporte?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="transport_yes" name="transport_access" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="transport_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="transport_no" name="transport_access" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="transport_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Você trabalha atualmente?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="working_yes" name="currently_working" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="working_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="working_no" name="currently_working" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="working_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Você recebe aposentadoria ou pensão?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="pension_yes" name="receives_pension" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="pension_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="pension_no" name="receives_pension" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="pension_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Você recebe Benefício de Prestação Continuada (BPC/LOAS)?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="benefit_yes" name="receives_benefit" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="benefit_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="benefit_no" name="receives_benefit" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="benefit_no">Não</label>
	              </div>
	            </div>

	            <h4 class="mb-3">Você recebe Bolsa Família?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="government_yes" name="receives_government_benefit" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="government_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="government_no" name="receives_government_benefit" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="government_no">Não</label>
	              </div>
	            </div>

	            <div class="mb-3">
	                <label for="country">Em geral, comparando-se com outras pessoas de sua idade. Você diria que sua saúde é:</label>
	                <select class="custom-select d-block w-100" id="country" required>
	                	<option value="excelente">Excelente</option>
	                  <option value="muito boa">Muito boa</option>
	                  <option value="boa">Boa</option>
	                  <option value="regular">Regular</option>
	                  <option value="ruim">ruim</option>
	                  <option value="muito ruim">muito ruim</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<h4 class="mb-3">Responda às perguntas a seguir quanto a sua dificuldade média para executar as seguintes atividades:</h4>

	        	<div class="mb-3">
	                <label for="country">Curvar-se, agachar, ou ajoelhar-se</label>
	                <select class="custom-select d-block w-100" id="country" required name="curving">
	                	<option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="média dificuldade">média dificuldade</option>
	                  <option value="nenhuma dificuldade">nenhuma dificuldade</option>
	                  <option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="muita dificuldade">muita dificuldade</option>
	                  <option value="não consegue">não consegue</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<div class="mb-3">
	                <label for="country">Levantar iu carregar objetos com peso aproximado de 5kg</label>
	                <select class="custom-select d-block w-100" id="country" required name="carry_objects">
	                	<option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="média dificuldade">média dificuldade</option>
	                  <option value="nenhuma dificuldade">nenhuma dificuldade</option>
	                  <option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="muita dificuldade">muita dificuldade</option>
	                  <option value="não consegue">não consegue</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<div class="mb-3">
	                <label for="country">Elevar ou estender os braços acima do nível do ombro</label>
	                <select class="custom-select d-block w-100" id="country" required name="raise_arms">
	                	<option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="média dificuldade">média dificuldade</option>
	                  <option value="nenhuma dificuldade">nenhuma dificuldade</option>
	                  <option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="muita dificuldade">muita dificuldade</option>
	                  <option value="não consegue">não consegue</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<div class="mb-3">
	                <label for="country">Escrever ou manusear objetos pequenos</label>
	                <select class="custom-select d-block w-100" id="country" required name="manage_delicate">
	                	<option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="média dificuldade">média dificuldade</option>
	                  <option value="nenhuma dificuldade">nenhuma dificuldade</option>
	                  <option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="muita dificuldade">muita dificuldade</option>
	                  <option value="não consegue">não consegue</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<div class="mb-3">
	                <label for="country">Andar 400 metros (aproximadamente quatro quarteirões)</label>
	                <select class="custom-select d-block w-100" id="country" required name="long_walk">
	                	<option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="média dificuldade">média dificuldade</option>
	                  <option value="nenhuma dificuldade">nenhuma dificuldade</option>
	                  <option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="muita dificuldade">muita dificuldade</option>
	                  <option value="não consegue">não consegue</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<div class="mb-3">
	                <label for="country">Fazer serviço doméstico pesado, como esfregar o chão ou limpar janelas</label>
	                <select class="custom-select d-block w-100" id="country" required name="domestic_services">
	                	<option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="média dificuldade">média dificuldade</option>
	                  <option value="nenhuma dificuldade">nenhuma dificuldade</option>
	                  <option value="pouca dificuldade">pouca dificuldade</option>
	                  <option value="muita dificuldade">muita dificuldade</option>
	                  <option value="não consegue">não consegue</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<h4 class="mb-3">Responda às perguntas a seguir, sobre as atividades que já deixou de fazer por sua saúde ou condição física</h4>

	        	<div class="mb-3">
	                <label for="country">Fazer compras</label>
	                <select class="custom-select d-block w-100" id="country" required name="left_of_shopping">
	                	<option value="não">Não ou não faz por outros motivos que NÃO a saúde</option>
	                  <option value="sim">Sim</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<div class="mb-3">
	                <label for="country">Controlar seu dinheiro</label>
	                <select class="custom-select d-block w-100" id="country" required name="left_of_manage_money">
	                	<option value="não">Não ou não faz por outros motivos que NÃO a saúde</option>
	                  <option value="sim">Sim</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<div class="mb-3">
	                <label for="country">Caminhar dentro de casa</label>
	                <select class="custom-select d-block w-100" id="country" required name="left_of_walk_inside">
	                	<option value="não">Não ou não faz por outros motivos que NÃO a saúde</option>
	                  <option value="sim">Sim</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<div class="mb-3">
	                <label for="country">Realizar tarefas domésticas leves, como lavar louça ou fazer limpeza leve?</label>
	                <select class="custom-select d-block w-100" id="country" required name="left_of_domestic_services">
	                	<option value="não">Não ou não faz por outros motivos que NÃO a saúde</option>
	                  <option value="sim">Sim</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<div class="mb-3">
	                <label for="country">Tomar banho sozinho(a)</label>
	                <select class="custom-select d-block w-100" id="country" required name="left_of_bathing">
	                	<option value="não">Não ou não faz por outros motivos que NÃO a saúde</option>
	                  <option value="sim">Sim</option>
	                </select>
	                <div class="invalid-feedback">
	                  Please select a valid country.
	                </div>
	        	</div>

	        	<h4 class="mb-3">Responda as perguntas a seguir relacionadas a sua mais recente queda (se houver)</h4>

	        	<div class="row">
	              <div class="col-md-6 mb-3">
	                <label for="date_of_fall">Data da queda*:</label>
	                <input type="date" class="form-control" id="date_of_fall" placeholder="" value="" required name="date_of_fall">
	                <div class="invalid-feedback">
	                  Valid first name is required.
	                </div>
	              </div>
	              <div class="col-md-6 mb-3">
	                <label for="local_fall">Local da queda*:</label>
	                <select class="custom-select d-block w-100" id="country" required name="local_fall">
	                	<option value="dentro de casa">Dentro de casa</option>
	                  	<option value="fora de casa">fora de casa</option>
	                </select>	
	                <div class="invalid-feedback">
	                  Valid first name is required.
	                </div>
	              </div>
	          	</div>

	          	<h4 class="mb-3">A queda causou algum dano?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="fracture_yes" name="fracture" type="radio" class="custom-control-input enabler" data-target="caused_fracture" checked required value="1">
	                <label class="custom-control-label" for="fracture_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="fracture_no" name="fracture" data-input="caused_fracture" type="radio" class="custom-control-input disabler" data-target="caused_fracture" required value="0">
	                <label class="custom-control-label" for="fracture_no">Não</label>
	              </div>
	              <div class="mt-2">
	              	<input type="text" class="form-control" id="caused_fracture" placeholder="" required>	
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você frequenta centros-dia, clubes ou grupos de convivência?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="centers_yes" name="go_to_centers" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="centers_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="centers_no" name="go_to_centers" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="centers_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você realiza algum trabalho voluntário?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="volunteer_yes" name="volunteer_work" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="volunteer_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="volunteer_no" name="volunteer_work" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="volunteer_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você tem alguma atividade de lazer?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="fun_yes" name="fun_activities" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="fun_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="fun_no" name="fun_activities" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="fun_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você pratica algum tipo de atividade como caminhadas, natação, dança, ginástica, etc, pelo menos 3 vezes por semana?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="practices_yes" name="practices_activity" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="practices_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="practices_no" name="practices_activity" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="practices_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você gostaria de começar algum programa de atividade física?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="start_acticity_yes" name="would_start_activity" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="start_acticity_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="start_acticity_no" name="would_start_activity" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="start_acticity_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você faz pelo menos três refeições ao dia?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="three_times_yes" name="feeds_three_times" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="three_times_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="three_times_no" name="feeds_three_times" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="three_times_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você come frutas, legumes e verduras em suas refeições ao longo do dia?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="fruits_yes" name="fruits_vegetables" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="fruits_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="fruits_no" name="fruits_vegetables" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="fruits_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Em pelo menos uma refeição diária, você come carnes, peixes ou ovos?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="meet_yes" name="meet_fish_eggs" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="meet_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="meet_no" name="meet_fish_eggs" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="meet_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você tem o costume de consumir bebidas açucaradas, bolos, biscoitos recheados e sobremesas?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="sugar_yes" name="usual_sugar_feed" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="sugar_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="sugar_no" name="usual_sugar_feed" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="sugar_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">No prepari de suas refeições, é utilizada grande quantidade de óleos, gorduras, açúcar e sal?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="oil_yes" name="much_oil_fat_sugar_salt" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="oil_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="oil_no" name="much_oil_fat_sugar_salt" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="oil_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Na sua rotina diária, você inclui a ingestão de água?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="water_yes" name="drinks_water" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="water_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="water_no" name="drinks_water" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="water_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Atualmente você fuma algum produto de tabaco?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="smokes_yes" name="smokes_tobacco" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="smokes_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="smokes_no" name="smokes_tobacco" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="smokes_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você gostaria de parar de fumar?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="stop_yes" name="wants_to_stop_smoking" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="stop_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="stop_no" name="wants_to_stop_smoking" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="stop_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você é ex-fumante?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="former_yes" name="is_former_smoker" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="former_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="former_no" name="is_former_smoker" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="former_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você tem alguma atividade de lazer?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="alcohol_yes" name="drinks_alcohol" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="alcohol_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="alcohol_no" name="drinks_alcohol" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="alcohol_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você já sentiu a necessidade de reduzir ou suspender o álcool?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="cutting_yes" name="felt_like_cutting_alcohol" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="cutting_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="cutting_no" name="felt_like_cutting_alcohol" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="cutting_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Alguém já criticou você por beber?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="criticized_yes" name="criticized_for_drinking" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="criticized_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="criticized_no" name="criticized_for_drinking" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="criticized_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Sente-se culpado por beber?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="guilty_yes" name="feel_guilty_for_drinking" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="guilty_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="guilty_no" name="feel_guilty_for_drinking" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="guilty_no">Não</label>
	              </div>
	              
	            </div>

	            <h4 class="mb-3">Você costuma consumir bebida alcóolica?</h4>

	            <div class="d-block my-3">
	              <div class="custom-control custom-radio">
	                <input id="drinks_yes" name="usually_drinks" type="radio" class="custom-control-input" checked required value="1">
	                <label class="custom-control-label" for="drinks_yes">Sim</label>
	              </div>
	              <div class="custom-control custom-radio">
	                <input id="drinks_no" name="usually_drinks" type="radio" class="custom-control-input" required value="0">
	                <label class="custom-control-label" for="drinks_no">Não</label>
	              </div>
	              
	            </div>
	            <button type="submit" class="btn btn-default">
	            	ENVIAR
	            </button>
	        </form>
    	</div>
	</div>
    
</div>

<script type="text/javascript" src="/js/disabled.js"></script>

@endsection