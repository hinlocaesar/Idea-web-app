<x-layout>

@if(count($ideas))
    <div class="mt-6">
        <h2 class="text-2xl font-bold mb-6">Your Ideas</h2>
        <div class="space-y-2">
            @foreach ($ideas as $idea)
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body p-4">
                        <div class="flex items-center justify-between">
                            <a href="/ideas/{{ $idea->id }}" class="link link-primary text-lg">{{ $idea->description }}</a>
                            <a href="/ideas/{{ $idea->id }}/edit" class="badge badge-outline">{{ $idea->state }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
    <div class="mt-6 text-center">
        <h2 class="text-2xl font-bold mb-4">No Ideas Found</h2>
        <a href="/ideas/create" class="btn btn-primary">Create an Idea</a>
    </div>
@endif
</x-layout>
