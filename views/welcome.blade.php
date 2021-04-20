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
<h3>Data Mahasiswa</h3>
<table class="table">
 <thead>
 <tr>
 <th scope="col">#</th>
 <th scope="col">NIM</th>
 <th scope="col">Nama Lengkap</th>
 <th scope="col">Angkatan</th>
 <th scope="col">Email</th>
 <th scope="col">Telp</th>
 <th scope="col">Action</th>
 </tr>
 </thead>
 <tbody>
 @foreach($siswa as $a) 
 <tr>
 <th scope="row">{{$a->id}}</th>
 <td>{{$a->nim}}</td>
 <td>{{$a->nama_lengkap}}</td>
 <td>{{$a->angkatan}}</td>
 <td>{{$a->email}}</td>
 <td>{{$a->telp}}</td>
 <td> <a class="btn btn-raised btn-primary btn-sm" href="{{route('edit', $a->id) }}">Edit</a> || <a class="btn btn-raised btn-danger btn-sm" href="{{route('delete',$a->id)}}">Delete</a></td>
 </tr>
 </tr>
 @endforeach
 </tbody>
</table>
</div>

@endsection