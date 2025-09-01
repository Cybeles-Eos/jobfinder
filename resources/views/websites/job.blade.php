<x-layout.base>
    <x-slot:title>Job - {{ $job->title }}</x-slot:title>

    <article class="job--page page--layout pt-5">
        <p class="m-0 mb-5" style="font-size: 15px;">Employee Name: <b>{{ $job->employer->name }}</b></p>
        <h1 class="m-0">{{ $job->title }}</h1>
        <p>{{ $job->description }}</p>
        <button class="btn btn-primary">${{ $job->salary }} USD</button>
    </article>


</x-layout.base>