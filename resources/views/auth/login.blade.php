@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ __('Login') }}</h4>
                    @if ($url === 'admin')
                        <form method="POST" action="{{ route('post_admin_login') }}">
                    @elseif ($url === 'user')
                        <form method="POST" action="{{ route('post_user_login') }}">
                    @endif
                        @csrf
                        <div class="form-group">
                            <label for="username" class="control-label">{{ __('Seu Login') }}</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">{{ __('Sua Senha') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('auth.remember_me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 text-xs-center text-right">
                                    @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('Esqueci minha senha') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
