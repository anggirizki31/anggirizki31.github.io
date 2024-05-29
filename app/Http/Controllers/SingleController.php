<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function index()
    {
        return view('single');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id); // Menggunakan Eloquent untuk mengambil data blog berdasarkan ID
        return view('blog.single', compact('blog')); // Mengirim data ke view
    }

    
}
