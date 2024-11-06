<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_menu' => 'required|string|max:255',
            'type' => 'required|in:Single,Multiple',
            'description' => 'nullable|string|required_if:type,Single',
        ]);

        Menu::create($request->all());
        return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambahkan');
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name_menu' => 'required|string|max:255',
            'description' => 'nullable|string|required_if:type,Single',
        ]);

        $menu->update($request->only('name_menu', 'description'));
        return redirect()->route('menus.index')->with('success', 'Menu berhasil diupdate');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus');
    }
}

