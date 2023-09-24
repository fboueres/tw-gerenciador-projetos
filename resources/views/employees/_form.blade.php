@csrf

<div class="row mb-2">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome" value="{{ old('nome', @$employee->nome) }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite o CPF" value="{{ old('cpf', @$employee->cpf) }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="data_contratacao">Data Contratação</label>
            <input type="text" name="data_contratacao" id="data_contratacao" class="form-control" placeholder="Digite o Data Contratação" value="{{ old('data_contratacao', @$employee->data_contratacao) }}">
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-4">
        <div class="form-group">
            <label for="logradouro">Logradouro</label>
            <input value="{{ old('logradouro', $employee->address->logradouro) }}"  class="form-control" type="text" name="logradouro" id="logradouro" placeholder="Digite o logradouro">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="numero">Número</label>
            <input value="{{ old('numero', $employee->address->numero) }}" class="form-control" type="text" name="numero" id="numero" placeholder="Digite o número">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input value="{{ old('estado', $employee->address->complemento) }}" class="form-control" type="text" name="complemento" id="complemento" placeholder="Digite o complemento">
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-3">
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input value="{{ old('bairro', $employee->address->bairro) }}"  class="form-control" type="text" name="bairro" id="bairro" placeholder="Digite o bairro">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input value="{{ old('cidade', $employee->address->cidade) }}" class="form-control" type="text" name="cidade" id="cidade" placeholder="Digite a cidade">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="cep">CEP</label>
            <input value="{{ old('cep', $employee->address->cep) }}" class="form-control" type="text" name="cep" id="cep" placeholder="Digite o CEP">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="estado">Estado</label>
            <input value="{{ old('estado', $employee->address->estado) }}" class="form-control" type="text" name="estado" id="estado" placeholder="Digite o estado">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success">Salvar</button>