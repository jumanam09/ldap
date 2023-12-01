<?php

namespace App\Http\Controllers;

use App\Models\Tcliente;
use Illuminate\Http\Request;

/**
 * Class TclienteController
 * @package App\Http\Controllers
 */
class TclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tclientes = Tcliente::paginate();

        return view('tcliente.index', compact('tclientes'))
            ->with('i', (request()->input('page', 1) - 1) * $tclientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tcliente = new Tcliente();
        return view('tcliente.create', compact('tcliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tcliente::$rules);

        $tcliente = Tcliente::create($request->all());

        return redirect()->route('tclientes.index')
            ->with('success', 'Tcliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tcliente = Tcliente::find($id);

        return view('tcliente.show', compact('tcliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tcliente = Tcliente::find($id);

        return view('tcliente.edit', compact('tcliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tcliente $tcliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tcliente $tcliente)
    {
        request()->validate(Tcliente::$rules);

        $tcliente->update($request->all());

        return redirect()->route('tclientes.index')
            ->with('success', 'Tcliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tcliente = Tcliente::find($id)->delete();

        return redirect()->route('tclientes.index')
            ->with('success', 'Tcliente deleted successfully');
    }
}
