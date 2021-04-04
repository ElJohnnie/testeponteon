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
  </div>
  <h4>Cadastrar empresário</h4>
  @include('flash::message')
  <form class="mb-4" action="{{ route('criar') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nome">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome')}}" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="celular">Celular</label>
        <input id="celular" class="form-control" onkeypress="return onlynumber();" name="celular" value="{{old('celular')}}" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="estados">Estado</label>
        <select class="custom-select" id="estados"  name="estado" required>
          <option value="">...</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="cidades">Cidade</label>
        <select class="custom-select" id="cidades" name="cidade" required>
           <option value="">...</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="cidades">Pai empresarial</label>
        <select class="custom-select" id="pai" name="pai">
          <option selected value="">...</option>
          @foreach($empresarios as $e)
            <option value="{{ $e->id }}">{{ $e->nome }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <button class="btn btn-outline-success" type="submit">Cadastrar</button>
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
          <td> 
          @if(isset($e->pai['nome']))
              {{ $e->pai['nome'] }}
           @endif
          </td>
          <td>
            <a href="{{route('listar', ['id' => $e->id])}}" type="button" class="btn btn-info">
              <i class="fas fa-network-wired"></i>
            </a>
          </td>
          <td>
            <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluir<?php echo $e->id ?>" ><i class="fas fa-trash-alt"></i></a>
            <!-- Modal -->
            <div class="modal fade" id="excluir<?php echo $e->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Deseja excluir o registro de {{ $e->nome }}?</p>
                  </div>
                  <div class="modal-footer">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="#" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                      <a type="button" href="{{route('remove', ['id' => $e->id])}}" class="btn ml-1 btn-danger">Excluir</a>
                    </div>
                  </div>
                </div>
              </div>
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


