<x-app>
    <div>

        @include('_publish_tweet_panel')

        @include('_timeline',['tweets'=>$tweets])
    </div>
</x-app>
