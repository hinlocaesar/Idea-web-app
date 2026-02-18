<x-layout>
//check if list is not empty
@if (!empty($tasks))
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endif
</x-layout>
