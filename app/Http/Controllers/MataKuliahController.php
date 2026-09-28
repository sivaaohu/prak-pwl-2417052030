<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'list Mata Kuliah',
            'mks' => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request)
    {
        // 1. Validasi input agar tidak bernilai null
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks'     => 'required|integer|min:1',
        ]);

        // 2. Simpan data
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks'     => $request->input('sks'),
        ]);

        return redirect()->route('mata-kuliah.index');
    }
}