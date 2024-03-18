<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <!-- Aquí puedes agregar tu CSS -->
</head>
<body>
    <h1>Carrito de Compras</h1>

    @if (!empty($carrito))
        @foreach($carrito as $curso)
            <div class="curso-card">
                <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
                <h2>{{ $curso->Curso }}</h2>
                <p>Precio: ${{ $curso->categoria }}</p>
            </div>
        @endforeach
    @else
        <p>El carrito está vacío.</p>
    @endif

</body>
</html>
