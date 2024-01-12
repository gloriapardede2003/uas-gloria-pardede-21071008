<?php

namespace App\Http\Controllers;

use App\Models\Nilaigloria;
use Illuminate\Http\Request;

class NilaigloriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilai = Nilaigloria::get();      
        return view('nilaigloria.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cetak_nilai(){
        $nilaii = Nilaigloria::get();
        return view ('nilaigloria.cetak_nilai', compact('nilaii'));
    }
}
