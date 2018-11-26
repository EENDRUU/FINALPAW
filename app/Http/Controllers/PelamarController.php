<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelamar;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = new Pelamar();
        $data->namaPelamar = $request->namaPelamar;
        $data->emailPelamar = $request->emailPelamar;
        $data->tangalLahirPelamar = $request->tangalLahirPelamar;
        $data->keahlianPelamar = $request->keahlianPelamar;
        $data->Pendidikan = $request->Pendidikan;
        $data->PengalamanKerja= $request->PengalamanKerja;
        $data->save();

        return response()->json(['status'=>'200','Pelamar'=>$data]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($namaPelamar)
    {
        $data = Pelamar::where('namaPelamar', $namaPelamar)->get();
        if(is_null($data)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($data,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $namaPelamar)
    {
      
        $data = Pelamar::where('namaPelamar',$namaPelamar)->first();
        $data->namaPelamar = $request->namaPelamar;
        $data->emailPelamar = $request->emailPelamar;
        $data->tangalLahirPelamar = $request->tangalLahirPelamar;
        $data->keahlianPelamar = $request->keahlianPelamar;
        $data->Pendidikan = $request->Pendidikan;
        $data->PengalamanKerja= $request->PengalamanKerja;
        $data->save();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
