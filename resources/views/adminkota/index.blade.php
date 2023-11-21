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
        @foreach ($formasi as $formasi)
            <tr>
                <td>{{ $formasi->nomor_surat_usulan }}</td>
                <td>{{ $formasi->tanggal_surat_usulan }}</td>
                <td>{{ $formasi->nama_dokumen }}</td>
                <td>{{ $formasi->nomor_dokumen }}</td>
                <td>{{ $formasi->tanggal_dokumen }}</td>
                <td>
                    <a href="{{ route('adminkota.show', $formasi->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('adminkota.edit', $formasi->id) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('adminkota.destroy', $formasi) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
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