<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Daara;
use Illuminate\Http\Request;

class DaaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $daaras=Daara::all();
        return view('daaras.index',compact('daaras'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $daaras=Daara::all();
        return view('daaras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'string|required|',
            'capacite' => 'string|required',
            'adresse'=>'string|required',
            'telephone'=>'string|required',
        ]);
        try {
            //code...
            $daaras=Daara::create($request->all());
            return redirect()->route('daaras.index');
        } catch (Exception $e) {
            //throw $th;
            dd($e);
        }

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
}
