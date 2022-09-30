<?php

namespace App\Http\Controllers;

use App\Models\soal;
use App\Http\Requests\StoresoalRequest;
use App\Http\Requests\UpdatesoalRequest;
use App\Models\Nilai;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {   
        $nilai = Nilai::all();
        return view('soalujian', compact('nilai'));

        // return view('soalujian', [
        //     "title" => "Ujian",
        //     "active" => 'ujian',
        //     "soal" => soal::all(),
        //     "nilai" => Nilai::all()
        // ]);
    }

    public function upload(Request $request)
    {
        $image_parts = explode(";base64,", $request->signed);
        $image_base64 = base64_decode($image_parts[1]);
        file_put_contents('kl', $image_base64);

        // Save in your data in database here.
        $image_file = $request->signed;
        $form_data = array(
            'jawab_image' => $image_file,
            'soal_id' => $request->soal_id,
        );
        
        $form_data['user_id'] = auth()->user()->id;

        Nilai::create($form_data);
        return back()->with('success', 'Jawaban berhasil disimpan!');
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
     * @param  \App\Http\Requests\StoresoalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresoalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(soal $soal)
    {
        return view('soalujian', [
            "title" => "Ujian",
            "active" => 'ujian',
            "soal" => $soal
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(soal $soal)
    {
        //_
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesoalRequest  $request
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */

    //

    public function update(UpdatesoalRequest $request, soal $soal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(soal $soal)
    {
        //
    }
}
