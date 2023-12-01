<?php

namespace App\Http\Controllers;

use App\Models\Tfactura;
use Illuminate\Http\Request;

/**
 * Class TfacturaController
 * @package App\Http\Controllers
 */
class TfacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tfacturas = Tfactura::paginate();

        return view('tfactura.index', compact('tfacturas'))
            ->with('i', (request()->input('page', 1) - 1) * $tfacturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tfactura = new Tfactura();
        return view('tfactura.create', compact('tfactura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tfactura::$rules);

        $tfactura = Tfactura::create($request->all());

        return redirect()->route('tfacturas.index')
            ->with('success', 'Tfactura created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tfactura = Tfactura::find($id);

        return view('tfactura.show', compact('tfactura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tfactura = Tfactura::find($id);

        return view('tfactura.edit', compact('tfactura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tfactura $tfactura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tfactura $tfactura)
    {
        request()->validate(Tfactura::$rules);

        $tfactura->update($request->all());

        return redirect()->route('tfacturas.index')
            ->with('success', 'Tfactura updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tfactura = Tfactura::find($id)->delete();

        return redirect()->route('tfacturas.index')
            ->with('success', 'Tfactura deleted successfully');
    }
}
