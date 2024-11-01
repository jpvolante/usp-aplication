@extends('layouts.app')

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplicação USP')</title>
    
    <style>
        body {
            background-color: #f8f9fa; 
            font-family: Arial, sans-serif; 
        }
        .container {
            margin-top: 50px; 
        }
        .main-header {
            background-color: #17a2b8; 
            color: white; 
            padding: 20px; 
            border-radius: 5px; 
            text-align: center; 
        }
        .content {
            background-color: white; 
            border-radius: 5px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
    </style>
</head>

@section('content')
<body>
    <div class="container">
        <header class="main-header">
            <h1>Bem-vindo à Aplicação USP</h1>
            <p>Explore nossos recursos e funcionalidades</p>
        </header>
    </div>

</body>
@endsection
</html>
