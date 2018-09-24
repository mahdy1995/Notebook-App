<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Notebook;

class NotebooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $notebooks= $user->notebooks;

        return view('notebooks.index', compact('notebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('notebooks.create');
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
        $datainput = $request->all();

        $user = Auth::user();
        
        $user->notebooks()->create($datainput);

        // Notebook::create($datainput);

        return redirect('/notebooks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $notebook=Notebook::where('id',$id)->first();
        
        $notes=$notebook->notes;
        
        return view('notes.index',compact('notes','notebook'));
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
        // $notebook = Notebook::where('id',$id)->first();

        $user= Auth::user();
        $notebook=$user->notebooks()->find($id);

        return view('notebooks.edit')->with('notebook',$notebook);
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
        $notebook=Notebook::where('id',$id)->first();

        $notebook->update($request->all());

        return redirect('/notebooks');
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
        $notebook = Notebook::where('id',$id)->first();

        $notebook->delete();

        return redirect('/notebooks');
    }
}
