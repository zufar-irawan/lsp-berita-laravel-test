<head>
    <title>Berita Senin</title>
    @vite('resources/css/app.css')
</head>

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

<main class="bg-gray-300 h-screen">
    <div class="h-screen flex flex-col justify-center">
        <form method="POST" action="/login" class="w-[80vh] h-[60vh] flex flex-col mx-auto px-20 py-16 gap-2 bg-white shadow-md rounded-md">
            <h2 class="text-3xl text-blue-950 font-bold">Login</h2>
            @csrf
            <input class="text-gray-900 border border-gray-300 rounded-md px-4 py-2 focus:border-gray-500" type="text" name="username" placeholder="Username"><br>
            <input class="text-gray-900 border border-gray-300 rounded-md px-4 py-2 focus:border-gray-500" type="password" name="password" placeholder="Password"><br>
            <button class="btn btn-block btn-primary" type="submit">Login</button>
        </form>
    </div>
</main>
