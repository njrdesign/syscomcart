<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestController extends Controller {

	public function index() {
            $data['tasks'] = [
                [
                    'name' => 'Registro de Imóveis',
                    'progress' => '40',
                    'color' => 'success'
                ],
                [
                    'name' => 'Notas',
                    'progress' => '32',
                    'color' => 'success'
                ],
                [
                    'name' => 'Registro Civil das Pessoas Naturais',
                    'progress' => '56',
                    'color' => 'success'
                ],
                [
                    'name' => 'Protesto de Títulos',
                    'progress' => '10',
                    'color' => 'success'
                ],
                [
                    'name' => 'Registro de Títulos e Documentos e Civis das PJ',
                    'progress' => '1',
                    'color' => 'success'
                ]
            ];
            return view('test')->with($data);
  }

}
