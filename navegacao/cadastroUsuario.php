
<h2 class=header>Cadastro de usuario</h2>
<hr>
<form class="needs-validation fontper" novalidate>
	<div class="form-row">
		<div class="col-md-4 mb-3">
			<label for="Nome">Nome</label>
			<input type="text" class="form-control" id="Nome" placeholder="Nome"required>
			<div class="valid-feedback">Tudo certo!</div>
		</div>
		<div class="col-md-4 mb-3">
			<label for="sobrenome">Sobrenome</label>
				<input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome"required>
				<div class="valid-feedback">Tudo certo!</div>
		</div>
		<div class="col-md-4 mb-3">
			<label for="usuario">Usuário</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="usuario">@</span></div>
					<input type="text" class="form-control" id="validationCustomUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend" required>
					<div class="invalid-feedback">Por favor, escolha um nome de usuário.</div>
				</div>
			</div>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-8 mb-3">
			<label for="email">E-Mail</label>
			<input type="email" class="form-control" id="email" placeholder="email" required>
			<div class="invalid-feedback">Por favor, informe uma email válida.</div>
		</div>
		<div class="col-md-4 mb-3">
			<label for="password">Senha de Acesso</label>
			<input type="password" class="form-control" id="password" placeholder="Senha" required>
			<div class="invalid-feedback">Por favor, informe uma senha válida.</div>
		</div>
	</div><br>

	<h4>Endereço<h4/>
	<hr>
	<div class="form-row">
		<div class="">
			<label for="cep">CEP</label>
			<input type="text" class="form-control" id="cep" placeholder="CEP" required>
			<div class="invalid-feedback">Por favor, informe um CEP válido.</div>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-6 mb-3">
			<label for="Rua">Rua</label>
			<input type="text" class="form-control" id="Rua" placeholder="Rua : Rua viena" required>
			<div class="invalid-feedback">Por favor, informe uma rua válida.</div>
		</div>
		<div class="col-md-4 mb-3">
			<label for="email">Cidade</label>
			<input type="email" class="form-control" id="cidade" placeholder="Cidade" required>
			<div class="invalid-feedback">Por favor, informe uma cidade válida.</div>
		</div>
		<div class="col-md-2 mb-3">
			<label for="numero">Número</label>
			<input type="number" class="form-control" id="numero" placeholder="Número" required>
			<div class="invalid-feedback">Por favor, informe uma número válido.</div>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-6 mb-3">
			<label for="email">Complemento</label>
			<input type="text" class="form-control" id="complemento" placeholder="bloco x, apartamento y">
			<div class="invalid-feedback">Por favor, informe uma complemento válido.</div>
		</div>
		<div class="col-md-4 mb-3">
			<label for="bairro">Bairro</label>
			<input type="text" class="form-control" id="bairro" placeholder="Bairro" required>
			<div class="invalid-feedback">Por favor, informe um bairro válido.</div>
		</div>
		<div class="col-md-2 mb-3">
			<label for="estado">Estado</label>
			<input type="text" class="form-control" id="estado" placeholder="Estado" required>
			<div class="invalid-feedback">Por favor, informe um estado válido.</div>
		</div>
	</div>
	<hr>
	<div class="form-group">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
			<label class="form-check-label" for="invalidCheck">Concordo com os termos e condições</label>
			<div class="invalid-feedback">Você deve concordar, antes de continuar.</div>
		</div>
	</div>
	
	<button class="btn btn-outline-primary btn-block" type="submit">Enviar</button>
</form>

