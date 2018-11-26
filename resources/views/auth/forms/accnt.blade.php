<form action="/account/">
    @csrf
    <div class="form-group">
        <label for="comp" class="col-form-label">{{ __('Project Name') }}</label>
        <input id="comp" type="name" class="form-control{{ $errors->has('comp') ? ' is-invalid' : '' }}" name="comp"
            value="{{ old('comp') }}" required autofocus>
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <label for="url" class="col-form-label">{{ __('Project Domain') }}</label>
        <input id="url" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}"
            required>
        @if ($errors->has('url'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('url') }}</strong>
        </span>
        @endif
    </div>
    {{--  <div class="form-group">
        <label for="type" class="col-form-label">{{ __('Project Type') }}</label>
        <select class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type">
            <option value="" {!! old('type')==($type='Analysis' )? 'selected' : '' !!}>
                {{ $type }}
            </option>
        </select>
        @if ($errors->has('type'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('type') }}</strong>
        </span>
        @endif
    </div>  --}}
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Update Account') }}
            </button>
        </div>
    </div>
</form>
