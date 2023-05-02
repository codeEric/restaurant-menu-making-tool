<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {

        $menus = Menu::all();

        return view('dashboard.index', ["menus" => $menus]);
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function edit(string $id)
    {
        return view('dashboard.edit');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
