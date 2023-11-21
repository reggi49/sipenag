<!-- resources/views/posts/edit.blade.php -->
@extends('../layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
<h1>Cek Hasil Ukom</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('calonpengawas.cekhasil') }}" method="GET">
    @csrf
    <div class="form-group">
        <label for="title">NIP </label>
        <input type="text" name="nip" id="nip" class="form-control" value="{{ old('nip') }}" required>
    </div>

    <div class="form-group">
        <label for="content">No Ujian</label>
        <input type="text" name="no_ujian" id="no_ujian" class="form-control" value="{{ old('no_ujian') }}" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>

@if ($hasil !== null && $hasil->count() > 0)

<table class="table">
      <thead>
		<tr>
			<th>Nama</th>
			<th>No Ujian</th>
			<th>Nip</th>
			<th>Nilai</th>
			<th>Status</th>
			<th>Tanggal Ujian</th>
		</tr>
    </thead>
      <tbody>
		@foreach($hasil as $hasil)
		<tr>
			<td>{{ $hasil->nama }}</td>
			<td>{{ $hasil->no_ujian }}</td>
			<td>{{ $hasil->nip }}</td>
			<td>{{ $hasil->nilai }}</td>
			<td>{{ $hasil->status }}</td>
			<td>{{ $hasil->tanggal }}</td>
		</tr>
		@endforeach
 </tbody>
</table>
@elseif(count($hasil) === 0 && $nip !='' && $no_ujian !='') 
Sayang Sekali, Anda Belum Lulus.

@endif

{{-- @if ($hasil[0]->status == "lulus")
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

    </div>

    </div>
</div>
{{-- {{ $adminprov->links() }} --}}
@endsection