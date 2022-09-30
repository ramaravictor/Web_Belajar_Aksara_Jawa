<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class DashboardNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.nilai.index', [
            "nilai" => Nilai::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.nilai.create', [
            'nilai' => nilai::all()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        return view('dashboard.nilai.show', [
            'nilai' => $nilai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        return view('dashboard.nilai.edit', [
            'nilai' => $nilai,
           // 'kategorimateri' => kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        $rules = [
            'ustadz' => 'required',
            'nilai' => 'required',
            'kompetensi' => 'required',
        ];


        
        $validatedData = $request->validate($rules);

        Nilai::where('id', $nilai->id)
            ->update($validatedData);

        return redirect('/dashboard/nilai')->with('success', 'Nilai berhasil diinput!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        Nilai::destroy($nilai->id);
        return redirect('/dashboard/nilai')->with('success', 'Materi berhasil dihapus!');
    }
}
