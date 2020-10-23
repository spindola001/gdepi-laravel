@extends('layouts.app')

@section('content')
    {{-- <h1 class="font-weight-bold text-center">Cadastro de colaborador</h1> <hr> --}}

    <div class="col-6 m-auto">

        @if (isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif

        <form name="formCad" id="formCad" method="POST" action="{{url('colabCad')}}">
            @csrf
            <label for="colabName">Nome do colaborador</label>
            <input class="form-control" type="text" id="colabName" name="colabName" required>
            <label for="funcao">Função</label>
            <input class="form-control" type="text" id="funcao" name="funcao" required>
            <label for="setor">Setor</label>
            <input class="form-control" type="text" id="setor" name="setor" required>
            <label for="setor">Data de admissão</label>
            <input class="form-control" type="date" id="adm_at" name="adm_at" required>
            <input class="btn btn-primary mt-3 mb-3 col-12" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection
