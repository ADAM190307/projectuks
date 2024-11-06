@extends('admin-lte.app')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Daftar Menu</h4>
        <a href="{{ route('menus.create') }}" class="btn btn-success">Tambah Menu</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Menu</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->id }}</td>
                        <td>{{ $menu->name_menu }}</td>
                        <td>{{ $menu->type }}</td>
                        <td>{{ $menu->description }}</td>
                        <td>
                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
