@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/logout') }}" class="btn btn-primary" type="button" style="background: #91686d;border-style: none;color: #65120d;text-align: center;font-size: 18px;">Logout</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido criador: ') }}{{Auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
