<?php

namespace App\Http\Controllers;

use App\Models\CardCategory;
use App\Http\Requests\StoreCardCategoryRequest;
use App\Http\Requests\UpdateCardCategoryRequest;
use Illuminate\Contracts\View\View;

class CardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index() : View {
        $categories = CardCategory::all();
        return view( "categories", ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardCategory  $cardCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CardCategory $cardCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardCategory  $cardCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CardCategory $cardCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardCategoryRequest  $request
     * @param  \App\Models\CardCategory  $cardCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardCategoryRequest $request, CardCategory $cardCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardCategory  $cardCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardCategory $cardCategory)
    {
        //
    }
}
