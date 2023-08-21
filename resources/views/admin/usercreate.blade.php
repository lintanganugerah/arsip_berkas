@extends('layout.admin.admlayout')
@section('content')
<div class="row">
    <div class="col">
        <div class="text-left mt-3 mb-5">
            <h1 class="fw-medium text-dark">Tambah Pengguna</h1>
            <h4 class="fw-normal">Daftarkan pengguna baru disini</h4>
        </div>

        <form action="{{ route('user.register') }}" method="POST" class="mx-2 mb-5">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nama</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            @if ($roles == "Admin Cabang")
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Roles Pengguna</label>
                <input type="text" class="form-control" value="Admin" disabled>
                <div id="namaNasabah" class="form-text">Hanya dapat menambahkan admin</div>
            </div>
            @else
            <div class="mb-3">
                <label for="role" class="form-label fw-bold">Role</label>
                <select name="role" id="role" class="form-select">
                    <option value="Admin">Admin Unit</option>
                    <option value="User">User</option>
                </select>
            </div>
            @endif
            @if ($roles == "Admin Cabang")
            <div class="mb-3">
                <label for="jabatan" class="form-label fw-bold">Unit</label>
                <select id="role" class="form-select">
                    <option value="Cicadas Barat">Cicadas Barat</option>
                    <option value="Cihapit">Cihapit</option>
                    <option value="Citamiang">Citamiang</option>
                    <option value="Kebonwaru">Kebonwaru</option>
                    <option value="Sadang Serang">Sadang Serang</option>
                    <option value="Cikutra Barat">Cikutra Barat</option>
                </select>
            </div>
            @endif
            <div class="mb-3">
                <label for="jabatan" class="form-label fw-bold">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</div>

@endsection