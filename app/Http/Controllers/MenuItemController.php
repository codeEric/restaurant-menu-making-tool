<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Menu $menu)
    {
        $menuItems = $menu->menuItem->all();
        return view('dashboard.menu-items.index', ['menuItems' => $menuItems, 'menu' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Menu $menu)
    {
        return view('dashboard.menu-items.create', ['id' => $menu->id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Menu $menu)
    {
        // dd($request);
        $attributes = $request->validate([
            'name' => 'required',
            'smprice' => 'required|numeric',
            'lgprice' => 'required|numeric',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required|image'
        ]);
        $attributes['menu_id'] = $menu->id;
        $hashName = $request->file('image')->hashName();
        $request->file('image')->storeAs('public/menu-items', $hashName);
        $attributes['image'] = $hashName;
        MenuItem::create($attributes);

        return redirect("/dashboard/menu/menu-items/$menu->id")->with('success', 'Menu item has been added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu, MenuItem $menuItem)
    {
        return view('dashboard.menu-items.edit', ['menu' => $menu, 'menuItem' => $menuItem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu, MenuItem $menuItem)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'smprice' => 'required|numeric',
            'lgprice' => 'required|numeric',
            'description' => 'required',
            'category' => 'required',
            'image' => 'image'
        ]);

        if ($request->file('image') != null) {
            unlink(storage_path('app/public/menu-items/' . $menuItem->image));
            $hashName = $request->file('image')->hashName();
            $request->file('image')->storeAs('public/menu-items', $hashName);
            $attributes['image'] = $hashName;
        }

        $menuItem->update($attributes);

        return redirect("/dashboard/menu/menu-items/$menu->id")->with('success', 'Menu item has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu, MenuItem $menuItem)
    {
        $menuItem->delete();
        unlink(storage_path('app/public/menu-items/' . $menuItem->image));
        return redirect("/dashboard/menu/menu-items/$menu->id")->with('success', 'Menu has been deleted');
    }
}
