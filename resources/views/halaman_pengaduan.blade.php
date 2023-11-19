
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("bs/css/bootstrap.min.css") }}>
    <title>document</title>
</head>
<body>
@include('layout.navbar')
<form action="{{url('isi-pengaduan')}}" @method="POST" enctype="multipart/form-data">
  @CSRF
  @method ('POST')
    <div class="container">
    <label for="formFile" class="form-label">Bukti Foto</label>
        <input class="form-control" type="file" id="formFile" name="foto">
      </div>
      <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"></textarea>
    </div>
    <div class="d-grid gap-2 col-4 mx-auto">
      <button class="btn btn-primary" type="submit">Send</button>
      <form action="home" method="POST">
  </div>
</form>
</body>
</html>

