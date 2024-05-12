<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
  <title>Home</title>
</head>

<body>
    @include('includes.nav')
    <h1>Tu perfil</h1>
    <table>
        <th>Nombre</th>
        <th>Mail</th>
        <tr>
            <td><div type="text">{{$user->name}}</div></td>
            <td><div type="text">{{$user->email}}</div></td>
        </tr>
    </table>
    <h2>Tus pedidos</h2>
    <table id="orders">
        <th>Pedido</th>
        <th>Total</th>
        <th>Dirección</th>
        <th>Pago</th>

    @foreach ($orders as $item )
    <tr>
        <td>{{$item->order}}</td>
        <td>{{$item->total}}€</td>
        <td>{{$item->address}}</td>
        <td>{{$item->payment}}</td>
    </tr>
    @endforeach
</table>
  @include('includes.footer')
</body>

</html>
