@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary shadow">
                <div class="card-header">{{ __('Verifique seu Email!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Enviamos uma verificação para o seu endereço de Email.') }}
                        </div>
                    @endif

                    {{ __('Antes de prosseguir, verifique o Email que enviamos.') }}
                    {{ __('Não recebeu nenhum Email?') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui para enviarmos outro Email') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
