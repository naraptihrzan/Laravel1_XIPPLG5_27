@extends('layouts.admin')

@section('title', 'Data Kelas')

@section('content')
<div class="container">
  <h1 class="mb-4">Data Kelas</h1>
  <a href="{{ route('admin.classrooms.create') }}" class="btn btn-primary mb-3">+ Tambah Kelas</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama Lengkap</th>
        <th>Nama Kelas</th>
        <th>Tingkat</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($classrooms as $classroom)
      <tr>
         <td>{{ $classroom->student->nama_lengkap ?? '-' }}</td>
        <td>{{ $classroom->nama_kelas }}</td>
        <td>{{ $classroom->tingkat }}</td>
        <td>{{ $classroom->jurusan }}</td>
        <td>
            <a href="{{ route('admin.classrooms.edit', $classroom->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="{{ route('admin.classrooms.show', $classroom->id) }}" class="btn btn-info btn-sm">Lihat</a>
            <form action="{{ route('admin.classrooms.destroy', $classroom->id) }}" method="POST" class="d-inline" 
            onsubmit="return confirm('Apakah kamu yakin ingin menghapus data siswa ini?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
