<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    // Fungsi untuk meng-handle upload gambar
    public function store(Request $request)
    {
        // Validasi input gambar
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Mengecek jika ada gambar yang diupload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            // Menyimpan gambar di folder 'images' dalam 'storage/app'
            $path = $image->store('images');
            
            // Simpan path gambar di database atau lakukan tindakan lain jika diperlukan
            // Misalnya, simpan ke model atau langsung mengembalikan path
        }

        // Mengembalikan response sukses
        return response()->json(['message' => 'File uploaded successfully!']);
    }
}
