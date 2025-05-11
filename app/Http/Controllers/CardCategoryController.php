<?php

namespace App\Http\Controllers;

use App\Models\CardCategory;
use App\Http\Requests\StoreCardCategoryRequest;
use App\Http\Requests\UpdateCardCategoryRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */

    public function index() : View
    {
        $categories = CardCategory::all();
        return view('admin.category.index', compact('categories'));
    }

    public function countCategory()
    {
        $categoryCount = CardCategory::count();
        return view('admin.index', compact('categoryCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'enable' => 'required|in:0,1', 
        ]);

        CardCategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'enable' => $request->enable,
        ]);
        // dd($request->all());
        // return redirect()->route('admin.category.index')->with('success', 'Catégorie créée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardCategory  $cardCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = CardCategory::findOrFail($id);
        return view('auth.about', compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardCategory  $cardCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CardCategory::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardCategoryRequest  $request
     * @param  \App\Models\CardCategory  $cardCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Récupérer l'utilisateur à modifier
        $category = CardCategory::findOrFail($id);

        // Valider les données de la requête
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'enable' => 'required|integer',
        ]);

        // Mettre à jour les données de l'utilisateur
        $category->update($validatedData);

        // Rediriger avec un message de succès
        return redirect()->route('admin.category.index')->with('success', 'Catégorie mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardCategory  $cardCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CardCategory::findOrFail($id);

        // Supprimer l'utilisateur
        $category->delete();

        // Rediriger avec un message de succès
        return redirect()->route('admin.category.index')->with('success', 'Catégorie supprimé avec succès.');
    }
}
