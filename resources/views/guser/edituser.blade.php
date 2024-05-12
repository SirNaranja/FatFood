<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/gmenu.css') }}"/>
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
    <title>Gestionar Usuarios</title>
  </head>
  @include('includes.nav')
  <body>
    <form action="{{ route('user.update',$users) }}" method="POST">
        @csrf
        <div class="form-row">
        <div class="form-group">
        <input required hidden type="text" name="id" id="id" value="{{$users->id}}">
        </div>
        <div class="form-group">
        <label for="name">Name</label>
        <input required class="form-control" type="text" name="name" id="name" value="{{$users->name}}">
        </div>
        <div class="form-group">
        <label for="name">Email</label>
        <input required class="form-control" type="text" name="email" id="email" value="{{$users->email}}">
        </div>
        <div class="form-group">
        <label for="name">Password</label>
        <input  hidden name="passwordold" id="passwordold" value="{{$users->password}}" >
        <input  class="form-control" type="password" name="password" id="password" value="" >
        </div>
        <button type="submit" class="btn btn-info btn-just-icon btn-sm"><i>UPDATE</i></button>
    </form>
                </div>

    @include('includes.footer')
  </body>
</html>
