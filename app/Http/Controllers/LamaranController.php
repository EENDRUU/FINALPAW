<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lamaran;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($namaPelamar)
    {
        $data = Lamaran::where('namaPelamar', $namaPelamar)->get();
        if(is_null($data)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($data,200);
    }

    public function showLowongan($idLowongan,$namaLowongan)
    {
        $data = Lamaran::where('idLowongan', $idLowongan)->where('namaLowongan',$namaLowongan)->get();
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Lamaran::where('id',$id)->first();
        $data->delete();
        returnredirect('lamarans')->with('success','Information has been  deleted');
    }
}
