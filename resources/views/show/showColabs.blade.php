@extends('layouts.app')

@section('content')
    <div class="container col-12 m-auto">
        @csrf
        <table class="table-dark table text-center table-bordered table-hover table-sm">
            <thead class="table-bordered align-middle">
                <tr>
                    <th class="align-middle" scope="col">Id do colaborador</th>
                    <th class="align-middle" scope="col">Nome</th>
                    <th class="align-middle" scope="col">Função</th>
                    <th class="align-middle" scope="col">Setor</th>
                    <th class="align-middle" scope="col">Data de admissão</th>
                    <th class="align-middle" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- preciso concertar o relacionamento --}}
                @foreach ($colabs as $colab)
                    {{-- @php
                        $epi=$info->find($info->id)->relEpi;
                        $colab=$info->find($info->id)->relColab;
                    @endphp --}}
                    <tr>
                        <th class="align-middle" scope="row">{{$colab->id}}</th>
                        <td class="align-middle">{{$colab->nome}}</td>
                        <td class="align-middle">{{$colab->funcao}}</td>
                        <td class="align-middle">{{$colab->setor}}</td>
                        <td class="align-middle">{{$colab->adm_at}}</td>
                        <td class="align-middle">
                            <a class="dropdown-item bg-success text-white rounded my-1" href="{{url("")}}">
                                Visualizar
                            </a>
                            <a class="dropdown-item bg-dark text-white rounded my-1" href="{{url("")}}">
                                Editar
                            </a>
                            <a class="dropdown-item bg-secondary text-white rounded my-1 js-del" href="{{url("")}}">
                                Deletar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
