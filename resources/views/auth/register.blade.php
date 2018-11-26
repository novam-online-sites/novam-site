@extends('layouts.auth')

@section('layout')
<div class="container py-3 my-3">
    <h1 class="text-center h3">Client Registration</h1>
    <hr>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="comp" class="col-form-label">{{ __('Project Name') }}</label>
                    <input id="comp" type="name" class="form-control{{ $errors->has('comp') ? ' is-invalid' : '' }}"
                        name="comp" value="{{ old('comp') }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="url" class="col-form-label">{{ __('Project Domain') }}</label>
                    <input id="url" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url"
                        value="{{ old('url') }}" required>
                    @if ($errors->has('url'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('url') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                        <label for="type" class="col-form-label">{{ __('Project Type') }}</label>
                        <select class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type">
                            <option value="" {!! old('type') == ($type = 'Analysis')? 'selected': '' !!}>
                            {{ $type }}
                            </option>
                        </select>
                        @if ($errors->has('type'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('type') }}</strong>
                        </span>
                        @endif
                    </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="name" class="col-form-label">{{ __('Contact Name') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        name="name" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email" class="col-form-label">{{ __('Contact Email') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="phone" class="col-form-label">{{ __('Mobile phone') }}</label>
                    <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                        name="password" required>
                    @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                    @endif
                </div>

                {{--  <div class="form-group">
                    <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    required>
                </div>  --}}
                <div class="form-group mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <hr>
    <div class="text-center">
        <a class="btn btn-link" href="{{ route('login') }}">
            {{ __('Have Login Credentials') }}
        </a>
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    </div>
</div>
</div>
@endsection
