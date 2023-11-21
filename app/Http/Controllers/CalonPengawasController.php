<?php

namespace App\Http\Controllers;

use App\Models\CalonPengawas;
use App\Models\UsulanFormasi;
use App\Models\UjiKompetensi;

use Illuminate\Http\Request;

class CalonPengawasController extends Controller
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

        return view('calonpengawas.index', compact('formasi'));
    }

    public function create()
    {
        return view('calonpengawas.create');
    }

    public function hasil()
    {
        $calonpengawas = [];
        return view('calonpengawas.hasil', compact('calonpengawas'));
    }

    public function cekhasil(Request $request)
    {
        $nip = $request->nip;
        $no_ujian = $request->no_ujian;
        
        $hasil = UjiKompetensi::where('nip', '=',  $nip)
        ->where('no_ujian', '=',  $no_ujian)
        ->get();

        // dd($hasil);
        return view('calonpengawas.hasil', compact('hasil', 'nip', 'no_ujian'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->file('file')) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $destinationPath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $input['file'] = '/storage/' .$destinationPath;
        }

        CalonPengawas::create($input);

        return redirect()->route('calonpengawas.index')
        ->with('success', 'Dokumen Calon pengawas created successfully.');
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

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $calonpengawas->update($input);

        return redirect()->route('calonpengawas.index')
        ->with('success', 'Calon Pengawas updated successfully.');
    }

    public function destroy(CalonPengawas $calonpengawas)
    {
        $calonpengawas->delete();

        return redirect()->route('calonpengawas.index')
        ->with('success', 'Calon Pengawas deleted successfully.');
    }
}
