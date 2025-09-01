<x-layout.base>
    <x-slot:title>Job News - {{ $details->title }}</x-slot:title>

    <article class="job--page page--layout pt-5">
        <h1 class="m-0">{{ $details->title }}</h1>
        <p>{{ $details->content }}</p>
        <p class="d-flex flex-column" style="background-color: #1d2026; font-size: 15px; color: #fff; padding: 1rem; border-radius: 5px; position: relative">
            <span class="mb-2" style="font-size: 12px; color: #fff; font-weight: 500">Comment:</span>
            {{ $details->comment->comment }}
        </p>
    </article>


</x-layout.base>