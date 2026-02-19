<x-layout>
    <form action="/login" method="POST">
    @csrf
    <fieldset class="fieldset bg-base-200 border-base-300 border-white rounded-box w-xs border p-4 mx-auto">
    <legend class="fieldset-legend">log in</legend>

    <label class="label">Email</label>
    <input required type="email" name="email" class="input" placeholder="Email" value="{{ old('email') }}" />
      <x-Forms.error  name="email"/>
    <label class="label">Password</label>
    <input required type="password" name="password" class="input" placeholder="Password" value="{{ old('password') }}" />
          <x-Forms.error  name="password"/>
    <br>


        <button class="btn btn-neutral mt-4">login</button>




    </fieldset>
</x-layout>
