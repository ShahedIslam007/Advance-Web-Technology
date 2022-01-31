<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
    <h2>Here Our Services: </h2><br>
<ul>
      @foreach($product as $p)
      <li>
          {{$p}}
      </li>
      @endforeach
</ul>
@endsection
</body>
</html>