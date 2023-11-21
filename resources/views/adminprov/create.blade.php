@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Submit Dokumen</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('calonpengawas.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" name="nip" id="nip" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="jenis_lahir">Jenis Kelamin</label>
        <input type="text" name="jenis_lahir" id="jenis_lahir" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" id="status" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="pak_terakhir">PAK Terakhir</label>
        <input type="text" name="pak_terakhir" id="pak_terakhir" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tmt_jabatan">TMT Jabatan</label>
        <input type="text" name="tmt_jabatan" id="tmt_jabatan" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="masa_kerja">Masa Kerja</label>
        <input type="text" name="masa_kerja" id="masa_kerja" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="pangkat_jabatan">Pangkat Jabatan</label>
        <input type="text" name="pangkat_jabatan" id="pangkat_jabatan" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="satuan_kerja">Satuan Kerja</label>
        <input type="text" name="satuan_kerja" id="satuan_kerja" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="ket_unit_kerja">Ket Unit Kerja</label>
        <input type="text" name="ket_unit_kerja" id="ket_unit_kerja" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="golongan_jabatan">Golongan Jabatan</label>
        <input type="text" name="golongan_jabatan" id="golongan_jabatan" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="pendidikan">Pendidikan</label>
        <input type="text" name="pendidikan" id="pendidikan" class="form-control" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
@endsection