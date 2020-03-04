@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, un link para validar tu cuenta ha sido enviado a tu email.') }}
                    {{ __('Si no lo has recibido, puedes') }}, <a href="{{ route('verification.resend') }}">{{ __('pedir uno nuevo') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
