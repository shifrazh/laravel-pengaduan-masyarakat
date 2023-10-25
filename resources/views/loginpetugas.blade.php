<!DOCTYPE HTML>
<html>
    <head>
        <title> Login</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
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
  
  .login{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 50px 55px;
    width: 300px;
  
    background-color:#BEFFF7 ;
    box-shadow: 0 0 10px rgba(255,255,255,.3);
  }
  .login h1{
    text-align: center;
    color: #6499E9;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #29d4ff;
  }
  .login label{
    text-align: left;
    color: #6499E9;
  }
  .login form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #A6F6FF;
    color: #fff;
    font-size: 20px;
  }
  .login form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#A6F6FF;
    font-size: 18px;
    color: #6499E9;
  }


    </style>
   
    <body>
   
        <div class="login">
          <h1>Login Petugas</h1>
          
          <div class="alert alert-danger">{{session("error")}}
            
          </div> 
            <form action="login" method="POST">
              @method("POST")
              @CSRF
                <label>Username</label><br>
                <input type="username" class="form-control" name="username"><br>
                <label>Password</label><br>
                <input type="password" name="password" required><br>
                <a link href="{{('table_masyarakat ')}}"><button type="button"> Login</button></a>
                <a link href={{('register')}}><button type="button"> Belum Punya Akun?</button></a>
            </form>
        </div>     
    </body>
</html>