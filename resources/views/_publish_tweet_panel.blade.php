<div class="border border-blue-400 rounded-lg px-8 py-6 mb-6">
    <form action="/tweets" method="post">
    @csrf
        <textarea
        name="body"
        class="w-full"
        placeholder="What's up !! Let's Fuzz...."

        >
    </textarea>
        <hr class="py-2">
    <footer class="flex justify-between">
        <img
            src={{auth()->user()->avatar}}
            alt="avatar"
            class="rounded-full mr-2"
            width="50"
            height="50"
            >
        <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Fuzzzzzzz</button>
    </footer>
    </form>

        @error('body')
            <p class="text-red-500 text-sm mt-2 pt-2">{{$message}} </p>
        @enderror

</div>
