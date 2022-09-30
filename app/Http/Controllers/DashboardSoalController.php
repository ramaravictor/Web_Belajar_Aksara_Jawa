<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.soal.index', [
            "soal" => soal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.soal.create', [
            'soal' => kategori::all()
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
            'kategori_id' => 'required',
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required',

        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('soal-images');
        }

        soal::create($validatedData);

        return redirect('/dashboard/soal')->with('success', 'Soal baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(Soal $soal)
    {
        return view('dashboard.soal.show', [
            'soal' => $soal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(Soal $soal)
    {

        
        return view('dashboard.soal.edit', [
            'soal' => $soal,
            'kategori' => kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soal $soal)
    {
        $rules = [
            'kategori_id' => 'required',
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('soal-images');
        }

        soal::where('id', $soal->id)
            ->update($validatedData);
        return redirect('/dashboard/soal')->with('success', 'Soal berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soal $soal)
    {
        if($soal->image) {
            Storage::delete($soal->image);
        }
        soal::destroy($soal->id);
        return redirect('/dashboard/soal')->with('success', 'Soal berhasil dihapus!');
    }
}
