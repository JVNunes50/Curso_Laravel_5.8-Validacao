<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome'=>'required|min:3|max:20|unique:clientes',
            'idade'=>'required',
            'endereco'=>'required|min:5',
            'email'=>'required|email',
        ];
        $mensagens=[
            'required'=>'O campo :attribute não pode estar em branco', // Mensagem generica, vai para todos
            'email.email'=>'Digite um e-mail valido',
        ];
        $request->validate($regras, $mensagens);

        /*
        $request->validate([
            'nome'=>'required|min:3|max:20|unique:clientes',
            'idade'=>'required',
            'endereco'=>'required|min:5',
            'email'=>'required|email',
        ]);
        */
        
        $cliente = new Cliente();
        $cliente = Cliente::create([
            'nome'=>$request->input('nome'),
            'idade'=>$request->input('idade'),
            'endereco'=>$request->input('endereco'),
            'email'=>$request->input('email'),
        ]);
        $cliente->save();
        return redirect('/');
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
        //
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
