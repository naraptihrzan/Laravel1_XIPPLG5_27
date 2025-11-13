@extends('layouts.admin')
@section('title', 'Tambah Kelas')

@section('content')
<div class="container">
  <h1>Tambah Data Kelas</h1>
  <form action="{{ route('admin.classrooms.store') }}" method="POST">
    @csrf
     <div class="mb-3">
        <label for="student_id">Pilih Siswa</label>
        <select name="student_id" class="form-select" required>
            <option value="">-- Pilih Siswa --</option>
            @foreach ($students as $student)
                <option value="{{ $student->id }}">{{ $student->nama_lengkap }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
      <label>Nama Kelas</label>
      <input type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Tingkat</label>
      <select name="tingkat" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="10">Kelas 10</option>
        <option value="11">Kelas 11</option>
         <option value="12">Kelas 12</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Jurusan</label>
      <select name="jurusan" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="PPLG">PPLG</option>
        <option value="TJKT">TJKT</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
@endsection
