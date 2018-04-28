@extends('layouts.app')

@section('title', 'LISTA BIBLIOTECAS')

@section('content')
<div class="row">
  <a href="{{route('bibliotecas.cadastro')}}" class="btn btn-primary">Cadastrar Biblioteca</a>
</div>
<div class="col-md-12">
  <h4 class="" style="margin-top: 50px">Lista de Bibliotecas</h4>
  <div class="row" style="margin-top: 10px;">
    <table class="table table-hover table-bordered table-condensed table-striped dataTable">
    <thead class="bg-info">
      <tr class="text-light">
        <th scope="col">Bibliotecas</th>
        <th scope="col">Cidades</th>
        <th scope="col">Status</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($lista_bibliotecas as $biblioteca)
      <tr>
        <td>{{$biblioteca->nome_biblioteca}}</td>
        <td>{{$biblioteca->cidade->cidade}}</td>
        <td>{{$biblioteca->status()}}</td>
        <td class="text-center">
          <a href="{{route('bibliotecas.edicao')}}" class=" btn btn-primary" title="editar" >Editar</a>
          <a href="{{route('bibliotecas.visualizar')}}" class=" btn btn-info" title="visualizar" >Visualizar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection
