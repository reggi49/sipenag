<?php

namespace App\Http\Controllers;

use App\Models\AdminProv;
use App\Models\UsulanFormasi;

use Illuminate\Http\Request;

class AdminProvController extends Controller
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

        return view('adminprov.index', compact('formasi'));
    }

    public function create()
    {
        return view('adminprov.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->file('file_dokumen')) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $destinationPath = $request->file('file_dokumen')->storeAs('uploads', $fileName, 'public');
            // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $input['file_dokumen'] = '/storage/' . $destinationPath;
        }
        if ($request->file('file_surat')) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $destinationPath = $request->file('file_surat')->storeAs('uploads', $fileName, 'public');
            // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $input['file_surat'] = '/storage/' . $destinationPath;
        }
        $date_surat = date_create($request->get('tanggal_surat_usulan'));
        $input['tanggal_surat_usulan'] = date_format($date_surat, 'Y-m-d');

        $date_dokumen = date_create($request->get('tanggal_dokumen'));
        $input['tanggal_dokumen'] = date_format($date_dokumen, 'Y-m-d');

        // dd($input);
        UsulanFormasi::create($input);

        return redirect()->route('adminprov.index')
        ->with('success', 'Dokumen Calon pengawas created successfully.');
    }

    public function show(AdminProv $usulanformasi)
    {
        return view('adminprov.show', compact('usulanformasi'));
    }

    public function edit($id)
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

        return view('adminprov.edit', compact('formasi'));
    }

    public function update(Request $request, string $id, UsulanFormasi $usulanformasi)
    {
        $usulanFormasi = UsulanFormasi::findOrFail($id);

        // dd($usulanFormasi);
        $usulanFormasi->nomor_surat_prov = $request->get('nomor_surat_prov');
        $usulanFormasi->status = $request->get('status');
        if ($request->file('file_pendukung_prov')) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $destinationPath = $request->file('file_pendukung_prov')->storeAs('uploads', $fileName, 'public');
            // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $input['file_pendukung_prov'] = '/storage/' . $destinationPath;
        } else {
            $usulanFormasi->save();
        }

        return redirect()->route('adminprov.index')
        ->with('success', 'Usulan Formasi Disetujui Provinsi.');
    }

    public function destroy(AdminProv $adminprov)
    {
        $adminprov->delete();

        return redirect()->route('adminprov.index')
        ->with('success', 'Admin Kota deleted successfully.');
    }
}
