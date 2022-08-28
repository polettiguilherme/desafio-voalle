@extends('template.template')
@section('title', 'Listagem de Bolsistas')

@section('content')
    <body>
        <div class="container2">
            <div class="row main-row" id="cont-index">
                <h2><b>Listagem de Bolsistas</b></h2>
                <h4>Bolsistas no projeto</h4>
                @foreach($pessoas as $p)
                    <div class="row lista">
                        <div class="nome">
                            <h6>{{$p->name}}</h6>
                        </div>
                        <a href="{{route('detalhes', $p)}}" class="btn" id="detalhes"> Detalhes </a>
                    </div>
                @endforeach
                <a href="{{route('cadastro')}}"><button class="btn" id="cadastrar">Novo Bolsista</button></a>
            </div>
        </div>
    </body>
@endsection
