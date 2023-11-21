<?php

namespace App\Http\Controllers;

use App\Models\AdminPusat;
use App\Models\UsulanFormasi;

use Illuminate\Http\Request;

class AdminPusatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formasi = UsulanFormasi::latest()->paginate(10);

        return view('adminpusat.index', compact('formasi'));    
    }

    public function create()
    {
        return view('adminpusat.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->file('file')) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $destinationPath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $input['file'] = '/storage/' . $destinationPath;
        }

        AdminPusat::create($input);

        return redirect()->route('adminpusat.index')
            ->with('success', 'Dokumen Calon pengawas created successfully.');
    }

    public function show(AdminPusat $adminpusat)
    {
        return view('adminpusat.show', compact('adminpusat'));
    }

    public function edit( $id)
    {
        $formasi = UsulanFormasi::find($id);
        $formasi['pratama_jenjang_mi'] = UsulanFormasi::sum('pratama_jenjang_mi');
        $formasi['pratama_jenjang_mts'] = UsulanFormasi::sum('pratama_jenjang_mts');
        $formasi['pratama_jenjang_ma'] = UsulanFormasi::sum('pratama_jenjang_ma');
        $formasi['muda_jenjang_mi'] = UsulanFormasi::sum('muda_jenjang_ma');
        $formasi['muda_jenjang_mts'] = UsulanFormasi::sum('muda_jenjang_ma');
        $formasi['muda_jenjang_ma'] = UsulanFormasi::sum('muda_jenjang_ma');
        $formasi['madya_jenjang_mi'] = UsulanFormasi::sum('madya_jenjang_ma');
        $formasi['madya_jenjang_mts'] = UsulanFormasi::sum('madya_jenjang_ma');
        $formasi['madya_jenjang_ma'] = UsulanFormasi::sum('madya_jenjang_ma');
        $formasi['utama_jenjang_mi'] = UsulanFormasi::sum('utama_jenjang_ma');
        $formasi['utama_jenjang_mts'] = UsulanFormasi::sum('utama_jenjang_ma');
        $formasi['utama_jenjang_ma'] = UsulanFormasi::sum('utama_jenjang_ma');
        
        return view('adminpusat.edit', compact('formasi'));
    }

    public function update(Request $request, string $id)
    {
        $usulanFormasi = UsulanFormasi::findOrFail($id);

        $usulanFormasi->status = $request->get('status');
        $usulanFormasi->save();

        return redirect()->route('adminpusat.index')
            ->with('success', 'Admin Pusat updated successfully.');
    }

    public function destroy(AdminPusat $adminpusat)
    {
        $adminpusat->delete();

        return redirect()->route('adminpusat.index')
            ->with('success', 'Admin Kota deleted successfully.');
    }
}
