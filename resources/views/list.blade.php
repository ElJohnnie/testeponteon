@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Rede do empresário</h2>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rede</li>
    </ol>
</nav>
<div class="row">
    <div class="col-12">
       
        <ul>
            <li>{{ $empresario->nome }}</li>
        </ul>
        
    </div>
</div>
@endsection