<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $data = Berita::all();
        return view('index', compact('data'));
    }

    public function dashboard()
    {
        $data = Berita::all();
        return view('berita.index', compact('data'));
    }

    public function detail(string $id)
    {
        $data = Berita::find($id);
        return view('berita.detail', compact('data'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        Berita::create($request->all());
        return redirect('/berita');
    }

    public function delete($id)
    {
        Berita::find($id)->delete();
        return redirect('/berita');
    }
}
