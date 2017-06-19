<legend>
{ACAO}
</legend>
<form action="{ACAOFORM}" method="post" class="form-horizontal">
	<div class="control-group">
		<input type="hidden" id="codcomprador" name="codcomprador" value="{codcomprador}">
		<label class="control-label" for="nomecomprador">Nome <span class="required">*</span>:</label>
	    <div class="controls">
	    	<input type="text" id="nomecomprador" name="nomecomprador" value="{nomecomprador}" required="required">
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="cpfcomprador">CPF <span class="required">*</span>:</label>
	    <div class="controls">
	    	<input type="text" class="mask-cpf" id="cpfcomprador" name="cpfcomprador" value="{cpfcomprador}" required="required">
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="cepcomprador">CEP <span class="required">*</span>:</label>
	    <div class="controls">
	    	<input type="text" class="mask-cep busca-cep" id="cepcomprador" name="cepcomprador" value="{cepcomprador}" required="required">
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="enderecocomprador">Endereço <span class="required">*</span>:</label>
	    <div class="controls">
	    	<input type="text" id="enderecocomprador" name="enderecocomprador" value="{enderecocomprador}" required="required">
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="cidadecomprador">Cidade <span class="required">*</span>:</label>
	    <div class="controls">
	    	<input type="text" id="cidadecomprador" name="cidadecomprador" value="{cidadecomprador}" required="required">
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="ufcomprador">UF <span class="required">*</span>:</label>
			<div class="controls">
				<select name="ufcomprador" id="ufcomprador">
						<option value="">Não especificado</option>
						{BLC_UF}
						<option value="{UF}" {sel_uf}>{UF}</option>
						{/BLC_UF}				    
				</select>
			</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="emailcomprador">Email <span class="required">*</span>:</label>
	    <div class="controls">
	    	<input type="text" id="emailcomprador" name="emailcomprador" value="{emailcomprador}" required="required">
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="telefonecomprador">Telefone:</label>
	    <div class="controls">
	    	<input type="text" id="telefonecomprador" name="telefonecomprador" value="{telefonecomprador}">
	    </div>
	</div>
	<div class="control-group">
		<label class="control-label" for="sexocomprador">Sexo:</label>
	    <div class="controls">
	       <label class="radio">
	           <input type="radio" name="sexocomprador" id="sexocompradorM" value="M" {sexocomprador_M}> Masculino
	       </label>
	       <label class="radio">
	           <input type="radio" name="sexocomprador" id="sexocompradorF" value="F" {sexocomprador_F}> Feminino
	       </label>
	    </div>
	</div>
	<hr>
	<div class="control-group">
		<label class="control-label" for="senhacomprador">Senha:</label>
	    <div class="controls">
	    	<input type="password" id="senhacomprador" name="senhacomprador" value="{senhacomprador}">
	    </div>
	</div>
  	<div class="well">
		<button type="submit" class="btn">Salvar</button>
	</div>
</form>