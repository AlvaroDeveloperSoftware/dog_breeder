@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Verifica el link que se ha enviado a tu cuenta de correo electrónico') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, chequea el mail en tu cuenta de correo electrónico.') }}
                    {{ __('Si no has recibido el mail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clica aquí para reenviarlo') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
