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

        return redirect('/dashboard')->with('success', 'Menu has been created successfully.');
    }


    public function edit(string $id)
    {
        $menus = Menu::where('id','=',$id)->first();
        
        return view('dashboard.edit',['menus'=>$menus]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|min:3|max:255',
            // 'description'=>'required|min:3|max:255',
            // 'category'=>'required|min:3|max:255'
        ]);
        $id = $request->id;
        $name = $request->name;
        // $description = $request ->description;
        // $category = $request->category;
   
        Menu::where('id','=',$id)->update([
            'name'=>$name,
            // 'description'=>$description,
            // 'category'=>$category
        ]);
        return redirect('/dashboard');
    }
    

    public function destroy(string $id)
    {
        //
    }
}
