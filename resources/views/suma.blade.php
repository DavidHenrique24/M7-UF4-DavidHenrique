<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Números</title>
</head>
<body>
    <h1>Suma de Dos Números</h1>
    <form action="/suma" method="POST">
        @csrf
        <input type="number" name="num1" placeholder="Número 1">
        <input type="number" name="num2" placeholder="Número 2">
        <button type="submit">Sumar</button>
    </form>

    <!-- Recibe el resultado de la routes web.php -->
    @if(isset($resultado))
        <h1>Resultado de la suma: {{ $resultado }}</h1>
    @endif

</body>
</html>
