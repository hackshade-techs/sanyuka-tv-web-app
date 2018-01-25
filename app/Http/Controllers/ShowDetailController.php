<?php

namespace App\Http\Controllers;

use App\Models\ShowDetail;
use App\Http\Resources\ShowDetailCollection;
use Illuminate\Http\Request;

class ShowDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ShowDetailCollection::(ShowDetail::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShowDetail  $showDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ShowDetail $showDetail)
    {
        return view('shows.show', compact('showDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShowDetail  $showDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ShowDetail $showDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShowDetail  $showDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShowDetail $showDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShowDetail  $showDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShowDetail $showDetail)
    {
        //
    }
}
