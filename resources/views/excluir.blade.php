@extends('template.template')
@section('title', 'Detalhes')

@section('content')
    <body>
        <div class="container3">
            <p class="title"></p>
            <div class="informacoes">
                <h1>Deseja excluir o bolsista {{$p->name}} do projeto?</h1>
                <form action="{{route('deletar', $p)}}" method="post">
                    @csrf
                    @method('delete')
                    <div class="buttons">
                        <a href="{{route('detalhes', $p)}}" class="btn" id="cancel">Voltar</a>
                        <input type="submit" class="btn" id="cadastrar" value="Excluir">
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection