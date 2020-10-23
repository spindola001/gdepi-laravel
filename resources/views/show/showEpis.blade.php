@extends('layouts.app')

@section('content')
    <div class="container col-12 m-auto">
        @csrf
        <table class="table-dark table text-center table-bordered table-hover table-sm">
            <thead class="table-bordered align-middle">
                <tr>
                    <th class="align-middle" scope="col">Id do Epi</th>
                    <th class="align-middle" scope="col">Descrição de Epi</th>
                    <th class="align-middle" scope="col">Certificado de aprovação</th>
                    <th class="align-middle" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- preciso concertar o relacionamento --}}
                @foreach ($epis as $epi)
                    {{-- @php
                        $epi=$info->find($info->id)->relEpi;
                        $colab=$info->find($info->id)->relColab;
                    @endphp --}}
                    <tr>
                        <th class="align-middle" scope="row">{{$epi->id}}</th>
                        <td class="align-middle">{{$epi->descricao}}</td>
                        <td class="align-middle">{{$epi->certAp}}</td>
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
