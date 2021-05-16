<?php

namespace App\Http\Controllers;

use App\Model\Aluguel;
use Illuminate\Http\Request;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alugueis = Aluguel::latest()->paginate(5);
  
        return view('alugueis.index',compact('alugueis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alugueis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'valoraluguel' => 'required',
            'agua' => 'required',
            'luz' => 'required',
            'internet' => 'required'
        ]);
  
        Aluguel::create($request->all());
   
        return redirect()->route('alugueis.index')
                        ->with('success','Aluguel Cadastrado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function show(Aluguel $aluguel)
    {
        return view('alugueis.show',compact('alugueis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluguel $aluguel)
    {
        return view('alugueis.edit',compact('alugueis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluguel $aluguel)
    {
        $request->validate([
            'valoraluguel' => 'required',
            'agua' => 'required',
            'luz' => 'required',
            'internet' => 'required'
        ]);
  
        $aluguel->update($request->all());
  
        return redirect()->route('alugueis.index')
                        ->with('success','Aluguel atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluguel $aluguel)
    {
        $aluguel->delete();
  
        return redirect()->route('alugueis.index')
                        ->with('success','Aluguel deletado com sucesso');
    }
}
