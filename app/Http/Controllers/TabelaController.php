<?php

namespace App\Http\Controllers;

use App\Tabela;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;

class TabelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $tabela;

    public function __construct(Tabela $tabela)
    {
        $this->middleware('guest');

        $this->tabela = $tabela;
    }
    public function index()
    {
        $tabelas = Tabela::orderBy('created_at', "DESC")->paginate(10);
        return view('financeiro.tabela', compact('tabelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financeiro.tabela.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabela = Tabela::create(Input::all());
        return redirect()->route('tabela');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tabelas = Tabela::findOrFail($id);
        return view('financeiro.tabela.editar', compact('tabelas'));
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
        $tabelas = Tabela::findOrFail($id);

        $this->validate($request, [
            'codigo' => 'required',
            'descricao' => 'required',
            'atribuicao' => 'required',
            'emolumentos' => 'required',
            'fdj' => 'required',
            'frmp' => 'required',
            'fcrcpn' => 'required'
        ]);

        $input = $request->all();

        $tabelas->fill($input)->save();

        return redirect()->route('tabela');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabela = tabela::find($id);
        $tabela->delete();

        // redirect
        
        return redirect()->route('tabela');
    }
}
