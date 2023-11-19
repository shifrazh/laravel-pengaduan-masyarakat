<!DOCTYPE HTML>
<html>
    <head>
      
        <title> Register</title>
        <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    </head>
    <style>
      *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
  }
  body{
    height: 100vh;
    background-image: url(gambar/.avif);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  
  .daftar{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 50px 55px;
    width: 300px;
  
    background-color:#BEFFF7 ;
    box-shadow: 0 0 10px rgba(255,255,255,.3);
  }
  .daftar h1{
    text-align: center;
    color: #6499E9;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #29d4ff;
  }
  .daftar label{
    text-align: left;
    color: #6499E9;
  }
  .daftar form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #A6F6FF;
    color: #fff;
    font-size: 20px;
  }
  .daftar form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#A6F6FF;
    font-size: 18px;
    color: #6499E9;
  }


    </style>
   
    <body>
        <div class="daftar">
          <h1>Register</h1>
            <form action="register" method="POST">
              @method('POST')
                <label>Nik</label><br>
                <input type="nik" class="form-control" name="Nik"><br>
                <label>Nama</label><br>
                <input type="nama" class="form-control" name="Nama"><br>
                <label>Username</label><br>
                <input type="username" name="password" required><br>
                <label>Password</label><br>
                <input type="password" name="password" required><br>
                <label>Telp</label><br>
                <input type="telp" name="telp" required><br>
                <a link href="{{('table_masyarakat')}}"><button type="button"> Login</button></a>
                <a link href="{{('register')}}"><button type="button"> Belum Punya Akun?</button></a>
            </form>
        </div>     
    </body>
</html>