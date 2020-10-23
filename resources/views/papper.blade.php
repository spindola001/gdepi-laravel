<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatório PDF</title>

    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="../public/css/app.css" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>

    {{-- <h1 class="text-center">RELATÓRIO DE ENTREGA DE EPIs</h1> --}}

    <div class="container col-12 m-auto">
        @csrf

        @foreach ($relatorio as $info)
        @php
            $epi=$info->find($info->id)->relEpi;
            $colab=$info->find($info->id)->relColab;
        @endphp

            <table class="table table-dark text-dark table-active text-center table-bordered table-hover table-sm">
                <thead class="table-bordered align-middle">
                    <tr>
                        <th colspan="11">Relatório de entrega de equipamento de proteção individual</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th colspan="6" class="text-left">
                            Nome: {{$colab->nome}}
                        </th>
                        <th colspan="5" class="text-left">
                            Admissão: {{$colab->adm_at}}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="6" class="text-left">
                            Função: {{$colab->funcao}}
                        </th>
                        <th colspan="5" class="text-left">
                            Setor: {{$colab->setor}}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="11" class="text-justify">
                            <p>
                                Recebi o Equipamento de Proteção Individual - EPI, conforme descrito abaixo, para uso exclusivo no local de trabalho, conforme regulamentação da Norma Regulamentadora nº 6, do Ministério do Trabalho e Emprego.
                            </p>
                            <p>
                                Declaro que estou ciente da obrigatoriedade do uso do EPI e da responsabilidade de usá-lo e conservá-lo. Minha recusa injustificada na utilização deste equipamento ou seu mau uso, constitui ato faltoso, conforme disposto no artigo 158 da CLT.
                            </p>
                            <p>
                                Declaro estar ciente da obrigatoriedade da devolução do Equipamento atual, quando da troca ou substituição dos mesmos. Declaro ainda ter recebido treinamento quanto ao uso, guarda e conservação dos EPIs.
                            </p><br><br>
                            <p>Assinatura do colaborador:</p>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="1" scope="col">Quantidade</th>
                        <th colspan="3" scope="col">Data de entrega</th>
                        <th colspan="1" scope="col">C.A</th>
                        <th colspan="3" scope="col">Descrição</th>
                        <th colspan="3" scope="col">Assinatura</th>
                    </tr>
                    <tr>
                        <th colspan="1">{{$info->qtdEpi}}</th>
                        <th colspan="3">{{$info->dataEntrega}}</th>
                        <th colspan="1">{{$epi->certAp}}</th>
                        <th colspan="3">{{$epi->descricao}}</th>
                        <th colspan="3"></th>
                    </tr>
                    {{-- preciso concertar o relacionamento --}}
                    {{-- @foreach ($relatorio as $info)
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
                            <td class="align-middle"></td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>

            <br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br>
            <br><br><br>

        @endforeach

    </div>
</body>
</html>
