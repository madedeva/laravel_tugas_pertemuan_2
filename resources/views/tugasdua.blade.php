
@extends('layouts.main')

@section('content')

    <h3>Data Mahasiswa</h3>

  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">NIM</th>
      <th scope="col">Email</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Fakultas</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $mahasiswa)
    <tr>
      <td>{{ $mahasiswa->name }}</td>
      <td>{{ $mahasiswa->student_id }}</td>
      <td>{{ $mahasiswa->email }}</td>
      <td>{{ $mahasiswa->prodi->nama_prodi }}</td>
      <td>{{ $mahasiswa->fakultas->nama_fakultas }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection