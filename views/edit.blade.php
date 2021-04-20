@extends('home')
@section('content')
<div class="container">
  <H1>Create New Siswa</H1><br>
<form class="text-center border border-light p-5" action="{{ route('update', $siswa) }}" method="POST">
{{ csrf_field() }}

<!-- NIM input -->
 <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" value="{{$siswa->nim}}" />
<br>
 <!-- Nama input -->
 <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama 
Lengkap" value="{{$siswa->nama_lengkap}}"/>
<br>
 <!-- Angkatan input -->
 <input type="number" id="angkatan" name="angkatan" class="form-control"
placeholder="Angkatan" value="{{$siswa->angkatan}}"/>
<br>
 <!-- Email input -->
 <input type="email" id="email" name="email"  class="form-control"
placeholder="Email" value="{{$siswa->email}}"/>
<br>
 <!-- Number input -->
 <input type="number" id="telp" name="telp" class="form-control"
placeholder="Telp" value="{{$siswa->telp}}" />
<br>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update Siswa</button>
</form>
</div>
@endsection