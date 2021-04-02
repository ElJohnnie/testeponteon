@extends('layouts.app')
@section('content')
  <div class="chartjs-size-monitor">
      <div class="chartjs-size-monitor-expand">
          <div class=""></div>
      </div>
      <div class="chartjs-size-monitor-shrink">
          <div class=""></div>
      </div>
  </div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Menu inicial</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-light">Share</button>
      </div>
    </div>
  </div>
  <h4>Cadastrar empresário</h4>
  @include('flash::message')
  <form class="mb-4" action="{{ route('criar') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nome">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome')}}"  required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="celular">Celular</label>
        <input type="text" class="form-control" name="celular" id="celular" value="{{old('celular')}}" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="estados">Estado</label>
        <select class="custom-select" id="estados"  name="estado" required>
          <option value="{{old('estado')}}"></option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="cidades">Cidade</label>
        <select class="custom-select" id="cidades" name="cidade" required>
          <option selected disabled value="">Choose...</option>
          <option value="{{old('cidade')}}">...</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="cidades">Pai empresarial</label>
        <select class="custom-select" id="pai" name="pai_id">
          <option selected disabled value="">...</option>
          @foreach($empresarios as $e)
          <option value="{{ $e->id }}">{{ $e->nome }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </form>
  <h4>Empresários cadastrados</h4>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Celular</th>
          <th>Cidade / UF</th>
          <th>Cadastrado em</th>
          <th>Pai empresarial</th>
          <th>Rede</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($empresarios as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->nome }}</td>
          <td>{{ $e->celular }}</td>
          <td>{{ $e->cidade."/".$e->estado }}</td>
          <td>{{ date( 'd/m/Y H:i:s' , strtotime($e->created_at)) }}</td>
          <td>{{ $e->empresario_id }}</td>
          <td>
            <button type="button" class="btn btn-info"><i class="fas fa-network-wired"></i></button>
          </td>
          <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $empresarios->links() }}
  </div>
  @section('scripts')
  @endsection
@endsection
