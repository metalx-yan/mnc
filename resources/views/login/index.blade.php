<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Sesion</title>
</head>
<body>

    <h2>Form Login</h2>
    <form action="{{ route('put.session') }}" method="POST">
        {{ csrf_field() }}
           <div class="control-group">
           <input type="text" name="username" class="login-field" value="" placeholder="username" id="login-name">
           @if($errors->has('username'))
           <label style="color:red" class="login-field-icon fui-user" for="login-name">username Jangan kosong</label>
           @endif
           </div>

           <div class="control-group">
           <input type="password" name="password" class="login-field" value="" placeholder="password" id="login-pass">
           @if($errors->has('username'))
           <label style="color:red" class="login-field-icon fui-user" for="login-name">password Jangan kosong</label>
           @endif	</div>

           <button type="submit" class="btn btn-primary btn-large btn-block">login</button>
            @if(Session::has('failed'))
                 <p style="color:red">Username Atau Password Anda Salah</p>
             @endif
           </div>
       </form>
</table>
</body>
</html>
