<x-app>
    <header class="mb-6 relative mb-4">
        <div class="relative">
            <img
                src="{{asset('img/banner2.jpg')}}"
                alt="banner"
                class="mb-4"
            >
            <img
                src="{{$user->avatar}}"
                alt="avatar"
                class="h-32 w-32 rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
            >
        </div>
        <div class="flex justify-between items-center mb-4">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0" >{{$user->name}}</h2>
                <p class="text-xs">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

                <div class="flex">

                    @if(auth()->user()->is($user))
                    <a
                        href="/profiles/{{$user->username}}/edit"
                        class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                    @endif

                    @unless(auth()->user()->is($user))
                    <form action="/profiles/{{$user->username}}/follow" method="post">
                    @csrf
                    <button
                        type="submit"
                        class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs"
                    >
                        {{auth()->user()->following($user)?'Unfollow':'Follow Me'}}
                    </button>
                    </form>
                    @endunless
            </div>

        </div>

        <p class="text-sm">
            There are many variations of passages of Lorem Ipsum available, but the
            majority have suffered alteration in some form, by injected humour, or
            randomised words which don't look even slightly believable. If you are
            going to use a passage of Lorem Ipsum, you need to be sure there isn't
            anything embarrassing hidden in the middle of text. All the Lorem Ipsum
            generators on the Internet tend to repeat predefined chunks as necessary,
            making this the first true generator on the Internet. It uses a dictionary
            of over 200 Latin words, combined with a handful of model sentence structures,
            to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
            therefore always free from repetition, injected humour, or non-characteristic words etc.
        </p>


    </header>
    <hr>
    @include('_timeline',[
            'tweets'=>$tweets
    ])
</x-app>
