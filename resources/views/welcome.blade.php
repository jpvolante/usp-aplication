@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplicação USP')</title>

</head>
@section('content')
<body>


    <main>
        @yield('content')
    </main>

@endsection


</body>
</html>
