@extends('admin-lte.app')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Tambah Data Multiple</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('multiple.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="menus_id">Menu</label>
                <select name="menus_id" class="form-control" required>
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name_menu }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>
@endsection
