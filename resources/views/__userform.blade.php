<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="w-full border border-gray-400 p-2 h-8 rounded-md mb-2" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Username') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="w-full border border-gray-400 p-2 h-8 rounded-md mb-2" name="username"
                   value="{{ old('username') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email"
               class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="w-full border border-gray-400 p-2 h-8 rounded-md mb-2" name="email"
                   value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="w-full border border-gray-400 p-2 h-8 rounded-md mb-2"
                   name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-6">
        <label for="password-confirm"
               class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="w-full border border-gray-400 p-2 h-8 rounded-md mb-2"
                   name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="px-6 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
