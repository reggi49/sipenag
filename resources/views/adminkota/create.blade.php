@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Dokumen Usulan Formasi Pengawas</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('adminkota.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nomor_surat_usulan">Nomor Surat Usulan</label>
        <input type="text" name="nomor_surat_usulan" id="nomor_surat_usulan" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_surat_usulan">Tanggal Surat Usulan</label>
        <input type="text" name="tanggal_surat_usulan" id="tanggal_surat_usulan" class="form-control datepicker" required>
    </div>
    <div class="form-group">
        <label for="nama_dokumen">Nama Dokumen</label>
        <input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nomor_dokumen">Nomor Dokumen</label>
        <input type="text" name="nomor_dokumen" id="nomor_dokumen" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_dokumen">Tanggal Dokumen </label>
        <input type="text" name="tanggal_dokumen" id="tanggal_dokumen " class="form-control datepickerr" required>
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
    <br>
        <h5>Jumlah Formasi pengawas Ahli Pertama</h5>
        <div class="row">
            <div class="col">
                <input type="text" name="pratama_jenjang_mi" id="pratama_jenjang_mi" class="form-control" placeholder="Jenjang MI" aria-label="Jenjang MI">
            </div>
            <div class="col">
                <input type="text" name="pratama_jenjang_mts" id="pratama_jenjang_mts" class="form-control" placeholder="Jenjang MTS" aria-label="Jenjang MTS">
            </div>
            <div class="col">
                <input type="text" name="pratama_jenjang_ma" id="pratama_jenjang_ma" class="form-control" placeholder="Jenjang MA" aria-label="Jenjang MA">
            </div>
        </div>
    </div>
    <div class="form-group">
    <br>
        <h5>Jumlah Formasi pengawas Ahli Muda</h5>
        <div class="row">
            <div class="col">
                <input type="text" name="muda_jenjang_mi" id="muda_jenjang_mi" class="form-control" placeholder="Jenjang MI" aria-label="Jenjang MI">
            </div>
            <div class="col">
                <input type="text" name="muda_jenjang_mts" id="muda_jenjang_mts" class="form-control" placeholder="Jenjang MTS" aria-label="Jenjang MTS">
            </div>
            <div class="col">
                <input type="text" name="muda_jenjang_ma" id="muda_jenjang_ma" class="form-control" placeholder="Jenjang MA" aria-label="Jenjang MA">
            </div>
        </div>
    </div>
    <div class="form-group">
    <br>
        <h5>Jumlah Formasi pengawas Ahli Madya</h5>
        <div class="row">
            <div class="col">
                <input type="text" name="madya_jenjang_mi" id="madya_jenjang_mi" class="form-control" placeholder="Jenjang MI" aria-label="Jenjang MI">
            </div>
            <div class="col">
                <input type="text" name="madya_jenjang_mts" id="madya_jenjang_mts" class="form-control" placeholder="Jenjang MTS" aria-label="Jenjang MTS">
            </div>
            <div class="col">
                <input type="text" name="madya_jenjang_ma" id="madya_jenjang_ma" class="form-control" placeholder="Jenjang MA" aria-label="Jenjang MA">
            </div>
        </div>
    </div>
    <div class="form-group">
    <br>
        <h5>Jumlah Formasi pengawas Ahli Utama</h5>
        <div class="row">
            <div class="col">
                <input type="text" name="utama_jenjang_mi" id="utama_jenjang_mi" class="form-control" placeholder="Jenjang MI" aria-label="Jenjang MI">
            </div>
            <div class="col">
                <input type="text" name="utama_jenjang_mts" id="utama_jenjang_mts" class="form-control" placeholder="Jenjang MTS" aria-label="Jenjang MTS">
            </div>
            <div class="col">
                <input type="text" name="utama_jenjang_ma" id="utama_jenjang_ma" class="form-control" placeholder="Jenjang MA" aria-label="Jenjang MA">
            </div>
        </div>
    </div>
    <input type="text" name="status" id="status" class="form-control invisible" value=1>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
@endsection