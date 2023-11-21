<?php

namespace App\Http\Controllers;

use App\Models\AdminKota;
use App\Models\UsulanFormasi;
use App\Models\CalonPengawas;
use Illuminate\Http\Request;

class AdminKotaController extends Controller
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

        return view('adminkota.index', compact('formasi'));
    }

    public function verifikasi()
    {
        $calonpengawas = CalonPengawas::latest()->paginate(10);

        return view('adminkota.verifikasi', compact('calonpengawas'));
    }

    public function editverif($id)
    {
        $calonpengawas = CalonPengawas::find($id);

        return view('adminkota.editverif', compact('calonpengawas'));
    }

    public function create()
    {
        return view('adminkota.create');
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

        return redirect()->route('adminkota.index')
        ->with('success', 'Dokumen Calon pengawas created successfully.');
    }

    public function show(AdminKota $adminkota)
    {
        return view('adminkota.show', compact('adminkota'));
    }

    public function edit(AdminKota $adminkota)
    {
        return view('adminkota.edit', compact('adminkota'));
    }

    public function updateverif(Request $request, string $id)
    {
        $calonpengawas = CalonPengawas::findOrFail($id);

        $calonpengawas->status = $request->get('status');

        if ($request->file('file_pendukung_prov')) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $destinationPath = $request->file('file_pendukung_prov')->storeAs('uploads', $fileName, 'public');
            // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $input['file_pendukung_prov'] = '/storage/' . $destinationPath;
        } else {
            $calonpengawas->save();
        }

        return redirect()->route('adminkota.index')
        ->with('success', 'Calon Pengawas Approved Successfully.');
    }

    public function update(Request $request, AdminKota $adminkota)
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

        $adminkota->update($input);

        return redirect()->route('adminkota.index')
        ->with('success', 'Admin Kota updated successfully.');
    }

    public function destroy(AdminKota $adminkota)
    {
        $adminkota->delete();

        return redirect()->route('adminkota.index')
        ->with('success', 'Admin Kota deleted successfully.');
    }
}
