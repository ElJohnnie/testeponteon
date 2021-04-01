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
<form>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Nome completo</label>
      <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Celular</label>
      <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">State</label>
      <select class="custom-select" id="validationDefault04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" id="validationDefault03" required>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>
<h4>Empresários cadastrados</h4>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Header</th>
        <th>Header</th>
        <th>Header</th>
        <th>Header</th>
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
@endsection
