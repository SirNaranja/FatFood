<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/carrete.css') }}"/>
    <title>Tu carrito</title>
</head>
@include('includes.nav')

<body>
    @if (count($cartItems) == 0)
        <h1>NO tienes nada en tu carrito</h1>


@else
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ $item['price'] }}</td>
                        <td>
                            <a class="deletebt" href="{{ route('cart.delete', $item['menu_id']) }}">Borrar</a>
                            <a class="bt2" href="{{ route('cart.add', $item['menu_id']) }}">+</a>
                            <a class="bt2" href="{{ route('cart.remove', $item['menu_id']) }}">-</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    @if (count($cartItems) != 0)
        <form action="{{ route('cart.store') }}" method="POST" id="myForm">
            @csrf
            <div class="cajagrande">
                <input required type="text" name="address" placeholder="Escribe tu dirección de envío"><br>
                <select name="payment">
                    <option value="tarjeta">VISA</option>
                    <option value="paypal">PAYPAL</option>
                </select><br>
                <div style="display: none" id="loader">
                    <img src="{{ asset('images/135.gif') }}" alt="Cargando..." />
                </div>
                <!-- Resto de los campos del formulario -->
                <input id="btañadir" type="submit" value="PEDIR" />
        </form>
        </div>
        <script>
            function mostrarCarga() {
                var loader = document.getElementById("loader");
                var añadir = document.getElementById("btañadir")
                loader.style.display = "block";
                btañadir.style.display = "none";
            }

            function ocultarCarga() {
                var loader = document.getElementById("loader");
                loader.style.display = "none";
            }

            document.getElementById("myForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Evita el envío del formulario

                mostrarCarga();

                // Simula una operación de carga (por ejemplo, espera 3 segundos)
                setTimeout(function() {
                    // Completa la operación y oculta el GIF de carga después de 3 segundos
                    ocultarCarga();

                    // Aquí puedes agregar lógica adicional para enviar el formulario o realizar otras acciones necesarias
                    document.getElementById("myForm").submit();
                }, 3000);
            });
        </script>

        <h1>{{ $total }}€</h1>
    @endif
    @include('includes.footer')
</body>

</html>
