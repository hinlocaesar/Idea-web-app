<x-layout>

  <div class="mt-6 text-white">

    <h2 class="font-bold">Your Idea</h2>

  </div>

  <div class="mt-6">

    {{ $idea->description }}

  </div>

  <div class="mt-6">

    <a href="/ideas/{{ $idea->id }}/edit"

      class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2">

      Update

    </a>
  </div>

</x-layout>
