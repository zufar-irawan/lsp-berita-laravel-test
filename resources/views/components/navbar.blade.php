<head>
    <title>Berita Senin</title>
    @vite('resources/css/app.css')
</head>

<nav class="flex bg-blue-950 shadow-xl py-6 px-8 justify-between">
    <h2 class="text-4xl font-bold flex my-auto text-gray-100">Berita Senin</h2>
    <li class="flex gap-2">
        <ul>
            <a href="/" class="btn btn-ghost flex my-auto text-gray-100 text-md font-bold py-2 px-6">
                Home
            </a>
        </ul>
        @if (session('login'))
        <ul>
            <a href="/berita" class="btn btn-ghost flex my-auto text-gray-100 text-md font-bold py-2 px-6">
                Dashboard
            </a>
        </ul>
        <ul>
            <a href="/berita/create" class="btn btn-ghost flex my-auto text-gray-100 text-md font-bold py-2 px-6">
                Tambah
            </a>
        </ul> 
        @endif
        <ul>
            @if(session('login'))
            <a href="/logout">
                <button class="btn btn-neutral">Logout</button>
            </a>
            @else
            <a href="/login">
                <button class="btn btn-neutral">Login</button>
            </a>
            @endif
        </ul>
    </li>
</nav>