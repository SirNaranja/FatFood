<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/gmenu.css') }}"/>
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
    <title>Gestionar Pedidos</title>
  </head>
  @include('includes.nav')
  <body>
    <table class="table" id="tanuncios">
    <thead>
        <tr>
            <th class="text-center">Pedido</th>
            <th class="text-center">ID Usuario</th>
            <th class="text-center w-25">Direccion</th>
            <th class="text-center w-25">Precio Total</th>
            <th class="text-center">Metodo de Pago</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart as $item)
        <tr>
          <td>
              <div class='form-control-static' type="text" maxlength="100">{{$item->order}}</div>
          </td>
          <td>
              <div class='form-control-static' type="text" maxlength="100">{{$item->user_id}}</div>
          </td>
          <td class='text-center'>
              <div class='form-control-static' type="text" maxlength="25">{{$item->address}}</div>
          </td>
          <td class='text-center'>
              <div class='form-control-static' type="text">{{$item->total}}</div>
          </td>
          <td class='text-center'>
              <div class='form-control-static' type="text">{{$item->payment}}</div>
          </td>
          <td class='td-actions text-right'>
              <div class='button-wrapper'>
                  <form action="{{  route('cart.cancelar', $item)  }}" method="POST">
                      @csrf
                      @method('delete')
                      <button class='btn btn-danger btn-sm' type="submit">CANCELAR</button>
                  </form>
                  </div>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('includes.footer')
  </body>
</html>
