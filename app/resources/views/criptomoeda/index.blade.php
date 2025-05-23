@extends('layout.app')
@section('content')

<h1>Lista de Criptomoeda </h1>
@if(count(value: $criptos))
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sigla</th>
      <th scope="col">nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    @foreach($criptos as $cripto)
    <tr>
      <th scope="row">{{$cripto['sigla']}}</th>
      <td>{{$cripto['nome']}}</td>
      <td>R$ {{number_format($cripto['valor'],2 , ',', '.')}}</td>
      <td>Editar|Excluir</td>
    </tr>
   @endforeach
  </tbody>
</table>
@else
    <p>Nenhuma Criptomoeda </p>
@endif
@endsection