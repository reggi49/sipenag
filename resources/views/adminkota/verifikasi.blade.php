@extends('../layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

<h2>Halo, {{Auth::user()->name}} sebagai Admin Kota {{Auth::user()->kota}}</h2>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<br>
<table class="table">
    <thead>
        <tr>
            <th>Nomor Surat Usulan</th>
            <th>Tanggal Surat Usulan</th>
            <th>Nama Dokument</th>
            <th>Nomor Dokument</th>
            <th>Tanggal Dokument</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($calonpengawas as $calonpengawas)
            <tr>
                <td>{{ $calonpengawas->nama }}</td>
                <td>{{ $calonpengawas->pangkat_jabatan }}</td>
                <td>{{ $calonpengawas->golongan_jabatan }}</td>
                <td>{{ $calonpengawas->pak_terakhir }}</td>
                <td>{{ $calonpengawas->status_pegawai }}</td>
                <td>
                    {{-- <a href="{{ route('adminkota.show', $calonpengawas->id) }}" class="btn btn-primary">View</a> --}}
                    <a href="{{ route('adminkota.editverif', $calonpengawas->id) }}" class="btn btn-primary">Verifikasi</a>
                    {{-- <form action="{{ route('adminkota.destroy', $calonpengawas) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>

    </div>
</div>
{{-- {{ $adminkota->links() }} --}}
@endsection