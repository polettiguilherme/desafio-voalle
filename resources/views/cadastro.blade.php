@extends('template.template')
@section('title', 'Cadastro de Bolsista')

@section('content')
    <body>
        <div class="container">
            <div class="row main-row">
                <p class="title">Cadastrar Bolsista</p>
                <div class="form">
                    <form action="{{route('cadastro')}}" method="post">
                        @csrf
                        <div class="control">
                        <i class="fa-brands fa-microsoft"></i>
                            <label for="name">Nome Completo</label>
                            <input class="input" type="text" id="name" name="name">
                            @if ($errors->any())
                                @foreach ($errors->get('name') as $message)
                                    <p class="error"> {{ $message }} </p>
                                @endforeach
                            @endif
                        </div>
                        <div class="control">
                            <label for="cpf">CPF</label>
                            <input class="input" type="text" id="cpf" name="cpf" maxlength="11">
                            @if ($errors->any())
                                @foreach ($errors->get('cpf') as $message)
                                    <p class="error"> {{ $message }} </p>
                                @endforeach
                            @endif
                        </div>
                        <div class="control">
                            <label for="email">E-mail</label>
                            <input class="input" type="email" id="email" name="email">
                            @if ($errors->any())
                                @foreach ($errors->get('email') as $message)
                                        <p class="error"> {{ $message }} </p>
                                @endforeach
                            @endif
                        </div>
                        <div class="control">
                            <label for="funcao">Função</label>
                            <input class="input" type="text" id="funcao" name="funcao">
                            @if ($errors->any())
                                @foreach ($errors->get('funcao') as $message)
                                    <p class="error"> {{ $message }} </p>
                                @endforeach
                            @endif
                        </div>
                        <p>Bolsista ativo no projeto?</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="sim" value="true" checked>
                            <label class="form-check-label" for="sim"> Sim </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="nao" value="false">
                            <label class="form-check-label" for="nao"> Não </label>
                        </div>
                        <div class="buttons">
                            <a href="{{route('index')}}"class="btn" id="cancel">Cancelar</a>
                            <input type="submit" value="Cadastrar" id="cadastrar" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
