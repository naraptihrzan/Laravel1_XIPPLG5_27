@extends('layouts.admin')
@section('title', 'Edit Data Kelas')

@section('content')
<div class="container-fluid">
  <h2>Edit Data Kelas</h2>

  <form action="{{ route('admin.classrooms.update', $classroom->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
      <label>Nama Lengkap (Siswa)</label>
      <select name="student_id" class="form-control" required>
        <option value="">-- Pilih Siswa --</option>
        @foreach($students as $student)
          <option value="{{ $student->id }}" 
            {{ $classroom->student_id == $student->id ? 'selected' : '' }}>
            {{ $student->nama_lengkap }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="form-group mb-3">
      <label>Nama Kelas</label>
      <input type="text" name="nama_kelas" value="{{ $classroom->nama_kelas }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
      <label>Tingkat</label>
      <input type="text" name="tingkat" value="{{ $classroom->tingkat }}" class="form-control" required>
    </div>

    <div class="form-group mb-3">
      <label>Jurusan</label>
      <input type="text" name="jurusan" value="{{ $classroom->jurusan }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('admin.classrooms.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
