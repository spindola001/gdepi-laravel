@extends('layouts.app')

@section('content')
    {{-- <h1 class="font-weight-bold text-center">Cadastro de EPI</h1> <hr> --}}

    <div class="col-6 m-auto">

        @if (isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif

        <form name="formCad" id="formCad" method="POST" action="{{url('epiCad')}}">
            @csrf
            <label for="descricao">Descrição do EPI</label>
            <input class="form-control" type="text" id="descricao" name="descricao" required>
            <label for="certAp">Certificado de aprovação</label>
            <input class="form-control" type="text" id="certAp" name="certAp" required>
            <input class="btn btn-primary mt-3 mb-3 col-12" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection
