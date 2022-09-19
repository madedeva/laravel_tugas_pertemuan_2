@extends('layouts.main')

@section('content')

    <h3>Data Mahasiswa</h3>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Fakultas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark Wiens</td>
      <td>Pendidikan Teknik Informatika</td>
      <td>Teknik dan Kejuruan</td>
    </tr>
    <tr>
      <td>Bill Gates</td>
      <td>Sistem Informasi</td>
      <td>Teknik dan Kejuruan</td>
    </tr>
    <tr>
      <td>Larry Page</td>
      <td>Pendidikan Ekonomi</td>
      <td>Ekonomi</td>
    </tr>
    <tr>
      <td>Steve Jobs</td>
      <td>Desain Komunikasi Visual</td>
      <td>Bahasa dan Seni</td>
    <tr>
      <td>Elon Musk</td>
      <td>Pendidikan Guru Sekolah Dasar</td>
      <td>Ilmu Pendidikan</td>
    </tr>
    </tr>
  </tbody>
</table>

@endsection