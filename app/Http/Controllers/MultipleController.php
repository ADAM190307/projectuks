<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Multiple;
use Illuminate\Http\Request;

class MultipleController extends Controller
{
    public function index()
    {
        $multipleData = Multiple::with('menu')->get();
        return view('multiple.index', compact('multipleData'));
    }

    public function create()
    {
        $menus = Menu::where('type', 'Multiple')->get();
        return view('multiple.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'menus_id' => 'required|exists:menus,id',
            'description' => 'required|string',
        ]);

        Multiple::create($request->all());
        return redirect()->route('multiple.index')->with('success', 'Data Multiple berhasil ditambahkan');
    }

    public function edit(Multiple $multiple)
    {
        $menus = Menu::where('type', 'Multiple')->get();
        return view('multiple.edit', compact('multiple', 'menus'));
    }

    public function update(Request $request, Multiple $multiple)
    {
        $request->validate([
            'description' => 'required|string',
        ]);

        $multiple->update($request->only('description'));
        return redirect()->route('multiple.index')->with('success', 'Data Multiple berhasil diupdate');
    }

    public function destroy(Multiple $multiple)
    {
        $multiple->delete();
        return redirect()->route('multiple.index')->with('success', 'Data Multiple berhasil dihapus');
    }
}

