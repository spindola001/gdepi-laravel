@extends('layouts.app')

@section('content')
<div class="container mt-20">
    <h1 class="font-weight-bold text-center">GDEPI Relatório</h1>

    @php
        $epi=$info->find($info->id)->relEpi;
        $colab=$info->find($info->id)->relColab;
    @endphp

    <div class="col-8 m-auto">
        <table class="table-dark table text-center table-bordered table-hover table-sm">
            {{-- <thead class="thead-dark border border-dark">
                <th colspan="2">Relatório individual</th>
            </thead> --}}
            <tbody>
                <tr>
                    <th class="align-middle" scope="row">Data de entrega</th>
                    <td class="align-middle">{{$info->dataEntrega}}</td>
                </tr>
                <tr>
                    <th class="align-middle" scope="row">Id</th>
                    <td class="align-middle">{{$colab->id}}</td>
                </tr>
                <tr>
                    <th class="align-middle" scope="row">Nome</th>
                    <td class="align-middle">{{$colab->nome}}</td>
                </tr>
                <tr>
                    <th class="align-middle" scope="row">Função</th>
                    <td class="align-middle">{{$colab->funcao}}</td>
                </tr>
                <tr>
                    <th class="align-middle" scope="row">Setor</th>
                    <td class="align-middle">{{$colab->setor}}</td>
                </tr>
                <tr>
                    <th class="align-middle" scope="row">Data de admissão</th>
                    <td class="align-middle">{{$colab->adm_at}}</td>
                </tr>
                <tr>
                    <th class="align-middle" scope="row">Epi</th>
                    <td class="align-middle">{{$epi->descricao}}</td>
                </tr>
                <tr>
                    <th class="align-middle" scope="row">Quantidade</th>
                    <td class="align-middle">{{$info->qtdEpi}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
