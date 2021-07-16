<x-app>
<p class="font-bold text-2xl">Update Your Profile</p>
    <div class="mx-auto px-6 py-4 bg-gray-400 rounded-md mt-2">
        <form method="POST" action="/profiles/{{$user->username}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group row">
                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>

                <div>
                    <input id="name" type="text" class="w-full border border-gray-400 p-2 h-8 rounded-md" name="name" value="{{ $user->name }}"  autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div >
                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Username') }}</label>

                <div >
                    <input id="name" type="text" class=" w-full border border-gray-400 p-2 h-8 rounded-md" name="username" value="{{  $user->username }}"  autofocus>

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="w-full border border-gray-400 p-2 h-8 rounded-md" name="email" value="{{  $user->email }}" >

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
                    <input id="password" type="password" class="w-full border border-gray-400 p-2 h-8 rounded-md" name="password" >

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-6">
                <label for="password-confirm" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="w-full border border-gray-400 p-2 h-8 rounded-md" name="password_confirmation" >
                </div>
            </div>

            <div class="form-group row">
                <div>
                <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatar</label>


                    <input id="name" type="file" class="border border-gray-400 rounded-md" name="avatar" >

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <img src="{{$user->avatar}}" alt="your avatar" height="150" width="150">
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="px-6 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                        {{ __('Update') }}
                    </button>
                </div>
                <a href="/profiles/{{$user->username}}" class="hover:underline  ">Cancel</a>
            </div>

        </form>
    </div>
</x-app>
