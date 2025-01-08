<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function semua()
    {
        $artikels = Artikel::all(); // Ambil semua artikel dari database
        return view('utama.artikel.index', compact('artikels')); // Kirim data ke view utama.homepage
    }

    // Fungsi untuk menampilkan detail artikel berdasarkan ID
    public function detail($id)
    {
        $artikel = Artikel::findOrFail($id);
        
        // Ambil artikel terkait, misalnya dengan mengabaikan artikel yang sedang dibuka
        $relatedArticles = Artikel::where('id', '!=', $id)->limit(3)->get();

        return view('utama.artikel.show', compact('artikel', 'relatedArticles'));
    }



    public function index()
    {
        return response()->json(Artikel::all());
    }

    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|string',
            'tanggal' => 'required|date',
            'isi' => 'required|string',
        ]);
    
        $artikel = Artikel::create($validated);
    
        return response()->json([
            'message' => 'Artikel berhasil dibuat',
            'data' => $artikel
        ], 201);
    }
    



    public function show($id)
    {
        $artikel = Artikel::find($id);
        if (!$artikel) {
            return response()->json(['message' => 'Artikel tidak ditemukan'], 404);
        }
        return response()->json($artikel);
    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::find($id);
        if (!$artikel) {
            return response()->json(['message' => 'Artikel tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|string',
            'tanggal' => 'required|date',
            'isi' => 'required|string',
        ]);

        $artikel->update($validated);
        return response()->json(['message' => 'Artikel berhasil diperbarui', 'data' => $artikel]);
    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        if (!$artikel) {
            return response()->json(['message' => 'Artikel tidak ditemukan'], 404);
        }

        $artikel->delete();
        return response()->json(['message' => 'Artikel berhasil dihapus']);
    }
}
