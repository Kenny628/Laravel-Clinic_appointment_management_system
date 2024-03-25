@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 75vh;">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-dark text-white"
                            style="text-align: center; font-size: 25x; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                            {{ isset($url) ? ucwords($url) : '' }}
                            {{ __('Login') }}
                        </div>

                        <div class="card-body" style="background-color: #abcdef">
                            @isset($url)
                                <form method="POST" action='{{ url("login/$url") }}' arialabel="{{ __('Login') }}">
                                @else
                                    <form method="POST" action="{{ route('login') }}" arialabel="{{ __('Login') }}">
                                    @endisset
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    @csrf
                                    <div class="form-group row">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail
                                                                                    Address') }}</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="formcontrol @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                style="width:390px; border-radius:5px; line-height: 1.5;">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-formlabel text-md-right">{{ __('Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
