<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {

        $menus = Menu::where('owner_id', '=', Auth::user()->id)->get();

        return view('dashboard.index', ["menus" => $menus]);
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3|max:255',

        ]);

        $attributes['url'] = Str::random(22);
        $attributes['owner_id'] = Auth::user()->id;


        Menu::create($attributes);

        return redirect('/dashboard/menu')->with('success', 'Menu has been created successfully.');
    }


    public function edit(Menu $menu)
    {
        // dd($menu);
        return view('dashboard.edit', ['menu' => $menu]);
    }

    public function update(Request $request, Menu $menu)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3|max:255',
        ]);

        $menu->update($attributes);
        return redirect('/dashboard/menu');
    }


    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect("/dashboard/menu")->with('success', 'Menu has been deleted');
    }
}
