<?php

namespace App\Http\Controllers;

use App\Models\materi;
use App\Http\Requests\StoremateriRequest;
use App\Http\Requests\UpdatemateriRequest;

class MateriController extends Controller
{
    
    public function index()
    {
        return view('materi', [
            "title" => "Materi",
            "active" => 'materi',
            "materi" => materi::all()
        ]);
    }

   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremateriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremateriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(materi $materi)
    {
        return view('singlemateri', [
            "title" => "Materi",
            "active" => 'materi',
            "materi" => $materi 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemateriRequest  $request
     * @param  \App\Models\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemateriRequest $request, materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(materi $materi)
    {
        //
    }
}
