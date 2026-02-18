<x-layout>

@if(count($ideas))
    <div class="mt-6 space-y-2 text-white">
        <h2 class="text-2xl font-bold">Your Ideas</h2>
        <ul class="mt-6 space-y-2">
            @foreach ($ideas as $idea)
<li>
    <a href="/ideas/{{ $idea->id }}" class="inline mr-4">{{ $idea->description }}</a>
    <a href="/ideas/{{ $idea->id }}/edit" class="inline">{{ $idea->state }}</a>
</li>
            @endforeach
        </ul>
    </div>
@else
    <div class="mt-6 space-y-2 text-white">
        <h2 class="text-2xl font-bold">No Ideas Found</h2>
        <a href="/ideas/create" class="inline-block mt-4 text-indigo-500 underline">Create an Ideas</a>
    </div>
@endif
</x-layout>
