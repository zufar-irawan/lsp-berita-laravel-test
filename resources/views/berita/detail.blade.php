<main class="bg-gray-300 min-h-screen">
    <x-navbar/>

    <div class="max-w-[120vh] min-h-screen flex flex-col mx-auto px-16 gap-10 py-12 bg-white shadow-md">
        <a class="font-bold text-blue-950 text-4xl">{{ $data->judul }}</a>
        <p style="white-space: pre-wrap;" class="text-gray-900">{{ $data->isi }}</p>
    </div>
</main>
