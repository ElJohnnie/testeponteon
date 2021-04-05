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
      
        @php 
        
        // As relações de pai/filhos/netos criamos nos models, pai tem filhos que filhos possui filhos.

        /* para a utilização ser infinita, poderiamos utilizar funções recursivas: 
        $pai = $this->listarRede($pai);
        public function listarRede($pai){

            if(isset($pai->filhos)){
                foreach($pai->filhos as $filhos){

                    $filhos = $this->listarRede($filhos);   
                }
            }else{
                dd($pai);
                return $pai;
            }
            return $pai;
        }

        */
        
        @endphp
        @php echo $listar @endphp
    </div>
</div>
@endsection