<main class="bg-gray-300 h-screen">
    <x-navbar/>

    <form class="flex flex-col mx-auto my-12 px-20 py-16 gap-2 bg-white shadow-md rounded-md max-w-[100vh]" method="POST" action="/berita/store">
        <h1 class="text-3xl text-blue-950 font-bold">Tambah Berita</h1>

        @csrf
        <input class="text-gray-900 border border-gray-300 rounded-md px-4 py-2 focus:border-gray-500" type="text" name="judul" placeholder="Judul"><br>
        <textarea class="text-gray-900 border border-gray-300 rounded-md px-4 py-2 h-[28vh]" name="isi" placeholder="Masukkan isi berita disini"></textarea><br>
        <button class="py-2 px-4 bg-blue-950 text-md font-medium text-gray-100 rounded-md" type="submit">Simpan</button>
    </form>
</main>

