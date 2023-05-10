<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuDisplayController extends Controller
{
    public function index(string $url)
    {
        $menu = Menu::where('url', '=', $url)->get();
        return view('menudisplay.index', ['menu' => $menu[0]]);
    }

    public function show(string $url, string $category)
    {
        $menu = Menu::where('url', '=', $url)->get()[0];
        $menuItems = $menu->menuItem->where('category', '=', $category);
        return view('menudisplay.show', ['menu' => $menu, 'menuItems' => $menuItems, 'category' => $category]);
    }
}
