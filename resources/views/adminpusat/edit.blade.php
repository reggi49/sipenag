@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Verifikasi Dokumen Usulan Formasi Pengawas Tingkat Pusat</h1>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('adminpusat.update', $formasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomor_surat_prov">Nomor Surat Provinsi</label>
            <input type="text" name="nomor_surat_prov" id="nomor_surat_prov" class="form-control" value="{{ $formasi->nomor_surat_prov }}" required>
        </div>
        <div class="form-group">
            <label for="nomor_surat_usulan">Nomor Surat Usulan</label>
            <input type="text" name="nomor_surat_usulan" id="nomor_surat_usulan" class="form-control" value="{{ $formasi->nomor_surat_usulan }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_surat_usulan">Tanggal Surat Usulan</label>
            <input type="text" name="tanggal_surat_usulan" id="tanggal_surat_usulan" class="form-control datepicker" value="{{ $formasi->tanggal_surat_usulan }}" required>
        </div>
        <div class="form-group">
            <label for="nama_dokumen">Nama Dokumen</label>
            <input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control" value="{{ $formasi->nama_dokumen }}" required>
        </div>
        <div class="form-group">
            <label for="nomor_dokumen">Nomor Dokumen</label>
            <input type="text" name="nomor_dokumen" id="nomor_dokumen" class="form-control" value="{{ $formasi->nomor_dokumen }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_dokumen">Tanggal Dokumen </label>
            <input type="text" name="tanggal_dokumen" id="tanggal_dokumen " class="form-control datepickerr" value="{{ $formasi->tanggal_dokumen }}" required>
        </div>
        <div class="form-group">
            <label for="file_dokumen">File Dokumen </label>
            <input type="file" name="file_dokumen" id="file_dokumen" class="form-control" placeholder="File Dokumen">
        </div>
        <div class="form-group">
            <label for="file_surat">Dokumen Surat Usulan</label>
            <input type="file" name="file_surat" id="file_surat" class="form-control" placeholder="Dokumen Surat Usulan">
        </div>
        <div class="form-group">
            <label for="file_pendukung">Dokumen Pendukung</label>
            <input type="file" name="file_pendukung" id="file_pendukung" class="form-control" placeholder="File Dokumen Pendukung">
        </div>
        <div class="form-group">
        <br>
            <h5>Jumlah Formasi pengawas Ahli Pertama</h5>
            <div class="row">
                <div class="col">
                    <input type="text" name="pratama_jenjang_mi" id="pratama_jenjang_mi" class="form-control" placeholder="Jenjang MI" aria-label="Jenjang MI" value="{{ $formasi->pratama_jenjang_mi }}">
                </div>
                <div class="col">
                    <input type="text" name="pratama_jenjang_mts" id="pratama_jenjang_mts" class="form-control" placeholder="Jenjang MTS" aria-label="Jenjang MTS" value="{{ $formasi->pratama_jenjang_mts }}">
                </div>
                <div class="col">
                    <input type="text" name="pratama_jenjang_ma" id="pratama_jenjang_ma" class="form-control" placeholder="Jenjang MA" aria-label="Jenjang MA" value="{{ $formasi->pratama_jenjang_ma }}">
                </div>
            </div>
        </div>
        <div class="form-group">
        <br>
            <h5>Jumlah Formasi pengawas Ahli Muda</h5>
            <div class="row">
                <div class="col">
                    <input type="text" name="muda_jenjang_mi" id="muda_jenjang_mi" class="form-control" placeholder="Jenjang MI" aria-label="Jenjang MI" value="{{ $formasi->muda_jenjang_mi }}">
                </div>
                <div class="col">
                    <input type="text" name="muda_jenjang_mts" id="muda_jenjang_mts" class="form-control" placeholder="Jenjang MTS" aria-label="Jenjang MTS" value="{{ $formasi->muda_jenjang_mts }}">
                </div>
                <div class="col">
                    <input type="text" name="muda_jenjang_ma" id="muda_jenjang_ma" class="form-control" placeholder="Jenjang MA" aria-label="Jenjang MA" value="{{ $formasi->muda_jenjang_ma }}">
                </div>
            </div>
        </div>
        <div class="form-group">
        <br>
            <h5>Jumlah Formasi pengawas Ahli Madya</h5>
            <div class="row">
                <div class="col">
                    <input type="text" name="madya_jenjang_mi" id="madya_jenjang_mi" class="form-control" placeholder="Jenjang MI" aria-label="Jenjang MI" value="{{ $formasi->madya_jenjang_mi }}">
                </div>
                <div class="col">
                    <input type="text" name="madya_jenjang_mts" id="madya_jenjang_mts" class="form-control" placeholder="Jenjang MTS" aria-label="Jenjang MTS" value="{{ $formasi->madya_jenjang_mts }}">
                </div>
                <div class="col">
                    <input type="text" name="madya_jenjang_ma" id="madya_jenjang_ma" class="form-control" placeholder="Jenjang MA" aria-label="Jenjang MA" value="{{ $formasi->madya_jenjang_ma }}">
                </div>
            </div>
        </div>
        <div class="form-group">
        <br>
            <h5>Jumlah Formasi pengawas Ahli Utama</h5>
            <div class="row">
                <div class="col">
                    <input type="text" name="utama_jenjang_mi" id="utama_jenjang_mi" class="form-control" placeholder="Jenjang MI" aria-label="Jenjang MI" value="{{ $formasi->utama_jenjang_mi }}">
                </div>
                <div class="col">
                    <input type="text" name="utama_jenjang_mts" id="utama_jenjang_mts" class="form-control" placeholder="Jenjang MTS" aria-label="Jenjang MTS" value="{{ $formasi->utama_jenjang_mts }}">
                </div>
                <div class="col">
                    <input type="text" name="utama_jenjang_ma" id="utama_jenjang_ma" class="form-control" placeholder="Jenjang MA" aria-label="Jenjang MA" value="{{ $formasi->utama_jenjang_ma }}">
                </div>
            </div>
        </div>
        {{-- <div class="form-group">
            <label for="catatan_prov">Catatan</label>
            <textarea class="form-control" name="catatan_prov" id="catatan_prov" rows="4" placeholder="Kosongkan Jika Sudah Sesuai"></textarea>
        </div> --}}
        {{-- <div class="form-group">
            <label for="catatan_prov">Verifikasi Dokumen</label>
            <select class="custom-select">
                <option selected>Status</option>
                <option value="2">Disetujui</option>
                <option value="1">Koreksi</option>
            </select>
        </div> --}}
        <input type="text" name="status" id="status" class="form-control invisible" value=3>
            <button type="submit" class="btn btn-primary">Verifikasi</button>
        </form>
        </div>
    </div>
</div>
@endsection