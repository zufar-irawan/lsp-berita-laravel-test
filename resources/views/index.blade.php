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
            </div>
        @endforeach
    </div>
    

</main>

