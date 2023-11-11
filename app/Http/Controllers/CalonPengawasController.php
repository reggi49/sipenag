<?php

namespace App\Http\Controllers;

use App\Models\CalonPengawas;
use Illuminate\Http\Request;

class CalonPengawasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calonpengawas = CalonPengawas::latest()->paginate(10);

        return view('calonpengawas.index', compact('calonpengawas'));
    }

    public function create()
    {
        return view('calonpengawas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        CalonPengawas::create($request->all());

        return redirect()->route('calonpengawas.index')
        ->with('success', 'Calonpengawas created successfully.');
    }

    public function show(CalonPengawas $calonpengawas)
    {
        return view('calonpengawas.show', compact('calonpengawas'));
    }

    public function edit(CalonPengawas $calonpengawas)
    {
        return view('calonpengawas.edit', compact('calonpengawas'));
    }

    public function update(Request $request, CalonPengawas $calonpengawas)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $calonpengawas->update($request->all());

        return redirect()->route('calonpengawas.index')
        ->with('success', 'Calonpengawas updated successfully.');
    }

    public function destroy(CalonPengawas $calonpengawas)
    {
        $calonpengawas->delete();

        return redirect()->route('calonpengawas.index')
        ->with('success', 'Calonpengawas deleted successfully.');
    }
}
