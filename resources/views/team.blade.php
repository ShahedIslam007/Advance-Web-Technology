<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
</head>
<body>
@extends('layouts.app')
    @section('content')
<h2>Here Our Teams: </h2><br>
<ul>
      @foreach($team as $t)
      <li>
          {{$t}}
      </li>
      @endforeach
</ul>
@endsection
</body>
</html>