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
    <form action="{{ route('menu.update',$menu) }}" method="POST">
        @csrf
        <div class="form-row">
        <div class="form-group">
        <label for="url">Image</label>
        <input required class="form-control" type="text" name="url" id="url" value="{{$menu->url}}">
        </div>
        <div class="form-group">
        <label for="name">Name</label>
        <input required class="form-control" type="text" name="name" id="name" value="{{$menu->name}}">
        </div>
        <div class="form-group">
        <label for="ingredientes">Ingredients</label>
        <input required class="form-control" type="text" name="ingredientes" id="ingredientes" value="{{$menu->ingredientes}}">
        </div>
        <div class="form-group">
        <label for="price">Price</label>
        <input required class="form-control" type="text" name="price" id="price" value="{{$menu->price}}">
        </div>
        <div class="form-group">
        <label for="section">Section</label>
        <input required class="form-control" type="text" name="section" id="section" value="{{$menu->section}}">
        </div>
        <div class="form-group">
        <label for="allergens">Allergens</label>
        <input  class="form-control" type="checkbox" name="allergens" id="allergens" value="0">
        </div>
        <button type="submit" class="btn btn-info btn-just-icon btn-sm"><i>+</i></button>

    </form>
                </div>

    @include('includes.footer')
  </body>
</html>
