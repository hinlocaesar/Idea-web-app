    @props([
        'name'=>'required'
    ])

    @if($errors->has($name))
        <p class="mt-3 text-sm/6 text-red-500">{{ $errors->first($name) }}</p>
    @endif
