@extends('layouts.app')

  <div class="container">
  <table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama_petugas</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">telp</th>
      <th scope="col">level</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($petugas as $petugas)
    <tr>
      <td>{{$petugas->id}}</td>
      <td>{{$petugas->nama_petugas}}</td>
      <td>{{$petugas->username}}</td>
      <td>{{$petugas->password}}</td>
      <td>{{$petugas->telp}}</td>
      <td>{{$petugas->level}}</td>
      
   
    </tr> @endforeach
  </tbody>
</table>

  </div>
</nav>
</body>
</html>
@section('content')