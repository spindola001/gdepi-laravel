@extends('layouts.app')

@section('content')
    {{-- <h1 class="font-weight-bold text-center">@if (@isset($info))
        Editar registro de solicitação
    @else
        Solicitação de EPI
    @endif</h1> <hr> --}}

    <div class="col-6 m-auto">
        @if (@isset($info))
            <form name="formEdit" id="formEdit" method="POST" action="{{url("relatorioEpis/$info->id")}}">
                @method("PUT")
        @else
            <form name="formCad" id="formCad" method="POST" action="{{url("relatorioEpis")}}">
        @endif
            @csrf
            <label for="dataEntrega">Data da entrega</label>
            <input class="form-control" type="date" id="dataEntrega" name="dataEntrega" value="{{$info->dataEntrega ?? ''}}" required>
            <label for="colabName">Colaborador</label>
            <select class="form-control" name="colab_id" id="colab_id" required>
                @if (@isset($info))
                    <option value="{{$info->colab_id ?? ''}}">{{$info->relColab->nome ?? 'Selecione o colaborador'}}</option>
                    @foreach ($colabs as $colab)
                        <option value="{{$colab->id}}">{{$colab->nome}}</option>
                    @endforeach
                @else
                    <option value="">Selecione o colaborador</option>
                    @foreach ($colabs as $colab)
                        <option value="{{$colab->id}}">{{$colab->nome}}</option>
                    @endforeach
                @endif
            </select>
            <label for="epi">Epi</label>
            <select class="form-control" name="epi_id" id="epi" required>
                @if (@isset($info))
                    <option value="{{$info->epi_id ?? ''}}">{{$info->relEpi->descricao ?? 'Selecione o EPI'}}</option>
                    @foreach ($epis as $epi)
                        <option value="{{$epi->id}}">{{$epi->descricao}}</option>
                    @endforeach
                @else
                    <option value="">Selecione o EPI</option>
                    @foreach ($epis as $epi)
                        <option value="{{$epi->id}}">{{$epi->descricao}}</option>
                    @endforeach
                @endif
            </select>
            <label for="qtdEpi">Quantidade</label>
            <input class="form-control" type="number" id="qtdEpi" name="qtdEpi" value="{{$info->qtdEpi ?? ''}}" required>
            <input class="btn btn-primary mt-3 mb-3 col-12" type="submit" value="@if (@isset($info))
                Finalizar edição
            @else
                Finalizar cadastro
            @endif">
        </form>
    </div>
@endsection
