<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Category;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderby("nombre")->paginate(5);
        return view("items.index", compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::select('id', 'nombre')->get();
        return view('items.create', compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        //

        $request->validate([
            "nombre" => ['required', 'string', 'min:5'],
            "stock" => ['required', 'numeric'],
            "precio" => ['required', 'numeric'],
            "category_id" => ['required', 'numeric']

        ]);

        Item::create($request->all());
        return redirect()->route('items.index')->with('mensaje', 'Artículo creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
        $categories = Category::orderby("nombre")->get();
        return view('items.update', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemRequest  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {

        $request->validate([
            "nombre" => ["required", "string", "unique:items,nombre," . $item->id],
            "stock" => ["required", "numeric"],
            "precio" => ["required", "numeric"],
            "category_id" => ["required", "numeric"]
        ]);


        $item->update($request->all());

        return redirect()->route('items.index')->with('mensaje', "Item actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('mensaje', "Artículo eliminado");
    }
}
