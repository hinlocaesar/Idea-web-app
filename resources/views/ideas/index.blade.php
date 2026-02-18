<x-layout>

<form method="POST" action="/ideas">
    @csrf
    <div class="col-span-full">
        <label for="description" class="block text-sm/6 font-medium text-white">New Idea</label>
        <div class="mt-2">
            <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white/5 px-3"></textarea>
        </div>
    </div>

    <p class="mt-3 text-sm/6 text-gray-400">Have an idea? Share it here.</p>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
    </div>
</form>

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
@endif
</x-layout>
