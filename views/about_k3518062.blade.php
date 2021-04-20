@extends('home')
@section('content')
@if(session ('successMsg'))
<div class="alert alert-success" role="alert">
{{session ('successMsg')}}
</div>
@endif


<div class="container">
<br>
<h1>Halaman Home</h1>
<br>
<h3>Data Diri</h3>
<table class="table">
 <thead>
 <tr>
 <th scope="col">#</th>
 <th scope="col">NIM</th>
 <th scope="col">Nama</th>
 <th scope="col">Alamat</th>
 <th scope="col">Bidang Peminatan</th>
 <th scope="col">Email</th>
 <th scope="col">Telp</th>
 <th scope="col">Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach($k3518062 as $b) 
 <tr>
 <th scope="row">{{$b->id}}</th>
 <td>{{$b->nim}}</td>
 <td>{{$b->nama}}</td>
 <td>{{$b->alamat}}</td>
 <td>{{$b->bidang_peminatan}}</td>
 <td>{{$b->email}}</td>
 <td>{{$b->telp}}</td>
 <td> <a class="btn btn-raised btn-primary btn-sm" href="{{route('edit_profil', $b->id) }}">Edit Profil</a></td>
 </tr>
 </tr>
 @endforeach
 </tbody>
</table>
</div>

@endsection