@extends('layouts.app')

@section('content')
<div class="container">

                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

    <div class="card-body">

        <form method="POST" autocomplete="off" action="{{ route('login') }}">
            <input type="text" class="hidden" autocomplete="off" style="display: none">
            @csrf
                <div class="center-log">

                    <label for="email" class="email-label">{{ __('E-Mail Address') }}</label><br/>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="new-password" autofocus> <br/>
{{-- required autocomplete="email" --}}
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="password" class="pass-label">{{ __('Password') }}</label> <br/>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" > <br/>
{{-- required autocomplete="current-password" --}}
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label> <br>

                    @if (Route::has('password.request'))
                        <a class="btn1 btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a> <br/>
                    @endif

                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
            </div>
         </form>
    </div>
</div>
@endsection
