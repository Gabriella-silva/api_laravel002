@extends('layout.app')

@section( 'content')
<h1>Nova Criptomoeda</h1>
<form method="post" action="{{ route('criptomoedas.create') }}">
<div class="mb-3">
    @csrf
    <label>Sigla</label>
    <input type="text" name="Sigla" class="form-control" required>
</div>

<div class="mb-3">
    <label>nome</label>
    <input type="text" name="nome" class="form-control" required>
</div>

<div class="mb-3">
    <label>Valor</label>
    <input type="text" name="Valor" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Cadastrar</button>
<a href="{{ route('criptomoedas.index') }}"class="btn btn-secondary">Cancelar</a>
</form>
@endsection