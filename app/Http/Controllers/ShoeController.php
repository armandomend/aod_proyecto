<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoes = shoe::all();
        return view('shoes.index', compact('shoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shoe = request()->except('_token');
        Shoe::insert($shoe);
        return view('shoes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoe $shoe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoe $shoe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe $shoe)
    {
        //
    }
}
