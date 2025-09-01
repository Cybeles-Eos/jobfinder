<x-layout.base>
    <x-slot:title>Job Lists</x-slot:title>

    <article class="joblist--page page--layout">
        <h1>Job List</h1>
        <ul>
        @foreach($jobs as $job)
            <li><a href="{{ url('jobs/' . $job->title) }}">{{ $job->title }}</a></li>
        @endforeach
        </ul>
    </article>


</x-layout.base>