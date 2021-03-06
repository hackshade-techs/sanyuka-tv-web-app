<?php

namespace App\Http\Controllers;

use App\Models\StoryDetail;
use App\Http\Resources\StoryDetailCollection;
use Illuminate\Http\Request;

class StoryDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new StoryDetailCollection(StoryDetail::all());
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
     * @param  \App\StoryDetail  $storyDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StoryDetail $storyDetail)
    {
        return view('stories.show', compact('storyDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoryDetail  $storyDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(StoryDetail $storyDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoryDetail  $storyDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoryDetail $storyDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoryDetail  $storyDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoryDetail $storyDetail)
    {
        //
    }
}
