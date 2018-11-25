<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lowongan;
class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lowongan::all();
        return $data;
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
        $data = new Lowongan();
        $data->namaLowongan = $request->namaLowongan;
        $data->namaPerusahaan = $request->namaPerusahaan;
        $data->lokasi = $request->lokasi;
        $data->pendidikan = $request->pendidikan;
        $data->deskripsiLowongan = $request->deskripsiLowongan;
        $data->deskripsiPerusahaan = $request->deskripsiPerusahaan;
        $data->save();

        return response()->json(['status'=>'200','Lowongan'=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($namaLowongan,$lokasi)
    {
        $data = Lowongan::where('namaLowongan', $namaLowongan)->where('lokasi',$lokasi)->get();
        if(is_null($data)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($data,200);
    }

    public function showDetail($id)
    {
        $data = Lowongan::where('id', $id)->get();
        if(is_null($data)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($data,200);
    }
    public function showLowongan($namaLowongan)
    {
        $data = Lowongan::where('namaLowongan', $namaLowongan)->get();
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
        $data = Lowongan::where('id',$id)->get();

        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Lowongan::where('id',$id)->first();
        $data->namaLowongan = $request->namaLowongan;
        $data->namaPerusahaan = $request->namaPerusahaan;
        $data->lokasi = $request->lokasi;
        $data->pendidikan = $request->pendidikan;
        $data->deskripsiLowongan = $request->deskripsiLowongan;
        $data->deskripsiPerusahaan = $request->deskripsiPerusahaan;
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
        $data = Lowongan::where('id',$id)->first();
        $data->delete();
        returnredirect('lowongans')->with('success','Information has been  deleted');
    }
}
