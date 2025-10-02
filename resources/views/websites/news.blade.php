<x-layout.base>
    <x-slot:title>News</x-slot:title>
    
    <article class="news--page page--layout">
        <h1>News</h1>
        <ul class="ps-0">
            @foreach($allNews as $news)
                <li><a href="{{ url('news/' . $news->title) }}">{{ $news->title }}</a></li>
            @endforeach
        </ul>
    </article>

</x-layout.base>