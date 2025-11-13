@extends('layouts.admin')

@section('title', 'Detail Kelas')

@section('content')
<div class="container-fluid">
  <h1 class="mb-3">Detail Kelas</h1>

  <div class="card">
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <td>{{ $classroom->id }}</td>
        </tr>
        <tr>
          <th>Nama Lengkap (Siswa)</th>
          <td>{{ $classroom->student->nama_lengkap ?? '-' }}</td>
        </tr>
        <tr>
          <th>Nama Kelas</th>
          <td>{{ $classroom->nama_kelas }}</td>
        </tr>
        <tr>
          <th>Tingkat</th>
          <td>{{ $classroom->tingkat }}</td>
        </tr>
        <tr>
          <th>Jurusan</th>
          <td>{{ $classroom->jurusan }}</td>
        </tr>
      </table>

      <a href="{{ route('admin.classrooms.index') }}" class="btn btn-secondary">Kembali</a>
      <a href="{{ route('admin.classrooms.edit', $classroom->id) }}" class="btn btn-warning">Edit</a>
    </div>
  </div>
</div>
@endsection
