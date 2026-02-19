<nav class="navbar bg-base-100 shadow-lg">
    <div class="flex-1">
        <a href="/" class="btn btn-ghost normal-case text-xl">Idea</a>
    </div>
    <div class="flex-none gap-2">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/">Home</a></li>
            <li><a href="/ideas/create">New Idea</a></li>

            @guest
              <li><a class="btn btn-primary" href="/login">Login</a></li>
            <li><a class="btn btn-primary" href="/register">Register</a></li>
            @endguest
            @auth
            <li>
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="btn btn-ghost">Logout</button>
                </form>
            </li>
            @endauth

        </ul>
    </div>
</nav>
