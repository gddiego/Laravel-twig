<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
class clientController extends Controller
{
    public function index()
    {
        // $products = Client::orderBy('created_at', 'desc')->paginate(10);
        // return view('products.index',['products' => $products]);
        return view('pages.clients.create');
    }

    public function create()
    {
        return view('pages.clients.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'address'=>'required'
        ]);

        $client = new Clients([
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),

        ]);
        $client->save();
        return redirect('pages.clients.create')->with('success', 'Cadastro Efetuado com sucesso!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // $product = Product::findOrFail($id);
        // return view('products.edit',compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        // $product = Product::findOrFail($id);
        // $product->name        = $request->name;
        // $product->description = $request->description;
        // $product->quantity    = $request->quantity;
        // $product->price       = $request->price;
        // $product->save();
        // return redirect()->route('products.index')->with('message', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        // $product = Product::findOrFail($id);
        // $product->delete();
        // return redirect()->route('products.index')->with('alert-success','Product hasbeen deleted!');
    }
}
