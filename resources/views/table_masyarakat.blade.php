@extends('layouts.app')
<div class="">
    <a class="register" href="{{ ('register') }} "></a>
    <h1>register</h1>
  <div class="container">
  <table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nik</th>
      <th scope="col">Nama</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">telp</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($masyarakat as $masyarakat)
    <tr>
      <td>{{$masyarakat->id}}</td>
      <td>{{$masyarakat->nik}}</td>
      <td>{{$masyarakat->nama}}</td>
      <td>{{$masyarakat->username}}</td>
      <td>{{$masyarakat->password}}</td>
      <td>{{$masyarakat->telp}}</td>
      
   
    </tr> @endforeach
  </tbody>
</table>

  </div>
</nav>
</body>
</html>
@section('content')