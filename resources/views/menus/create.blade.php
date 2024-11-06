@extends('admin-lte.app')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Tambah Menu</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('menus.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name_menu">Nama Menu</label>
                <input type="text" class="form-control" name="name_menu" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" class="form-control" id="type" onchange="toggleDescription()">
                    <option value="Single">Single</option>
                    <option value="Multiple">Multiple</option>
                </select>
            </div>
            <div class="form-group" id="descriptionField" style="display: none;">
                <label for="description">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</div>

<script>
    function toggleDescription() {
        var type = document.getElementById("type").value;
        var descriptionField = document.getElementById("descriptionField");
        descriptionField.style.display = (type === "Single") ? "block" : "none";
    }
</script>
@endsection
