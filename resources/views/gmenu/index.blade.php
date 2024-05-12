<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/gmenu.css') }}"/>
    <link rel="icon" type="image/png" href={{ asset('images/logo1(1).png') }}>
    <title>Gestionar Menus</title>
  </head>
  @include('includes.nav')
  <body>
  <form action="{{ route('menu.store') }}" method="POST">
        @csrf
        <div class="form-row">
          <div class="form-group">
            <label for="url">Image</label>
            <input required class="form-control" type="text" name="url" id="url">
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input required class="form-control" type="text" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="ingredientes">Ingredients</label>
            <input required class="form-control" type="text" name="ingredientes" id="ingredientes">
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input required class="form-control" type="text" name="price" id="price">
          </div>
          <div class="form-group">
            <label for="section">Section</label>
            <input required class="form-control" type="text" name="section" id="section">
          </div>
          <div class="form-group">
            <label for="allergens">Allergens</label>
            <input class="form-control" type="checkbox" name="allergens" id="allergens" value="0">
          </div>
          <button type="submit" class="btn btn-info btn-just-icon btn-sm"><i>+</i></button>
        </div>
      </form>
        <div class="table-responsive">
    <table class="table" id="tanuncios">
    <thead>
        <tr>
            <th class="text-center">Image</th>
            <th class="text-center">ID</th>
            <th class="text-center w-25">Name</th>
            <th class="text-center w-25">Ingredients</th>
            <th class="text-center">Price</th>
            <th class="text-center w-25">Seccion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menus as $item)
        <form action="{{  route('menu.edit', $item)}}" method="PATCH">
        @method('patch')
        @csrf
        <tr>
          <td class='text-center'>
              <div class="image-wrapper">
                  <img src="{{$item->url}}">
              </div>
          </td>
          <td>
              <div class='form-control-static' type="text" maxlength="100">{{$item->id}}</div>
          </td>
          <td class='text-center'>
              <div class='form-control-static' type="text" maxlength="25">{{$item->name}}</div>
          </td>
          <td class='text-center'>
              <div class='form-control-static' type="text">{{$item->ingredientes}}</div>
          </td>
          <td class='text-center'>
              <div class='form-control-static' type="text">{{$item->price}}</div>
          </td>
          <td class='text-center'>
              <div class='form-control-static' type="text">{{$item->section}}</div>
          </td>
          <td class='text-center'>
          </td>
          <td class='td-actions text-right'>
              <div class='button-wrapper'>
                  <button class='btn btn-primary btn-sm' type="submit">UPDATE</button>
              </div>
              </form>
              <div class='button-wrapper'>
                  <form action="{{  route('menu.destroy', $item)  }}" method="POST">
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
