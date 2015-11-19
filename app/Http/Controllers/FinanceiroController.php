<?php

namespace App\Http\Controllers;

use App\Financeiro;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Input;


class FinanceiroController extends Controller
{
    private $financeiro;

    public function __construct(Financeiro $financeiro)
    {
        $this->middleware('guest');

        $this->financeiro = $financeiro;
    }
    public function index()
    {
        $financeiros = Financeiro::orderBy('id', "DESC")->paginate(10);
        return view('financeiro.index', compact('financeiros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financeiro.index.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $emolumentos = $request->get('emolumentos');
      $emolumentos_n = str_ireplace([".",","], ["","."], $emolumentos);
      $fdj = $request->get('fdj');
      $fdj_n = str_ireplace([".",","], ["","."], $fdj);
      $frmp = $request->get('frmp');
      $frmp_n = str_ireplace([".",","], ["","."], $frmp);
      $fcrcpn = $request->get('fcrcpn');
      $fcrcpn_n = str_ireplace([".",","], ["","."], $fcrcpn);
      $valortotal = collect([$emolumentos_n, $fdj_n, $frmp_n, $fcrcpn_n])->sum();
      dd($emolumentos_n, $fdj_n, $frmp_n, $fcrcpn_n, $valortotal);
      $limite = $request->get('quant');
      for ($n = 1; $n <= $limite; $n++) {
      $financeiros = Financeiro::create(Input::all());
      }
      return redirect()->route('financeiro');
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
        $financeiros = Financeiro::findOrFail($id);
        return view('financeiro.index.edit', compact('financeiros'));
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
      $financeiros = Financeiro::findOrFail($id);

      $this->validate($request, [
          'codigo' => 'required',
          'descricao' => 'required',
          'atribuicao' => 'required',
          'dataEmissao' => 'required',
          'valor' => 'required'
      ]);

      $input = $request->all();

      $financeiros->fill($input)->save();

      return redirect()->route('financeiro');
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
