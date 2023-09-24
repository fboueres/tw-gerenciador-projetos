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
<button type="submit" class="btn btn-success">Salvar</button>