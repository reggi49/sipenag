@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Verifikasi Dokumen Calon Pengawas</h1>
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

    <form action="{{ route('adminkota.updateverif', $calonpengawas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="nip">NIP</label>
                <input type="text" name="nip" id="nip" class="form-control" value="{{$calonpengawas->nip}}" required>
            </div>
            <div class="col-sm-6">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{$calonpengawas->nama}}" required>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{$calonpengawas->tempat_lahir}}" required>
            </div>
            <div class="col-sm-4">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{$calonpengawas->tanggal_lahir}}" required>
            </div>
            <div class="col-sm-4">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="{{$calonpengawas->jenis_kelamin}}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="status_pegawai">Status</label>
                <input type="text" name="status_pegawai" id="status_pegawai" class="form-control" value="{{$calonpengawas->status_pegawai}}" required>
            </div>
            <div class="col-sm-6">
                <label for="pak_terakhir">PAK Terakhir</label>
                <input type="text" name="pak_terakhir" id="pak_terakhir" class="form-control" value="{{$calonpengawas->pak_terakhir}}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label for="tmt_jabatan">TMT Jabatan</label>
                <input type="text" name="tmt_jabatan" id="tmt_jabatan" class="form-control" value="{{$calonpengawas->tmt_jabatan}}" required>
            </div>
                <div class="col-sm-6">
                <label for="masa_kerja">Masa Kerja</label>
                <input type="text" name="masa_kerja" id="masa_kerja" class="form-control" value="{{$calonpengawas->masa_kerja}}" required>
            </div>
            
        </div>
        <div class="form-group row">
            <div class="col-sm-8">
                <label for="pangkat_jabatan">Pangkat Jabatan</label>
                <input type="text" name="pangkat_jabatan" id="pangkat_jabatan" class="form-control" value="{{$calonpengawas->pangkat_jabatan}}" required>
        </div>
            <div class="col-sm-4">
                <label for="golongan_jabatan">Golongan Jabatan</label>
                <input type="text" name="golongan_jabatan" id="golongan_jabatan" class="form-control" value="{{$calonpengawas->golongan_jabatan}}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="satuan_kerja">Satuan Kerja</label>
                <input type="text" name="satuan_kerja" id="satuan_kerja" class="form-control" value="{{$calonpengawas->satuan_kerja}}" required>
            </div>
            <div class="col-sm-4">
                <label for="ket_unit_kerja">Ket Unit Kerja</label>
                <input type="text" name="ket_unit_kerja" id="ket_unit_kerja" class="form-control" value="{{$calonpengawas->ket_unit_kerja}}" required>
            </div>
            <div class="col-sm-4">
                <label for="pendidikan">Pendidikan</label>
                <input type="text" name="pendidikan" id="pendidikan" class="form-control" value="{{$calonpengawas->pendidikan}}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="skp">File SKP</label>
            <input type="file" name="skp" id="skp" class="form-control">
        </div>
        <div class="form-group">
            <label for="sertifikat_ukom">Sertifikat Ukom</label>
            <input type="file" name="sertifikat_ukom" id="sertifikat_ukom" class="form-control" >
        </div>
        <input type="text" name="status" id="status" class="form-control invisible" value=2>
            <button type="submit" class="btn btn-primary">Verifikasi Dokumen</button>
        </form>
        </div>
    </div>
</div>
@endsection