<x-layout>

<form method="POST" action="/ideas">
@csrf
  <div class="col-span-full">
   <label for="ideas" class="block text-sm/6 font-medium text-white">New Idea</label>
   <div class="mt-2">
    <textarea id="ideas" name="ideas" rows="3" class="block w-full rounded-md bg-white/5 px-3"></textarea>
   </div>
  </div>

  <p class="mt-3 text-sm/6 text-gray-400">Have an idea? Share it here.</p>
 </div>

   <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
  </div>
</form>


@if(count($ideas))
    <div class="mt-6 space-y-2 text-white">
        <h2 class="text-2xl font-bold">Your Ideas</h2>
        <ul class="mt-6 space-y-2">
        <div>
            @foreach ($ideas as $idea)
                <p>{{ $idea }}</p>
            @endforeach
        </div>
        </ul>
    </div>
@endif
</x-layout>
