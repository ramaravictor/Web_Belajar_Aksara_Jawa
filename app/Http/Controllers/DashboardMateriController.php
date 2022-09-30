<?php

namespace App\Http\Controllers;

use App\Models\materi;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.materi.index', [
            // 'post' =>materi::where('id', auth()->user()->id)->get()
            "post" => materi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.materi.create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:materis',
            'body' => 'required',
            'image' => 'image|file|max:1024',

        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('materi-images');
        }

        materi::create($validatedData);

        return redirect('/dashboard/materi')->with('success', 'Materi baru berhasil ditambahkan!');

        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(materi $materi)
    {
        return view('dashboard.materi.show', [
            'post' => $materi
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
        return view('dashboard.materi.edit', [
            'post' => $materi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materi $materi)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file|max:1024',
        ];


        if ($request->slug != $materi->slug) {
            $rules['slug'] = 'required|unique:materis';
        }

        $validatedData = $request->validate($rules);
        
        
        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('materi-images');
        }


        materi::where('id', $materi->id)
            ->update($validatedData);

        return redirect('/dashboard/materi')->with('success', 'Materi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(materi $materi)
    {
        if($materi->image) {
            Storage::delete($materi->image);
        }
        materi::destroy($materi->id);
        return redirect('/dashboard/materi')->with('success', 'Materi berhasil dihapus!');
    }
}
