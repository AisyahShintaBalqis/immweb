@extends('backend.master')
@section('content')
<div class="container">
    <h2 class="mb-4">Form Contact</h2>
    <form action="{{ route('contact.store') }}" method="post">
        <div class="form-group">
            <label for="name">Nama Lengkap:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="subject">Jabatan:</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="form-group">
            <label for="email">Alamat Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kontak</button>
    </form>
</div>


@endsection