@extends('layouts.main')

@section('content')
<div class="py-3 my-3">
    <h1 class="text-center h3">{{ __('Reset Password') }}</h1>
    <hr>
    @include('_partials.auth.alerts')

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-4">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>
    <form method="POST" action="{{ route('password.text') }}">
        @csrf
        <input id="hidden-email" type="hidden" name="email" />
        <div class="text-center mb-3"> - OR - </div>
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Phone #') }}</label>

            <div class="col-md-4">
                <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                    name="phone" value="{{ old('phone') }}" required>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Text Temporary Password') }}
                </button>
            </div>
        </div>
        <!-- <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </div> -->
    </form>
    <hr>
    <div class="text-center mb-3 pb-3">
        <a class="btn btn-link" href="{{ route('login') }}">
            {{ __('Have Login Credentials?') }}
        </a>
        <a class="btn btn-link" href="{{ route('register') }}">
            {{ __('New Client? Get Started') }}
        </a>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $('#email', document).on('blur change', function(){
            $('#hidden-email', document).val(this.value);
        })
    });
</script>
@endpush
