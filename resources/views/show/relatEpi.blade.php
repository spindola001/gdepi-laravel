@extends('layouts.app')

@section('content')
    <div class="container col-12 m-auto">
        @csrf
        <table class="table-dark table text-center table-bordered table-hover table-sm">
            <thead class="table-bordered align-middle">
                <tr>
                    <th class="align-middle" scope="col">Id da solicitção</th>
                    <th class="align-middle" scope="col">Data de entrega</th>
                    <th class="align-middle" scope="col">Nome</th>
                    <th class="align-middle" scope="col">Função</th>
                    <th class="align-middle" scope="col">Setor</th>
                    <th class="align-middle" scope="col">EPI</th>
                    <th class="align-middle" scope="col">Quantidade</th>
                    <th class="align-middle" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- preciso concertar o relacionamento --}}
                @foreach ($relatEnt as $info)
                    @php
                        $epi=$info->find($info->id)->relEpi;
                        $colab=$info->find($info->id)->relColab;
                    @endphp
                    <tr>
                        <th class="align-middle" scope="row">{{$info->id}}</th>
                        <td class="align-middle">{{$info->dataEntrega}}</td>
                        <td class="align-middle">{{$colab->nome}}</td>
                        <td class="align-middle">{{$colab->funcao}}</td>
                        <td class="align-middle">{{$colab->setor}}</td>
                        <td class="align-middle">{{$epi->descricao}}</td>
                        <td class="align-middle">{{$info->qtdEpi}}</td>
                        <td class="align-middle">
                            <a class="dropdown-item bg-success text-white rounded my-1" href="{{url("relatorioEpis/$info->id")}}">
                                Visualizar
                            </a>
                            <a class="dropdown-item bg-dark text-white rounded my-1" href="{{url("relatorioEpis/$info->id/edit")}}">
                                Editar
                            </a>
                            <a class="dropdown-item bg-secondary text-white rounded my-1 js-del" href="{{url("relatorioEpis/$info->id")}}">
                                Deletar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a class="btn btn-dark" href="{{url("/relatorioEpisPDF")}}">
        PDF
    </a>
@endsection
