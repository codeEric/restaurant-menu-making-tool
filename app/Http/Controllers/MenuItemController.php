<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Menu $menu)
    {
        $menuItems = $menu->menuItem->all();

        return view('dashboard.menu-items.index', ['menuItems' => $menuItems]);
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
            'description' => 'required',
            'category' => 'required',
            'image' => ''
        ]);

        $attributes['menu_id'] = $menu->id;
        $attributes['image'] = "image";
        MenuItem::create($attributes);

        return redirect("/dashboard/menu/menu-items/$menu->id")->with('success', 'Menu item has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu, MenuItem $menuItem)
    {
        $menuItem->delete();
        return redirect("/dashboard/menu/menu-items/$menu->id")->with('success', 'Menu has been deleted');
    }
}
