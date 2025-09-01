<x-layout.base>
    <x-slot:title>Job - {{ $job->title }}</x-slot:title>

    <article class="job--page page--layout">
        <h1>{{ $job->title }}</h1>
        <p>{{ $job->description }}</p>
        <button class="btn btn-primary">${{ $job->salary }} USD</button>
    </article>


</x-layout.base>