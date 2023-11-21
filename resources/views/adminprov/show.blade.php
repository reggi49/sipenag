@extends('../layouts.app')
@section('content')
<h1>{{ $calonpengawas->title }}a</h1>

<p>{{ $calonpengawas->content }}</p>

<a href="{{ route('calonpengawas.edit', $calonpengawas) }}" class="btn btn-secondary">Edit</a>
<form action="{{ route('calonpengawas.destroy', $calonpengawas) }}" method="POST" style="display: inline-block">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
</form>

<a href="{{ route('calonpengawas.index') }}" class="btn btn-primary">Back to all posts</a>
@endsection