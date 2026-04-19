<main class="bg-gray-300 min-h-screen">
    <x-navbar/>

    <div class="min-h-screen">
        @foreach($data as $b)
        <div class="mx-auto my-8 shadow-xl rounded-xl max-w-4xl bg-white border border-gray-500/50 px-6 py-4 flex flex-col gap-4">
            <a href="/berita/detail/{{ $b->id }}" class="font-bold text-blue-950 text-2xl hover:underline">{{ $b->judul }}</a>
            <p class="text-gray-900">
                {{ substr($b->isi, 0, 300) }}...
                <a class="text-blue-500 hover:underline" href="/berita/detail/{{ $b->id }}">Baca selengkapnya</a>
            </p>
            <a class="bg-red-600 text-gray-100 w-fit px-4 py-2 border border-red-600 rounded-xl shadow-xl hover:bg-gray-100 hover:text-red-600" href="/berita/delete/{{ $b->id }}">Hapus</a>
        </div>
        @endforeach
    </div>
    

</main>

