@extends('template.template')
@section('title', 'Detalhes')

@section('content')
    <body>
        <div class="container3">
            <p class="title">Detalhes do Bolsista</p>
            <div class="informacoes">
                <b>    
                    <h3>{{$p->name}}</h3>
                    <div class="infos">
                        <p>CPF: {{$p->cpf}}</p>
                        <p>E-mail: {{$p->email}}</p>
                        <p>Função: {{$p->funcao}}</p>
                        <p>Status: {{$p->status == 1 ? "Ativo" : "Não ativo"}}</p>
                    </div>
                </b>
                <div class="buttons">
                    <a href="{{route('index')}}"><button class="btn" id="cancel">Voltar</button></a>
                    <a href="{{route('remover', $p)}}"><button class="btn" id="cadastrar">Remover</button></a>
                </div>
            </div>
        </div>
    </body>
@endsection