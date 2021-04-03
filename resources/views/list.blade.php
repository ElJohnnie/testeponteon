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
        <h4>{{ $empresario->nome }}</h4>
        <ul>
            @php 
            // A lógica de filhos dos filhos está presente nos models do app
            
            @endphp
            @if(isset($pai->filhos))
                @foreach($pai->filhos as $filhos)
                    <li>{{ $filhos->nome }}</li>
                        @if(count($filhos->filhos)>0)
                        <ul>
                            <li>
                                @foreach($filhos->filhos as $netos)
                                {{ $netos->nome }}
                                    @if(count($netos->filhos)>0)
                                        <ul>
                                            @foreach($netos->filhos as $bisnetos)
                                                <li>
                                                    {{ $bisnetos->nome }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @endforeach
                            </li>
                        </ul>   
                        @endif
                @endforeach
            @endif
        </ul> 
    </div>
</div>
@endsection