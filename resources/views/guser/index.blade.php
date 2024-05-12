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
        <div class="table-responsive">
    <table class="table" id="tanuncios">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Name</th>
            <th class="text-center w-25">Email</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $item)
        <form action="{{  route('user.edit', $item)}}" method="PATCH">
        @method('patch')
        @csrf
        <tr>
          <td>
              <div class='form-control-static' type="text" maxlength="100">{{$item->id}}</div>
          </td>
          <td class='text-center'>
              <div class='form-control-static' type="text" maxlength="25">{{$item->name}}</div>
          </td>
          <td class='text-center'>
              <div class='form-control-static' type="text">{{$item->email}}</div>
          </td>

          <td class='td-actions text-right'>
              <div class='button-wrapper'>
                  <button class='btn btn-primary btn-sm' type="submit">UPDATE</button>
              </div>
              </form>
              <div class='button-wrapper'>
                  <form action="{{  route('user.destroy', $item)  }}" method="POST">
                      @csrf
                      @method('delete')
                      <button class='btn btn-danger btn-sm' type="submit">DELETE</button>
                  </form>
              </div>
          </td>
        </tr>
        @endforeach
        </tbody>
    </table>
                </div>
    @include('includes.footer')
  </body>
</html>
