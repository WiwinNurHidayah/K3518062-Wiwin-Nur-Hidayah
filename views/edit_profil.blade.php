@extends('home')
@section('content')
<div class="container">
  <H1>Edit Profil</H1><br>
<form class="text-center border border-light p-5" action="{{ route('updateprofil', $k3518062) }}" method="POST">
{{ csrf_field() }}

<!-- NIM input -->
 <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" value="{{$k3518062->nim}}" />
<br>
 <!-- Nama input -->
 <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama 
Lengkap" value="{{$k3518062->nama}}"/>
<br>
 <!-- Angkatan input -->
 <input type="text" id="alamat" name="alamat" class="form-control"
placeholder="Alamat" value="{{$k3518062->alamat}}"/>
<br>
 <!-- Email input -->
 <input type="text" id="bidang_peminatan" name="bidang_peminatan"  class="form-control"
placeholder="Bidanf Peminatan" value="{{$k3518062->bidang_peminatan}}"/>
<br>
 <!-- Number input -->
 <input type="email" id="email" name="email" class="form-control"
placeholder="Email" value="{{$k3518062->email}}" />
<br>
<!-- Number input -->
<input type="number" id="telp" name="telp" class="form-control"
placeholder="Telp" value="{{$k3518062->telp}}" />
<br>
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update Profil</button>
</form>
</div>
@endsection