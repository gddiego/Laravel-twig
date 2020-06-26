<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      return view ('pages.home.home', [
          'nome' => 'Diego Mendes',
          'Endereco' => 'Rua Antonio Joao. 15',
          'Bairro' => 'Jardim Aeroporto',


      ]);
    }

    public function store()
    {
      return view ('home', [
          'nome' => 'Diego Mendes',
          'title' => 'Home',
      ]);
    }

    public function show($id)
    {
      return view ('home', [
          'nome' => 'Diego Mendes',
          'title' => 'Home',
      ]);
    }

    public function delete($id)
    {
      return view ('home', [
          'nome' => 'Diego Mendes',
          'title' => 'Home',
      ]);
    }
}
