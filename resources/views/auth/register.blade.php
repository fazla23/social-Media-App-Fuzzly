<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
        <div class="col-md-8">
            <div class="card">
                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                <div class="card-body">
                    @include('__userform')
                </div>
            </div>
        </div>
    </div>
</div>
</x-master>
