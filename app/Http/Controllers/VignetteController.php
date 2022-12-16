<?php

namespace App\Http\Controllers;

use App\Models\Vignette;
use Illuminate\Http\Request;

class VignetteController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
         $this->middleware('auth')->except('index');
        // $this->middleware('auth')->only('index','create');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vignettes = Vignette::all();
        return view('welcome',compact('vignettes'));
    }

    public function manage()
    {
        $vignettes = Vignette::all();
        return view('admin.vignettes',compact('vignettes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'legende' => 'required|max:75',
            'description'  => 'required|max:100',
        ]);

        $vignette = new Vignette;
        $vignette->legende = $request->legende;
        $vignette->url = $request->url;
        $vignette->description = $request->description;
        $vignette->statut = $request->statut;
        $vignette->save();
        return redirect('vignettes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vignette = Vignette::find($id);
        return view('admin.show',compact('vignette'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vignette = Vignette::find($id);
        return view('admin.formulaire',compact('vignette'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $vignette = Vignette::find($id);
        $vignette->legende = $request->legende;
        $vignette->url = $request->url;
        $vignette->description = $request->description;
        $vignette->statut = $request->statut;
        $vignette->save();

        return redirect('vignettes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vignette = Vignette::find($id);
        $vignette->delete();
        return redirect('/vignettes');
    }
}
