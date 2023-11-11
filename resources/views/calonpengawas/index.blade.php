@extends('../layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

<h1>All Posts</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($calonpengawas as $calonpengawas)
            <tr>
                <td>{{ $calonpengawas->title }}</td>
                <td>{{ $calonpengawas->content }}</td>
                <td>
                    <a href="{{ route('calonpengawas.show', $calonpengawas) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('calonpengawas.edit', $calonpengawas) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('calonpengawas.destroy', $calonpengawas) }}" method="POST" style="display: inline-block">
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
{{ $calonpengawas->links() }}
@endsection