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
  <form class="mb-4" action="{{ route('criar') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="nome">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome"  required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="celular">Celular</label>
        <input type="text" class="form-control" name="celular" id="celular" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="estados">Estado</label>
        <select class="custom-select" id="estados" name="estado" required>
          <option></option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <label for="cidades">Cidade</label>
        <select class="custom-select" id="cidades" name="cidade" required>
          <option selected disabled value="">Choose...</option>
          <option>...</option>
        </select>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </form>
  <h4>Empresários cadastrados</h4>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Celular</th>
          <th>Cidade / UF</th>
          <th>Pai empresarial</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1,001</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
        </tr>
      </tbody>
    </table>
  </div>
  @section('scripts')
  @endsection
@endsection
