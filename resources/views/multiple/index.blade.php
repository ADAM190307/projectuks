@extends('admin-lte.app')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Data Multiple</h4>
        <a href="{{ route('multiple.create') }}" class="btn btn-success">Tambah Data</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Menu</th>
                    <th>Description</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($multipleData as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->menu->name_menu }}</td>
                        <td>{{ $data->description }}</td>
                        <td>
                            <a href="{{ route('multiple.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('multiple.destroy', $data->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
